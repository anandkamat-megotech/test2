<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductData extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'productName',
        'categoryId',
        'attributeId'      
    ];


}
