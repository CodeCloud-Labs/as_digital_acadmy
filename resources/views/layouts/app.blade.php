<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0a2350">
    <title>@yield('title', 'AS Digital Academy | Practical Computer Courses')</title>
    <meta name="description" content="Build practical computer skills with instructor-led courses in MS Office, CCC, O Level, Tally and more at AS Digital Academy.">
    <link rel="icon" type="image/png" href="{{ asset('image/logo/logobg.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    {{-- ============================================================
         GLOBAL THEME: colours are taken from the AS Digital Academy logo.
         Every page and partial should use these variables only.
         ============================================================ --}}
    <style>
        :root {
            /* Logo palette */
            --navy-950: #04142f;   /* deepest shade, footer / overlays */
            --navy: #0a2350;       /* "DIGITAL" wordmark, cap, A */
            --deep: #0648b8;       /* shaded part of the S */
            --royal: #0a72e8;      /* "ACADEMY" wordmark */
            --sky: #00a6ff;        /* bright top of the S, pixel squares */

            /* Tints and neutrals */
            --sky-100: #d8efff;
            --blue-50: #eaf4ff;
            --paper: #f5f9ff;
            --white: #ffffff;
            --ink: #0a1f44;
            --muted: #5b6b85;
            --line: #dbe6f3;

            /* Gradients and effects */
            --grad-brand: linear-gradient(135deg, var(--navy) 0%, var(--deep) 48%, var(--sky) 100%);
            --shadow-sm: 0 6px 18px rgba(10, 35, 80, .08);
            --shadow-md: 0 14px 36px rgba(10, 35, 80, .14);
            --focus-ring: 0 0 0 3px var(--white), 0 0 0 6px var(--royal);

            /* Shape */
            --radius-sm: 6px;
            --radius-md: 12px;
            --radius-lg: 18px;
            --radius-pill: 999px;

            /* Type */
            --display: 'Space Grotesk', system-ui, sans-serif;
            --body: 'DM Sans', system-ui, sans-serif;
        }

        html { scroll-behavior: smooth; scroll-padding-top: 96px; }
        body { margin: 0; color: var(--ink); background: var(--paper); font-family: var(--body); -webkit-font-smoothing: antialiased; }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; }
        .site-container { max-width: 1220px; }

        :focus-visible { outline: 0; box-shadow: var(--focus-ring); border-radius: var(--radius-sm); }

        /* Shared buttons */
        .button-primary, .button-secondary { display: inline-flex; min-height: 50px; align-items: center; justify-content: center; gap: 12px; padding: 0 22px; border: 1px solid transparent; border-radius: var(--radius-sm); font-size: 14px; font-weight: 700; transition: transform .2s ease, background .2s ease, border-color .2s ease, color .2s ease; }
        .button-primary { color: var(--white); background: var(--navy); }
        .button-primary:hover { color: var(--white); background: var(--royal); transform: translateY(-2px); }
        .button-secondary { color: var(--navy); border-color: #b9cbe2; background: transparent; }
        .button-secondary:hover { color: var(--navy); border-color: var(--navy); background: var(--white); }

        /* The logo's pixel squares, reusable as a small decorative cluster */
        .pixel-cluster { position: absolute; width: 92px; height: 92px; pointer-events: none; }
        .pixel-cluster i { position: absolute; display: block; border-radius: 3px; }
        .pixel-cluster i:nth-child(1) { top: 0; right: 0; width: 26px; height: 26px; background: var(--sky); }
        .pixel-cluster i:nth-child(2) { top: 22px; right: 30px; width: 24px; height: 30px; background: var(--royal); }
        .pixel-cluster i:nth-child(3) { top: 34px; right: 0; width: 18px; height: 18px; background: var(--deep); }
        .pixel-cluster i:nth-child(4) { top: 58px; right: 22px; width: 22px; height: 22px; background: var(--royal); opacity: .8; }

        @keyframes rise-in { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; }
        }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>