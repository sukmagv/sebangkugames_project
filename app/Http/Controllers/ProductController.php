<?php

namespace App\Http\Controllers;

use App\Models\Makeup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = DB::table('makeups')->orderby('id')->get();
        return view ('product.product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image',
            'status'  => 'boolean',
        ]);
        $data = $request->file('image')->store('images','public');
        $status = $request->has('status');

        Makeup::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $data,
            'status' => $status,
        ]);

        return redirect()->route('product')->with('success');
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
        $product = Makeup::find($id);
        return view ('product.edit', compact('product'));
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
        $product = Makeup::find($id);

        if($request->has('name') && !is_null($request->name)) {
            $product->name = $request->name;
        }

        if($request->has('price') && !is_null($request->price)) {
            $product->price = $request->price;
        }

        if($request->file('image')){
            // upload image
            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());

            // delete old image
            Storage::delete('public/images/'. $product->image);

            // update post data image
            $product->update([
                'image' => $image->hashName(),
            ]);
        }

        if($request->has('status')) {
            $product->status = $request->status == 1 ? true : false;
        }

        $product->save();
        return redirect()->route('product')->with('success');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Makeup::where('id', '=', $id)->delete();
        return redirect()->route('product')
            ->with('success', 'Product Berhasil Dihapus');
    }
}
