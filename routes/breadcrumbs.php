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


// Relatórios
Breadcrumbs::for('relatorios.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Relatórios', route('relatorios.index'));
});

Breadcrumbs::for('relatorios.funcionarios', function ($trail) {
    $trail->parent('relatorios.index');
    $trail->push('Funcionários', route('relatorios.funcionarios'));
});
