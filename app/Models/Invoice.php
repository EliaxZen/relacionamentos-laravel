<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $table = 'invoice';

    protected $fillable = [
        'description',
        'valor',
        'user_id',
        'address_id',
    ];
    use HasFactory;
}
