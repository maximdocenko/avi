@extends("chat.app")
@section("content")
    
    @include('partials.chat.sidebar', ['user' => $user, 'users' => $users])

    <div class="col-sm-10">
        <div id="profile" class="text-center">
            <div class="profile-inner">
                <img class="ava" src="{{ url('assets/images', $connect->image) }}">
                <h3 class="title"><?= $connect->name ?></h3>
                <p>Do you want to make a Call?</p>
                <button class="btn btn-primary" id="callBtn" data-user="<?= $connect->id ?>"><i class="fas fa-video"></i></button>
            </div>
        </div>
        <div id="video" class="hidden">
            <video id="remoteVideo" style="width:100%;" autoplay playinline></video>
            <video id="localVideo" autoplay playinline></video>
            <span id="callTimer"></span>
            <button class="btn btn-danger" id="hangupBtn">
                <i class="fas fa-video-slash"></i> 
            </button>
        </div>
    </div>

@endsection