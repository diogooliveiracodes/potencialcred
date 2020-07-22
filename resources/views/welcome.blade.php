<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Potencial - Serviços Financeiros</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/app.css" />
        {{-- Sweet Alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script data-ad-client="ca-pub-6477437543223676" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        {{-- Jquery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">POTENCIAL</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#quem-somos">Quem Somos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#produtos">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('sejanossoparceiro')}}">Seja nosso parceiro</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('trabalheconosco')}}">Trabalhe conosco</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold" id="h1-masthead">
                            <img id="img-desktop" class="p-0 m-0 d-none" src="../images/logo.png" alt="" style="height: 20rem">
                            <img id="img-mobile" class="p-0 m-0 d-none" src="../images/logo.png" alt="" style="height: 150px">
                        </h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5" id="p-masthead" style="font-size: 1.5rem">Garantimos as melhores taxas do mercado</p>
                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="#produtos" id="b-masthead">Conheça nossos produtos</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->

{{-- Quem somos --}}
<section class="bg-light">
    <div class="row justify-content-center bg-light px-0 mx-0 py-5 mt-3" id="quem-somos">
        <div class="col-sm-11">
            
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Quem Somos</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="card-body text-justify">
                    <p>
                        <strong>A Potencial Serviços Financeiros</strong> é uma empresa multisserviços e multissoluções, pensada para 
                        auxiliar você e sua família a gerir todo o planejamento financeiro, o patrimônio e os negócios, 
                        com tranquilidade e segurança. 
                    </p>
                    <p>
                        Oferecemos uma linha completa de produtos financeiros, que vão desde seguros (veicular, 
                        viagem, garantia, residencial), planos de saúde empresariais, empréstimos, consórcios, até 
                        financiamentos, gestão de benefícios corporativos e investimentos. Tudo isso e muito mais, 
                        para que nossos clientes tenham confiança na hora de cuidar do seu capital.   
                    </p>
                    <p>
                        Atendemos empresas, profissionais liberais, autônomos, pessoas físicas, funcionários públicos 
                        e aposentados. E o melhor: garantindo as melhores taxas do mercado! 
                    </p>
                    <p>
                        Além disso, buscando sempre prestar os serviços com qualidade, contamos com a parceria das 
                        maiores e mais respeitadas instituições financeiras, grandes bancos, associações e 
                        seguradoras. 
                    </p>
                    <p>
                        Quer saber mais? Entre em contato conosco e descubra todo o potencial do seu dinheiro! 
                    </p>
                </div>
            
        </div>
    </div>
</section>

<!-- produtos-->
<section class="page-section bg-danger py-5" >
    <div class="container d-none" id="produtos-desktop">
        <h2 class="text-center text-white mt-0">Dinheiro na conta sem sair de casa</h2>
        <hr class="divider border-white mt-4 mb-5"/>
        <div class="row justify-content-center mx-0 px-0 text-muted ">
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-shield-alt"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">SEGUROS</h4>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-money-check-alt"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">FINANCIAMENTO</h4>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-coins"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">CRÉDITO</h4>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-handshake"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">CORRETAGEM</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mx-0 px-0 pb-5">
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-car"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">PROTEÇÃO</h4>
                </div>
                <div class="row justify-content-center">
                    <h4 class="text-white">VEICULAR</h4>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-comments-dollar"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">EMPRÉSTIMO<br> CONSIGNADO</h4>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-globe"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">SOLUÇÕES</h4>
                </div>
                <div class="row justify-content-center mt-0">
                    <h4 class="text-white">CORPORATIVAS</h4>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="row justify-content-center">
                    <i class="fas fa-4x text-white fa-chart-line"></i>
                </div>
                <div class="row justify-content-center mt-3">
                    <h4 class="text-white">INVESTIMENTOS</h4>
                </div>
            </div>

        </div>
    </div>
    <!-- produtos mobile-->
    <div class="d-none" id="produtos-mobile">
        <h2 class="text-center text-white mt-0">Dinheiro na conta sem sair de casa.</h2>
        <hr class="divider border-white mt-4 mb-2"/>
        <div class="row justify-content-center mx-0 px-0 text-muted ">
            <div class="row">
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-shield-alt"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">SEGUROS</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-money-check-alt"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">FINANCIAMENTO</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-comments-dollar"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">EMPRÉSTIMO<br> CONSIGNADO</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-handshake"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">CORRETAGEM</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-car"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">PROTEÇÃO</h4>
                        </div>
                        <div class="row justify-content-center">
                            <h4 class="text-white">VEICULAR</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-chart-line"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">INVESTIMENTOS</h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-globe"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">SOLUÇÕES</h4>
                        </div>
                        <div class="row justify-content-center mt-0">
                            <h4 class="text-white">CORPORATIVAS</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-sm-3 mt-5">
                        <div class="row justify-content-center">
                            <i class="fas fa-4x text-white fa-coins px-2"></i>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <h4 class="text-white">CRÉDITO</h4>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </div>
</section>  

{{-- parceiros desktop --}}

<section class="page-section py-4 my-4 d-none" id="parceiros-desktop">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mt-0">Parceiros</h2>
            <hr class="divider my-4" />
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-1">
            <img src="../images/bancobmg.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/bancodaycoval.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/bancopan.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/bancosafra.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/bradesco.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/bvfinanceira.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/ccb.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/icatu.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/itau.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/ole.png" width="100%" alt="">
        </div>
        <div class="col-sm-1">
            <img src="../images/portoseguro.png" width="100%" alt="">
        </div>
    </div>
</section>

{{-- parceiros mobile --}}
<section class="page-section py-4 my-4 d-none" id="parceiros-mobile">
    <div class="row justify-content-center mb-3 px-0 mx-0">
        <div class="col-lg-8 text-center">
            <h2 class="mt-0">Parceiros</h2>
        </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide mx-0 px-0" data-ride="carousel">
        <ol class="carousel-indicators color-dark">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-between px-5">
                    <img src="../images/bancobmg.png" height="50rem" alt="">
                    <img src="../images/bancodaycoval.png" alt="" height="50rem">
                    <img src="../images/bancopan.png" alt="" height="50rem">
                </div>
            </div>
            <div class="carousel-item">
            <div class="row justify-content-between px-5">
                <img src="../images/bancosafra.png" height="50rem" alt="">
                <img src="../images/ccb.png" height="50rem" alt="">
                <img src="../images/bancopan.png" height="50rem" alt="">
            </div>
            </div>
            <div class="carousel-item">
            <div class="row justify-content-between px-5">
                <img src="../images/bvfinanceira.png" height="50rem" alt="">
                <img src="../images/portoseguro.png" height="50rem" alt="">


                <img src="../images/icatu.png" height="50rem" alt="">
            </div>
            </div>
            <div class="carousel-item">
            <div class="row justify-content-center px-5">
                <img class="px-2" src="../images/ole.png" height="50rem" alt="">
                <img src="../images/bradesco.png" height="50rem" alt="">

            </div>
            </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</section>


<!-- Contact-->
<section class="page-section py-4 my-4" id="contato">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Faça sua cotação sem compromisso</h2>
                <hr class="divider my-4" />
            </div>
        </div>
        <form id="contactForm" name="contactForm">
            
            <div class="row align-items-stretch mb-4">
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Seu Nome *" required="required"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="email" type="email" placeholder="Seu E-mail *" required="required" data-validation-required-message="Please enter your email address." />
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Seu Telefone *" required="required" data-validation-required-message="Please enter your phone number." />
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-danger btn-xl text-uppercase" id="sendMessageButton" type="submit">Solicitar Orçamento</button>
            </div>
        </form>
    </div>
    <script>
        $(function(){
            $('form[name="contactForm"]').submit(function(event){
                event.preventDefault();
                Swal.fire({
                icon: 'success',
                title: 'Obrigado!',
                text: 'Recebemos a sua solicitação de orçamento!',
                })

                var myHeaders = new Headers();
                myHeaders.append("access-token", "f949543e-9f27-4bd9-ad61-2abe36fe2e58");
                myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
                myHeaders.append("Cookie", "PHPSESSID=e4sollbabufnpuau797q4hj5g7");

                var urlencoded = new URLSearchParams();
                urlencoded.append("name", document.getElementById('name').value);
                urlencoded.append("user_id", "1866");
                urlencoded.append("phone", document.getElementById('phone').value);
                urlencoded.append("email", document.getElementById('email').value);

                var requestOptions = {
                method: 'POST',
                headers: myHeaders,
                body: urlencoded,
                redirect: 'follow'
                };

                var id = '';
                const proxyurl = "https://cors-anywhere.herokuapp.com/";
                fetch(proxyurl +"https://api.lscrm.com.br/v1/persons", requestOptions)
                    .then(response => response.json())
                    .then(result => id = result['post_data'])
                    .then(id => {
                        var myHeaders = new Headers();
                        myHeaders.append("access-token", "f949543e-9f27-4bd9-ad61-2abe36fe2e58");
                        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
                        myHeaders.append("Cookie", "PHPSESSID=e4sollbabufnpuau797q4hj5g7");

                        var urlencoded = new URLSearchParams();
                        urlencoded.append("entity_type", "persons");
                        urlencoded.append("title", id['name']);
                        urlencoded.append("user_id", "1866");
                        urlencoded.append("stage_id", "3");
                        urlencoded.append("person_id", id['id']);

                        var requestOptions = {
                        method: 'POST',
                        headers: myHeaders,
                        body: urlencoded,
                        redirect: 'follow'
                        };

                        fetch(proxyurl + "https://api.lscrm.com.br/v1/opportunities", requestOptions)
                        .then(response => response.text())
                        .then(result => console.log(result))
                        .catch(error => console.log('error', error));
                    })
                    .catch(error => console.log('error', error));
                document.getElementById("contactForm").reset();
            });
        })
        
    </script>

</section>

        <!-- Footer-->
        <footer id="produtos" class="page-footer font-small mdb-color pt-4 bg-dark text-white" style="border-top:1px solid rgb(224, 224, 224)">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">
            
                <!-- Footer links -->
                <div class="row text-center text-md-left mt-3 pb-3">
            
                    {{-- CONTATO FOOTER DESKTOP --}}
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 d-none" id="contatofooterweb">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
                        <p>
                        <i class="fas fa-home mr-3"></i>Rua dos Guajajaras, nº 910, sala 403 - Centro - Belo Horizonte/MG</p>
                    
                        <p>
                            <a href="mailto:contato@potencialcred.com.br" style="color:white"> <i class="fas fa-envelope mr-3" ></i>contato@potencialcred.com.br</a>
                        </p>
                        <p>
                            <a href="tel:3140034000" style="color:white"><i class="fas fa-phone mr-3"></i>(31) 99595-8101</a>
                        </p>
                        <p>
                            <a href="tel:3140034000" style="color:white"><i class="fas fa-phone mr-3"></i>(31)  3021-9042</a>
                        </p>
                            <a href="tel:3140034000" style="color:white"><i class="fas fa-phone mr-3"></i>(31)  3021-9043</a>
                        </p>
                        <div class="text-white mt-5" >
                            <a class="text-white" href="https://www.facebook.com/rodrigo.pachecoalmeida.39"><i class="fab fa-4x fa-facebook-square pr-3"></i></a> 
                            <a class="text-white" href="https://www.instagram.com/potencialservicosfinanceiros/"><i class="fab fa-4x fa-instagram pr-3"></i></a> 
                        </div>
        
                    </div>
                    <!-- Grid column -->
                
                    <hr class="w-100 clearfix d-md-none">
                
                    <!-- Grid column -->
                    <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mt-3 text-left">
                        
                        <h6 class="text-uppercase mb-4 font-weight-bold pl-2">Produtos</h6>
        
                        <div class="accordion text-white" id="accordionExample">
                            {{-- CARD --}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                <button id="btn1" style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Empréstimo Consignado Público – Governo e Prefeitura
                                </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Aposentados </li>
                                        <li>Pensionistas do INSS</li>
                                        <li>Funcionários Públicos</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            {{-- CARD 2--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Empréstimo Consignado para Empresa Privada 
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            Facilidade para os colaboradores organizarem a vida financeira ou realizar planos. Nós 
                                            temos opções de crédito para oferecer. Uma delas pode ser a solução para o que você 
                                            precisa. 
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            {{-- CARD 3--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading3">
                                <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                        Crédito  
                                    </button>
                                </h2>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Crédito pessoal</li>
                                        <li>Crédito empresarial</li>
                                        <li>Crédito com imóvel em garantia</li>
                                        <li>Crédito com veículo em garantia </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            {{-- CARD 4--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading4">
                                    <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                        Seguro de Vida 
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><strong>Para você</strong> proteger o que é mais importante. Seguros de Vida para 
                                                garantir o seu bem-estar e de toda a sua família ao longo dos anos, de 
                                                acordo com cada momento da sua vida.  
                                                Temos planos personalizados para garantir segurança financeira conforme 
                                                a real necessidade do cliente, com as melhores 
                                                coberturas e os melhores serviços do mercado. 
                                            </li>
                                            <br>
                                            <li><strong>Para sua empresa</strong> contratar os melhores serviços e benefícios do 
                                                mercado. Planos customizados para atrair e manter os melhores 
                                                talentos. Oferecemos as melhores soluções de proteção e 
                                                planejamento financeiro.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
        
                            {{-- CARD 5--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading5">
                                    <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                        Seguro Viagem 
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                Para planejar sua viagem com segurança e 
                                                tranquilidade.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 6--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading6">
                                    <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                        Seguros para Autônomos e Profissionais Liberais
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                Garantias que 
                                                permitem profissionais terem liberdade e segurança frente a imprevistos 
                                                que os impeçam de exercer suas atividades. 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 7--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading7">
                                    <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                        Gestão de Benefícios Corporativos
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                Para atrair e reter os melhores talentos, 
                                                oferecemos Seguro de Vida em Grupo, Plano de Saúde e Odontológico, 
                                                Seguro Estagiário, entre outros. 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 8--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading8">
                                    <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                        Plano de Previdência
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                Comece a planejar e investir no seu futuro.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 9--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading9">
                                    <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                        Investimentos
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                Aqui você encontra as melhores opções para investir.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 10--}}
                            <div class="card card-footer bg-dark p-0" style="border-bottom: 1px solid rgb(149, 148, 148);">
                                <div class="card-header" id="heading10">
                                    <h2 class="mb-0">
                                    <button style="box-shadow: none;" class="btn btn-block btn-footer text-left" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                        Financiamentos
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                As melhores soluções para sua próxima conquista.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">
                
                    <!-- Grid column -->
                    <div class="col-md-12 col-lg-12 col-xl-12 mx-auto mt-3 d-none" id="contatofootermobile">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
                        <p>
                        <i class="fas fa-home mr-3"></i>Rua dos Guajajaras, nº 910, sala 403 - Centro - Belo Horizonte/MG</p>
                    
                        <p>
                            <a href="mailto:contato@kicell7.com.br" style="color:white"> <i class="fas fa-envelope mr-3" ></i>contato@potencialcred.com.br</a>
                        </p>
                        <p>
                            <a href="tel:3198112141" style="color:white"><i class="fas fa-phone mr-3"></i>(31) 99595-8101</a>
                        </p>
                        <p>
                            <a href="tel:3140034000" style="color:white"><i class="fas fa-phone mr-3"></i>(31)  3021-9042</a>
                        </p>
                            <a href="tel:3140034000" style="color:white"><i class="fas fa-phone mr-3"></i>(31)  3021-9043</a>
                        </p>
                        <div class="text-white mt-2 mb-4" >
                            <a class="text-white" href="https://www.facebook.com/rodrigo.pachecoalmeida.39"><i class="fab fa-4x fa-facebook-square pr-3"></i></a> 
                            <a class="text-white" href="https://www.instagram.com/potencialservicosfinanceiros/"><i class="fab fa-4x fa-instagram pr-3"></i></a> 
                        </div>
        
                    </div>
                    <!-- Grid column -->
        
            
                </div>
                <!-- Footer links -->
            
            
            </div>
            <!-- Footer Links -->
            
            </footer>
        </div>
        <a class="fixada btn-floating btn-sm rgba-white-slight mx-0 px-0" href="https://wa.me/5531995958101">
            <img src="./img/whatsapp.png" height="70px" alt="">
            </a>
            <style scoped>
            .fixada {
            position: fixed;
            bottom: 0;
            right: 0;
            }
            </style>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

    </body>
</html>

