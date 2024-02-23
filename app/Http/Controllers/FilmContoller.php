<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmContoller extends Controller
{
    public function index()
    {
        $film = Film::get();
        return view('film.index', compact('film'));
    }

    public function create()
    {
        return view('film.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'description' => 'required|max:225|string',
            'is_active' => 'sometimes'
        ]);

        Film::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect('film/create')->with('status', 'Berhasil Update Film');
    }

    public function edit(int $id) 
    {
        $film = Film::findOrFail($id);
        return view('film.edit', compact('film'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:225',
            'description' => 'required|max:225|string',
            'is_active' => 'sometimes'
        ]);

        Film::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()->back()->with('status', 'Berhasil Update Film');
    }

    public function destroy(int $id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->back()->with('status', 'Berhasil Hapus Film');
    }

}
