<?php

use Alura\DesignPattern\ListaDeOrcamentos;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 5;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 3;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 3270;

$listaDeOrcamento = new ListaDeOrcamentos();
$listaDeOrcamento->addOrcamento($orcamento1);
$listaDeOrcamento->addOrcamento($orcamento2);
$listaDeOrcamento->addOrcamento($orcamento3);

foreach ($listaDeOrcamento as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd. Itens: " . $orcamento->quantidadeItens . PHP_EOL;

    echo PHP_EOL;
}
