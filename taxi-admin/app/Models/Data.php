<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;


class Data extends Model
{
    use HasFactory;

    public function type():BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function scopeFilter(Builder | QueryBuilder $query, array $filters): Builder|QueryBuilder{
        $search = $filters['search'] ?? null;
        $min_date = $filters['min_date'] ?? null;
        $max_date = $filters['max_date'] ?? null;
        $typeOption = $filters['type'] ?? null;
        $typeList = \App\Models\Type::$types;
        $type = in_array($typeOption,$typeList) ? array_search($typeOption, $typeList) + 1 : 0;

        return $query->when($search, function($query, $search){
            $query->where('description','like', '%' . $search. '%');
        })->when($min_date, function($query,$min_date){
            $query->where('date', '>=', $min_date);
        })->when($max_date, function($query,$max_date){
            $query->where('date', '<=', $max_date);
        })->when($type, function($query,$type){
           ($type == 0) ? false : $query->where('type_id', '=', $type);
        });

    }
}
