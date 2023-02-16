<div class="navbar navbar-expand-md navbar-dark " style="background-color: #ffffff" id="navbar-mobile">
    <div class="navbar-brand">

    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block" style="color: #000000">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>
        <span class="badge bg-success ml-md-3 mr-md-auto">@lang('app.Online')</span>

        <ul class="navbar-nav">

            <li class="nav-item dropdown language-dropdown ml-1  ml-lg-0">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="flagDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/img/'.LaravelLocalization::getCurrentLocale().'.png')  }}" alt="" width="40px" height="20"> <span class="d-lg-inline-block d-none"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="flagDropdown">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            <img src="{{ asset('assets/img/'.$localeCode.'.png') }}"width="16" height="11" alt="">
                            &#xA0; {{ $properties['native'] }}
                        </a>
                    @endforeach

                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="javascript:void(0);" class="navbar-nav-link dropdown-toggle caret-0" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #000000">

                    <i class="icon-bell2"></i>
                    <span class="d-md-none ml-2">Messages</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0" id="alertsCount">0</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right " role="alert" aria-labelledby="navbarDropdownMenuLink">
                    @isset($notifications)

                    @if ($notifications->count() > 0 )


                        <a href="javascript:void(0);" class="dropdown-item" id="mark-all">
                            @lang('app.mark_all_as_read')
                        </a>
                    @else
                        <p class="dropdown-item">@lang('app.there_are_no_new_notifications')</p>
                    @endif
                    @endisset
                </div>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" style="color: #000000">
                    <img src="{{ asset('global_assets/images/username.png') }}" class="rounded-circle mr-2" height="34" alt="">

                </a>
            </li>
        </ul>
    </div>
</div>

@section('script')
    <script>
    </script>
@endsection

{{--@section('script')--}}
{{--    <script>--}}


{{--        $(function() {--}}
{{--            $(document).on('click' , '#notificationDropdown' , function(e) {--}}
{{--                e.preventDefault();--}}

{{--                // alert('Yes');--}}

{{--                var base_url = '{{ url('make/NotificationRead/') }}';--}}

{{--                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');--}}

{{--                $.ajax({--}}
{{--                    type: 'get',--}}
{{--                    url: base_url,--}}
{{--                    dataType: "json",--}}
{{--                    data: {--}}
{{--                        _token: CSRF_TOKEN,--}}
{{--                    },--}}
{{--                    success: function(data) {--}}
{{--                        $('#alertsCount').text(0);--}}
{{--                    }--}}


{{--                });--}}
{{--                console.log($('#alertsCount'));--}}
{{--            });--}}



{{--            --}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
