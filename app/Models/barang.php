<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class barang extends Model
{
    use HasFactory;
    protected $fillable = ['kode_barang', 'nama_barang', 'kategori'];
    
    /**
     * Get all of the comments for the barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function masuks()
    {
        return $this->hasMany(masuk::class);
    }

    public function keluars()
    {
        return $this->hasMany(keluar::class);
    }
}
