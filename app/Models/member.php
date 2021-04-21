<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class member extends  Authenticatable
{
    protected $guarded=[];
    use HasFactory;
    public function Memberuser()
        {
           return $this->belongsTo(User::class, 'user_id', 'id');
        }
}
