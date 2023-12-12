# OpenAPI\Client\UsurioApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**autenticar()**](UsurioApi.md#autenticar) | **POST** /v1/usuarios/login | Autenticação/login no sistema |
| [**delete()**](UsurioApi.md#delete) | **DELETE** /v1/usuarios/{id} | Excluir usuário |
| [**delete1()**](UsurioApi.md#delete1) | **DELETE** /v1/usuarios/{id}/orgaos | Excluir Entes Autorizados de um Usuário |
| [**get()**](UsurioApi.md#get) | **GET** /v1/usuarios/{id} | Consultar usuário por ID |
| [**getByLoginNi()**](UsurioApi.md#getByLoginNi) | **GET** /v1/usuarios | Consultar usuário por login ou por CPF/CNPJ |
| [**post()**](UsurioApi.md#post) | **POST** /v1/usuarios | Inserir usuário |
| [**post1()**](UsurioApi.md#post1) | **POST** /v1/usuarios/{id}/orgaos | Inserir Entes Autorizados para um Usuário |
| [**put()**](UsurioApi.md#put) | **PUT** /v1/usuarios/{id} | Atualizar usuário |


## `autenticar()`

```php
autenticar($campos_login_dto)
```

Autenticação/login no sistema

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campos_login_dto = new \OpenAPI\Client\Model\CamposLoginDTO(); // \OpenAPI\Client\Model\CamposLoginDTO

try {
    $apiInstance->autenticar($campos_login_dto);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->autenticar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campos_login_dto** | [**\OpenAPI\Client\Model\CamposLoginDTO**](../Model/CamposLoginDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($id)
```

Excluir usuário

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->delete($id);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delete1()`

```php
delete1($id, $incluir_usuario_orgao_dto)
```

Excluir Entes Autorizados de um Usuário

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$incluir_usuario_orgao_dto = new \OpenAPI\Client\Model\IncluirUsuarioOrgaoDTO(); // \OpenAPI\Client\Model\IncluirUsuarioOrgaoDTO

try {
    $apiInstance->delete1($id, $incluir_usuario_orgao_dto);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->delete1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **incluir_usuario_orgao_dto** | [**\OpenAPI\Client\Model\IncluirUsuarioOrgaoDTO**](../Model/IncluirUsuarioOrgaoDTO.md)|  | |

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

## `get()`

```php
get($id): \OpenAPI\Client\Model\CredenciaisDTO
```

Consultar usuário por ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->get($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\CredenciaisDTO**](../Model/CredenciaisDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByLoginNi()`

```php
getByLoginNi($login, $cpf_cnpj): \OpenAPI\Client\Model\CredenciaisDTO[]
```

Consultar usuário por login ou por CPF/CNPJ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login = 'login_example'; // string
$cpf_cnpj = 'cpf_cnpj_example'; // string

try {
    $result = $apiInstance->getByLoginNi($login, $cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->getByLoginNi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login** | **string**|  | [optional] |
| **cpf_cnpj** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CredenciaisDTO[]**](../Model/CredenciaisDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `post()`

```php
post($inserir_usuario_dto): \OpenAPI\Client\Model\CredenciaisDTO
```

Inserir usuário

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inserir_usuario_dto = new \OpenAPI\Client\Model\InserirUsuarioDTO(); // \OpenAPI\Client\Model\InserirUsuarioDTO

try {
    $result = $apiInstance->post($inserir_usuario_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inserir_usuario_dto** | [**\OpenAPI\Client\Model\InserirUsuarioDTO**](../Model/InserirUsuarioDTO.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CredenciaisDTO**](../Model/CredenciaisDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `post1()`

```php
post1($id, $incluir_usuario_orgao_dto)
```

Inserir Entes Autorizados para um Usuário

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$incluir_usuario_orgao_dto = new \OpenAPI\Client\Model\IncluirUsuarioOrgaoDTO(); // \OpenAPI\Client\Model\IncluirUsuarioOrgaoDTO

try {
    $apiInstance->post1($id, $incluir_usuario_orgao_dto);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->post1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **incluir_usuario_orgao_dto** | [**\OpenAPI\Client\Model\IncluirUsuarioOrgaoDTO**](../Model/IncluirUsuarioOrgaoDTO.md)|  | |

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

## `put()`

```php
put($id, $alterar_usuario_dto)
```

Atualizar usuário

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsurioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$alterar_usuario_dto = new \OpenAPI\Client\Model\AlterarUsuarioDTO(); // \OpenAPI\Client\Model\AlterarUsuarioDTO

try {
    $apiInstance->put($id, $alterar_usuario_dto);
} catch (Exception $e) {
    echo 'Exception when calling UsurioApi->put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **alterar_usuario_dto** | [**\OpenAPI\Client\Model\AlterarUsuarioDTO**](../Model/AlterarUsuarioDTO.md)|  | |

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
