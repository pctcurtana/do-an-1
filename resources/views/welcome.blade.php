<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Document</title>
<style>
*{
    box-sizing: border-box;
}
html{
    font-family: 'Quicksand', sans-serif;
}
body{
    background-color:rgb(250, 250, 250);
    display:flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin:0;
}
.content{
    background-color:rgb(245, 250, 254);
    text-align: left; 
    padding: 20px;
    border-radius: 10px;
    height: fit-content;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.content .group{
    display: flex;
}
input{
    border-radius:5px;
    border:1px solid gray;
    padding: 7px;
}
button{
    font-family: 'Quicksand', sans-serif;
    background-color: rgb(77, 150, 252);
    border:none;
    border-radius:5px;
    padding:8px;
    color: white;
    display: flex;
    margin-top:5px; 
    
}
.content .btn{
    display: flex;
    justify-content: right;
}
button:hover{
    background-color: rgb(120, 155, 207);
}
p{
    font-weight:Bold;
    
}

button .search {
   margin: 2px 5px 0px 0px; 
   font-size: 12px;
}

</style>
</head>
<body>
    <div class="content">
        <p>Mã số sinh viên:</p>
        <input type="text">
        <div 
            class="btn"><button type="submit">
                <i class="fas fa-search search" ></i>Tìm kiếm
            </button>
        </div>
        <p>Họ và tên:</p>
        <p>Số điện thoại:</p>
        <p>Ngày sinh:</p>
        <p>Giới tính:</p>
    </div>
</body>
</html>
