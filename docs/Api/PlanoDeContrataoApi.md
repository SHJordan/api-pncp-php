# OpenAPI\Client\PlanoDeContrataoApi

All URIs are relative to https://treina.pncp.gov.br/api/pncp, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultarPlanoComItens()**](PlanoDeContrataoApi.md#consultarPlanoComItens) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/plano | Consultar Plano de Contratação com Itens |
| [**consultarPlanoConsolidado()**](PlanoDeContrataoApi.md#consultarPlanoConsolidado) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/consolidado | Consultar Plano de Contratação Consolidado |
| [**incluirPlano()**](PlanoDeContrataoApi.md#incluirPlano) | **POST** /v1/orgaos/{cnpj}/pca | Inserir Plano de Contratação |
| [**incluirPlanoContratacaoItem()**](PlanoDeContrataoApi.md#incluirPlanoContratacaoItem) | **POST** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Inserir itens de Plano de Contratação |
| [**recuperarDadosOrgaoPca()**](PlanoDeContrataoApi.md#recuperarDadosOrgaoPca) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/consolidado | Consultar Planos de Contratação Consolidados por Órgão e Ano |
| [**recuperarDadosOrgaoPcaQuantidade()**](PlanoDeContrataoApi.md#recuperarDadosOrgaoPcaQuantidade) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/quantidade | Consultar Quantidade de Planos de Contratação |
| [**recuperarDadosOrgaoPcaUnidades()**](PlanoDeContrataoApi.md#recuperarDadosOrgaoPcaUnidades) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/consolidado/unidades | Consultar Planos de Contratação Consolidados das Unidades por Órgão e Ano |
| [**recuperarDadosPcaItensCategoria()**](PlanoDeContrataoApi.md#recuperarDadosPcaItensCategoria) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Consultar Itens do Plano de Contratação |
| [**recuperarDadosPcaItensQuantidadeItens()**](PlanoDeContrataoApi.md#recuperarDadosPcaItensQuantidadeItens) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/quantidade | Consultar Quantidade de Itens do Plano de Contratação |
| [**recuperarItensPlanoPorContratacao()**](PlanoDeContrataoApi.md#recuperarItensPlanoPorContratacao) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/contratacao | Retornar Itens de Plano de Contratação por número da Contratação |
| [**recuperarSequenciaisDoPlano()**](PlanoDeContrataoApi.md#recuperarSequenciaisDoPlano) | **GET** /v1/orgaos/{cnpj}/pca/{uasg}/{ano}/sequenciaisplano |  |
| [**recuperarValoresCategoriaItem()**](PlanoDeContrataoApi.md#recuperarValoresCategoriaItem) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/valorescategoriaitem | Consultar Valores de um Plano de Contratação por Categoria |
| [**recuperarValoresCategoriaItem1()**](PlanoDeContrataoApi.md#recuperarValoresCategoriaItem1) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/valorescategoriaitem | Consultar Valores de Planos de Contratação de um Órgão por Categoria |
| [**removerItemPlano()**](PlanoDeContrataoApi.md#removerItemPlano) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/{numeroItem} | Excluir Item de Plano de Contratação |
| [**removerItensPlano()**](PlanoDeContrataoApi.md#removerItensPlano) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Excluir Itens de Plano de Contratação |
| [**removerItensPlanoPorContratacao()**](PlanoDeContrataoApi.md#removerItensPlanoPorContratacao) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/contratacao | Excluir Itens de Plano de Contratação por número da Contratação |
| [**removerPlano()**](PlanoDeContrataoApi.md#removerPlano) | **DELETE** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial} | Excluir Plano de Contratação |
| [**retificarParcialmentePlanoContratacaoItem()**](PlanoDeContrataoApi.md#retificarParcialmentePlanoContratacaoItem) | **PATCH** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens/{numeroItem} | Retificar Parcialmente item de Plano de Contratação |
| [**retificarParcialmentePlanoContratacaoItens()**](PlanoDeContrataoApi.md#retificarParcialmentePlanoContratacaoItens) | **PATCH** /v1/orgaos/{cnpj}/pca/{ano}/{sequencial}/itens | Retificar Parcialmente itens de Plano de Contratação |
| [**retornarPlanosTodasUnidadesDoOrgaoCsv()**](PlanoDeContrataoApi.md#retornarPlanosTodasUnidadesDoOrgaoCsv) | **GET** /v1/orgaos/{cnpj}/pca/{ano}/csv | Baixar CSV dos Planos de Contratação por Órgão e Ano |


## `consultarPlanoComItens()`

```php
consultarPlanoComItens($cnpj, $ano, $sequencial): \OpenAPI\Client\Model\PlanoContratacaoComItensDTO
```

Consultar Plano de Contratação com Itens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->consultarPlanoComItens($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->consultarPlanoComItens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\PlanoContratacaoComItensDTO**](../Model/PlanoContratacaoComItensDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultarPlanoConsolidado()`

```php
consultarPlanoConsolidado($cnpj, $ano, $sequencial): \OpenAPI\Client\Model\PlanoSequencialConsolidadoDTO
```

Consultar Plano de Contratação Consolidado

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int

try {
    $result = $apiInstance->consultarPlanoConsolidado($cnpj, $ano, $sequencial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->consultarPlanoConsolidado: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\PlanoSequencialConsolidadoDTO**](../Model/PlanoSequencialConsolidadoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incluirPlano()`

```php
incluirPlano($cnpj, $incluir_plano_contratacao_dto): object
```

Inserir Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$incluir_plano_contratacao_dto = new \OpenAPI\Client\Model\IncluirPlanoContratacaoDTO(); // \OpenAPI\Client\Model\IncluirPlanoContratacaoDTO

try {
    $result = $apiInstance->incluirPlano($cnpj, $incluir_plano_contratacao_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->incluirPlano: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **incluir_plano_contratacao_dto** | [**\OpenAPI\Client\Model\IncluirPlanoContratacaoDTO**](../Model/IncluirPlanoContratacaoDTO.md)|  | |

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

## `incluirPlanoContratacaoItem()`

```php
incluirPlanoContratacaoItem($cnpj, $ano, $sequencial, $incluir_plano_contratacao_item_dto): object
```

Inserir itens de Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$incluir_plano_contratacao_item_dto = array(new \OpenAPI\Client\Model\IncluirPlanoContratacaoItemDTO()); // \OpenAPI\Client\Model\IncluirPlanoContratacaoItemDTO[]

try {
    $result = $apiInstance->incluirPlanoContratacaoItem($cnpj, $ano, $sequencial, $incluir_plano_contratacao_item_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->incluirPlanoContratacaoItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **incluir_plano_contratacao_item_dto** | [**\OpenAPI\Client\Model\IncluirPlanoContratacaoItemDTO[]**](../Model/IncluirPlanoContratacaoItemDTO.md)|  | |

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

## `recuperarDadosOrgaoPca()`

```php
recuperarDadosOrgaoPca($cnpj, $ano): \OpenAPI\Client\Model\PlanoContratacaoItemOrgaoToDTO
```

Consultar Planos de Contratação Consolidados por Órgão e Ano

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int

try {
    $result = $apiInstance->recuperarDadosOrgaoPca($cnpj, $ano);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarDadosOrgaoPca: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\PlanoContratacaoItemOrgaoToDTO**](../Model/PlanoContratacaoItemOrgaoToDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarDadosOrgaoPcaQuantidade()`

```php
recuperarDadosOrgaoPcaQuantidade($cnpj, $ano): int
```

Consultar Quantidade de Planos de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int

try {
    $result = $apiInstance->recuperarDadosOrgaoPcaQuantidade($cnpj, $ano);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarDadosOrgaoPcaQuantidade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |

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

## `recuperarDadosOrgaoPcaUnidades()`

```php
recuperarDadosOrgaoPcaUnidades($cnpj, $ano, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\PlanoContratacaoOrgaoDTO[]
```

Consultar Planos de Contratação Consolidados das Unidades por Órgão e Ano

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->recuperarDadosOrgaoPcaUnidades($cnpj, $ano, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarDadosOrgaoPcaUnidades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlanoContratacaoOrgaoDTO[]**](../Model/PlanoContratacaoOrgaoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarDadosPcaItensCategoria()`

```php
recuperarDadosPcaItensCategoria($cnpj, $ano, $sequencial, $categoria, $pagina, $tamanho_pagina): \OpenAPI\Client\Model\IRecuperarPlanoItemDTO[]
```

Consultar Itens do Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$categoria = 56; // int
$pagina = 56; // int
$tamanho_pagina = 56; // int

try {
    $result = $apiInstance->recuperarDadosPcaItensCategoria($cnpj, $ano, $sequencial, $categoria, $pagina, $tamanho_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarDadosPcaItensCategoria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **categoria** | **int**|  | [optional] |
| **pagina** | **int**|  | [optional] |
| **tamanho_pagina** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IRecuperarPlanoItemDTO[]**](../Model/IRecuperarPlanoItemDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarDadosPcaItensQuantidadeItens()`

```php
recuperarDadosPcaItensQuantidadeItens($cnpj, $ano, $sequencial, $categoria): int
```

Consultar Quantidade de Itens do Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$categoria = 56; // int

try {
    $result = $apiInstance->recuperarDadosPcaItensQuantidadeItens($cnpj, $ano, $sequencial, $categoria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarDadosPcaItensQuantidadeItens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **categoria** | **int**|  | [optional] |

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

## `recuperarItensPlanoPorContratacao()`

```php
recuperarItensPlanoPorContratacao($cnpj, $ano, $sequencial, $numero_contratacao, $page, $size): \OpenAPI\Client\Model\IRecuperarPlanoItemDTO[]
```

Retornar Itens de Plano de Contratação por número da Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_contratacao = 'numero_contratacao_example'; // string
$page = 0; // int
$size = 10; // int

try {
    $result = $apiInstance->recuperarItensPlanoPorContratacao($cnpj, $ano, $sequencial, $numero_contratacao, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarItensPlanoPorContratacao: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_contratacao** | **string**|  | |
| **page** | **int**|  | [optional] [default to 0] |
| **size** | **int**|  | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\IRecuperarPlanoItemDTO[]**](../Model/IRecuperarPlanoItemDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarSequenciaisDoPlano()`

```php
recuperarSequenciaisDoPlano($cnpj, $uasg, $ano): \OpenAPI\Client\Model\SequenciaisDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$uasg = 'uasg_example'; // string
$ano = 56; // int

try {
    $result = $apiInstance->recuperarSequenciaisDoPlano($cnpj, $uasg, $ano);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarSequenciaisDoPlano: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **uasg** | **string**|  | |
| **ano** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\SequenciaisDTO**](../Model/SequenciaisDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarValoresCategoriaItem()`

```php
recuperarValoresCategoriaItem($cnpj, $ano, $sequencial, $categoria_item): \OpenAPI\Client\Model\RecuperarValoresCategoriaItemPcaDTO[]
```

Consultar Valores de um Plano de Contratação por Categoria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$categoria_item = 56; // int

try {
    $result = $apiInstance->recuperarValoresCategoriaItem($cnpj, $ano, $sequencial, $categoria_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarValoresCategoriaItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **categoria_item** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarValoresCategoriaItemPcaDTO[]**](../Model/RecuperarValoresCategoriaItemPcaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recuperarValoresCategoriaItem1()`

```php
recuperarValoresCategoriaItem1($cnpj, $ano, $categoria_item): \OpenAPI\Client\Model\RecuperarValoresCategoriaItemPcaDTO[]
```

Consultar Valores de Planos de Contratação de um Órgão por Categoria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$categoria_item = 56; // int

try {
    $result = $apiInstance->recuperarValoresCategoriaItem1($cnpj, $ano, $categoria_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->recuperarValoresCategoriaItem1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **categoria_item** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecuperarValoresCategoriaItemPcaDTO[]**](../Model/RecuperarValoresCategoriaItemPcaDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removerItemPlano()`

```php
removerItemPlano($cnpj, $ano, $sequencial, $numero_item, $exclusao_item_pca_dto)
```

Excluir Item de Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$exclusao_item_pca_dto = new \OpenAPI\Client\Model\ExclusaoItemPcaDTO(); // \OpenAPI\Client\Model\ExclusaoItemPcaDTO

try {
    $apiInstance->removerItemPlano($cnpj, $ano, $sequencial, $numero_item, $exclusao_item_pca_dto);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->removerItemPlano: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **exclusao_item_pca_dto** | [**\OpenAPI\Client\Model\ExclusaoItemPcaDTO**](../Model/ExclusaoItemPcaDTO.md)|  | [optional] |

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

## `removerItensPlano()`

```php
removerItensPlano($cnpj, $ano, $sequencial, $exclusao_lista_itens_pca_dto)
```

Excluir Itens de Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$exclusao_lista_itens_pca_dto = new \OpenAPI\Client\Model\ExclusaoListaItensPcaDTO(); // \OpenAPI\Client\Model\ExclusaoListaItensPcaDTO

try {
    $apiInstance->removerItensPlano($cnpj, $ano, $sequencial, $exclusao_lista_itens_pca_dto);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->removerItensPlano: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **exclusao_lista_itens_pca_dto** | [**\OpenAPI\Client\Model\ExclusaoListaItensPcaDTO**](../Model/ExclusaoListaItensPcaDTO.md)|  | |

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

## `removerItensPlanoPorContratacao()`

```php
removerItensPlanoPorContratacao($cnpj, $ano, $sequencial, $numero_contratacao, $exclusao_item_pca_dto)
```

Excluir Itens de Plano de Contratação por número da Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_contratacao = 'numero_contratacao_example'; // string
$exclusao_item_pca_dto = new \OpenAPI\Client\Model\ExclusaoItemPcaDTO(); // \OpenAPI\Client\Model\ExclusaoItemPcaDTO

try {
    $apiInstance->removerItensPlanoPorContratacao($cnpj, $ano, $sequencial, $numero_contratacao, $exclusao_item_pca_dto);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->removerItensPlanoPorContratacao: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_contratacao** | **string**|  | |
| **exclusao_item_pca_dto** | [**\OpenAPI\Client\Model\ExclusaoItemPcaDTO**](../Model/ExclusaoItemPcaDTO.md)|  | |

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

## `removerPlano()`

```php
removerPlano($cnpj, $ano, $sequencial, $exclusao_dto)
```

Excluir Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
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
    $apiInstance->removerPlano($cnpj, $ano, $sequencial, $exclusao_dto);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->removerPlano: ', $e->getMessage(), PHP_EOL;
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

## `retificarParcialmentePlanoContratacaoItem()`

```php
retificarParcialmentePlanoContratacaoItem($cnpj, $ano, $sequencial, $numero_item, $retificar_parcial_plano_contratacao_item_dto)
```

Retificar Parcialmente item de Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$numero_item = 56; // int
$retificar_parcial_plano_contratacao_item_dto = new \OpenAPI\Client\Model\RetificarParcialPlanoContratacaoItemDTO(); // \OpenAPI\Client\Model\RetificarParcialPlanoContratacaoItemDTO

try {
    $apiInstance->retificarParcialmentePlanoContratacaoItem($cnpj, $ano, $sequencial, $numero_item, $retificar_parcial_plano_contratacao_item_dto);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->retificarParcialmentePlanoContratacaoItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **numero_item** | **int**|  | |
| **retificar_parcial_plano_contratacao_item_dto** | [**\OpenAPI\Client\Model\RetificarParcialPlanoContratacaoItemDTO**](../Model/RetificarParcialPlanoContratacaoItemDTO.md)|  | |

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

## `retificarParcialmentePlanoContratacaoItens()`

```php
retificarParcialmentePlanoContratacaoItens($cnpj, $ano, $sequencial, $retificar_parcial_plano_contratacao_lista_itens_dto)
```

Retificar Parcialmente itens de Plano de Contratação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int
$sequencial = 56; // int
$retificar_parcial_plano_contratacao_lista_itens_dto = new \OpenAPI\Client\Model\RetificarParcialPlanoContratacaoListaItensDTO(); // \OpenAPI\Client\Model\RetificarParcialPlanoContratacaoListaItensDTO

try {
    $apiInstance->retificarParcialmentePlanoContratacaoItens($cnpj, $ano, $sequencial, $retificar_parcial_plano_contratacao_lista_itens_dto);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->retificarParcialmentePlanoContratacaoItens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |
| **sequencial** | **int**|  | |
| **retificar_parcial_plano_contratacao_lista_itens_dto** | [**\OpenAPI\Client\Model\RetificarParcialPlanoContratacaoListaItensDTO**](../Model/RetificarParcialPlanoContratacaoListaItensDTO.md)|  | |

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

## `retornarPlanosTodasUnidadesDoOrgaoCsv()`

```php
retornarPlanosTodasUnidadesDoOrgaoCsv($cnpj, $ano): string[]
```

Baixar CSV dos Planos de Contratação por Órgão e Ano

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlanoDeContrataoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cnpj = 'cnpj_example'; // string
$ano = 56; // int

try {
    $result = $apiInstance->retornarPlanosTodasUnidadesDoOrgaoCsv($cnpj, $ano);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanoDeContrataoApi->retornarPlanosTodasUnidadesDoOrgaoCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**|  | |
| **ano** | **int**|  | |

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
