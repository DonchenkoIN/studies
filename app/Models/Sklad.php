<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sklad extends Model
{
    use HasFactory;

    protected $table = 'sklads';

    protected $guarded = false;
}
