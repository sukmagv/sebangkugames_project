<?php

namespace App\Http\Controllers;

use App\Models\Makeup;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Di Controller Anda
    public function index()
    {
        // Mengambil jumlah produk
        $jumlahProduk = Makeup::count();

        // Mengambil jumlah user
        $jumlahUser = User::where('name', '!=', 'admin')->count();

        // Mengambil jumlah produk aktif
        $jumlahProdukAktif = Makeup::where('status', 1)->count();

        // Mengambil jumlah user aktif
        $jumlahUserAktif = User::where('status', 1)->where('name', '!=', 'admin')->count();

        // Mengambil 10 produk terbaru
        $produkTerbaru = Makeup::orderBy('created_at', 'desc')->take(10)->get();

        return view('dashboard', compact('jumlahProduk', 'jumlahUser', 'jumlahProdukAktif', 'jumlahUserAktif', 'produkTerbaru'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
