<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
         protected $table ='medicines';
             public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}