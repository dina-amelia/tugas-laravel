<center><h1>Kumpulan Data Barang :</h1></center>
    <table border="1" align="center">
    <tr>
        <th>Id barang</th>
        <th>Nama </th>
        <th>Varian</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
    </tr>

    @foreach ($barang as $item)
    <tr align="center">
        <td>{{ $item->id_barang}}</td>
        <td>{{ $item->nama}}</td>
        <td>{{ $item->varian }}</td>
        <td>{{ $item->harga_beli }}</td>
        <td>{{ $item->harga_jual}}</td>
    </tr>
    @endforeach
    </table>
    <br>
    <center><a href="/pesanan">Next</a></center>

