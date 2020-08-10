@extends('faq.main.principal')

@section('content')
    <div id="container" class="container">
            <div id="header">
                <div class="pull-right flush-right flush_responsive">
                <p></p>
                <p>
                </p>
                </div>
            </div>
            <div id="content">
                <div class="row">
                    <div class="span8">
                    <div class="w3-container">
    <h2>Adicionar Departamento</h2>
    <p><a href=" {{ route('faq.company') }} ">Empresa</a> » <a href=" {{ route('faq.empresa.administrativo.administrativo') }} ">Administrativo</a> » Adicionar Departamento</p>
    </div>
            
            
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{URL::asset('assets/img/empresa/adicionar_departamento/adicionar_departamento_passo02.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
        <p>Para adicionar um departamento:<br>
        1. Primeiramente deve-se estar logado em seu usuário.<br>
        2. No menu lateral, selecione 'Administrativo' e em seguida 'Departamentos/Departamentos'.</p>
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('assets/img/empresa/adicionar_departamento/adicionar_departamento_passo03.png')}}" style="width:100%">
      <p>3. Clique em 'NOVO DEPARTAMENTO'.</p>
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('assets/img/empresa/adicionar_departamento/adicionar_departamento_passo04.png')}}" style="width:100%"><br><br>
      <p>4. Preencha o formulário com o nome e a descrição. E clique em 'Adicionar'.
        Clique em 'Sim, insira!' e depois em 'OK'.</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
        </div>
    </div>

<!-- Modal Image -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Departamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="carouselIndicatorsModal" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{URL::asset('assets/img/empresa/adicionar_departamento/adicionar_departamento_passo02.png')}}" style="width:100%"><br><br>
        <p>Para adicionar um departamento:<br>
        1. Primeiramente deve-se estar logado em seu usuário.<br>
        2. No menu lateral, selecione 'Administrativo' e em seguida 'Departamentos/Departamentos'.</p>
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('assets/img/empresa/adicionar_departamento/adicionar_departamento_passo03.png')}}" style="width:100%">
      <p>3. Clique em 'NOVO DEPARTAMENTO'.</p>
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('assets/img/empresa/adicionar_departamento/adicionar_departamento_passo04.png')}}" style="width:100%"><br><br>
      <p>4. Preencha o formulário com o nome e a descrição. E clique em 'Adicionar'.
        Clique em 'Sim, insira!' e depois em 'OK'.</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicatorsModal" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicatorsModal" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

</main>
@endsection