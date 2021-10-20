<center><h1>Kumpulan Data Pembeli :</h1></center>

    <table border="1" align="center">
    <tr>
        <th>Id Pembeli</th>
        <th>Nama</th>
        <th>Jenis Kelamin </th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Kota</th>
        <th>Tanggal Lahir</th>
    </tr>

    @foreach ($pembeli as $item)
    <tr align="center">
        <td>{{ $item->id_pembeli}}</td>
        <td>{{ $item->nama}}</td>
        <td>{{ $item->jns_kelamin}}</td>
        <td>{{ $item->alamat}}</td>
        <td>{{ $item->kode_pos}}</td>
        <td>{{ $item->kota}}</td>
        <td>{{ $item->tgl_lahir}}</td>
    </tr>
    @endforeach
    </table>
    <br>
    <center><a href="/suplier">Next</a></center>
