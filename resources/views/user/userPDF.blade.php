<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h4 align="center">Data Donatur</h4>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @php $no= 1; @endphp
            @foreach ($user as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->password }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->role }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>