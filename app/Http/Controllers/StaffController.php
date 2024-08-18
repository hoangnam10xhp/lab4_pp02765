<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class StaffController extends Controller
{
    public function index(){
        // lấy ra toàn bộ user
        $staff = Staff::all();
        //dd($users);
        return view('staff.index', compact('staff'));
        // trả về view hiển thị danh sách user
        // return view('staff.index', compact('staff'));
    }

    public function create(){
        return view('staff.create');
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);

        // Tạo mới staff với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Staff::create($data);
        echo"Thêm người dùng thành công";
    }

    public function edit($id){
        // Tìm đến đối tượng muốn update
        $staff = Staff::findOrFail($id);

        // điều hướng đến view edit staff và truyền sang dữ liệu về staff muốn sửa đổi
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $staff = staff::findOrFail($id);
        $staff->update([
            'name' => $request->name,
            'salary' => $request->salary,
        ]);

        if($staff){
            return "Sửa người dùng thành công";
        }
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $staff = Staff::findOrFail($id);

        $staff->delete();
        echo"Xóa người dùng thành công";
    }
}
