<nav {{ $attributes->merge(['class' => 'breadcrumb', 'aria-label' => 'breadcrumbs']) }}>
    <ul>
        {{ $slot }}
    </ul>
</nav>
