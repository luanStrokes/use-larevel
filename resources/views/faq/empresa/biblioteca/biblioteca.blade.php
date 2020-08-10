@extends('faq.main.principal')

@section('content')

</br>
<a class="btn btn-primary" href="{{ route('faq.empresa.administrativo.administrativo') }}" role="button">Adimistrativo</a>
<a class="btn btn-primary active" href="{{ route('faq.empresa.biblioteca.biblioteca') }}" role="button">Biblioteca</a>
<a class="btn btn-primary" href="#" role="button">Calendário</a>
<a class="btn btn-primary" href="#" role="button">Gamificações</a>
<a class="btn btn-primary" href="#" role="button">Notificações</a>
<a class="btn btn-primary" href="#" role="button">Relatórios</a>
<a class="btn btn-primary" href="#" role="button">Trilhas e Cursos</a></br></br>

<div class="container">
    <div class="album py-5 bg-light radius">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('faq.empresa.biblioteca.adicionar_arquivo') }}">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Arquivo</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Arquivo</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um arquivo na biblioteca da empresa.</p>
                            <a href="{{ route('faq.empresa.biblioteca.adicionar_arquivo') }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                
    </main>
@endsection