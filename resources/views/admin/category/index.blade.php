@extends('admin.layouts.app')
@section('content')

<div class=" wrapper ">
    <div class="table-responsive content-wrapper table-margin ">
        <h2>จัดการเนื้อหา</h2>
        <form action="{{route('create')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="หัวข้อ">
            </div>
            <div class="form-group">
                <label for="name">เนื้อหา</label>
                <input type="text" class="form-control" id="detail" name="detail" placeholder="หัวข้อ">
            </div>
            <button type="submit" name="submit" class="btn btn-success">เพิ่มข้อมูล</button>
        </form>

        <div class="row mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">เนื้อหา</th>
                        <th scope="col">สร้าง</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">การกระทำ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $categories)
                    <tr>
                        <th scope="row">{{$categories->id }}</th>
                        <td>{{$categories->name}}</td>
                        <td>{{$categories->detail}}</td>
                        <td>{{$categories->created_at}}</td>
                        <td>{{$categories->updated_at}}</td>
                        <td>
                            <a href="{{url('/admin/content/edit/'.$categories->id)}}" class="btn btn-success">แก้ไข</a>
                            <a href="{{url('/admin/content/delete/'.$categories->id)}}" class="btn btn-danger">ลบ</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection