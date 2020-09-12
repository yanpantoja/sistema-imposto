<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItems = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        echo "Cria pedido no banco de dados " . PHP_EOL;
        // MailService
        echo "Envia e-mail para cliente " . PHP_EOL;
        echo "Gerar log da criação de pedido" . PHP_EOL;
    }
}
