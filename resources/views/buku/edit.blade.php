@include('layout.header')
<h3 class="judul-h3">Edit Buku</h3>
<form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Judul Buku:</label>
        <input type="text" name="judul" id="" value="{{ $buku->judul }}" class="input-biasa">
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Pengarang:</label>
        <input type="text" name="pengarang" id="" value="{{ $buku->pengarang }}" class="input-biasa">
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" id="" value="{{ $buku->tahun_terbit }}" class="input-biasa">
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Penerbit:</label>
        <select name="penerbit_id" id="" class="input-biasa">
            @foreach ($penerbit as $p)
                <option value="{{ $p->id }}" {{ $p->id == $buku->penerbit_id ? 'selected' : '' }}>
                    {{ $p->nama_penerbit }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Kategori:</label>
        <select name="kategori_id" id="" class="input-biasa">
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}" {{ $k->id == $buku->kategori_id ? 'selected' : '' }}>
                    {{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="block font-bold mb-2">Gambar Sampul:</label>
        @if ($buku->cover)
            <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover Lama" width="90">
        @endif
        <input type="file" name="file_cover" id="" class="input-biasa">
    </div>
    <input type="hidden" name="cover_lama" value="{{ $buku->cover }}">
    <button type="submit" class="tombol-biru">Update</button>
</form>

@include('layout.footer')
