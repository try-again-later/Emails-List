<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonRecordController extends Controller
{
    public function index()
    {
        return view('person-record.index');
    }

    public function create()
    {
        return redirect()->route('person-record.index');
    }
}
