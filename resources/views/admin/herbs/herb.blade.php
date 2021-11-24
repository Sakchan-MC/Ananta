@extends('admin/layouts.app')
@section('content')
<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="row justify-content-end table-margin">
                <a href="{{route('add-herb')}}" class="btn btn-primary ">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="row mt-4 d-flex">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col-1">ลำดับ</th>
                        <th scope="col" class="col-2">ชื่อ</th>
                        <th scope="col" class="col-3">สรรพคุณ</th>
                        <th scope="col" class="col-3">รูปภาพ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($herb as $herb)
                    <tr>
                        <th scope="row" class="col-1">{{$herb->id }}</th>
                        <td class="col-2">{{$herb->name}}</td>
                        <td class="col-3">{{$herb->description}}</td>
                        <td class="col-3"><img src="{{ asset('admin/images/herbs/' . $herb->image) }}" /></td>
                        <td class="col-3">
                            <a href="{{url('/admin/herbs/edit/'.$herb->id)}}" class="btn btn-success">แก้ไข</a>
                            <a href="{{url('/admin/herbs/delete/'.$herb->id)}}" class="btn btn-danger">ลบ</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>












@endsection
