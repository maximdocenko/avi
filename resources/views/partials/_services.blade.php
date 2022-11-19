<div class="services pd">
    <!--<h3 class="title text-center">Услуги</h1>-->
    <div class="container">
        
        <div class="row">
            @foreach($doctors as $doctor)
            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col">
                <div class="card">
                    @foreach(json_decode($doctor->image) as $image)
                        <div class="icon">
                            <a href="{{ url('services', $doctor->id) }}">
                                <img class="card-img-top" src="{{url('assets/images', $image)}}" alt="{{$doctor->title}}">
                            </a>
                        </div>
                    @endforeach
                    <a href="{{url('services', $doctor->id)}}" class="card-body">
                        {{$doctor->title}}
                    </a>
                </div>
            </div>
            @endforeach
            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col avi-services">
                <div class="card">
                    <div class="services-intro">
                        <h3>Врачи</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate inventore necessitatibus nemo possimus suscipit, upiditate inventore necessitatibus nemo possimus rem suscipit!</p>
                        <a href="{{url('services/doctors')}}" class="btn btn-success">Показать всех</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col avi-services">
                <div class="card">
                    <div class="services-intro">
                        <h3>Юристы</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate inventore necessitatibus nemo possimus suscipit, upiditate inventore necessitatibus nemo possimus rem suscipit!</p>
                        <a href="{{url('services/lawers')}}" class="btn btn-success">Показать всех</a>
                    </div>
                </div>
            </div>
            
            @foreach($legals as $legal)
            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col">
                <div class="card">
                    @foreach(json_decode($legal->image) as $image)
                        <div class="icon">
                            <img class="card-img-top" src="{{url('assets/images', $image)}}" alt="{{$doctor->title}}">
                        </div>
                    @endforeach
                    <a href="{{url('services', $legal->id)}}" class="card-body">
                        {{$legal->title}}
                    </a>
                </div>
            </div>
            @endforeach
           
            
        </div>
    </div>
</div>