# OpenAPI\Client\AtaApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultarHistoricoAta()**](AtaApi.md#consultarHistoricoAta) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/atas/{sequencialAta}/historico | Consultar Histórico de Ata |
| [**consultarHistoricoAtaQuantidade()**](AtaApi.md#consultarHistoricoAtaQuantidade) | **GET** /v1/orgaos/{cnpj}/compras/{ano}/{sequencial}/atas/{sequencialAta}/historico/quantidade | Consultar Quantidade Histórico de Ata |
| [**deleteAta()**](AtaApi.md#deleteAta) | **DELETE** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta} | Excluir Ata de Registro de Preço |
| [**deleteDocumentoAta()**](AtaApi.md#deleteDocumentoAta) | **DELETE** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos/{sequencialDocumento} | Excluir Documento de Ata de Registro de Preço |
| [**inserirArquivo3()**](AtaApi.md#inserirArquivo3) | **POST** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos | Inserir Documento em Ata de Registro de Preço |
| [**inserirAta()**](AtaApi.md#inserirAta) | **POST** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas | Inserir Ata de Registro de Preço |
| [**recuperarArquivo3()**](AtaApi.md#recuperarArquivo3) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos/{sequencialDocumento} | Recuperar Documento de Ata de Registro de Preço |
| [**recuperarAtaDocumentoQuantidade()**](AtaApi.md#recuperarAtaDocumentoQuantidade) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos/quantidade | Consultar Quantidade de Documentos de Ata |
| [**recuperarAtaRegistoPreco()**](AtaApi.md#recuperarAtaRegistoPreco) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta} | Consultar Ata de Registro de Preço |
| [**recuperarAtasPorFiltros()**](AtaApi.md#recuperarAtasPorFiltros) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas | Consultar Atas de Registro de Preço por Compra |
| [**recuperarInformacoesDocumentosAta()**](AtaApi.md#recuperarInformacoesDocumentosAta) | **GET** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta}/arquivos | Consultar Dados de Todos os Documentos de uma Ata de Registro de Preço |
| [**retificarAta()**](AtaApi.md#retificarAta) | **PUT** /v1/orgaos/{cnpj}/compras/{anoCompra}/{sequencialCompra}/atas/{sequencialAta} | Retificar Ata de Registro de Preço |


## `consultarHistoricoAta()`

```php
consultarHistoricoAta($cnpj, $ano, $sequencial, $sequencial_ata, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarHistoricoAtaDTO[]
```

Consultar Histórico de Ata

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_ata** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarHistoricoAtaDTO[]**](../Model/RecuperarHistoricoAtaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultarHistoricoAtaQuantidade()`

```php
consultarHistoricoAtaQuantidade($cnpj, $ano, $sequencial, $sequencial_ata): int
```

Consultar Quantidade Histórico de Ata

### Example

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

try {
    $result = $apiInstance->consultarHistoricoAtaQuantidade($cnpj, $ano, $sequencial, $sequencial_ata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->consultarHistoricoAtaQuantidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_ata** | **int**|  | |

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

## `deleteAta()`

```php
deleteAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $exclusao_dto)
```

Excluir Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int
$exclusao_dto = new \OpenAPI\Client\Model\ExclusaoDTO(); // \OpenAPI\Client\Model\ExclusaoDTO

try {
    $apiInstance->deleteAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->deleteAta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |
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

## `deleteDocumentoAta()`

```php
deleteDocumentoAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $sequencial_documento, $exclusao_dto): object
```

Excluir Documento de Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int
$sequencial_documento = 56; // int
$exclusao_dto = new \OpenAPI\Client\Model\ExclusaoDTO(); // \OpenAPI\Client\Model\ExclusaoDTO

try {
    $result = $apiInstance->deleteDocumentoAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $sequencial_documento, $exclusao_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->deleteDocumentoAta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |
| **sequencial_documento** | **int**|  | |
| **exclusao_dto** | [**\OpenAPI\Client\Model\ExclusaoDTO**](../Model/ExclusaoDTO.md)|  | [optional] |

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

## `inserirArquivo3()`

```php
inserirArquivo3($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $titulo_documento, $tipo_documento, $arquivo): object
```

Inserir Documento em Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int
$titulo_documento = 'titulo_documento_example'; // string
$tipo_documento = 'tipo_documento_example'; // string
$arquivo = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->inserirArquivo3($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $titulo_documento, $tipo_documento, $arquivo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->inserirArquivo3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |
| **titulo_documento** | **string**|  | |
| **tipo_documento** | **string**|  | |
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

## `inserirAta()`

```php
inserirAta($cnpj, $ano_compra, $sequencial_compra, $ata_registro_preco_inclusao_dto): \OpenAPI\Client\Model\AtaRegistroPreco
```

Inserir Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$ata_registro_preco_inclusao_dto = new \OpenAPI\Client\Model\AtaRegistroPrecoInclusaoDTO(); // \OpenAPI\Client\Model\AtaRegistroPrecoInclusaoDTO

try {
    $result = $apiInstance->inserirAta($cnpj, $ano_compra, $sequencial_compra, $ata_registro_preco_inclusao_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->inserirAta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **ata_registro_preco_inclusao_dto** | [**\OpenAPI\Client\Model\AtaRegistroPrecoInclusaoDTO**](../Model/AtaRegistroPrecoInclusaoDTO.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AtaRegistroPreco**](../Model/AtaRegistroPreco.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarArquivo3()`

```php
recuperarArquivo3($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $sequencial_documento, $ignorar_exclusao): \SplFileObject
```

Recuperar Documento de Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int
$sequencial_documento = 56; // int
$ignorar_exclusao = True; // bool

try {
    $result = $apiInstance->recuperarArquivo3($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $sequencial_documento, $ignorar_exclusao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->recuperarArquivo3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |
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

## `recuperarAtaDocumentoQuantidade()`

```php
recuperarAtaDocumentoQuantidade($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata): int
```

Consultar Quantidade de Documentos de Ata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int

try {
    $result = $apiInstance->recuperarAtaDocumentoQuantidade($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->recuperarAtaDocumentoQuantidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |

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

## `recuperarAtaRegistoPreco()`

```php
recuperarAtaRegistoPreco($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata): \OpenAPI\Client\Model\RecuperarAtaRegistroPrecoDTO
```

Consultar Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int

try {
    $result = $apiInstance->recuperarAtaRegistoPreco($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->recuperarAtaRegistoPreco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarAtaRegistroPrecoDTO**](../Model/RecuperarAtaRegistroPrecoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarAtasPorFiltros()`

```php
recuperarAtasPorFiltros($cnpj, $ano_compra, $sequencial_compra, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\PaginaRetornoAtaRegistroPrecoDTO
```

Consultar Atas de Registro de Preço por Compra

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->recuperarAtasPorFiltros($cnpj, $ano_compra, $sequencial_compra, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->recuperarAtasPorFiltros: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginaRetornoAtaRegistroPrecoDTO**](../Model/PaginaRetornoAtaRegistroPrecoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarInformacoesDocumentosAta()`

```php
recuperarInformacoesDocumentosAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarDadosDocumentoAtaDTO[]
```

Consultar Dados de Todos os Documentos de uma Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->recuperarInformacoesDocumentosAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->recuperarInformacoesDocumentosAta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarDadosDocumentoAtaDTO[]**](../Model/RecuperarDadosDocumentoAtaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarAta()`

```php
retificarAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $ata_registro_preco_alteracao_dto): \OpenAPI\Client\Model\AtaRegistroPrecoDTO
```

Retificar Ata de Registro de Preço

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AtaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano_compra = 56; // int
$sequencial_compra = 56; // int
$sequencial_ata = 56; // int
$ata_registro_preco_alteracao_dto = new \OpenAPI\Client\Model\AtaRegistroPrecoAlteracaoDTO(); // \OpenAPI\Client\Model\AtaRegistroPrecoAlteracaoDTO

try {
    $result = $apiInstance->retificarAta($cnpj, $ano_compra, $sequencial_compra, $sequencial_ata, $ata_registro_preco_alteracao_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtaApi->retificarAta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_compra** | **int**|  | |
| **sequencial_compra** | **int**|  | |
| **sequencial_ata** | **int**|  | |
| **ata_registro_preco_alteracao_dto** | [**\OpenAPI\Client\Model\AtaRegistroPrecoAlteracaoDTO**](../Model/AtaRegistroPrecoAlteracaoDTO.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AtaRegistroPrecoDTO**](../Model/AtaRegistroPrecoDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
