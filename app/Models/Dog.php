<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dog extends Model
{
    use HasFactory;

    protected $table = 'dog';
    protected $fillable = ['name', 'description', 'race_id', 'size_id', 'hair_id', 'country_id'];

    public function race(): BelongsTo
    {
        return $this->belongsTo(Race::class);
    }

    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    public function hair(): BelongsTo
    {
        return $this->belongsTo(Hair::class);
    }
}
