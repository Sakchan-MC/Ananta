@extends('admin.layouts.app')
@section('content')

<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="d-flex justify-content-between pl-3 pr-4">
                <h1>จัดการเนื้อหาหน้าแรก</h1>

                <a href="{{route('add-background')}}" class="btn btn-primary ">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="row pl-4 pr-4 d-flex table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col-md-2"></th>
                        <th scope="col" class="col-md-2">สถานะ</th>
                        <th scope="col" class="col-md-2">การกระทำ</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($background as $background)
                    <tr>

                        <td class="col-md-3"><img src="{{ asset('admin/images/backgrounds/' . $background->image) }}"
                                class="background-img" />
                        </td>
                        <td class="col-2">
                            @if($background->status==0) ปิด
                            @else เปิด
                            @endif</td>
                        <td class="col-3">
                            <a href="{{url('/admin/backgrounds/edit/'.$background->id)}}"
                                class="btn btn-success">แก้ไข</a>
                            <a href="{{url('/admin/backgrounds/delete/'.$background->id)}}"
                                class="btn btn-danger">ลบ</a>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
