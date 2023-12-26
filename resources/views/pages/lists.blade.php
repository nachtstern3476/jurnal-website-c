@extends('index')

@section('title', 'Society | Kumpulan Jurnal')
@section('content')
    <section class="hero h-[200px] md:h-[250px] px-4 flex justify-center items-center">
        <h1 class="text-3xl md:text-5xl font-semibold text-white text-center">JURNAL</h1>
    </section>
    <main class="bg-gray-200 py-8">
        <section class="bg-white shadow-xl p-8 rounded-md lg:w-[921px] md:w-[718px] sm:w-[590px] mx-auto">
            <div class="flex justify-between mb-12">
                <h1 class="block text-xl md:text-3xl font-semibold">LIST JURNAL <span
                        class="h-[3px] w-[100px] md:w-[150px] bg-teal-700 block"></span>
                </h1>
                @if (session('is_login'))
                    <a href="{{ route('jurnal.form') }}">
                        <img src="{{ asset('assets/img/file-circle-plus-solid.svg') }}" alt="tambah-file">
                    </a>
                @endif
            </div>
            <div class="jurnal-box h-[65vh] overflow-y-auto pr-2 pt-1">
                @foreach ($journals as $journal)
                    <a href="{{ route('jurnal.detail', $journal->id) }}"
                        class="mb-2 mx-auto md:mx-0 bg-teal-700 text-white p-4 w-full block">
                        <h1 class="font-semibold text-xl mb-1">{{ $journal->title }}</h1>
                        <h3 class="inline-block text-base font-medium mb-1">{{ $journal->no_sk }}</h3>
                        <p class="mb-1 text-base">
                            {{ strlen($journal->description) > 150 ? rtrim(substr($journal->description, 0, 150), ' ') . '...' : $journal->description }}
                        </p>
                    </a>
                @endforeach
            </div>
        </section>
    </main>
@endsection
