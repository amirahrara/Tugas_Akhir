<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Data extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
