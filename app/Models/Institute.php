<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    protected $table = 'institutes';
    protected $fillable = [
        'name',
        'eiin',
        'type',
        'category',
        'sub_category',
        'district',
        'ps',
        'user',
        'ip',
        'address',
        'head',
        'asst_head',
        'clerk',
        'mobile',
        'union',
        'village',
        'area',
        'word',
        'president',
        'president_mob',
        'logo',
        'start_year',
        'end_year',
        'rating',
        'status',
        'stablish',
        'institute_creator',
        'avatar',
        'approved_for',
        'approved_shift',
        'tqty',
        'sqty',
    ];
}
