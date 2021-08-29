@extends('admin.layouts.app')
@section('content')

<div class=" wrapper container-fluid">
    <div class="table-responsive content-wrapper table-margin ">
        <h2>จัดการเนื้อหา</h2>
        <form action="{{route('create')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">หัวข้อ</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">เนื้อหา</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" id="detail" name="detail"
                    rows="10"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">เพิ่มข้อมูล</button>
        </form>

        <div class="row mt-4 d-flex">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col-1">ลำดับ</th>
                        <th scope="col" class="col-2">ชื่อ</th>
                        <th scope="col" class="col-3">เนื้อหา</th>
                        <th scope="col" class="col-3">การกระทำ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $content)
                    <tr>
                        <th scope="row" class="col-1">{{$content->id }}</th>
                        <td class="col-2">{{$content->name}}</td>
                        <td class="col-3">{{$content->detail}}</td>
                        <td class="col-3">
                            <a href="{{url('/admin/content/edit/'.$content->id)}}" class="btn btn-success">แก้ไข</a>
                            <a href="{{url('/admin/content/delete/'.$content->id)}}" class="btn btn-danger">ลบ</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection