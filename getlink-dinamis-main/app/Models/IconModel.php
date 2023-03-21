<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconModel extends Model
{
    use HasFactory;
    protected $table = 'icons';
    protected $guarded = ['id'];
}
