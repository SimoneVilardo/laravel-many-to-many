<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Support\Str;
use App\Models\Type;
use App\Models\Technology;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug', 'image', 'type_id', 'technology_id'];

    public function type(): BelongsTo{
        return $this->belongsTo(Type::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }

    public static function generateSlug($title){
        return Str::slug($title, '-');
    }
}