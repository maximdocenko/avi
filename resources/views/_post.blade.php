@extends("app")
@section("content")
    
    <div class="container pd">
        <div class="row">
            <div class="col-sm-9">
                <div class="content">
                    <div class="row">
                        <div class="col-4">
                            @foreach(json_decode($user->image) as $image)
                                <div class="icon">
                                    <img class="card-img-top" src="{{url('assets/images', $image)}}" alt="{{$user->title}}">
                                </div>
                            @endforeach
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                            </div>
                        </div>
                        <div class="col-8">
                            <h3 class="title text-left">{{$user->title}}</h3>
                            <!--<p><strong>{{$main_terms[$user->term]}}</strong></p>-->
                            <p><strong>Стаж: </strong>{{$user->experience}}</p>
                            <p class="inline-childs"><strong>Цена: </strong> <span class="btn btn-success">{{number_format($user->price, 0, ".", ".")}} сум</span></p>
                            {!! $user->description !!}
                        </div>
                        <div class="col-12">
                            {!! $user->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="content">
                    <p><strong>Адрес</strong></p>
                    <p>г.Ташкент Алмазарский район ул Шифокорлар 2</p>
                    <p><strong>Дни приема</strong></p>
                    @foreach(json_decode($user->reception) as $key => $value)
                        <p>{{$week_days[$key]}} с {{$value->from}} до {{$value->to}}</p>
                    @endforeach
                    <a href="{{url('form')}}?userId={{$user->id}}" class="btn btn-success" type="submit">Заказать консультацию</a>
                </div>
            </div>
            
        </div>        
    </div>
@endsection