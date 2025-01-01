@include('layout.header')

<h3 class="judul-h3">Transaksi Peminjaman Buku</h3>
<form action="{{ route('peminjaman.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Tanggal Peminjaman</label>
        <input type="date" name="tgl_peminjaman" class="input-biasa" value="{{ date('Y-m-d') }}">
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Pilih Anggota</label>
        <select name="anggota_id" class="input-biasa">
            @foreach ($anggota as $a)
                <option value="{{ $a->id }}">{{ $a->nama_anggota }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <h3 class="judul-h3">Katalog Buku</h3>
        <div class="overflow-y-scroll h-64 border border-gray-300 rounded-lg p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($bukus as $buku)
                    <div class="flex flex-col items-center p-4 border rounded-sm shadow-sm">
                        @if ($buku->cover)
                            <img src="{{ asset('storage') . '/' . $buku->cover }}" alt="Cover"
                                class="w-16 h-20 object-cover mb-2">
                        @else
                            <img src="{{ asset('img/default_cover.jpg') }}" alt="Cover"
                                class="w-16 h-20 object-cover mb-2">
                        @endif

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" name="buku_ids[]" value="{{ $buku->id }}" class="form-checkbox">
                            <span class="text-sm text-center">{{ $buku->judul }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <button type="submit" class="tombol-biru">
        Simpan Peminjaman
    </button>

</form>

@include('layout.footer')
