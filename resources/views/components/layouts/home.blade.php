   {{-- Do your work, then step back. --}}
   <!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="format-detection" content="telephone=no">
       <meta name="apple-mobile-web-app-capable" content="yes">
       <meta name="author" content="">
       <meta name="keywords" content="">
       <meta name="description" content="">
     
       <title>@yield('title')</title> <!-- Use dynamic title -->

    <!--Bootstrap ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.min.css') }}">

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/vendor.css') }}">

    <!--Link Swiper's CSS ================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--Link AOS's CSS ================================================== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/style.css') }}">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">
        
       <!-- AdminLTE CSS -->
       {{-- <script>
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
       </script> --}}
   
       @livewireStyles
       <!-- Livewire styles -->
   </head>
   
   <body>
   
       {{ $slot }}
      {{-- <script>
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
   
   
   </script> --}}
   <script src={{ asset("home/js/jquery-1.11.0.min.js") }}></script>
   <script type="text/javascript" src={{ asset("home/js/bootstrap.bundle.min.js") }}></script>
   <script type="text/javascript" src={{ asset("home/js/plugins.js") }}></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script type="text/javascript" src={{ asset("home/js/script.js") }}></script>
   <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
       @livewireScripts
   
       <!-- Livewire scripts -->
   
   </body>
   
   </html>
   