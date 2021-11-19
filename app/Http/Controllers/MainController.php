<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cdr_file = Storage::get('cdr.log');
        $FTPcdr_file = Storage::disk('ftp')->get('cdr.log');
        // $cdr_file = str_replace('\n','',$cdr_file);
        dd($FTPcdr_file);
        $cdrArray = explode('Call', $cdr_file);
        foreach ($cdrArray as $key => $value) {
            if ($value) {
                $cdrArray[$key] = explode(',', $value);
            }
            if ($key == 2) {
                dd($cdrArray[$key][22]);
            }
        }
        dd($cdrArray);
        // return view('home');
    }
}
//