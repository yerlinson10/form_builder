<div x-data="{ open: false }" class="relative">
    <!-- Botón de menú (Visible solo en dispositivos móviles) -->
    <button @click="open = !open" class="text-black p-4 fixed top-4 left-4 z-50 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M3 12h18m-18-6h18m-18 12h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>

    <!-- Menú lateral -->
    <nav @click.stop :class="{ 'translate-x-0': open, '-translate-x-full': !open }"
        class="bg-white shadow-xl h-screen fixed top-0 left-0 w-[250px] py-6 font-[sans-serif] overflow-auto transform md:translate-x-0 transition-transform duration-300 z-50">
        <div class="relative flex flex-col h-full">
            <a href="javascript:void(0)" class="text-center">
                {{-- <img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-[160px] inline' /> --}}
            </a>

            <ul class="space-y-3 my-8 flex-1">
                <li>
                    <a href="javascript:void(0)"
                        class="text-sm flex items-center text-[#007bff] border-r-[5px] border-[#077bff] bg-gray-100 px-8 py-4 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-[1.125rem] h-[1.125rem] mr-4" viewBox="0 0 512 512">
                            <path
                                d="M197.332 170.668h-160C16.746 170.668 0 153.922 0 133.332v-96C0 16.746 16.746 0 37.332 0h160c20.59 0 37.336 16.746 37.336 37.332v96c0 20.59-16.746 37.336-37.336 37.336zM37.332 32A5.336 5.336 0 0 0 32 37.332v96a5.337 5.337 0 0 0 5.332 5.336h160a5.338 5.338 0 0 0 5.336-5.336v-96A5.337 5.337 0 0 0 197.332 32zm160 480h-160C16.746 512 0 495.254 0 474.668v-224c0-20.59 16.746-37.336 37.332-37.336h160c20.59 0 37.336 16.746 37.336 37.336v224c0 20.586-16.746 37.332-37.336 37.332zm-160-266.668A5.337 5.337 0 0 0 32 250.668v224A5.336 5.336 0 0 0 37.332 480h160a5.337 5.337 0 0 0 5.336-5.332v-224a5.338 5.338 0 0 0-5.336-5.336zM474.668 512h-160c-20.59 0-37.336-16.746-37.336-37.332v-96c0-20.59 16.746-37.336 37.336-37.336h160c20.586 0 37.332 16.746 37.332 37.336v96C512 495.254 495.254 512 474.668 512zm-160-138.668a5.338 5.338 0 0 0-5.336 5.336v96a5.337 5.337 0 0 0 5.336 5.332h160a5.336 5.336 0 0 0 5.332-5.332v-96a5.337 5.337 0 0 0-5.332-5.336zm160-74.664h-160c-20.59 0-37.336-16.746-37.336-37.336v-224C277.332 16.746 294.078 0 314.668 0h160C495.254 0 512 16.746 512 37.332v224c0 20.59-16.746 37.336-37.332 37.336zM314.668 32a5.337 5.337 0 0 0-5.336 5.332v224a5.338 5.338 0 0 0 5.336 5.336h160a5.337 5.337 0 0 0 5.332-5.336v-224A5.336 5.336 0 0 0 474.668 32zm0 0"
                                data-original="#000000" />
                        </svg>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-black text-sm flex items-center hover:text-[#007bff] hover:border-r-[5px] border-[#077bff] hover:bg-gray-100 px-8 py-4 transition-all">

                        <svg fill="currentColor" class="w-[1.5rem] h-[1.5rem] mr-4" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-21.94 -21.94 263.26 263.26" xml:space="preserve" stroke="#000000"
                            stroke-width="0.0021937600000000003">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                stroke="#CCCCCC" stroke-width="0.43875200000000003"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M127.518,0H40.63c-6.617,0-12,5.383-12,12v195.376c0,6.617,5.383,12,12,12h138.117c6.617,0,12-5.383,12-12V59.227 c0-3.204-1.248-6.217-3.514-8.484l-51.364-47.36C133.619,1.2,130.661,0,127.518,0z M175.747,204.376H43.63V15h71.768v40.236 c0,8.885,7.225,16.114,16.105,16.114h44.244V204.376z M131.503,56.35c-0.609,0-1.105-0.5-1.105-1.114v-31.58l34.968,32.693H131.503z M65.499,97.805c-5.14,0-9.321,4.182-9.321,9.321c0,5.14,4.182,9.321,9.321,9.321c5.14,0,9.321-4.182,9.321-9.321 C74.82,101.987,70.638,97.805,65.499,97.805z M82.499,99.627h79.5v15h-79.5V99.627z M65.499,127.805 c-5.14,0-9.321,4.182-9.321,9.321s4.182,9.321,9.321,9.321c5.14,0,9.321-4.182,9.321-9.321S70.638,127.805,65.499,127.805z M82.499,129.626h79.5v15h-79.5V129.626z M65.499,157.805c-5.14,0-9.321,4.182-9.321,9.321s4.182,9.321,9.321,9.321 c5.14,0,9.321-4.182,9.321-9.321S70.638,157.805,65.499,157.805z M82.499,159.626h79.5v15h-79.5V159.626z">
                                </path>
                            </g>
                        </svg>
                        <span>{{ __('Forms') }}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-black text-sm flex items-center hover:text-[#007bff] hover:border-r-[5px] border-[#077bff] hover:bg-gray-100 px-8 py-4 transition-all">

                        <svg class="w-[1.5rem] h-[1.5rem] mr-4" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="m0 0h32v32h-32z"></path>
                                    <path
                                        d="m19.120106 0c1.8257724 0 3.5522076.83131873 4.6906771 2.25867017l4.8798939 6.11814718c.847677 1.06277155 1.309323 2.38190365 1.309323 3.74132985v13.8818528c0 3.3137085-2.6862915 6-6 6h-16c-3.3137085 0-6-2.6862915-6-6v-20c0-3.3137085 2.6862915-6 6-6zm0 2h-11.120106c-2.14219539 0-3.89107888 1.68396847-3.99510469 3.80035966l-.00489531.19964034v20c0 2.1421954 1.68396847 3.8910789 3.80035966 3.9951047l.19964034.0048953h16c2.1421954 0 3.8910789-1.6839685 3.9951047-3.8003597l.0048953-.1996403v-13.8818528c0-.8238947-.2543504-1.6255887-.7251774-2.29685957l-.1477046-.19736034-4.8798939-6.11814718c-.7115434-.89209465-1.767598-1.43495138-2.8997521-1.49932373zm-3.120106 19.5c.7731986 0 1.4.6268014 1.4 1.4s-.6268014 1.4-1.4 1.4-1.4-.6268014-1.4-1.4.6268014-1.4 1.4-1.4zm0-11.5c2.209139 0 4 1.790861 4 4 0 1.8635652-1.2743978 3.429479-2.9992387 3.8737865l-.0007613 1.1262135c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1v-2c0-.5522847.4477153-1 1-1 1.1045695 0 2-.8954305 2-2s-.8954305-2-2-2-2 .8954305-2 2c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1c0-2.209139 1.790861-4 4-4z"
                                        fill="currentColor" fill-rule="nonzero"></path>
                                </g>
                            </g>
                        </svg>
                        <span>{{ __('Answers') }}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-black text-sm flex items-center hover:text-[#007bff] hover:border-r-[5px] border-[#077bff] hover:bg-gray-100 px-8 py-4 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-[1.125rem] h-[1.125rem] mr-4" viewBox="0 0 16 16">
                            <path
                                d="M13 .5H3A2.503 2.503 0 0 0 .5 3v10A2.503 2.503 0 0 0 3 15.5h10a2.503 2.503 0 0 0 2.5-2.5V3A2.503 2.503 0 0 0 13 .5ZM14.5 13a1.502 1.502 0 0 1-1.5 1.5H3A1.502 1.502 0 0 1 1.5 13v-.793l3.5-3.5 1.647 1.647a.5.5 0 0 0 .706 0L10.5 7.207V8a.5.5 0 0 0 1 0V6a.502.502 0 0 0-.5-.5H9a.5.5 0 0 0 0 1h.793L7 9.293 5.354 7.647a.5.5 0 0 0-.707 0L1.5 10.793V3A1.502 1.502 0 0 1 3 1.5h10A1.502 1.502 0 0 1 14.5 3Z"
                                data-original="#000000" />
                        </svg>
                        <span>{{ __('Reports') }}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-black text-sm flex items-center hover:text-[#007bff] hover:border-r-[5px] border-[#077bff] hover:bg-gray-100 px-8 py-4 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-[1.125rem] h-[1.125rem] mr-4" viewBox="0 0 20 20">
                            <path
                                d="M18 2H2C.9 2 0 2.9 0 4v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM2 4h16v.51c-1.55 1.21-4.58 3.49-7.36 4.91-.94.5-2.34 1.1-3.28 1.1-.94 0-2.34-.6-3.28-1.1C4.58 8 1.55 5.72 0 4.51V4zm7 6c1.23 0 3.07-.82 4.5-1.63 2.43-1.3 5.07-3.31 6.5-4.4V16H2V4.04c1.43 1.1 4.07 3.1 6.5 4.4C7.93 9.18 9.77 10 11 10zm0 0"
                                data-original="#000000" />
                        </svg>
                        <span>Sales</span>
                    </a>
                </li>
            </ul>

            <div class="py-4">
                <a href="javascript:void(0)" class="block text-gray-400 text-sm text-center">
                    <span class="text-gray-500">© 2024</span>
                    sdsd
                </a>
            </div>
        </div>
    </nav>

    <!-- Fondo oscuro al abrir el menú (Visible solo en dispositivos móviles) -->
    <div @click="open = false" x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"></div>
</div>


{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav> --}}
