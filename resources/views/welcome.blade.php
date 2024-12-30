@include('layout.header')
<h2 class="text-xl font-bold">Selamat Datang {{ Auth::user()->name }}</h2>
<p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quod minima praesentium expedita
    optio suscipit culpa, maiores doloremque voluptate impedit recusandae animi non, laborum sed quasi. Magni velit eius
    temporibus!</p>
@include('layout.footer')
