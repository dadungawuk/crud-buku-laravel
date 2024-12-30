@include('layout.header')
<h3 class="judul-h3">Buat Buku</h3>
<form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Judul Buku:</label>
        <input type="text" name="judul" id="" placeholder="Masukkan judul buku" class="input-biasa">
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Pengarang:</label>
        <input type="text" name="pengarang" id="" placeholder="Masukkan nama pengarang" class="input-biasa">
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" id="" placeholder="Masukkan tahun terbit"
            class="input-biasa">
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Penerbit:</label>
        <select name="penerbit_id" id="" class="input-biasa">
            @foreach ($penerbit as $p)
                <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Kategori:</label>
        <select name="kategori_id" id="" class="input-biasa">
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Gambar Sampul:</label>
        <input type="file" name="file_cover" id="" class="input-biasa">
    </div>
    <button type="submit" class="tombol-biru">Submit</button>
</form>

@include('layout.footer')
