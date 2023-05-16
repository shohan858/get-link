<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollabModel extends Model
{
    use HasFactory;
    protected $table = 'collab';
    protected $guarded = ['id'];
}
