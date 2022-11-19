<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;

class CandidateController extends Controller {

    public $db, $id, $sessionID;
    public function __construct() {
        $this->id = $this->ID();
        $this->session = $this->getSessionID();
    }

    public function index() {
        $user = Auth::user();
        return view("chat.index", ['user' => $user]);
    }

    public function home() {
        $user = Auth::user();
        $users = User::whereNotIn('id', [$user->id])->get();
        return view("chat.home", ['user' => $user, 'users' => $users]);
    }

    public function connect($username) {
        //session_regenerate_id();
        $_SESSION['id'] = $this->ID();
        if(!auth()->user()->session || auth()->user()->session == '') {
            $this->updateSession(Str::random(10), auth()->user()->id);
        }
        if(isset($username) && !empty($username)) {
            $user = Auth::user();
            $connect = User::where("username", $username)->first();
            $users = User::whereNotIn('id', [$user->id])->get();
            if(!$user) {
                return redirect("chat/home");
            }
        }else{
            return redirect("chat/home");
        }
        return view("chat.connect", ['connect' => $connect, 'user' => $user, 'users' => $users]);
    }

    public function ID() {
        if(Auth::check()) {
            return Auth::user()->id;
        }
    }

    public function getSessionID() {
        return session_id();
    }

    public function emailExist($email) {
        $user = User::where("email", $email)->first();
        if(!empty($user)) {
            return $user;
        }else{
            return false;
        }
    }

    public function hash($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function redirect($location) {
        header("Location: $location");
    }

    public function userData($id) {
        $id = ((!empty($id)) ? $id : $this->id);
        return User::find($id);
    }

    public function isLoggedIn() {
        return ((isset($_SESSION['id'])) ? true : false);
    }

    public function logout() {
        $_SESSION = [];
        session_destroy(); 
        session_regenerate_id();
        return redirect("/");
    } 

    public function getUsers() {
        $users = User::all();

        foreach($users as $user) {
            echo '<li class="select-none transition hover:bg-green-50 p-4 cursor-pointer select-none">
                    <a href="'.BASE_URI.$user->username.'">
                        <div class="user-box flex items-center flex-wrap">
                        <div class="flex-shrink-0 user-img w-14 h-14 rounded-full border overflow-hidden">
                            <img class="w-full h-full" src="'.BASE_URI.$user->profileImage.'">
                        </div>
                        <div class="user-name ml-2">
                            <div><span class="flex font-medium">'.$user->name.'</span></div>
                            <div></div>
                        </div>
                        </div>
                    </a>
                </li>';
        }
    }

    public function getUserByUsername($username) {
        return User::where("username", $username)->first();
    }

    public function updateSession($session, $id) {
        $user = User::find($id);
        $user->session = $session;
        $user->save();
    }

    public function getUserBySession($session) {
        return User::where("session", $session)->first();
    }

    public function updateConnection($connection, $id) {
        $user = User::find($id);
        $user->connection = $connection;
        $user->save();
    }

}