<center><h1>Kumpulan Data Suplier :</h1></center>
    <table border="1" align="center">
    <tr>
        <th>Id Suplier</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Kota</th>
    </tr>

    @foreach ($suplier as $item)
    <tr align="center">
        <td>{{ $item->id_suplier}}</td>
        <td>{{ $item->nama}}</td>
        <td>{{ $item->alamat}}</td>
        <td>{{ $item->kode_pos}}</td>
        <td>{{ $item->kota}}</td>
    </tr>
    @endforeach
    </table>
    <br>
    <center><a href="/barang">Kembali</a></center>
