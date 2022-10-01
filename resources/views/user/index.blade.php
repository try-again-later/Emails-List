@extends('layouts.base')

@section('title', 'Emails List')

@section('content')
    <header>
        <h1>Emails List</h1>
    </header>

    <main>
        <section>
            <h2>Add a new user</h2>
            <x-user.create-form />
        </section>

        <section>
            <h2>A list of users</h2>
            <x-user.list />
        </section>
    </main>
@endsection
