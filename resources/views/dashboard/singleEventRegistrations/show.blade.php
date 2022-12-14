@extends('layouts.app-dash')

@section('content')
<!--begin::Content wrapper-->

<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            @if(session('message'))
                @include('alerts.success-messages')
            @endif
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->

                <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                    <!--begin::Form-->
                        <!--begin::Customer-->
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bold">Dados pessoas</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">

                                <!--begin::Selected customer-->
                                <div class="d-flex align-items-center p-3 mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-60px symbol-circle me-3">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <!--begin::Email-->
                                        <a href="#" class="fw-semibold text-gray-600 text-hover-primary"><b>Nome : </b>{{ $singleEventRegistration->full_name ?? ''}}</a>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Selected customer-->

                                <!--end::Customer add buttons-->
                                <!--begin::Customer change button-->
                                @if(!$singleEventRegistration->payment_state)
                                    <div class="mb-10">
                                        <a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Aprovar Singular</a>
                                    </div>
                                @else
                                    <div class="mb-10">
                                        <span class="badge badge-success">Pagamento aprovado</span>
                                    </div>
                                @endif

                                <!--end::Customer change button-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">Expectativas para este evento.</h4>
                                            <div class="fs-6 text-white">
                                                {{ $singleEventRegistration->expectations ?? ''}}
                                             </div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer-->

                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                    <!--begin::Card-->
                    <div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                        <div class="card-body pt-0 fs-6">
                            <!--end::Section-->
                            <!--begin::Seperator-->
                            <div class="separator separator-dashed mb-7"></div>
                            <!--end::Seperator-->
                            <!--begin::Section-->
                            <div class="mb-7">
                                <!--begin::Title-->
                                <h5 class="mb-3"> Comprovativo de pagamento </h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">Comprovativo :</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->

                                    <span class="fw-semibold text-gray-600">
                                       <a href="{{ asset('comprovations/'.$singleEventRegistration->image_comprovation ?? 'Item_sem_imagem.png') }}">
                                         <img alt="Comprovativo" src="{{ asset('comprovations/'.$singleEventRegistration->image_comprovation ?? 'Item_sem_imagem.png') }}"
                                              width=150" height="70">
                                      </a></span>
                                    <!--end::Price-->
                                    <div class="separator separator-dashed mb-7"></div>
                                </div>
                                <h5 class="mb-3"> Contactos da Singular </h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">E-mail :</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->
                                    <span class="fw-semibold text-gray-600">
                                        {{ $singleEventRegistration->email ?? ''}}</span>
                                    <!--end::Price-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">Telefone :</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->
                                    <span class="fw-semibold text-gray-600">
                                         {{ $singleEventRegistration->telefone ?? ''}}
                                    </span>
                                    <!--end::Price-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">Telefone com Whatsapp:</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->
                                    <span class="fw-semibold text-gray-600">
                                         {{ $singleEventRegistration->telefone_whatsapp ?? ''}}
                                    </span>
                                    <!--end::Price-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">Cargo:</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->
                                    <span class="fw-semibold text-gray-600">
                                         {{ $singleEventRegistration->role ?? '' }}
                                    </span>
                                    <!--end::Price-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">Valor do pacote:</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->
                                    <span class="fw-semibold text-gray-600">
                                        {{ $singleEventRegistration->lot ?? '' }}
                                    </span>
                                    <!--end::Price-->
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::Section-->

                            <!--begin::Seperator-->
                            <div class="separator separator-dashed mb-7"></div>

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
            <!--begin::Modals-->
            <!--begin::Modal - Users Search-->
            <div class="modal fade" id="kt_modal_customer_search" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <!--begin::Content-->
                            <div class="text-center mb-12">
                                <h1 class="fw-bold mb-3">Alterar estado do pagamento</h1>
                                <div class="text-gray-400 fw-semibold fs-5">confirme se o singular fez o pagamento</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Search-->
                            <div id="kt_modal_customer_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                                <!--begin::Form-->
                                <center>
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off"
                                          action="{{ route('approve.single',$singleEventRegistration->id ?? '') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="toSend" value="1">
                                        <div class="mb-10 align-content-center">

                                            <button class="btn btn-light-primary">Aprovar Singular</button>
                                        </div>
                                    </form>
                                </center>
                                <!--end::Form-->

                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Users Search-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection
