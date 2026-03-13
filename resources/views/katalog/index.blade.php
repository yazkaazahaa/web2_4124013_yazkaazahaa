<h1>Katalog Ramen Yazkaa</h1>

<ul>
@foreach($produk as $item)
    <li>
        {{ $item['nama'] }} - Rp{{ $item['harga'] }}
        <a href="/katalog/{{ $item['id'] }}">Lihat Detail</a>
    </li>
@endforeach
</ul>