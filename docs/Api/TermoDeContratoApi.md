# OpenAPI\Client\TermoDeContratoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inserirArquivo()**](TermoDeContratoApi.md#inserirArquivo) | **POST** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos | Inserir Documento de Termo de Contrato |
| [**inserirTermoContrato()**](TermoDeContratoApi.md#inserirTermoContrato) | **POST** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos | Inserir Termo de Contrato |
| [**recuperarArquivo()**](TermoDeContratoApi.md#recuperarArquivo) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos/{sequencialDocumento} | Baixar Documento de Termo de Contrato |
| [**recuperarInformacoesDocumentosTermoContrato()**](TermoDeContratoApi.md#recuperarInformacoesDocumentosTermoContrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos | Consultar Documentos de Termo de Contrato |
| [**recuperarQuantidadeDocumentosTermoContrato()**](TermoDeContratoApi.md#recuperarQuantidadeDocumentosTermoContrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos/quantidade | Consultar Quantidade de Documentos de Termo de Contrato |
| [**recuperarQuantidadeTermosContrato()**](TermoDeContratoApi.md#recuperarQuantidadeTermosContrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/quantidade | Consultar Quantidade de Termos de Contrato |
| [**recuperarTermoContrato()**](TermoDeContratoApi.md#recuperarTermoContrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermoContrato} | Consultar Termo de Contrato |
| [**recuperarTermosContrato()**](TermoDeContratoApi.md#recuperarTermosContrato) | **GET** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos | Consultar Termos de Contrato |
| [**removerContrato1()**](TermoDeContratoApi.md#removerContrato1) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermoContrato} | Excluir Termo de Contrato |
| [**removerDocumentoContrato()**](TermoDeContratoApi.md#removerDocumentoContrato) | **DELETE** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermo}/arquivos/{sequencialDocumento} | Excluir Documento de Termo de Contrato |
| [**retificarTermoContrato()**](TermoDeContratoApi.md#retificarTermoContrato) | **PUT** /v1/orgaos/{cnpj}/contratos/{ano}/{sequencial}/termos/{sequencialTermoContrato} | Retificar Termo de Contrato |


## `inserirArquivo()`

```php
inserirArquivo($cnpj, $ano, $sequencial, $sequencial_termo, $titulo_documento, $tipo_documento_id, $arquivo): object
```

Inserir Documento de Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo = 56; // int
$titulo_documento = 'titulo_documento_example'; // string
$tipo_documento_id = 56; // int
$arquivo = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->inserirArquivo($cnpj, $ano, $sequencial, $sequencial_termo, $titulo_documento, $tipo_documento_id, $arquivo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->inserirArquivo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo** | **int**|  | |
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

## `inserirTermoContrato()`

```php
inserirTermoContrato($cnpj, $ano, $sequencial, $incluir_termo_contrato_dto): object
```

Inserir Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$incluir_termo_contrato_dto = new \OpenAPI\Client\Model\IncluirTermoContratoDTO(); // \OpenAPI\Client\Model\IncluirTermoContratoDTO

try {
    $result = $apiInstance->inserirTermoContrato($cnpj, $ano, $sequencial, $incluir_termo_contrato_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->inserirTermoContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **incluir_termo_contrato_dto** | [**\OpenAPI\Client\Model\IncluirTermoContratoDTO**](../Model/IncluirTermoContratoDTO.md)|  | |

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

## `recuperarArquivo()`

```php
recuperarArquivo($cnpj, $ano, $sequencial, $sequencial_termo, $sequencial_documento, $ignorar_exclusao): \SplFileObject
```

Baixar Documento de Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo = 56; // int
$sequencial_documento = 56; // int
$ignorar_exclusao = True; // bool

try {
    $result = $apiInstance->recuperarArquivo($cnpj, $ano, $sequencial, $sequencial_termo, $sequencial_documento, $ignorar_exclusao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->recuperarArquivo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo** | **int**|  | |
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

## `recuperarInformacoesDocumentosTermoContrato()`

```php
recuperarInformacoesDocumentosTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarDadosDocumentoTermoContratoDTO[]
```

Consultar Documentos de Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->recuperarInformacoesDocumentosTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->recuperarInformacoesDocumentosTermoContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarDadosDocumentoTermoContratoDTO[]**](../Model/RecuperarDadosDocumentoTermoContratoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarQuantidadeDocumentosTermoContrato()`

```php
recuperarQuantidadeDocumentosTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo): int
```

Consultar Quantidade de Documentos de Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo = 56; // int

try {
    $result = $apiInstance->recuperarQuantidadeDocumentosTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->recuperarQuantidadeDocumentosTermoContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo** | **int**|  | |

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

## `recuperarQuantidadeTermosContrato()`

```php
recuperarQuantidadeTermosContrato($cnpj, $ano, $sequencial): int
```

Consultar Quantidade de Termos de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->recuperarQuantidadeTermosContrato($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->recuperarQuantidadeTermosContrato: ', $e->getMessage(), PHP_EOL;
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

## `recuperarTermoContrato()`

```php
recuperarTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo_contrato): \OpenAPI\Client\Model\RecuperarTermoContratoDTO
```

Consultar Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo_contrato = 56; // int

try {
    $result = $apiInstance->recuperarTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo_contrato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->recuperarTermoContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo_contrato** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarTermoContratoDTO**](../Model/RecuperarTermoContratoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarTermosContrato()`

```php
recuperarTermosContrato($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarTermoContratoDTO[]
```

Consultar Termos de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
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
    $result = $apiInstance->recuperarTermosContrato($cnpj, $ano, $sequencial, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->recuperarTermosContrato: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\RecuperarTermoContratoDTO[]**](../Model/RecuperarTermoContratoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removerContrato1()`

```php
removerContrato1($cnpj, $ano, $sequencial, $sequencial_termo_contrato, $exclusao_dto)
```

Excluir Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo_contrato = 56; // int
$exclusao_dto = new \OpenAPI\Client\Model\ExclusaoDTO(); // \OpenAPI\Client\Model\ExclusaoDTO

try {
    $apiInstance->removerContrato1($cnpj, $ano, $sequencial, $sequencial_termo_contrato, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->removerContrato1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo_contrato** | **int**|  | |
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

## `removerDocumentoContrato()`

```php
removerDocumentoContrato($cnpj, $ano, $sequencial, $sequencial_termo, $sequencial_documento, $exclusao_dto)
```

Excluir Documento de Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo = 56; // int
$sequencial_documento = 56; // int
$exclusao_dto = new \OpenAPI\Client\Model\ExclusaoDTO(); // \OpenAPI\Client\Model\ExclusaoDTO

try {
    $apiInstance->removerDocumentoContrato($cnpj, $ano, $sequencial, $sequencial_termo, $sequencial_documento, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->removerDocumentoContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo** | **int**|  | |
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

## `retificarTermoContrato()`

```php
retificarTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo_contrato, $alterar_termo_contrato_dto): object
```

Retificar Termo de Contrato

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TermoDeContratoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$sequencial_termo_contrato = 56; // int
$alterar_termo_contrato_dto = new \OpenAPI\Client\Model\AlterarTermoContratoDTO(); // \OpenAPI\Client\Model\AlterarTermoContratoDTO

try {
    $result = $apiInstance->retificarTermoContrato($cnpj, $ano, $sequencial, $sequencial_termo_contrato, $alterar_termo_contrato_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermoDeContratoApi->retificarTermoContrato: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **sequencial_termo_contrato** | **int**|  | |
| **alterar_termo_contrato_dto** | [**\OpenAPI\Client\Model\AlterarTermoContratoDTO**](../Model/AlterarTermoContratoDTO.md)|  | |

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
