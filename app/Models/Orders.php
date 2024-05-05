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
        'jumlah_transfer',
        'transfer_melalui',
        'bukti_pembayaran',
        'status',
        'confirmation_status',
    ];

    // Definisikan hubungan dengan model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
