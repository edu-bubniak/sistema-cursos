<?php

use Alura\Cursos\Controller\{
Exclusao,
ListarCursos,
FormularioInsercao,
Persistencia,
FormularioEdicao,
FormularioLogin,
RealizarLogin,
Deslogar
};

$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Deslogar::class
];

return $rotas;