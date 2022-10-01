@extends('layouts.base')

@section('title', 'Emails List')

@section('content')
    <header>
        <h1>Emails List</h1>
    </header>

    <main>
        <section>
            <h2>Add a new record</h2>
            <x-person-record.create-form />
        </section>

        <section>
            <h2>A list of records</h2>
            <x-person-record.list :person-records="$personRecords" />
        </section>
    </main>
@endsection
