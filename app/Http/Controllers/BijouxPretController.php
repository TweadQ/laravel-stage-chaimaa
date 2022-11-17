<?php

namespace App\Http\Controllers;

use App\Models\BijouxPret;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BijouxPretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bijouxPrets = BijouxPret::all();
        return view('pages.index', compact('bijouxPrets'));
    }

    public function bijouxPret()
    {
        $bijouxPrets = BijouxPret::all();
        return view('pages.bijouxPret', compact('bijouxPrets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation form
        $request->validate([
            'url_img' => 'required|max:2000|mimes:png,jpg|image',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'price' => 'required'
        ]);

        $validateImg = $request->file('url_img')->store('cover');

        BijouxPret::create([
            'url_img' => $validateImg,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'created_at' => now()
        ]);

        // redirect
        return redirect()->route('home')->with('status', 'Bijoux ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BijouxPret $bijouxPret)
    {
        return view('pages.showBijouxPret', compact('bijouxPret'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BijouxPret $bijouxPret)
    {
        return view('pages.edit', compact('bijouxPret'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BijouxPret $bijouxPret)
    {
        // validation form
        $request->validate([
            'url_img' => 'required|max:2000|mimes:png,jpg|image',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'price' => 'required',
        ]);

        // verify if file exist
        // if file exist delete previous img
        if ($request->hasFile('url_img')) {
            // delete previous image
            Storage::delete($bijouxPret->url_img);
            // store the new image
            $bijouxPret->url_img = $request->file('url_img')->store('bijouxPrets');
        }

        $bijouxPret->update([
            'url_img' => $bijouxPret->url_img,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'updated_at' => now()
        ]);

        return redirect()
            ->route('bijouxPrets.show', $bijouxPret->id)
            ->with('status', 'La produit a bien été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BijouxPret $bijouxPret)
    {
        $bijouxPret->delete();
        return redirect()->route('home')->with('status', 'Produit supprimé!');
    }
}
