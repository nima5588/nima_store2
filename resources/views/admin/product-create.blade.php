@extends('layout.admin')

@section('content')

<div class="main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">اضافه کردن محصول</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">ایجاد محصول</li>
                <li class="breadcrumb-item"><a href="{{ route('product-list') }}">خانه</a></li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('product-insert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <div class="card-title">محصول جدید اضافه کنید</div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">اسم محصول :</label>
                            <div class="col-md-9">
                                @error('name')
                                <span class="text-danger">اسم نمیتواند خالی و تکراری باشد</span>
                                @enderror
                                <input name="name" type="text" class="form-control" placeholder="اسم محصول را وارد کنید">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">قیمت :</label>
                            <div class="col-md-9">
                                @error('price')
                                <span class="text-danger">قیمت نمیتواند خالی و به حروف باشد</span>
                                @enderror
                                <input name="price" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">دسته بندی :</label>
                            <div class="col-md-9">
                                <select name="category" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    
                            </select>
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row">
                            <label class="col-md-3 form-label mb-4">توضیحات محصول :</label>
                            <div class="col-md-9 mb-4">
                                <textarea name="description" class="content" name="example"></textarea>
                            </div>
                        </div>
                        <!--End Row-->

                        <div class="col-xl-5 px-4 px-xl-2">
                            <div class="form-group">
                                <label for="slide" class="custom-switch form-switch mb-0">
                                    <input type="checkbox" id="slide" name="is_slide" value="1" class="custom-switch-input">
                                    <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                    <span class="custom-switch-description">توی اسلاید نمایش داده بشه؟</span>
                                </label>
                            </div>
                        </div>

                        <!--Row-->
                        <div class="row">
                            <label class="col-md-3 form-label mb-4">عکس محصول :</label>
                            <div class="col-md-9">
                                <div class="ff_fileupload_wrap">
                                    <div class="ff_fileupload_dropzone_wrap">
                                        <input name="image" id="image" class="ff_fileupload_dropzone" type="file" aria-label="Browse, drag-and-drop, or paste files to upload">
                                        @error('image')
                                        <span class="text-danger">(png-jpg-webp پسوند های مجاز) عکس خالیست</span>
                                        @enderror
                                    </div>
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
                                <button type="submit" class="btn btn-primary">محصول را اضافه کنید</button>
                                <a href="{{ route('product-list') }}" class="btn btn-default float-end">دور انداختن</a>
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