<?php
/** @var bool $value */
?>

@if($value)
    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
         class="tw-h-6 tw-w-6 tw-text-green-700"
         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>
@else
    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
         class="tw-h-6 tw-w-6 tw-text-red-700"
         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
@endif
