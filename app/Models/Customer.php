<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'user_id',
        'phone',
        'born',	
        'gender',	
        'qr_token',	
    ];

    public function user(){
        return $this->belongsTo(Product_categorie::class, 'user_id');
    }
    
}
