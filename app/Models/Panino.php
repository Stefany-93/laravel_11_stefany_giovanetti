<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panino extends Model
{
    use HasFactory;

    protected $table = 'panino';

    protected $fillable = [
        'name',
        'description'
    ];
}
