<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./frontend/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Search</title>
</head>
<body>
    <div class="content">
        <p>Mã số sinh viên:</p>
        <input name="mssv" type="text" required>
        <div class="btn">
            <form action="{{ route('results') }}" method="POST">
                @csrf   
                <button type="submit">
                    <i class="fas fa-search search" ></i>Tìm kiếm
                </button>
            </form>
        </div>
        <p>Họ và tên:</p>
        <p>Số điện thoại:</p>
        <p>Ngày sinh:</p>
        <p>Giới tính:</p>
    </div>
</body>
</html>
