@props([
    'personRecord',
    'isNew' => false,
])

<article
    {{ $attributes->class([
        'bg-gray-50 rounded-xl px-6 py-3 prose',
        'bg-gray-50' => !$isNew,
        'bg-green-50 ring-2 ring-green-400' => $isNew,
    ]) }}
>
    <h3>{{ $personRecord->name }}</h3>
    <a href="mailto:{{ $personRecord->email }}" class="break-all">{{ $personRecord->email }}</a>
    <p>{{ $personRecord->message }}</p>
    <time datetime="{{ $personRecord->created_at }}" class="text-gray-400 text-sm block text-end">
        Added {{ $personRecord->created_at->diffForHumans() }}
    </time>
</article>
