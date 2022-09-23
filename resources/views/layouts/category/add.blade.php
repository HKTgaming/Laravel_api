@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục
                    <button class="btn bnt-primary"><a href="{{route('category.index')}}">Quay lại danh sách</a></button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-12" style="padding-left:250px">
                            <div class="panel panel-default" >
                                <div class="panel-body">
                                    <div class="col-md-9">
                                        <form action="{{route('category.store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Mã danh mục</label>
                                            <input required name="id" class="form-control" placeholder="Auto Number" readonly >
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Tên danh mục</label>
                                            <input required name="title_cate" class="form-control" placeholder="">
                                        </div>
                                        <br>           
                                        <div class="col-md-9">
                                            <button name="btn_insert" type="submit" class="btn btn-success">Thêm mới</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
