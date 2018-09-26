<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Học Sinh</title>
    <link type="text/css" href="{!! url('restful/css/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>
  <body>
  <h1>{{ trans('message.welcome') }}</h1>
  <a class="btn btn-primary" href="/language/vi ">vietnamese</a>
  <a class="btn btn-primary" href="/language/en">english</a>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <table>
            <th><h3 class="panel-title">Sửa Điểm Học Sinh</h3><th>
            <th><button><a href="{!! url('hocsinh') !!}">Home</a></button><th>
          </table>
          
        </div>
        <div class="panel-body">

         <!-- alert validator -->
      
        
          {!! Form::open(array('route'=>array('hocsinh.update',$data['id']),'method'=>'PUT')) !!}
            <div class="form-group">
              <label for="lblHoTen">Họ Tên Học Sinh</label>
              <input type="text" class="form-control" name="txtHoTen" value="{!! old('txtHoTen',isset($data) ? $data['hoten'] :null)!!}" />
            </div>
            <div class="form-group">
              <label for="lblToan">Điểm Môn Toán</label>
              <input type="text" class="form-control" name="txtToan" value="{!! old('txtToan',isset($data) ? $data['toan'] :null)!!}" />
            </div>
            <div class="form-group">
              <label for="lblLy">Điểm Môn Lý</label>
              <input type="text" class="form-control" name="txtLy" value="{!! old('txtLy',isset($data) ? $data['ly'] :null)!!}" />
            </div>
            <div class="form-group">
              <label for="lblHoa">Điểm Môn Hóa</label>
              <input type="text" class="form-control" name="txtHoa" value="{!! old('txtHoa',isset($data) ? $data['hoa'] :null)!!}" />
            </div>
            <button type="submit" class="btn btn-default">Sửa</button>
          {!! Form::close()!!}
          
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>