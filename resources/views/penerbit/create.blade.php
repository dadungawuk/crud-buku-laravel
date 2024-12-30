@include('layout.header')
<h3 class="judul-h3">Buat Penerbit</h3>
<form action="{{ route('penerbit.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Nama Penerbit:</label>
        <input type="text" name="nama_penerbit" id="" placeholder="Masukkan nama penerbit"
            class="w-full px-3 py-2 border border-gray-300 rounded">
    </div>
    <button type="submit" class="tombol-biru">Submit</button>
</form>

@include('layout.footer')
