<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo Web Univ</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
        *,
        :before,
        :after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        :before,
        :after {
            --tw-content: ""
        }

        html,
        :host {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        input:where([type=button]),
        input:where([type=reset]),
        input:where([type=submit]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        button,
        [role=button] {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden]:where(:not([hidden=until-found])) {
            display: none
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0
        }

        .z-0 {
            z-index: 0
        }

        .\!row-span-1 {
            grid-row: span 1 / span 1 !important
        }

        .-mx-3 {
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .-ml-px {
            margin-left: -1px
        }

        .ml-3 {
            margin-left: .75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .table {
            display: table
        }

        .grid {
            display: grid
        }

        .\!hidden {
            display: none !important
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-5 {
            height: 1.25rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-5 {
            width: 1.25rem
        }

        .w-\[calc\(100\%_\+_8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .w-full {
            width: 100%
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .cursor-default {
            cursor: default
        }

        .resize {
            resize: both
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .\!flex-row {
            flex-direction: row !important
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .justify-items-center {
            justify-items: center
        }

        .gap-2 {
            gap: .5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .rounded-md {
            border-radius: .375rem
        }

        .rounded-sm {
            border-radius: .125rem
        }

        .rounded-l-md {
            border-top-left-radius: .375rem;
            border-bottom-left-radius: .375rem
        }

        .rounded-r-md {
            border-top-right-radius: .375rem;
            border-bottom-right-radius: .375rem
        }

        .border {
            border-width: 1px
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: #ff2d201a
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .to-zinc-900 {
            --tw-gradient-to: #18181b var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #ff2d20
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover
        }

        .object-top {
            -o-object-position: top;
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-2 {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .pt-3 {
            padding-top: .75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: .875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-5 {
            line-height: 1.25rem
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity, 1))
        }

        .text-black\/50 {
            color: #00000080
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity, 1))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .underline {
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-black {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
        }

        .ring-gray-300 {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / .05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .filter {
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .duration-150 {
            transition-duration: .15s
        }

        .duration-300 {
            transition-duration: .3s
        }

        .ease-in-out {
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .selection\:bg-\[\#FF2D20\] *::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:text-white *::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\]::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:text-white::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity, 1))
        }

        .hover\:text-black\/70:hover {
            color: #000000b3
        }

        .hover\:text-gray-400:hover {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity, 1))
        }

        .hover\:text-gray-500:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / .2)
        }

        .focus\:z-10:focus {
            z-index: 10
        }

        .focus\:border-blue-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus\:ring:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
        }

        .active\:bg-gray-100:active {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
        }

        .active\:text-gray-500:active {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .active\:text-gray-700:active {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity, 1))
        }

        @media (min-width: 640px) {
            .sm\:flex {
                display: flex
            }

            .sm\:hidden {
                display: none
            }

            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:flex-1 {
                flex: 1 1 0%
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity, 1))
            }
        }

        .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
            flex-direction: row-reverse
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:border-gray-600 {
                --tw-border-opacity: 1;
                border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
            }

            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-gray-300 {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .dark\:text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity, 1))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .dark\:text-white\/50 {
                color: #ffffff80
            }

            .dark\:text-white\/70 {
                color: #ffffffb3
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
            }

            .dark\:hover\:text-gray-300:hover {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .dark\:hover\:text-white\/70:hover {
                color: #ffffffb3
            }

            .dark\:hover\:text-white\/80:hover {
                color: #fffc
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
            }

            .dark\:focus\:border-blue-700:focus {
                --tw-border-opacity: 1;
                border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
            }

            .dark\:focus\:border-blue-800:focus {
                --tw-border-opacity: 1;
                border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .dark\:active\:bg-gray-700:active {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
            }

            .dark\:active\:text-gray-300:active {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }
        }
    </style>
    @endif
</head>

<body>
    <x-navbar />
    <div class="bg-amber-100 w-full h-auto lg:pt-32 pt-4">
        <!-- Banner Slider -->
        <div class="bg-gray-500 w-full lg:h-[500px] h-[300px] lg:rounded-bl-[300px] rounded-bl-[150px]"></div>

        <div class="lg:mt-20 mt-5">
            <!-- Section 1: Introduction -->
            <section class="grid lg:grid-cols-2 grid-cols-1 gap-10 lg:px-40 px-4">
                <div class="w-full">
                    <h1 class="text-4xl text-blue-900">Kuliah di Universitas Islam Indonesia</h1>
                    <p class="mt-2">
                        Raih gelar pendidikan tinggi Anda di Universitas Islam Indonesia.
                        Bersama UII, Anda akan menemukan pengalaman belajar yang memadukan pendalaman ilmu pengetahuan dengan landasan nilai keislaman untuk membentuk karakter yang berintegritas, serta didukung dengan lingkungan pembelajaran yang kondusif untuk mengembangkan potensi Anda.
                    </p>
                    <div class="mt-4 w-full rounded bg-amber-200 p-4 py-6">
                        <h5 class="text-xl text-center">Sudah Punya Pilihan? Cari Lebih Cepat</h5>
                        <div class="mt-2">
                            <input type="text" placeholder="Cari Program Studi" class="w-full rounded bg-white p-2">
                        </div>
                    </div>
                    <p class="mt-4">
                        <strong>#JemputImpian</strong> Anda untuk menjadi bagian dari Universitas Islam Indonesia. Daftar sekarang untuk bergabung dengan UII di 2025.
                    </p>
                </div>
                <div class="w-full">
                    <img src="https://www.uii.ac.id/wp-content/uploads/2022/04/Beranda-4.png" alt="img1" class="rounded-bl-[200px]">
                </div>
            </section>

            <!-- Section 2: CTA -->
            <section class="grid lg:grid-cols-4 grid-cols-1 gap-10 lg:px-40 px-4 mt-20">
                <div class="bg-white shadow p-4 flex flex-col justify-between">
                    <h2 class="text-blue-900 text-2xl">Pilihan Program Pendidikan</h2>
                    <p class="mt-2">
                        Temukan program pendidikan dan bidang studi yang sesuai dengan minat belajar Anda
                    </p>
                    <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                        > Pilihan Program Studi
                    </a>
                </div>
                <div class="bg-white shadow p-4 flex flex-col justify-between">
                    <h2 class="text-blue-900 text-2xl">Penerimaan Mahasiswa Baru</h2>
                    <p class="mt-2">
                        Sudah menentukan program pendidikan yang diminati? Daftarkan diri Anda sekarang
                    </p>
                    <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                        > Daftar Sekarang
                    </a>
                </div>
                <div class="bg-white shadow p-4 flex flex-col justify-between">
                    <h2 class="text-blue-900 text-2xl">Informasi Beasiswa</h2>
                    <p class="mt-2">
                        Telusuri berbagai skema beasiswa yang ditawarkan untuk mahasiswa baru
                    </p>
                    <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                        > Informasi Selengkapnya
                    </a>
                </div>
                <div class="bg-white shadow p-4 flex flex-col justify-between">
                    <h2 class="text-blue-900 text-2xl">Program Gelar Ganda</h2>
                    <p class="mt-2">
                        Makin siap bersaing di tingkat global dengan meraih dua gelar pendidikan sekaligus
                    </p>
                    <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                        > Informasi Selengkapnya
                    </a>
                </div>
            </section>

            <!-- Section 3: PMB Information -->
            <section class="lg:px-40 px-4 mt-20">
                <div class="bg-white w-full h-auto flex lg:flex-row flex-col lg:gap-20 gap-4 lg:items-center items-start">
                    <div class="bg-amber-300 lg:w-1/6 w-full rounded-br-[100px] h-full flex items-center justify-center lg:py-16 py-4">
                        <i class="fa fa-info-circle text-black text-[100px]"></i>
                    </div>
                    <div class="lg:w-1/2 w-full lg:p-0 p-4">
                        <p class="lg:-mt-4 -mt-0">
                            <strong>Penerimaan Mahasiswa Baru (PMB UII)</strong> Program Diploma (D3), Sarjana Terapan(D4), dan Sarjana (S1) Tahun Akademik 2025/2026 dibuka mulai 27 September 2024.
                        </p>
                        <a href="#info" class="underline text-amber-500 hover:no-underline">Informasi Selengkapnya</a>
                    </div>
                </div>

            </section>

            <!-- Section 4: Hero -->
            <section class="lg:px-40 px-4 mt-20">
                <img src="https://www.uii.ac.id/wp-content/uploads/2021/12/Beranda-2-1.png" alt="homebase" class="w-full lg:h-auto h-[250px] lg:rounded-bl-[200px] rounded-bl-[100px]">
            </section>

            <!-- Section 5: Other Information -->
            <section class="grid lg:grid-cols-3 grid-cols-1 gap-10 lg:px-40 px-4 bg-white w-full py-10 mt-20">
                <div >
                    <h2 class="text-blue-900 text-3xl">Pionir Pendidikan Tinggi di Indonesia</h2>
                    <p class="mt-2">
                        Universitas Islam Indonesia didirikan pada 8 Juli 1945. Dengan pengalaman lebih dari 70 tahun, UII berkomitmen mencetak pemimpin masa depan melalui program pendidikan unggul yang berlandaskan nilai-nilai keislaman dan kebangsaan. Temukan kesempatan untuk mengembangkan potensi terbaik Anda dengan menjadi bagian dari Universitas Islam Indonesia.
                    </p>
                    <div class="flex lg:flex-row flex-col lg:justify-center justify-start">
                    <img src="https://www.uii.ac.id/wp-content/uploads/2022/04/Akreditasi-Unggul-265x300.png" alt="kampus-merdeka" class="w-auto h-auto mt-4">
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="shadow p-2 flex flex-col justify-between">
                        <h2 class="text-blue-900 text-2xl">Sekilas Tentang Kampus UII</h2>
                        <p class="mt-2">
                            Telusuri perjalanan sejarah dan perkembangan Universitas Islam Indonesia
                        </p>
                        <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                            > Informasi Selengkapnya
                        </a>
                    </div>
                    <div class="shadow p-2 flex flex-col justify-between">
                        <h2 class="text-blue-900 text-2xl">Kehidupan dan Kegiatan Mahasiswa di Kampus</h2>
                        <p class="mt-2">
                            Informasi tentang ragam kegiatan mahasiswa dan berbagai fasilitas di Kampus UII
                        </p>
                        <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                            > Informasi Selengkapnya
                        </a>
                    </div>
                    <div class="shadow p-2 flex flex-col justify-between">
                        <h2 class="text-blue-900 text-2xl">Komitmen Penjaminan Mutu</h2>
                        <p class="mt-2">
                            Pelaksanaan dan pengembangan Sistem Penjaminan Mutu di lingkungan Universitas Islam Indonesia
                        </p>
                        <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                            > Informasi Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="shadow p-2 flex flex-col justify-between">
                        <h2 class="text-blue-900 text-2xl">Jelajahi Yogyakarta, Rumah Kedua Anda</h2>
                        <p class="mt-2">
                            Temukan harmoni hidup dan belajar di Jogja bersama dengan keramahan khas masyarakatnya
                        </p>
                        <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                            > Informasi Selengkapnya
                        </a>
                    </div>
                    <div class="shadow p-2 flex flex-col justify-between">
                        <h2 class="text-blue-900 text-2xl">Lingkungan dan Keberlanjutan</h2>
                        <p class="mt-2">
                            Komitmen UII dalam mendukung keberlanjutan dan pemeliharaan lingkungan yang lestari
                        </p>
                        <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                            > Informasi Selengkapnya
                        </a>
                    </div>
                    <div class="shadow p-2 flex flex-col justify-between">
                        <h2 class="text-blue-900 text-2xl">Sistem dan Teknologi Informasi</h2>
                        <p class="mt-2">
                            Informasi tentang pengembangan layanan sistem dan teknologi informasi, serta fasilitas kuliah daring di Kampus UII
                        </p>
                        <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                            > Informasi Selengkapnya
                        </a>
                    </div>
                </div>
            </section>

            <!-- Section 6: News & Opinion -->
            <section class="mt-20 lg:px-40 px-4">
                <h1 class="text-4xl text-blue-900 text-center">Berita & Opini</h1>
                <h5 class="text-xl text-black mt-7 text-center">Tetap terhubung dengan berita dan informasi terbaru tentang berbagai aktivitas di Kampus Universitas Islam Indonesia</h5>

                <!-- Berita Pilihan -->
                <div class="flex flex-row gap-2 items-center mt-10">
                    <h5 class="text-blue-900 text-2xl w-1/6 font-bold">Berita Pilihan</h5>
                    <hr class="w-full border-b border-blue-900" />
                </div>
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mt-5">
                    <div>
                        <div id="news" class="bg-gray-500 w-full h-[400px] lg:mt-0 mt-4">

                        </div>
                        <div id="loading" class="-mt-24 px-4">
                            <x-skeleton width="w-full" height="h-4" />
                        </div>
                    </div>
                    <div>
                        <div id="news" class="bg-gray-500 w-full h-[400px] lg:mt-0 mt-4">

                        </div>
                        <div id="loading" class="-mt-24 px-4">
                            <x-skeleton width="w-full" height="h-4" />
                        </div>
                    </div>
                    <div>
                        <div id="news" class="bg-gray-500 w-full h-[400px] lg:mt-0 mt-4">

                        </div>
                        <div id="loading" class="-mt-24 px-4">
                            <x-skeleton width="w-full" height="h-4" />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-8">
                    <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                        > Informasi Selengkapnya
                    </a>
                </div>

                <!-- Pojok Rektor -->
                <div class="flex flex-row gap-2 items-center mt-10">
                    <h5 class="text-blue-900 text-2xl w-1/6 font-bold">Pojok Rektor</h5>
                    <hr class="w-full border-b border-blue-900" />
                </div>
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mt-5">
                    <div>
                        <div id="news" class="bg-gray-500 w-full h-[400px] lg:mt-0 mt-4">

                        </div>
                        <div id="loading" class="-mt-24 px-4">
                            <x-skeleton width="w-full" height="h-4" />
                        </div>
                    </div>
                    <div>
                        <div id="news" class="bg-gray-500 w-full h-[400px] lg:mt-0 mt-4">

                        </div>
                        <div id="loading" class="-mt-24 px-4">
                            <x-skeleton width="w-full" height="h-4" />
                        </div>
                    </div>
                    <div>
                        <div id="news" class="bg-gray-500 w-full h-[400px] lg:mt-0 mt-4">

                        </div>
                        <div id="loading" class="-mt-24 px-4">
                            <x-skeleton width="w-full" height="h-4" />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-8">
                    <a href="#prodi" class="mt-4 p-2 bg-amber-400 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-200 duration-150 transition-all">
                        > Informasi Selengkapnya
                    </a>
                </div>
            </section>

            <!-- Section 7: Outro -->
            <section class="grid lg:grid-cols-2 grid-cols-1 gap-10 lg:px-40 px-4 mt-20">
                <div class="w-full">
                    <img src="https://www.uii.ac.id/wp-content/uploads/2022/04/Beranda-6.png" alt="img1" class="rounded-br-[200px]">
                </div>
                <div class="w-full">
                    <h1 class="text-4xl text-blue-900">Inovasi dan Inisiatif di Universitas Islam Indonesia</h1>
                    <p class="mt-2">
                        Sebagai salah satu perguruan tinggi swasta unggul di Indonesia, UII ikut menjalankan peran penting dalam menjawab berbagai tantangan untuk mendorong kemajuan bangsa. Berbagai langkah inovasi dan inisiatif yang dihadirkan dalam berbagai program menjadi wujud kontribusi aktif UII dalam pengembangan dan penyebaran ilmu pengetahuan dan teknologi, pengabdian kepada masyarakat, serta dakwah Islamiyah.
                    </p>
                    <div class="mt-4 flex flex-col gap-2">
                        <a href="#prodi" class="p-2 bg-amber-200 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-400 duration-150 transition-all">
                            > Pusat Studi & Laboratorium
                        </a>
                        <a href="#prodi" class="p-2 bg-amber-200 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-400 duration-150 transition-all">
                            > Pengembangan Riset & Pengajaran
                        </a>
                        <a href="#prodi" class="p-2 bg-amber-200 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-400 duration-150 transition-all">
                            > Simpul Tubuh: Inisiatif Pemberdayaan
                        </a>
                        <a href="#prodi" class="p-2 bg-amber-200 rounded flex flex-row gap-2 items-center text-black hover:bg-amber-400 duration-150 transition-all">
                            > Pengabdian & Dakwah Islamiyah
                        </a>
                    </div>
                </div>
            </section>

            <!-- Section 8: NavMiddle -->
            <section class="grid lg:grid-cols-4 grid-cols-1 gap-10 lg:px-40 px-4 bg-white w-full py-10 mt-20">
                <div>
                    <h5 class="text-blue-900 text-2xl font-semibold">Pranala Penting</h5>
                    <div class="flex flex-col mt-2">
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Perpustakaan</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Portal Jurnal Ilmiah</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Layanan UII Print</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Layanan eduroam</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Layanan UII Lapor</a>
                    </div>
                </div>
                <div>
                    <h5 class="text-blue-900 text-2xl font-semibold">Sorotan</h5>
                    <div class="flex flex-col mt-2">
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> UII Learning Center</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Erasmus+ BUILD</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Erasmus+ GITA</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Erasmus+ REPESEA</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> ENAGO Proofreading Services</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Rencana Startegis</a>
                    </div>
                </div>
                <div>
                    <h5 class="text-blue-900 text-2xl font-semibold">Informasi Publik</h5>
                    <div class="flex flex-col mt-2">
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Ruang Berita</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Pojok Rektor</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Prestasi & Penghargaan</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Peluang Karir di UII</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Kunjungan ke Kampus UII</a>
                    </div>
                </div>
                <div>
                    <h5 class="text-blue-900 text-2xl font-semibold">Unduhan Cepat</h5>
                    <div class="flex flex-col mt-2">
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Brosur</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> UII Magazine</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> UII News</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Akreditasi Institusi</a>
                        <a href="#" class="flex items-center gap-2 hover:underline"><i class="fa fa-caret-right"></i> Peta Kampus</a>
                    </div>
                </div>
            </section>

            <!-- Section 9: Social Media &  -->
            <section class="lg:px-40 px-4 bg-white w-full py-10">
                <h1 class="text-4xl text-blue-900 text-center">Ikuti UII di Sosial Media</h1>
                <div class="flex flex-row flex-wrap lg:flex-nowrap gap-10 justify-center items-center mt-10 border-b border-b-blue-900 pb-10">
                    <button class="bg-gray-800 rounded-full w-20 h-20 p-4 hover:bg-blue-700 duration-150 transition-all">
                        <i class="fab fa-facebook text-white text-4xl"></i>
                    </button>
                    <button class="bg-gray-800 rounded-full w-20 h-20 p-4 hover:bg-blue-500 duration-150 transition-all">
                        <i class="fab fa-twitter text-white text-4xl"></i>
                    </button>
                    <button class="bg-gray-800 rounded-full w-20 h-20 p-4 hover:bg-violet-500 duration-150 transition-all">
                        <i class="fab fa-instagram text-white text-4xl"></i>
                    </button>
                    <button class="bg-gray-800 rounded-full w-20 h-20 p-4 hover:bg-red-500 duration-150 transition-all">
                        <i class="fab fa-youtube text-white text-4xl"></i>
                    </button>
                    <button class="bg-gray-800 rounded-full w-20 h-20 p-4 hover:bg-blue-600 duration-150 transition-all">
                        <i class="fab fa-linkedin text-white text-4xl"></i>
                    </button>
                </div>
                <img src="https://www.uii.ac.id/wp-content/uploads/2023/03/Logo-Akreditasi-UII-2023-terbaru-2048x120.png" alt="sponsor" class="mt-5">
            </section>
        </div>
    </div>
    <x-footer />
</body>

</html>