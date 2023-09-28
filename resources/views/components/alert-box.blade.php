@props([
    'variant' => 'success',
])

@php
    switch ($variant) {
        case 'success':
            $color_class = 'border-success_text bg-success_bg text-success_text';
            break;
    
        case 'error':
            $color_class = 'border-error_text bg-error_bg text-error_text';
            break;
    
        default:
            $color_class = 'border-zinc-800 bg-zinc-400 text-zinc-800';
            break;
    }
@endphp

<div
    role="alert"
    {{ $attributes->merge([
        'role' => 'alert',
        'class' => "border-[1px] $color_class",
    ]) }}
>
    <div class="container">
        <div class="px-4 text-center">
            <p>{{ $slot }}</p>
        </div>
    </div>
</div>
