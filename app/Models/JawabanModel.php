<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
    public static function get_all()
    {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($data)
    {
        //data _token dibuang
        unset($data["_token"]);
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }
    public static function find_by_id($id)
    {
        $jawaban = DB::table('pertanyaan')->where('id', $id)->first();
        return $jawaban;
    }
    public static function find_by_id_jawaban($id)
    {
        $jawaban = DB::table('jawaban')->where('id', $id)->first();
        return $jawaban;
    }
    public static function update($id, $request)
    {
        $jawaban = DB::table('jawaban')
            ->where('id', $id)
            ->update([

                'isi' => $request["isi"],

            ]);

        return $jawaban;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('jawaban')
            ->where('id', $id)
            ->delete();
        return $deleted;
    }
}
