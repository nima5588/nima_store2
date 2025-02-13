@extends('layout.admin')

@section('content')

<div class="font-samim main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">ویرایش کردن دسته بندی</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">ویرایش دسته بندی</li>
                <li class="breadcrumb-item"><a href="{{ route('category-list') }}">خانه</a></li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('category-update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <div class="card-title">دسته بندی را ویرایش کنید</div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <label class="col-md-3 form-label">اسم دسته بندی :</label>
                            <div class="col-md-9">
                                @error('name')
                                <span class="text-danger">! اسم نمیتواند خالی و تکراری باشد</span>
                                @enderror
                                <input name="name" type="text" class="form-control" value="{{ $category->name }}">
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row">
                            <label class="col-md-3 form-label mb-4">توضیحات دسته بندی :</label>
                            <div class="col-md-9 mb-4">
                                @error('description')
                                <span class="text-danger">سقف مجاز 500 کاراکتر است</span>
                                @enderror
                                <textarea name="description" class="content" name="example">{!! $category->description !!}</textarea>
                            </div>
                        </div>
                        <!--End Row-->

                        <!--Row-->
                        <div class="row">
                            <label class="col-md-3 form-label mb-4">عکس دسته بندی :</label>
                            <div class="col-md-9">
                                <div class="ff_fileupload_wrap">
                                    <div class="ff_fileupload_dropzone_wrap">
                                        <input name="image" id="image" class="ff_fileupload_dropzone" type="file" aria-label="Browse, drag-and-drop, or paste files to upload">
                                        @error('image')
                                        <span class="text-danger">(png-jpg-webp پسوند های مجاز) عکس خالیست</span>
                                        @enderror
                                    </div>
                                    <img src="{{ asset('img/'.$category->image) }}" width="100" alt="">
                                </div>
                            </div>
                        </div>
                        <!--End Row-->
                    </div>
                    <div class="card-footer">
                        <!--Row-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">ویرایش دسته بندی</button>
                                <a href="{{ route('category-list') }}" class="btn btn-default float-end">بازگشت</a>
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