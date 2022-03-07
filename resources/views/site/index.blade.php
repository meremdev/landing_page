@extends('site.layouts.app')
@section('page', 'Home')


@section('content')
    <section id="home"><!-- Início seção home -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 d-flex"><!-- Textos da seção -->
            <div class="align-self-center">
              <h1 class="display-4">Organic Marketing Access</h1>
              <p>
                Deixe seu E-mail e o serviço que deseja e retornaremos com uma proposta
              </p>

              <form class="mt-4 mb-4">
                 @csrf
                <div class="input-group input-group-lg">
                  <input type="text" placeholder="Seu Melhor e-mail" class="form-control">

                  <select name="service" class=" col-3 form-control">
                    <option>Patrimonial</option>
                    <option>Condominial</option>
                    <option>Limpeza</option>
                  </select>

                  <select name="port" class=" col-3 form-control">
                    <option>Pequeno</option>
                    <option>Médio</option>
                    <option>Grande</option>
                  </select>

                  <div class="input-group-append">
                    <button type="button" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
              </form>

              <p>Ou "Chama no Zap" &nbsp;
                <a href="https://api.whatsapp.com/send?phone=5511958795995&text=Seja%20Bem%20vindo%20a%20JM%20Servi%C3%A7os%20%26%20Solu%C3%A7%C3%B5es%2C%20em%20que%20Podemos%20Ajudar%20Hoje" class="btn btn-outline-success">
                  <i class="fab fa-whatsapp fa-lg"></i>
                </a>
              <p>
            </div>
          </div><!--/fim textos da seção -->
          <div class="col-md-4 d-none d-md-block">
            <img src="{{ asset('img/business-4561250_640.png') }}">
          </div>
        </div>
      </div>
    </section><!--/fim seção home -->

    <section class="caixa"><!--/Início seção saiba -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Estamos aqui para ajudar </h2>
              <p>
                Somos uma empresa criada por profissionais qualificados com grandes experiências,
                oferecemos serviços diferenciados e de qualidade.
                nosso objetivo é prestar serviço personalizado e confiavel,
                visando a segurança de sua empresa ou condominio
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('img/receptionist-5975961_1280.jpg') }}" class="img-fluid">
          </div>
        </div>
      </div>
    </section><!--/FIM seção saiba -->

    <section class="caixa"><!--/Início seção juros -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('img/economizeblue.png') }}" class="img-fluid">
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Beneficios</h2>
              <p>
                -Sistema de controle de acesso completo<br/>
                -Manutenção preventiva<br/>
                -Instalação de 16 a 32 cameras em HD e DVR intelbras<br/>
                -Jardinagem de podas mensais.<br/>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!--/FIM seção juros -->

    <section class="caixa"><!--/Início seção recursos -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('img/receptionists-5975962_1280.jpg') }}" class="img-fluid">
            <h4>Controle de Acesso</h4>
            <p>
              Nossa solução em controle de acesso é completa e nossos profissionais são treinados para atender
              as necessidades do seu Condominio/Empresa.
            </p>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('img/men-827301_1280.jpg') }}" class="img-fluid">
            <h4>Serviços Gerais</h4>
            <p>
              Esta precisando de zeladores, manutencistas, fachineiros e jardineiros, nossos profissionais
              são capacitados e experientes para melhor atende-lo.
            </p>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('img/business-1839191_1280.jpg') }}" class="img-fluid">
            <h4>Segurança Eletronica</h4>
            <p>
              Nosso sistema de segurança eletronica é composto por cftv, alarmes, interfones, portões automatizado, cercas eletricas
              monitoramento 24 horas, e não para por ai fazemos instalação de antenas coletivas e bombas de recalque.
            </p>
          </div>
        </div>
      </div>
    </section><!--/FIM seção recursos -->

    <section class="caixa"><!--/Início seção saiba -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Contato</h2>
              <p>
                -Sistema de controle de acesso completo<br/>
                -Manutenção preventiva<br/>
                -Instalação de 16 a 32 cameras em HD e DVR intelbras<br/>
                -Jardinagem de podas mensais.<br/>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.130022265059!2d-46.524442384666294!3d-23.56377326756724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5df39f53b97f%3A0x4e57cb2f2bc0404!2sR.%20Rafael%20Bluteau%2C%2066%20-%20Jardim%20Vila%20Formosa%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003460-110!5e0!3m2!1spt-BR!2sbr!4v1568210281974!5m2!1spt-BR!2sbr" width="540" height="370" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section><!--/FIM seção saiba -->


    <footer class="mt-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p>
              <a href="">Home</a>
              <a href="">Beneficios</a>
              <a href="">Controle de Acesso</a>
              <a href="">Serviços Gerais</a>
              <a href="">Segurança Eletrônica</a>
            </p>
          </div>
          <div class="col-md-4 d-flex justify-content-end">
            <a href="" class="btn btn-outline-dark">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="ml-2 btn btn-outline-dark">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="ml-2 btn btn-outline-dark">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="ml-2 btn btn-outline-dark">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>
@endsection


