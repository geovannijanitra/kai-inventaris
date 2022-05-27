<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'idBarang';
    protected $fillable = [
        'kode_jenis',
        'id_merk',
        'series',
        'serialNumber',
        'tanggalPengadaan',
        'spek',
        'ket',
        'lokasi',
        'status',
        'noInventory',
        'pengguna',
    ];

    public function detailjenis()
    {
        return $this->belongsTo(Jenis::class, 'kode_jenis');
    }

    public function detailmerk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }

}
