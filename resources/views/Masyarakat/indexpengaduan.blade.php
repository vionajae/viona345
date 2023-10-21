@extends('isihalaman')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" borderspacing="0">
        <thead>
            <tr>
                <th>Id Pengaduan</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>foto</th>
                <th>Isi Laporan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebis as $inem)
                <tr>
                    <td>{{$inem->id_pengaduan}}</td>
                    <td>{{$inem->nik}}</td>
                    <td>{{$inem->nama}}</td>
                    <td>{{$inem->foto}}</td>
                    <td>{{$inem->isi_laporan}}</td>
                    <td>{{$inem->tanggal}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>