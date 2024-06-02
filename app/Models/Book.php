<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//ليلاس كحيلة

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'descripation',
        'category',
        'numbersOfBooks',
        'price',
    ];
}