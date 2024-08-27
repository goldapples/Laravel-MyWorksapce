<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Workspace</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/import.css') }}" rel="stylesheet">

        <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
        <meta name="og:type" content="website">
        <meta name="twitter:card" content="photo">
        <script id="anima-load-script" src="load.js"></script>
        <script id="anima-hotspots-script" src="hotspots.js"></script>

        <script id="s_turbo" src="https://animaapp.s3.amazonaws.com/static/turbo.es2017-umd.js"></script>
        <script id="anima-overrides-script" src="overrides.js"></script>
        <script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script>

        <script id="anime-js-script" src="https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js"
            integrity="sha256-98Q574VkbV+PkxXCKSgL6jVq9mrVbS7uCdA+vt0sLS8=" crossorigin="anonymous"></script>
        <script id="imgloaded-js-script" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>

    <body style="margin: 0px; background: rgb(24, 25, 33); overflow-x: hidden;" dark-scroll="">
        <input type="hidden" id="anPageName" name="page" value="data-visualization-page">
        <div class="container-center-horizontal">

            <div class="data-visualization-page screen " data-id="1:2094">
                <div class="rectangle-1-58xVYz" data-id="1:2095"></div>
                <div class="sidebar-menu-58xVYz" data-id="1:2096">
                    <div class="frame-1000002334-8sJYCd" data-id="I1:2096;1481:256494">
                        <div class="top-FMpbpU" data-id="I1:2096;525:7437">
                            <div class="frame-68-XKxXLe" data-id="I1:2096;525:7438">
                                <div class="frame-1000002327-xiMyaV" data-id="I1:2096;1481:171305">
                                    <div class="avater-TMJuw8" data-id="I1:2096;1481:171306">
                                        <div class="workspace-button-IWMDg0" data-id="I1:2096;1481:171307">
                                            <div class="frame-65-d1xdIr" data-id="I1:2096;1481:171307;34:521">
                                                <div class="mw-bMORF8 microregular" data-id="I1:2096;1481:171307;34:520">MW
                                                </div>
                                            </div>
                                            <div class="my-workspace-d1xdIr smallmedium"
                                                data-id="I1:2096;1481:171307;34:519">My Workspace</div>
                                        </div>
                                        <div class="avatar-button-IWMDg0" data-id="I1:2096;1481:171308">
                                            <div class="avatar-sQnTvL"
                                                data-id="I1:2096;1481:171308;109:6160-101fdd8c-9442-4fe9-9db5-003592095f26">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-button-TMJuw8" data-id="I1:2096;1481:171309"><img
                                            class="all-icon-SJ0Zoe all-icon" data-id="I1:2096;1481:171309;34:412"
                                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon.svg"
                                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon.svg"
                                            alt="All-icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-FMpbpU" data-id="I1:2096;1481:248447">
                            <div class="body-1-Lpq8S9" data-id="I1:2096;1481:137868">
                                <div class="menu-buttons-cbU0m8 menu-buttons" data-id="I1:2096;1481:137869">
                                    <div class="frame-1000002330-3j4QzX" data-id="I1:2096;1481:137869;1484:155327"><img
                                            class="all-icon-zvROje all-icon" data-id="I1:2096;1481:137869;28:308"
                                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-1.svg"
                                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-1.svg"
                                            alt="All-icon">
                                        <div class="inbox smallmedium" data-id="I1:2096;1481:137869;28:309">Dashboard</div>
                                    </div>
                                </div>

                                <div class="analysis" data-id="I1:2096;1481:137870">
                                    <div class="menu-buttons-7yLxQ7 menu-buttons" data-id="I1:2096;1481:137871">
                                        <div class="frame-1000002329" data-id="I1:2096;1481:137871;1484:149026"><img
                                                class="all-icon-bwof0J all-icon" data-id="I1:2096;1481:137871;26:321"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-2.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-2.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137871;26:324">Analysis
                                            </div>
                                        </div><img class="a-down" data-id="I1:2096;1481:137871;1484:143361"
                                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/a-down.svg"
                                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/a-down.svg"
                                            alt="a-down">
                                    </div>
                                    <div class="frame-1000002323" data-id="I1:2096;1481:137872">
                                        <article class="menu-buttons-zEdgc4 menu-buttons" data-id="I1:2096;1481:137873"><img
                                                class="all-icon-my8Lum all-icon" data-id="I1:2096;1481:137873;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137873;28:364">User
                                                Analysis</div>
                                        </article>
                                        <article class="menu-buttons-sk0tZu menu-buttons" data-id="I1:2096;1481:137874"><img
                                                class="all-icon-ZBelCp all-icon" data-id="I1:2096;1481:137874;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137874;28:364">Content
                                                Analysis</div>
                                        </article>
                                        <article class="menu-buttons-5yPryl menu-buttons" data-id="I1:2096;1481:137875"><img
                                                class="all-icon-rZuWK1 all-icon" data-id="I1:2096;1481:137875;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137875;28:364">Survey
                                                Report</div>
                                        </article>
                                    </div>
                                </div>
                                <div class="managment-cbU0m8" data-id="I1:2096;1481:137876">
                                    <div class="menu-buttons-BowiKl menu-buttons" data-id="I1:2096;1481:137877">
                                        <div class="frame-1000002329" data-id="I1:2096;1481:137877;1484:149026"><img
                                                class="all-icon-q7AvXm all-icon" data-id="I1:2096;1481:137877;26:321"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-2.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-2.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137877;26:324">Management
                                            </div>
                                        </div><img class="a-down" data-id="I1:2096;1481:137877;1484:143361"
                                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/a-down-1.svg"
                                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/a-down-1.svg"
                                            alt="a-down">
                                    </div>
                                    <div class="frame-1000002324-BowiKl" data-id="I1:2096;165:115362">
                                        <div class="menu-buttons-xOHXA3 menu-buttons" data-id="I1:2096;165:115363"><img
                                                class="all-icon-cNNmrS all-icon" data-id="I1:2096;165:115363;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;165:115363;28:364">Content
                                                Upload</div>
                                        </div>
                                    </div>
                                    <div class="frame-1000002325-BowiKl" data-id="I1:2096;471:106210">
                                        <div class="menu-buttons-MvsS4j menu-buttons" data-id="I1:2096;471:106211"><img
                                                class="all-icon-1Kmg59 all-icon" data-id="I1:2096;471:106211;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox-1Kmg59 inbox smallmedium" data-id="I1:2096;471:106211;28:364">
                                                Content Management</div>
                                        </div>
                                    </div>
                                    <div class="frame-1000002326-BowiKl" data-id="I1:2096;471:196493">
                                        <div class="menu-buttons-gxxivm menu-buttons" data-id="I1:2096;471:196494"><img
                                                class="all-icon-EbxZw0 all-icon" data-id="I1:2096;471:196494;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;471:196494;28:364">Category
                                                &amp; Tags</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="analysis" data-id="I1:2096;1481:137880">
                                    <div class="menu-buttons-OIpQtw menu-buttons" data-id="I1:2096;1481:137881">
                                        <div class="frame-1000002329" data-id="I1:2096;1481:137881;1484:149026"><img
                                                class="all-icon-2sZxT0 all-icon" data-id="I1:2096;1481:137881;26:321"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-2.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-2.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137881;26:324">Affiliate
                                            </div>
                                        </div><img class="a-down" data-id="I1:2096;1481:137881;1484:143361"
                                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/a-down-2.svg"
                                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/a-down-2.svg"
                                            alt="a-down">
                                    </div>
                                    <div class="frame-1000002323" data-id="I1:2096;1481:137882">
                                        <article class="menu-buttons-qxoJtc menu-buttons" data-id="I1:2096;1481:137883"><img
                                                class="all-icon-xqFMt3 all-icon" data-id="I1:2096;1481:137883;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137883;28:364">Analytics
                                            </div>
                                        </article>
                                        <article class="menu-buttons-SJeDal menu-buttons" data-id="I1:2096;1481:137884"><img
                                                class="all-icon-WdQiKj all-icon" data-id="I1:2096;1481:137884;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-12.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-12.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137884;28:364">Campaign
                                            </div>
                                        </article>
                                        <article class="menu-buttons-x2KsRu menu-buttons" data-id="I1:2096;1481:137885"><img
                                                class="all-icon-xUSR3V all-icon" data-id="I1:2096;1481:137885;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">
                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137885;28:364">Affiliate
                                            </div>
                                        </article>
                                        <article class="menu-buttons-ANUWdU menu-buttons" data-id="I1:2096;1481:137886"><img
                                                class="all-icon-15YE1j all-icon" data-id="I1:2096;1481:137886;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-14.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-14.svg"
                                                alt="All-icon">
                                            <div class="inbox-15YE1j inbox smallmedium"
                                                data-id="I1:2096;1481:137886;28:364">Sales &amp; Commissions</div>
                                        </article>
                                        <article class="menu-buttons-rZds8Q menu-buttons" data-id="I1:2096;1481:137887"><img
                                                class="all-icon-QBqYZi all-icon" data-id="I1:2096;1481:137887;28:363"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-3.svg"
                                                alt="All-icon">

                                            <div class="inbox smallmedium" data-id="I1:2096;1481:137887;28:364">Setting
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="menu-buttons-FLjBat menu-buttons" data-id="I1:2096;1481:137888">
                                    <div class="frame-1000002329" data-id="I1:2096;1481:137888;1484:149026"><img
                                            class="all-icon-AQZxe0 all-icon" data-id="I1:2096;1481:137888;26:321"
                                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-16.svg"
                                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-16.svg"
                                            alt="All-icon">
                                        <div class="inbox smallmedium" data-id="I1:2096;1481:137888;26:324">API Management
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-1000002332-Lpq8S9" data-id="I1:2096;1481:244746">
                                <div class="frame-1000002337-A8PBPx" data-id="I1:2096;688:136665">
                                    <div class="invite-fEqRXH" data-id="I1:2096;525:7432">
                                        <article class="bottom-menu-buttons-TT6NQ3 bottom-menu-buttons"
                                            data-id="I1:2096;525:7433"><img class="plus-5O2ily"
                                                data-id="I1:2096;525:7433;28:891"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/plus.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/plus.svg"
                                                alt="plus">
                                            <div class="invite-people-5O2ily miniregular" data-id="I1:2096;525:7433;28:872">
                                                Invite people</div>
                                        </article>
                                        <article class="bottom-menu-buttons-pn69vc bottom-menu-buttons"
                                            data-id="I1:2096;525:7434"><img class="book-aa31cm"
                                                data-id="I1:2096;525:7434;28:895"
                                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/book.svg"
                                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/book.svg"
                                                alt="book">
                                            <div class="help-support-aa31cm miniregular" data-id="I1:2096;525:7434;28:876">
                                                Help &amp; Support</div>
                                        </article>
                                    </div>
                                    <div class="sidebar-banner-fEqRXH sidebar-banner" data-id="I1:2096;688:130591">
                                        <div class="frame-60" data-id="I1:2096;688:130591;28:963">
                                            <div class="import-issues minimedium" data-id="I1:2096;688:130591;28:960">App
                                                version 3.1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-banner-A8PBPx sidebar-banner" data-id="I1:2096;1481:169445"><img
                                        class="all-icon-xYPDsq all-icon" data-id="I1:2096;1481:169445;28:939"
                                        src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-17.svg"
                                        anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-17.svg"
                                        alt="All-icon">
                                    <div class="frame-60" data-id="I1:2096;1481:169445;28:963">
                                        <div class="import-issues minimedium" data-id="I1:2096;1481:169445;28:960">Import
                                            Issues</div>
                                        <div class="frame-59-nxs460" data-id="I1:2096;1481:169445;28:962">
                                            <p class="use-our-migration-as-b0wP5a microregular"
                                                data-id="I1:2096;1481:169445;28:961">Use our Migration Assistant to copy
                                                issues from another service.</p>
                                        </div>
                                        <div class="buttons-nxs460" data-id="I1:2096;1481:169445;28:958">
                                            <div class="try-now-uxdi0k minimedium"
                                                data-id="I1:2096;1481:169445;28:958;28:945">Try Now →</div>
                                        </div>
                                    </div>
                                    <div class="close-button-xYPDsq" data-id="I1:2096;1481:169445;28:994"><img
                                            class="all-icon-mwo1Yy all-icon" data-id="I1:2096;1481:169445;28:994;28:982"
                                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-18.svg"
                                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-18.svg"
                                            alt="All-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-309-58xVYz" data-id="1:2097">
                    <div class="frame-1000002378-JOSxv8" data-id="1:2098">
                        <div class="revenue-eKhxY0" data-id="1:2099">Revenue</div>
                        <div class="frame-302-eKhxY0" data-id="1:2100">
                            <div class="frame-301-Yq2mOG" data-id="1:2101">
                                <article class="simple-dropdown-KtFXAQ simple-dropdown" data-id="1:2102">
                                    <div class="status micromedium" data-id="I1:2102;86:2748">MRR</div>
                                </article>
                                <article class="simple-dropdown-GOvK4c simple-dropdown" data-id="1:2103">
                                    <div class="status micromedium" data-id="I1:2103;86:2748">ARPU</div>
                                </article>
                            </div>
                        </div>
                        <div class="dropdown-filter-options-eKhxY0" data-id="1:2104">
                            <div class="dropdown-filter-options-4HYumZ" data-id="I1:2104;333:10108">
                                <div class="frame-77-Uxzlj2" data-id="I1:2104;333:10109"><img
                                        class="all-icon-Qetvmw all-icon" data-id="I1:2104;333:10110"
                                        src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-19.svg"
                                        anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/all-icon-19.svg"
                                        alt="All-icon">
                                    <div class="jan-2-2024-Qetvmw smallregular" data-id="I1:2104;333:10111">Jan 2, 2024
                                    </div>
                                </div>
                                <div class="frame-285" data-id="I1:2104;333:10138">
                                    <div class="last-30-days-GdYb9c last-30-days smallregular" data-id="I1:2104;333:10114">
                                        Last 30 Days</div><img class="dropdown-filter-optionsa-down-GdYb9c"
                                        data-id="I1:2104;333:10119"
                                        src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/-dropdown-filter-options-a-down.svg"
                                        anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/-dropdown-filter-options-a-down.svg"
                                        alt="Dropdown Filter Options/a-down">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divsmall-details-card-grid-JOSxv8" data-id="1:2105">
                        <div class="frame-1171275154-ix6Att" data-id="1:2106">
                            <div class="divw-node-_9745c905" data-id="1:2107">
                                <div class="divflex" data-id="1:2109">
                                    <div class="frame-1000002668" data-id="1:2111">
                                        <div class="total-mrr-Y7tBDX valign-text-middle total-mrr minimedium"
                                            data-id="1:2112">Total MRR</div>
                                    </div>
                                </div>
                                <div class="x14775-h2wnS5 valign-text-middle x14775 inter-semi-bold-white-20px"
                                    data-id="1:2113">$14,775</div>
                            </div>
                            <div class="divw-node-_9745c905" data-id="1:2114">
                                <div class="divflex" data-id="1:2116">
                                    <div class="frame-1000002668" data-id="1:2118">
                                        <div class="arpu-XCdIWy valign-text-middle arpu minimedium" data-id="1:2119">ARPU
                                        </div>
                                    </div>
                                </div>
                                <div class="x10000-HTaFKJ valign-text-middle x10000 inter-semi-bold-white-20px"
                                    data-id="1:2120">$10,000</div>
                            </div>
                        </div>
                        <div class="frame-1171275151-ix6Att" data-id="1:2121">
                            <div class="divw-node-_9745c905" data-id="1:2122">
                                <div class="divflex" data-id="1:2124">
                                    <div class="frame-1000002668" data-id="1:2126">
                                        <div class="new-mrr-xuxGNf valign-text-middle new-mrr minimedium" data-id="1:2127">
                                            New MRR</div>
                                    </div>
                                </div>
                                <div class="x14775-JxyGnt valign-text-middle x14775 inter-semi-bold-white-20px"
                                    data-id="1:2128">$14,775</div>
                            </div>
                            <div class="divw-node-_9745c905" data-id="1:2129">
                                <div class="divflex" data-id="1:2131">
                                    <div class="frame-1000002668" data-id="1:2133">
                                        <div class="reactivations-Hyf2Ao valign-text-middle reactivations minimedium"
                                            data-id="1:2134">Reactivations</div>
                                    </div>
                                </div>
                                <div class="x10000-71t0AV valign-text-middle x10000 inter-semi-bold-white-20px"
                                    data-id="1:2135">$10,000</div>
                            </div>
                        </div>
                        <div class="frame-1171275152-ix6Att" data-id="1:2136">
                            <div class="divw-node-_9745c905" data-id="1:2137">
                                <div class="divflex" data-id="1:2139">
                                    <div class="frame-1000002668" data-id="1:2141">
                                        <div class="upgrades-NLQkmU valign-text-middle upgrades minimedium"
                                            data-id="1:2142">Upgrades</div>
                                    </div>
                                </div>
                                <div class="x13000-Ogiczn valign-text-middle x13000 inter-semi-bold-white-20px"
                                    data-id="1:2143">$13,000</div>
                            </div>
                            <div class="divw-node-_9745c905" data-id="1:2144">
                                <div class="divflex" data-id="1:2146">
                                    <div class="frame-1000002668" data-id="1:2148">
                                        <div class="existing-i3F9cM valign-text-middle existing minimedium"
                                            data-id="1:2149">Existing</div>
                                    </div>
                                </div>
                                <div class="x10000-75sW9N valign-text-middle x10000 inter-semi-bold-white-20px"
                                    data-id="1:2150">$10,000</div>
                            </div>
                        </div>
                        <div class="frame-1171275153-ix6Att" data-id="1:2151">

                            <div class="divw-node-_9745c905" data-id="1:2152">
                                <div class="divflex" data-id="1:2154">
                                    <div class="frame-1000002668" data-id="1:2156">
                                        <div class="downgrades-zcNvox valign-text-middle downgrades minimedium"
                                            data-id="1:2157">Downgrades</div>
                                    </div>
                                </div>
                                <div class="x755-L9PHTl valign-text-middle inter-semi-bold-white-20px" data-id="1:2158">$755
                                </div>
                            </div>
                            <div class="divw-node-_9745c905" data-id="1:2159">
                                <div class="divflex" data-id="1:2161">
                                    <div class="frame-1000002668" data-id="1:2163">
                                        <div class="churn-Qdx7nw valign-text-middle churn minimedium" data-id="1:2164">Churn
                                        </div>
                                    </div>
                                </div>
                                <div class="x100-9qRH0R valign-text-middle x100 inter-semi-bold-white-20px"
                                    data-id="1:2165">$100</div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-1000002300-JOSxv8" data-id="1:2166">
                        <div class="frame-295-lG2uKk" data-id="1:2167">
                            <div class="label-dots-ycGNKh label-dots" data-id="1:2168"></div>
                            <div class="total-mrr-ycGNKh total-mrr minimedium" data-id="1:2169">Total MRR</div>
                        </div>
                        <div class="frame-296-lG2uKk" data-id="1:2170">
                            <div class="label-dots-xuZDC0 label-dots" data-id="1:2171"></div>
                            <div class="new-mrp-xuZDC0 minimedium" data-id="1:2172">New MRP</div>
                        </div>
                        <div class="frame-297-lG2uKk" data-id="1:2173">
                            <div class="label-dots-zSEjNl label-dots" data-id="1:2174"></div>
                            <div class="reactivations-zSEjNl reactivations minimedium" data-id="1:2175">Reactivations</div>
                        </div>
                        <div class="frame-298-lG2uKk" data-id="1:2176">
                            <div class="label-dots-gtWGBu label-dots" data-id="1:2177"></div>
                            <div class="upgrades-gtWGBu upgrades minimedium" data-id="1:2178">Upgrades</div>
                        </div>
                        <div class="frame-293" data-id="1:2179">
                            <div class="label-dots-9srHqO label-dots" data-id="1:2180"></div>
                            <div class="existing-9srHqO existing minimedium" data-id="1:2181">Existing</div>
                        </div>
                        <div class="frame-293" data-id="1:2182">
                            <div class="label-dots-grFd9N label-dots" data-id="1:2183"></div>
                            <div class="downgrades-grFd9N downgrades minimedium" data-id="1:2184">Downgrades</div>
                        </div>
                        <div class="frame-294-lG2uKk" data-id="1:2185">
                            <div class="label-dots-4Fch89 label-dots" data-id="1:2186"></div>
                            <div class="churn-4Fch89 churn minimedium" data-id="1:2187">Churn</div>
                        </div>
                    </div>
                    <div class="frame-1000002242-JOSxv8 frame-1000002242" data-id="1:2188">
                        <div class="frame-1000002247-YOwmGz" data-id="1:2189">
                            <div class="frame-1000002238-ePy1sf frame-1000002238" data-id="1:2190">
                                <div class="x13k-nJeNcI miniregular" data-id="1:2191">13k</div>
                            </div><img class="line-6" data-id="1:2192"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002248-YOwmGz" data-id="1:2193">
                            <div class="frame-1000002238-VYIb3a frame-1000002238" data-id="1:2194">
                                <div class="x12k-yn1g01 miniregular" data-id="1:2195">12k</div>
                            </div><img class="line-6" data-id="1:2196"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002249-YOwmGz" data-id="1:2197">
                            <div class="frame-1000002238-mDc0FD frame-1000002238" data-id="1:2198">
                                <div class="x11k-DZ6M2S miniregular" data-id="1:2199">11k</div>
                            </div><img class="line-6" data-id="1:2200"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002250-YOwmGz" data-id="1:2201">
                            <div class="frame-1000002238-EzO38w frame-1000002238" data-id="1:2202">
                                <div class="x10k-PsbRF3 miniregular" data-id="1:2203">10k</div>
                            </div><img class="line-6" data-id="1:2204"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002251-YOwmGz" data-id="1:2205">
                            <div class="frame-1000002238-61w1dR frame-1000002238" data-id="1:2206">
                                <div class="x9k-K1qg4V miniregular" data-id="1:2207">9k</div>
                            </div><img class="line-6" data-id="1:2208"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002252-YOwmGz" data-id="1:2209">
                            <div class="frame-1000002238-BrXDXm frame-1000002238" data-id="1:2210">
                                <div class="x8k-0SEqCe miniregular" data-id="1:2211">8k</div>
                            </div><img class="line-6" data-id="1:2212"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002242-YOwmGz frame-1000002242" data-id="1:2213">
                            <div class="frame-1000002238-DW1YqU frame-1000002238" data-id="1:2214">
                                <div class="x7k-GTT4xV miniregular" data-id="1:2215">7k</div>
                            </div><img class="line-6" data-id="1:2216"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002243" data-id="1:2217">
                            <div class="frame-1000002238-RmYG6q frame-1000002238" data-id="1:2218">
                                <div class="x6k-rsxiDt miniregular" data-id="1:2219">6k</div>
                            </div><img class="line-6" data-id="1:2220"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002244-YOwmGz" data-id="1:2221">
                            <div class="frame-1000002238-rqoJtR frame-1000002238" data-id="1:2222">
                                <div class="x5k-eonLuP miniregular" data-id="1:2223">5k</div>
                            </div><img class="line-6" data-id="1:2224"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002240-YOwmGz" data-id="1:2225">
                            <div class="frame-1000002238-IOpaqf frame-1000002238" data-id="1:2226">
                                <div class="x4k-rYc9gn miniregular" data-id="1:2227">4k</div>
                            </div><img class="line-6" data-id="1:2228"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002239-YOwmGz" data-id="1:2229">
                            <div class="frame-1000002238-vxbcoh frame-1000002238" data-id="1:2230">
                                <div class="x3k-wWBxwh miniregular" data-id="1:2231">3k</div>
                            </div><img class="line-6" data-id="1:2232"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002238-YOwmGz frame-1000002238" data-id="1:2233">
                            <div class="frame-1000002238-XdmEtk frame-1000002238" data-id="1:2234">
                                <div class="x2k-Utmtcx miniregular" data-id="1:2235">2k</div>
                            </div><img class="line-6" data-id="1:2236"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002237-YOwmGz" data-id="1:2237">
                            <div class="frame-1000002238-6BNwqX frame-1000002238" data-id="1:2238">
                                <div class="x1k-7SOO3U miniregular" data-id="1:2239">1k</div>
                            </div><img class="line-6" data-id="1:2240"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-6.svg"
                                alt="Line 6">
                        </div>
                        <div class="frame-1000002235-YOwmGz" data-id="1:2241">
                            <div class="frame-1000002236-fiEpEh" data-id="1:2242">
                                <div class="x0k-vEdp19 minimedium" data-id="1:2243">0k</div>
                            </div><img class="line-4-fiEpEh" data-id="1:2244"
                                src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-4.svg"
                                anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-4.svg"
                                alt="Line 4">
                        </div><img class="group-289341-YOwmGz" data-id="1:2245"
                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/group-289341.png"
                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/group-289341.png"
                            alt="Group 289341">
                    </div>
                    <div class="frame-1000002243-JOSxv8 frame-1000002243" data-id="1:2247">
                        <article class="frame-1000002345-Gk3VsO" data-id="1:2248">
                            <div class="x01 miniregular" data-id="I1:2248;1243:91947"></div>
                        </article>
                        <article class="frame-1000002376-Gk3VsO" data-id="1:2249">
                            <div class="x01 miniregular" data-id="I1:2249;1243:91947">1 Jan</div>
                        </article>
                        <article class="frame-1000002346-Gk3VsO" data-id="1:2250">
                            <div class="x01 miniregular" data-id="I1:2250;1243:91947">2 Jan</div>
                        </article>
                        <article class="frame-1000002347-Gk3VsO" data-id="1:2251">
                            <div class="x01 miniregular" data-id="I1:2251;1243:91947">3 Jan</div>
                        </article>
                        <article class="frame-1000002348-Gk3VsO" data-id="1:2252">
                            <div class="x01 miniregular" data-id="I1:2252;1243:91947">4 Jan</div>
                        </article>
                        <article class="frame-1000002349-Gk3VsO" data-id="1:2253">
                            <div class="x01 miniregular" data-id="I1:2253;1243:91947">5 Jan</div>
                        </article>
                        <article class="frame-1000002350-Gk3VsO" data-id="1:2254">
                            <div class="x01 miniregular" data-id="I1:2254;1243:91947">6 Jan</div>
                        </article>
                        <article class="frame-1000002351-Gk3VsO" data-id="1:2255">
                            <div class="x01 miniregular" data-id="I1:2255;1243:91947">7 Jan</div>
                        </article>
                        <article class="frame-1000002352-Gk3VsO" data-id="1:2256">
                            <div class="x01 miniregular" data-id="I1:2256;1243:91947">8 Jan</div>
                        </article>
                        <article class="frame-1000002353-Gk3VsO" data-id="1:2257">
                            <div class="x01 miniregular" data-id="I1:2257;1243:91947">9 Jan</div>
                        </article>
                        <article class="frame-1000002354-Gk3VsO" data-id="1:2258">
                            <div class="x01 miniregular" data-id="I1:2258;1243:91947">10 Jan</div>
                        </article>
                        <article class="frame-1000002355-Gk3VsO" data-id="1:2259">
                            <div class="x01 miniregular" data-id="I1:2259;1243:91947">11 Jan</div>
                        </article>
                        <article class="frame-1000002356-Gk3VsO" data-id="1:2260">
                            <div class="x01 miniregular" data-id="I1:2260;1243:91947">12 Jan</div>
                        </article>
                        <article class="frame-1000002357-Gk3VsO" data-id="1:2261">
                            <div class="x01 miniregular" data-id="I1:2261;1243:91947">13 Jan</div>
                        </article>
                        <article class="frame-1000002358-Gk3VsO" data-id="1:2262">
                            <div class="x01 miniregular" data-id="I1:2262;1243:91947">14 Jan</div>
                        </article>
                        <article class="frame-1000002359-Gk3VsO" data-id="1:2263">
                            <div class="x01 miniregular" data-id="I1:2263;1243:91947">15 Jan</div>
                        </article>
                        <article class="frame-1000002360-Gk3VsO" data-id="1:2264">
                            <div class="x01 miniregular" data-id="I1:2264;1243:91947">16 Jan</div>
                        </article>
                        <article class="frame-1000002361-Gk3VsO" data-id="1:2265">
                            <div class="x01 miniregular" data-id="I1:2265;1243:91947">17 Jan</div>
                        </article>
                        <article class="frame-1000002362-Gk3VsO" data-id="1:2266">
                            <div class="x01 miniregular" data-id="I1:2266;1243:91947">18 Jan</div>
                        </article>
                        <article class="frame-1000002363-Gk3VsO" data-id="1:2267">
                            <div class="x01 miniregular" data-id="I1:2267;1243:91947">19 Jan</div>
                        </article>
                    </div>
                </div>
                <div class="frame-1000002547-58xVYz" data-id="1:2279"><img class="solararrow-left-linear-NyCmVL"
                        data-id="1:2280"
                        src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/solar-arrow-left-linear.svg"
                        anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/solar-arrow-left-linear.svg"
                        alt="solar:arrow-left-linear">
                    <div class="back-NyCmVL inter-semi-bold-white-12px" data-id="1:2282">Back</div>
                </div>
                <div class="group-1171275188-58xVYz" data-id="1:2283">
                    <div class="group-1171275169-yA7uI0" data-id="1:2284">
                        <div class="rectangle-5558-B22ZOT rectangle-5558" data-id="1:2285"></div>
                        <div class="rectangle-5559-B22ZOT rectangle-5559" data-id="1:2286"></div>
                        <div class="rectangle-5560-B22ZOT rectangle-5560" data-id="1:2287"></div>
                        <div class="rectangle-5561-B22ZOT rectangle-5561" data-id="1:2288"></div>
                        <div class="rectangle-5562-B22ZOT rectangle-5562" data-id="1:2289"></div>
                        <div class="rectangle-5563-B22ZOT rectangle-5563" data-id="1:2290"></div>
                        <div class="rectangle-5564-B22ZOT rectangle-5564" data-id="1:2291"></div>
                    </div>
                    <div class="group-1171275170-yA7uI0" data-id="1:2292">
                        <div class="rectangle-5558-PLW3pM rectangle-5558" data-id="1:2293"></div>
                        <div class="rectangle-5559-PLW3pM rectangle-5559" data-id="1:2294"></div>
                        <div class="rectangle-5560-PLW3pM rectangle-5560" data-id="1:2295"></div>
                        <div class="rectangle-5561-PLW3pM rectangle-5561" data-id="1:2296"></div>
                        <div class="rectangle-5562-PLW3pM rectangle-5562" data-id="1:2297"></div>
                        <div class="rectangle-5563-PLW3pM rectangle-5563" data-id="1:2298"></div>
                        <div class="rectangle-5564-PLW3pM rectangle-5564" data-id="1:2299"></div>
                    </div>
                    <div class="group-1171275171-yA7uI0" data-id="1:2300">
                        <div class="rectangle-5558-x7aLIh rectangle-5558" data-id="1:2301"></div>
                        <div class="rectangle-5559-x7aLIh rectangle-5559" data-id="1:2302"></div>
                        <div class="rectangle-5560-x7aLIh rectangle-5560" data-id="1:2303"></div>
                        <div class="rectangle-5561-x7aLIh rectangle-5561" data-id="1:2304"></div>
                        <div class="rectangle-5562-x7aLIh rectangle-5562" data-id="1:2305"></div>
                        <div class="rectangle-5563-x7aLIh rectangle-5563" data-id="1:2306"></div>
                        <div class="rectangle-5564-x7aLIh rectangle-5564" data-id="1:2307"></div>
                    </div>
                    <div class="group-1171275172-yA7uI0" data-id="1:2308">
                        <div class="rectangle-5558-1gnjFP rectangle-5558" data-id="1:2309"></div>
                        <div class="rectangle-5559-1gnjFP rectangle-5559" data-id="1:2310"></div>
                        <div class="rectangle-5560-1gnjFP rectangle-5560" data-id="1:2311"></div>
                        <div class="rectangle-5561-1gnjFP rectangle-5561" data-id="1:2312"></div>
                        <div class="rectangle-5562-1gnjFP rectangle-5562" data-id="1:2313"></div>
                        <div class="rectangle-5563-1gnjFP rectangle-5563" data-id="1:2314"></div>
                        <div class="rectangle-5564-1gnjFP rectangle-5564" data-id="1:2315"></div>
                    </div>
                    <div class="group-1171275173-yA7uI0" data-id="1:2316">
                        <div class="rectangle-5558-wIPgY5 rectangle-5558" data-id="1:2317"></div>
                        <div class="rectangle-5559-wIPgY5 rectangle-5559" data-id="1:2318"></div>
                        <div class="rectangle-5560-wIPgY5 rectangle-5560" data-id="1:2319"></div>
                        <div class="rectangle-5561-wIPgY5 rectangle-5561" data-id="1:2320"></div>
                        <div class="rectangle-5562-wIPgY5 rectangle-5562" data-id="1:2321"></div>
                        <div class="rectangle-5563-wIPgY5 rectangle-5563" data-id="1:2322"></div>
                        <div class="rectangle-5564-wIPgY5 rectangle-5564" data-id="1:2323"></div>
                    </div>
                    <div class="group-1171275174-yA7uI0" data-id="1:2324">
                        <div class="rectangle-5558-zIe9LL rectangle-5558" data-id="1:2325"></div>
                        <div class="rectangle-5559-zIe9LL rectangle-5559" data-id="1:2326"></div>
                        <div class="rectangle-5560-zIe9LL rectangle-5560" data-id="1:2327"></div>
                        <div class="rectangle-5561-zIe9LL rectangle-5561" data-id="1:2328"></div>
                        <div class="rectangle-5562-zIe9LL rectangle-5562" data-id="1:2329"></div>
                        <div class="rectangle-5563-zIe9LL rectangle-5563" data-id="1:2330"></div>
                        <div class="rectangle-5564-zIe9LL rectangle-5564" data-id="1:2331"></div>
                    </div>
                    <div class="group-1171275175-yA7uI0" data-id="1:2332">
                        <div class="rectangle-5558-CHpH1H rectangle-5558" data-id="1:2333"></div>
                        <div class="rectangle-5559-CHpH1H rectangle-5559" data-id="1:2334"></div>
                        <div class="rectangle-5560-CHpH1H rectangle-5560" data-id="1:2335"></div>
                        <div class="rectangle-5561-CHpH1H rectangle-5561" data-id="1:2336"></div>
                        <div class="rectangle-5562-CHpH1H rectangle-5562" data-id="1:2337"></div>
                        <div class="rectangle-5563-CHpH1H rectangle-5563" data-id="1:2338"></div>
                        <div class="rectangle-5564-CHpH1H rectangle-5564" data-id="1:2339"></div>
                    </div>
                    <div class="group-1171275176-yA7uI0" data-id="1:2340">
                        <div class="rectangle-5558-2MByLv rectangle-5558" data-id="1:2341"></div>
                        <div class="rectangle-5559-2MByLv rectangle-5559" data-id="1:2342"></div>
                        <div class="rectangle-5560-2MByLv rectangle-5560" data-id="1:2343"></div>
                        <div class="rectangle-5561-2MByLv rectangle-5561" data-id="1:2344"></div>
                        <div class="rectangle-5562-2MByLv rectangle-5562" data-id="1:2345"></div>
                        <div class="rectangle-5563-2MByLv rectangle-5563" data-id="1:2346"></div>
                        <div class="rectangle-5564-2MByLv rectangle-5564" data-id="1:2347"></div>
                    </div>
                    <div class="group-1171275177-yA7uI0" data-id="1:2348">
                        <div class="rectangle-5558-P1Odei rectangle-5558" data-id="1:2349"></div>
                        <div class="rectangle-5559-P1Odei rectangle-5559" data-id="1:2350"></div>
                        <div class="rectangle-5560-P1Odei rectangle-5560" data-id="1:2351"></div>
                        <div class="rectangle-5561-P1Odei rectangle-5561" data-id="1:2352"></div>
                        <div class="rectangle-5562-P1Odei rectangle-5562" data-id="1:2353"></div>
                        <div class="rectangle-5563-P1Odei rectangle-5563" data-id="1:2354"></div>
                        <div class="rectangle-5564-P1Odei rectangle-5564" data-id="1:2355"></div>
                    </div>
                    <div class="group-1171275178-yA7uI0" data-id="1:2356">
                        <div class="rectangle-5558-zHjR6B rectangle-5558" data-id="1:2357"></div>
                        <div class="rectangle-5559-zHjR6B rectangle-5559" data-id="1:2358"></div>
                        <div class="rectangle-5560-zHjR6B rectangle-5560" data-id="1:2359"></div>
                        <div class="rectangle-5561-zHjR6B rectangle-5561" data-id="1:2360"></div>
                        <div class="rectangle-5562-zHjR6B rectangle-5562" data-id="1:2361"></div>
                        <div class="rectangle-5563-zHjR6B rectangle-5563" data-id="1:2362"></div>
                        <div class="rectangle-5564-zHjR6B rectangle-5564" data-id="1:2363"></div>
                    </div>
                    <div class="group-1171275179-yA7uI0" data-id="1:2364">
                        <div class="rectangle-5558-gAsf3R rectangle-5558" data-id="1:2365"></div>
                        <div class="rectangle-5559-gAsf3R rectangle-5559" data-id="1:2366"></div>
                        <div class="rectangle-5560-gAsf3R rectangle-5560" data-id="1:2367"></div>
                        <div class="rectangle-5561-gAsf3R rectangle-5561" data-id="1:2368"></div>
                        <div class="rectangle-5562-gAsf3R rectangle-5562" data-id="1:2369"></div>
                        <div class="rectangle-5563-gAsf3R rectangle-5563" data-id="1:2370"></div>
                        <div class="rectangle-5564-gAsf3R rectangle-5564" data-id="1:2371"></div>
                    </div>
                    <div class="group-1171275180-yA7uI0" data-id="1:2372">
                        <div class="rectangle-5558-PRrxGt rectangle-5558" data-id="1:2373"></div>
                        <div class="rectangle-5559-PRrxGt rectangle-5559" data-id="1:2374"></div>
                        <div class="rectangle-5560-PRrxGt rectangle-5560" data-id="1:2375"></div>
                        <div class="rectangle-5561-PRrxGt rectangle-5561" data-id="1:2376"></div>
                        <div class="rectangle-5562-PRrxGt rectangle-5562" data-id="1:2377"></div>
                        <div class="rectangle-5563-PRrxGt rectangle-5563" data-id="1:2378"></div>
                        <div class="rectangle-5564-PRrxGt rectangle-5564" data-id="1:2379"></div>
                    </div>
                    <div class="group-1171275181-yA7uI0" data-id="1:2380">
                        <div class="rectangle-5558-jJvg0Q rectangle-5558" data-id="1:2381"></div>
                        <div class="rectangle-5559-jJvg0Q rectangle-5559" data-id="1:2382"></div>
                        <div class="rectangle-5560-jJvg0Q rectangle-5560" data-id="1:2383"></div>
                        <div class="rectangle-5561-jJvg0Q rectangle-5561" data-id="1:2384"></div>
                        <div class="rectangle-5562-jJvg0Q rectangle-5562" data-id="1:2385"></div>
                        <div class="rectangle-5563-jJvg0Q rectangle-5563" data-id="1:2386"></div>
                        <div class="rectangle-5564-jJvg0Q rectangle-5564" data-id="1:2387"></div>
                    </div>
                    <div class="group-1171275182-yA7uI0" data-id="1:2388">
                        <div class="rectangle-5558-OQcR6d rectangle-5558" data-id="1:2389"></div>
                        <div class="rectangle-5559-OQcR6d rectangle-5559" data-id="1:2390"></div>
                        <div class="rectangle-5560-OQcR6d rectangle-5560" data-id="1:2391"></div>
                        <div class="rectangle-5561-OQcR6d rectangle-5561" data-id="1:2392"></div>
                        <div class="rectangle-5562-OQcR6d rectangle-5562" data-id="1:2393"></div>
                        <div class="rectangle-5563-OQcR6d rectangle-5563" data-id="1:2394"></div>
                        <div class="rectangle-5564-OQcR6d rectangle-5564" data-id="1:2395"></div>
                    </div>
                    <div class="group-1171275183-yA7uI0" data-id="1:2396">
                        <div class="rectangle-5558-LLjUwD rectangle-5558" data-id="1:2397"></div>
                        <div class="rectangle-5559-LLjUwD rectangle-5559" data-id="1:2398"></div>
                        <div class="rectangle-5560-LLjUwD rectangle-5560" data-id="1:2399"></div>
                        <div class="rectangle-5561-LLjUwD rectangle-5561" data-id="1:2400"></div>
                        <div class="rectangle-5562-LLjUwD rectangle-5562" data-id="1:2401"></div>
                        <div class="rectangle-5563-LLjUwD rectangle-5563" data-id="1:2402"></div>
                        <div class="rectangle-5564-LLjUwD rectangle-5564" data-id="1:2403"></div>
                    </div>
                    <div class="group-1171275184-yA7uI0" data-id="1:2404">
                        <div class="rectangle-5558-x3dUob rectangle-5558" data-id="1:2405"></div>
                        <div class="rectangle-5559-x3dUob rectangle-5559" data-id="1:2406"></div>
                        <div class="rectangle-5560-x3dUob rectangle-5560" data-id="1:2407"></div>
                        <div class="rectangle-5561-x3dUob rectangle-5561" data-id="1:2408"></div>
                        <div class="rectangle-5562-x3dUob rectangle-5562" data-id="1:2409"></div>
                        <div class="rectangle-5563-x3dUob rectangle-5563" data-id="1:2410"></div>
                        <div class="rectangle-5564-x3dUob rectangle-5564" data-id="1:2411"></div>
                    </div>
                    <div class="group-1171275185-yA7uI0" data-id="1:2412">
                        <div class="rectangle-5558-u8lYw5 rectangle-5558" data-id="1:2413"></div>
                        <div class="rectangle-5559-u8lYw5 rectangle-5559" data-id="1:2414"></div>
                        <div class="rectangle-5560-u8lYw5 rectangle-5560" data-id="1:2415"></div>
                        <div class="rectangle-5561-u8lYw5 rectangle-5561" data-id="1:2416"></div>
                        <div class="rectangle-5562-u8lYw5 rectangle-5562" data-id="1:2417"></div>
                        <div class="rectangle-5563-u8lYw5 rectangle-5563" data-id="1:2418"></div>
                        <div class="rectangle-5564-u8lYw5 rectangle-5564" data-id="1:2419"></div>
                    </div>
                    <div class="group-1171275186-yA7uI0" data-id="1:2420">
                        <div class="rectangle-5558-F12NiX rectangle-5558" data-id="1:2421"></div>
                        <div class="rectangle-5559-F12NiX rectangle-5559" data-id="1:2422"></div>
                        <div class="rectangle-5560-F12NiX rectangle-5560" data-id="1:2423"></div>
                        <div class="rectangle-5561-F12NiX rectangle-5561" data-id="1:2424"></div>
                        <div class="rectangle-5562-F12NiX rectangle-5562" data-id="1:2425"></div>
                        <div class="rectangle-5563-F12NiX rectangle-5563" data-id="1:2426"></div>
                        <div class="rectangle-5564-F12NiX rectangle-5564" data-id="1:2427"></div>
                    </div>
                    <div class="group-1171275187-yA7uI0" data-id="1:2428">
                        <div class="rectangle-5558-Hz5Ig7 rectangle-5558" data-id="1:2429"></div>
                        <div class="rectangle-5559-Hz5Ig7 rectangle-5559" data-id="1:2430"></div>
                        <div class="rectangle-5560-Hz5Ig7 rectangle-5560" data-id="1:2431"></div>
                        <div class="rectangle-5561-Hz5Ig7 rectangle-5561" data-id="1:2432"></div>
                        <div class="rectangle-5562-Hz5Ig7 rectangle-5562" data-id="1:2433"></div>
                        <div class="rectangle-5563-Hz5Ig7 rectangle-5563" data-id="1:2434"></div>
                        <div class="rectangle-5564-Hz5Ig7 rectangle-5564" data-id="1:2435"></div>
                    </div>
                </div>
                <div class="label-dots-58xVYz label-dots" data-id="1:2436"></div>
                <div class="group-1000002012-58xVYz" data-id="1:2437">
                    <div class="frame-1000011534-rSmVCQ" data-id="1:2438">
                        <div class="mrr-breakdown-Frnxmg" data-id="1:2439">MRR Breakdown</div>
                        <div class="dropdown-filter-options-Frnxmg" data-id="1:2440">
                            <div class="dropdown-filter-options-OOE3vF" data-id="I1:2440;1441:94863">
                                <div class="frame-285" data-id="I1:2440;1441:94865">
                                    <div class="last-30-days-Tqnjnm last-30-days micromedium" data-id="I1:2440;1441:94866">7
                                        Jan 2024</div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-1000011539-Frnxmg" data-id="1:2441">
                            <div class="frame-1000011538-trGCZM" data-id="1:2442">
                                <div class="frame-1000011536-aFwwKE" data-id="1:2443">
                                    <div class="ellipse-230-7Thkwa" data-id="1:2444"></div>
                                    <div class="ellipse-231-7Thkwa" data-id="1:2445"></div>
                                    <div class="ellipse-232-7Thkwa" data-id="1:2446"></div>
                                    <div class="ellipse-233-7Thkwa" data-id="1:2447"></div>
                                    <div class="ellipse-234-7Thkwa" data-id="1:2448"></div>
                                    <div class="ellipse-235-7Thkwa ellipse-235" data-id="1:2449"></div>
                                    <div class="ellipse-236-7Thkwa" data-id="1:2450"></div>
                                </div>
                                <div class="frame-1000011535-aFwwKE" data-id="1:2451">
                                    <div class="new-mrr-f0o0zJ new-mrr minimedium" data-id="1:2452">New MRR</div>
                                    <div class="upgrades-f0o0zJ upgrades minimedium" data-id="1:2453">Upgrades</div>
                                    <div class="reactivations-f0o0zJ reactivations minimedium" data-id="1:2454">
                                        Reactivations</div>
                                    <div class="existing-f0o0zJ existing minimedium" data-id="1:2455">Existing</div>
                                    <div class="downgrades-f0o0zJ downgrades minimedium" data-id="1:2456">Downgrades</div>
                                    <div class="churn-f0o0zJ churn minimedium" data-id="1:2457">Churn</div>
                                    <div class="arpu-f0o0zJ arpu minimedium" data-id="1:2458">ARPU</div>
                                </div>
                            </div>
                            <div class="frame-1000011537-trGCZM" data-id="1:2459">
                                <div class="x14775-ZeXZVr x14775 inter-semi-bold-white-12px" data-id="1:2460">$14,775</div>
                                <div class="x13000-ZeXZVr x13000 inter-semi-bold-white-12px" data-id="1:2461">$13,000</div>
                                <div class="x10000-ZeXZVr x10000 inter-semi-bold-white-12px" data-id="1:2462">$10,000</div>
                                <div class="x10000-bAxgaP x10000 inter-semi-bold-white-12px" data-id="1:2463">$10,000</div>
                                <div class="x775-ZeXZVr inter-semi-bold-white-12px" data-id="1:2464">$775</div>
                                <div class="x100-ZeXZVr x100 inter-semi-bold-white-12px" data-id="1:2465">$100</div>
                                <div class="x10-ZeXZVr inter-semi-bold-white-12px" data-id="1:2466">$10</div>
                            </div>
                        </div>
                        <div class="group-1171275191-Frnxmg" data-id="1:2467">
                            <div class="net-mrr-Zc7NMl" data-id="1:2468">NET MRR</div>
                            <div class="x100000-Zc7NMl" data-id="1:2469">$100,000</div>
                            <div class="ellipse-235-Zc7NMl ellipse-235" data-id="1:2470"></div>
                        </div><img class="line-26-Frnxmg" data-id="1:2471"
                            src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-26.svg"
                            anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/line-26.svg"
                            alt="Line 26">
                    </div><img class="polygon-1-rSmVCQ" data-id="1:2472"
                        src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/polygon-1.svg"
                        anima-src="https://cdn.animaapp.com/projects/66ce212cdea75b65b765e7d2/releases/66ce252cd9c8166c6ed241c2/img/polygon-1.svg"
                        alt="Polygon 1">
                </div>
            </div>
        </div>
        <script src="launchpad-js/launchpad-banner.js" async=""></script>
        <script defer="" src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script>
        <div id="t_preload_links">
            <link href="/data-visualization-page" rel="prefetch">
        </div>
        <div id="anima-interface" data-turbo-permanent="true" class="idle"><!---->
            <div id="anima-comment-popover" class="popover top" role="tooltip" style="left: -205px; top: -220px;">
                <div class="arrow" style="margin-left: 128px;"></div>
                <div class="popover-content" style="align-items:center">
                    <div style="display:flex;flex-direction:column;height: 100%;padding: 20px;">
                        <h3
                            style="font-size:18px;margin-bottom:10px;font-weight:500;line-height: 26px;font-family: Roslindale;">
                            Leave feedback and collaborate
                        </h3>
                        <p style="font-size:12px;margin-bottom:20px;font-weight:400;line-height: 20px;">
                            Login to your account to leave comments. Don't have an account?
                            Sign up for free!
                        </p>
                        <a target="_blank" rel="noopener noreferrer" class="btn"
                            href="https://projects.animaapp.com/p/undefined/s/undefined?mode=comments&amp;utm_campaign=add-comment&amp;utm_medium=add-comment&amp;utm_source=animaapp.io">Add
                            comment</a>
                    </div>

                    <div style="display:flex;align-items:center;justify-content:center;padding-right:20px">
                        <img src="https://animaapp.s3.amazonaws.com/static/comment-illustration.svg">
                    </div>
                </div>
            </div>
            <div id="anima-code-popover" class="popover top" role="tooltip" style="left: -205px; top: -220px;">
                <div class="arrow" style="margin-left: 168px;"></div>
                <div class="popover-content" style="align-items:center">
                    <div style="display:flex;flex-direction:column;height: 100%;padding: 20px;">
                        <h3
                            style="font-size:18px;margin-bottom:10px;font-weight:500;line-height: 26px;font-family: Roslindale;">
                            Get clean code you’ll love with Anima
                        </h3>
                        <p style="font-size:12px;margin-bottom:20px;font-weight:400;line-height: 20px;">
                            Login and easily export HTML, React or Vue of this prototype.
                            Don’t have an account? Sign up for free!
                        </p>
                        <a target="_blank" rel="noopener noreferrer" class="btn"
                            href="https://projects.animaapp.com/p/undefined/s/undefined?mode=code&amp;utm_campaign=get-code&amp;utm_medium=get-code&amp;utm_source=animaapp.io">
                            Get code
                        </a>
                    </div>

                    <img src="https://animaapp.s3.amazonaws.com/static/code-illustration.svg">
                </div>
            </div>
            <div class="omniview-anima-action-links" id="actions-wrap">
                <div class="omniview-anima-action-links">
                    <div id="page-nav" class="link navigation" style="display: none;">
                        <svg id="homepage-icon" class="home-icon" width="24" height="24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.151 11a.25.25 0 01-.167-.436l4.349-3.913a.25.25 0 01.334 0l4.349 3.913a.25.25 0 01-.167.436H8.15zM16 12H9v4a1 1 0 001 1h5a1 1 0 001-1v-4z"
                                fill="#fff"></path>
                        </svg>

                        <svg class="icon" id="arrow-left" width="24" height="24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18l-6-6 6-6" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <span id="page-num"></span>

                        <svg class="icon" id="arrow-right" width="24" height="24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>

                    <a class="link" id="comment-link" target="_blank" style="display: none;">
                        <span class="text">Comment</span>
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.301 15.137a.551.551 0 01.199-.55c.314-.23.554-.554.718-.965A6.015 6.015 0 014 10 6.006 6.006 0   0110.001 4 6.006 6.006 0 0116 10.001 6.006 6.006 0 019.999 16a5.98 5.98 0 01-3.095-.86 3.165 3.165 0 01-1.65.438 3.6  3.6 0 01-.57-.044c-.191-.03-.34-.186-.383-.397z"
                                fill="#fff"></path>
                        </svg>
                    </a>

                    <a class="link" id="code-link" target="_blank" style="display: none;">
                        <span class="text">Get Code</span>
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 15.667a1 1 0 01-.707-1.708l3.626-3.625-3.626-3.626a1 1 0 111.415-1.415l4.333 4.333a1 1 0 010 1.414l-4.333 4.333a.993.993 0 01-.707.294zM7.333 5a1 1 0 01.707 1.708l-3.626 3.625 3.627 3.626a1 1 0 11-1.415 1.415L2.293 11.04a1 1 0 010-1.415l4.333-4.333A.992.992 0 017.333 5z"
                                fill="#fff"></path>
                        </svg>
                    </a>

                    <div class="restart" id="restart-btn" style="display: none;">
                        <svg style="margin-right: 6px" width="12" height="12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 11.817A5.017 5.017 0 01.994 6.811c0-.207.169-.375.375-.375s.375.168.375.375A4.265 4.265 0 006 11.067a4.265 4.265 0 004.256-4.256A4.265 4.265 0 006 2.555a.376.376 0 01-.375-.376c0-.206.169-.374.375-.374a5.017 5.017 0 015.006 5.006A5.017 5.017 0 016 11.817z"
                                fill="#fff"></path>
                            <path
                                d="M6.75 4.237a.37.37 0 01-.263-.112l-1.65-1.65a.363.363 0 010-.525L6.487.3c.15-.15.375-.15.525 0 .15.15.15.375 0 .525L5.625 2.212 7.012 3.6c.15.15.15.375 0 .525-.056.075-.15.112-.262.112z"
                                fill="#fff"></path>
                        </svg>
                        Restart
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <div id="anima-watermark" style="display: none;" class="idle"><!---->
            <a id="anima-watermark-link" target="_blank"
                href="https://www.animaapp.com?utm_campaign=public-link-banner&amp;utm_medium=public-link-banner&amp;utm_source=animaapp.io"
                style="right: 20px; left: auto; padding: 6px;">
                <svg width="20" height="20" viewBox="0 0 20 20" id="anima-logo-icon" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.09293 3.00001H16.5327C16.5484 2.99976 16.5638 3.00351 16.5776 3.01092C16.5913 3.01832 16.603 3.02913 16.6114 3.04231C16.6198 3.0555 16.6247 3.07061 16.6256 3.08622C16.6265 3.10182 16.6233 3.1174 16.6165 3.13146C15.5441 5.29706 13.9276 7.14699 11.9253 8.50009C8.69117 10.6822 5.43436 10.9075 4.09389 10.9196C4.08165 10.9198 4.06949 10.9176 4.05811 10.9131C4.04672 10.9086 4.03636 10.9019 4.02761 10.8933C4.01887 10.8848 4.01192 10.8745 4.00718 10.8633C4.00244 10.852 4 10.8399 4 10.8276V3.09198C4 3.07982 4.00241 3.06778 4.00709 3.05656C4.01177 3.04534 4.01863 3.03516 4.02728 3.02661C4.03592 3.01805 4.04617 3.0113 4.05744 3.00673C4.06871 3.00217 4.08077 2.99988 4.09293 3.00001Z"
                        fill="#FF6250"></path>
                    <path
                        d="M6.77772 17.4446C8.31182 17.4446 9.55545 16.201 9.55545 14.6669C9.55545 13.1328 8.31182 11.8892 6.77772 11.8892C5.24363 11.8892 4 13.1328 4 14.6669C4 16.201 5.24363 17.4446 6.77772 17.4446Z"
                        fill="#FFDF90"></path>
                    <path
                        d="M12.4559 17.2799C11.6701 16.9799 11.2522 16.1151 11.5185 15.3496L13.6153 9.3656C13.884 8.60003 14.7387 8.22302 15.5245 8.52299C16.3103 8.82344 16.7282 9.68772 16.4619 10.4538L14.365 16.4377C14.0964 17.2033 13.2417 17.5808 12.4559 17.2799Z"
                        fill="#3366FF"></path>
                </svg>
                <span class="text" style="display: none;">Made with Anima</span>
            </a><!---->
        </div>
    </body>
</html>
