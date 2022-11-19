<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view("admin.product.index", ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $data = [];
        $categories = ProductCategory::where('parent', 0)->get();
        foreach($categories as $category) {
            $data[$category->id] = $category->title;
        }
        return view("admin.product.create", ['categories' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reception = [];
        foreach($request->time as $time) {
            $reception[$time]['from'] = $request->from[$time];
            $reception[$time]['to'] = $request->to[$time];
        }
        $array = [];
        $images = $request->file("image");
        foreach ($images as $image) {
            $image_name = Str::random(20).".".$image->getClientOriginalExtension();
            $array[] = $image_name;
            $image->move(public_path("assets/images"), $image_name);
        }

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => json_encode($array),
            'experience' => $request->experience,
            'price' => $request->price,
            'term' => $request->term,
            'reception' => json_encode($reception)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $terms = [];
        $categories = ProductCategory::where('parent', 0)->get();
        foreach($categories as $category) {
            $terms[$category->id] = $category->title;
        }
        return view("admin.product.edit", ['data' => $data, 'categories' => $terms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //dd($request->old_image);

        $reception = [];
        foreach($request->time as $time) {
            $reception[$time]['from'] = $request->from[$time];
            $reception[$time]['to'] = $request->to[$time];
        }

        $array = [];
        $images = $request->file("image");

        if($images) {
            foreach ($images as $image) {
                $image_name = Str::random(20).".".$image->getClientOriginalExtension();
                $array[] = $image_name;
                $image->move(public_path("assets/images"), $image_name);
            }
        }
        if(isset($request->old_image)) {
            $array = array_merge($request->old_image, $array);
        }

        //dd($array);

        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->image = json_encode($array);
        $data->experience = $request->experience;
        $data->price = $request->price;
        $data->term = $request->term;
        $data->reception = json_encode($reception);

        $data->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //->delete();
    
        //return back()->with('success','Product deleted successfully');
    }
}
