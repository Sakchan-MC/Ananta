@extends('admin/layouts/app')
@section('content')

<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <form action="{{route('create')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>

        <div class="row table-margin table-responsive ">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ลำดับที่</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col" class="text-center">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $categories)
                    <tr>
                        <th scope="row">{{$categories->id }}</th>
                        <td>{{$categories->name}}</td>
                        <td>
                            <a href="{{url('/admin/category/edit/'.$categories->category_id)}}"
                                class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection