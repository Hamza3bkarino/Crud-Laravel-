<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'RefPdt';
    public $incrementing = false;
    protected $fillable =[
        'RefPdt',
        'LibPdt',
        'Prix',
        'Qte'  ,
        'description',
        'image',
        'type',
    ];
}
