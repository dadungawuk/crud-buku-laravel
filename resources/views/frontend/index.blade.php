@extends('frontend.master')
@section('title', 'Katalog Buku')

@section('content')
    {{-- hero section --}}
    <section class="bg-blue-500 text-white py-12">
        <div class="container max-w-6xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di Katalog Buku</h1>
            <h1 class="text-5xl font-bold mb-4">HA-Library</h1>
            <p class="text-lg">Jelajahi berbagai koleksi buku-buku terbaik dari kami.</p>
        </div>
    </section>

    {{-- section filter dan pencarian --}}
    <section class="container max-w-6xl mx-auto py-6">
        <form action="{{ route('homepage') }}" method="get" class="flex flex-wrap gap-4 items-center">
            <select name="kategori" class="p-2 border rounded">
                <option value="">Semua Kategori</option>
                @foreach ($kategori as $k)
                    <option value="{{ $k->id }}" {{ request('kategori') == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kategori }}
                    </option>
                @endforeach
            </select>

            <select name="penerbit" class="p-2 border rounded">
                <option value="">Semua Penerbit</option>
                @foreach ($penerbit as $p)
                    <option value="{{ $p->id }}" {{ request('penerbit') == $p->id ? 'selected' : '' }}>
                        {{ $p->nama_penerbit }}
                    </option>
                @endforeach
            </select>

            <input type="text" name="search" class="p-2 border rounded flex-1" placeholder="Masukkan kata kunci..."
                value="{{ request('search') }}">
            <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded">Terapkan</button>
        </form>
    </section>

    {{-- section katalog --}}
    <section class="container max-w-6xl mx-auto py-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach ($buku as $b)
                <div class="bg-white shadow-lg p-6 flex rounded-lg items-center space-x-4">
                    <div class="flex-shrink-0">
                        @if ($b->cover)
                            <img src="{{ asset('storage/' . $b->cover) }}" alt="Cover Buku"
                                class="w-16 h-18 rouded-md object-cover">
                        @else
                            <img src="{{ asset('img/default_cover.jpg') }}" alt="Cover Buku"
                                class="w-16 h-18 rouded-md object-cover">
                        @endif
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold text-blue-800"><a
                                href="{{ route('detail-buku', $b->id) }}">{{ $b->judul }}</a></h2>
                        <p class="text-gray-600 text-sm">Pengarang: {{ $b->pengarang }}</p>
                        <p class="text-gray-600 text-sm">Penerbit: {{ $b->penerbit->nama_penerbit }}</p>
                        <p class="text-gray-600 text-sm">Tahun: {{ $b->tahun_terbit }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">{{ $buku->links() }}</div>
    </section>
@endsection
