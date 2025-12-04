@props(['type' => 'success', 'message' => ''])

@php
    $colors = [
        'success' => [
            'bg' => '#d4edda',
            'color' => '#155724',
            'border' => '#c3e6cb'
        ],
        'danger' => [
            'bg' => '#f8d7da',
            'color' => '#721c24',
            'border' => '#f5c6cb'
        ],
        'warning' => [
            'bg' => '#fff3cd',
            'color' => '#856404',
            'border' => '#ffeeba'
        ],
        'info' => [
            'bg' => '#d1ecf1',
            'color' => '#0c5460',
            'border' => '#bee5eb'
        ]
    ];
@endphp

<div style="
    padding: 15px;
    background: {{ $colors[$type]['bg'] }};
    color: {{ $colors[$type]['color'] }};
    border: 1px solid {{ $colors[$type]['border'] }};
    border-radius: 6px;
    margin-bottom: 10px;
    position: relative;
">
    <span style="
        position: absolute;
        right: 10px;
        top: 5px;
        font-size: 22px;
        cursor: pointer;
    " onclick="this.parentElement.style.display='none';">&times;</span>

    {{ $message }}
</div>
