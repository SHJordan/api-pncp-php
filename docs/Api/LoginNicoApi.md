# OpenAPI\Client\LoginNicoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recuperarToken()**](LoginNicoApi.md#recuperarToken) | **POST** /v1/login-unico/token | Recuperar token |


## `recuperarToken()`

```php
recuperarToken($code): \OpenAPI\Client\Model\RecuperarTokenLoginUnicoDTO
```

Recuperar token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoginNicoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->recuperarToken($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginNicoApi->recuperarToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\RecuperarTokenLoginUnicoDTO**](../Model/RecuperarTokenLoginUnicoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
