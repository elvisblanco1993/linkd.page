<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <div class="w-full flex items-center justify-between py-4 px-4 sm:px-6 lg:px-8">
            <div class="">
                <div class="text-xl font-base tracking-wide text-indigo-600">linkd</div>
            </div>

            <div class="">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

    {{-- Section 1 --}}
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8 py-36 items-center text-center sm:text-left">
            <div class="col-span-2 sm:col-span-1">
                <div class="text-4xl sm:text-6xl font-black mb-8">
                    One <span class="text-indigo-600">linkd</span> to rule them all
                </div>
                <div class="max-w-screen-lg text-lg sm:text-2xl sm:leading-10 font-medium mb-10 sm:mb-11 text-gray-600">
                    The best way to connect your audiences with your content
                </div>
                <div class="mt-8">
                    <button class="px-6 py-3 rounded-lg bg-indigo-500 hover:bg-indigo-600 transition-all text-white uppercase font-medium">Get your linkd</button>
                </div>
            </div>
            <div class="col-span-2 sm:col-span-1 flex justify-center sm:justify-end">
                <div class="">
                    <iframe src="http://localhost:81/@_ebg93" frameborder="0" scrolling="no" class="w-[320px] h-[580px] border-4 border-gray-800 rounded-3xl shadow-xl"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div class="py-36 flex items-center justify-center">
            <div class="w-full sm:w-1/2">
                <div class="text-2xl sm:text-4xl font-black">
                    Use it <span class="text-indigo-600">everywhere</span>
                </div>
                <div class="text-base font-semibold mt-4 text-gray-600">
                    Connect your unique linkd to all your social media accounts, and let your followers know more of what you do.
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="max-w-full flex items-center justify-end">
                    <svg class="w-4/5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 1000 1000" width="1000pt" ><defs><clipPath id="_clipPath_QPPsDbzXDnyzxjgMymaUt6LSk4KEZaVy"><rect width="1000" height="1000"/></clipPath></defs><g clip-path="url(#_clipPath_QPPsDbzXDnyzxjgMymaUt6LSk4KEZaVy)"><g><path d="M 65.63 13.92 L 520.46 13.92 C 538.728 13.92 553.56 28.752 553.56 47.02 L 553.56 501.85 C 553.56 520.118 538.728 534.95 520.46 534.95 L 65.63 534.95 C 47.362 534.95 32.53 520.118 32.53 501.85 L 32.53 47.02 C 32.53 28.752 47.362 13.92 65.63 13.92 Z" style="stroke:none;fill:#F87171;stroke-miterlimit:10;"/><g class="animate-pulse delay-30"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="115.63336930005738" cy="101.71779122273958" r="40.69987910614654" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 77.947 188.34 L 264.983 188.34 C 266.648 188.34 268 189.691 268 191.355 L 268 202.015 C 268 203.679 266.648 205.03 264.983 205.03 L 77.947 205.03 C 76.282 205.03 74.93 203.679 74.93 202.015 L 74.93 191.355 C 74.93 189.691 76.282 188.34 77.947 188.34 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 78.519 217.56 L 507.561 217.56 C 509.542 217.56 511.15 219.168 511.15 221.148 L 511.15 230.662 C 511.15 232.642 509.542 234.25 507.561 234.25 L 78.519 234.25 C 76.538 234.25 74.93 232.642 74.93 230.662 L 74.93 221.148 C 74.93 219.168 76.538 217.56 78.519 217.56 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 84.272 294.78 L 258.658 294.78 C 263.814 294.78 268 298.966 268 304.122 L 268 478.498 C 268 483.654 263.814 487.84 258.658 487.84 L 84.272 487.84 C 79.116 487.84 74.93 483.654 74.93 478.498 L 74.93 304.122 C 74.93 298.966 79.116 294.78 84.272 294.78 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 327.432 294.78 L 501.808 294.78 C 506.964 294.78 511.15 298.966 511.15 304.122 L 511.15 478.498 C 511.15 483.654 506.964 487.84 501.808 487.84 L 327.432 487.84 C 322.276 487.84 318.09 483.654 318.09 478.498 L 318.09 304.122 C 318.09 298.966 322.276 294.78 327.432 294.78 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g><g><path d="M 38.1 13.92 L 492.93 13.92 C 511.198 13.92 526.03 28.752 526.03 47.02 L 526.03 501.85 C 526.03 520.118 511.198 534.95 492.93 534.95 L 38.1 534.95 C 19.832 534.95 5 520.118 5 501.85 L 5 47.02 C 5 28.752 19.832 13.92 38.1 13.92 Z" style="stroke:none;fill:#F87171;stroke-miterlimit:10;"/><g class="animate-pulse"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="88.10606046192441" cy="101.71779122273958" r="40.699879106146554" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 50.427 188.34 L 237.453 188.34 C 239.118 188.34 240.47 189.691 240.47 191.355 L 240.47 202.015 C 240.47 203.679 239.118 205.03 237.453 205.03 L 50.427 205.03 C 48.762 205.03 47.41 203.679 47.41 202.015 L 47.41 191.355 C 47.41 189.691 48.762 188.34 50.427 188.34 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 50.999 217.56 L 480.041 217.56 C 482.022 217.56 483.63 219.168 483.63 221.148 L 483.63 230.662 C 483.63 232.642 482.022 234.25 480.041 234.25 L 50.999 234.25 C 49.018 234.25 47.41 232.642 47.41 230.662 L 47.41 221.148 C 47.41 219.168 49.018 217.56 50.999 217.56 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 56.752 294.78 L 231.128 294.78 C 236.284 294.78 240.47 298.966 240.47 304.122 L 240.47 478.498 C 240.47 483.654 236.284 487.84 231.128 487.84 L 56.752 487.84 C 51.596 487.84 47.41 483.654 47.41 478.498 L 47.41 304.122 C 47.41 298.966 51.596 294.78 56.752 294.78 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 299.902 294.78 L 474.288 294.78 C 479.444 294.78 483.63 298.966 483.63 304.122 L 483.63 478.498 C 483.63 483.654 479.444 487.84 474.288 487.84 L 299.902 487.84 C 294.746 487.84 290.56 483.654 290.56 478.498 L 290.56 304.122 C 290.56 298.966 294.746 294.78 299.902 294.78 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g><g><path d="M 163.58 128.54 L 618.41 128.54 C 636.678 128.54 651.51 143.372 651.51 161.64 L 651.51 616.47 C 651.51 634.738 636.678 649.57 618.41 649.57 L 163.58 649.57 C 145.312 649.57 130.48 634.738 130.48 616.47 L 130.48 161.64 C 130.48 143.372 145.312 128.54 163.58 128.54 Z" style="stroke:none;fill:#818CF8;stroke-miterlimit:10;"/><g class="animate-pulse delay-50"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="213.58730630207123" cy="216.34473877828776" r="40.69987910614654" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 175.907 302.96 L 362.933 302.96 C 364.598 302.96 365.95 304.312 365.95 305.977 L 365.95 316.643 C 365.95 318.308 364.598 319.66 362.933 319.66 L 175.907 319.66 C 174.242 319.66 172.89 318.308 172.89 316.643 L 172.89 305.977 C 172.89 304.312 174.242 302.96 175.907 302.96 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 176.479 332.18 L 605.521 332.18 C 607.502 332.18 609.11 333.789 609.11 335.77 L 609.11 345.29 C 609.11 347.271 607.502 348.88 605.521 348.88 L 176.479 348.88 C 174.498 348.88 172.89 347.271 172.89 345.29 L 172.89 335.77 C 172.89 333.789 174.498 332.18 176.479 332.18 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 182.232 409.41 L 356.608 409.41 C 361.764 409.41 365.95 413.596 365.95 418.752 L 365.95 593.128 C 365.95 598.284 361.764 602.47 356.608 602.47 L 182.232 602.47 C 177.076 602.47 172.89 598.284 172.89 593.128 L 172.89 418.752 C 172.89 413.596 177.076 409.41 182.232 409.41 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 425.382 409.41 L 599.768 409.41 C 604.924 409.41 609.11 413.596 609.11 418.752 L 609.11 593.128 C 609.11 598.284 604.924 602.47 599.768 602.47 L 425.382 602.47 C 420.226 602.47 416.04 598.284 416.04 593.128 L 416.04 418.752 C 416.04 413.596 420.226 409.41 425.382 409.41 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g><g><path d="M 147.23 128.54 L 602.06 128.54 C 620.328 128.54 635.16 143.372 635.16 161.64 L 635.16 616.47 C 635.16 634.738 620.328 649.57 602.06 649.57 L 147.23 649.57 C 128.962 649.57 114.13 634.738 114.13 616.47 L 114.13 161.64 C 114.13 143.372 128.962 128.54 147.23 128.54 Z" style="stroke:none;fill:#818CF8;stroke-miterlimit:10;"/><g class="animate-pulse delay-50"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="197.2321776416665" cy="216.34473877828776" r="40.69987910614654" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 159.547 302.96 L 346.583 302.96 C 348.248 302.96 349.6 304.312 349.6 305.977 L 349.6 316.643 C 349.6 318.308 348.248 319.66 346.583 319.66 L 159.547 319.66 C 157.882 319.66 156.53 318.308 156.53 316.643 L 156.53 305.977 C 156.53 304.312 157.882 302.96 159.547 302.96 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 160.119 332.18 L 589.161 332.18 C 591.142 332.18 592.75 333.789 592.75 335.77 L 592.75 345.29 C 592.75 347.271 591.142 348.88 589.161 348.88 L 160.119 348.88 C 158.138 348.88 156.53 347.271 156.53 345.29 L 156.53 335.77 C 156.53 333.789 158.138 332.18 160.119 332.18 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 165.872 409.41 L 340.258 409.41 C 345.414 409.41 349.6 413.596 349.6 418.752 L 349.6 593.128 C 349.6 598.284 345.414 602.47 340.258 602.47 L 165.872 602.47 C 160.716 602.47 156.53 598.284 156.53 593.128 L 156.53 418.752 C 156.53 413.596 160.716 409.41 165.872 409.41 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 409.032 409.41 L 583.408 409.41 C 588.564 409.41 592.75 413.596 592.75 418.752 L 592.75 593.128 C 592.75 598.284 588.564 602.47 583.408 602.47 L 409.032 602.47 C 403.876 602.47 399.69 598.284 399.69 593.128 L 399.69 418.752 C 399.69 413.596 403.876 409.41 409.032 409.41 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g><g><path d="M 259.45 243.17 L 714.28 243.17 C 732.548 243.17 747.38 258.002 747.38 276.27 L 747.38 731.1 C 747.38 749.368 732.548 764.2 714.28 764.2 L 259.45 764.2 C 241.182 764.2 226.35 749.368 226.35 731.1 L 226.35 276.27 C 226.35 258.002 241.182 243.17 259.45 243.17 Z" style="stroke:none;fill:#FBBF24;stroke-miterlimit:10;"/><g class="animate-pulse"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="309.45711698489237" cy="330.9716863338357" r="40.69987910614657" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 271.777 417.59 L 458.803 417.59 C 460.468 417.59 461.82 418.942 461.82 420.607 L 461.82 431.273 C 461.82 432.938 460.468 434.29 458.803 434.29 L 271.777 434.29 C 270.112 434.29 268.76 432.938 268.76 431.273 L 268.76 420.607 C 268.76 418.942 270.112 417.59 271.777 417.59 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 272.349 446.81 L 701.391 446.81 C 703.372 446.81 704.98 448.419 704.98 450.4 L 704.98 459.92 C 704.98 461.901 703.372 463.51 701.391 463.51 L 272.349 463.51 C 270.368 463.51 268.76 461.901 268.76 459.92 L 268.76 450.4 C 268.76 448.419 270.368 446.81 272.349 446.81 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 278.102 524.04 L 452.478 524.04 C 457.634 524.04 461.82 528.226 461.82 533.382 L 461.82 707.758 C 461.82 712.914 457.634 717.1 452.478 717.1 L 278.102 717.1 C 272.946 717.1 268.76 712.914 268.76 707.758 L 268.76 533.382 C 268.76 528.226 272.946 524.04 278.102 524.04 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 521.252 524.04 L 695.638 524.04 C 700.794 524.04 704.98 528.226 704.98 533.382 L 704.98 707.758 C 704.98 712.914 700.794 717.1 695.638 717.1 L 521.252 717.1 C 516.096 717.1 511.91 712.914 511.91 707.758 L 511.91 533.382 C 511.91 528.226 516.096 524.04 521.252 524.04 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g><g><path d="M 276.03 243.17 L 730.86 243.17 C 749.128 243.17 763.96 258.002 763.96 276.27 L 763.96 731.1 C 763.96 749.368 749.128 764.2 730.86 764.2 L 276.03 764.2 C 257.762 764.2 242.93 749.368 242.93 731.1 L 242.93 276.27 C 242.93 258.002 257.762 243.17 276.03 243.17 Z" style="stroke:none;fill:#FBBF24;stroke-miterlimit:10;"/><g class="animate-pulse"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="326.0311841677184" cy="330.9716863338357" r="40.69987910614657" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 288.347 417.59 L 475.373 417.59 C 477.038 417.59 478.39 418.942 478.39 420.607 L 478.39 431.273 C 478.39 432.938 477.038 434.29 475.373 434.29 L 288.347 434.29 C 286.682 434.29 285.33 432.938 285.33 431.273 L 285.33 420.607 C 285.33 418.942 286.682 417.59 288.347 417.59 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 288.919 446.81 L 717.961 446.81 C 719.942 446.81 721.55 448.419 721.55 450.4 L 721.55 459.92 C 721.55 461.901 719.942 463.51 717.961 463.51 L 288.919 463.51 C 286.938 463.51 285.33 461.901 285.33 459.92 L 285.33 450.4 C 285.33 448.419 286.938 446.81 288.919 446.81 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 294.672 524.04 L 469.048 524.04 C 474.204 524.04 478.39 528.226 478.39 533.382 L 478.39 707.758 C 478.39 712.914 474.204 717.1 469.048 717.1 L 294.672 717.1 C 289.516 717.1 285.33 712.914 285.33 707.758 L 285.33 533.382 C 285.33 528.226 289.516 524.04 294.672 524.04 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 537.832 524.04 L 712.208 524.04 C 717.364 524.04 721.55 528.226 721.55 533.382 L 721.55 707.758 C 721.55 712.914 717.364 717.1 712.208 717.1 L 537.832 717.1 C 532.676 717.1 528.49 712.914 528.49 707.758 L 528.49 533.382 C 528.49 528.226 532.676 524.04 537.832 524.04 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g><g><g><path d="M 398.93 353.09 L 853.76 353.09 C 872.028 353.09 886.86 367.922 886.86 386.19 L 886.86 841.02 C 886.86 859.288 872.028 874.12 853.76 874.12 L 398.93 874.12 C 380.662 874.12 365.83 859.288 365.83 841.02 L 365.83 386.19 C 365.83 367.922 380.662 353.09 398.93 353.09 Z" style="stroke:none;fill:#b1b7f1;stroke-miterlimit:10;"/><g class="animate-pulse"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="448.931481657029" cy="440.8935608354507" r="40.69987910614657" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 411.247 527.51 L 598.283 527.51 C 599.948 527.51 601.3 528.862 601.3 530.527 L 601.3 541.193 C 601.3 542.858 599.948 544.21 598.283 544.21 L 411.247 544.21 C 409.582 544.21 408.23 542.858 408.23 541.193 L 408.23 530.527 C 408.23 528.862 409.582 527.51 411.247 527.51 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 411.819 556.73 L 840.861 556.73 C 842.842 556.73 844.45 558.339 844.45 560.32 L 844.45 569.84 C 844.45 571.821 842.842 573.43 840.861 573.43 L 411.819 573.43 C 409.838 573.43 408.23 571.821 408.23 569.84 L 408.23 560.32 C 408.23 558.339 409.838 556.73 411.819 556.73 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 417.572 633.96 L 591.958 633.96 C 597.114 633.96 601.3 638.146 601.3 643.302 L 601.3 817.678 C 601.3 822.834 597.114 827.02 591.958 827.02 L 417.572 827.02 C 412.416 827.02 408.23 822.834 408.23 817.678 L 408.23 643.302 C 408.23 638.146 412.416 633.96 417.572 633.96 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 660.732 633.96 L 835.108 633.96 C 840.264 633.96 844.45 638.146 844.45 643.302 L 844.45 817.678 C 844.45 822.834 840.264 827.02 835.108 827.02 L 660.732 827.02 C 655.576 827.02 651.39 822.834 651.39 817.678 L 651.39 643.302 C 651.39 638.146 655.576 633.96 660.732 633.96 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g></g><g><path d="M 507.07 471.09 L 961.9 471.09 C 980.168 471.09 995 485.922 995 504.19 L 995 959.02 C 995 977.288 980.168 992.12 961.9 992.12 L 507.07 992.12 C 488.802 992.12 473.97 977.288 473.97 959.02 L 473.97 504.19 C 473.97 485.922 488.802 471.09 507.07 471.09 Z" style="stroke:none;fill:#4ADE80;stroke-miterlimit:10;"/><g class="animate-pulse"><g opacity="0.5"><circle vector-effect="non-scaling-stroke" cx="557.0744806639808" cy="558.8887933513107" r="40.69987910614657" fill="rgb(235,235,235)"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 519.387 645.51 L 706.423 645.51 C 708.088 645.51 709.44 646.861 709.44 648.525 L 709.44 659.185 C 709.44 660.849 708.088 662.2 706.423 662.2 L 519.387 662.2 C 517.722 662.2 516.37 660.849 516.37 659.185 L 516.37 648.525 C 516.37 646.861 517.722 645.51 519.387 645.51 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 519.959 674.73 L 949.001 674.73 C 950.982 674.73 952.59 676.338 952.59 678.318 L 952.59 687.832 C 952.59 689.812 950.982 691.42 949.001 691.42 L 519.959 691.42 C 517.978 691.42 516.37 689.812 516.37 687.832 L 516.37 678.318 C 516.37 676.338 517.978 674.73 519.959 674.73 Z" style="stroke:none;fill:#FFFFFF;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 525.712 751.95 L 700.098 751.95 C 705.254 751.95 709.44 756.136 709.44 761.292 L 709.44 935.678 C 709.44 940.834 705.254 945.02 700.098 945.02 L 525.712 945.02 C 520.556 945.02 516.37 940.834 516.37 935.678 L 516.37 761.292 C 516.37 756.136 520.556 751.95 525.712 751.95 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g><g style="mix-blend-mode:normal;" opacity="0.35"><path d="M 768.872 751.95 L 943.248 751.95 C 948.404 751.95 952.59 756.136 952.59 761.292 L 952.59 935.678 C 952.59 940.834 948.404 945.02 943.248 945.02 L 768.872 945.02 C 763.716 945.02 759.53 940.834 759.53 935.678 L 759.53 761.292 C 759.53 756.136 763.716 751.95 768.872 751.95 Z" style="stroke:none;fill:#EBEBEB;stroke-miterlimit:10;"/></g></g></g></g></svg>
                </div>
            </div>
        </div>

        <div class="py-32 sm:py-12 flex items-center">
            <div class="w-full sm:w-1/2">
                {{--  --}}
            </div>
            <div class="w-full sm:w-1/2">
                <div class="text-2xl sm:text-4xl font-black">
                    <span class="text-indigo-600">Share</span> what you love
                </div>
                <div class="text-base font-semibold mt-4 text-gray-600">
                    From your website, online store, vlog, to your podcast, Linkd helps you share your passion with the world.
                </div>
            </div>
        </div>

        <div class="py-32 sm:py-12 flex items-center">
            <div class="w-full sm:w-1/2">
                <div class="text-2xl sm:text-4xl font-black">
                    <span class="text-indigo-600">Easy</span> to use
                </div>
                <div class="text-base font-semibold mt-4 text-gray-600">
                    Using Linkd is stupid simple. In a few seconds you can have your linkd page ready to use.
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                {{--  --}}
            </div>
        </div>

        <div class="py-32 sm:py-12 flex items-center">
            <div class="w-full sm:w-1/2">
                {{--  --}}
            </div>
            <div class="w-full sm:w-1/2">
                <div class="text-2xl sm:text-4xl font-black">
                    <span class="text-indigo-600">Privacy-first</span> tool
                </div>
                <div class="text-base font-semibold mt-4 text-gray-600">
                    Linkd does not collect any personal information on your followers. Our analytics tool anonymously identifies traffic from all over the world, without compromising your visitors personal information.
                </div>
            </div>
        </div>

        <div class="py-32 sm:py-12 flex items-center">
            <div class="w-full sm:w-1/2">
                <div class="text-2xl sm:text-4xl font-black">
                    Built-in <span class="text-indigo-600">advance theming</span>
                </div>
                <div class="text-base font-semibold mt-4 text-gray-600">
                    Customize your Linkd with custom colors, images, and fonts to make your brand pop.
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                {{--  --}}
            </div>
        </div>
    </div>

</x-guest-layout>
