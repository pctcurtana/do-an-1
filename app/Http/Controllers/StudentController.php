<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danhsachsinhvien;

class StudentController extends Controller
{
    public function search(Request $request)
    {
        $mssv = $request->input('mssv');
        $ketqua = Danhsachsinhvien::where('mssv',$mssv)->first();
        if ($ketqua) {
            return view('student.result', ['ketqua1' => $ketqua]);
        } else {
            return view('student.result', ['error' => 'Không tìm thấy sinh viên']);
        } 
        
    }
}

?>