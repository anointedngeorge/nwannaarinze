<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'product',
        'quantity',
        'amount',
        'discount',
        'currency',
        'is_approved',
        'client_name',
        'client_email',
        'client_phone',
        'payment_type',
        'payment_status'
        // 'sales_date_time',
        // 'sales_date'
    ];
}
