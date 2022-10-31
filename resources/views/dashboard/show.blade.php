@extends('layouts.app-dash')

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_subscriptions_create_new">
                            <!--begin::Customer-->
                            <div class="card card-flush pt-3 mb-5 mb-lg-10">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Detalhes da Empresa</h2>
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
                                            <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">{{ $eventRegistration->company_name }}</a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <a href="#" class="fw-semibold text-gray-600 text-hover-primary"><b>Tipo de empresa : </b>{{ $eventRegistration->company_type }}</a>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Selected customer-->
                                    <!--begin::Customer add buttons-->
                                    <div class="mb-7 d-none">
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Select Customer</a>
                                        <span class="fw-bold text-gray-500 mx-2">or</span>
                                        <a href="../customers/list.html" class="btn btn-light-primary">Add New Customer</a>
                                    </div>
                                    <!--end::Customer add buttons-->
                                    <!--begin::Customer change button-->
                                    <div class="mb-10">
                                        <a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Aprovar Empresa</a>
                                    </div>
                                    <!--end::Customer change button-->
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Expectativas para este evento.</h4>
                                                <div class="fs-6 text-white">
                                                    {{ $eventRegistration->expectations }}
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
                            <!--begin::Pricing-->
                            <div class="card card-flush pt-3 mb-5 mb-lg-10">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Redes sociais</h2>
                                    </div>
                                    <!--begin::Card title-->

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 fw-semibold gy-4" id="kt_subscription_products_table">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-300px">Rede</th>
                                                <th class="min-w-100px">Link</th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="text-gray-600">
                                            <tr>
                                                <td>Instagram</td>
                                                <td >
                                                    <!--begin::Delete-->
                                                    <a href="{{ $eventRegistration->socialnetworks->social_instagram }}" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Delete-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Facebook</td>
                                                <td >
                                                    <!--begin::Delete-->
                                                    <a href="{{ $eventRegistration->socialnetworks->social_facebook }}" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Delete-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Linkedin</td>
                                                <td >
                                                    <!--begin::Delete-->
                                                    <a href="{{ $eventRegistration->socialnetworks->social_linkedin }}" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Delete-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Website</td>
                                                <td >
                                                    <!--begin::Delete-->
                                                    <a href="{{ $eventRegistration->socialnetworks->social_website }}" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Delete-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tik Tok</td>
                                                <td >
                                                    <!--begin::Delete-->
                                                    <a href="{{ $eventRegistration->socialnetworks->social_tiktik }}" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Delete-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Outra</td>
                                                <td >
                                                    <!--begin::Delete-->
                                                    <a href="{{ $eventRegistration->socialnetworks->social_outra }}" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Delete-->
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Pricing-->

                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                        <!--begin::Card-->
                        <div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
{{--                            <!--begin::Card header-->--}}
{{--                            <div class="card-header">--}}
{{--                                <!--begin::Card title-->--}}
{{--                                <div class="card-title">--}}
{{--                                    <h2> Contactos da Empresa </h2>--}}
{{--                                </div>--}}
{{--                                <!--end::Card title-->--}}
{{--                            </div>--}}
{{--                            <!--end::Card header-->--}}
                            <!--begin::Card body-->
                            <div class="card-body pt-0 fs-6">
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <div class="separator separator-dashed mb-7"></div>
                                    <!--begin::Title-->
                                    <h5 class="mb-3">Pagamento</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <span class="badge badge-light-success">Active</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Title-->
                                    <h5 class="mb-3">Detalhes do estado</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <span class="badge badge-light-success">Active</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Title-->
                                    <h5 class="mb-3"> Contactos da Empresa </h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">E-mail</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                            {{ $eventRegistration->eventcompany->c_email }}</span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Cell :</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                             {{ $eventRegistration->eventcompany->c_cell }}
                                        </span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Telefone:</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                             {{ $eventRegistration->eventcompany->c_telefone }}
                                        </span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Nuit:</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                             {{ $eventRegistration->eventcompany->c_contact_nuit }}
                                        </span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Logotipo:</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">

                                        </span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-3">Detalhes do Representante</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Nome :</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                            {{ $eventRegistration->eventrepresentative->full_name }}</span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Cargo/Função :</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                            {{ $eventRegistration->eventrepresentative->role }}</span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">E-mail:</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                            {{ $eventRegistration->eventrepresentative->r_email }}
                                        </span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Cell:</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                            {{ $eventRegistration->eventrepresentative->r_cell }}
                                        </span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Whatsapp:</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">
                                            {{ $eventRegistration->eventrepresentative->r_whatsapp }}
                                        </span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::Section-->

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
                                    <div class="text-gray-400 fw-semibold fs-5">confirme se a Empresa fez o pagamento</div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Search-->
                                <div id="kt_modal_customer_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                                    <!--begin::Form-->
                                    <center>
                                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                            <div class="mb-10 align-content-center">
                                                <a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Aprovar Empresa</a>
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

                <!--begin::Modal - New Card-->
                <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Add New Card</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_new_card_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Name On Card</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="../../assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                <img src="../../assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                <img src="../../assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                        <option></option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                    <span class="svg-icon svg-icon-2hx">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-semibold text-muted">Save Card</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Card-->
                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
