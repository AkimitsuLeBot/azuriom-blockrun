@php
    $breakpoint_min = 0;
    switch (theme_config('header.navbar.breakpoint')){
        case 'md';
        $breakpoint_min = '767.98';
        break;
        case 'lg';
        $breakpoint_min = '991.98';
        break;
        case 'xl';
        $breakpoint_min = '1199.98';
        break;
        case 'xxl';
        $breakpoint_min = '1399.98';
        break;

        default;
        $breakpoint_min = '1199.98';
    }
@endphp

@if(theme_config('header.cursor'))
    <style type="text/css">
        html, body {
            height: 100%;
        }

        body {
            cursor: url({{image_url(theme_config('header.cursor'))}}), auto;
        }


    </style>
@endif
@if(theme_config('header.cursor_link'))
    <style type="text/css">
        .block--serveur--ip .countConnectServer, .btn, .nav-link, a, button, .accordion-button, button:not(:disabled), [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled) {
            cursor: url({{image_url(theme_config('header.cursor_link'))}}), auto;
        }
    </style>
@endif
@if(!theme_config('header.logo.hidden') && theme_config('header.navbar.logo.center'))
    <style type="text/css">
        @media (min-width: {{$breakpoint_min}}px) {
            .header .navbar-nav a {
                justify-content: center;
                text-align: center;
                width: var(--size-text);
            }
        }
    </style>
@endif
@if(!theme_config('header.logo.hidden') && theme_config('header.navbar.logo.size') && theme_config('header.navbar.position') === 'right' && theme_config('header.navbar.style') === '2')
    <style type="text/css">
        @media (min-width: {{$breakpoint_min}}px) {
            .header .navbar-collapse > .navbar-menu {
                padding-right: {{theme_config('header.navbar.logo.size') ?? 150}}px;
            }
        }
    </style>
@endif
@if(!theme_config('header.logo.hidden') && theme_config('header.navbar.logo.size') && theme_config('header.navbar.position')  === 'left')
    <style type="text/css">
        @media (min-width: {{$breakpoint_min}}px) {
            .header .navbar-collapse > .navbar-menu {
                padding-left: {{theme_config('header.navbar.logo.size') ?? 150}}px;
            }
        }
    </style>
@endif
@if(!theme_config('header.logo.hidden') && theme_config('header.navbar.logo.size'))
    <style type="text/css">
        .header .navbar-brand img {
            width: clamp(5rem,{{(theme_config('header.navbar.logo.size') ?? 150) / 16 }}rem,{{(theme_config('header.navbar.logo.size') ?? 150) / 16 }}rem);
            top: 0;
            transition: transform {{theme_config('header.navbar.logo.size') * 0.002 }}s;
        }
    </style>
@endif
