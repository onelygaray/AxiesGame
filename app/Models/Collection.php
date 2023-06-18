<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Collection extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'user_id'
    ];

    public function likes() :Morphmany  {
        return $this->morphMany(like::class,'likeable');
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}

