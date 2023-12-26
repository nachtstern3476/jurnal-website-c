<header class="fixed top-0 left-0 w-full backdrop-blur-sm z-50">
    <nav class="flex justify-between py-4 relative p-4 lg:w-[921px] md:w-[718px] sm:w-[590px] mx-auto">
        <a class="text-2xl md:text-4xl text-teal-600 font-bold" href="{{ url('/') }}">Society</a>
        <ul
            class="navList gap-4 text-xl absolute text-white bg-teal-700 font-medium duration-300 ease-in-out w-full left-0 mx-auto p-4 rounded-md top-[-800px] md:mx-0 md:w-auto md:p-0 md:visible md:static md:bg-transparent justify-center flex md:text-teal-500">
            @if (request()->is('/'))
                <li class="flex items-center text-lg md:text-xl">
                    <a class="navLink" href="#home">Home</a>
                </li>
                <li class="flex items-center text-lg md:text-xl">
                    <a class="navLink" href="#visi-misi">Visi / Misi</a>
                </li>
                <li class="flex items-center text-lg md:text-xl">
                    <a class="navLink" href="#about">About</a>
                </li>
                <li class="flex items-center text-lg md:text-xl">
                    <a class="navLink" href="#jurnal">Jurnal</a>
                </li>
                <li class="flex items-center text-lg md:text-xl">
                    <a class="navLink" href="#activity">Activity</a>
                </li>
            @else
                <li class="flex items-center text-lg md:text-xl">
                    <a class="navLink" href="{{ url('/') }}">Home</a>
                </li>
                <li class="flex items-center text-lg md:text-xl">
                    <a class="navLink" href="{{ route('jurnal.list') }}">Jurnal</a>
                </li>
                @if (session('is_login'))
                    <li class="flex items-center text-lg md:text-xl">
                        <a class="navLink" href="{{ url('logout') }}">Logout</a>
                    </li>
                @endif
            @endif
        </ul>
        <div class="humburger absolute block md:hidden right-4 top-7 ">
            <span class="humburgerLine1 duration-500 ease-in-out h-[3px] w-[25px] bg-teal-700 block mb-1"></span>
            <span class="humburgerLine2 duration-500 ease-in-out h-[3px] w-[15px] bg-teal-700 block mb-1"></span>
            <span class="humburgerLine3 duration-500 ease-in-out h-[3px] w-[30px] bg-teal-700 block mb-1"></span>
        </div>
    </nav>
</header>
