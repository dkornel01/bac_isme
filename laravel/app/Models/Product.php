<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primarykey='item_id';
    protected $fillable=[
        'type_id',
        'date',
        ];

}
