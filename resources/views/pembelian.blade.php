<center><h1>Kumpulan Data Pembelian :</h1></center>
    <table border="1" align="center">
    <tr>
        <th>Id Pembelian</th>
        <th>Nama Barang </th>
        <th>Nama Suplier</th>
        <th>Qty</th>
        <th>Tanggal</th>
    </tr>

    @foreach ($pembelian as $item)
    <tr align="center">
        <td>{{ $item->id_pembelian}}</td>
        <td>{{ $item->nama_barang}}</td>
        <td>{{ $item->nama_suplier}}</td>
        <td>{{ $item->qty}}</td>
        <td>{{ $item->tgl}}</td>
    </tr>
    @endforeach
    </table>
    <br>
    <center><a href="/pembeli">Next</a></center>
