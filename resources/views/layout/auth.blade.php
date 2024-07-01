<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard | @yield('titulo')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --light: #edf2f9;
            --dark: #152e4d;
            --darker: #12263f;
            /*  */
            --color-primary: var(--color-cyan);
            --color-primary-50: var(--color-cyan-50);
            --color-primary-100: var(--color-cyan-100);
            --color-primary-light: var(--color-cyan-light);
            --color-primary-lighter: var(--color-cyan-lighter);
            --color-primary-dark: var(--color-cyan-dark);
            --color-primary-darker: var(--color-cyan-darker);
            /*  */
            --color-green: #16a34a;
            --color-green-50: #f0fdf4;
            --color-green-100: #dcfce7;
            --color-green-light: #22c55e;
            --color-green-lighter: #4ade80;
            --color-green-dark: #15803d;
            --color-green-darker: #166534;
            /*  */
            --color-blue: #2563eb;
            --color-blue-50: #eff6ff;
            --color-blue-100: #dbeafe;
            --color-blue-light: #3b82f6;
            --color-blue-lighter: #60a5fa;
            --color-blue-dark: #1d4ed8;
            --color-blue-darker: #1e40af;
            /*  */
            --color-cyan: #0891b2;
            --color-cyan-50: #ecfeff;
            --color-cyan-100: #cffafe;
            --color-cyan-light: #06b6d4;
            --color-cyan-lighter: #22d3ee;
            --color-cyan-dark: #0e7490;
            --color-cyan-darker: #155e75;
            /*  */
            --color-teal: #0d9488;
            --color-teal-50: #f0fdfa;
            --color-teal-100: #ccfbf1;
            --color-teal-light: #14b8a6;
            --color-teal-lighter: #2dd4bf;
            --color-teal-dark: #0f766e;
            --color-teal-darker: #115e59;
            /*  */
            --color-fuchsia: #c026d3;
            --color-fuchsia-50: #fdf4ff;
            --color-fuchsia-100: #fae8ff;
            --color-fuchsia-light: #d946ef;
            --color-fuchsia-lighter: #e879f9;
            --color-fuchsia-dark: #a21caf;
            --color-fuchsia-darker: #86198f;
            /*  */
            --color-violet: #7c3aed;
            --color-violet-50: #f5f3ff;
            --color-violet-100: #ede9fe;
            --color-violet-light: #8b5cf6;
            --color-violet-lighter: #a78bfa;
            --color-violet-dark: #6d28d9;
            --color-violet-darker: #5b21b6;
        }



        *,
        ::before,
        ::after {
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-border-opacity: 1;
            border-color: rgba(229, 231, 235, var(--tw-border-opacity));
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-ring-inset: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
        }

        .toggle:checked+span {
            top: 0px;
            left: 1.5rem;
            background-color: var(--color-primary);
        }

        .toggle:disabled+span {
            --tw-bg-opacity: 1;
            background-color: rgba(107, 114, 128, var(--tw-bg-opacity));
            --tw-shadow: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .toggle:checked:disabled {
            --tw-bg-opacity: 1;
            background-color: rgba(229, 231, 235, var(--tw-bg-opacity));
        }

        .toggle:checked:disabled+span {
            background-color: var(--color-primary-lighter);
            --tw-shadow: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .toggle:focus+span {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: var(--color-primary-lighter);
        }



        .space-y-2> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
        }

        .space-x-2> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.5rem * var(--tw-space-x-reverse));
            margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-8> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(2rem * var(--tw-space-y-reverse));
        }

        .space-y-4> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse));
        }

        .space-x-8> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-4> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1rem * var(--tw-space-x-reverse));
            margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-6> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
        }

        .space-x-1> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.25rem * var(--tw-space-x-reverse));
            margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-3> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
        }


        .border-gray-900 {
            --tw-border-opacity: 1;
            border-color: rgba(17, 24, 39, var(--tw-border-opacity));
        }

        .border-primary-dark {
            border-color: var(--color-primary-dark);
        }

        .border-transparent {
            border-color: transparent;
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
        }

        .bg-primary-darker {
            background-color: var(--color-primary-darker);
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        }

        .bg-primary-100 {
            background-color: var(--color-primary-100);
        }

        .bg-primary {
            background-color: var(--color-primary);
        }

        .bg-primary-50 {
            background-color: var(--color-primary-50);
        }

        .bg-green-100 {
            --tw-bg-opacity: 1;
            background-color: rgba(209, 250, 229, var(--tw-bg-opacity));
        }

        .bg-primary-light {
            background-color: var(--color-primary-light);
        }

        .bg-gray-200 {
            --tw-bg-opacity: 1;
            background-color: rgba(229, 231, 235, var(--tw-bg-opacity));
        }

        .bg-gray-300 {
            --tw-bg-opacity: 1;
            background-color: rgba(209, 213, 219, var(--tw-bg-opacity));
        }

        .bg-black {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 0, 0, var(--tw-bg-opacity));
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover;
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgba(17, 24, 39, var(--tw-text-opacity));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgba(107, 114, 128, var(--tw-text-opacity));
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgba(55, 65, 81, var(--tw-text-opacity));
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgba(156, 163, 175, var(--tw-text-opacity));
        }

        .text-primary-lighter {
            color: var(--color-primary-lighter);
        }

        .text-primary-dark {
            color: var(--color-primary-dark);
        }

        .text-primary-100 {
            color: var(--color-primary-100);
        }

        .text-green-500 {
            --tw-text-opacity: 1;
            color: rgba(16, 185, 129, var(--tw-text-opacity));
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgba(209, 213, 219, var(--tw-text-opacity));
        }

        .text-blue-500 {
            --tw-text-opacity: 1;
            color: rgba(59, 130, 246, var(--tw-text-opacity));
        }

        .text-primary-light {
            color: var(--color-primary-light);
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgba(75, 85, 99, var(--tw-text-opacity));
        }

        .text-blue-600 {
            --tw-text-opacity: 1;
            color: rgba(37, 99, 235, var(--tw-text-opacity));
        }

        .text-dark {
            color: var(--dark);
        }

        .text-danger-light {
            --tw-text-opacity: 1;
            color: rgba(239, 68, 68, var(--tw-text-opacity));
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .opacity-0 {
            opacity: 0;
        }

        .opacity-100 {
            opacity: 1;
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-xl {
            --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-inner {
            --tw-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .outline-none {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .ring-black {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgba(0, 0, 0, var(--tw-ring-opacity));
        }

        .ring-opacity-5 {
            --tw-ring-opacity: 0.05;
        }

        .transition-colors {
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .transition-transform {
            transition-property: transform;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .transition {
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .transition-opacity {
            transition-property: opacity;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .duration-200 {
            transition-duration: 200ms;
        }

        .duration-150 {
            transition-duration: 150ms;
        }

        .duration-300 {
            transition-duration: 300ms;
        }

        .ease-out {
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }

        .ease-in {
            transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
        }

        .ease-in-out {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .checked\:bg-primary-light:checked {
            background-color: var(--color-primary-light);
        }

        .focus-within\:text-gray-700:focus-within {
            --tw-text-opacity: 1;
            color: rgba(55, 65, 81, var(--tw-text-opacity));
        }

        .hover\:overflow-y-auto:hover {
            overflow-y: auto;
        }

        .hover\:border-gray-900:hover {
            --tw-border-opacity: 1;
            border-color: rgba(17, 24, 39, var(--tw-border-opacity));
        }

        .hover\:bg-primary-100:hover {
            background-color: var(--color-primary-100);
        }

        .hover\:bg-primary-dark:hover {
            background-color: var(--color-primary-dark);
        }

        .hover\:bg-gray-100:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
        }

        .hover\:bg-primary-darker:hover {
            background-color: var(--color-primary-darker);
        }

        .hover\:bg-opacity-80:hover {
            --tw-bg-opacity: 0.8;
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgba(55, 65, 81, var(--tw-text-opacity));
        }

        .hover\:text-primary:hover {
            color: var(--color-primary);
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgba(17, 24, 39, var(--tw-text-opacity));
        }

        .hover\:underline:hover {
            text-decoration: underline;
        }

        .focus\:bg-primary-100:focus {
            background-color: var(--color-primary-100);
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .focus\:ring:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .focus\:ring-2:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .focus\:ring-primary-dark:focus {
            --tw-ring-color: var(--color-primary-dark);
        }

        .focus\:ring-primary-darker:focus {
            --tw-ring-color: var(--color-primary-darker);
        }

        .focus\:ring-primary:focus {
            --tw-ring-color: var(--color-primary);
        }

        .focus\:ring-primary-lighter:focus {
            --tw-ring-color: var(--color-primary-lighter);
        }

        .focus\:ring-primary-100:focus {
            --tw-ring-color: var(--color-primary-100);
        }

        .focus\:ring-black:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgba(0, 0, 0, var(--tw-ring-opacity));
        }

        .focus\:ring-primary-light:focus {
            --tw-ring-color: var(--color-primary-light);
        }

        .focus\:ring-offset-1:focus {
            --tw-ring-offset-width: 1px;
        }

        .focus\:ring-offset-2:focus {
            --tw-ring-offset-width: 2px;
        }

        .focus\:ring-offset-white:focus {
            --tw-ring-offset-color: #fff;
        }

        .disabled\:bg-gray-200:disabled {
            --tw-bg-opacity: 1;
            background-color: rgba(229, 231, 235, var(--tw-bg-opacity));
        }

        .group:hover .group-hover\:text-gray-900 {
            --tw-text-opacity: 1;
            color: rgba(17, 24, 39, var(--tw-text-opacity));
        }

        .dark .dark\:border-primary-darker {
            border-color: var(--color-primary-darker);
        }

        .dark .dark\:border-primary {
            border-color: var(--color-primary);
        }

        .dark .dark\:border-primary-dark {
            border-color: var(--color-primary-dark);
        }

        .dark .dark\:border-primary-light {
            border-color: var(--color-primary-light);
        }

        .dark .dark\:border-transparent {
            border-color: transparent;
        }

        .dark .dark\:border-gray-700 {
            --tw-border-opacity: 1;
            border-color: rgba(55, 65, 81, var(--tw-border-opacity));
        }

        .dark .dark\:bg-dark {
            background-color: var(--dark);
        }

        .dark .dark\:bg-darker {
            background-color: var(--darker);
        }

        .dark .dark\:bg-primary {
            background-color: var(--color-primary);
        }

        .dark .dark\:bg-primary-lighter {
            background-color: var(--color-primary-lighter);
        }

        .dark .dark\:bg-primary-darker {
            background-color: var(--color-primary-darker);
        }

        .dark .dark\:bg-primary-100 {
            background-color: var(--color-primary-100);
        }

        .dark .dark\:bg-primary-dark {
            background-color: var(--color-primary-dark);
        }

        .dark .dark\:text-light {
            color: var(--light);
        }

        .dark .dark\:text-gray-400 {
            --tw-text-opacity: 1;
            color: rgba(156, 163, 175, var(--tw-text-opacity));
        }

        .dark .dark\:text-primary-light {
            color: var(--color-primary-light);
        }

        .dark .dark\:text-primary-dark {
            color: var(--color-primary-dark);
        }

        .dark .dark\:text-primary {
            color: var(--color-primary);
        }

        .dark .dark\:text-primary-100 {
            color: var(--color-primary-100);
        }

        .dark .dark\:text-primary-lighter {
            color: var(--color-primary-lighter);
        }

        .dark .dark\:text-danger {
            --tw-text-opacity: 1;
            color: rgba(220, 38, 38, var(--tw-text-opacity));
        }

        .dark .dark\:text-gray-300 {
            --tw-text-opacity: 1;
            color: rgba(209, 213, 219, var(--tw-text-opacity));
        }

        .dark .dark\:text-blue-500 {
            --tw-text-opacity: 1;
            color: rgba(59, 130, 246, var(--tw-text-opacity));
        }

        .dark .dark\:opacity-75 {
            opacity: 0.75;
        }

        .dark .dark\:opacity-70 {
            opacity: 0.7;
        }

        .dark .dark\:focus-within\:text-light:focus-within {
            color: var(--light);
        }

        .dark .dark\:hover\:border-primary-light:hover {
            border-color: var(--color-primary-light);
        }

        .dark .dark\:hover\:bg-primary:hover {
            background-color: var(--color-primary);
        }

        .dark .dark\:hover\:bg-primary-dark:hover {
            background-color: var(--color-primary-dark);
        }

        .dark .dark\:hover\:bg-primary-darker:hover {
            background-color: var(--color-primary-darker);
        }

        .dark .dark\:hover\:text-light:hover {
            color: var(--light);
        }

        .dark .dark\:hover\:text-primary-100:hover {
            color: var(--color-primary-100);
        }

        .dark .dark\:hover\:opacity-100:hover {
            opacity: 1;
        }

        .dark .dark\:focus\:bg-primary-dark:focus {
            background-color: var(--color-primary-dark);
        }

        .dark .dark\:focus\:opacity-100:focus {
            opacity: 1;
        }

        .dark .dark\:focus\:ring-primary-dark:focus {
            --tw-ring-color: var(--color-primary-dark);
        }

        .dark .dark\:focus\:ring-primary-darker:focus {
            --tw-ring-color: var(--color-primary-darker);
        }

        .dark .dark\:focus\:ring-offset-dark:focus {
            --tw-ring-offset-color: var(--dark);
        }

        .dark .dark\:focus\:ring-offset-darker:focus {
            --tw-ring-offset-color: var(--darker);
        }

        .dark .group:hover .dark\:group-hover\:text-primary-lighter {
            color: var(--color-primary-lighter);
        }
    </style>
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/dropzone.js'])
    @livewireScripts
    @livewireStyles
</head>

<body>
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');
    setColors(color);" :class="{ 'dark': isDark }">
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
                Cargando...
            </div>

            <x-sidebar />

            <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
                <x-navbar-dashboard />

                <!-- Main content -->
                <main class="container mx-auto px-2">
                    @yield('contenido')
                </main>

            </div>

            <!-- Panels -->

            <!-- Settings Panel -->
            <!-- Backdrop -->
            <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSettingsPanelOpen"
                @click="isSettingsPanelOpen = false" class="fixed inset-0 z-10 bg-primary-darker" style="opacity: 0.5"
                aria-hidden="true"></div>
            <!-- Panel -->
            <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-ref="settingsPanel"
                tabindex="-1" x-show="isSettingsPanelOpen" @keydown.escape="isSettingsPanelOpen = false"
                class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
                aria-labelledby="settinsPanelLabel">
                <div class="absolute left-0 p-2 transform -translate-x-full">
                    <!-- Close button -->
                    <button @click="isSettingsPanelOpen = false"
                        class="p-2 text-white rounded-md focus:outline-none focus:ring">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Panel content -->
                <div class="flex flex-col h-screen">
                    <!-- Panel header -->
                    <div
                        class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-primary-dark">
                        <span aria-hidden="true" class="text-gray-500 dark:text-primary">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </span>
                        <h2 id="settinsPanelLabel" class="text-xl font-medium text-gray-500 dark:text-light">Ajustes
                        </h2>
                    </div>
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden hover:overflow-y-auto">
                        <!-- Theme -->
                        <div class="p-4 space-y-4 md:p-8">
                            <h6 class="text-lg font-medium text-gray-400 dark:text-light">Modo</h6>
                            <div class="flex items-center space-x-8">
                                <!-- Light button -->
                                <button @click="setLightTheme"
                                    class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark"
                                    :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': !
                                            isDark, 'text-gray-500 dark:text-primary-light': isDark }">
                                    <span>
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </span>
                                    <span>Claro</span>
                                </button>

                                <!-- Dark button -->
                                <button @click="setDarkTheme"
                                    class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark"
                                    :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': isDark, 'text-gray-500 dark:text-primary-light':
                                            !isDark }">
                                    <span>
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                        </svg>
                                    </span>
                                    <span>Oscuro</span>
                                </button>
                            </div>
                        </div>

                        <!-- Colors -->
                        <div class="p-4 space-y-4 md:p-8">
                            <h6 class="text-lg font-medium text-gray-400 dark:text-light">Colores</h6>
                            <div>
                                <button @click="setColors('cyan')" class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-cyan)"></button>
                                <button @click="setColors('teal')" class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-teal)"></button>
                                <button @click="setColors('green')" class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-green)"></button>
                                <button @click="setColors('fuchsia')" class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-fuchsia)"></button>
                                <button @click="setColors('blue')" class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-blue)"></button>
                                <button @click="setColors('violet')" class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-violet)"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Notification panel -->
            <!-- Backdrop -->
            <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                x-show="isNotificationsPanelOpen" @click="isNotificationsPanelOpen = false"
                class="fixed inset-0 z-10 bg-primary-darker" style="opacity: 0.5" aria-hidden="true"></div>
            <!-- Panel -->
            <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                x-ref="notificationsPanel" x-show="isNotificationsPanelOpen"
                @keydown.escape="isNotificationsPanelOpen = false" tabindex="-1"
                aria-labelledby="notificationPanelLabel"
                class="fixed inset-y-0 z-20 w-full max-w-xs bg-white dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
                <div class="absolute right-0 p-2 transform translate-x-full">
                    <!-- Close button -->
                    <button @click="isNotificationsPanelOpen = false"
                        class="p-2 text-white rounded-md focus:outline-none focus:ring">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col h-screen" x-data="{ activeTabe: 'action' }">
                    <!-- Panel header -->
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-between px-4 pt-4 border-b dark:border-primary-darker">
                            <h2 id="notificationPanelLabel" class="pb-4 font-semibold">Notifications</h2>
                            <div class="space-x-2">
                                <button @click.prevent="activeTabe = 'action'"
                                    class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
                                    :class="{ 'border-primary-dark dark:border-primary': activeTabe ==
                                        'action', 'border-transparent': activeTabe != 'action' }">
                                    Action
                                </button>
                                <button @click.prevent="activeTabe = 'user'"
                                    class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
                                    :class="{ 'border-primary-dark dark:border-primary': activeTabe ==
                                        'user', 'border-transparent': activeTabe != 'user' }">
                                    User
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Panel content (tabs) -->
                    <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
                        <!-- Action tab -->
                        <div class="space-y-4" x-show.transition.in="activeTabe == 'action'">
                            <p class="px-4">Action tab content</p>
                            <!--  -->
                            <!-- Action tab content -->
                            <!--  -->
                        </div>

                        <!-- User tab -->
                        <div class="space-y-4" x-show.transition.in="activeTabe == 'user'">
                            <p class="px-4">User tab content</p>
                            <!--  -->
                            <!-- User tab content -->
                            <!--  -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Search panel -->
            <!-- Backdrop -->
            <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSearchPanelOpen"
                @click="isSearchPanelOpen = false" class="fixed inset-0 z-10 bg-primary-darker" style="opacity: 0.5"
                aria-hidden="ture"></div>
            <!-- Panel -->
            <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                x-show="isSearchPanelOpen" @keydown.escape="isSearchPanelOpen = false"
                class="fixed inset-y-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
                <div class="absolute right-0 p-2 transform translate-x-full">
                    <!-- Close button -->
                    <button @click="isSearchPanelOpen = false"
                        class="p-2 text-white rounded-md focus:outline-none focus:ring">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <h2 class="sr-only">Search panel</h2>
                <!-- Panel content -->
                <div class="flex flex-col h-screen">
                    <!-- Panel header (Search input) -->
                    <div
                        class="relative flex-shrink-0 px-4 py-8 text-gray-400 border-b dark:border-primary-darker dark:focus-within:text-light focus-within:text-gray-700">
                        <span class="absolute inset-y-0 inline-flex items-center px-4">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <input x-ref="searchInput" type="text"
                            class="w-full py-2 pl-10 pr-4 border rounded-full dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring"
                            placeholder="Search..." />
                    </div>

                    <!-- Panel content (Search result) -->
                    <div class="flex-1 px-4 pb-4 space-y-4 overflow-y-hidden h hover:overflow-y-auto">
                        <h3 class="py-2 text-sm font-semibold text-gray-600 dark:text-light">History</h3>
                        <p class="px=4">Search resault</p>
                        <!--  -->
                        <!-- Search content -->
                        <!--  -->
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            const getColor = () => {
                if (window.localStorage.getItem('color')) {
                    return window.localStorage.getItem('color')
                }
                return 'cyan'
            }

            const setColors = (color) => {
                const root = document.documentElement
                root.style.setProperty('--color-primary', `var(--color-${color})`)
                root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
                root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
                root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
                root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
                root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
                root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
                this.selectedColor = color
                window.localStorage.setItem('color', color)
            }

            return {
                loading: true,
                isDark: getTheme(),
                color: getColor(),
                selectedColor: 'cyan',
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
                setLightTheme() {
                    this.isDark = false
                    setTheme(this.isDark)
                },
                setDarkTheme() {
                    this.isDark = true
                    setTheme(this.isDark)
                },
                setColors,
                toggleSidbarMenu() {
                    this.isSidebarOpen = !this.isSidebarOpen
                },
                isSettingsPanelOpen: false,
                openSettingsPanel() {
                    this.isSettingsPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.settingsPanel.focus()
                    })
                },
                isNotificationsPanelOpen: false,
                openNotificationsPanel() {
                    this.isNotificationsPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.notificationsPanel.focus()
                    })
                },
                isSearchPanelOpen: false,
                openSearchPanel() {
                    this.isSearchPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.searchInput.focus()
                    })
                },
                isMobileSubMenuOpen: false,
                openMobileSubMenu() {
                    this.isMobileSubMenuOpen = true
                    this.$nextTick(() => {
                        this.$refs.mobileSubMenu.focus()
                    })
                },
                isMobileMainMenuOpen: false,
                openMobileMainMenu() {
                    this.isMobileMainMenuOpen = true
                    this.$nextTick(() => {
                        this.$refs.mobileMainMenu.focus()
                    })
                },
            }
        }
    </script>
    @stack('script')
</body>

</html>
