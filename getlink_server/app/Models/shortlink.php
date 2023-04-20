<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shortlink extends Model
{
    use HasFactory;
    
    protected $fillable = ['code','link','id_user'];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
