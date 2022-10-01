<?php

namespace App\Http\Controllers;

use App\Models\PersonRecord;
use Illuminate\Http\Request;

class PersonRecordController extends Controller
{
    public function index()
    {
        return view('person-record.index', [
            'personRecords' => PersonRecord::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:person_records'],
            'message' => ['required'],
        ]);

        PersonRecord::query()->create($request->only(['name', 'email', 'message']));

        return redirect()
            ->route('person-record.index')
            ->with('new-person-record-email', $request->input('email'));
    }
}
