<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center> Daftar Buku </center>
    <center><table border '1'>
      <thead></center>
        <tr>
           <th>Judul</th>
           <th>Jumlah halaman</th>
           <th>Penerbit</th>
           <th>Status</th>
           <th>Sinopsis</th>
           <th>Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach($buku as $book)
    <tr>
        <td>{{ $book->judul }}</td>
        <td>{{ $book->jumlah_halaman }}</td>
        <td>{{ $book->penerbit }}</td>
        <td>{{ $book->status }}</td>
        <td>{{ $book->synopsis }}</td>
        <td><a href ="/book/{{ $book->id }}">lihat</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>