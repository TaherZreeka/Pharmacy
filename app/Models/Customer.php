<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
     protected $table ='customers';
   public function invoice()
    {
        return $this->hasMany(Invoice::class, 'customer_id');
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'customer_id');
    }
}