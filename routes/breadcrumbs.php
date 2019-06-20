<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Login
Breadcrumbs::for('login', function ($trail) {
    $trail->push('Login', route('login'));
});

// Registro
Breadcrumbs::for('regsitro.novo', function ($trail) {
    $trail->push('Registro', route('regsitro.novo'));
});


// Comanda
Breadcrumbs::for('comandas.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Comandas', route('comandas.index'));
});


// Grupo
Breadcrumbs::for('grupos.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Grupos', route('grupos.index'));
});

Breadcrumbs::for('grupos.novo', function ($trail) {
    $trail->parent('grupos.index');
    $trail->push('Novo', route('grupos.novo'));
});


// Categoria
Breadcrumbs::for('categorias.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Categorias', route('categorias.index'));
});

Breadcrumbs::for('categorias.novo', function ($trail) {
    $trail->parent('categorias.index');
    $trail->push('Novo', route('categorias.novo'));
});


// Produto
Breadcrumbs::for('produtos.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Produtos', route('produtos.index'));
});

Breadcrumbs::for('produtos.novo', function ($trail) {
    $trail->parent('produtos.index');
    $trail->push('Novo', route('produtos.novo'));
});

Breadcrumbs::for('produtos.editar', function ($trail, $id) {
    $trail->parent('produtos.index');
    $trail->push('Editar', route('produtos.editar', $id));
});


// Relatórios
Breadcrumbs::for('relatorios.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Relatórios', route('relatorios.index'));
});

Breadcrumbs::for('relatorios.funcionarios', function ($trail) {
    $trail->parent('relatorios.index');
    $trail->push('Funcionários', route('relatorios.funcionarios'));
});


// Caixa
Breadcrumbs::for('caixa.balcao', function ($trail) {
    $trail->parent('home');
    $trail->push('Balcão', route('caixa.balcao'));
});

Breadcrumbs::for('caixa.comanda', function ($trail) {
    $trail->parent('home');
    $trail->push('Comanda', route('caixa.comanda'));
});

Breadcrumbs::for('caixa.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Balanço de Caixa', route('caixa.index'));
});


// Erros
Breadcrumbs::for('errors.404', function ($trail) {
    $trail->parent('home');
    $trail->push('404', route('errors.404'));
});
