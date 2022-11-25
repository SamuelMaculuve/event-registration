@extends('layouts.app-dash')
@section('content')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--end::Content wrapper-->
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Conta</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--begin::Card title-->

                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <div class="container">
                        <form method="post" action="{{ route('my_account.change_pass') }}">
                            @csrf @method('put')

                            <div class="form-group row">
                                <label for="current_password" class="col-lg-3 col-form-label font-weight-semibold">Senha atual <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input id="current_password" name="current_password"  required type="password" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-lg-3 col-form-label font-weight-semibold">Nova Senha <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input id="password" name="password"  required type="password" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password_confirmation" class="col-lg-3 col-form-label font-weight-semibold">Confirme a Senha <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input id="password_confirmation" name="password_confirmation"  required type="password" class="form-control" >
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-danger">Submeter form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection
