@extends("app")
@section("content")
<div class="services pd">
    <h3 class="title text-center">Врачи</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="filter">
                    <form action="">
                        <p><span class="filter-title">Фильтр</span></p>
                        @foreach($terms as $term)
                        <label class="filter-item" for="term-{{$term->id}}">
                            {{$term->title}}
                            <input id="term-1" type="checkbox">
                        </label>
                        @endforeach

                        <input type="submit" value="Фильтр" class="btn btn-success">
                    </form>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">
                    <div class="row">
                        @foreach($users as $user)
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-xs-6 avi-col">
                            <div class="card">
                                @foreach(json_decode($user->image) as $image)
                                    <div class="icon">
                                        <a href="{{ url('services', $user->id) }}">
                                            <img class="card-img-top" src="{{url('assets/images', $image)}}" alt="{{$user->title}}">
                                        </a>
                                    </div>
                                @endforeach
                                <a href="{{url('services', $user->id)}}" class="card-body">
                                    {{$user->title}}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
@include("partials.banner")
@endsection