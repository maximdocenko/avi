<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea.form-control',
            plugins: [
                'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
                'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
                'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>

    <style>
        .tox.tox-silver-sink.tox-tinymce-aux {
            display: none;
        }
    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{url('assets/js/scripts.js')}}"></script>
</head>
<body>

<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index.html"><img src="{{ url('assets/images/logo.png') }}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu" class="metismenu">

        <h4 class="menu-text"><span>Специалисты</span> <i class="fas fa-ellipsis-h"></i> </h4>
        <li class="">
            <ul class="mm-collapse">
                <li><a href="{{route('product.index')}}">Специалисты</a></li>
                <li><a href="{{route('product_category.index')}}">Категории</a></li>
                <li><a class="nav-link" href="{{ route('users.index') }}">Пользователи</a></li>
                <li><a class="nav-link" href="{{ route('roles.index') }}">Роли</a></li>
            </ul>
        </li>
    </ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

    <div class="container-fluid g-0">

        <div class="header_iner d-flex justify-content-between align-items-center">

        </div>

        <div class="white_card mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">{{__("messages.test")}}</h3>
                    </div>
                </div>
            </div>

            <div class="white_card_body">

                @yield("content")

            </div>
        </div>

    </div>

</section>

</body>
</html>
