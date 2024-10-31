<?php

namespace App\Filament\Resources\DiseaseDetectionsResource\Pages;

use App\Filament\Resources\DiseaseDetectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiseaseDetections extends EditRecord
{
    protected static string $resource = DiseaseDetectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
