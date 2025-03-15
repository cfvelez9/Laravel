<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Type extends Model
{
    use HasFactory;
    public static array $types = ["Ingreso","Gasto"];

    /**
     * Get the type name translated.
     */
    public function getTypeName():string{
        $typeName = match ($this->id) {
                1 => 'Ingreso',
                2 => 'Gasto',
        };
        return $typeName;
    }

    /**
     * Get the data associated with the type.
     */
    public function data(): HasOne
    {
        return $this->hasOne(Data::class);
    }
}
