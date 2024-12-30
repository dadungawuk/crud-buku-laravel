@include('layout.header')
<h3 class="judul-h3">Kategori</h3>
<a href="{{ route('kategori.create') }}" class="tombol-biru">Tambah</a>
<table class="tabel-1">
    <thead>
        <tr class="bg-gray-100">
            <th class="custom_th">No.</th>
            <th class="custom_th">Nama Kategori</th>
            <th class="custom_th">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allKategori as $key => $r)
            <tr>
                <td class="custom_td">{{ $key + 1 }}</td>
                <td class="custom_td">{{ $r->nama_kategori }}</td>
                <td class="custom_td" width="210">
                    <form action="{{ route('kategori.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('kategori.show', $r->id) }}" class="tombol-hijau">Detail</a>
                        <a href="{{ route('kategori.edit', $r->id) }}" class="tombol-orange">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol-merah">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('layout.footer')
