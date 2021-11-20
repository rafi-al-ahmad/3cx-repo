<?php

namespace App\Http\Controllers;

use App\Models\ThreeCX;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{

    protected $orderArray = [
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
        // 'from-type',
        // 'to-type',
        // 'final-type',
        // 'final-dispname',
        '',
        '',
        '',
        '',
        '',
        '',
    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $maxCallId = ThreeCX::max('callid');
        // $FTPcdr_file = Storage::disk('ftp')->get('cdr1.log');
        $FTPcdr_file = Storage::get('cdr.log');
        $cdrArray = explode('Call ', $FTPcdr_file);
        // dd($cdrArray);
        $c = 0;
        foreach ($cdrArray as $key => $value) {
            if ($value) {
                $cdrArray[$key] = explode(',', $value);
            }
        }
        $data = [];
        
        foreach ($cdrArray as $recKey => $record) {
            if (is_array($record)) {

                $temp = [];
                foreach ($record as $key => $value) {
                    if ($value != '' && $value != "\n\n") {
                        $temp[$this->orderArray[$key]] = $value;

                        if ($this->orderArray[$key] == 'callid') {
                            $temp[$this->orderArray[$key]] = str_replace(' ', '', $value);
                        }
                    }
                }
                $data[] =$temp;
                if (isset($temp['callid']) && (int) $temp['callid']) {
                    if ($maxCallId) {
                        if ($temp['callid'] > $maxCallId) {
                            ThreeCX::create($temp);
                        }
                    } else {
                        ThreeCX::create($temp);
                    }
                } 
            }
        }
        // dd($data);
        dd('done!');
        // return view('home');
    }
}
//