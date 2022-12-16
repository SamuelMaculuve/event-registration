<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
    <link href="{{ asset('comming/common-css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('comming/04-comming-soon/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('comming/04-comming-soon/css/responsive.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="{{ asset('src_1/css/style.css') }}">

</head>
<body>

<div class="main-area" style="height: 120vh;">

    <section class="left-section"
             style="background-image: url(comming/images/countdown-4-1000x1000.jpg);width: 30%;">
    </section><!-- left-section -->
    <section class="right-section full-height mt-5" >

        <div class="wrapper mt-5" >
            <form enctype="multipart/form-data" action="{{ route('single-event-registration.store') }}" id="wizard" method="POST" class="form-imput-label">
            @csrf
            <!-- SECTION 4 -->
                <h2></h2>
                <section>

                    <div class="form-header">
                        <h3>Dados Pessoais</h3>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <input name="full_name" type="text" placeholder="Nome completo " title="Por valor, coloque um valor valido"
                                   class="form-control form-control-lg form-control-solid" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <input name="role" type="text" placeholder="Cargo/Função" title="Por valor, coloque um valor valido"
                                   class="form-control form-control-lg form-control-solid" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <input name="email" type="email" placeholder="E-mail" title="Email Invalido"
                                   class="form-control form-control-lg form-control-solid">
                        </div>
                        <div class="form-group col-sm-6">
                            <input name="telefone" type="number" placeholder="Telefone" maxlength="9" title="Por valor, coloque um valor valido"
                                   class="form-control form-control-lg form-control-solid">
                        </div>
                        <div class="form-group col-sm-6">
                            <input name="telefone_whatsapp" type="number" placeholder="Whatsapp" maxlength="9" title="Por valor, coloque um valor valido"
                                   class="form-control form-control-lg form-control-solid">
                        </div>

                    </div>

                </section>

                <!-- SECTION 5 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="form-header">
                            <h3>Quais são as suas expectativas para este evento?</h3>
                        </div>
                        <div class="form-holder w-100">
                            <textarea  class="form-control form-control-lg form-control-solid"
                                name="expectations" placeholder="Quais são as suas expectativas para este evento?" class="form-control" row="3"></textarea>
                        </div>
                    </div>
                </section>

                <!-- SECTION 6 -->
                <h2></h2>
                <section>
                    <div class="form-header">
                        <h3>Queira por favor escolher o seu Lote?</h3>
                    </div>
                    <div class="row db-padding-btm db-attached">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="db-wrapper">
                                <div class="db-pricing-eleven db-bk-color-one">
                                    <div class="price">
                                        1° Lote-8500MT + IVA
                                    </div>

                                    <ul>
                                        <li><i class="glyphicon glyphicon-ok"></i>Acesso a sala </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Stand para exposição
                                        </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Apresentação (Pitch)</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Certificado de Participação Físico
                                        </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Networking</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Fotos</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Lunch</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Brinde</li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <input style="width: 15pt;height: 15pt;" onclick="return ValidatePetSelection();"
                                               type="checkbox"  name="lot" value="8500" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="db-wrapper">
                                <div class="db-pricing-eleven db-bk-color-two popular">
                                    <div class="price">
                                        2° Lote-4500MT+IVA
                                    </div>

                                    <ul>
                                        <li><i class="glyphicon glyphicon-ok"></i>Acesso a sala </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Stand para exposição
                                        </li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Apresentação (Pitch)</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Certificado de Participação Físico
                                        </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Networking</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Fotos</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Lunch</li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Brinde</li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <input style="width: 15pt;height: 15pt;" onclick="return ValidatePetSelection();"
                                               type="checkbox"  name="lot" value="4500" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="db-wrapper">
                                <div class="db-pricing-eleven db-bk-color-three">
                                    <div class="price">
                                        3° Lote-4000MT+IVA
                                    </div>

                                    <ul>
                                        <li><i class="glyphicon glyphicon-ok"></i>Acesso a sala </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Stand para exposição
                                        </li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Apresentação (Pitch)</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Certificado de Participação Físico
                                        </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Networking</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Fotos</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Lunch</li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Brinde</li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <input style="width: 15pt;height: 15pt;" onclick="return ValidatePetSelection();"
                                               type="checkbox"  name="lot" value="4000" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="db-wrapper">
                                <div class="db-pricing-eleven db-bk-color-six">
                                    <div class="price">
                                        4° Lote-2500MT+IVA
                                    </div>

                                    <ul>
                                        <li><i class="glyphicon glyphicon-ok"></i>Acesso a sala </li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Stand para exposição
                                        </li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Apresentação (Pitch)</li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Certificado de Participação Físico
                                        </li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Networking</li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Fotos</li>
                                        <li><i class="glyphicon glyphicon-ok"></i>Lunch</li>
                                        <li><i class="glyphicon glyphicon-remove"></i>Brinde</li>
                                    </ul>
                                    <div class="pricing-footer">
                                        <input style="width: 15pt;height: 15pt;" onclick="return ValidatePetSelection();"
                                               type="checkbox"  name="lot" value="2500" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <h2></h2>
                <section>
                    <div class="form-header">
                        <h3>Queira por favor efectuar o pagamento.</h3>
                        <p>Número de conta Millennium Bim- 443961435
                        <br/>NIB- 000100000044396143557 </p>
                    </div>
                    <div class="form-row db-padding-btm db-attached">
                        <div class="wrapper mt-5" >
                            <div class="file-upload">
                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adiconar Imagem</button>

                                <div class="image-upload-wrap">
                                    <input name="image_comp" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                    <div class="drag-text">
                                        <h3>Arraste e solte um arquivo ou selecione adicionar imagem</h3>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image" />
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- SECTION 7 -->
                <h2></h2>
                <section>
                    <div class="inner">

                        <div class="form-content">
                            <div class="form-header">
                                <h3>Termos e condições do Business Picth PMEs-B2B 2022
                                </h3>
                            </div>

                            <main class="wrap">
                                <section class="container1">
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

                                        <ol start="2">
                                            <li>
                                                <p>&nbsp; A classifica&ccedil;&atilde;o et&aacute;ria &eacute; livre, contudo, a participa&ccedil;&atilde;o de menores de 18 (dezoito) anos somente ser&aacute; permitida caso estes estejam devidamente acompanhados pelos pais ou respons&aacute;veis legais e apresentem o termo de responsabilidade do acompanhante assinado.</p>
                                            </li>
                                        </ol>

                                        <p>Cl&aacute;usula #4</p>
                                        <p>Cronograma do evento</p>
                                        <ol>
                                            <li>
                                                <p>O Cronograma do evento comtempla a ordem do dia e hor&aacute;rios de cada momento, esta sujeito a altera&ccedil;&otilde;es por diversos motivos alheios a esfera da responsabilidade da Believer Team Leader, que se compromete a manter o cronograma e informa&ccedil;&otilde;es do evento devidamente actualizados, portanto, o participante ser&aacute; &uacute;nica e exclusivamente respons&aacute;vel por acompanhar as eventuais actualiza&ccedil;&otilde;es do cronograma e demais informa&ccedil;&otilde;es sobre o evento.</p>
                                            </li>
                                        </ol>

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

                                        <ol start="3">
                                            <li>
                                                <p>A Believer esclarece que os valores dos bilhetes n&atilde;o esta inclu&iacute;do o imposto, portanto, o participante concorda que far&aacute; o pagamento do seu lote inclu&iacute;do o IVA que corresponde a 17%.</p>
                                            </li>
                                        </ol>

                                        <ol start="4">
                                            <li>
                                                <p>Em conformidade fiscal, a Believer emitira recibos para os participantes, sejam eles pessoas singulares ou colectivas. Apos efectuar a inscri&ccedil;&atilde;o receber&aacute; uma confirma&ccedil;&atilde;o autom&aacute;tica, e apos efectuar o pagamento recebera a confirma&ccedil;&atilde;o final e o &nbsp; n&uacute;mero da sua cadeira e bilhete.&nbsp;</p>
                                            </li>
                                        </ol>

                                        <ol start="5">
                                            <li>
                                                <p>O bilhete adquirido para o evento ser&aacute; valido para apenas uma pessoa, excepto para o primeiro lote que &eacute; valido para duas pessoas.</p>
                                            </li>
                                        </ol>

                                        <ol start="6">
                                            <li>
                                                <p>Em caso de efectuar o pagamento e n&atilde;o participar, o reembolso devera ser feito ate 7 (sete) dias contados da efectiva&ccedil;&atilde;o da compra, para bilhetes adquiridos pr&oacute;xima data do evento, o pedido de reembolso de ser feito ate 48 horas antes do evento.</p>
                                            </li>
                                        </ol>

                                        <ol start="7">
                                            <li>
                                                <p>&nbsp;O participante reconhece e concorda que os bilhetes s&atilde;o pessoais e somente devem ser transferidos nos termos do item 5.8 abaixo, no caso de compras de bilhetes para grupos, o participante dever&aacute; entrar em contacto pelo e-mail&nbsp;<a href="mailto:info@believer.co.mz">info@believer.co.mz</a> e realizar a solicita&ccedil;&atilde;o, a qual ser&aacute; avaliada e concedida caso a caso.</p>
                                            </li>
                                        </ol>

                                        <ol start="8">
                                            <li>
                                                <p>O participante poder&aacute; trocar a titularidade do seu bilhete, bastando, para tal, que entre em contacto com o suporte enviando e-mail para&nbsp;<a href="mailto:info@believer.co.mz">info@believer.co.mz</a> com seus dados e da pessoa para quem o bilhete devera ser transferido, a solicita&ccedil;&atilde;o de transfer&ecirc;ncia s&oacute; poder&aacute; ocorrer ate 10 (dez) dias antes que a Believer realize todas as altera&ccedil;&otilde;es necess&aacute;rias.</p>
                                            </li>
                                        </ol>

                                        <p>Cl&aacute;usula #6</p>
                                        <p>Apresenta&ccedil;&atilde;o dos participantes</p>

                                        <ol>
                                            <li>
                                                <p>Os participantes concordam em estar trajados de forma casual ou formal, e apresentando-se de maneira que represente a sua empresa ou projecto, seja, com camisa, camiseta ou outro material que o identifique como algu&eacute;m que pertence a uma empresa. Os participantes tamb&eacute;m concordam em trazer os seus cart&otilde;es de visita ou outros instrumentos para a divulga&ccedil;&atilde;o e reconhecimento dos seus produtos e servi&ccedil;os.</p>
                                            </li>
                                        </ol>

                                        <ol start="2">
                                            <li>
                                                <p>Os participantes que fizerem as apresenta&ccedil;&otilde;es (pitch), concordam que n&atilde;o passaram dos 4 minutos, sendo o tempo m&aacute;ximo de apresenta&ccedil;&atilde;o por empresa.</p>
                                            </li>
                                        </ol>

                                        <ol start="3">
                                            <li>
                                                <p>&nbsp;Os participantes receberam orienta&ccedil;&otilde;es de como conduzir uma apresenta&ccedil;&atilde;o para que estejam prontos e tenham sucesso.</p>
                                            </li>
                                        </ol>

                                        <p>Cl&aacute;usula #7</p>
                                        <p>Kits, Brindes e Ac&ccedil;&otilde;es Eventuais</p>
                                        <ol>
                                            <li>
                                                <p>&nbsp;A Believer Team Leader poder&aacute;, a seu exclusivo crit&eacute;rio e por mera liberdade, por si ou por terceiros conceder, a qualquer tempo, brindes, kits e/ou realizar ac&ccedil;&otilde;es promocionais eventuais antes e durante o Evento, os quais, caso venham a ser previamente informados e divulgados pela Believer, a exclusivo crit&eacute;rio desta.</p>
                                            </li>
                                        </ol>

                                        <ol start="2">
                                            <li>
                                                <p>&nbsp;O participante reconhece e concorda que a concess&atilde;o de brindes e/ou kits, caso haja, poder&aacute; ser limitada a um n&uacute;mero determinado de participantes e/ou exclusiva a uma ou mais modalidades de bilhetes.&nbsp;</p>
                                            </li>
                                        </ol>

                                        <p>Cl&aacute;usula #8</p>
                                        <p>Propriedade Intelectual</p>
                                        <ol>
                                            <li>
                                                <p>Por meio da aquisi&ccedil;&atilde;o de seu bilhete para o Evento e na melhor forma de direito, o participante concorda em ceder e transferir a Believer, com exclusividade, na integralidade e a titulo universal e gratuito, em caracter total, definitivo, irrevog&aacute;vel e irretrat&aacute;vel, para fins de utiliza&ccedil;&atilde;o a qualquer tempo, em Mo&ccedil;ambique e/ou no estrangeiro, os direitos de utiliza&ccedil;&atilde;o da sua imagem e voz, em qualquer formato em que se encontrem, tais como, mas sem se limitar a fotos, v&iacute;deos, depoimentos e documentos para a produ&ccedil;&atilde;o e realiza&ccedil;&atilde;o pela Believer, em qualquer formato conhecido ou que venha a ser inventado, com fins comerciais e/ou n&atilde;o.</p>
                                            </li>
                                        </ol>

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
                                                <input type="checkbox" id="terms_conditions">  Please accept <a href="#">terms and conditions ?</a>
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

    </section><!-- right-section -->
</div><!-- main-area -->

<!-- SCIPTS -->
<script src="{{ asset('comming/common-js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('comming/common-js/scripts.js') }}"></script>

<!-- JQUERY STEP -->
<script src="{{ asset('src_1/js/jquery.steps.js') }}"></script>
<script src="{{ asset('src_1/js/main.js') }}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

</body>
</html>
