<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = [
        'name',
        'email',
        'description',
        'date_time'
        
        
    ];
}
