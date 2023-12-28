@extends('index')
@section('title', 'Society | Tambah Jurnal')

@section('content')
    <section class="hero h-[200px] md:h-[250px] px-4 flex justify-center items-center">
        <h1 class="text-3xl md:text-5xl font-semibold text-white text-center">ADD NEW JOURNAL</h1>
    </section>
    <main class="py-8 bg-gray-200">
        <form class="bg-white shadow-xl p-8 rounded-md lg:w-[921px] md:w-[718px] sm:w-[590px] mx-auto flex flex-col"
            method="POST" action="{{ route('jurnal.form') }}" enctype="multipart/form-data" id="form">
            @csrf
            <input class="border rounded-md mb-4 px-4 py-2 text-base" type="text" name="title" placeholder="Title">
            <input class="border rounded-md mb-4 px-4 py-2" type="text" name="no_sk" placeholder="Nomor SK">
            <textarea class="border rounded-md mb-4 px-4 py-2" placeholder="Detail Jurnal....." name="description"></textarea>
            <div class="flex">
                <div class="flex flex-col gap-2">
                    <p>Upload Gambar</p>
                    <input type="file" multiple name="images_attachment[]" accept="image/*">
                </div>
                <div class="flex flex-col gap-2">
                    <p>Upload Pdf</p>
                    <input type="file" name="attachment" accept=".pdf">
                </div>
            </div>
            <div class="border border-solid mb-4 border-gray-400" style="margin-top: 1rem"></div>
            <button class="bg-teal-700 text-white px-3 py-2 text-base rounded-md">Create</button>
        </form>
    </main>

    <script>
        document.querySelector('[name="images_attachment"]').addEventListener('change', function(event) {
            var input = event.target;
            var files = input.files;

            if (files.length > 2) {
                alert('Upload Gambar Dibatasi Untuk 2 Gambar Saja');
                input.value = '';
            }
        });
    </script>
@endsection
