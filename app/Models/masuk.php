<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    use HasFactory;
    protected $fillable = ['kode_masuk', 'barang_id', 'stock_masuk', 'tgl_masuk'];

    /**
     * Get the barang that owns the masuk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barang()
    {
        return $this->belongsTo(barang::class);
    }
}
