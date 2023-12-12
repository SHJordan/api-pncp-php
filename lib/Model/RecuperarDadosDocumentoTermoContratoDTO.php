<?php
/**
 * RecuperarDadosDocumentoTermoContratoDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API PNCP
 *
 * API REST de serviços do Portal Nacional de Contratações Públicas (PNCP)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: css.serpro@serpro.gov.br
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RecuperarDadosDocumentoTermoContratoDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecuperarDadosDocumentoTermoContratoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecuperarDadosDocumentoTermoContratoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uri' => 'string',
        'url' => 'string',
        'sequencial_documento' => 'int',
        'cnpj' => 'string',
        'data_publicacao_pncp' => '\DateTime',
        'ano_compra' => 'int',
        'sequencial_compra' => 'int',
        'titulo' => 'string',
        'tipo_documento_nome' => 'string',
        'id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uri' => 'uri',
        'url' => null,
        'sequencial_documento' => 'int32',
        'cnpj' => null,
        'data_publicacao_pncp' => 'date-time',
        'ano_compra' => 'int32',
        'sequencial_compra' => 'int32',
        'titulo' => null,
        'tipo_documento_nome' => null,
        'id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uri' => false,
		'url' => false,
		'sequencial_documento' => false,
		'cnpj' => false,
		'data_publicacao_pncp' => false,
		'ano_compra' => false,
		'sequencial_compra' => false,
		'titulo' => false,
		'tipo_documento_nome' => false,
		'id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uri' => 'uri',
        'url' => 'url',
        'sequencial_documento' => 'sequencialDocumento',
        'cnpj' => 'cnpj',
        'data_publicacao_pncp' => 'dataPublicacaoPncp',
        'ano_compra' => 'anoCompra',
        'sequencial_compra' => 'sequencialCompra',
        'titulo' => 'titulo',
        'tipo_documento_nome' => 'tipoDocumentoNome',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'url' => 'setUrl',
        'sequencial_documento' => 'setSequencialDocumento',
        'cnpj' => 'setCnpj',
        'data_publicacao_pncp' => 'setDataPublicacaoPncp',
        'ano_compra' => 'setAnoCompra',
        'sequencial_compra' => 'setSequencialCompra',
        'titulo' => 'setTitulo',
        'tipo_documento_nome' => 'setTipoDocumentoNome',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'url' => 'getUrl',
        'sequencial_documento' => 'getSequencialDocumento',
        'cnpj' => 'getCnpj',
        'data_publicacao_pncp' => 'getDataPublicacaoPncp',
        'ano_compra' => 'getAnoCompra',
        'sequencial_compra' => 'getSequencialCompra',
        'titulo' => 'getTitulo',
        'tipo_documento_nome' => 'getTipoDocumentoNome',
        'id' => 'getId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('uri', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('sequencial_documento', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('data_publicacao_pncp', $data ?? [], null);
        $this->setIfExists('ano_compra', $data ?? [], null);
        $this->setIfExists('sequencial_compra', $data ?? [], null);
        $this->setIfExists('titulo', $data ?? [], null);
        $this->setIfExists('tipo_documento_nome', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        if (is_null($uri)) {
            throw new \InvalidArgumentException('non-nullable uri cannot be null');
        }
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets sequencial_documento
     *
     * @return int|null
     */
    public function getSequencialDocumento()
    {
        return $this->container['sequencial_documento'];
    }

    /**
     * Sets sequencial_documento
     *
     * @param int|null $sequencial_documento sequencial_documento
     *
     * @return self
     */
    public function setSequencialDocumento($sequencial_documento)
    {
        if (is_null($sequencial_documento)) {
            throw new \InvalidArgumentException('non-nullable sequencial_documento cannot be null');
        }
        $this->container['sequencial_documento'] = $sequencial_documento;

        return $this;
    }

    /**
     * Gets cnpj
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string|null $cnpj cnpj
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        if (is_null($cnpj)) {
            throw new \InvalidArgumentException('non-nullable cnpj cannot be null');
        }
        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets data_publicacao_pncp
     *
     * @return \DateTime|null
     */
    public function getDataPublicacaoPncp()
    {
        return $this->container['data_publicacao_pncp'];
    }

    /**
     * Sets data_publicacao_pncp
     *
     * @param \DateTime|null $data_publicacao_pncp data_publicacao_pncp
     *
     * @return self
     */
    public function setDataPublicacaoPncp($data_publicacao_pncp)
    {
        if (is_null($data_publicacao_pncp)) {
            throw new \InvalidArgumentException('non-nullable data_publicacao_pncp cannot be null');
        }
        $this->container['data_publicacao_pncp'] = $data_publicacao_pncp;

        return $this;
    }

    /**
     * Gets ano_compra
     *
     * @return int|null
     */
    public function getAnoCompra()
    {
        return $this->container['ano_compra'];
    }

    /**
     * Sets ano_compra
     *
     * @param int|null $ano_compra ano_compra
     *
     * @return self
     */
    public function setAnoCompra($ano_compra)
    {
        if (is_null($ano_compra)) {
            throw new \InvalidArgumentException('non-nullable ano_compra cannot be null');
        }
        $this->container['ano_compra'] = $ano_compra;

        return $this;
    }

    /**
     * Gets sequencial_compra
     *
     * @return int|null
     */
    public function getSequencialCompra()
    {
        return $this->container['sequencial_compra'];
    }

    /**
     * Sets sequencial_compra
     *
     * @param int|null $sequencial_compra sequencial_compra
     *
     * @return self
     */
    public function setSequencialCompra($sequencial_compra)
    {
        if (is_null($sequencial_compra)) {
            throw new \InvalidArgumentException('non-nullable sequencial_compra cannot be null');
        }
        $this->container['sequencial_compra'] = $sequencial_compra;

        return $this;
    }

    /**
     * Gets titulo
     *
     * @return string|null
     */
    public function getTitulo()
    {
        return $this->container['titulo'];
    }

    /**
     * Sets titulo
     *
     * @param string|null $titulo titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        if (is_null($titulo)) {
            throw new \InvalidArgumentException('non-nullable titulo cannot be null');
        }
        $this->container['titulo'] = $titulo;

        return $this;
    }

    /**
     * Gets tipo_documento_nome
     *
     * @return string|null
     */
    public function getTipoDocumentoNome()
    {
        return $this->container['tipo_documento_nome'];
    }

    /**
     * Sets tipo_documento_nome
     *
     * @param string|null $tipo_documento_nome tipo_documento_nome
     *
     * @return self
     */
    public function setTipoDocumentoNome($tipo_documento_nome)
    {
        if (is_null($tipo_documento_nome)) {
            throw new \InvalidArgumentException('non-nullable tipo_documento_nome cannot be null');
        }
        $this->container['tipo_documento_nome'] = $tipo_documento_nome;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


