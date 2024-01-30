<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_users',
        'id_kamar',
        'status',
        'bukti_pembayaran',
        'tgl_pembayaran',
        'nominal',
        'updated_at',
        'created_at'
      ]; 
}
