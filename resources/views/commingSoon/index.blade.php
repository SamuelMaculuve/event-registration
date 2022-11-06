<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
    <link href="{{ asset('comming/common-css/ionicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('comming/common-css/jquery.classycountdown.css') }}" />
    <link href="{{ asset('comming/04-comming-soon/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('comming/04-comming-soon/css/responsive.css') }}" rel="stylesheet">

</head>
<body>

<div class="main-area">

    <section class="left-section" style="background-image: url(comming/images/countdown-4-1000x1000.jpg)">
    </section><!-- left-section -->
    <section class="right-section full-height">

        <a class="logo" href="#"><img style="height: 80px;"
                src="{{ asset('comming/images/logo-white.png') }}" alt="Logo"></a>

        <div class="display-table">
            <div class="display-table-cell">
                <div class="main-content">
                    <h1 class="title"><b>2ª EDIÇÃO BUSINESS PITCH- B2B MAPUTO</b></h1>
                    <p class="desc" style="padding-top: 7px;padding-bottom: 7px;">O pitch é uma apresentação sumária de 3 a 5 minutos com objectivo de despertar o interesse
                        da outra parte (cliente/parceiro) pelo seu negócio. Assim, deve conter apenas as informações
                        essenciais e diferenciadas.</p>

                    <a href="/registration" class="submit-btn">Inscrever-se</a>
                </div><!-- main-content -->
            </div><!-- display-table-cell -->
        </div><!-- display-table -->

        <ul class="footer-icons">
            <li>Sigam-nos  : </li>
            <li><a href="#" ><i class="ion-social-facebook"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
        </ul>
    </section><!-- right-section -->
</div><!-- main-area -->

<!-- SCIPTS -->
<script src="{{ asset('comming/common-js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('comming/common-js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('comming/common-js/scripts.js') }}"></script>

</body>
</html>
