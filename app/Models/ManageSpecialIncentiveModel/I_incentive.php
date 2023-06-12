<?php

namespace App\Models\ManageSpecialIncentiveModel;

use App\Models\Account\Account;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class I_incentive extends Model
{
    use HasFactory;
    protected $table = 'I_incentive';
    protected $primaryKey = 'I_incentiveID';

    protected $fillable = [
        'I_applicationStatus',
        'I_bankName',
        'I_noAcc',
        'I_noAcc',
        'I_relativeName',
        'I_relativePhone',
        'I_relativeAddress',
        'I_relativeRelation',
    ];


    
    public function account()
    {
        return $this->belongsTo(Account::class, 'U_userID', 'U_userID');
    }
}

