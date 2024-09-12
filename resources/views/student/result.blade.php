<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./frontend/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <title>Result</title>
</head>
<body>
    {{-- @if(isset($ketqua))
        <table>
            <thead>
                <tr>
                    <th>MSSV</th>
                    <th>HỌ TÊN</th>
                    <th>SĐT</th>
                    <th>NGÀY SINH</th>
                    <th>GIỚI TÍNH</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ketqua->mssv }}</td>
                    <td>{{ $ketqua->hoten }}</td>
                    <td>{{ $ketqua->sdt }}</td>
                    <td>{{ $ketqua->ngaysinh }}</td>
                    <td>{{ $ketqua->gioitinh ? 'Nữ' : 'Nam' }}</td>
                </tr>
            </tbody>
        </table>
    @else   
    <p>{{$error}}</p>
    @endif --}}
    @if(isset($ketqua))
    <p>Tên sinh viên: {{ $ketqua }}</p>
@else   
    <p>{{ $error }}</p>
@endif


</body>
</html>
