<!DOCTYPE html>
<html>
<head>
    <title>Relatorio de empresas registradas</title>
</head>
<body>

<style>

    @page {
        margin: 0px;

    }

    .footer {
        position:absolute;
        bottom:0;
        width:100%;
        background-color: #053354;
        padding:10px;
    }

    .cabecalho {
        background-color: #053354;
        padding-top:15px;
        margin-bottom:30px;
    }

    .titulo{
        margin:0;
    }

    /* Zebra striping */
    tr:nth-of-type(odd) {
        /*background: #eee;*/
    }

    th {
        /*background: #3498db;*/
        /*color: white;*/
        font-weight: bold;
    }

    td, th {
        padding: 5px;
        border: 1px solid #ccc;
        text-align: left;
        font-size: 14px;
    }


</style>


<div class="cabecalho" style="padding: 30px ">
    <center>
        <div class="row">
            <div class="col-sm-4">
                <img src="comming/images/logo-white.png" width="100px">
            </div>
            <div class="col-sm-6">
                <h6 class="titulo" style="color: #FFFF;font-size: 14pt">Bairro da Sommershield,
                    Rua das Cronistas,
                    Nº 105 – Maputo, Moçambique</h6>
            </div>
        </div>
    </center>
</div>

<div class="container">

    <br><br>
    <center>
        <table style="margin-left: 260px;">
            <tr>
                <th class="min-w-125px">Empresa</th>
                <th class="min-w-125px">Área de Actuação</th>
                <th class="min-w-125px">Estado</th>
                <th class="min-w-125px">Nome do representante</th>
            </tr>
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
                        @if(!$eRegistion->payment_state)
                           Sem pagamento
                        @else
                            Pago
                        @endif
                    </td>
                    <td> {{$eRegistion->eventrepresentative->full_name}}</td>
                </tr>
                <!--end::Table row-->
            @endforeach

        </table>

    </center>




</div>


<div class="footer">
    <p style="font-size:12px;color: #FFF0ED;font-weight: bold;" align="center">Desenvolvido pela TECHSOLUTIONS,LDA</p>
</div>



</body>
</html>
