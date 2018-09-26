<?php

namespace Laraveldaily\Timezones;
use Laraveldaily\Timezones\hocsinh;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class hocsinhcontroller extends Controller
{
    public function index(){
        $hocsinh = hocsinh::all(); // phan trang

        return view('hocsinh::list',compact('hocsinh','_json'));
     }
 
     public function create(){
         return view('hocsinh::add');
     }
     
     public function show(){
         return view('list');
     }
 
     public function edit($id){
         
             $data = HocSinh::find($id);
             return view('hocsinh::edit',compact('data'));
             return redirect('hocsinh');
     }
 
     // hàm xử lý trong delete
     public function destroy($id){
 
         
             $data = HocSinh::findOrFail($id);
             $data->delete();
             return redirect('hocsinh');
     }
 
     // hàm xử lý trong update
     public function update(Request $request,$id){
         $hocsinh = HocSinh::find($id);
         $hocsinh->hoten = $request->txtHoTen;
         $hocsinh->toan = $request->txtToan;
         $hocsinh->ly = $request->txtLy;
         $hocsinh->hoa = $request->txtHoa;
         $hocsinh->save();
         return redirect('hocsinh');
     }
 
 
     // hàm xử lý trong add
     public function store(Request $request){ // cần khai báo biến validate trong hàm thì mới sử dụng được
         $hocsinh = new HocSinh;
         $hocsinh->hoten = $request->txtHoTen;
         $hocsinh->toan = $request->txtToan;
         $hocsinh->ly = $request->txtLy;
         $hocsinh->hoa = $request->txtHoa;
         $hocsinh->save();
         return redirect('hocsinh');
     }
}
