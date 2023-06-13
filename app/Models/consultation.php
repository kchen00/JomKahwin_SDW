<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class consultation extends Model
{
    use HasFactory;

    protected $table = 'A_account';
    protected $primaryKey = 'A_accountID';

    protected $fillable = [
        'A_icNum',
    ];
}

class ApplicationRecord extends Model
{
    protected $table = 'CO_consultation';
    protected $primaryKey = 'CO_consultationID';
    protected $fillable = [
        'A_icNum',
        'M_partnerIC',
        'spouse_name',
        'aduan_date',
        'CO_applicationStatus',
    ];
}

class applyConsultation extends Model
{
    protected $fillable = [
        'CO_purpose',
        'CO_paidChoice',
        'A_icNum',
        'A_name',
        'A_houseAddress',
        'A_telephoneNum',
    ];
}