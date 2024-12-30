@include('layout.header')
<h3 class="judul-h3">Detail Buku</h3>

@if ($buku->cover)
    <div style="text-align: center;">
        <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover Buku" width="150">
    </div>
@endif
<table class="tabel-1">
    <tbody>
        <tr>
            <td width="150px" class="px-4 py-2">Judul Buku</td>
            <td width="2px" class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $buku->judul }}</td>
        </tr>
        <tr>
            <td class="px-4 py-2">Pengarang</td>
            <td class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $buku->pengarang }}</td>
        </tr>
        <tr>
            <td class="px-4 py-2">Tahun Terbit</td>
            <td class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $buku->tahun_terbit }}</td>
        </tr>
        <tr>
            <td class="px-4 py-2">Penerbit</td>
            <td class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $buku->penerbit->nama_penerbit }}</td>
        </tr>
        <tr>
            <td class="px-4 py-2">Kategori</td>
            <td class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $buku->kategori->nama_kategori }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
