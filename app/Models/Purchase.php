<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table ='purchases';
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
     public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
    public function invoice()
{
    return $this->belongsTo(Invoice::class, 'invoice_id');
}

    //  public function invoice()
    // {
    //     return $this->hasMany(Invoice::class, 'invoice_id');
    // }
}