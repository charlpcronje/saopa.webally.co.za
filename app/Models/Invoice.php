<?php
// app/Models/Invoice.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'user_id',
        'payment_date',
        'invoice_date',
        'vat',
        'discount',
        'sub_total',
        'total',
    ];

    protected $dates = [
        'payment_date',
        'invoice_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}