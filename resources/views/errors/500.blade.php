@extends('layouts.base')
<div class="flex flex-col items-center justify-center h-full">
    <div class="text-center">
        <p class="font-mono font-semibold text-red-500 text-7xl">500</p>
        <h1 class="mt-4 font-bold tracking-tight dark:text-white">Wait, this is not cool...</h1>
        <p class="text-base leading-7 text-neutral-300">There has been an error, we are working on it.</p>
        @if ($exception->getMessage() !== '')
            <div class="mt-6 text-xs text-red-500 whitespace-pre-wrap text-right">
                Error: {!! $exception->getMessage() !!}
            </div>
        @endif
        <div class="flex items-center justify-center mt-10 gap-x-6">
            <a href="/">
                <x-forms.button>Go back home</x-forms.button>
            </a>
            <a target="_blank" class="text-xs" href="{{ config('constants.urls.contact') }}">Contact
                support
                <x-external-link />
            </a>
        </div>
    </div>
</div>