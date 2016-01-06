<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <title>Uvis - @yield('title')</title>

    {!! HTML::style('css/admin-all.css') !!}
    @yield('css')

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

@include('partials.admin.menu')

<div class="container-fluid">
    <div class="row" style="margin-right: 0">
        <div class="col-sm-3 col-md-2 sidebar" style="padding-top: 0">
            <ul class="nav nav-sidebar">
                <li class="active">{!! HTML::link('/admin','Dashboard') !!}</li>
                <li>{!! HTML::link('/bedrijfsprofiel','Bedrijfsprofielen') !!}</li>
                <li>{!! HTML::link('/vacature','Vacatures') !!}</li>
            </ul>
        </div>
        @yield('content')
    </div>
</div>

<!-- /#wrapper -->

{!! HTML::script('js/admin-all.js') !!}
<script>
    Ladda.bind( 'button[type=submit]' );
</script>
@if(Session::has('flash_notification.message'))
    <script>
        @if(Session::get('flash_notification.level') == 'danger')
            toastr.error('{{ Session::get('flash_notification.message') }}');
        @else
            toastr.{{ Session::get('flash_notification.level') }}('{{ Session::get('flash_notification.message') }}');
        @endif
    </script>
@endif
@yield('js')

</body>

</html>