<div class="icons pd">
    <!--<h3 class="title text-center">Специалисты</h1>-->
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="filter">
                    <form action="">
                        <input type="submit" class="btn btn-success" value="Поиск">
                    </form>
                </div>
            </div>
            @foreach($users as $user)
            <div class="col-xl-2 col-lg-2 col-sm-2 col-xs-4 avi-col">
                <div class="card">
                    @foreach(json_decode($user->image) as $image)
                        <div class="icon">
                            <a href="{{ url('services', $user->id) }}">
                                <img class="card-img-top" src="{{url('assets/images', $image)}}" alt="Card image cap">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>