<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Astra Desa Digital - Desa Kepongpongan Cirebon')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">

    <!-- Global Styles -->
    <style>
        @layer base {
            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main > :first-child {
                margin-top: 0 !important;
            }

            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "background": "#fbf8ff",
                        "on-secondary-container": "#5a1c00",
                        "surface-tint": "#4f54b4",
                        "on-surface-variant": "#464652",
                        "inverse-surface": "#2f303b",
                        "on-primary": "#ffffff",
                        "tertiary": "#481900",
                        "tertiary-fixed": "#ffdbcc",
                        "tertiary-fixed-dim": "#ffb693",
                        "primary": "#14147c",
                        "on-error": "#ffffff",
                        "secondary-container": "#fc6c29",
                        "secondary-fixed-dim": "#ffb599",
                        "outline": "#777683",
                        "on-secondary-fixed-variant": "#7f2b00",
                        "error-container": "#ffdad6",
                        "secondary": "#a63b00",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#04006d",
                        "surface-variant": "#e2e1f0",
                        "primary-container": "#2d3091",
                        "on-tertiary-container": "#f0905f",
                        "on-secondary-fixed": "#370e00",
                        "surface-container-low": "#f4f2ff",
                        "on-background": "#1a1b25",
                        "on-tertiary-fixed-variant": "#773207",
                        "error": "#ba1a1a",
                        "on-primary-container": "#9ca0ff",
                        "surface-bright": "#fbf8ff",
                        "on-error-container": "#93000a",
                        "secondary-fixed": "#ffdbce",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#e1e0ff",
                        "surface-container-highest": "#e2e1f0",
                        "surface-container": "#eeecfc",
                        "surface-dim": "#dad8e8",
                        "inverse-on-surface": "#f1efff",
                        "on-tertiary-fixed": "#351000",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#c0c1ff",
                        "outline-variant": "#c7c5d4",
                        "surface-container-high": "#e8e7f6",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-primary-fixed-variant": "#373a9b",
                        "tertiary-container": "#6b2900",
                        "surface": "#fbf8ff",
                        "on-surface": "#1a1b25"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "space-xs": "0.25rem",
                        "space-md": "1rem",
                        "space-sm": "0.5rem",
                        "space-xl": "2.5rem",
                        "space-lg": "1.5rem",
                        "margin-mobile": "1rem",
                        "gutter-mobile": "1rem",
                        "gutter": "1.5rem",
                        "margin": "2rem"
                    },
                    fontFamily: {
                        "headline-lg": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "display": ["Plus Jakarta Sans"],
                        "body-md": ["Inter"],
                        "display-mobile": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "headline-lg": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.015em",
                            fontWeight: "700"
                        }],
                        "title-md": ["16px", {
                            lineHeight: "24px",
                            fontWeight: "600"
                        }],
                        "body-sm": ["12px", {
                            lineHeight: "18px",
                            fontWeight: "400"
                        }],
                        "headline-sm": ["20px", {
                            lineHeight: "28px",
                            fontWeight: "600"
                        }],
                        "label-md": ["12px", {
                            lineHeight: "16px",
                            letterSpacing: "0.02em",
                            fontWeight: "600"
                        }],
                        "headline-lg-mobile": ["26px", {
                            lineHeight: "34px",
                            letterSpacing: "-0.01em",
                            fontWeight: "700"
                        }],
                        "body-lg": ["16px", {
                            lineHeight: "26px",
                            fontWeight: "400"
                        }],
                        "headline-md": ["24px", {
                            lineHeight: "32px",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "label-sm": ["11px", {
                            lineHeight: "14px",
                            letterSpacing: "0.03em",
                            fontWeight: "600"
                        }],
                        "label-lg": ["14px", {
                            lineHeight: "20px",
                            fontWeight: "600"
                        }],
                        "display": ["44px", {
                            lineHeight: "52px",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
                        }],
                        "body-md": ["14px", {
                            lineHeight: "22px",
                            fontWeight: "400"
                        }],
                        "display-mobile": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.015em",
                            fontWeight: "700"
                        }]
                    }
                }
            }
        };
    </script>

    @stack('styles')
</head>

<body class="bg-surface font-body-md text-body-md text-on-surface antialiased selection:bg-secondary-fixed selection:text-on-secondary-fixed">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @stack('scripts')

</body>

</html>