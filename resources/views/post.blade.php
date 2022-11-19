@extends("app")
@section("content")

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/rating.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/chat.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <script
          src="https://code.jquery.com/jquery-3.6.0.min.js"
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
          crossorigin="anonymous"></script>

    <script type="text/javascript">
        const conn = new WebSocket("ws://localhost:8080?token=<?= auth()->user()->session; ?>");
    </script>

    <!-- Jquery timer -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timer.jquery/0.7.0/timer.jquery.js"></script>
    @include("partials.chat.alert")
    <div class="container pd">
        <div class="row">

            <div class="col-sm-10">
                
                <div id="video" class="hidden">
                    <video id="remoteVideo" style="width:100%;" autoplay playinline></video>
                    <video id="localVideo" autoplay playinline></video>
                    <span id="callTimer"></span>
                    <button class="btn btn-danger" id="hangupBtn">
                        <i class="fas fa-video-slash"></i> 
                    </button>
                </div>
            </div>
            
            <div class="col-sm-9">
                <div class="content">
                    <div class="row">
                        <div class="col-4">
                            
                                <img class="card-img-top" src="{{url('assets/images', $user->image)}}" alt="{{$user->title}}">
                            
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                            </div>
                        </div>
                        <div class="col-8">
                            <h3 class="title text-left">
                                {{$user->name}}
                                <button class="btn btn-primary" id="callBtn" data-user="<?= $connect->id ?>"><i class="fas fa-video"></i></button>
                            </h3>
                            <!--<p><strong>{{$main_terms[$product->term]}}</strong></p>-->
                            <p><strong>Стаж: </strong>{{$product->experience}}</p>
                            <p class="inline-childs"><strong>Цена: </strong> <span class="btn btn-success">{{number_format($product->price, 0, ".", ".")}} сум</span></p>
                            {!! $product->description !!}
                        </div>
                        <div class="col-12">
                            {!! $product->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="content">
                    <p><strong>Адрес</strong></p>
                    <p>г.Ташкент Алмазарский район ул Шифокорлар 2</p>
                    <p><strong>Дни приема</strong></p>
                    @foreach(json_decode($product->reception) as $key => $value)
                        <p>{{$week_days[$key]}} с {{$value->from}} до {{$value->to}}</p>
                    @endforeach
                    <a href="{{url('form')}}?userId={{$user->id}}" class="btn btn-success" type="submit">Заказать консультацию</a>
                </div>
            </div>
            
        </div>        
    </div>
    <script type="text/javascript" src="{{url('assets/js/main.js')}}"></script>
    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
@endsection