<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'type', // if is cow, or other type of products
        'quantity',
        'amount',
        'discount',
        'is_discounted',
        'currency', // set currency type
        'is_active',
        'attributes', // set attributes of the is product. Eg is color, size in a stringified structure.
        "product_image",
    ];
}
