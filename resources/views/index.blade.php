<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>Posisi</th>
                <th>No_Punggung</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($data_pemain as $index => $pemain)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pemain->nama }}</td>
                <td>{{ $pemain->posisi }}</td>
                <td>{{ $pemain->no_punggung }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</body>
</html>
