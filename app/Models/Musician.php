<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Musician extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "musicians";
    protected $fillable = [
        "name",
        "profile_picture",
        "birth_date",
        "instrument",
        "biography"
    ];
}
