<?php
/**
 * IncluirUnidadeOrgaoDTO
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
 * IncluirUnidadeOrgaoDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IncluirUnidadeOrgaoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncluirUnidadeOrgaoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codigo_ibge' => 'string',
        'codigo_unidade' => 'string',
        'nome_unidade' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'codigo_ibge' => null,
        'codigo_unidade' => null,
        'nome_unidade' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'codigo_ibge' => false,
		'codigo_unidade' => false,
		'nome_unidade' => false
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
        'codigo_ibge' => 'codigoIBGE',
        'codigo_unidade' => 'codigoUnidade',
        'nome_unidade' => 'nomeUnidade'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo_ibge' => 'setCodigoIbge',
        'codigo_unidade' => 'setCodigoUnidade',
        'nome_unidade' => 'setNomeUnidade'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo_ibge' => 'getCodigoIbge',
        'codigo_unidade' => 'getCodigoUnidade',
        'nome_unidade' => 'getNomeUnidade'
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
        $this->setIfExists('codigo_ibge', $data ?? [], null);
        $this->setIfExists('codigo_unidade', $data ?? [], null);
        $this->setIfExists('nome_unidade', $data ?? [], null);
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

        if (!is_null($this->container['codigo_unidade']) && (mb_strlen($this->container['codigo_unidade']) > 30)) {
            $invalidProperties[] = "invalid value for 'codigo_unidade', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['codigo_unidade']) && (mb_strlen($this->container['codigo_unidade']) < 1)) {
            $invalidProperties[] = "invalid value for 'codigo_unidade', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['nome_unidade']) && (mb_strlen($this->container['nome_unidade']) > 100)) {
            $invalidProperties[] = "invalid value for 'nome_unidade', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['nome_unidade']) && (mb_strlen($this->container['nome_unidade']) < 1)) {
            $invalidProperties[] = "invalid value for 'nome_unidade', the character length must be bigger than or equal to 1.";
        }

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
     * Gets codigo_ibge
     *
     * @return string|null
     */
    public function getCodigoIbge()
    {
        return $this->container['codigo_ibge'];
    }

    /**
     * Sets codigo_ibge
     *
     * @param string|null $codigo_ibge codigo_ibge
     *
     * @return self
     */
    public function setCodigoIbge($codigo_ibge)
    {
        if (is_null($codigo_ibge)) {
            throw new \InvalidArgumentException('non-nullable codigo_ibge cannot be null');
        }
        $this->container['codigo_ibge'] = $codigo_ibge;

        return $this;
    }

    /**
     * Gets codigo_unidade
     *
     * @return string|null
     */
    public function getCodigoUnidade()
    {
        return $this->container['codigo_unidade'];
    }

    /**
     * Sets codigo_unidade
     *
     * @param string|null $codigo_unidade codigo_unidade
     *
     * @return self
     */
    public function setCodigoUnidade($codigo_unidade)
    {
        if (is_null($codigo_unidade)) {
            throw new \InvalidArgumentException('non-nullable codigo_unidade cannot be null');
        }
        if ((mb_strlen($codigo_unidade) > 30)) {
            throw new \InvalidArgumentException('invalid length for $codigo_unidade when calling IncluirUnidadeOrgaoDTO., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($codigo_unidade) < 1)) {
            throw new \InvalidArgumentException('invalid length for $codigo_unidade when calling IncluirUnidadeOrgaoDTO., must be bigger than or equal to 1.');
        }

        $this->container['codigo_unidade'] = $codigo_unidade;

        return $this;
    }

    /**
     * Gets nome_unidade
     *
     * @return string|null
     */
    public function getNomeUnidade()
    {
        return $this->container['nome_unidade'];
    }

    /**
     * Sets nome_unidade
     *
     * @param string|null $nome_unidade nome_unidade
     *
     * @return self
     */
    public function setNomeUnidade($nome_unidade)
    {
        if (is_null($nome_unidade)) {
            throw new \InvalidArgumentException('non-nullable nome_unidade cannot be null');
        }
        if ((mb_strlen($nome_unidade) > 100)) {
            throw new \InvalidArgumentException('invalid length for $nome_unidade when calling IncluirUnidadeOrgaoDTO., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($nome_unidade) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nome_unidade when calling IncluirUnidadeOrgaoDTO., must be bigger than or equal to 1.');
        }

        $this->container['nome_unidade'] = $nome_unidade;

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


