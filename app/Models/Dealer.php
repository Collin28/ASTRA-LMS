<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $table = 'dealer';
    protected $fillable = ['code', 'name'];
}
