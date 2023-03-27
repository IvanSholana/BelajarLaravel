<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="p-5">
    <h1 class="text-center mb-5">HELLO WORLD</h1>
    <table class="table  table-border  table-bordered">
        <thead>
        <tr class="fw-bold">
            <td>NIM</td>
            <td>ASAL</td>
            <td>NAMA</td>
            {{-- <td>UMUR</td>
            <td>JENIS KELAMIN</td> --}}
        </tr>
        </thead>
        <tbody>
            @foreach ($studentlist as $data)
            <tr>
                <td>{{$data->NIM}}</td>
                <td>{{$data->Asal}}</td><td>
                @foreach ($data->student as $value)
                 -   {{$value["Nama_Lengkap"]}} <br>
                    {{-- <td>{{$value["Umur"]}}</td>
                    <td>{{$value["Jenis_Kelamin"]}}</td> --}}
                @endforeach
            </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>