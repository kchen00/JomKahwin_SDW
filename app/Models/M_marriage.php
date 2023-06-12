<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;


class M_marriage extends Model
{
    use HasFactory;

    protected $table = 'M_marriage';


    public function account()
    {
        return $this->belongsTo(Account::class, 'M_partnerIC', 'A_icNum');
    }
}
