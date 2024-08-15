<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assest/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assest/css/all.css.css') }}">
    <link rel="stylesheet" href="{{ asset('assest/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset')}}/css/all.css">
    <link rel="stylesheet" href="{{ url('asset')}}/css/all.min.css">
    <link rel="stylesheet" href="{{ url('assest')}}/css/app.css">
    <link rel="stylesheet" href="{{ url('assest') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assest/css/font-awesome.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onn Admin</title>
</head>
<body>
<div class="wrapper">
        @include('admin.layout.header')
        <div class="content-wrapper" style="display: flex; ">
            @include('admin.layout.navbar') 
            @yield('home')
        </div>
    </div>
    <script src="{{ asset('assest/js/ui-admin.js') }}"></script>
</body>
</html>
