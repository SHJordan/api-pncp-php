<?php
/**
 * IncluirCredenciamentoResponsavelDTO
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
 * IncluirCredenciamentoResponsavelDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IncluirCredenciamentoResponsavelDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncluirCredenciamentoResponsavelDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'responsavel_nome' => 'string',
        'responsavel_cpf' => 'string',
        'responsavel_email' => 'string',
        'responsavel_telefone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'responsavel_nome' => null,
        'responsavel_cpf' => null,
        'responsavel_email' => null,
        'responsavel_telefone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'responsavel_nome' => false,
		'responsavel_cpf' => false,
		'responsavel_email' => false,
		'responsavel_telefone' => false
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
        'responsavel_nome' => 'responsavelNome',
        'responsavel_cpf' => 'responsavelCpf',
        'responsavel_email' => 'responsavelEmail',
        'responsavel_telefone' => 'responsavelTelefone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'responsavel_nome' => 'setResponsavelNome',
        'responsavel_cpf' => 'setResponsavelCpf',
        'responsavel_email' => 'setResponsavelEmail',
        'responsavel_telefone' => 'setResponsavelTelefone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'responsavel_nome' => 'getResponsavelNome',
        'responsavel_cpf' => 'getResponsavelCpf',
        'responsavel_email' => 'getResponsavelEmail',
        'responsavel_telefone' => 'getResponsavelTelefone'
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
        $this->setIfExists('responsavel_nome', $data ?? [], null);
        $this->setIfExists('responsavel_cpf', $data ?? [], null);
        $this->setIfExists('responsavel_email', $data ?? [], null);
        $this->setIfExists('responsavel_telefone', $data ?? [], null);
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

        if ($this->container['responsavel_nome'] === null) {
            $invalidProperties[] = "'responsavel_nome' can't be null";
        }
        if ((mb_strlen($this->container['responsavel_nome']) > 255)) {
            $invalidProperties[] = "invalid value for 'responsavel_nome', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['responsavel_nome']) < 0)) {
            $invalidProperties[] = "invalid value for 'responsavel_nome', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['responsavel_cpf'] === null) {
            $invalidProperties[] = "'responsavel_cpf' can't be null";
        }
        if ($this->container['responsavel_email'] === null) {
            $invalidProperties[] = "'responsavel_email' can't be null";
        }
        if ((mb_strlen($this->container['responsavel_email']) > 255)) {
            $invalidProperties[] = "invalid value for 'responsavel_email', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['responsavel_email']) < 0)) {
            $invalidProperties[] = "invalid value for 'responsavel_email', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['responsavel_telefone'] === null) {
            $invalidProperties[] = "'responsavel_telefone' can't be null";
        }
        if ((mb_strlen($this->container['responsavel_telefone']) > 30)) {
            $invalidProperties[] = "invalid value for 'responsavel_telefone', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['responsavel_telefone']) < 0)) {
            $invalidProperties[] = "invalid value for 'responsavel_telefone', the character length must be bigger than or equal to 0.";
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
     * Gets responsavel_nome
     *
     * @return string
     */
    public function getResponsavelNome()
    {
        return $this->container['responsavel_nome'];
    }

    /**
     * Sets responsavel_nome
     *
     * @param string $responsavel_nome responsavel_nome
     *
     * @return self
     */
    public function setResponsavelNome($responsavel_nome)
    {
        if (is_null($responsavel_nome)) {
            throw new \InvalidArgumentException('non-nullable responsavel_nome cannot be null');
        }
        if ((mb_strlen($responsavel_nome) > 255)) {
            throw new \InvalidArgumentException('invalid length for $responsavel_nome when calling IncluirCredenciamentoResponsavelDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($responsavel_nome) < 0)) {
            throw new \InvalidArgumentException('invalid length for $responsavel_nome when calling IncluirCredenciamentoResponsavelDTO., must be bigger than or equal to 0.');
        }

        $this->container['responsavel_nome'] = $responsavel_nome;

        return $this;
    }

    /**
     * Gets responsavel_cpf
     *
     * @return string
     */
    public function getResponsavelCpf()
    {
        return $this->container['responsavel_cpf'];
    }

    /**
     * Sets responsavel_cpf
     *
     * @param string $responsavel_cpf responsavel_cpf
     *
     * @return self
     */
    public function setResponsavelCpf($responsavel_cpf)
    {
        if (is_null($responsavel_cpf)) {
            throw new \InvalidArgumentException('non-nullable responsavel_cpf cannot be null');
        }
        $this->container['responsavel_cpf'] = $responsavel_cpf;

        return $this;
    }

    /**
     * Gets responsavel_email
     *
     * @return string
     */
    public function getResponsavelEmail()
    {
        return $this->container['responsavel_email'];
    }

    /**
     * Sets responsavel_email
     *
     * @param string $responsavel_email responsavel_email
     *
     * @return self
     */
    public function setResponsavelEmail($responsavel_email)
    {
        if (is_null($responsavel_email)) {
            throw new \InvalidArgumentException('non-nullable responsavel_email cannot be null');
        }
        if ((mb_strlen($responsavel_email) > 255)) {
            throw new \InvalidArgumentException('invalid length for $responsavel_email when calling IncluirCredenciamentoResponsavelDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($responsavel_email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $responsavel_email when calling IncluirCredenciamentoResponsavelDTO., must be bigger than or equal to 0.');
        }

        $this->container['responsavel_email'] = $responsavel_email;

        return $this;
    }

    /**
     * Gets responsavel_telefone
     *
     * @return string
     */
    public function getResponsavelTelefone()
    {
        return $this->container['responsavel_telefone'];
    }

    /**
     * Sets responsavel_telefone
     *
     * @param string $responsavel_telefone responsavel_telefone
     *
     * @return self
     */
    public function setResponsavelTelefone($responsavel_telefone)
    {
        if (is_null($responsavel_telefone)) {
            throw new \InvalidArgumentException('non-nullable responsavel_telefone cannot be null');
        }
        if ((mb_strlen($responsavel_telefone) > 30)) {
            throw new \InvalidArgumentException('invalid length for $responsavel_telefone when calling IncluirCredenciamentoResponsavelDTO., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($responsavel_telefone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $responsavel_telefone when calling IncluirCredenciamentoResponsavelDTO., must be bigger than or equal to 0.');
        }

        $this->container['responsavel_telefone'] = $responsavel_telefone;

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

