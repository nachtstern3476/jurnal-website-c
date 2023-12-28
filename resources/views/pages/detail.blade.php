@extends('index')
@section('title', 'Society | Detail Jurnal')

@section('content')
    <main class="pb-8 bg-gray-200" style="padding-bottom: 2rem">
        <section id="home" class="hero h-[280px] md:h-[350px] px-4 flex justify-center mb-20 items-center">
            <h1 class="w-[1028px] mx-auto text-3xl md:text-5xl font-semibold text-white text-center ">
                {{ $journal->title }}
            </h1>
        </section>
        <section class="bg-white shadow-xl p-8 rounded-md lg:w-[921px] md:w-[718px] sm:w-[590px] mx-auto">
            <div class="mb-6 flex flex-col sm:flex-row sm:justify-between font-medium">
                <div>
                    <h2 class="flex gap-2 mb-2"><img src="{{ asset('assets/img/user-solid.svg') }}"
                            alt="user">{{ $user['username'] }}
                    </h2>
                    <h2 class="flex gap-2 mb-2"><img src="{{ asset('assets/img/envelope-solid.svg') }}"
                            alt="email">{{ $user['email'] }}
                    </h2>
                </div>
                <h2>{{ $journal->no_sk }}</h2>
            </div>
            <div class="flex">
                <p class="w-full">{{ $journal->description }}</p>
                @if ($journal->img_upload)
                <div class="flex flex-col items-center w-full gap-4">
                    @foreach ($journal->img_upload as $img)
                    <img class="object-cover" src="{{asset('storage/'.$img)}}" alt="">
                    @endforeach
                </div>
                @endif
            </div>
            @if ($journal->attachment)
                <div class="bg-white rounded-md border w-1/3 p-4 mt-6">
                    <h1 class="flex gap-2 border-b-2 border-solid border-gray-200 pb-2 mb-2">
                        <img src="{{ asset('assets/img/download-solid.svg') }}" alt="download-icon">Download
                    </h1>
                    <a href="{{ route('download.attachment', $journal->id) }}"
                        class="flex gap-2 rounded-md items-center text-white px-2 py-1 text-base bg-teal-700">
                        <img src="{{ asset('assets/img/file-pdf-solid.svg') }}" alt="pdf-icon">PDF
                    </a>
                </div>
            @endif
        </section>
    </main>
@endsection
