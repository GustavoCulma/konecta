<header class="bg-orange-400 sticky top-0 z-30">
    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4
            bg-orange-400  text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm hidden md:block">Categorías</span>
        </a>

        <a href="/" class="mx-6">
            <x-logo class="block h-9 w-auto" />
        </a>
        <div class="flex-1 hidden md:block">
            <x-jet-input type="text" class="w-full" aria-placeholder="Estas buscando algun producto" />
        </div>
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                viewBox="0 0 226 226" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                    style="mix-blend-mode: normal">
                    <path d="M0,226v-226h226v226z" fill="none"></path>
                    <g fill="#fff">
                        <path
                            d="M92.42978,25.42569c-17.1707,0 -34.34072,6.53212 -47.40634,19.59775c-26.13125,26.13125 -26.13125,68.68143 0,94.81268c13.06562,13.06563 30.19288,19.6012 47.496,19.6012c17.30313,0 34.43038,-6.53557 47.496,-19.6012c25.95469,-26.13125 25.95193,-68.68143 -0.17932,-94.81268c-13.06563,-13.06562 -30.23564,-19.59775 -47.40634,-19.59775zM92.34357,35.84357c14.47813,0 28.95556,5.47068 39.90244,16.59412c22.07031,22.07031 22.06962,57.91388 0.17587,79.98419c-22.07031,22.07031 -57.91388,22.07031 -79.98419,0c-22.07031,-22.07031 -22.07031,-57.91388 0,-79.98419c10.94688,-10.94687 25.42776,-16.59412 39.90588,-16.59412zM92.34357,46.43732c-12.18281,0 -23.66075,4.76581 -32.31232,13.59393c-8.29844,8.29844 -12.88837,19.06944 -13.41806,30.72257c-0.17656,3.00156 2.11944,5.29618 5.121,5.47275h0.17587c2.825,0 5.12031,-2.296 5.29688,-5.121c0.35313,-9.00469 4.05887,-17.30381 10.23856,-23.66006c6.70937,-6.70937 15.54026,-10.41443 24.89807,-10.41443c3.00156,0 5.29688,-2.29531 5.29688,-5.29687c0,-3.00156 -2.29531,-5.29687 -5.29687,-5.29687zM61.79688,113c-2.92538,0 -5.29687,2.37149 -5.29687,5.29688c0,2.92538 2.37149,5.29688 5.29688,5.29688c2.92538,0 5.29688,-2.37149 5.29688,-5.29687c0,-2.92538 -2.37149,-5.29687 -5.29687,-5.29687zM147.18829,142.13281c-1.34629,0 -2.67051,0.53038 -3.6416,1.58975c-2.11875,2.11875 -2.11875,5.47206 0,7.41424l4.41406,4.41406c-1.05937,2.11875 -1.58975,4.41475 -1.58975,6.88663c0,4.2375 1.58837,8.29913 4.58993,11.30069l22.60138,22.24618c3.17812,3.17812 7.23631,4.76581 11.29724,4.76581c4.06094,0 8.12256,-1.58837 11.30069,-4.58994c6.17969,-6.17969 6.17969,-16.24237 0,-22.42206l-22.59793,-22.60138c-3.00156,-3.00156 -7.06319,-4.58993 -11.30069,-4.58993c-2.47188,0 -4.76788,0.53038 -6.88663,1.58975l-4.41406,-4.41406c-1.05937,-1.05937 -2.42636,-1.58975 -3.77264,-1.58975zM162.26163,156.96475c1.4125,0 2.82431,0.53038 3.70712,1.58975l22.42206,22.42206c2.11875,2.11875 2.11875,5.47206 0,7.41425c-2.11875,2.11875 -5.47206,2.11875 -7.41425,0l-22.42206,-22.24619c-1.05937,-1.05937 -1.58975,-2.47049 -1.58975,-3.88299c0,-1.4125 0.53038,-2.82431 1.58975,-3.70712c1.05937,-1.05937 2.29462,-1.58975 3.70712,-1.58975z">
                        </path>
                    </g>
                </g>
            </svg>
        </button>

        <div class="mx-6 relative hidden md:block">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('admin.index') }}">
                            Administrador
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                    </x-slot>
                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>

        <div class="hidden md:block">

        </div>
    </div>


</header>
