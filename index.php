<?php

require 'usuarios.php';

$u = new Usuarios();

// Inserir
$u->inserir("John", "john@email.com", "1234");

// Selecionar 
$u->selecionar($id);

// Atualizar
$u->atualizar($nome, $email, $senha, $id);

// Excluir
$u->excluir(2);