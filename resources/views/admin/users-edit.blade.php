@extends('layout.admin')

@section('content')

<div class="font-samim main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">ویرایش کردن کاربر</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">ویرایش کاربر</li>
                <li class="breadcrumb-item"><a href="{{ route('users-list') }}">خانه</a></li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('users-update') }}" method="post" >
                    @csrf
                    <div class="card-header">
                        <div class="card-title">کاربر را ویرایش کنید</div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <label class="col-md-3 form-label">اسم :</label>
                            <div class="col-md-9">
                                @error('name')
                                <span class="text-danger">! اسم نمیتواند خالی باشد</span>
                                @enderror
                                <input name="name" type="text" class="form-control" value="{{ $user->name }}">
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">ایمیل :</label>
                            <div class="col-md-9">
                                @error('email')
                                <span class="text-danger">! ایمیل نمیتواند خالی و تکراری باشد</span>
                                @enderror
                                <input name="email" type="text" class="form-control" value="{{ $user->email }}">
                            </div>
                        </div>
                        <!--End Row-->
                        <!-- Row -->
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">شماره تماس :</label>
                            <div class="col-md-9">
                                @error('phone')
                                <span class="text-danger">! شماره اشتباه</span>
                                @enderror
                                <input name="phone" type="number" class="form-control" value="{{ $user->phone }}">
                            </div>
                        </div>
                        <!--End Row-->
                    </div>
                    <div class="card-footer">
                        <!--Row-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">ویرایش کاربر</button>
                                <a href="{{ route('users-list') }}" class="btn btn-default float-end">بازگشت</a>
                            </div>
                        </div>
                        <!--End Row-->
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /ROW-1 CLOSED -->
</div>

@endsection
