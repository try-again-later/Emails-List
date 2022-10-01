@props([
    'personRecord',
])

<article>
    <h3>{{ $personRecord->name }}</h3>
    <a href="mailto:{{ $personRecord->email }}">{{ $personRecord->email }}</a>
    <p>{{ $personRecord->message }}</p>
</article>
