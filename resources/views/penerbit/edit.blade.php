@include('layout.header')
<h3 class="judul-h3">Edit Penerbit</h3>
<form action="{{ route('penerbit.update', $penerbit->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Nama Penerbit:</label>
        <input type="text" name="nama_penerbit" id="" value="{{ $penerbit->nama_penerbit }}"
            class="w-full px-3 py-2 border border-gray-300 rounded">
    </div>
    <button type="submit" class="tombol-biru">Update</button>
</form>

@include('layout.footer')
