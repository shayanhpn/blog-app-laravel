<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>سافت انجین</title>
    <meta name="description" content="Katen - قالب وبلاگ و مجله خبری مینیمال">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    

    <!-- STYLES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/vazir-font.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" media="all">
    

</head>
<div class="m-4 col-md-3">
    @if(session()->has('success'))
        <div class="alert alert-success position-absolute rounded login-alert border-0" role="alert">
            {{session('success')}}  
        </div>
    @endif
    @if(session()->has('danger'))
        <div class="alert alert-danger position-absolute rounded login-alert border-0" role="alert">
            {{session('danger')}}  
        </div>
    @endif
</div>
<div class="site-wrapper">{{$slot}}</div>
<!-- search popup area -->
<div class="search-popup">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>
    <!-- content -->
    <div class="search-content">
        <div class="text-center">
            <h3 class="mb-4 mt-0">ESC را فشار دهید تا بسته شود</h3>
        </div>
        <!-- form -->
        <form class="d-flex search-form" action="{{route('search')}}">
            <input class="form-control me-2" type="search" placeholder="جستجو کنید و اینتر را فشار دهید ..."
                   aria-label="Search" name="search">
            <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
        </form>
    </div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>

    <!-- logo -->
    <div class="logo">
        <h3>{{optional($settings)->logo}}</h3>
    </div>

    <!-- menu -->
    <nav>
        <ul class="vertical-menu">
            <li class="{{Route::is('main-page') ? 'active' : ''}}">
                <a href="{{route('main-page')}}">صفحه اصلی</a>
            </li>
            <li class="{{Route::is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}">تماس با ما</a></li>
            <li class="{{Route::is('about') ? 'active' : ''}}"><a href="{{route('about')}}">درباره ما</a></li>
            @if (auth()->check())
            <a href="{{route('admin.dashboard')}}" class="btn btn-primary rounded-0">داشبورد</a>
            @else
            <a href="{{route('login')}}" class="btn btn-primary rounded-0">ورود / ثبت نام</a>
            @endif
        </ul>
    </nav>
</div>
<!-- JAVA SCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky-sidebar.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>