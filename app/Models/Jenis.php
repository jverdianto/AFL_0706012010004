<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $fillable = ['nama_hp', 'size', 'camera', 'ram', 'storage', 'battery', 'merk_hp', 'img_url'];

    protected $table = 'jenis';

    public function merk(){
        return $this->belongsTo(Merk::class, 'merk_hp', 'merk_code');
    }

}
