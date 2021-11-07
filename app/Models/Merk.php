<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $fillable = ['merk_code', 'nama_merk', 'tahun', 'pendiri', 'negara', 'img_url'];

    protected $table = 'merk';

    public function jenis(){
        return $this->hasMany(Jenis::class, 'merk_hp', 'merk_code');
    }

}
