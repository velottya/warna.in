<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'full_name',
        'address',
        'phone_number',
        'note',
        'total_price',
        'status'
    ];

    // Definisikan hubungan one-to-one dengan model Transaction
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    // Definisikan hubungan one-to-many dengan model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
