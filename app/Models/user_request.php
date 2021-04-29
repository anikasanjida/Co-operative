<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_request extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function userreq()
    {
       return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
