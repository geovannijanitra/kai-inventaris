<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merks';
    protected $primaryKey = 'idMerk';
    protected $fillable = ['kode_jenis', 'namaMerk'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'kode_jenis');
    }

    public function detailmerk()
    {
        return $this->belongsTo(Data::class, 'id_merk');
    }
}
