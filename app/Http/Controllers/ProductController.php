<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductController extends Controller
{
    public function authentification(Request $request){
        $login=$request->input('Login');
        $password=$request->input('password');
        $user = DB::table('userspage')->where('login', $login)->first();
        if ($user && $user->password === $password) {
            return view('hellopage',['name'=>$login]);
        }else{
            return redirect('/')->with('error', "Authentication failed");

        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_tables=Product::all();
        return view('tableOfproducts',['all_tables'=>$all_tables]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $confirm=$request->validate([
        //     'RefPdt'=>'required|max:200',
        //     'LibPdt'=>'required|max:200',
        //     'Prix ' =>'required|max:200',
        //     'Qte'   =>'required|max:200',
        //     'description'=>'required|max:200',
        //     'image'=>'required|mimes:png,jpg,jpeg,webp',
        //     'type '=>'required |max:200',
        // ]);
        $test=[
            'RefPdt'=>$request['RefPdt'],
            'LibPdt'=>$request['LibPdt'],
            'Prix'=>$request['Prix'],
            'Qte'=>$request['Qte'],
            'description'=>$request['description'],
            'image'=>$request['image'],
            'type'=>$request['type'],
        ];
        if($request->hasFile('image')){
            $test['image']=$request->file('image')->store('images','public');
        }
        Product::create($test);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $RefPdt)
    {
        $data=Product::where('RefPdt',$RefPdt)->get();
        return view('show',['product'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $RefPdt)
    {
        $data= Product::where('RefPdt',$RefPdt)->get();
        return view('edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $RefPdt)
    {
        $dataedit = Product::where('RefPdt', $RefPdt)->get(); // Fetching a collection of records
        $dataedit[0]->update($request->all());
        return redirect('/products');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $RefPdt)
    {
        $productDeleted = Product::findOrFail($RefPdt);
        $productDeleted->delete();
        return redirect('/products');
    }
}
