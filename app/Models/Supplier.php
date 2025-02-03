<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table ='suppliers';
    public function medicines()
    {
        return $this->hasMany(Medicine::class, 'supplier_id');
    }
    public function medicines_stock()
    {
        return $this->hasMany(Medicine_Stock::class, 'supplier_id');
    }
     public function purchases()
    {
        return $this->hasMany(Purchase::class, 'supplier_id');
    }
}