@extends('admin/layouts.app')
@section('content')
<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="row justify-content-end table-margin">
                <a href="{{route('create')}}" class="btn btn-primary ">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="row table-margin table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">รูป</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">สรรพคุณ</th>
                        <th scope="col" class="text-center">แก้ไข</th>
                        <th scope="col" class="text-center">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="{{ asset('img/tippy.jpg') }}"></td>
                        <td>ว่านหางจระเข้</td>
                        <td>ไม้ล้มลุกใบใหญ่หนาที่ทุกคนรู้จักกันดี
                            แม้ถิ่นกำเนิดจะอยู่ไกลถึงฝั่งเมดิเตอร์ เรเนียน และแอฟริกา
                            แต่ในประเทศไทยก็มีการปลูกว่านหางจระเข้อย่างแพร่หลาย
                            ซึ่งในตำรับยาไทยก็ใช้ว่านหางจระเข้บำบัดอาการต่าง ๆ ได้มากมาย
                            จนเป็นที่รู้จักว่า เป็นพืชอัศจรรย์ที่มีสรรพคุณสารพัดประโยชน์ โดย “วุ้นในใบสด”
                            สามารถนำมาบรรเทาอาการปวดศีรษะได้</td>
                        <td class="text-center">
                            <a href="/admin/edit" class="btn btn-success">Edit</a>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>












@endsection