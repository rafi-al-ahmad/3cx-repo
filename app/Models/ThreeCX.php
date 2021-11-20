<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreeCX extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'callid',
        'historyid',
        'duration',
        'time-start',
        'time-answered',
        'time-end',
        'reason-terminated',
        'from-no',
        'to-no',
        'from-dn',
        'to-dn',
        'dial-no',
        'reason-changed',
        'final-number',
        'final-dn',
        'bill-code',
        'bill-rate',
        'bill-cost',
        'bill-name',
        'chain',
        'missed-queue-calls',
        'from-dispname',
        'to-dispname',
        'from-type',
        'to-type',
        'final-type',
        'final-dispname',
    ];
}
