<!-- resources/views/components/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title> <!-- Use dynamic title -->

    <!-- AdminLTE CSS -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('fonts/fontkasi.css') }}">

    <script>
        (() => {
            "use strict";

            // Function to get the preferred theme (light/dark/auto)
            const getPreferredTheme = () => {
                const storedTheme = localStorage.getItem("theme");
                if (storedTheme === "auto" || !storedTheme) {
                    // If storedTheme is 'auto' or not set, check system preference
                    return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                return storedTheme;
            };

            // Function to apply the theme
            const applyTheme = (theme) => {
                document.documentElement.setAttribute("data-bs-theme", theme);
            };

            // Apply theme as soon as possible (before DOMContentLoaded)
            applyTheme(getPreferredTheme());

        })();
    </script>

    @livewireStyles
    <!-- Livewire styles -->
</head>

<body class="@yield('body-class', 'hold-transition sidebar-mini layout-fixed')">

    {{ $slot }}

    <script src="{{ asset('admin-lte/js/adminlte.min.js') }}"></script>
<script>
        (() => {
            "use strict";

            const storedTheme = localStorage.getItem("theme");

            const getPreferredTheme = () => {
                if (storedTheme) {
                    return storedTheme;
                }
                return window.matchMedia("(prefers-color-scheme: dark)").matches ?
                    "dark" :
                    "light";
            };

            const setTheme = (theme) => {
                if (
                    theme === "auto" &&
                    window.matchMedia("(prefers-color-scheme: dark)").matches
                ) {
                    document.documentElement.setAttribute("data-bs-theme", "dark");
                } else {
                    document.documentElement.setAttribute("data-bs-theme", theme);
                }
            };

            const showActiveTheme = (theme, focus = false) => {
                const themeSwitcher = document.querySelector("#bd-theme");

                if (!themeSwitcher) {
                    return;
                }

                const themeSwitcherText = document.querySelector("#bd-theme-text");
                const activeThemeIcon = document.querySelector(".theme-icon-active i");
                const btnToActive = document.querySelector(
                    `[data-bs-theme-value="${theme}"]`
                );
                const svgOfActiveBtn = btnToActive
                    .querySelector("i")
                    .getAttribute("class");

                for (const element of document.querySelectorAll("[data-bs-theme-value]")) {
                    element.classList.remove("active");
                    element.setAttribute("aria-pressed", "false");
                }

                btnToActive.classList.add("active");
                btnToActive.setAttribute("aria-pressed", "true");
                activeThemeIcon.setAttribute("class", svgOfActiveBtn);
                const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
                themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

                if (focus) {
                    themeSwitcher.focus();
                }
            };

            window
                .matchMedia("(prefers-color-scheme: dark)")
                .addEventListener("change", () => {
                    if (storedTheme !== "light" || storedTheme !== "dark") {
                        setTheme(getPreferredTheme());
                    }
                });

            window.addEventListener("livewire:navigated", () => {
                showActiveTheme(getPreferredTheme());

                for (const toggle of document.querySelectorAll("[data-bs-theme-value]")) {
                    toggle.addEventListener("click", () => {
                        const theme = toggle.getAttribute("data-bs-theme-value");
                        localStorage.setItem("theme", theme);
                        setTheme(theme);
                        showActiveTheme(theme, true);
                    });
                }
            });
        })();
    </script>

{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('paymentChart').getContext('2d');
    var paymentChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['April'],
            datasets: [{
                label: 'Payment Collection (PHP)',
                data: [4500],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> --}}
    @livewireScripts

    <!-- Livewire scripts -->

</body>

</html>
