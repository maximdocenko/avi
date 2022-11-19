<div id="alertBox" class="alert hidden">
        <img id="alertImage" src="">
        <div id="alertName"></div>
        <span id="alertMessage"></span> 
    </div>  

    <div id="callBox" class="alert hidden">
        <div class="row">
            <div class="col-sm-2">
                <img id="profileImage" class="icon" src="{{ url('assets/images', $user->image) }}">
            </div>
            <div class="col-sm-2">    
                <div id="username">username</div>
                <span class="btn btn-success">
                    <i class=" fas fa-video"></i>
                </span>
            </div>
            <div class="col-sm-4">
                <ul class="buttons">
                    <li>
                        <button class="btn btn-danger" id="declineBtn"><i class="fas fa-times"></i></button>
                    </li>
                    <li>
                        <button class="btn btn-primary" id="answerBtn"><i class="fas fa-phone"></i></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>