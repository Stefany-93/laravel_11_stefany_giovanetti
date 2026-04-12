<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panino extends Model
{
    use HasFactory;

    protected $table = 'panino';

    protected $fillable = [
        'name',
        'description',
        'img',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
