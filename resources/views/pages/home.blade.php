@extends('index')
@section('title', 'Society | Jurnal Pengabdian')

@section('content')
    <main>
        <section id="home"
            class="hero h-[280px] md:h-[350px] px-4 flex justify-center mb-20 items-center relative z[-100]">
            <h1 class="w-[1028px] mx-auto text-3xl md:text-5xl font-semibold text-white text-center ">
                Pengabdian Kepada Masyarakat
            </h1>
        </section>
        <section id="visi-misi" class="mb-20 container p-4 lg:w-[921px] md:w-[718px] sm:w-[590px] mx-auto">
            <div class="bg-teal-700 text-white p-8 w-full mx-auto rounded-md text-center mb-4">
                <h1 class="text-4xl mb-3 font-semibold">VISI</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure accusamus harum atque aliquid!
                    Similique
                </p>
            </div>
            <div class="w-full mx-auto bg-teal-700 text-white p-8 rounded-md">
                <h1 class="text-4xl mb-3 text-center font-semibold">MISI</h1>
                <p>
                    1. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi debitis facere dolores ab
                    porro incidunt nostrum quas voluptatibus doloribus! Labore cumque rerum quos maxime consequatur
                    nobis pariatur ullam facere possimus?<br>
                    2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam saepe nobis officiis placeat
                    dignissimos accusamus.<br>
                    3. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus beatae distinctio aperiam
                    temporibus quam esse, delectus fugit necessitatibus tempore earum voluptas cupiditate! Cum,
                    reiciendis iste!
                </p>
            </div>
        </section>
        <section id="about" class="mb-20 p-4 lg:w-[921px] md:w-[718px] sm:w-[590px] mx-auto">
            <h1 class="text-center text-6xl font-semibold mb-12">About US</h1>
            <div class="flex flex-wrap md:flex-nowrap justify-center gap-7">
                <div class="baiss-1/5">
                    <img class="w-[420px]" src="./assets/img/about-img.png" alt="about-img">
                </div>
                <div class="basis-3/4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia fugit eveniet, corporis eaque
                        eligendi, vel sint dolore, dolor eius placeat nulla obcaecati esse. Nisi non voluptatem commodi
                        at
                        vitae odio?Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nihil voluptatem,
                        atque illum aut sed. Delectus ipsum laudantium hic temporibus nisi aspernatur dignissimos
                        officiis provident facere animi! Ducimus, libero voluptatem. Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. Earum nobis quae ad dicta! Voluptas atque vitae unde error
                        obcaecati labore accusamus eius odio, illum a excepturi reiciendis deserunt veniam quos.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quidem reiciendis maiores
                        delectus a necessitatibus magnam obcaecati eaque non sunt facere, fuga libero! Minima
                        dignissimos aut similique odit, culpa expedita! Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Ea, ab corrupti! Unde, dicta, earum fugiat ad, consectetur qui neque i
                    </p>
                </div>
            </div>
        </section>
        <section id="jurnal" class="mb-20 p-6 m-5 max-w-md md:max-w-4xl mx-auto bg-teal-700 md:rounded-md">
            <h2 class="text-center text-6xl font-semibold mb-6 text-white">Jurnal</h2>
            <div class="text-end">
                <button class="bg-teal-800 text-white px-3 py-2 mb-4 rounded-md"><a href="{{ route('jurnal.list') }}">SEE
                        MORE</a></button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($journals as $journal)
                    <a href="{{ route('jurnal.detail', $journal->id) }}"
                        class="mx-auto md:mx-0 bg-teal-800 text-white p-4 max-w-[530px]">
                        <h2 class="font-semibold text-xl mb-1">{{ $journal->title }}</h2>
                        <h3 class="inline-block text-base font-medium mb-1">{{ $journal->no_sk }}</h3>
                        <p class="mb-1 text-base">
                            {{ strlen($journal->description) > 150 ? rtrim(substr($journal->description, 0, 150), ' ') . '...' : $journal->description }}
                        </p>
                    </a>
                @endforeach
            </div>
        </section>
        <section id="activity" class="p-4 max-w-md md:max-w-4xl mx-auto mb-20">
            <h2 class="text-center mb-8 text-6xl font-semibold">Activity</h2>
            <h2 class="text-center mb-8 text-xl font-medium">PELAKSANAAN PENGABDIAN KEPADA MASYARAKAT</h2>
            <ol class="grid grid-cols-1 sm:grid-cols-2 gap-4 px-6 md:gap-x-8 text-base list-disc">
                <li>
                    2 Melaksanakan pengembangan hasil pendidikan dan penelitian yang dapat dimanfaatkan oleh
                    masyarakat/industri. (tiap program)
                </li>
                <li>
                    Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas umum
                    pemerintah dan pembangunan.
                </li>
                <li>
                    Memberi latihan/penyuluhan/ penataran/ ceramah pada masyarakat. (terjadwal/terprogram)
                </li>
                <li>
                    7 Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)
                </li>
            </ol>
        </section>
    </main>
@endsection
