<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis';
    protected $primaryKey = 'kodeJenis';
    protected $fillable = ['kodeJenis','jenisBarang'];
    public function merk()
    {
        return $this->hasMany(Merk::class, 'kode_jenis');
    }
}
