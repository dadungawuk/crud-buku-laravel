@include('layout.header')
<h3 class="judul-h3">Penerbit</h3>
<a href="{{ route('penerbit.create') }}" class="tombol-biru">Tambah</a>
<table class="tabel-1">
    <thead>
        <tr>
            <th class="custom_th">No.</th>
            <th class="custom_th">Nama Penerbit</th>
            <th class="custom_th">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allPenerbit as $key => $r)
            <tr>
                <td class="custom_td">{{ $key + 1 }}</td>
                <td class="custom_td">{{ $r->nama_penerbit }}</td>
                <td class="custom_td" width="210">
                    <form action="{{ route('penerbit.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('penerbit.show', $r->id) }}" class="tombol-hijau">Detail</a>
                        <a href="{{ route('penerbit.edit', $r->id) }}" class="tombol-orange">Edit</a>
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
