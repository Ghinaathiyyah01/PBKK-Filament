<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kategori_id', 'supplier_id', 'harga', 'stok'];

    public function Kategori(): BelongsTo{
        return $this->belongsTo(Kategori::class);
    }

    public function Supplier(): BelongsTo{
        return $this->belongsTo(Supplier::class);
    }
}