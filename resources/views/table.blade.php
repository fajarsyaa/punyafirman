<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">nama</th>
                <th scope="col">umur</th>
                <th scope="col">jenis kelamin</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data_pegawai)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $data_pegawai->nama }}</td>
                    <td> {{ $data_pegawai->umur }}</td>
                    <td> {{ $data_pegawai->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('pegawai.edit', $data_pegawai->id) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('delete', $data_pegawai->id) }}" class="btn btn-danger">delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
