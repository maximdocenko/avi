@extends("app")
@section("content")
@include("partials.slider")

<br>

@include("partials.icons", ["users" => $users])

<br>

@include("partials.banner")

<div class="news pd">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col">
                <div class="card">
                    <img class="card-img-top" src="assets/images/home-5-268x182.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-date">Январь 23 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col">
                <div class="card">
                    <img class="card-img-top" src="assets/images/home-6-268x182.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-date">Январь 23 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col">
                <div class="card">
                    <img class="card-img-top" src="assets/images/home-7-268x182.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-date">Январь 23 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-4 col-xs-6 avi-col">
                <div class="card">
                    <img class="card-img-top" src="assets/images/home-8-268x182.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-date">Январь 23 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
