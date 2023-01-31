<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'detail',
        'amount',
        'registry_date',
        'type_id'
    ];
    public function types(){
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function scopeByBetweenDate($query, $dateFrom, $dateTo)
    {
        if (!empty($dateFrom) && !empty($dateTo)) {
            $query->whereBetween('registry_date', [$dateFrom, $dateTo]);
        }
    }
}
