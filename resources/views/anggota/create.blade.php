@include('layout.header')
<h3 class="judul-h3">Tambah Anggota</h3>
<form action="{{ route('anggota.store') }}" method="post">
    @csrf
    <div class="mb-4">
        <label for="" class="block font-bold mb-2">Nama Anggota:</label>
        <input type="text" name="nama_anggota" id="" placeholder="Masukkan nama Anggota" class="input-biasa">
    </div>
    <div class="mb-4">
        <label for="" class="block font-bold mb-2">Alamat</label>
        <input type="text" name="alamat" class="input-biasa">
    </div>
    <div class="mb-4">
        <label for="" class="block font-bold mb-2">No. Telpon</label>
        <input type="text" name="no_telpon" class="input-biasa">
    </div>
    <button type="submit" class="tombol-biru">Submit</button>
</form>

@include('layout.footer')
