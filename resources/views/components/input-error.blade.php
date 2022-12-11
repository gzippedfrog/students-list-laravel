@props(['messages'])

@if ($messages)
    <ul {{ $attributes }}>
        @foreach ((array) $messages as $message)
            <li class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $message }}
            </li>
        @endforeach
    </ul>
@endif
