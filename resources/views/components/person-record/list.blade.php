@props([
    'personRecords' => [],
])

<ul {{ $attributes->class('w-full flex flex-col gap-8') }}>
    @foreach ($personRecords as $personRecord)
        <li class="flex">
            <x-person-record.show
                :person-record="$personRecord"
                class="min-w-full"
                :is-new="session()->get('new-person-record-email') === $personRecord->email"
            />
        </li>
    @endforeach
</ul>
