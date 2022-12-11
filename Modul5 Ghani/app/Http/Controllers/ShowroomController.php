<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbar = Cookie::get('navbar') ? Cookie::get('navbar') : 'primary';
        $showroom = Showroom::where('user_id', auth()->user()->id)->get();
        $jumlahMobil = Showroom::where('user_id', auth()->user()->id)->count();
        if($jumlahMobil === 0) {
            return redirect('/showroom/create');
        }
        return view('listcar', [
            'showroom' => $showroom,
            'jumlahMobil' => $jumlahMobil,
            'navbar' => $navbar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navbar = Cookie::get('navbar') ? Cookie::get('navbar') : 'primary';
        return view('add', [
            'navbar' => $navbar
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->getClientOriginalName() . '-' . auth()->user()->id. '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('images/', $image);
        Showroom::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'owner' => $request->owner,
            'brand' => $request->brand,
            'purchase_date' => $request->purchase_date,
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status
        ]);
        session()->flash('blue-notification', 'Data berhasil ditambahkan');
        return redirect('/showroom');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function show(Showroom $showroom)
    {
        $navbar = Cookie::get('navbar') ? Cookie::get('navbar') : 'primary';
        $showroom->purchase_date = date('Y-m-d');
        return view('detail', [
            'item' => $showroom,
            'navbar' => $navbar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Showroom $showroom)
    {
        $navbar = Cookie::get('navbar') ? Cookie::get('navbar') : 'primary';
        $showroom->purchase_date = date('Y-m-d');
        return view('edit', [
            'item' => $showroom,
            'navbar' => $navbar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Showroom $showroom)
    {
        if($request->file('image')) {
            Storage::delete('images/' . $showroom->image);
            $image = explode('.', $request->file('image')->getClientOriginalName())[0];
            $image = $image . '-' . auth()->user()->id . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('images/', $image);
            Showroom::where('id', $showroom->id)->update([
                'name' => $request->name,
                'owner' => $request->owner,
                'brand' => $request->brand,
                'purchase_date' => $request->purchase_date,
                'description' => $request->description,
                'image' => $image
            ]);
        } else {
            Showroom::where('id', $showroom->id)->update([
                'name' => $request->name,
                'owner' => $request->owner,
                'brand' => $request->brand,
                'purchase_date' => $request->purchase_date,
                'description' => $request->description,
            ]);
        }
        session()->flash('yellow-notification', 'Data berhasil diupdate');
        return redirect('/showroom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showroom $showroom)
    {
        Showroom::destroy($showroom->id);
        Storage::delete('image/' . $showroom->image);
        session()->flash('red-notification', 'Data berhasil dihapus');
        return redirect('/showroom');
    }
}
