<section class="h-full w-full border-box transition-all duration-500 linear lg:px-24 md:px-20 px-8 py-8 border-b"
    style="background-color: #141432">

    <div style="font-family: 'Poppins', sans-serif">
        <div class="mx-auto flex flex-wrap flex-row items-center justify-between">
            <a class="flex font-medium items-center" href="{{ route('index') }}">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.21649 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
                        fill="white" />
                    <path
                        d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
                        fill="white" />
                </svg>
            </a>

            <label for="menu-toggle-1-2" class="cursor-pointer lg:hidden block">
                <svg class="w-6 h-6" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>

            <input class="hidden" type="checkbox" id="menu-toggle-1-2" />

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center"
                id="menu-1-2">
                <nav
                    class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                    <a class="block cursor-pointer nav-1-2" href="{{ route('landing.clubs') }}">Clubs</a>
                    <a class="block cursor-pointer nav-1-2" href="{{ route('landing.players') }}">Players</a>
                    <a class="block cursor-pointer nav-1-2" href="{{ route('landing.managers') }}">Managers</a>
                    <a class="block cursor-pointer nav-1-2" href="{{ route('landing.stadiums') }}">Stadium</a>
                </nav>
            </div>

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu-1-2">
                <button
                    class="btn-fill-1-2 items-center border-0 py-3 px-8 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">
                    Next Match
                </button>
            </div>
        </div>
    </div>
</section>
