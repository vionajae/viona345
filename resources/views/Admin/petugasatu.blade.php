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
                <th>Nama</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebas as $inem)
                <tr>
                    <td>{{$inem->nama_petugas}}</td>
                    <td>{{$inem->username}}</td>
                    <td>{{$inem->telp}}</td>
                    <td>{{$inem->level}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>