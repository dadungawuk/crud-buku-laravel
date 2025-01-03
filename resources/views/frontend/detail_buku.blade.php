@extends('frontend.master')
@section('title', 'Katalog Buku')

@section('content')
    {{-- section detail buku --}}
    <section class="container max-w-6xl mx-auto py-6">
        <div class="bg-white shadow-lg p-6 flex rounded-lg flex-col md:flex-row gap-6">
            <div class="w-full">
                @if ($buku->cover)
                    <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover Buku"
                        class="w-full h-auto rouded-md object-cover m-6">
                @else
                    <img src="{{ asset('img/default_cover.jpg') }}" alt="Cover Buku"
                        class="w-full h-auto rouded-md object-cover m-6">
                @endif
            </div>

            <div>
                <h2 class="text-lg font-semibold text-blue-800">{{ $buku->judul }}</h2>
                <p class="text-gray-600 text-sm">Pengarang: {{ $buku->pengarang }}</p>
                <p class="text-gray-600 text-sm">Penerbit: {{ $buku->penerbit->nama_penerbit }}</p>
                <p class="text-gray-600 text-sm">Tahun: {{ $buku->tahun_terbit }}</p>
                <p class="text-gray-600 text-sm">Kategori: {{ $buku->kategori->nama_kategori }}</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nihil quaerat iusto aliquid officiis,
                    unde laudantium eum doloribus odit obcaecati rerum quas, magni blanditiis debitis adipisci. Magnam
                    dolorem laborum enim. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, tempora
                    excepturi inventore iure earum id temporibus iusto. Amet quaerat repellat, ipsum accusamus doloremque
                    tempora laborum, delectus commodi atque, alias a.</p>

                <a href="{{ route('homepage') }}"
                    class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-800">Kembali ke
                    Homepage</a>
            </div>
        </div>
    </section>
@endsection
