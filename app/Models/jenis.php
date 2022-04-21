<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table = 'jenis';
    protected $primaryKey = 'kodeJenis';
    protected $fillable = ['kodeJenis', 'namaJenis'];
    public function merks()
    {
        return $this->hasMany(merk::class, 'kode_jenis');
    }
}
