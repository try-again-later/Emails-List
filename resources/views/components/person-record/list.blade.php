@props([
    'personRecords' => [],
])

<ul>
    @foreach ($personRecords as $personRecord)
        <li>
            <x-person-record.show :person-record="$personRecord" />
        </li>
    @endforeach
</ul>
