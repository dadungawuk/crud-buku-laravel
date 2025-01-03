@include('layout.header')
<h3 class="judul-h3">Buat Kategori</h3>
<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <div class="mb-4">
        <label for="" class="block font-bold mb-2">Nama Kategori:</label>
        <input type="text" name="nama_kategori" value="{{ old('nama_kategori') }}" id=""
            placeholder="Masukkan nama kategori"
            class="input-biasa @error('nama_kategori')
                input-invalid
            @enderror">
        @error('nama_kategori')
            <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="tombol-biru">Submit</button>
</form>

@include('layout.footer')
