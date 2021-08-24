@extends('admin/layouts.app')

@section('content')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">จัดการข้อมูล</h1>
                        <span class="h2 font-weight-bold mb-0">จำนวนชื่อผู้ใช้ : {{App\User::count()}}
                            <br>
                            <span class="h2 font-weight-bold mb-0">สมุนไพรที่มี : {{App\User::count()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')