<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
     protected $guarded=[];
        use HasFactory;
        public function loanMember()
        {
           return $this->belongsTo(member::class, 'member_id', 'id');
        }
}
