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
    <h2>Adicionar Arquivo</h2>
    <p><a href=" {{ route('faq.company') }} ">Empresa</a> » <a href=" {{ route('faq.empresa.biblioteca.biblioteca') }} ">Biblioteca</a> » Adicionar Arquivo</p>
    </div>
            
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo02.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>Para adicionar um arquivo na biblioteca:<br>
        1. Primeiro deve-se estar logado em seu usuário.<br>
        2. No menu lateral, selecione a opção 'Biblioteca' e em seguida 'Biblioteca' novamente.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo03.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>3. Na tela de Biblioteca selecione 'Novo Arquivo'.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo04.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>4. Selecione o tipo de arquivo a ser enviado.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo05.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>5. Informe um nome para este arquivo. Esse nome deve ter no mínimo 8(oito) caracteres.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo06.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>- Em caso o tipo de arquivo seja Arquivo vá na opção 'Selecionar Arquivo' onde você poderá navegar nas pastas de seu computar e selecionar o arquivo desejado.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo07.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>- Em caso o tipo de arquivo seja YouTube aparecerá um campo para você inserir o link do vídeo. Em seguida clique em 'Carregar' para que seja feito o upload do vídeo.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo08.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>6. Clique em 'Adicionar' e em 'Sim, insira' para adicionar o novo arquivo. Clique em 'OK'.</p>
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
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Arquivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="carouselIndicatorsModal" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo02.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>Para adicionar um arquivo na biblioteca:<br>
        1. Primeiro deve-se estar logado em seu usuário.<br>
        2. No menu lateral, selecione a opção 'Biblioteca' e em seguida 'Biblioteca' novamente.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo03.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>3. Na tela de Biblioteca selecione 'Novo Arquivo'.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo04.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>4. Selecione o tipo de arquivo a ser enviado.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo05.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>5. Informe um nome para este arquivo. Esse nome deve ter no mínimo 8(oito) caracteres.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo06.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>- Em caso o tipo de arquivo seja Arquivo vá na opção 'Selecionar Arquivo' onde você poderá navegar nas pastas de seu computar e selecionar o arquivo desejado.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo07.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>- Em caso o tipo de arquivo seja YouTube aparecerá um campo para você inserir o link do vídeo. Em seguida clique em 'Carregar' para que seja feito o upload do vídeo.</p>
    </div>
    <div class="carousel-item">
    <img src="{{URL::asset('assets/img/empresa/adicionar_arquivo_biblioteca/adicionar_arquivo_passo08.png')}}" data-toggle="modal" data-target="#exampleModal" style="width:100%"><br><br>
      <p>6. Clique em 'Adicionar' e em 'Sim, insira' para adicionar o novo arquivo. Clique em 'OK'.</p>
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