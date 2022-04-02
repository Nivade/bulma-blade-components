@props([
    'header',
    'id'
])

<div id="dropdown-{{ $id }}" {{ $attributes->whereDoesntStartWith('button')->merge(['class' => 'dropdown'])}}>

    <div class="dropdown-trigger">
        <button class="button {{ $attributes->get('button-class') }}" aria-haspopup="true" aria-controls="dropdown-menu">
            <span>{{ $header }}</span>
            <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
        </button>
    </div>

    <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
            {{ $slot }}
        </div>
    </div>

</div>

@push('bbScripts')
<script>
    $(document).ready(function () {
        $('#dropdown-{{ $id }}').on('click', function (e) {
            $('#dropdown-{{ $id }}').toggleClass('is-active')
        })
    });
</script>
@endpush
