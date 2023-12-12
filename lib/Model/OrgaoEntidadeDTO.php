<?php
/**
 * OrgaoEntidadeDTO
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
 * OrgaoEntidadeDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrgaoEntidadeDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrgaoEntidadeDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'cnpj' => 'string',
        'razao_social' => 'string',
        'cnpj_ente_responsavel' => 'string',
        'poder_id' => 'string',
        'esfera_id' => 'string',
        'validado' => 'bool',
        'data_validacao' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'cnpj' => null,
        'razao_social' => null,
        'cnpj_ente_responsavel' => null,
        'poder_id' => null,
        'esfera_id' => null,
        'validado' => null,
        'data_validacao' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'cnpj' => false,
		'razao_social' => false,
		'cnpj_ente_responsavel' => false,
		'poder_id' => false,
		'esfera_id' => false,
		'validado' => false,
		'data_validacao' => false
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
        'id' => 'id',
        'cnpj' => 'cnpj',
        'razao_social' => 'razaoSocial',
        'cnpj_ente_responsavel' => 'cnpjEnteResponsavel',
        'poder_id' => 'poderId',
        'esfera_id' => 'esferaId',
        'validado' => 'validado',
        'data_validacao' => 'dataValidacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'cnpj' => 'setCnpj',
        'razao_social' => 'setRazaoSocial',
        'cnpj_ente_responsavel' => 'setCnpjEnteResponsavel',
        'poder_id' => 'setPoderId',
        'esfera_id' => 'setEsferaId',
        'validado' => 'setValidado',
        'data_validacao' => 'setDataValidacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'cnpj' => 'getCnpj',
        'razao_social' => 'getRazaoSocial',
        'cnpj_ente_responsavel' => 'getCnpjEnteResponsavel',
        'poder_id' => 'getPoderId',
        'esfera_id' => 'getEsferaId',
        'validado' => 'getValidado',
        'data_validacao' => 'getDataValidacao'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('razao_social', $data ?? [], null);
        $this->setIfExists('cnpj_ente_responsavel', $data ?? [], null);
        $this->setIfExists('poder_id', $data ?? [], null);
        $this->setIfExists('esfera_id', $data ?? [], null);
        $this->setIfExists('validado', $data ?? [], null);
        $this->setIfExists('data_validacao', $data ?? [], null);
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
     * Gets razao_social
     *
     * @return string|null
     */
    public function getRazaoSocial()
    {
        return $this->container['razao_social'];
    }

    /**
     * Sets razao_social
     *
     * @param string|null $razao_social razao_social
     *
     * @return self
     */
    public function setRazaoSocial($razao_social)
    {
        if (is_null($razao_social)) {
            throw new \InvalidArgumentException('non-nullable razao_social cannot be null');
        }
        $this->container['razao_social'] = $razao_social;

        return $this;
    }

    /**
     * Gets cnpj_ente_responsavel
     *
     * @return string|null
     */
    public function getCnpjEnteResponsavel()
    {
        return $this->container['cnpj_ente_responsavel'];
    }

    /**
     * Sets cnpj_ente_responsavel
     *
     * @param string|null $cnpj_ente_responsavel cnpj_ente_responsavel
     *
     * @return self
     */
    public function setCnpjEnteResponsavel($cnpj_ente_responsavel)
    {
        if (is_null($cnpj_ente_responsavel)) {
            throw new \InvalidArgumentException('non-nullable cnpj_ente_responsavel cannot be null');
        }
        $this->container['cnpj_ente_responsavel'] = $cnpj_ente_responsavel;

        return $this;
    }

    /**
     * Gets poder_id
     *
     * @return string|null
     */
    public function getPoderId()
    {
        return $this->container['poder_id'];
    }

    /**
     * Sets poder_id
     *
     * @param string|null $poder_id poder_id
     *
     * @return self
     */
    public function setPoderId($poder_id)
    {
        if (is_null($poder_id)) {
            throw new \InvalidArgumentException('non-nullable poder_id cannot be null');
        }
        $this->container['poder_id'] = $poder_id;

        return $this;
    }

    /**
     * Gets esfera_id
     *
     * @return string|null
     */
    public function getEsferaId()
    {
        return $this->container['esfera_id'];
    }

    /**
     * Sets esfera_id
     *
     * @param string|null $esfera_id esfera_id
     *
     * @return self
     */
    public function setEsferaId($esfera_id)
    {
        if (is_null($esfera_id)) {
            throw new \InvalidArgumentException('non-nullable esfera_id cannot be null');
        }
        $this->container['esfera_id'] = $esfera_id;

        return $this;
    }

    /**
     * Gets validado
     *
     * @return bool|null
     */
    public function getValidado()
    {
        return $this->container['validado'];
    }

    /**
     * Sets validado
     *
     * @param bool|null $validado validado
     *
     * @return self
     */
    public function setValidado($validado)
    {
        if (is_null($validado)) {
            throw new \InvalidArgumentException('non-nullable validado cannot be null');
        }
        $this->container['validado'] = $validado;

        return $this;
    }

    /**
     * Gets data_validacao
     *
     * @return \DateTime|null
     */
    public function getDataValidacao()
    {
        return $this->container['data_validacao'];
    }

    /**
     * Sets data_validacao
     *
     * @param \DateTime|null $data_validacao data_validacao
     *
     * @return self
     */
    public function setDataValidacao($data_validacao)
    {
        if (is_null($data_validacao)) {
            throw new \InvalidArgumentException('non-nullable data_validacao cannot be null');
        }
        $this->container['data_validacao'] = $data_validacao;

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

