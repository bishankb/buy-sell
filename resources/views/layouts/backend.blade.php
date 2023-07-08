<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ env('APP_NAME')}} | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="#">
    <link rel="shortcut icon" href="{{ asset('/images/logo.png') }}">
    <link href="{{ mix('/css/backend.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

    @yield('backend-style')

</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        @include('backend.partials.navbar')

        @include('backend.partials.sidebar')

        <div class="content-wrapper">

            @include('backend.partials.page-header')
            
            <section class="content">
                
                @include('flash::message')

                @yield('content')

            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a href="{{ env('APP_URL')}}">{{ env('APP_NAME') }}</a>.</strong> All rights reserved.
        </footer>

    </div>

    <script src="{{ mix('/js/backend.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    @yield('backend-script')
    <script type="text/javascript">
        if($("#custom-textarea").length > 0){
            CKEDITOR.replace( 'custom-textarea', {
                removePlugins: 'sourcearea, forms, image, format, yyyy, anchor',
                extraPlugins : 'justify'
            });
        }
    </script>
</body>
</html>
