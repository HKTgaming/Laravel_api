@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn bnt-primary w-100 mb-2"><a href="{{route('category.create')}}">Thêm danh mục</a></button>
                    <button class="btn bnt-primary w-100 mb-2"><a href="{{route('category.index')}}">Danh sách danh mục</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
