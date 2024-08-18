<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::all();
        return response()->json([
            'message'=>'Lấy hết dữ liệu staff từ DB thành công',
            'data' => $staff
        ],
        Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'salary'=> 'required',
        ]);
        $name=$request->name;
        $salary=$request->salary;
        Staff::create([
            'name'=>$name,
            'salary'=>$salary
        ]);
        return response()->json([
            'message'=> 'Them thanh cong',
        ],Response::HTTP_OK) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request -> id;
        $staff= Staff::find($id);
        return response()->json([
            'message'=>'Lấy hết dữ liệu staff từ DB thành công',
            'data' => $staff
        ],
        Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request -> id;
        $staff = Staff::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staff = staff::findOrFail($id)
        ->update([
            'name' => $request->name,
            'salary' => $request->salary,
        ]);

        if($staff){
            return "Sửa người dùng thành công";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = Staff::findOrFail($id);

        $staff->delete();
        echo"Xóa người dùng thành công";
    }
}
