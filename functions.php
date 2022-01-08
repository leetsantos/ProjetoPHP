<?php
//funcao responsavel por excluir um prato do cardapio
function ExcluiPrato(&$pratos,$nome)
{
    if ((array_key_exists($nome,$pratos))==true){
    unset ($pratos[$nome]);
    return;
    }
   ExibirMensagem("Prato inexistente");
}
//altera os ingredientes do lanche
function alterarIngredientes (&$pratos, $nome,$novosingredientes)
{
    if ((array_key_exists($nome,$pratos))==true) {
        $pratos[$nome]['ingredientes'] = $novosingredientes;
        return;
    }
    ExibirMensagem("Prato Inexistente");
}
//altera o preço do lanche
function alterarPreco (&$pratos, $nome,$novopreco)
{
    if ((array_key_exists($nome,$pratos))==true) {
        $pratos[$nome]['valor'] = $novopreco;
        return;
    }
    ExibirMensagem("Prato não encontrado");
}
//exibe mensagem
function ExibirMensagem ($mensagem)
{
    echo $mensagem . PHP_EOL;
}

