@props(['icon' => null])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 rounded-full bg-herbal-50 px-3.5 py-1.5 text-xs font-semibold text-herbal-700']) }}>
    @if ($icon)
        <x-ui.icon :name="$icon" class="h-3.5 w-3.5" />
    @endif
    {{ $slot }}
</span>
