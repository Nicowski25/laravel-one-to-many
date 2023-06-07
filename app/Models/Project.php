<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Mockery\Matcher\Type;

class Project extends Model
{
    use HasFactory;

    
    protected $fillable = ['title', 'description', 'status', 'start_date', 'end_date'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function type(): BelongsTo {
        return $this->belongsTo(Type::class);
    }
}
