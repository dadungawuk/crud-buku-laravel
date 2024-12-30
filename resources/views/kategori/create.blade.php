@include('layout.header')
<h3 class="judul-h3">Buat Kategori</h3>
<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <div class="mb-4">
        <label for="" class="block font-bold mb-2">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="" placeholder="Masukkan nama kategori" class="input-biasa">
    </div>
    <button type="submit" class="tombol-biru">Submit</button>
</form>

@include('layout.footer')
