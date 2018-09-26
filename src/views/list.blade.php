<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Học Sinh</title>
    <link type="text/css" href="{!! url('restful/css/css/bootstrap.min.css')!!}" rel="stylesheet">
    <style type="text/css">
      .btn {padding:0px;font-weight:bold}
    </style>
    <script type="text/javascript">
        function xacnhanxoa(msg) {
            if (window.confirm(msg)) {
                return true;
            }
            return false;
        }
    </script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>

  <h1></h1>
  <a class="btn btn-primary" href="/language/vi ">vietnamese</a>
  <a class="btn btn-primary" href="/language/en">english</a>

    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Danh Sách Học Sinh</h3>
        </div>
        <table>
        <th><button><a  href="{!! route('hocsinh.create') !!}">Thêm</a></button></th>

        </table>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>Điểm Toán</th>
                <th>Điểm Lý</th>
                <th>Điểm Hóa</th>
                <th>Xóa</th>
                <th>Sửa</th>
              </tr>
            </thead>
            <tbody>
            <?php $stt = 0 ?>
              @foreach($hocsinh as $hs)
                <tr>
                <?php $stt = $stt + 1 ?>
                  <th scope="row">{{$stt}}</th>
                  <td>{{$hs->hoten}}</td>
                  <td>{{$hs->toan}}</td>
                  <td>{{$hs->ly}}</td>
                  <td>{{$hs->hoa}}</td>
                  <!--  -->
                  <th><a class="btn btn-primary" href="{!! route('hocsinh.edit',$hs->id) !!}">Sửa</a></th>
                  <th>
                  {!! Form::open(array('route'=>array('hocsinh.destroy',$hs->id),'method'=>'DELETE')) !!}
                      <button  onclick="return xacnhanxoa('Chú chắc muốn xoá chưa?')" type="submit" id="delete" class="btn btn-link">Xóa</button>
                    {!! Form::close() !!}
                  </th>
                </tr>
               @endforeach 
            </tbody>
          </table>
            
          <table>

          </table>
          <hr>
          
        </div>
      </div>

    </div>
   
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>