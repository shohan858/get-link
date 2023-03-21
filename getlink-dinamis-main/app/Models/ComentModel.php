<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentModel extends Model
{
    use HasFactory;
    protected $table = 'coment';
    protected $guarded = ['id'];
}
