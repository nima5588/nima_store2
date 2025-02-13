@extends('layout.admin')

@section('search')

<form action="{{ route('invoice-search') }}" method="GET">
    <div class="main-header-center ms-3 d-none d-lg-block">
        <input type="text" name="q" class="font-samim form-control" placeholder="...جستجو بر اساس محصول">
        <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
    </div>
</form>

@endsection

@section('content')

<!-- CONTAINER -->
<div class="font-samim main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">جستجوی سفارشات</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('invoice-list') }}">بازگشت</a></li>
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
                                    <th>مشتری id</th>
                                    <th>ایمیل مشتری</th>
                                    <th>شماره تماس</th>
                                    <th>محصول</th>
                                    <th>تعداد</th>
                                    <th>تاریخ/ساعت</th>
                                    <th>وضعیت</th>
                                    <th>ابزار</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productbaskets as $productbasket)
                                <tr>
                                    <td>{{ $productbasket->user()->id }}</td>
                                    <td>{{ $productbasket->user()->email }}</td>
                                    <td>{{ $productbasket->user()->phone }}</td>
                                    <td>{{ $productbasket->product()->name }}</td>
                                    <td>{{ $productbasket->count }}</td>
                                    <td>{{ $productbasket->created_at }}</td>
                                    @if ($productbasket->is_paying == 1)
                                    <td style="color: #13bfa6">{{ "پرداخت موفق" }}</td>
                                    @else
                                    <td style="color: #ff0000">{{ "پرداخت نشده" }}</td>
                                    @endif
                                    <td>
                                        <div class=" d-flex g-2">
                                            <a type="button" href="{{ route('invoice-delete' , ['id' => $productbasket->id]) }}" class="btn btn-icon  btn-danger-light me-2 bradius" data-bs-toggle="tooltip" data-bs-original-title="حذف"><i class="fe fe-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (count($productbaskets) == 0)
                        <h2 style="color: #6c5ffc">هیچ سفارشی پیدا نشد</h2>
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