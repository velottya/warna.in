<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'catatan',
        'tanggal_transfer',
        'total_pembelian',
        'jumlah_transfer',
        'transfer_melalui',
        'bukti_pembayaran',
        'confirmation_status'
    ];

    // Definisikan hubungan one-to-one dengan model Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
