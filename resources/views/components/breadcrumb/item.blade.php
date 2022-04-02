@props([
    'isActive' => false,
    'icon' => null
])

<li @class(['is-active' => $isActive])>
    <a href="{{ $attributes->get('href') }}"  @if($isActive) aria-current="page" @endif>
        @isset($icon)
            <span class="icon is-small">
                <i class="{{ $icon }}" aria-hidden="true"></i>
            </span>
        @endisset
        <span>{{ $slot }}</span>
    </a>
</li>
