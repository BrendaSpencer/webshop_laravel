<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
        // 'duurtijd',
        // 'moeilijkheid',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function productCategories(){
        return $this->belongsToMany(ProductCategory::class, 'category_list','product_id','category_id');
    }

    // public function ingredienten(){
    //     return $this->belongsToMany(Ingredient::class, 'ingredient_lijsts','recept_id', 'ingredient_id')->withPivot('aantal', 'eenheid');
    // }

    public function favorite(){
        return $this->belongsToMany(User::class, 'favorites');
    }
}
