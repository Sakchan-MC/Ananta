@extends('admin/layouts.app')
@section('content')
<div class="wrapper container-fluid">
    <div class="content-wrapper  table-margin">
        <h1 class="text-center">เพิ่มข้อมูล</h1>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="ว่านหางจระเข้">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">สรรพคุณ</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="name">รูปภาพ</label>
                <br>
                <input type="file" id="img" name="filename">
            </div>
            <button type="submit" name="submit" class="btn btn-success">เพิ่ม</button>

        </form>
    </div>
</div>












@endsection