<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hair extends Model
{
    use HasFactory;

    protected $table = 'hair';

    protected $fillable = ['hair'];
}
