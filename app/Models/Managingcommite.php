<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managingcommite extends Model
{
    use HasFactory;
    protected $table = 'managing_commites';
    protected $fillable = [
        'institute_name',
        'type',
        'commity_type',
        'commity_head',
    ];
}
