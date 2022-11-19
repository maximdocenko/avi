<div class="col-sm-2 text-center">
        <img class="icon" src="{{ url('assets/images', $user->image) }}">
        <p><?= $user->name; ?><p>
        <br>
        <ul class="users">
            @foreach($users as $user)
                <li class="text-left">
                    <a href="{{url('chat/home', $user->username)}}">
                        <img class="small" src="{{ url('assets/images', $user->image) }}"> {{$user->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>