<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{

    public function index()
    {
        $pertanyaan = PertanyaanModel::get_all();

        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $new_pertanyaan = PertanyaanModel::save($request->all());
        return redirect()->route('index');
    }

    public function show($id)
    {
        $pertanyaan  = PertanyaanModel::find_by_id($id);

        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id)
    {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request)
    {
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $deleted =  PertanyaanModel::destroy($id);
        return redirect()->route('index');
    }
}
