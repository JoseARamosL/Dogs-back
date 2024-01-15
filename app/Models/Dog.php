<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $table = 'dog';
    protected $fillable = ['name', 'description', 'race_id', 'size_id', 'hair_id', 'country_id'];
}
