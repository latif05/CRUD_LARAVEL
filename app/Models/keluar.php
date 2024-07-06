<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    use HasFactory;
    protected $fillable = ['kode_keluar', 'barang_id', 'stock_keluar', 'tgl_keluar'];

    /**
     * Get the barang that owns the keluar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barang()
    {
        return $this->belongsTo(barang::class);
    }

}
