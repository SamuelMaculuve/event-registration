<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>

<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
    <!--begin::Table head-->
    <thead>
    <!--begin::Table row-->
    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
        <th class="min-w-125px">Empresa</th>
        <th class="min-w-125px">Área de Actuação</th>
        <th class="min-w-125px">Estado</th>
        <th class="min-w-125px">Nome do representante</th>
    </tr>
    <!--end::Table row-->
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="text-gray-600 fw-semibold">
    <!--begin::Table row-->
    @foreach($registration as $eRegistion)
        <tr>
            <!--begin::User=-->
            <td class="d-flex align-items-center">
                {{ $eRegistion->company_name }}
            </td>
            <td class="d-flex align-items-center">
                {{$eRegistion->area_operation}}
            </td>
            <td>

            </td>
            <td> {{$eRegistion->eventrepresentative->full_name}}</td>

        </tr>
        <!--end::Table row-->
    @endforeach
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->
</body>
</html>
