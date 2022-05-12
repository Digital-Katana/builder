<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Project;

class Floor extends Model
{
    use HasFactory;

    protected $table = 'floors';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public function project(): BelongsTo
    {
        return $this->belongsTo(Building::class,'buildingID');
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(FloorPictures::class);
    }

}
