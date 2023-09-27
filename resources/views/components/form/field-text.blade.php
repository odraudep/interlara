@props(['field_type' => 'single'])

@php
    $base_classes = 'block w-full px-4 py-2 border-2 rounded outline-none focus:border-primary';
@endphp

@if ($field_type == 'single')
    <input {{ $attributes->merge(['type' => 'text', 'class' => $base_classes]) }}>
@elseif($field_type == 'multiline')
    <textarea {{ $attributes->merge(['class' => $base_classes, 'rows' => 6]) }}></textarea>
@endif
