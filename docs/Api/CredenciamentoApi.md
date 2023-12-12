# OpenAPI\Client\CredenciamentoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**criarUsuarioCredenciamentoDeferido()**](CredenciamentoApi.md#criarUsuarioCredenciamentoDeferido) | **POST** /v1/credenciamentos/{ano}/{sequencial}/criarUsuario | Criar Usuário Credenciamento |
| [**incluirCredenciamento()**](CredenciamentoApi.md#incluirCredenciamento) | **POST** /v1/credenciamentos | Inserir Credencimento |
| [**recuperarCredenciamento()**](CredenciamentoApi.md#recuperarCredenciamento) | **GET** /v1/credenciamentos/{ano}/{sequencial} | Consultar Credencimento |
| [**recuperarCredenciamentoResponsavel()**](CredenciamentoApi.md#recuperarCredenciamentoResponsavel) | **GET** /v1/credenciamentos/{ano}/{sequencial}/responsaveis | Consultar Credencimento Responsavel |
| [**recuperarCredenciamentos()**](CredenciamentoApi.md#recuperarCredenciamentos) | **GET** /v1/credenciamentos | Consultar Credencimentos |
| [**recuperarQuantidadeCredenciamentos()**](CredenciamentoApi.md#recuperarQuantidadeCredenciamentos) | **GET** /v1/credenciamentos/quantidade | Consultar Quantidade Credencimentos |
| [**retificarParcialmenteCredenciamento()**](CredenciamentoApi.md#retificarParcialmenteCredenciamento) | **PATCH** /v1/credenciamentos/{ano}/{sequencial} | Retificar Parcialmente Credenciamento |


## `criarUsuarioCredenciamentoDeferido()`

```php
criarUsuarioCredenciamentoDeferido($ano, $sequencial, $retificar_parcial_credenciamento_dto): object
```

Criar Usuário Credenciamento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CredenciamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ano = 56; // int
$sequencial = 56; // int
$retificar_parcial_credenciamento_dto = new \OpenAPI\Client\Model\RetificarParcialCredenciamentoDTO(); // \OpenAPI\Client\Model\RetificarParcialCredenciamentoDTO

try {
    $result = $apiInstance->criarUsuarioCredenciamentoDeferido($ano, $sequencial, $retificar_parcial_credenciamento_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredenciamentoApi->criarUsuarioCredenciamentoDeferido: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **retificar_parcial_credenciamento_dto** | [**\OpenAPI\Client\Model\RetificarParcialCredenciamentoDTO**](../Model/RetificarParcialCredenciamentoDTO.md)|  | |

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

## `incluirCredenciamento()`

```php
incluirCredenciamento($id_token, $incluir_credenciamento_dto): object
```

Inserir Credencimento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CredenciamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_token = 'id_token_example'; // string
$incluir_credenciamento_dto = new \OpenAPI\Client\Model\IncluirCredenciamentoDTO(); // \OpenAPI\Client\Model\IncluirCredenciamentoDTO

try {
    $result = $apiInstance->incluirCredenciamento($id_token, $incluir_credenciamento_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredenciamentoApi->incluirCredenciamento: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_token** | **string**|  | |
| **incluir_credenciamento_dto** | [**\OpenAPI\Client\Model\IncluirCredenciamentoDTO**](../Model/IncluirCredenciamentoDTO.md)|  | |

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

## `recuperarCredenciamento()`

```php
recuperarCredenciamento($ano, $sequencial): \OpenAPI\Client\Model\RecuperarCredenciamentoDTO
```

Consultar Credencimento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CredenciamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->recuperarCredenciamento($ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredenciamentoApi->recuperarCredenciamento: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarCredenciamentoDTO**](../Model/RecuperarCredenciamentoDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarCredenciamentoResponsavel()`

```php
recuperarCredenciamentoResponsavel($ano, $sequencial): \OpenAPI\Client\Model\RecuperarCredenciamentoResponsavelDTO[]
```

Consultar Credencimento Responsavel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CredenciamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->recuperarCredenciamentoResponsavel($ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredenciamentoApi->recuperarCredenciamentoResponsavel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarCredenciamentoResponsavelDTO[]**](../Model/RecuperarCredenciamentoResponsavelDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarCredenciamentos()`

```php
recuperarCredenciamentos($status, $pesquisa, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\RecuperarCredenciamentoDTO[]
```

Consultar Credencimentos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CredenciamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string
$pesquisa = 'pesquisa_example'; // string
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->recuperarCredenciamentos($status, $pesquisa, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredenciamentoApi->recuperarCredenciamentos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**|  | [optional] |
| **pesquisa** | **string**|  | [optional] |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarCredenciamentoDTO[]**](../Model/RecuperarCredenciamentoDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarQuantidadeCredenciamentos()`

```php
recuperarQuantidadeCredenciamentos($status, $pesquisa): int
```

Consultar Quantidade Credencimentos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CredenciamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string
$pesquisa = 'pesquisa_example'; // string

try {
    $result = $apiInstance->recuperarQuantidadeCredenciamentos($status, $pesquisa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredenciamentoApi->recuperarQuantidadeCredenciamentos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**|  | [optional] |
| **pesquisa** | **string**|  | [optional] |

### Return type

**int**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retificarParcialmenteCredenciamento()`

```php
retificarParcialmenteCredenciamento($ano, $sequencial, $id_token, $retificar_parcial_credenciamento_dto)
```

Retificar Parcialmente Credenciamento

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CredenciamentoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ano = 56; // int
$sequencial = 56; // int
$id_token = 'id_token_example'; // string
$retificar_parcial_credenciamento_dto = new \OpenAPI\Client\Model\RetificarParcialCredenciamentoDTO(); // \OpenAPI\Client\Model\RetificarParcialCredenciamentoDTO

try {
    $apiInstance->retificarParcialmenteCredenciamento($ano, $sequencial, $id_token, $retificar_parcial_credenciamento_dto);
} catch (Exception $e) {
    echo 'Exception when calling CredenciamentoApi->retificarParcialmenteCredenciamento: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **id_token** | **string**|  | |
| **retificar_parcial_credenciamento_dto** | [**\OpenAPI\Client\Model\RetificarParcialCredenciamentoDTO**](../Model/RetificarParcialCredenciamentoDTO.md)|  | |

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
