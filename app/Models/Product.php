<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fibllable=[

        'name',
        'price',
        'description',
        'image',
        
        'quantity',
        'category_id',
    ];
}