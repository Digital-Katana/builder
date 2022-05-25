<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Project;

class Floors extends Model
{
    use HasFactory;

    protected $table = 'floors';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $appends = ['Renders','Blueprints'];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Buildings::class,'buildingID');
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(FloorPictures::class, 'floorID');
    }

    public function flats(): HasMany
    {
        return $this->hasMany(Flats::class, 'floorID');
    }

    public function getRendersAttribute(): Collection
    {
        return $this->pictures()->where('type','RENDER')->get();
    }

    public function getBlueprintsAttribute(): Collection
    {
        return $this->pictures()->where('type','BLUEPRINT')->get();
    }

}
