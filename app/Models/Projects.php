<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $appends = ['Renders','Blueprints'];

    public function buildings(): HasMany
    {
        return $this->hasMany(Buildings::class,'projectID');
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(ProjectPictures::class,'projectID');
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
