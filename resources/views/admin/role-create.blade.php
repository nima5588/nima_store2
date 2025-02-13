@extends('layout.admin')

@section('content')

<div class="font-samim main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">به کاربر دسترسی بدید</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">نقش کاربر</li>
                <li class="breadcrumb-item"><a href="{{ route('role-list') }}">خانه</a></li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{route('role-insert')}}" method="post" >
                    @csrf
                    <div class="card-header">
                        <div class="card-title">دسترسی به کاربر</div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">شناسه :</label>
                            <div class="col-md-9">
                                <select name="id" id="id" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->id }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">نقش ها :</label>
                            <div class="col-md-9">
                                <select name="role"  class="form-control form-select select2" data-bs-placeholder="Select Country">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <!--End Row-->
                        <div class="row">
                            <div style="margin-right: 25%" class="col-sm-6 col-md-6 col-xl-3">
                                <a class="modal-effect btn btn-info-light d-grid mb-3" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemo8">راهنما</a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xl-3">
                                <a class="modal-effect btn btn-success-light d-grid mb-3" data-bs-effect="effect-sign" data-bs-toggle="modal" href="#modaldemo9">دسترسی ها</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!--Row-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">اضافه کردن نقش به کاربر</button>
                                <a href="{{ route('role-list') }}" class="btn btn-default float-end">بازگشت</a>
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

    <!-- MODAL EFFECTS -->
    <div class="font-samim modal fade" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">درباره دسترسی</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h6>نقش ادمین یا مدیر در سیستم های مختلف</h6>
                    <p>به معنای دسترسی و اخیارات خاصی است که به یک کاربر داده میشود تا بتواند وظایف مدیریتی و نظارتی را انجام دهد</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="font-samim modal fade" id="modaldemo9" tabindex="-1" role="dialog">
        <div style="margin-top: 10%" class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">دسترسی ها</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="card-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default active">
                            <div class="panel-heading " role="tab" id="headingOne1">
                                <h4 class="font-parastoo panel-title">
                                    <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        super-admin
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="panel-body">
                                    کاربر میتواند به تمامی بخش پنل ادمین دسترسی داشته باشد
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mt-2">
                            <div class="panel-heading" role="tab" id="headingTwo2">
                                <h4 class="font-parastoo panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        admin-product
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                <div class="panel-body">
                                    کاربر فقط میتواند به بخش محصولات دسترسی داشته باشد
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mt-2">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="font-parastoo panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        admin-category
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    کاربر فقط میتواند به بخش محصولات دسترسی داشته باشد
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PANEL-GROUP -->
                </div>

                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>

@endsection
