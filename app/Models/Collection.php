<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use HasFactory;

    //prueba de fillable
    protected $fillable =[
        'name'
    ];
    public function Item(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}