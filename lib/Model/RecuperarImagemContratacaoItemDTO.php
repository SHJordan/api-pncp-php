<?php
/**
 * RecuperarImagemContratacaoItemDTO
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
 * RecuperarImagemContratacaoItemDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecuperarImagemContratacaoItemDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecuperarImagemContratacaoItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'legenda' => 'string',
        'id_contratacao_pncp' => 'string',
        'sequencial_imagem' => 'int',
        'data_publicacao_pncp' => 'string',
        'numero_item' => 'int',
        'texto_alternativo' => 'string',
        'titulo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => null,
        'legenda' => null,
        'id_contratacao_pncp' => null,
        'sequencial_imagem' => 'int32',
        'data_publicacao_pncp' => null,
        'numero_item' => 'int32',
        'texto_alternativo' => null,
        'titulo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
		'legenda' => false,
		'id_contratacao_pncp' => false,
		'sequencial_imagem' => false,
		'data_publicacao_pncp' => false,
		'numero_item' => false,
		'texto_alternativo' => false,
		'titulo' => false
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
        'url' => 'url',
        'legenda' => 'legenda',
        'id_contratacao_pncp' => 'idContratacaoPncp',
        'sequencial_imagem' => 'sequencialImagem',
        'data_publicacao_pncp' => 'dataPublicacaoPncp',
        'numero_item' => 'numeroItem',
        'texto_alternativo' => 'textoAlternativo',
        'titulo' => 'titulo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'legenda' => 'setLegenda',
        'id_contratacao_pncp' => 'setIdContratacaoPncp',
        'sequencial_imagem' => 'setSequencialImagem',
        'data_publicacao_pncp' => 'setDataPublicacaoPncp',
        'numero_item' => 'setNumeroItem',
        'texto_alternativo' => 'setTextoAlternativo',
        'titulo' => 'setTitulo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'legenda' => 'getLegenda',
        'id_contratacao_pncp' => 'getIdContratacaoPncp',
        'sequencial_imagem' => 'getSequencialImagem',
        'data_publicacao_pncp' => 'getDataPublicacaoPncp',
        'numero_item' => 'getNumeroItem',
        'texto_alternativo' => 'getTextoAlternativo',
        'titulo' => 'getTitulo'
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('legenda', $data ?? [], null);
        $this->setIfExists('id_contratacao_pncp', $data ?? [], null);
        $this->setIfExists('sequencial_imagem', $data ?? [], null);
        $this->setIfExists('data_publicacao_pncp', $data ?? [], null);
        $this->setIfExists('numero_item', $data ?? [], null);
        $this->setIfExists('texto_alternativo', $data ?? [], null);
        $this->setIfExists('titulo', $data ?? [], null);
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
     * Gets legenda
     *
     * @return string|null
     */
    public function getLegenda()
    {
        return $this->container['legenda'];
    }

    /**
     * Sets legenda
     *
     * @param string|null $legenda legenda
     *
     * @return self
     */
    public function setLegenda($legenda)
    {
        if (is_null($legenda)) {
            throw new \InvalidArgumentException('non-nullable legenda cannot be null');
        }
        $this->container['legenda'] = $legenda;

        return $this;
    }

    /**
     * Gets id_contratacao_pncp
     *
     * @return string|null
     */
    public function getIdContratacaoPncp()
    {
        return $this->container['id_contratacao_pncp'];
    }

    /**
     * Sets id_contratacao_pncp
     *
     * @param string|null $id_contratacao_pncp id_contratacao_pncp
     *
     * @return self
     */
    public function setIdContratacaoPncp($id_contratacao_pncp)
    {
        if (is_null($id_contratacao_pncp)) {
            throw new \InvalidArgumentException('non-nullable id_contratacao_pncp cannot be null');
        }
        $this->container['id_contratacao_pncp'] = $id_contratacao_pncp;

        return $this;
    }

    /**
     * Gets sequencial_imagem
     *
     * @return int|null
     */
    public function getSequencialImagem()
    {
        return $this->container['sequencial_imagem'];
    }

    /**
     * Sets sequencial_imagem
     *
     * @param int|null $sequencial_imagem sequencial_imagem
     *
     * @return self
     */
    public function setSequencialImagem($sequencial_imagem)
    {
        if (is_null($sequencial_imagem)) {
            throw new \InvalidArgumentException('non-nullable sequencial_imagem cannot be null');
        }
        $this->container['sequencial_imagem'] = $sequencial_imagem;

        return $this;
    }

    /**
     * Gets data_publicacao_pncp
     *
     * @return string|null
     */
    public function getDataPublicacaoPncp()
    {
        return $this->container['data_publicacao_pncp'];
    }

    /**
     * Sets data_publicacao_pncp
     *
     * @param string|null $data_publicacao_pncp data_publicacao_pncp
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
     * Gets numero_item
     *
     * @return int|null
     */
    public function getNumeroItem()
    {
        return $this->container['numero_item'];
    }

    /**
     * Sets numero_item
     *
     * @param int|null $numero_item numero_item
     *
     * @return self
     */
    public function setNumeroItem($numero_item)
    {
        if (is_null($numero_item)) {
            throw new \InvalidArgumentException('non-nullable numero_item cannot be null');
        }
        $this->container['numero_item'] = $numero_item;

        return $this;
    }

    /**
     * Gets texto_alternativo
     *
     * @return string|null
     */
    public function getTextoAlternativo()
    {
        return $this->container['texto_alternativo'];
    }

    /**
     * Sets texto_alternativo
     *
     * @param string|null $texto_alternativo texto_alternativo
     *
     * @return self
     */
    public function setTextoAlternativo($texto_alternativo)
    {
        if (is_null($texto_alternativo)) {
            throw new \InvalidArgumentException('non-nullable texto_alternativo cannot be null');
        }
        $this->container['texto_alternativo'] = $texto_alternativo;

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

