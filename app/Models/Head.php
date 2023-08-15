<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;
    protected $table = 'hois';
    protected $fillable = [
        'name',
        'institute',
        'type',
        'designation',
        'education',
        'flag',
    ];
}
