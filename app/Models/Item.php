<?php

namespace App\Models;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
//implementacion de Libreria
use Spatie\MediaLibrary\HasMedia; //Exportar
use Spatie\MediaLibrary\InteractsWithMedia; //Exportar


class Item extends Model implements HasMedia
{
    //implementando el Hasmedia
    use HasFactory, InteractsWithMedia;

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /* La relacion belongsTo esta definida en los dos modelos... User y Item
    dicha relacion nos sirve para retornar el item de x usuario
    o el usuario de x item por eso la relacion se define en los 2 modelos
    */

    public function Collection(): HasMany
    {
        return $this->hasMany(Collection::class);
    }





}