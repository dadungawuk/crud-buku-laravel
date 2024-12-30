@include('layout.header')
<h3 class="judul-h3">Edit Kategori</h3>
<form action="{{ route('kategori.update', $kategori->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="" class="block font-bold mb-2">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="" value="{{ $kategori->nama_kategori }}"
            class="w-full px-3 py-2 border border-gray-300 rounded">
    </div>
    <button type="submit" class="tombol-biru">Update</button>
</form>

@include('layout.footer')
