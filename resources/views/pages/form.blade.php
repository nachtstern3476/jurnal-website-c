@extends('index')
@section('title', 'Society | Tambah Jurnal')

@section('content')
    <section class="hero h-[200px] md:h-[250px] px-4 flex justify-center items-center">
        <h1 class="text-3xl md:text-5xl font-semibold text-white text-center">ADD NEW JOURNAL</h1>
    </section>
    <main class="py-8 bg-gray-200">
        <form class="bg-white shadow-xl p-8 rounded-md lg:w-[921px] md:w-[718px] sm:w-[590px] mx-auto flex flex-col"
            method="POST" action="{{ route('jurnal.form') }}" enctype="multipart/form-data">
            @csrf
            <input class="border rounded-md mb-4 px-4 py-2 text-base" type="text" name="title" placeholder="Title">
            <input class="border rounded-md mb-4 px-4 py-2" type="text" name="no_sk" placeholder="Nomor SK">
            <textarea class="border rounded-md mb-4 px-4 py-2" placeholder="Detail Jurnal....." name="description"></textarea>
            <input type="file" name="attachment" accept=".pdf">
            <div class="border border-solid mb-4 border-gray-400" style="margin-top: 1rem"></div>
            <button class="bg-teal-700 text-white px-3 py-2 text-base rounded-md">Create</button>
        </form>
    </main>
@endsection
