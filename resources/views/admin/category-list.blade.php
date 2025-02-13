@extends('layout.admin')

@section('search')

<form action="{{ route('category-search') }}" method="GET">
    <div class="main-header-center ms-3 d-none d-lg-block">
        <input type="text" name="q" class="font-samim form-control" placeholder="...جستجو برای نتایج">
        <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
    </div>
</form>

@endsection

@section('content')

<!-- CONTAINER -->
<div class="font-samim main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">لیست دسته بندی</h1>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card cart">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-6"></div>
                        <div class="col-md-6 col-sm-6 text-end"><a href="{{ route('category-create') }}" class="btn btn-success float-sm-end">دسته بندی جدید<i class="fa fa-arrow-left ms-1"></i></a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter">
                            <thead>
                                <tr class="border-top">
                                    <th>دسته بندی</th>
                                    <th>اسم</th>
                                    <th>توضیحات</th>
                                    <th>ابزار</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <div class="text-center">
                                            <img src="{{ asset('img/'.$category->image) }}" alt="" class="cart-img text-center">
                                        </div>
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>{!! $category->description !!}</td>
                                    <td>
                                        <div class=" d-flex g-2">
                                            <a type="button" href="{{ route('category-edit', ['id' => $category->id]) }}" class="btn btn-icon  btn-info-light me-2 bradius" data-bs-toggle="tooltip" data-bs-original-title="ویرایش"><i class="fe fe-edit"></i></a>
                                            <a type="button" href="{{ route('category-delete', ['id' => $category->id]) }}" class="btn btn-icon  btn-danger-light me-2 bradius" data-bs-toggle="tooltip" data-bs-original-title="حذف"><i class="fe fe-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- ROW-1 CLOSED -->
</div>
<!-- CONTAINER CLOSED -->

@endsection