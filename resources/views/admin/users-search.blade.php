@extends('layout.admin')

@section('search')

<form action="{{ route('users-search') }}" method="GET">
    <div class="main-header-center ms-3 d-none d-lg-block">
        <input type="text" name="q" class="font-samim form-control" placeholder="...جستجو بر اساس شناسه">
        <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
    </div>
</form>

@endsection

@section('content')

<!-- CONTAINER -->
<div class="font-samim main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">جستجوی کاربران</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('users-list') }}">بازگشت</a></li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card cart">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter">
                            <thead>
                                <tr class="border-top">
                                    <th>(id) شناسه</th>
                                    <th>اسم</th>
                                    <th>ایمیل</th>
                                    <th>شماره تماس</th>
                                    <th>تاریخ ثبت نام</th>
                                    <th>تاریخ آخرین ویرایش</th>
                                    <th>ابزار</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <div class=" d-flex g-2">
                                            <a type="button" href="{{ route('users-edit' , ['id' => $user->id]) }}" class="btn btn-icon  btn-info-light me-2 bradius" data-bs-toggle="tooltip" data-bs-original-title="ویرایش"><i class="fe fe-edit"></i></a>
                                            <a type="button" href="{{ route('users-delete', ['id' => $user->id]) }}" class="btn btn-icon  btn-danger-light me-2 bradius" data-bs-toggle="tooltip" data-bs-original-title="حذف"><i class="fe fe-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (count($users) == 0)
                        <h2 style="color: #6c5ffc">هیچ کاربری پیدا نشد</h2>
                        @endif
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- ROW-1 CLOSED -->
</div>
<!-- CONTAINER CLOSED -->
@endsection