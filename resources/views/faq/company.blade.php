@extends('faq.main.principal')

@section('content')

</br>
<a class="btn btn-primary" href="{{ route('faq.empresa.administrativo.administrativo') }}" role="button">Adimistrativo</a>
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
                                <title>Adicionar Usuário</title>
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
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Departamento</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Filial</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Grupo</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Perfil</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Editar Dados da Empresa</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Editar Usuário</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Usar Landing Page</text>
                                <text x="50%" y="50%" fill="#eceeef" dy="1.7em">(Página Inicial)</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('faq.empresa.biblioteca.adicionar_arquivo') }}">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Usuário</title>
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
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Criar Novo Evento</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Configurar Gamificação</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Configurar Envio de Notificações</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Criar Layout de Email</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Enviar Email</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Enviar Notificação Personalizada</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Gerar Relatório</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Grupo ao Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Adicionar Trilha</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Clonar Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Configurar Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Conteúdo do Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Conteúdo do Curso</text>
                                <text x="50%" y="50%" fill="#eceeef" dy="1.7em">- Avaliações -</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Conteúdo do Curso</text>
                                <text x="50%" y="50%" fill="#eceeef" dy="1.7em">- Conteúdo -</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Conteúdo do Curso</text>
                                <text x="50%" y="50%" fill="#eceeef" dy="1.7em">- Unidades -</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Criar Nova Categoria de Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Deletar Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Editar Certificado</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
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
                                <title>Adicionar Usuário</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Editar Informações do Curso</text>
                            </svg>
                        </a>
                        <div class="card-body">
                            <p class="card-text">Este é o passo-a-passo para adicionar um usuário.</p>
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

@endsection