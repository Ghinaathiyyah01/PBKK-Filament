<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal','barang_id','jumlah','total'];

    public function Barang(): BelongsTo{
        return $this->belongsTo(Barang::class);
    }
}