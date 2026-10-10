@props(['title'])

<div class="card shadow-sm mb-3">
    <div class="card-header fw-bold">{{ $title }}</div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>