<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsPictures extends Model
{
    use HasFactory;

    protected $table = 'projects_pictures';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class,'projectID');
    }

}
