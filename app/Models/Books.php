<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table="Books";
    protected $fillable = [
        'title',
        'number_of_pages',
        'release_date',
    ];
}
