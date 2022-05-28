<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Project;

class Flats extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'flats';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $appends = ['Renders', 'Blueprints','Image'];

    protected $fillable = [
        'name',
        'flatNumber',
        'floorID',
        'hasBalcony',
        'isSold',
        'sqPrice',
        'roomCount',
        'balconySQM',
        'liveableSQM',
        'sumSQM',
        'compassDirection',
        'typeID',
    ];

    protected $casts = [
        'image' => 'array'
    ];

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floors::class, 'floorID');
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(FlatPictures::class, 'flatID');
    }

    public function getRendersAttribute(): Collection
    {
        return $this->pictures()->where('type', 'RENDER')->get();
    }

    public function getBlueprintsAttribute(): Collection
    {
        return $this->pictures()->where('type', 'BLUEPRINT')->get();
    }

    //mutators
    public function Image(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value,
            set: fn($value) => Storage::put(public_path('example.txt'),'example.txt')
        );
    }

}
