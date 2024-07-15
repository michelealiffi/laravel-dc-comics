<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('index', ['comics' => $comics]);
    }
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
        ]);

        Comic::create($data);

        return redirect()->route('index');
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
        ]);

        $comic->update($data);

        return redirect()->route('index');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('index');
    }
}
