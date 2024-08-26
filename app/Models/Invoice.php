<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $table = 'invoice';

    protected $fillable = [
        'description',
        'valor',
        'address_id',
        'user_id',
    ];

    protected $hidden = [
        'address_id',
        'user_id',
    ];

    public function address(){
        return $this->hasOne(Address::class, 'id', 'address_id');
    }
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
