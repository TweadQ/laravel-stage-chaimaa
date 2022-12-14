<?php

namespace App\Http\Controllers;

use App\Models\Vetement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VetementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vetements = Vetement::all();
        return view('pages.index', compact('vetements'));

    }

    public function Homme()
    {
        $vetements = Vetement::where('genre','homme')->paginate(8);
        return view('pages.homme', compact('vetements'));
    }

    public function Femme()
    {
        $vetements = Vetement::where('genre','femme')->paginate(8);
        return view('pages.femme', compact('vetements'));
    }

    public function Enfant()
    {
        $vetements = Vetement::where('genre','enfant')->paginate(8);
        return view('pages.enfant', compact('vetements'));
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
        // dd($request->all());
        // validation form
        $request->validate([
            'url_img' => 'required|max:2000|mimes:png,jpg|image',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'price' => 'required',
            'genre' => 'required',
            // 'size' => 'required|array',
            // 'size.*' => '',
        ]);

        $sizeToString= implode(" | ", $request->size);

        $validateImg = $request->file('url_img')->store('cover');
        // dd($request->all());
        Vetement::create([
            'url_img' => $validateImg,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'genre' => $request->genre,
            'size' => $sizeToString,
            'created_at' => now()
        ]);

        // redirect
        return redirect()->route('home')->with('status', 'V??tement ajout??');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vetement $vetement)
    {
        return view('pages.show', compact('vetement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vetement $vetement)
    {
        return view('pages.edit', compact('vetement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vetement $vetement)
    {
        // validation form
        $request->validate([
            'url_img' => 'required|max:2000|mimes:png,jpg|image',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'price' => 'required',
            'genre' => 'required',
            'size' => 'required'
        ]);

        // verify if file exist
        // if file exist delete previous img
        if ($request->hasFile('url_img')) {
            // delete previous image
            Storage::delete($vetement->url_img);
            // store the new image
            $vetement->url_img = $request->file('url_img')->store('vetements');
        }

        $vetement->update([
            'url_img' => $vetement->url_img,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'genre' => $request->genre,
            'size' => $request->size,
            'updated_at' => now()
        ]);

        return redirect()
            ->route('vetements.show', $vetement->id)
            ->with('status', 'La produit a bien ??t?? modifi??!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vetement $vetement)
    {
        $vetement->delete();
        return redirect()->route('home')->with('status', 'Produit supprim??!');
    }
}
