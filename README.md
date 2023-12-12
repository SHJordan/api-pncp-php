# OpenAPIClient-php

API REST de serviços do Portal Nacional de Contratações Públicas (PNCP)

For more information, please visit [https://www.serpro.gov.br](https://www.serpro.gov.br).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/SHJordan/api-pncp-php.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_ata = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->consultarHistoricoAta($cnpj, $ano, $sequencial, $sequencial_ata, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->consultarHistoricoAta: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://treina.pncp.gov.br/api/pncp*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AtaApi* | [**consultarHistoricoAta**](docs/Api/AtaApi.md#consultarhistoricoata) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/atas/{sequencialAta}/historico | Consultar Histórico de Ata
*AtaApi* | [**consultarHistoricoAtaQuantidade**](docs/Api/AtaApi.md#consultarhistoricoataquantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/atas/{sequencialAta}/historico/quantidade | Consultar Quantidade Histórico de Ata
*AtaApi* | [**deleteAta**](docs/Api/AtaApi.md#deleteata) | **DELETE** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta} | Excluir Ata de Registro de Preço
*AtaApi* | [**deleteDocumentoAta**](docs/Api/AtaApi.md#deletedocumentoata) | **DELETE** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos/{sequencialDocumento} | Excluir Documento de Ata de Registro de Preço
*AtaApi* | [**inserirArquivo3**](docs/Api/AtaApi.md#inserirarquivo3) | **POST** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos | Inserir Documento em Ata de Registro de Preço
*AtaApi* | [**inserirAta**](docs/Api/AtaApi.md#inserirata) | **POST** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas | Inserir Ata de Registro de Preço
*AtaApi* | [**recuperarArquivo3**](docs/Api/AtaApi.md#recuperararquivo3) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos/{sequencialDocumento} | Recuperar Documento de Ata de Registro de Preço
*AtaApi* | [**recuperarAtaDocumentoQuantidade**](docs/Api/AtaApi.md#recuperaratadocumentoquantidade) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos/quantidade | Consultar Quantidade de Documentos de Ata
*AtaApi* | [**recuperarAtaRegistoPreco**](docs/Api/AtaApi.md#recuperarataregistopreco) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta} | Consultar Ata de Registro de Preço
*AtaApi* | [**recuperarAtasPorFiltros**](docs/Api/AtaApi.md#recuperaratasporfiltros) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas | Consultar Atas de Registro de Preço por Compra
*AtaApi* | [**recuperarInformacoesDocumentosAta**](docs/Api/AtaApi.md#recuperarinformacoesdocumentosata) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos | Consultar Dados de Todos os Documentos de uma Ata de Registro de Preço
*AtaApi* | [**retificarAta**](docs/Api/AtaApi.md#retificarata) | **PUT** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta} | Retificar Ata de Registro de Preço
*ContrataoApi* | [**consultarCompra**](docs/Api/ContrataoApi.md#consultarcompra) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Consultar Contratação
*ContrataoApi* | [**consultarCompra1**](docs/Api/ContrataoApi.md#consultarcompra1) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/historico | Consultar Histórico de Contratação
*ContrataoApi* | [**consultarQuantidade**](docs/Api/ContrataoApi.md#consultarquantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/historico/quantidade | Consultar Quantidade Histórico de Contratação
*ContrataoApi* | [**getImagem**](docs/Api/ContrataoApi.md#getimagem) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem/{sequencialImagem} | Recuperar Imagem de um Item de uma Contratação
*ContrataoApi* | [**getImagemLista**](docs/Api/ContrataoApi.md#getimagemlista) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem | Recuperar Imagens de um Item de uma Contratação
*ContrataoApi* | [**incluirCompra**](docs/Api/ContrataoApi.md#incluircompra) | **POST** /v1/orgaos/{cnpj}/compras | Inserir Contratação
*ContrataoApi* | [**incluirCompraItem**](docs/Api/ContrataoApi.md#incluircompraitem) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens | Inserir Item de Contratação
*ContrataoApi* | [**incluirCompraItemResultado**](docs/Api/ContrataoApi.md#incluircompraitemresultado) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados | Inserir Resultado de Item de Contratação
*ContrataoApi* | [**inserirArquivo2**](docs/Api/ContrataoApi.md#inserirarquivo2) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos | Inserir Documento de Contratação
*ContrataoApi* | [**inserirImagem**](docs/Api/ContrataoApi.md#inseririmagem) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem | Inserir Imagem de um Item de Contratação
*ContrataoApi* | [**pesquisarCompraItem**](docs/Api/ContrataoApi.md#pesquisarcompraitem) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens | Consultar Todos os Itens de Contratação
*ContrataoApi* | [**recuperarArquivo2**](docs/Api/ContrataoApi.md#recuperararquivo2) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Baixar Documento de Contratação
*ContrataoApi* | [**recuperarCompraDocumentoQuantidade**](docs/Api/ContrataoApi.md#recuperarcompradocumentoquantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos/quantidade | Consultar Quantidade de Documentos de Contratação
*ContrataoApi* | [**recuperarCompraItem**](docs/Api/ContrataoApi.md#recuperarcompraitem) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem} | Consultar Item de Contratação
*ContrataoApi* | [**recuperarCompraItemQuantidade**](docs/Api/ContrataoApi.md#recuperarcompraitemquantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/quantidade | Consultar Quantidade Item de Contratação
*ContrataoApi* | [**recuperarInformacoesDocumentosCompra**](docs/Api/ContrataoApi.md#recuperarinformacoesdocumentoscompra) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos | Consultar Documentos de Contratação
*ContrataoApi* | [**recuperarResultado**](docs/Api/ContrataoApi.md#recuperarresultado) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados/{sequencialResultado} | Consultar Resultado de Item de Contratação
*ContrataoApi* | [**recuperarResultados**](docs/Api/ContrataoApi.md#recuperarresultados) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados | Consultar Resultados de Item de Contratação
*ContrataoApi* | [**removerCompra**](docs/Api/ContrataoApi.md#removercompra) | **DELETE** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Excluir Contratação
*ContrataoApi* | [**removerDocumentoCompra**](docs/Api/ContrataoApi.md#removerdocumentocompra) | **DELETE** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Excluir Documento de Contratação
*ContrataoApi* | [**removerImagem**](docs/Api/ContrataoApi.md#removerimagem) | **DELETE** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem/{sequencialImagem} | Remover Imagem de um Item de uma Contratação
*ContrataoApi* | [**retificarCompra**](docs/Api/ContrataoApi.md#retificarcompra) | **PUT** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Retificar Contratação
*ContrataoApi* | [**retificarCompraItem**](docs/Api/ContrataoApi.md#retificarcompraitem) | **PUT** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem} | Retificar Item de Contratação
*ContrataoApi* | [**retificarCompraItemResultado**](docs/Api/ContrataoApi.md#retificarcompraitemresultado) | **PUT** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados/{sequencialResultado} | Retificar Resultado de Item de Contratação
*ContrataoApi* | [**retificarParcialmenteCompra**](docs/Api/ContrataoApi.md#retificarparcialmentecompra) | **PATCH** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Retificar parcialmente uma Contratação
*ContrataoApi* | [**retificarParcialmenteCompraItem**](docs/Api/ContrataoApi.md#retificarparcialmentecompraitem) | **PATCH** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem} | Retificar Parcialmente um Item de Contratação
*ContratoApi* | [**consultarContrato**](docs/Api/ContratoApi.md#consultarcontrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial} | Consultar Contrato
*ContratoApi* | [**consultarContrato1**](docs/Api/ContratoApi.md#consultarcontrato1) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/historico | Consultar Histórico de Contrato
*ContratoApi* | [**consultarContrato2**](docs/Api/ContratoApi.md#consultarcontrato2) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/historico/quantidade | Consultar Quantidade Histórico de Contrato
*ContratoApi* | [**consultarContratosContratacao**](docs/Api/ContratoApi.md#consultarcontratoscontratacao) | **GET** /v1/orgaos/{cnpj}/contratos/contratacao/{anoContratacao}/{sequencialContratacao} | Consultar Contratos de uma Contratação
*ContratoApi* | [**inserirArquivo1**](docs/Api/ContratoApi.md#inserirarquivo1) | **POST** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos | Inserir Documento de Contrato
*ContratoApi* | [**inserirContrato**](docs/Api/ContratoApi.md#inserircontrato) | **POST** /v1/orgaos/{cnpj}/contratos | Inserir Contrato
*ContratoApi* | [**recuperarArquivo1**](docs/Api/ContratoApi.md#recuperararquivo1) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Baixar Documento de Contrato
*ContratoApi* | [**recuperarContratoDocumentoQuantidade**](docs/Api/ContratoApi.md#recuperarcontratodocumentoquantidade) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos/quantidade | Consultar Quantidade de Documentos de Contrato
*ContratoApi* | [**recuperarInformacoesDocumentosContrato**](docs/Api/ContratoApi.md#recuperarinformacoesdocumentoscontrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos | Consultar Documentos de Contrato
*ContratoApi* | [**removerContrato**](docs/Api/ContratoApi.md#removercontrato) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial} | Excluir Contrato
*ContratoApi* | [**removerDocumentoContrato1**](docs/Api/ContratoApi.md#removerdocumentocontrato1) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Excluir Documento de Contrato
*ContratoApi* | [**retificarContrato**](docs/Api/ContratoApi.md#retificarcontrato) | **PUT** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial} | Retificar Contrato
*CredenciamentoApi* | [**criarUsuarioCredenciamentoDeferido**](docs/Api/CredenciamentoApi.md#criarusuariocredenciamentodeferido) | **POST** /v1/credenciamentos/{ano}/{sequencial}/criarUsuario | Criar Usuário Credenciamento
*CredenciamentoApi* | [**incluirCredenciamento**](docs/Api/CredenciamentoApi.md#incluircredenciamento) | **POST** /v1/credenciamentos | Inserir Credencimento
*CredenciamentoApi* | [**recuperarCredenciamento**](docs/Api/CredenciamentoApi.md#recuperarcredenciamento) | **GET** /v1/credenciamentos/{ano}/{sequencial} | Consultar Credencimento
*CredenciamentoApi* | [**recuperarCredenciamentoResponsavel**](docs/Api/CredenciamentoApi.md#recuperarcredenciamentoresponsavel) | **GET** /v1/credenciamentos/{ano}/{sequencial}/responsaveis | Consultar Credencimento Responsavel
*CredenciamentoApi* | [**recuperarCredenciamentos**](docs/Api/CredenciamentoApi.md#recuperarcredenciamentos) | **GET** /v1/credenciamentos | Consultar Credencimentos
*CredenciamentoApi* | [**recuperarQuantidadeCredenciamentos**](docs/Api/CredenciamentoApi.md#recuperarquantidadecredenciamentos) | **GET** /v1/credenciamentos/quantidade | Consultar Quantidade Credencimentos
*CredenciamentoApi* | [**retificarParcialmenteCredenciamento**](docs/Api/CredenciamentoApi.md#retificarparcialmentecredenciamento) | **PATCH** /v1/credenciamentos/{ano}/{sequencial} | Retificar Parcialmente Credenciamento
*LoginNicoApi* | [**recuperarToken**](docs/Api/LoginNicoApi.md#recuperartoken) | **POST** /v1/login-unico/token | Recuperar token
*PlanoDeContrataoApi* | [**consultarPlanoComItens**](docs/Api/PlanoDeContrataoApi.md#consultarplanocomitens) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/plano | Consultar Plano de Contratação com Itens
*PlanoDeContrataoApi* | [**consultarPlanoConsolidado**](docs/Api/PlanoDeContrataoApi.md#consultarplanoconsolidado) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/consolidado | Consultar Plano de Contratação Consolidado
*PlanoDeContrataoApi* | [**incluirPlano**](docs/Api/PlanoDeContrataoApi.md#incluirplano) | **POST** /v1/orgaos/{cnpj}/pca | Inserir Plano de Contratação
*PlanoDeContrataoApi* | [**incluirPlanoContratacaoItem**](docs/Api/PlanoDeContrataoApi.md#incluirplanocontratacaoitem) | **POST** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Inserir itens de Plano de Contratação
*PlanoDeContrataoApi* | [**recuperarDadosOrgaoPca**](docs/Api/PlanoDeContrataoApi.md#recuperardadosorgaopca) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/consolidado | Consultar Planos de Contratação Consolidados por Órgão e Ano
*PlanoDeContrataoApi* | [**recuperarDadosOrgaoPcaQuantidade**](docs/Api/PlanoDeContrataoApi.md#recuperardadosorgaopcaquantidade) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/quantidade | Consultar Quantidade de Planos de Contratação
*PlanoDeContrataoApi* | [**recuperarDadosOrgaoPcaUnidades**](docs/Api/PlanoDeContrataoApi.md#recuperardadosorgaopcaunidades) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/consolidado/unidades | Consultar Planos de Contratação Consolidados das Unidades por Órgão e Ano
*PlanoDeContrataoApi* | [**recuperarDadosPcaItensCategoria**](docs/Api/PlanoDeContrataoApi.md#recuperardadospcaitenscategoria) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Consultar Itens do Plano de Contratação
*PlanoDeContrataoApi* | [**recuperarDadosPcaItensQuantidadeItens**](docs/Api/PlanoDeContrataoApi.md#recuperardadospcaitensquantidadeitens) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/quantidade | Consultar Quantidade de Itens do Plano de Contratação
*PlanoDeContrataoApi* | [**recuperarItensPlanoPorContratacao**](docs/Api/PlanoDeContrataoApi.md#recuperaritensplanoporcontratacao) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/contratacao | Retornar Itens de Plano de Contratação por número da Contratação
*PlanoDeContrataoApi* | [**recuperarSequenciaisDoPlano**](docs/Api/PlanoDeContrataoApi.md#recuperarsequenciaisdoplano) | **GET** /v1/orgaos/{cnpj}/pca/{uasg}/{ano}/sequenciaisplano | 
*PlanoDeContrataoApi* | [**recuperarValoresCategoriaItem**](docs/Api/PlanoDeContrataoApi.md#recuperarvalorescategoriaitem) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/valorescategoriaitem | Consultar Valores de um Plano de Contratação por Categoria
*PlanoDeContrataoApi* | [**recuperarValoresCategoriaItem1**](docs/Api/PlanoDeContrataoApi.md#recuperarvalorescategoriaitem1) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/valorescategoriaitem | Consultar Valores de Planos de Contratação de um Órgão por Categoria
*PlanoDeContrataoApi* | [**removerItemPlano**](docs/Api/PlanoDeContrataoApi.md#removeritemplano) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/{numeroItem} | Excluir Item de Plano de Contratação
*PlanoDeContrataoApi* | [**removerItensPlano**](docs/Api/PlanoDeContrataoApi.md#removeritensplano) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Excluir Itens de Plano de Contratação
*PlanoDeContrataoApi* | [**removerItensPlanoPorContratacao**](docs/Api/PlanoDeContrataoApi.md#removeritensplanoporcontratacao) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/contratacao | Excluir Itens de Plano de Contratação por número da Contratação
*PlanoDeContrataoApi* | [**removerPlano**](docs/Api/PlanoDeContrataoApi.md#removerplano) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial} | Excluir Plano de Contratação
*PlanoDeContrataoApi* | [**retificarParcialmentePlanoContratacaoItem**](docs/Api/PlanoDeContrataoApi.md#retificarparcialmenteplanocontratacaoitem) | **PATCH** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/{numeroItem} | Retificar Parcialmente item de Plano de Contratação
*PlanoDeContrataoApi* | [**retificarParcialmentePlanoContratacaoItens**](docs/Api/PlanoDeContrataoApi.md#retificarparcialmenteplanocontratacaoitens) | **PATCH** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Retificar Parcialmente itens de Plano de Contratação
*PlanoDeContrataoApi* | [**retornarPlanosTodasUnidadesDoOrgaoCsv**](docs/Api/PlanoDeContrataoApi.md#retornarplanostodasunidadesdoorgaocsv) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/csv | Baixar CSV dos Planos de Contratação por Órgão e Ano
*RgoApi* | [**consultarEntesPorFiltro**](docs/Api/RgoApi.md#consultarentesporfiltro) | **GET** /v1/orgaos/ | Consultar Órgão por Filtro
*RgoApi* | [**postEnteGoverno**](docs/Api/RgoApi.md#postentegoverno) | **POST** /v1/orgaos | Inserir Órgão
*RgoApi* | [**putEnteGoverno**](docs/Api/RgoApi.md#putentegoverno) | **PUT** /v1/orgaos | Atualizar Órgão
*RgoApi* | [**recuperarEnte**](docs/Api/RgoApi.md#recuperarente) | **GET** /v1/orgaos/{cnpj} | Consultar Órgão por CNPJ
*RgoApi* | [**recuperarEnte1**](docs/Api/RgoApi.md#recuperarente1) | **GET** /v1/orgaos/id/{orgaoId} | Consultar Órgão por ID
*TermoDeContratoApi* | [**inserirArquivo**](docs/Api/TermoDeContratoApi.md#inserirarquivo) | **POST** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos | Inserir Documento de Termo de Contrato
*TermoDeContratoApi* | [**inserirTermoContrato**](docs/Api/TermoDeContratoApi.md#inserirtermocontrato) | **POST** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos | Inserir Termo de Contrato
*TermoDeContratoApi* | [**recuperarArquivo**](docs/Api/TermoDeContratoApi.md#recuperararquivo) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos/{sequencialDocumento} | Baixar Documento de Termo de Contrato
*TermoDeContratoApi* | [**recuperarInformacoesDocumentosTermoContrato**](docs/Api/TermoDeContratoApi.md#recuperarinformacoesdocumentostermocontrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos | Consultar Documentos de Termo de Contrato
*TermoDeContratoApi* | [**recuperarQuantidadeDocumentosTermoContrato**](docs/Api/TermoDeContratoApi.md#recuperarquantidadedocumentostermocontrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos/quantidade | Consultar Quantidade de Documentos de Termo de Contrato
*TermoDeContratoApi* | [**recuperarQuantidadeTermosContrato**](docs/Api/TermoDeContratoApi.md#recuperarquantidadetermoscontrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/quantidade | Consultar Quantidade de Termos de Contrato
*TermoDeContratoApi* | [**recuperarTermoContrato**](docs/Api/TermoDeContratoApi.md#recuperartermocontrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermoContrato} | Consultar Termo de Contrato
*TermoDeContratoApi* | [**recuperarTermosContrato**](docs/Api/TermoDeContratoApi.md#recuperartermoscontrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos | Consultar Termos de Contrato
*TermoDeContratoApi* | [**removerContrato1**](docs/Api/TermoDeContratoApi.md#removercontrato1) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermoContrato} | Excluir Termo de Contrato
*TermoDeContratoApi* | [**removerDocumentoContrato**](docs/Api/TermoDeContratoApi.md#removerdocumentocontrato) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos/{sequencialDocumento} | Excluir Documento de Termo de Contrato
*TermoDeContratoApi* | [**retificarTermoContrato**](docs/Api/TermoDeContratoApi.md#retificartermocontrato) | **PUT** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermoContrato} | Retificar Termo de Contrato
*UnidadeApi* | [**atualizarUnidadeOrgao**](docs/Api/UnidadeApi.md#atualizarunidadeorgao) | **PUT** /v1/orgaos/{cnpj}/unidades | Atualizar Unidade
*UnidadeApi* | [**recuperarUnidadeOrgao**](docs/Api/UnidadeApi.md#recuperarunidadeorgao) | **GET** /v1/orgaos/{cnpj}/unidades/{codigoUnidade} | Consultar Unidade
*UnidadeApi* | [**recuperarUnidadesOrgao**](docs/Api/UnidadeApi.md#recuperarunidadesorgao) | **GET** /v1/orgaos/{cnpj}/unidades | Consultar Unidades
*UnidadeApi* | [**salvarUnidadeOrgao**](docs/Api/UnidadeApi.md#salvarunidadeorgao) | **POST** /v1/orgaos/{cnpj}/unidades | Inserir Unidade
*UsurioApi* | [**autenticar**](docs/Api/UsurioApi.md#autenticar) | **POST** /v1/usuarios/login | Autenticação/login no sistema
*UsurioApi* | [**delete**](docs/Api/UsurioApi.md#delete) | **DELETE** /v1/usuarios/{id} | Excluir usuário
*UsurioApi* | [**delete1**](docs/Api/UsurioApi.md#delete1) | **DELETE** /v1/usuarios/{id}/orgaos | Excluir Entes Autorizados de um Usuário
*UsurioApi* | [**get**](docs/Api/UsurioApi.md#get) | **GET** /v1/usuarios/{id} | Consultar usuário por ID
*UsurioApi* | [**getByLoginNi**](docs/Api/UsurioApi.md#getbyloginni) | **GET** /v1/usuarios | Consultar usuário por login ou por CPF/CNPJ
*UsurioApi* | [**post**](docs/Api/UsurioApi.md#post) | **POST** /v1/usuarios | Inserir usuário
*UsurioApi* | [**post1**](docs/Api/UsurioApi.md#post1) | **POST** /v1/usuarios/{id}/orgaos | Inserir Entes Autorizados para um Usuário
*UsurioApi* | [**put**](docs/Api/UsurioApi.md#put) | **PUT** /v1/usuarios/{id} | Atualizar usuário

## Models

- [AlterarCompraDTO](docs/Model/AlterarCompraDTO.md)
- [AlterarCompraItemDTO](docs/Model/AlterarCompraItemDTO.md)
- [AlterarCompraItemParcialDTO](docs/Model/AlterarCompraItemParcialDTO.md)
- [AlterarCompraItemResultadoDTO](docs/Model/AlterarCompraItemResultadoDTO.md)
- [AlterarCompraParcialDTO](docs/Model/AlterarCompraParcialDTO.md)
- [AlterarContratoDTO](docs/Model/AlterarContratoDTO.md)
- [AlterarTermoContratoDTO](docs/Model/AlterarTermoContratoDTO.md)
- [AlterarUnidadeOrgaoDTO](docs/Model/AlterarUnidadeOrgaoDTO.md)
- [AlterarUsuarioDTO](docs/Model/AlterarUsuarioDTO.md)
- [AmparoLegal](docs/Model/AmparoLegal.md)
- [AtaRegistroPreco](docs/Model/AtaRegistroPreco.md)
- [AtaRegistroPrecoAlteracaoDTO](docs/Model/AtaRegistroPrecoAlteracaoDTO.md)
- [AtaRegistroPrecoDTO](docs/Model/AtaRegistroPrecoDTO.md)
- [AtaRegistroPrecoInclusaoDTO](docs/Model/AtaRegistroPrecoInclusaoDTO.md)
- [CamposLoginDTO](docs/Model/CamposLoginDTO.md)
- [Categoria](docs/Model/Categoria.md)
- [Compra](docs/Model/Compra.md)
- [CredenciaisDTO](docs/Model/CredenciaisDTO.md)
- [EnteCredenciaisDTO](docs/Model/EnteCredenciaisDTO.md)
- [ErroValidacaoDTO](docs/Model/ErroValidacaoDTO.md)
- [ExclusaoDTO](docs/Model/ExclusaoDTO.md)
- [ExclusaoItemPcaDTO](docs/Model/ExclusaoItemPcaDTO.md)
- [ExclusaoListaItensPcaDTO](docs/Model/ExclusaoListaItensPcaDTO.md)
- [Get400Response](docs/Model/Get400Response.md)
- [IRecuperarPlanoItemDTO](docs/Model/IRecuperarPlanoItemDTO.md)
- [IncluirCompraItemDTO](docs/Model/IncluirCompraItemDTO.md)
- [IncluirCompraItemResultadoDTO](docs/Model/IncluirCompraItemResultadoDTO.md)
- [IncluirContratoDTO](docs/Model/IncluirContratoDTO.md)
- [IncluirCredenciamentoDTO](docs/Model/IncluirCredenciamentoDTO.md)
- [IncluirCredenciamentoResponsavelDTO](docs/Model/IncluirCredenciamentoResponsavelDTO.md)
- [IncluirOrgaoDTO](docs/Model/IncluirOrgaoDTO.md)
- [IncluirPlanoContratacaoDTO](docs/Model/IncluirPlanoContratacaoDTO.md)
- [IncluirPlanoContratacaoItemDTO](docs/Model/IncluirPlanoContratacaoItemDTO.md)
- [IncluirTermoContratoDTO](docs/Model/IncluirTermoContratoDTO.md)
- [IncluirUnidadeOrgaoDTO](docs/Model/IncluirUnidadeOrgaoDTO.md)
- [IncluirUsuarioOrgaoDTO](docs/Model/IncluirUsuarioOrgaoDTO.md)
- [InserirUsuarioDTO](docs/Model/InserirUsuarioDTO.md)
- [Municipio](docs/Model/Municipio.md)
- [OrgaoConsultaDTO](docs/Model/OrgaoConsultaDTO.md)
- [OrgaoEntidade](docs/Model/OrgaoEntidade.md)
- [OrgaoEntidadeDTO](docs/Model/OrgaoEntidadeDTO.md)
- [PaginaRetornoAtaRegistroPrecoDTO](docs/Model/PaginaRetornoAtaRegistroPrecoDTO.md)
- [PaginaRetornoRecuperarContratoDTO](docs/Model/PaginaRetornoRecuperarContratoDTO.md)
- [PlanoContratacaoComItensDTO](docs/Model/PlanoContratacaoComItensDTO.md)
- [PlanoContratacaoItemOrgaoToDTO](docs/Model/PlanoContratacaoItemOrgaoToDTO.md)
- [PlanoContratacaoOrgaoDTO](docs/Model/PlanoContratacaoOrgaoDTO.md)
- [PlanoSequencialConsolidadoDTO](docs/Model/PlanoSequencialConsolidadoDTO.md)
- [RecuperarAmparoLegalDTO](docs/Model/RecuperarAmparoLegalDTO.md)
- [RecuperarAtaRegistroPrecoDTO](docs/Model/RecuperarAtaRegistroPrecoDTO.md)
- [RecuperarCompraDTO](docs/Model/RecuperarCompraDTO.md)
- [RecuperarCompraItemResultadoDTO](docs/Model/RecuperarCompraItemResultadoDTO.md)
- [RecuperarCompraItemSigiloDTO](docs/Model/RecuperarCompraItemSigiloDTO.md)
- [RecuperarContratoDTO](docs/Model/RecuperarContratoDTO.md)
- [RecuperarCredenciamentoDTO](docs/Model/RecuperarCredenciamentoDTO.md)
- [RecuperarCredenciamentoResponsavelDTO](docs/Model/RecuperarCredenciamentoResponsavelDTO.md)
- [RecuperarCredenciamentoUsuarioDTO](docs/Model/RecuperarCredenciamentoUsuarioDTO.md)
- [RecuperarDadosDocumentoAtaDTO](docs/Model/RecuperarDadosDocumentoAtaDTO.md)
- [RecuperarDadosDocumentoCompraDTO](docs/Model/RecuperarDadosDocumentoCompraDTO.md)
- [RecuperarDadosDocumentoContratoDTO](docs/Model/RecuperarDadosDocumentoContratoDTO.md)
- [RecuperarDadosDocumentoTermoContratoDTO](docs/Model/RecuperarDadosDocumentoTermoContratoDTO.md)
- [RecuperarFornecedorDTO](docs/Model/RecuperarFornecedorDTO.md)
- [RecuperarHistoricoAtaDTO](docs/Model/RecuperarHistoricoAtaDTO.md)
- [RecuperarHistoricoCompraDTO](docs/Model/RecuperarHistoricoCompraDTO.md)
- [RecuperarHistoricoContratoDTO](docs/Model/RecuperarHistoricoContratoDTO.md)
- [RecuperarImagemContratacaoItemDTO](docs/Model/RecuperarImagemContratacaoItemDTO.md)
- [RecuperarOrgaoEntidadeDTO](docs/Model/RecuperarOrgaoEntidadeDTO.md)
- [RecuperarTermoContratoDTO](docs/Model/RecuperarTermoContratoDTO.md)
- [RecuperarTokenLoginUnicoDTO](docs/Model/RecuperarTokenLoginUnicoDTO.md)
- [RecuperarUnidadeOrgaoDTO](docs/Model/RecuperarUnidadeOrgaoDTO.md)
- [RecuperarValoresCategoriaItemPcaDTO](docs/Model/RecuperarValoresCategoriaItemPcaDTO.md)
- [RespostaErroValidacaoDTO](docs/Model/RespostaErroValidacaoDTO.md)
- [RetificarParcialCredenciamentoDTO](docs/Model/RetificarParcialCredenciamentoDTO.md)
- [RetificarParcialPlanoContratacaoItemDTO](docs/Model/RetificarParcialPlanoContratacaoItemDTO.md)
- [RetificarParcialPlanoContratacaoListaItensDTO](docs/Model/RetificarParcialPlanoContratacaoListaItensDTO.md)
- [SequenciaisDTO](docs/Model/SequenciaisDTO.md)
- [TipoContrato](docs/Model/TipoContrato.md)
- [UF](docs/Model/UF.md)
- [UnidadeOrgao](docs/Model/UnidadeOrgao.md)
- [UnidadeOrgaoDTO](docs/Model/UnidadeOrgaoDTO.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

css.serpro@serpro.gov.br

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
