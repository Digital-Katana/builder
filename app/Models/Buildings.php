<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Project;

class Buildings extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'buildings';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $appends = ['Renders','Blueprints'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Projects::class,'projectID');
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(BuildingPictures::class, 'buildingID');
    }

    public function floors(): HasMany
    {
        return $this->hasMany(Floors::class, 'buildingID');
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
