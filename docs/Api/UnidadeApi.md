# OpenAPI\Client\UnidadeApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**atualizarUnidadeOrgao()**](UnidadeApi.md#atualizarUnidadeOrgao) | **PUT** /v1/orgaos/{cnpj}/unidades | Atualizar Unidade |
| [**recuperarUnidadeOrgao()**](UnidadeApi.md#recuperarUnidadeOrgao) | **GET** /v1/orgaos/{cnpj}/unidades/{codigoUnidade} | Consultar Unidade |
| [**recuperarUnidadesOrgao()**](UnidadeApi.md#recuperarUnidadesOrgao) | **GET** /v1/orgaos/{cnpj}/unidades | Consultar Unidades |
| [**salvarUnidadeOrgao()**](UnidadeApi.md#salvarUnidadeOrgao) | **POST** /v1/orgaos/{cnpj}/unidades | Inserir Unidade |


## `atualizarUnidadeOrgao()`

```php
atualizarUnidadeOrgao($cnpj, $alterar_unidade_orgao_dto)
```

Atualizar Unidade

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$alterar_unidade_orgao_dto = new \OpenAPI\Client\Model\AlterarUnidadeOrgaoDTO(); // \OpenAPI\Client\Model\AlterarUnidadeOrgaoDTO

try {
    $apiInstance->atualizarUnidadeOrgao($cnpj, $alterar_unidade_orgao_dto);
} catch (Exception $e) {
    echo 'Exception when calling UnidadeApi->atualizarUnidadeOrgao: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **alterar_unidade_orgao_dto** | [**\OpenAPI\Client\Model\AlterarUnidadeOrgaoDTO**](../Model/AlterarUnidadeOrgaoDTO.md)|  | |

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

## `recuperarUnidadeOrgao()`

```php
recuperarUnidadeOrgao($cnpj, $codigo_unidade): \OpenAPI\Client\Model\UnidadeOrgaoDTO
```

Consultar Unidade

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UnidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$codigo_unidade = 'codigo_unidade_example'; // string

try {
    $result = $apiInstance->recuperarUnidadeOrgao($cnpj, $codigo_unidade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnidadeApi->recuperarUnidadeOrgao: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **codigo_unidade** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UnidadeOrgaoDTO**](../Model/UnidadeOrgaoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarUnidadesOrgao()`

```php
recuperarUnidadesOrgao($cnpj): \OpenAPI\Client\Model\UnidadeOrgaoDTO[]
```

Consultar Unidades

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UnidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string

try {
    $result = $apiInstance->recuperarUnidadesOrgao($cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnidadeApi->recuperarUnidadesOrgao: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UnidadeOrgaoDTO[]**](../Model/UnidadeOrgaoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salvarUnidadeOrgao()`

```php
salvarUnidadeOrgao($cnpj, $incluir_unidade_orgao_dto): \OpenAPI\Client\Model\UnidadeOrgaoDTO
```

Inserir Unidade

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnidadeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$incluir_unidade_orgao_dto = new \OpenAPI\Client\Model\IncluirUnidadeOrgaoDTO(); // \OpenAPI\Client\Model\IncluirUnidadeOrgaoDTO

try {
    $result = $apiInstance->salvarUnidadeOrgao($cnpj, $incluir_unidade_orgao_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnidadeApi->salvarUnidadeOrgao: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **incluir_unidade_orgao_dto** | [**\OpenAPI\Client\Model\IncluirUnidadeOrgaoDTO**](../Model/IncluirUnidadeOrgaoDTO.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UnidadeOrgaoDTO**](../Model/UnidadeOrgaoDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
