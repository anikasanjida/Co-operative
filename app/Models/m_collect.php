<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_collect extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function Memberuser()
        {
           return $this->belongsTo(User::class, 'user_id', 'id');
        }

}
