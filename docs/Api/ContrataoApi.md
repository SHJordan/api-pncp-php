# OpenAPI\Client\ContrataoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultarCompra()**](ContrataoApi.md#consultarCompra) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Consultar Contratação |
| [**consultarCompra1()**](ContrataoApi.md#consultarCompra1) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/historico | Consultar Histórico de Contratação |
| [**consultarQuantidade()**](ContrataoApi.md#consultarQuantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/historico/quantidade | Consultar Quantidade Histórico de Contratação |
| [**getImagem()**](ContrataoApi.md#getImagem) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem/{sequencialImagem} | Recuperar Imagem de um Item de uma Contratação |
| [**getImagemLista()**](ContrataoApi.md#getImagemLista) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem | Recuperar Imagens de um Item de uma Contratação |
| [**incluirCompra()**](ContrataoApi.md#incluirCompra) | **POST** /v1/orgaos/{cnpj}/compras | Inserir Contratação |
| [**incluirCompraItem()**](ContrataoApi.md#incluirCompraItem) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens | Inserir Item de Contratação |
| [**incluirCompraItemResultado()**](ContrataoApi.md#incluirCompraItemResultado) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados | Inserir Resultado de Item de Contratação |
| [**inserirArquivo2()**](ContrataoApi.md#inserirArquivo2) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos | Inserir Documento de Contratação |
| [**inserirImagem()**](ContrataoApi.md#inserirImagem) | **POST** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem | Inserir Imagem de um Item de Contratação |
| [**pesquisarCompraItem()**](ContrataoApi.md#pesquisarCompraItem) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens | Consultar Todos os Itens de Contratação |
| [**recuperarArquivo2()**](ContrataoApi.md#recuperarArquivo2) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Baixar Documento de Contratação |
| [**recuperarCompraDocumentoQuantidade()**](ContrataoApi.md#recuperarCompraDocumentoQuantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos/quantidade | Consultar Quantidade de Documentos de Contratação |
| [**recuperarCompraItem()**](ContrataoApi.md#recuperarCompraItem) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem} | Consultar Item de Contratação |
| [**recuperarCompraItemQuantidade()**](ContrataoApi.md#recuperarCompraItemQuantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/quantidade | Consultar Quantidade Item de Contratação |
| [**recuperarInformacoesDocumentosCompra()**](ContrataoApi.md#recuperarInformacoesDocumentosCompra) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos | Consultar Documentos de Contratação |
| [**recuperarResultado()**](ContrataoApi.md#recuperarResultado) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados/{sequencialResultado} | Consultar Resultado de Item de Contratação |
| [**recuperarResultados()**](ContrataoApi.md#recuperarResultados) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados | Consultar Resultados de Item de Contratação |
| [**removerCompra()**](ContrataoApi.md#removerCompra) | **DELETE** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Excluir Contratação |
| [**removerDocumentoCompra()**](ContrataoApi.md#removerDocumentoCompra) | **DELETE** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Excluir Documento de Contratação |
| [**removerImagem()**](ContrataoApi.md#removerImagem) | **DELETE** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/imagem/{sequencialImagem} | Remover Imagem de um Item de uma Contratação |
| [**retificarCompra()**](ContrataoApi.md#retificarCompra) | **PUT** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Retificar Contratação |
| [**retificarCompraItem()**](ContrataoApi.md#retificarCompraItem) | **PUT** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem} | Retificar Item de Contratação |
| [**retificarCompraItemResultado()**](ContrataoApi.md#retificarCompraItemResultado) | **PUT** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem}/resultados/{sequencialResultado} | Retificar Resultado de Item de Contratação |
| [**retificarParcialmenteCompra()**](ContrataoApi.md#retificarParcialmenteCompra) | **PATCH** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial} | Retificar parcialmente uma Contratação |
| [**retificarParcialmenteCompraItem()**](ContrataoApi.md#retificarParcialmenteCompraItem) | **PATCH** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/itens/{numeroItem} | Retificar Parcialmente um Item de Contratação |


## `consultarCompra()`

```php
consultarCompra($cnpj, $ano, $sequencial): \OpenAPI\Client\Model\RecuperarCompraDTO
```

Consultar Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->consultarCompra($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->consultarCompra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarCompraDTO**](../Model/RecuperarCompraDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultarCompra1()`

```php
consultarCompra1($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarHistoricoCompraDTO[]
```

Consultar Histórico de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->consultarCompra1($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->consultarCompra1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarHistoricoCompraDTO[]**](../Model/RecuperarHistoricoCompraDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultarQuantidade()`

```php
consultarQuantidade($cnpj, $ano, $sequencial): int
```

Consultar Quantidade Histórico de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->consultarQuantidade($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->consultarQuantidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImagem()`

```php
getImagem($cnpj, $ano, $sequencial, $numero_item, $sequencial_imagem): string[]
```

Recuperar Imagem de um Item de uma Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$sequencial_imagem = 56; // int

try {
    $result = $apiInstance->getImagem($cnpj, $ano, $sequencial, $numero_item, $sequencial_imagem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->getImagem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **sequencial_imagem** | **int**|  | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImagemLista()`

```php
getImagemLista($cnpj, $ano, $sequencial, $numero_item): \OpenAPI\Client\Model\RecuperarImagemContratacaoItemDTO[]
```

Recuperar Imagens de um Item de uma Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int

try {
    $result = $apiInstance->getImagemLista($cnpj, $ano, $sequencial, $numero_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->getImagemLista: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarImagemContratacaoItemDTO[]**](../Model/RecuperarImagemContratacaoItemDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incluirCompra()`

```php
incluirCompra($cnpj, $titulo_documento, $tipo_documento_id, $compra, $documento): object
```

Inserir Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$titulo_documento = 'titulo_documento_example'; // string
$tipo_documento_id = 56; // int
$compra = "/path/to/file.txt"; // \SplFileObject | O arquivo com os dados da compra deve utilizar o formato JSON, conforme o exemplo: {  \\\"anoCompra\\\": 2021,  \\\"itensCompra\\\": [    {      \\\"numeroItem\\\": 1,      \\\"materialOuServico\\\": \\\"M\\\",      \\\"tipoBeneficioId\\\": \\\"1\\\",      \\\"incentivoProdutivoBasico\\\": true,      \\\"descricao\\\": \\\"string\\\",      \\\"quantidade\\\": 1,      \\\"unidadeMedida\\\": \\\"string\\\",      \\\"valorUnitarioEstimado\\\": 100.00,      \\\"valorTotal\\\": 100.00,      \\\"orcamentoSigiloso\\\": true,      \\\"criterioJulgamentoId\\\": \\\"1\\\",      \\\"itemCategoriaId\\\": 1,      \\\"patrimonio\\\": \\\"string\\\",      \\\"codigoRegistroImobiliario\\\": \\\"string\\\"    }  ],  \\\"tipoInstrumentoConvocatorioId\\\": \\\"1\\\",  \\\"modalidadeId\\\": \\\"1\\\",  \\\"modoDisputaId\\\": \\\"1\\\",  \\\"numeroCompra\\\": \\\"string\\\",  \\\"numeroProcesso\\\": \\\"string\\\",  \\\"objetoCompra\\\": \\\"string\\\",  \\\"informacaoComplementar\\\": \\\"string\\\",  \\\"amparoLegalId\\\": 1,  \\\"srp\\\": true,  \\\"dataAberturaProposta\\\": \\\"2022-01-18T14:30:01\\\",  \\\"dataEncerramentoProposta\\\": \\\"2022-01-18T14:30:01\\\",  \\\"codigoUnidadeCompradora\\\": \\\"string\\\",  \\\"linkSistemaOrigem\\\": \\\"string\\\",  \\\"justificativaPresencial\\\": \\\"string\\\"}
$documento = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->incluirCompra($cnpj, $titulo_documento, $tipo_documento_id, $compra, $documento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->incluirCompra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **titulo_documento** | **string**|  | |
| **tipo_documento_id** | **int**|  | |
| **compra** | **\SplFileObject****\SplFileObject**| O arquivo com os dados da compra deve utilizar o formato JSON, conforme o exemplo: {  \\\&quot;anoCompra\\\&quot;: 2021,  \\\&quot;itensCompra\\\&quot;: [    {      \\\&quot;numeroItem\\\&quot;: 1,      \\\&quot;materialOuServico\\\&quot;: \\\&quot;M\\\&quot;,      \\\&quot;tipoBeneficioId\\\&quot;: \\\&quot;1\\\&quot;,      \\\&quot;incentivoProdutivoBasico\\\&quot;: true,      \\\&quot;descricao\\\&quot;: \\\&quot;string\\\&quot;,      \\\&quot;quantidade\\\&quot;: 1,      \\\&quot;unidadeMedida\\\&quot;: \\\&quot;string\\\&quot;,      \\\&quot;valorUnitarioEstimado\\\&quot;: 100.00,      \\\&quot;valorTotal\\\&quot;: 100.00,      \\\&quot;orcamentoSigiloso\\\&quot;: true,      \\\&quot;criterioJulgamentoId\\\&quot;: \\\&quot;1\\\&quot;,      \\\&quot;itemCategoriaId\\\&quot;: 1,      \\\&quot;patrimonio\\\&quot;: \\\&quot;string\\\&quot;,      \\\&quot;codigoRegistroImobiliario\\\&quot;: \\\&quot;string\\\&quot;    }  ],  \\\&quot;tipoInstrumentoConvocatorioId\\\&quot;: \\\&quot;1\\\&quot;,  \\\&quot;modalidadeId\\\&quot;: \\\&quot;1\\\&quot;,  \\\&quot;modoDisputaId\\\&quot;: \\\&quot;1\\\&quot;,  \\\&quot;numeroCompra\\\&quot;: \\\&quot;string\\\&quot;,  \\\&quot;numeroProcesso\\\&quot;: \\\&quot;string\\\&quot;,  \\\&quot;objetoCompra\\\&quot;: \\\&quot;string\\\&quot;,  \\\&quot;informacaoComplementar\\\&quot;: \\\&quot;string\\\&quot;,  \\\&quot;amparoLegalId\\\&quot;: 1,  \\\&quot;srp\\\&quot;: true,  \\\&quot;dataAberturaProposta\\\&quot;: \\\&quot;2022-01-18T14:30:01\\\&quot;,  \\\&quot;dataEncerramentoProposta\\\&quot;: \\\&quot;2022-01-18T14:30:01\\\&quot;,  \\\&quot;codigoUnidadeCompradora\\\&quot;: \\\&quot;string\\\&quot;,  \\\&quot;linkSistemaOrigem\\\&quot;: \\\&quot;string\\\&quot;,  \\\&quot;justificativaPresencial\\\&quot;: \\\&quot;string\\\&quot;} | |
| **documento** | **\SplFileObject****\SplFileObject**|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incluirCompraItem()`

```php
incluirCompraItem($cnpj, $ano, $sequencial, $incluir_compra_item_dto): object[]
```

Inserir Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$incluir_compra_item_dto = array(new \OpenAPI\Client\Model\IncluirCompraItemDTO()); // \OpenAPI\Client\Model\IncluirCompraItemDTO[]

try {
    $result = $apiInstance->incluirCompraItem($cnpj, $ano, $sequencial, $incluir_compra_item_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->incluirCompraItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **incluir_compra_item_dto** | [**\OpenAPI\Client\Model\IncluirCompraItemDTO[]**](../Model/IncluirCompraItemDTO.md)|  | |

### Return type

**object[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incluirCompraItemResultado()`

```php
incluirCompraItemResultado($cnpj, $ano, $sequencial, $numero_item, $incluir_compra_item_resultado_dto): object
```

Inserir Resultado de Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$incluir_compra_item_resultado_dto = new \OpenAPI\Client\Model\IncluirCompraItemResultadoDTO(); // \OpenAPI\Client\Model\IncluirCompraItemResultadoDTO

try {
    $result = $apiInstance->incluirCompraItemResultado($cnpj, $ano, $sequencial, $numero_item, $incluir_compra_item_resultado_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->incluirCompraItemResultado: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **incluir_compra_item_resultado_dto** | [**\OpenAPI\Client\Model\IncluirCompraItemResultadoDTO**](../Model/IncluirCompraItemResultadoDTO.md)|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inserirArquivo2()`

```php
inserirArquivo2($cnpj, $ano, $sequencial, $titulo_documento, $tipo_documento_id, $arquivo): object
```

Inserir Documento de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$titulo_documento = 'titulo_documento_example'; // string
$tipo_documento_id = 56; // int
$arquivo = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->inserirArquivo2($cnpj, $ano, $sequencial, $titulo_documento, $tipo_documento_id, $arquivo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->inserirArquivo2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **titulo_documento** | **string**|  | |
| **tipo_documento_id** | **int**|  | |
| **arquivo** | **\SplFileObject****\SplFileObject**|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inserirImagem()`

```php
inserirImagem($cnpj, $ano, $sequencial, $numero_item, $texto_alternativo_imagem, $imagem, $titulo_imagem, $legenda_imagem): object
```

Inserir Imagem de um Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$texto_alternativo_imagem = 'texto_alternativo_imagem_example'; // string
$imagem = "/path/to/file.txt"; // \SplFileObject
$titulo_imagem = 'titulo_imagem_example'; // string
$legenda_imagem = 'legenda_imagem_example'; // string

try {
    $result = $apiInstance->inserirImagem($cnpj, $ano, $sequencial, $numero_item, $texto_alternativo_imagem, $imagem, $titulo_imagem, $legenda_imagem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->inserirImagem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **texto_alternativo_imagem** | **string**|  | |
| **imagem** | **\SplFileObject****\SplFileObject**|  | |
| **titulo_imagem** | **string**|  | [optional] |
| **legenda_imagem** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pesquisarCompraItem()`

```php
pesquisarCompraItem($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarCompraItemSigiloDTO[]
```

Consultar Todos os Itens de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->pesquisarCompraItem($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->pesquisarCompraItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarCompraItemSigiloDTO[]**](../Model/RecuperarCompraItemSigiloDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarArquivo2()`

```php
recuperarArquivo2($cnpj, $ano, $sequencial, $sequencial_documento, $ignorar_exclusao): \SplFileObject
```

Baixar Documento de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_documento = 56; // int
$ignorar_exclusao = True; // bool

try {
    $result = $apiInstance->recuperarArquivo2($cnpj, $ano, $sequencial, $sequencial_documento, $ignorar_exclusao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->recuperarArquivo2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_documento** | **int**|  | |
| **ignorar_exclusao** | **bool**|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarCompraDocumentoQuantidade()`

```php
recuperarCompraDocumentoQuantidade($cnpj, $ano, $sequencial): int
```

Consultar Quantidade de Documentos de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->recuperarCompraDocumentoQuantidade($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->recuperarCompraDocumentoQuantidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarCompraItem()`

```php
recuperarCompraItem($cnpj, $ano, $sequencial, $numero_item): \OpenAPI\Client\Model\RecuperarCompraItemSigiloDTO
```

Consultar Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int

try {
    $result = $apiInstance->recuperarCompraItem($cnpj, $ano, $sequencial, $numero_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->recuperarCompraItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarCompraItemSigiloDTO**](../Model/RecuperarCompraItemSigiloDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarCompraItemQuantidade()`

```php
recuperarCompraItemQuantidade($cnpj, $ano, $sequencial): int
```

Consultar Quantidade Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->recuperarCompraItemQuantidade($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->recuperarCompraItemQuantidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarInformacoesDocumentosCompra()`

```php
recuperarInformacoesDocumentosCompra($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarDadosDocumentoCompraDTO[]
```

Consultar Documentos de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->recuperarInformacoesDocumentosCompra($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->recuperarInformacoesDocumentosCompra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarDadosDocumentoCompraDTO[]**](../Model/RecuperarDadosDocumentoCompraDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarResultado()`

```php
recuperarResultado($cnpj, $ano, $sequencial, $numero_item, $sequencial_resultado): \OpenAPI\Client\Model\RecuperarCompraItemResultadoDTO
```

Consultar Resultado de Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$sequencial_resultado = 56; // int

try {
    $result = $apiInstance->recuperarResultado($cnpj, $ano, $sequencial, $numero_item, $sequencial_resultado);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->recuperarResultado: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **sequencial_resultado** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarCompraItemResultadoDTO**](../Model/RecuperarCompraItemResultadoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarResultados()`

```php
recuperarResultados($cnpj, $ano, $sequencial, $numero_item): \OpenAPI\Client\Model\RecuperarCompraItemResultadoDTO[]
```

Consultar Resultados de Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int

try {
    $result = $apiInstance->recuperarResultados($cnpj, $ano, $sequencial, $numero_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->recuperarResultados: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarCompraItemResultadoDTO[]**](../Model/RecuperarCompraItemResultadoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removerCompra()`

```php
removerCompra($cnpj, $ano, $sequencial, $exclusao_dto)
```

Excluir Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$exclusao_dto = new \OpenAPI\Client\Model\ExclusaoDTO(); // \OpenAPI\Client\Model\ExclusaoDTO

try {
    $apiInstance->removerCompra($cnpj, $ano, $sequencial, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->removerCompra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **exclusao_dto** | [**\OpenAPI\Client\Model\ExclusaoDTO**](../Model/ExclusaoDTO.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removerDocumentoCompra()`

```php
removerDocumentoCompra($cnpj, $ano, $sequencial, $sequencial_documento, $exclusao_dto)
```

Excluir Documento de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_documento = 56; // int
$exclusao_dto = new \OpenAPI\Client\Model\ExclusaoDTO(); // \OpenAPI\Client\Model\ExclusaoDTO

try {
    $apiInstance->removerDocumentoCompra($cnpj, $ano, $sequencial, $sequencial_documento, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->removerDocumentoCompra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_documento** | **int**|  | |
| **exclusao_dto** | [**\OpenAPI\Client\Model\ExclusaoDTO**](../Model/ExclusaoDTO.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removerImagem()`

```php
removerImagem($cnpj, $ano, $sequencial, $numero_item, $sequencial_imagem, $exclusao_dto)
```

Remover Imagem de um Item de uma Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$sequencial_imagem = 56; // int
$exclusao_dto = new \OpenAPI\Client\Model\ExclusaoDTO(); // \OpenAPI\Client\Model\ExclusaoDTO

try {
    $apiInstance->removerImagem($cnpj, $ano, $sequencial, $numero_item, $sequencial_imagem, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->removerImagem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **sequencial_imagem** | **int**|  | |
| **exclusao_dto** | [**\OpenAPI\Client\Model\ExclusaoDTO**](../Model/ExclusaoDTO.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarCompra()`

```php
retificarCompra($cnpj, $ano, $sequencial, $alterar_compra_dto)
```

Retificar Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$alterar_compra_dto = new \OpenAPI\Client\Model\AlterarCompraDTO(); // \OpenAPI\Client\Model\AlterarCompraDTO

try {
    $apiInstance->retificarCompra($cnpj, $ano, $sequencial, $alterar_compra_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->retificarCompra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **alterar_compra_dto** | [**\OpenAPI\Client\Model\AlterarCompraDTO**](../Model/AlterarCompraDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarCompraItem()`

```php
retificarCompraItem($cnpj, $ano, $sequencial, $numero_item, $alterar_compra_item_dto): object
```

Retificar Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$alterar_compra_item_dto = new \OpenAPI\Client\Model\AlterarCompraItemDTO(); // \OpenAPI\Client\Model\AlterarCompraItemDTO

try {
    $result = $apiInstance->retificarCompraItem($cnpj, $ano, $sequencial, $numero_item, $alterar_compra_item_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->retificarCompraItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **alterar_compra_item_dto** | [**\OpenAPI\Client\Model\AlterarCompraItemDTO**](../Model/AlterarCompraItemDTO.md)|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarCompraItemResultado()`

```php
retificarCompraItemResultado($cnpj, $ano, $sequencial, $numero_item, $sequencial_resultado, $alterar_compra_item_resultado_dto): object
```

Retificar Resultado de Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$sequencial_resultado = 56; // int
$alterar_compra_item_resultado_dto = new \OpenAPI\Client\Model\AlterarCompraItemResultadoDTO(); // \OpenAPI\Client\Model\AlterarCompraItemResultadoDTO

try {
    $result = $apiInstance->retificarCompraItemResultado($cnpj, $ano, $sequencial, $numero_item, $sequencial_resultado, $alterar_compra_item_resultado_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->retificarCompraItemResultado: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **sequencial_resultado** | **int**|  | |
| **alterar_compra_item_resultado_dto** | [**\OpenAPI\Client\Model\AlterarCompraItemResultadoDTO**](../Model/AlterarCompraItemResultadoDTO.md)|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarParcialmenteCompra()`

```php
retificarParcialmenteCompra($cnpj, $ano, $sequencial, $alterar_compra_parcial_dto)
```

Retificar parcialmente uma Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$alterar_compra_parcial_dto = new \OpenAPI\Client\Model\AlterarCompraParcialDTO(); // \OpenAPI\Client\Model\AlterarCompraParcialDTO

try {
    $apiInstance->retificarParcialmenteCompra($cnpj, $ano, $sequencial, $alterar_compra_parcial_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->retificarParcialmenteCompra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **alterar_compra_parcial_dto** | [**\OpenAPI\Client\Model\AlterarCompraParcialDTO**](../Model/AlterarCompraParcialDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarParcialmenteCompraItem()`

```php
retificarParcialmenteCompraItem($cnpj, $ano, $sequencial, $numero_item, $alterar_compra_item_parcial_dto)
```

Retificar Parcialmente um Item de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$alterar_compra_item_parcial_dto = new \OpenAPI\Client\Model\AlterarCompraItemParcialDTO(); // \OpenAPI\Client\Model\AlterarCompraItemParcialDTO

try {
    $apiInstance->retificarParcialmenteCompraItem($cnpj, $ano, $sequencial, $numero_item, $alterar_compra_item_parcial_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContrataoApi->retificarParcialmenteCompraItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **alterar_compra_item_parcial_dto** | [**\OpenAPI\Client\Model\AlterarCompraItemParcialDTO**](../Model/AlterarCompraItemParcialDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
