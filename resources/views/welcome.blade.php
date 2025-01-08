@include('layout.header')

{{-- statistik data --}}

<section class="container mx-auto mb-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        {{-- jumlah kategori --}}
        <div class="bg-green-300 shadow rounded p-6 text-center border border-blue-500">
            <h2 class="text-xl font-bold text-gray-800">Total Kategori</h2>
            <p class="text-4xl font-extrabold text-blue-800">{{ $data['jmlKategori'] }}</p>
        </div>

        {{-- jumlah penerbit --}}
        <div class="bg-red-300 shadow rounded p-6 text-center border border-blue-500">
            <h2 class="text-xl font-bold text-gray-800">Total Penerbit</h2>
            <p class="text-4xl font-extrabold text-blue-800">{{ $data['jmlPenerbit'] }}</p>
        </div>

        {{-- jumlah buku --}}
        <div class="bg-blue-300 shadow rounded p-6 text-center border border-blue-500">
            <h2 class="text-xl font-bold text-gray-800">Total Buku</h2>
            <p class="text-4xl font-extrabold text-blue-800">{{ $data['jmlSemuaBuku'] }}</p>
        </div>

        {{-- jumlah anggota --}}
        <div class="bg-yellow-300 shadow rounded p-6 text-center border border-blue-500">
            <h2 class="text-xl font-bold text-gray-800">Total Anggota</h2>
            <p class="text-4xl font-extrabold text-blue-800">{{ $data['jmlAnggota'] }}</p>
        </div>
    </div>
</section>

<section class="container mx-auto mb-8">
    <h2 class="text-xl font-bold text-gray-800 mb-4">Buku Per Kategori</h2>
    <canvas id="grafikBukuKategori" width="400" height="100"></canvas>
</section>

<h2 class="text-xl font-bold">Selamat Datang {{ Auth::user()->name }}</h2>
<p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quod minima praesentium expedita
    optio suscipit culpa, maiores doloremque voluptate impedit recusandae animi non, laborum sed quasi. Magni velit eius
    temporibus!</p>


<script>
    const ctx = document.getElementById('grafikBukuKategori');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($namaKategori) !!},
            datasets: [{
                label: 'Jumlah Buku',
                data: {!! json_encode($jumlahBuku) !!},
                backgroundColor: [
                    '#1abc9c', '#f1c40f', '#8e44ad', '#2c3e50'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@include('layout.footer')
