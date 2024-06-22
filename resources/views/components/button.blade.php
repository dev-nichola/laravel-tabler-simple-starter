@props(["href" => ''])

<div>
    <a href="{{ $href }}" class="px-3 py-2.5 dark:text-white rounded-sm bg-blue-700">
        {{ $slot }}
    </a>
</div>
