<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\Project;

class FlatPictures extends Model
{
    use HasFactory;

    protected $table = 'flats_pictures';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public function building(): BelongsTo
    {
        return $this->belongsTo(Flats::class,'flatID');
    }

}
