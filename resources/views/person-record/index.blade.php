@extends('layouts.base')

@section('title', 'Emails List')

@section('content')
    <header class="p-4">
        <h1 class="text-center tracking-wide text-3xl sm:text-4xl">Emails List</h1>
    </header>

    <main class="py-12 space-y-8">
        <x-section>
            <x-section-heading>Add a new record</x-section-heading>
            <x-person-record.create-form />
        </x-section>

        <x-section>
            <x-section-heading>A list of records</x-section-heading>
            <x-person-record.list :person-records="$personRecords" />
        </x-section>

        <x-toast />
    </main>
@endsection
