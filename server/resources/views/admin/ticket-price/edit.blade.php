@extends('layouts.admin-layout')

@section('admin-content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="h6 text-uppercase mb-0">Điều chỉnh giá vé</h3>
                        </div>
                        <div class="card-body">

                            <form method="POST" class="form-horizontal" action="">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Định dạng phim</label>
                                    <div class="col-md-9">
                                        <input id="inputHorizontalSuccess" value="{{$price->format->format_name}}" disabled type="text" placeholder="Tiêu đề" class="form-control form-control-success">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Giá ngày thường</label>
                                    <div class="col-md-9">
                                        <input id="inputHorizontalSuccess" value="{{$price->normal_price}}" name="normal_price" type="number" placeholder="Tiêu đề" class="form-control form-control-success">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">MemberShip</label>
                                    <div class="col-md-9">
                                        <input id="inputHorizontalSuccess" value="{{$price->member_price}}" name="member_price" type="number" placeholder="Tiêu đề" class="form-control form-control-success">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Giá cuối tuần</label>
                                    <div class="col-md-9">
                                        <input id="inputHorizontalSuccess" value="{{$price->weekend_price}}" name="weekend_price" type="number" placeholder="Tiêu đề" class="form-control form-control-success">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Giá ngày lễ</label>
                                    <div class="col-md-9">
                                        <input id="inputHorizontalSuccess" value="{{$price->holiday_price}}" name="holiday_price" type="number" placeholder="Tiêu đề" class="form-control form-control-success">
                                    </div>
                                </div>

                                

                    
                                <div class="form-group row">
                                    <div class="col-md-9 m-auto">
                                        <input type="submit" value="Chỉnh sửa" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection