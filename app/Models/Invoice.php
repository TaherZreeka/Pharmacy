<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
      protected $table ='invoices';
      public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function purchases()
{
    return $this->hasMany(Purchase::class, 'invoice_id');
}
}