<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhsachsinhvien extends Model
{
    use HasFactory;

    protected $table = "danhsachsinhvien";
    protected $primarykey = "MSSV";
    public $timestamps = "false";
    protected $fillable = [
        "MSSV","HOTEN","SDT","NGAYSINH","GIOITINH"
    ];
}
