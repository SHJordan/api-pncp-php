# OpenAPI\Client\ContratoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultarContrato()**](ContratoApi.md#consultarContrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial} | Consultar Contrato |
| [**consultarContrato1()**](ContratoApi.md#consultarContrato1) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/historico | Consultar Histórico de Contrato |
| [**consultarContrato2()**](ContratoApi.md#consultarContrato2) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/historico/quantidade | Consultar Quantidade Histórico de Contrato |
| [**consultarContratosContratacao()**](ContratoApi.md#consultarContratosContratacao) | **GET** /v1/orgaos/{cnpj}/contratos/contratacao/{anoContratacao}/{sequencialContratacao} | Consultar Contratos de uma Contratação |
| [**inserirArquivo1()**](ContratoApi.md#inserirArquivo1) | **POST** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos | Inserir Documento de Contrato |
| [**inserirContrato()**](ContratoApi.md#inserirContrato) | **POST** /v1/orgaos/{cnpj}/contratos | Inserir Contrato |
| [**recuperarArquivo1()**](ContratoApi.md#recuperarArquivo1) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Baixar Documento de Contrato |
| [**recuperarContratoDocumentoQuantidade()**](ContratoApi.md#recuperarContratoDocumentoQuantidade) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos/quantidade | Consultar Quantidade de Documentos de Contrato |
| [**recuperarInformacoesDocumentosContrato()**](ContratoApi.md#recuperarInformacoesDocumentosContrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos | Consultar Documentos de Contrato |
| [**removerContrato()**](ContratoApi.md#removerContrato) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial} | Excluir Contrato |
| [**removerDocumentoContrato1()**](ContratoApi.md#removerDocumentoContrato1) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/arquivos/{sequencialDocumento} | Excluir Documento de Contrato |
| [**retificarContrato()**](ContratoApi.md#retificarContrato) | **PUT** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial} | Retificar Contrato |


## `consultarContrato()`

```php
consultarContrato($cnpj, $ano, $sequencial): \OpenAPI\Client\Model\RecuperarContratoDTO
```

Consultar Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->consultarContrato($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->consultarContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarContratoDTO**](../Model/RecuperarContratoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultarContrato1()`

```php
consultarContrato1($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarHistoricoContratoDTO[]
```

Consultar Histórico de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContratoApi(
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
    $result = $apiInstance->consultarContrato1($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->consultarContrato1: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\RecuperarHistoricoContratoDTO[]**](../Model/RecuperarHistoricoContratoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultarContrato2()`

```php
consultarContrato2($cnpj, $ano, $sequencial): int
```

Consultar Quantidade Histórico de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->consultarContrato2($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->consultarContrato2: ', $e->getMessage(), PHP_EOL;
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

## `consultarContratosContratacao()`

```php
consultarContratosContratacao($cnpj, $ano_contratacao, $sequencial_contratacao, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\PaginaRetornoRecuperarContratoDTO
```

Consultar Contratos de uma Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano_contratacao = 56; // int
$sequencial_contratacao = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->consultarContratosContratacao($cnpj, $ano_contratacao, $sequencial_contratacao, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->consultarContratosContratacao: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano_contratacao** | **int**|  | |
| **sequencial_contratacao** | **int**|  | |
| **pagina** | **int**|  | |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginaRetornoRecuperarContratoDTO**](../Model/PaginaRetornoRecuperarContratoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inserirArquivo1()`

```php
inserirArquivo1($cnpj, $ano, $sequencial, $titulo_documento, $tipo_documento_id, $arquivo): object
```

Inserir Documento de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContratoApi(
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
    $result = $apiInstance->inserirArquivo1($cnpj, $ano, $sequencial, $titulo_documento, $tipo_documento_id, $arquivo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->inserirArquivo1: ', $e->getMessage(), PHP_EOL;
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

## `inserirContrato()`

```php
inserirContrato($cnpj, $incluir_contrato_dto): object
```

Inserir Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$incluir_contrato_dto = new \OpenAPI\Client\Model\IncluirContratoDTO(); // \OpenAPI\Client\Model\IncluirContratoDTO

try {
    $result = $apiInstance->inserirContrato($cnpj, $incluir_contrato_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->inserirContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **incluir_contrato_dto** | [**\OpenAPI\Client\Model\IncluirContratoDTO**](../Model/IncluirContratoDTO.md)|  | |

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

## `recuperarArquivo1()`

```php
recuperarArquivo1($cnpj, $ano, $sequencial, $sequencial_documento, $ignorar_exclusao): \SplFileObject
```

Baixar Documento de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContratoApi(
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
    $result = $apiInstance->recuperarArquivo1($cnpj, $ano, $sequencial, $sequencial_documento, $ignorar_exclusao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->recuperarArquivo1: ', $e->getMessage(), PHP_EOL;
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

## `recuperarContratoDocumentoQuantidade()`

```php
recuperarContratoDocumentoQuantidade($cnpj, $ano, $sequencial): int
```

Consultar Quantidade de Documentos de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->recuperarContratoDocumentoQuantidade($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->recuperarContratoDocumentoQuantidade: ', $e->getMessage(), PHP_EOL;
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

## `recuperarInformacoesDocumentosContrato()`

```php
recuperarInformacoesDocumentosContrato($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarDadosDocumentoContratoDTO[]
```

Consultar Documentos de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ContratoApi(
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
    $result = $apiInstance->recuperarInformacoesDocumentosContrato($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->recuperarInformacoesDocumentosContrato: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\RecuperarDadosDocumentoContratoDTO[]**](../Model/RecuperarDadosDocumentoContratoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removerContrato()`

```php
removerContrato($cnpj, $ano, $sequencial, $exclusao_dto)
```

Excluir Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContratoApi(
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
    $apiInstance->removerContrato($cnpj, $ano, $sequencial, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->removerContrato: ', $e->getMessage(), PHP_EOL;
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

## `removerDocumentoContrato1()`

```php
removerDocumentoContrato1($cnpj, $ano, $sequencial, $sequencial_documento, $exclusao_dto)
```

Excluir Documento de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContratoApi(
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
    $apiInstance->removerDocumentoContrato1($cnpj, $ano, $sequencial, $sequencial_documento, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->removerDocumentoContrato1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_documento** | **int**|  | |
| **exclusao_dto** | [**\OpenAPI\Client\Model\ExclusaoDTO**](../Model/ExclusaoDTO.md)|  | |

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

## `retificarContrato()`

```php
retificarContrato($cnpj, $ano, $sequencial, $alterar_contrato_dto): object
```

Retificar Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$alterar_contrato_dto = new \OpenAPI\Client\Model\AlterarContratoDTO(); // \OpenAPI\Client\Model\AlterarContratoDTO

try {
    $result = $apiInstance->retificarContrato($cnpj, $ano, $sequencial, $alterar_contrato_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratoApi->retificarContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **alterar_contrato_dto** | [**\OpenAPI\Client\Model\AlterarContratoDTO**](../Model/AlterarContratoDTO.md)|  | |

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
