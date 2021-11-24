@extends('admin/layouts/app')
@section('content')

<div class=" wrapper">
    <div class="table-responsive content-wrapper  table-margin">
        <h2>แก้ไขข้อมูล</h2>
        <form action="{{ route('update', $herb) }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$herb->name}}">
            </div>
            <div class="form-group">
                <label for="name">สรรพคุณ</label>
                <input type="text" class="form-control" id="detail" name="detail" value="{{$herb->description}}">
            </div>
            <div class="form-group">
                <img id="preview-image-before-upload" src="{{ asset('admin/images/herbs/' . $herb->image) }}"
                    alt="preview image" style="width:10vw;height:100%">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
