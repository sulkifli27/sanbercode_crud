<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul', 'isi'];

    public function pertanyaan()
    {
        return $this->hasMany(Jawaban::class);
    }
}
