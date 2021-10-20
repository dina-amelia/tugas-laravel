<center><h1>Kumpulan Data Pesanan :</h1></center>
    <table border="1" align="center">
    <tr>
        <th>Id Pesanan</th>
        <th>Nama Pesanan </th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Tanggal Pesan</th>
    </tr>

    @foreach ($pesanan as $item)
    <tr align="center">
        <td>{{ $item->id_pesanan}}</td>
        <td>{{ $item->nama_pelanggan}}</td>
        <td>{{ $item->nama_barang}}</td>
        <td>{{ $item->qty}}</td>
        <td>{{ $item->tgl_pesan}}</td>
    </tr>
    @endforeach
    </table>
    <br>
    <center><a href="/pembelian">Next</a></center>
