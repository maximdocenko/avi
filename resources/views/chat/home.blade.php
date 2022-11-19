@extends("chat.app")
@section("content")
    
    @include('partials.chat.sidebar', ['user' => $user, 'users' => $users])

    <div class="col-sm-10">
        <div id="profile" class="text-center">
            <div class="profile-inner">
                <img class="ava" src="{{ url('assets/images', $user->image) }}">
                <h3 class="title">Keep your webcam connected</h3>
                <p>This is app allow users to video chat with other users.</p>
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


