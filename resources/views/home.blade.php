@extends('layouts.app-dash')

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row g-5 g-xxl-10">
                    <!--begin::Col-->
                    <div class="col-xl-7 col-xxl-8 mb-5 mb-xxl-10">
                        <!--begin::Card widget 4-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">

                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $count ?? ''}}</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
                                            <!--end::Svg Icon-->{{ $count/100 ?? ''}}</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Empresas Registradas</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_4_chart" style="min-width: 125px; min-height: 125px" data-kt-size="125" data-kt-line="18"></div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center w-100">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Valor de Empresas Aprovadas</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $aprovadas ?? '' }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Valor de Empresas Pedentes</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $notAprovado ?? '' }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Total</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $aprovadasAndNotAprovado ?? '' }}</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 4-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-5 col-xxl-4 mb-xl-5 mb-xxl-10">
                        <!--begin::Engage widget 2-->
                        <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px h-xl-100 border-0 bg-gray-200" style="background-position: 100% 100%;background-size: 500px auto;">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column justify-content-center align-items-start ps-lg-15">
                                <!--begin::Title-->
                                <h3 class="text-gray-800 d-flex fs-2qx fw-bolder mb-4 mb-lg-8">Ver a lista de empresas
                                    <br />Registradas</h3>
                                <!--end::Title-->
                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href='{{ route('eventRegistration.index') }}' class="btn btn-danger fw-semibold" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Lista</a>
                                </div>
                                <!--begin::Action-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 2-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
