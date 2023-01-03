<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryList extends Model
{
    use HasFactory;
    protected $table = 'category_lists';

    protected $fillable =[
        'product_id',
        'product_category_id'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
