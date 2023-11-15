<?php

namespace App\Filament\Resources\BarangResource\Pages;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\BarangResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBarang extends CreateRecord
{
    protected static string $resource = BarangResource::class;
 
    protected function handleRecordCreation(array $data): Model
    {
        return static::getModel()::create($data);
    }
}