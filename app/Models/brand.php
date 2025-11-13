<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name' ];
}
