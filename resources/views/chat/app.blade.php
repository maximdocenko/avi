<!DOCTYPE html>
<html>
<head>
    <title>Live Video Chat PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Tailwind -->
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/rating.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/chat.css')}}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- Jquery -->
    <script
          src="https://code.jquery.com/jquery-3.6.0.min.js"
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
          crossorigin="anonymous"></script>

    <script type="text/javascript">
        const conn = new WebSocket("ws://localhost:8080?token=<?= auth()->user()->session; ?>");
    </script>

    <!-- Jquery timer -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timer.jquery/0.7.0/timer.jquery.js"></script>
          
</head>
<body>
    @include("partials.chat.alert")
    <div class="container">
        <div class="wrapper content">

            <div class="row no-gutters">
            @yield("content")
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{url('assets/js/main.js')}}"></script>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
</body>
</html>