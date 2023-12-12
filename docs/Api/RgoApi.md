# OpenAPI\Client\RgoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultarEntesPorFiltro()**](RgoApi.md#consultarEntesPorFiltro) | **GET** /v1/orgaos/ | Consultar Órgão por Filtro |
| [**postEnteGoverno()**](RgoApi.md#postEnteGoverno) | **POST** /v1/orgaos | Inserir Órgão |
| [**putEnteGoverno()**](RgoApi.md#putEnteGoverno) | **PUT** /v1/orgaos | Atualizar Órgão |
| [**recuperarEnte()**](RgoApi.md#recuperarEnte) | **GET** /v1/orgaos/{cnpj} | Consultar Órgão por CNPJ |
| [**recuperarEnte1()**](RgoApi.md#recuperarEnte1) | **GET** /v1/orgaos/id/{orgaoId} | Consultar Órgão por ID |


## `consultarEntesPorFiltro()`

```php
consultarEntesPorFiltro($razao_social, $pagina): \OpenAPI\Client\Model\OrgaoConsultaDTO[]
```

Consultar Órgão por Filtro

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$razao_social = 'razao_social_example'; // string | Razão social com pelo menos 3 caracteres
$pagina = 1; // int | Índice de paginação iniciando com valor = 1

try {
    $result = $apiInstance->consultarEntesPorFiltro($razao_social, $pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RgoApi->consultarEntesPorFiltro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **razao_social** | **string**| Razão social com pelo menos 3 caracteres | |
| **pagina** | **int**| Índice de paginação iniciando com valor &#x3D; 1 | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\OrgaoConsultaDTO[]**](../Model/OrgaoConsultaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnteGoverno()`

```php
postEnteGoverno($incluir_orgao_dto): object
```

Inserir Órgão

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_orgao_dto = new \OpenAPI\Client\Model\IncluirOrgaoDTO(); // \OpenAPI\Client\Model\IncluirOrgaoDTO

try {
    $result = $apiInstance->postEnteGoverno($incluir_orgao_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RgoApi->postEnteGoverno: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_orgao_dto** | [**\OpenAPI\Client\Model\IncluirOrgaoDTO**](../Model/IncluirOrgaoDTO.md)|  | |

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

## `putEnteGoverno()`

```php
putEnteGoverno($incluir_orgao_dto): object
```

Atualizar Órgão

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incluir_orgao_dto = new \OpenAPI\Client\Model\IncluirOrgaoDTO(); // \OpenAPI\Client\Model\IncluirOrgaoDTO

try {
    $result = $apiInstance->putEnteGoverno($incluir_orgao_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RgoApi->putEnteGoverno: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incluir_orgao_dto** | [**\OpenAPI\Client\Model\IncluirOrgaoDTO**](../Model/IncluirOrgaoDTO.md)|  | |

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

## `recuperarEnte()`

```php
recuperarEnte($cnpj): \OpenAPI\Client\Model\OrgaoConsultaDTO
```

Consultar Órgão por CNPJ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string

try {
    $result = $apiInstance->recuperarEnte($cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RgoApi->recuperarEnte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OrgaoConsultaDTO**](../Model/OrgaoConsultaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarEnte1()`

```php
recuperarEnte1($orgao_id): \OpenAPI\Client\Model\OrgaoConsultaDTO
```

Consultar Órgão por ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orgao_id = 56; // int

try {
    $result = $apiInstance->recuperarEnte1($orgao_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RgoApi->recuperarEnte1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orgao_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\OrgaoConsultaDTO**](../Model/OrgaoConsultaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
