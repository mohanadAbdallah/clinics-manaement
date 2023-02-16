<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'layouts.app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    private function getTranslationFile($code)
    {
        $jsonString = [];
        if (File::exists(base_path('vue-i18n-locales.generated/'.$code.'.json'))) {
            $jsonString = file_get_contents(base_path('lang/'.$code.'.json'));
            $jsonString = json_decode($jsonString, true);
        }

        return $jsonString;
    }

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'user.roles' => $request->user() ? $request->user()->roles->pluck('name') : [],
            'user.permissions' => $request->user() ? $request->user()->getPermissionsViaRoles()->pluck('name') : [],

            'flash'=>[
                'message'=>session('message')
            ],
            'user'=>[
                'id'=>Auth::user()->id ?? null ,
                'name'=>Auth::user()->name ?? null ,
                'email'=>Auth::user()->email ?? null,
                'image'=>Auth::user()->image ?? null,
            ],
            'content' => $this->getTranslationFile(session()->get('locale') ?? 'en'),

        ]);
    }
}
