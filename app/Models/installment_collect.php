<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class installment_collect extends Model
{
    protected $guarded=[];
    protected $table = 'loan_transaction';
    use HasFactory;
    public function transactionUserReq()
    {
        return $this->belongsTo(user_request::class, 'loan_id', 'id');
    }
    public function transactionUserName()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
