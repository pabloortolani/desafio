<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'type_id', 'id');
    }
}
