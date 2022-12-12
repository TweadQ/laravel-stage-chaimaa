<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BijouxPersonnalisable;
use Illuminate\Support\Facades\Storage;

class BijouxPersonnalisableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bijouxPersonnalisables = BijouxPersonnalisable::all();
        return view('pages.index', compact('bijouxPersonnalisables'));
    }

    public function bijouxPersonnalisable()
    {
        $bijouxPersonnalisables = BijouxPersonnalisable::all();
        return view('pages.bijouxPersonnalisable', compact('bijouxPersonnalisables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBijouxPersonnalisable()
    {
        return view('pages.createBijouxPersonnalisable');
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
                    'gravure' => 'required'
                ]);
        
                $validateImg = $request->file('url_img')->store('cover');
        
                BijouxPersonnalisable::create([
                    'url_img' => $validateImg,
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'gravure' => $request->gravure,
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
    public function show(BijouxPersonnalisable $bijouxPersonnalisable)
    {
        return view('pages.showBijouxPersonnalisable', compact('bijouxPersonnalisable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BijouxPersonnalisable $bijouxPersonnalisable)
    {
        return view('pages.editBijouxPersonnalisable', compact('bijouxPersonnalisable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BijouxPersonnalisable $bijouxPersonnalisable)
    {
        // validation form
        $request->validate([
            'url_img' => 'required|max:2000|mimes:png,jpg|image',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'price' => 'required',
            'gravure' => 'required'
        ]);

        // verify if file exist
        // if file exist delete previous img
        if ($request->hasFile('url_img')) {
            // delete previous image
            Storage::delete($bijouxPersonnalisable->url_img);
            // store the new image
            $bijouxPersonnalisable->url_img = $request->file('url_img')->store('bijouxPersonnalisables');
        }

        $bijouxPersonnalisable->update([
            'url_img' => $bijouxPersonnalisable->url_img,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'gravure' => $request->gravure,
            'updated_at' => now()
        ]);

        return redirect()
            ->route('bijouxPersonnalisables.show', $bijouxPersonnalisable->id)
            ->with('status', 'La produit a bien été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BijouxPersonnalisable $bijouxPersonnalisable)
    {
        $bijouxPersonnalisable->delete();
        return redirect()->route('home')->with('status', 'Produit supprimé!');
    }
}
