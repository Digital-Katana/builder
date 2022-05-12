<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Project;

class Flats extends Model
{
    use HasFactory;

    protected $table = 'flats';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floors::class,'floorID');
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(FlatPictures::class);
    }

    public function getPrice(): int
    {
        $price = 0;
        if ($this->floor->building->project->sqPrice) {
            $price = $this->floor->building->project->sqPrice;
        }
        if ($this->floor->building->sqPrice) {
            $price = $this->floor->building->sqPrice;
        }
        if ($this->floor->sqPrice) {
            $price = $this->floor->sqPrice;
        }
        if ($this->sqPrice) {
            $price = $this->sqPrice;
        }

        return $price;
    }

}
