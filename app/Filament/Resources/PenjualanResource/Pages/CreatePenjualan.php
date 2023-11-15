<?php

namespace App\Filament\Resources\PenjualanResource\Pages;

use App\Filament\Resources\PenjualanResource;
use App\Models\Barang;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePenjualan extends CreateRecord
{
    protected static string $resource = PenjualanResource::class;
    
    protected function handleRecordCreation(array $data): Model
    {
       
        Barang::find($data['barang_id'])->decrement('stok', $data['jumlah']);
        return static::getModel()::create($data);
    }
}