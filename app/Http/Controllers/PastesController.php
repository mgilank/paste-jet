<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasteRequest;
use App\Models\Paste;

class PastesController extends Controller
{
    public function post(PasteRequest $request)
    {
        $paste = Paste::fromRequest($request);

        return redirect()->route('show', $paste->hash);
    }

    public function show(Paste $paste)
    {
        return view('show', compact('paste'));
    }

    public function raw(Paste $paste)
    {
        return view('raw', compact('paste'));
    }

    public function edit(Paste $paste)
    {
        return view('edit', compact('paste'));
    }

    public function fork(PasteRequest $request, Paste $paste)
    {
        $paste = Paste::fromFork($paste, $request);

        return redirect()->route('show', $paste->hash);
    }

    public function delete(Paste $paste){
       
        $res = Paste::where('hash', $paste->hash)->delete();
        return redirect('/')->with(['success' => 'Telah terhapus sudah T_T']);
    }
}
