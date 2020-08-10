@extends('faq.main.principal')

@section('content')

</br>
<a class="btn btn-primary active" href="{{ route('faq.empresa.administrativo.administrativo') }}" role="button">Adimistrativo</a>
<a class="btn btn-primary" href="{{ route('faq.empresa.biblioteca.biblioteca') }}" role="button">Biblioteca</a>
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
                        <a href="{{ route('faq.empresa.administrativo.adicionar_usuario') }}">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Usuário</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
                            <a href="{{ route('faq.empresa.administrativo.adicionar_usuario') }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('faq.empresa.administrativo.adicionar_cargo') }}">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Cargo</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Cargo</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um cargo.</p>
                            <a href="{{ route('faq.empresa.administrativo.adicionar_cargo') }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('faq.empresa.administrativo.adicionar_departamento') }}">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Departamento</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Departamento</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um departamento.</p>
                            <a href="{{ route('faq.empresa.administrativo.adicionar_departamento') }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Filial</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Filial</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar uma filial.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Grupo</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Grupo</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um grupo.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Perfil</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Perfil</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um perfil.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Editar Dados da Empresa</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Editar Dados da Empresa</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para editar dados da empresa.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Editar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Editar Usuário</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para editar usuário.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Página Inicial</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Usar Landing Page(Página Inicial)</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para configurar sua página inicial.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
    </main>
@endsection