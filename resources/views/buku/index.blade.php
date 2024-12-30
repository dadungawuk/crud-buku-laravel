@include('layout.header')
<h3 class="judul-h3">Buku</h3>
<div style="display: flex; justify-content: space-between;align-items:center;">
    <a href="{{ route('buku.create') }}" class="tombol-biru">Tambah</a>
    <form action="{{ route('buku.index') }}" method="get" class="flex items-center">
        <input type="text" name="q" id="" class="w-full px-3 py-1 border border-gray-300 rounded"
            placeholder="Judul/Pengarang/Tahun buku...">
        <button type="submit" class="tombol-hijau ml-2">Cari</button>
    </form>
</div>

<table class="tabel-1">
    <thead>
        <tr class="bg-gray-100">
            <th class="custom_th">No.</th>
            <th class="custom_th">Cover</th>
            <th class="custom_th">Judul Buku</th>
            <th class="custom_th">Pengarang</th>
            <th class="custom_th">Tahun</th>
            <th class="custom_th">Penerbit</th>
            <th class="custom_th">Kategori</th>
            <th width="170" class="custom_th">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allBuku as $key => $r)
            <tr>
                <td class="custom_td">{{ $key + $allBuku->firstItem() }}</td>
                <td class="custom_td">
                    @if ($r->cover)
                        <img src="{{ asset('storage/' . $r->cover) }}" alt="Cover" width="80">
                    @endif
                </td>
                <td class="custom_td">{{ $r->judul }}</td>
                <td class="custom_td">{{ $r->pengarang }}</td>
                <td class="custom_td">{{ $r->tahun_terbit }}</td>
                <td class="custom_td">{{ $r->penerbit->nama_penerbit }}</td>
                <td class="custom_td">{{ $r->kategori->nama_kategori }}</td>
                <td class="custom_td" width="220">
                    <form action="{{ route('buku.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('buku.show', $r->id) }}" class="tombol-hijau">Detail</a>
                        <a href="{{ route('buku.edit', $r->id) }}" class="tombol-orange">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol-merah">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-3">
    {{-- {{ $allBuku->links('vendor.pagination.buatanku') }} --}}
    {{ $allBuku->links('vendor.pagination.tailwind') }}
</div>

@include('layout.footer')
