<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCategory;

class ServicesController extends Controller
{
    public function index() {
        //$legals = Product::where('term', 1)->take(3)->get();
        //$doctors = Product::where('term', 2)->take(3)->get();
        $legals = User::take(3)->get();
        $doctors =  User::take(3)->get();
        return view("services", ['legals' => $legals, 'doctors' => $doctors]);
    }

    public function doctors() {
        $users = User::all();
        $terms = ProductCategory::where("parent", 2)->get();
        return view("services.category", ['users' => $users, 'terms' => $terms]);
    }

    public function lawers() {
        $users = User::all();
        $terms = ProductCategory::where("parent", 1)->get();
        return view("services.category", ['users' => $users, 'terms' => $terms]);
    }

    public function show($id) {
        $connect = User::find($id);
        $product = Product::find($id);
        $user = User::find($id);
        return view("post", ['user' => $user, 'product' => $product, 'connect' => $connect]);
    }
}
