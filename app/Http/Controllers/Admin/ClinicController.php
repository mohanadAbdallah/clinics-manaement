<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClinicRequest;
use App\Http\Resources\ClinicResource;
use App\Models\Clinic;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ClinicController extends Controller
{

    public function index()
    {
        $clinics = Clinic::orderBy('id', 'ASC')
            ->paginate(3);
        return Inertia::render('Clinics/Index', [
            'clinics' => $clinics
        ]);
    }


    public function create()
    {
        return inertia('Clinics/Create');
    }

    public function store(ClinicRequest $request)
    {
        $clinic = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'password' => ['required'],
            'city' => ['required'],
            'images' => ['required'],
            'logo' => ['required']
        ]);
        $images = [];
        $logo = null;

        foreach ($clinic['images'] as $image) {
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);

            array_push($images,$imageName);
        }
        $logoName = $request->logo->getClientOriginalName();
        $request->logo->storeAs('public/logos', $logoName);

        $clinic['images'] = $images;
        $clinic['logo'] = $logoName;

        Clinic::create($clinic);

        return redirect()->route('clinics.index')
            ->with('message', 'New clinic created Successfully');
    }

    public function show(Clinic $clinic)
    {
        $clinic = new ClinicResource($clinic);
        return inertia('Clinics/show', compact('clinic'));
    }

    public function edit(Clinic $clinic)
    {
        return inertia('Clinics/edit', compact('clinic'));
    }

    public function update(ClinicRequest $request, Clinic $clinic)
    {
        $clinic->update($request->validated());
        return redirect()->route('clinics.index')
            ->with('message', 'Clinic Updated Successfully');
    }

    public function destroy(Clinic $clinic)
    {
       if(is_array($clinic->images) || is_object($clinic->images)){
           foreach ($clinic->images as $image){
               if(file_exists("storage/images/".$image)){
                   unlink("storage/images/".$image);
               }
           }
       }
        $clinic->delete();
        return to_route('clinics.index')
            ->with('message', 'Clinic deleted Successfully');
    }

}
