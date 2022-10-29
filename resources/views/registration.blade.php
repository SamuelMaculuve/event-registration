<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Maculuve">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('src_1/css/style.css') }}">
</head>
<body>
<div class="wrapper">
    <form action="{{ route('eventRegistration.store') }}" id="wizard" method="POST" class="form-imput-label">
        @csrf
        <!-- SECTION 1 -->
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('src_1/images/form-wizard-1.jpg') }}" alt="">
                </div>
                <div class="form-content" >
                    <div class="form-header">
                        <h3>Informacao da empresa</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Nome da Empresa"
                                   class="form-control" name="company_name">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Área de Actuação/Actividade"
                                   class="form-control" name="area_operation">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Nuit"
                                   class="form-control" name="nuit">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Tipo de empresa"
                                   class="form-control" name="company_type">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Província"
                                   class="form-control" name="province">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Localização"
                                   class="form-control" name="location">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Tempo de Actuação no mercado"
                                   class="form-control" name="action_time_market">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Tipo de empresa"
                                   class="form-control" name="company_type">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2 -->
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('src_1/images/form-wizard-2.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Caso a empresa use plataformas de divulgação on-line queira por favor queira indicar</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-holder">
                            <input name="social_instagram" type="text" placeholder="Instagram"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="social_facebook" type="text" placeholder="Facebook"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="social_linkedin" type="text" placeholder="Linkedin"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="social_website" type="text" placeholder="Website"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-holder">
                            <input name="social_tiktik" type="text" placeholder="Tik Tok"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="social_outra" type="text" placeholder="Outra"
                                   class="form-control">
                        </div>

                    </div>

{{--                    <div class="form-row">--}}
{{--                        <div class="select">--}}
{{--                            <div class="form-holder">--}}
{{--                                <div class="select-control">Your country</div>--}}
{{--                                <i class="zmdi zmdi-caret-down"></i>--}}
{{--                            </div>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li rel="United States">United States</li>--}}
{{--                                <li rel="United Kingdom">United Kingdom</li>--}}
{{--                                <li rel="Viet Nam">Viet Nam</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="form-holder"></div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('src_1/images/form-wizard-2.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Contactos da Empresa</h3>
                    </div>


                    <div class="form-row">
                        <div class="form-holder">
                            <input name="social_instagram" type="text" placeholder="E-mail"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="social_facebook" type="text" placeholder="Cell"
                                   class="form-control">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-holder">
                            <input name="social_instagram" type="text" placeholder="Telefone"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="social_facebook" type="text" placeholder="Whatsapp"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="social_facebook" type="text" placeholder="Nuit"
                                   class="form-control">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 4 -->
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('src_1/images/form-wizard-2.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Detalhes do representante da empresa</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-holder">
                            <input name="full_name" type="text" placeholder="Nome completo "
                                   class="form-control">
                        </div>

                        <div class="form-holder">
                            <input name="role" type="text" placeholder="Cargo/Função"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="r_email" type="text" placeholder="E-mail"
                                   class="form-control">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-holder">
                            <input name="r_cell" type="text" placeholder="Cell"
                                   class="form-control">
                        </div>
                        <div class="form-holder">
                            <input name="r_whatsapp" type="text" placeholder="Whatsapp"
                                   class="form-control">
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 5 -->
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('src_1/images/form-wizard-3.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Quais são as suas expectativas para este evento?</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-holder w-100">
                            <textarea name="expectations" id="" placeholder="Quais são as suas expectativas para este evento?" class="form-control" style="height: 99px;"></textarea>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 6 -->
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('src_1/images/form-wizard-3.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Queira por favor escolher o seu Lote?</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-holder w-100">
                            <textarea name="" id="" placeholder="Your messagere here!" class="form-control" style="height: 99px;"></textarea>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 7 -->
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('src_1/images/form-wizard-3.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Termos e condições do Business Picth PMEs-B2B 2022
                        </h3>
                    </div>

                    <main class="wrap">
                        <section class="container">
                            <div class="container__content">
                                <p>O evento de empreendedorismo foca na apresenta&ccedil;&atilde;o e divulga&ccedil;&atilde;o de produtos e servi&ccedil;os das PMEs e micro empreendedores , denominado &quot;&nbsp;Business Pitch&quot; &eacute; tutelado de forma exclusiva pela Believer Team Leader, Lda, empresa mo&ccedil;ambicana sediada na Cidade de Maputo.</p>
                                <p>A Believer Team Leader &eacute; propriet&aacute;ria de todos os direitos e autoriza&ccedil;&otilde;es necess&aacute;rias para a realiza&ccedil;&atilde;o do evento, portanto, ao adquirir o bilhete para a participa&ccedil;&atilde;o no evento, o participante concorda de forma integral, irrestrita e irrevog&aacute;vel, com os presentes Termos e Condi&ccedil;&otilde;es do Evento, regido pelas seguintes condi&ccedil;&otilde;es:</p>
                                <p>Cl&aacute;usula #1</p>
                                <p>Descri&ccedil;&atilde;o do Evento e formas de acesso</p>
                                <ol>
                                    <li>
                                        <p>O Business Pitch consiste em um evento de empreendedorismo para divulga&ccedil;&atilde;o de produtos e servi&ccedil;os das PMEs e projectos locais, composto por apresenta&ccedil;&otilde;es e exposi&ccedil;&otilde;es de forma totalmente presencial, com obejctivos de formar uma rede &uacute;nica de networking entre as PMEs e as Grandes empresas, bem como servir de elo para a divulga&ccedil;&atilde;o, venda, cria&ccedil;&atilde;o de parcerias inteligentes de neg&oacute;cios e investimento.</p>
                                    </li>
                                </ol>
                                <p>&nbsp;</p>
                                <ol start="2">
                                    <li>
                                        <p>A presente edi&ccedil;&atilde;o do evento ser&aacute; realizada apenas na modalidade presencial, com a possibilidade, a exclusivo crit&eacute;rio da Believer a oferta de conte&uacute;dos adicionais.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p>Cl&aacute;usula #2</p>
                                <p>Data e Local de Realiza&ccedil;&atilde;o do Evento</p>
                                <ol>
                                    <li>
                                        <p>O Evento ser&aacute; realizado no dia 24 de mar&ccedil;o (quinta&mdash;feira) de 2023, e ocorrer&aacute; no hotel Gl&oacute;ria na cidade de Maputo (sujeito a altera&ccedil;&otilde;es).&nbsp;</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p>Cl&aacute;usula #3</p>
                                <p>A quem se destina o evento</p>
                                <ol>
                                    <li>
                                        <p>O presente evento destina-se a qualquer pessoa interessada em assistir ou a dar a conhecer os seus produtos e servi&ccedil;os, os que desejam fazer netwoking, vender, estabelecer parcerias de neg&oacute;cio e os que desejam investir em PMEs e projectos de neg&oacute;cios.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <ol start="2">
                                    <li>
                                        <p>&nbsp; A classifica&ccedil;&atilde;o et&aacute;ria &eacute; livre, contudo, a participa&ccedil;&atilde;o de menores de 18 (dezoito) anos somente ser&aacute; permitida caso estes estejam devidamente acompanhados pelos pais ou respons&aacute;veis legais e apresentem o termo de responsabilidade do acompanhante assinado.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p><br></p>
                                <p>Cl&aacute;usula #4</p>
                                <p>Cronograma do evento</p>
                                <ol>
                                    <li>
                                        <p>O Cronograma do evento comtempla a ordem do dia e hor&aacute;rios de cada momento, esta sujeito a altera&ccedil;&otilde;es por diversos motivos alheios a esfera da responsabilidade da Believer Team Leader, que se compromete a manter o cronograma e informa&ccedil;&otilde;es do evento devidamente actualizados, portanto, o participante ser&aacute; &uacute;nica e exclusivamente respons&aacute;vel por acompanhar as eventuais actualiza&ccedil;&otilde;es do cronograma e demais informa&ccedil;&otilde;es sobre o evento.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p>Cl&aacute;usula #5</p>
                                <p>Bilhetes e formas de pagamento</p>
                                <ol>
                                    <li>
                                        <p>As vendas iniciais dos bilhetes do evento est&atilde;o divididas em lotes, nos quais ocorreram entre os dias 01/11/2022 a 15/03/2023. Os interessados podem fazer a sua inscri&ccedil;&atilde;o no website da Believer &ndash;&nbsp;<a href="http://www.believer.co.mz">www.believer.co.mz</a> ou manifestarem interesse atrav&eacute;s dos nossos contactos&nbsp;<a href="mailto:info@believer.co.mz">info@believer.co.mz</a> &ndash; 869750000</p>
                                    </li>
                                    <li>
                                        <p>Os Valores dos bilhetes correspondentes a cada uma das modalidades do evento, em cada lote ofertado ser&atilde;o divulgados no website da Believer Team Leader.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <ol start="3">
                                    <li>
                                        <p>A Believer esclarece que os valores dos bilhetes n&atilde;o esta inclu&iacute;do o imposto, portanto, o participante concorda que far&aacute; o pagamento do seu lote inclu&iacute;do o IVA que corresponde a 17%.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p><br></p>
                                <ol start="4">
                                    <li>
                                        <p>Em conformidade fiscal, a Believer emitira recibos para os participantes, sejam eles pessoas singulares ou colectivas. Apos efectuar a inscri&ccedil;&atilde;o receber&aacute; uma confirma&ccedil;&atilde;o autom&aacute;tica, e apos efectuar o pagamento recebera a confirma&ccedil;&atilde;o final e o &nbsp; n&uacute;mero da sua cadeira e bilhete.&nbsp;</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <ol start="5">
                                    <li>
                                        <p>O bilhete adquirido para o evento ser&aacute; valido para apenas uma pessoa, excepto para o primeiro lote que &eacute; valido para duas pessoas.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p><br></p>
                                <ol start="6">
                                    <li>
                                        <p>Em caso de efectuar o pagamento e n&atilde;o participar, o reembolso devera ser feito ate 7 (sete) dias contados da efectiva&ccedil;&atilde;o da compra, para bilhetes adquiridos pr&oacute;xima data do evento, o pedido de reembolso de ser feito ate 48 horas antes do evento.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <ol start="7">
                                    <li>
                                        <p>&nbsp;O participante reconhece e concorda que os bilhetes s&atilde;o pessoais e somente devem ser transferidos nos termos do item 5.8 abaixo, no caso de compras de bilhetes para grupos, o participante dever&aacute; entrar em contacto pelo e-mail&nbsp;<a href="mailto:info@believer.co.mz">info@believer.co.mz</a> e realizar a solicita&ccedil;&atilde;o, a qual ser&aacute; avaliada e concedida caso a caso.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p><br></p>
                                <ol start="8">
                                    <li>
                                        <p>O participante poder&aacute; trocar a titularidade do seu bilhete, bastando, para tal, que entre em contacto com o suporte enviando e-mail para&nbsp;<a href="mailto:info@believer.co.mz">info@believer.co.mz</a> com seus dados e da pessoa para quem o bilhete devera ser transferido, a solicita&ccedil;&atilde;o de transfer&ecirc;ncia s&oacute; poder&aacute; ocorrer ate 10 (dez) dias antes que a Believer realize todas as altera&ccedil;&otilde;es necess&aacute;rias.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p>Cl&aacute;usula #6</p>
                                <p>Apresenta&ccedil;&atilde;o dos participantes</p>
                                <p><br></p>
                                <ol>
                                    <li>
                                        <p>Os participantes concordam em estar trajados de forma casual ou formal, e apresentando-se de maneira que represente a sua empresa ou projecto, seja, com camisa, camiseta ou outro material que o identifique como algu&eacute;m que pertence a uma empresa. Os participantes tamb&eacute;m concordam em trazer os seus cart&otilde;es de visita ou outros instrumentos para a divulga&ccedil;&atilde;o e reconhecimento dos seus produtos e servi&ccedil;os.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <ol start="2">
                                    <li>
                                        <p>Os participantes que fizerem as apresenta&ccedil;&otilde;es (pitch), concordam que n&atilde;o passaram dos 4 minutos, sendo o tempo m&aacute;ximo de apresenta&ccedil;&atilde;o por empresa.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p><br></p>
                                <ol start="3">
                                    <li>
                                        <p>&nbsp;Os participantes receberam orienta&ccedil;&otilde;es de como conduzir uma apresenta&ccedil;&atilde;o para que estejam prontos e tenham sucesso.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p><br></p>
                                <p><br></p>
                                <p>Cl&aacute;usula #7</p>
                                <p>Kits, Brindes e Ac&ccedil;&otilde;es Eventuais</p>
                                <ol>
                                    <li>
                                        <p>&nbsp;A Believer Team Leader poder&aacute;, a seu exclusivo crit&eacute;rio e por mera liberdade, por si ou por terceiros conceder, a qualquer tempo, brindes, kits e/ou realizar ac&ccedil;&otilde;es promocionais eventuais antes e durante o Evento, os quais, caso venham a ser previamente informados e divulgados pela Believer, a exclusivo crit&eacute;rio desta.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <ol start="2">
                                    <li>
                                        <p>&nbsp;O participante reconhece e concorda que a concess&atilde;o de brindes e/ou kits, caso haja, poder&aacute; ser limitada a um n&uacute;mero determinado de participantes e/ou exclusiva a uma ou mais modalidades de bilhetes.&nbsp;</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p>Cl&aacute;usula #8</p>
                                <p>Propriedade Intelectual</p>
                                <ol>
                                    <li>
                                        <p>Por meio da aquisi&ccedil;&atilde;o de seu bilhete para o Evento e na melhor forma de direito, o participante concorda em ceder e transferir a Believer, com exclusividade, na integralidade e a titulo universal e gratuito, em caracter total, definitivo, irrevog&aacute;vel e irretrat&aacute;vel, para fins de utiliza&ccedil;&atilde;o a qualquer tempo, em Mo&ccedil;ambique e/ou no estrangeiro, os direitos de utiliza&ccedil;&atilde;o da sua imagem e voz, em qualquer formato em que se encontrem, tais como, mas sem se limitar a fotos, v&iacute;deos, depoimentos e documentos para a produ&ccedil;&atilde;o e realiza&ccedil;&atilde;o pela Believer, em qualquer formato conhecido ou que venha a ser inventado, com fins comerciais e/ou n&atilde;o.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <ol start="2">
                                    <li>
                                        <p>&nbsp;A Believer poder&aacute; realizar o tratamento de dados pessoais para alcan&ccedil;ar a finalidade prevista na cl&aacute;usula 8.1.</p>
                                    </li>
                                </ol>
                                <p>Cl&aacute;usula #9</p>
                                <p>Prote&ccedil;&atilde;o de dados</p>
                                <ol>
                                    <li>
                                        <p>A Believer poder&aacute; tratar dados pessoais para viabilizar a sua participa&ccedil;&atilde;o no evento, neste caso, os dados pessoais ser&atilde;o tratados pela Believer em aten&ccedil;&atilde;o as normas de prote&ccedil;&atilde;o de dados pessoais aplic&aacute;veis, observando-se todos os termos da Pol&iacute;tica de Privacidade.</p>
                                    </li>
                                </ol>
                                <p><br></p>
                                <p><br></p>
                                <p><br></p>
                                <p><br></p>
                                <p>Cl&aacute;usula #10</p>
                                <p>Disposi&ccedil;&otilde;es gerais</p>
                                <p>&nbsp;10.1.&nbsp;O participante concorda em observar integralmente todas as normas, regras e regulamentos internos editados pelo estabelecimento em que o Evento ser&aacute; realizado e/ou pela plataforma em que o evento ser&aacute; disponibilizado, bem como respeitar a leis nacionais, sob pena de n&atilde;o poder participar do evento, em nenhuma de suas modalidades.</p>
                                <p><br></p>
                                <p>10.2. N&atilde;o ser&aacute; permitido o porte, uso e consumo de subst&acirc;ncias il&iacute;citas, armas brancas ou de fogo no evento, estando vedado tamb&eacute;m o consumo de bebidas alco&oacute;licas, exceto as eventualmente fornecidas pela organiza&ccedil;&atilde;o do evento aos participantes maiores de 18 (dezoito) anos.</p>
                                <p><br></p>
                                <p>10.3. &nbsp;A Believer dispensara tratamento adequado a todos os participantes do Evento, deste mesmo modo, o participante devera tratar com civilidade e urbanidade todos os participantes, painelistas, convidados, funcion&aacute;rios e/ou trabalhadores presentes no Evento, terceirizados ou n&atilde;o, sob pena de ser retirado deste.</p>
                                <p><br></p>
                                <p>10.4. Em que pese o profundo respeito a todos os posicionamentos pol&iacute;ticos e religiosos, a Believer tem por diretriz n&atilde;o ter sua imagem institucional vinculada a partidos e/ou agentes pol&iacute;ticos, tampouco a cren&ccedil;as e religi&atilde;o, nesse contexto, n&atilde;o ser&atilde;o toleradas manifesta&ccedil;&otilde;es pol&iacute;ticas e religiosas no Evento, sendo identificado qualquer acto, ac&ccedil;&atilde;o, conduta ou comportamento mencionado acima, o participante concorda com sua imediata retirada do evento.</p>
                                <p><br></p>
                                <p>10.5. &nbsp;O participante isenta a Believer de qualquer responsabilidade civil ou criminal, em raz&atilde;o de quaisquer preju&iacute;zos, danos f&iacute;sicos, materiais e/ou morais que eventualmente possam ocorrer durante o Evento, adicionalmente, o participante reconhece e concorda que a Believer n&atilde;o ser&aacute; responsabilizada em qualquer hip&oacute;tese por danos e preju&iacute;zos causados pela Acc&atilde;o e/ou omiss&atilde;o culposa ou dolosa, de terceiros, ainda que contratados pela Believer em raz&atilde;o do Evento.</p>
                                <p><br></p>
                                <p>10.6. &nbsp;A Believer poder&aacute; cancelar ou suspender o evento, incluindo, mas n&atilde;o se limitando por quest&otilde;es de seguran&ccedil;a p&uacute;blica, sa&uacute;de p&uacute;blica, actos p&uacute;blicos, vandalismo e/ou motivos de for&ccedil;a maior em caso fortuito, sem que tal medida gere direito ao reembolso dos valores despendidos com a aquisi&ccedil;&atilde;o do bilhete e/ou ressarcimento por despesas correlatas.</p>
                                <p><br></p>
                                <p>10.7. &nbsp;Os participantes que violarem os Termos poder&atilde;o ser retirados do Evento pelos funcion&aacute;rios da Believer, agentes de seguran&ccedil;a ou mediante acionamento das autoridades, sem preju&iacute;zo em quaisquer dos casos da adop&ccedil;&atilde;o de outras medidas administrativas e judiciais cab&iacute;veis, portanto se o participante infringir os Termos de qualquer forma, n&atilde;o fara jus a qualquer tipo de reembolso e/ ou indemniza&ccedil;&atilde;o por parte da Believer.</p>
                                <p><br></p>
                                <p>10.8. &nbsp;Aplica-se ao Evento e toda e qualquer disputa que decorra de sua execu&ccedil;&atilde;o e/ou destes Termos, incluindo, mas n&atilde;o se limitando a sua divulga&ccedil;&atilde;o, condu&ccedil;&atilde;o, participa&ccedil;&atilde;o e, caso haja, premia&ccedil;&atilde;o a legisla&ccedil;&atilde;o mo&ccedil;ambicana.</p>
                                <p><br></p>
                                <p>10.9. As partes acordam, ainda, que quaisquer diverg&ecirc;ncias em rela&ccedil;&atilde;o a este instrumento e/ou ao Evento que n&atilde;o sejam resolvidas de forma amig&aacute;vel, em &uacute;ltima est&acirc;ncia por meios legais.</p>
                                <p><br></p>
                                <p>10.10. Quaisquer d&uacute;vidas ou sugest&otilde;es relativas ao Evento poder&atilde;o ser enviadas para&nbsp;<a href="mailto:info@believer.co.mz">info@believer.co.mz</a>&nbsp; e ser&atilde;o apreciadas pela Believer team Leader.&nbsp;</p>
                                <div class="checkbox-circle mt-24">
                                    <label>
                                        <input type="checkbox" >  Please accept <a href="#">terms and conditions ?</a>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                        </section>
                    </main>
                </div>
            </div>
        </section>

    </form>
</div>

<!-- JQUERY -->
<script src="{{ asset('src_1/js/jquery-3.3.1.min.js') }}"></script>

<!-- JQUERY STEP -->
<script src="{{ asset('src_1/js/jquery.steps.js') }}"></script>
<script src="{{ asset('src_1/js/main.js') }}"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
