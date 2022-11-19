<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/rating.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >  

</head>
<body>

<div class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('assets/images/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php 
                    $menu = [
                        'about' => 'О нас',
                        'services' => 'Услуги',
                        'cases' => 'Cases',
                        'blog' => 'Блог',
                        'contacts' => 'Контакты'
                    ];
                    foreach($menu as $k => $item) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url($k)}}"><?= $item ?></a>
                    </li>
                    <?php } ?>
                </ul>
                @if(!auth()->check())
                <ul class="navbar-nav sign">
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Войти</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Регистрация</a></li>
                </ul>
                @else
                <div class="balance">
                    <span>12.345</span> сум
                </div>
                <ul class="navbar-nav sign">
                    <li class="nav-item">
                        <a class="nav-link">{{auth()->user()->name}}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a></li>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
                @endif
                <!--<form class="form-inline my-2 my-lg-0">
                    <a href="{{url('form')}}" class="btn btn-success" type="submit">Заказать консультацию</a>
                </form>-->
            </div>
        </nav>
    </div>
</div>

@if(Request::is('services'))
@include("partials.banner", ['text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis repudiandae, error cupiditate exercitationem impedit sint commodi accusantium ipsum. Consequatur architecto incidunt doloremque nulla ducimus suscipit accusantium aperiam! Debitis, cum neque? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis repudiandae, error cupiditate exercitationem impedit sint commodi accusantium ipsum. Consequatur architecto incidunt doloremque nulla ducimus suscipit accusantium aperiam! Debitis, cum neque?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis repudiandae, error cupiditate exercitationem impedit sint commodi accusantium ipsum. Consequatur architecto incidunt doloremque nulla ducimus suscipit accusantium aperiam! Debitis, cum neque?'])
@endif

@if(!Request::is('/'))
<div class="breadcrumbs">
    <div class="container">
        <a href="{{url('/')}}">Главная</a> <!--<span>{{request()->route()->uri}}</span>-->
    </div>
</div>
@endif