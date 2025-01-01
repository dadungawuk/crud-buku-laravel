@include('layout.header')

<div class="flex items-center justify-between">
    <h3 class="judul-h3">Detail Anggota</h3>
    <a href="{{ route('anggota.index') }}" class="tombol-abu">Kembali</a>
</div>
<table class="tabel-1">
    <tbody>
        <tr>
            <td width="150px" class="px-4 py-2">Nama Anggota</td>
            <td width="2px" class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $anggota->nama_anggota }}</td>
        </tr>
        <tr>
            <td class="px-4 py-2">Alamat</td>
            <td class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $anggota->alamat }}</td>
        </tr>
        <tr>
            <td class="px-4 py-2">No. Telpon</td>
            <td class="px-4 py-2">:</td>
            <td class="px-4 py-2">{{ $anggota->no_telpon }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
