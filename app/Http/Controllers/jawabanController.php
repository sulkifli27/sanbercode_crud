<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function create($id)
    {
        $jawaban  = JawabanModel::find_by_id($id);
        return view('jawaban.create', compact('jawaban'));
    }

    public function store(Request $request)
    {
        $new_pertanyaan = JawabanModel::save($request->all());
        return redirect()->route('index');
    }

    public function index()
    {
        $jawaban = JawabanModel::get_all();
        return view('jawaban.index', compact('jawaban'));
    }

    public function edit($id)
    {
        $jawaban = JawabanModel::find_by_id_jawaban($id);
        return view('jawaban.edit', compact('jawaban'));
    }

    public function update($id, Request $request)
    {
        $pertanyaan = JawabanModel::update($id, $request->all());
        return redirect()->route('index');
    }
    public function destroy($id)
    {
        $deleted =  JawabanModel::destroy($id);
        return redirect()->route('index');
    }
}
