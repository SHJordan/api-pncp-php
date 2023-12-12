<?php
/**
 * IncluirCompraItemDTO
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
 * IncluirCompraItemDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IncluirCompraItemDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncluirCompraItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'numero_item' => 'int',
        'material_ou_servico' => 'string',
        'orcamento_sigiloso' => 'bool',
        'tipo_beneficio_id' => 'string',
        'incentivo_produtivo_basico' => 'bool',
        'descricao' => 'string',
        'quantidade' => 'float',
        'unidade_medida' => 'string',
        'valor_unitario_estimado' => 'float',
        'valor_total' => 'float',
        'criterio_julgamento_id' => 'string',
        'patrimonio' => 'string',
        'codigo_registro_imobiliario' => 'string',
        'item_categoria_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'numero_item' => 'int32',
        'material_ou_servico' => null,
        'orcamento_sigiloso' => null,
        'tipo_beneficio_id' => null,
        'incentivo_produtivo_basico' => null,
        'descricao' => null,
        'quantidade' => null,
        'unidade_medida' => null,
        'valor_unitario_estimado' => null,
        'valor_total' => null,
        'criterio_julgamento_id' => null,
        'patrimonio' => null,
        'codigo_registro_imobiliario' => null,
        'item_categoria_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'numero_item' => false,
		'material_ou_servico' => false,
		'orcamento_sigiloso' => false,
		'tipo_beneficio_id' => false,
		'incentivo_produtivo_basico' => false,
		'descricao' => false,
		'quantidade' => false,
		'unidade_medida' => false,
		'valor_unitario_estimado' => false,
		'valor_total' => false,
		'criterio_julgamento_id' => false,
		'patrimonio' => false,
		'codigo_registro_imobiliario' => false,
		'item_categoria_id' => false
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
        'numero_item' => 'numeroItem',
        'material_ou_servico' => 'materialOuServico',
        'orcamento_sigiloso' => 'orcamentoSigiloso',
        'tipo_beneficio_id' => 'tipoBeneficioId',
        'incentivo_produtivo_basico' => 'incentivoProdutivoBasico',
        'descricao' => 'descricao',
        'quantidade' => 'quantidade',
        'unidade_medida' => 'unidadeMedida',
        'valor_unitario_estimado' => 'valorUnitarioEstimado',
        'valor_total' => 'valorTotal',
        'criterio_julgamento_id' => 'criterioJulgamentoId',
        'patrimonio' => 'patrimonio',
        'codigo_registro_imobiliario' => 'codigoRegistroImobiliario',
        'item_categoria_id' => 'itemCategoriaId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numero_item' => 'setNumeroItem',
        'material_ou_servico' => 'setMaterialOuServico',
        'orcamento_sigiloso' => 'setOrcamentoSigiloso',
        'tipo_beneficio_id' => 'setTipoBeneficioId',
        'incentivo_produtivo_basico' => 'setIncentivoProdutivoBasico',
        'descricao' => 'setDescricao',
        'quantidade' => 'setQuantidade',
        'unidade_medida' => 'setUnidadeMedida',
        'valor_unitario_estimado' => 'setValorUnitarioEstimado',
        'valor_total' => 'setValorTotal',
        'criterio_julgamento_id' => 'setCriterioJulgamentoId',
        'patrimonio' => 'setPatrimonio',
        'codigo_registro_imobiliario' => 'setCodigoRegistroImobiliario',
        'item_categoria_id' => 'setItemCategoriaId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numero_item' => 'getNumeroItem',
        'material_ou_servico' => 'getMaterialOuServico',
        'orcamento_sigiloso' => 'getOrcamentoSigiloso',
        'tipo_beneficio_id' => 'getTipoBeneficioId',
        'incentivo_produtivo_basico' => 'getIncentivoProdutivoBasico',
        'descricao' => 'getDescricao',
        'quantidade' => 'getQuantidade',
        'unidade_medida' => 'getUnidadeMedida',
        'valor_unitario_estimado' => 'getValorUnitarioEstimado',
        'valor_total' => 'getValorTotal',
        'criterio_julgamento_id' => 'getCriterioJulgamentoId',
        'patrimonio' => 'getPatrimonio',
        'codigo_registro_imobiliario' => 'getCodigoRegistroImobiliario',
        'item_categoria_id' => 'getItemCategoriaId'
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

    public const MATERIAL_OU_SERVICO_M = 'M';
    public const MATERIAL_OU_SERVICO_S = 'S';
    public const TIPO_BENEFICIO_ID__1 = '1';
    public const TIPO_BENEFICIO_ID__2 = '2';
    public const TIPO_BENEFICIO_ID__3 = '3';
    public const TIPO_BENEFICIO_ID__4 = '4';
    public const TIPO_BENEFICIO_ID__5 = '5';
    public const CRITERIO_JULGAMENTO_ID__1 = '1';
    public const CRITERIO_JULGAMENTO_ID__2 = '2';
    public const CRITERIO_JULGAMENTO_ID__3 = '3';
    public const CRITERIO_JULGAMENTO_ID__4 = '4';
    public const CRITERIO_JULGAMENTO_ID__5 = '5';
    public const CRITERIO_JULGAMENTO_ID__6 = '6';
    public const CRITERIO_JULGAMENTO_ID__7 = '7';
    public const CRITERIO_JULGAMENTO_ID__8 = '8';
    public const CRITERIO_JULGAMENTO_ID__9 = '9';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaterialOuServicoAllowableValues()
    {
        return [
            self::MATERIAL_OU_SERVICO_M,
            self::MATERIAL_OU_SERVICO_S,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTipoBeneficioIdAllowableValues()
    {
        return [
            self::TIPO_BENEFICIO_ID__1,
            self::TIPO_BENEFICIO_ID__2,
            self::TIPO_BENEFICIO_ID__3,
            self::TIPO_BENEFICIO_ID__4,
            self::TIPO_BENEFICIO_ID__5,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCriterioJulgamentoIdAllowableValues()
    {
        return [
            self::CRITERIO_JULGAMENTO_ID__1,
            self::CRITERIO_JULGAMENTO_ID__2,
            self::CRITERIO_JULGAMENTO_ID__3,
            self::CRITERIO_JULGAMENTO_ID__4,
            self::CRITERIO_JULGAMENTO_ID__5,
            self::CRITERIO_JULGAMENTO_ID__6,
            self::CRITERIO_JULGAMENTO_ID__7,
            self::CRITERIO_JULGAMENTO_ID__8,
            self::CRITERIO_JULGAMENTO_ID__9,
        ];
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
        $this->setIfExists('numero_item', $data ?? [], null);
        $this->setIfExists('material_ou_servico', $data ?? [], null);
        $this->setIfExists('orcamento_sigiloso', $data ?? [], null);
        $this->setIfExists('tipo_beneficio_id', $data ?? [], null);
        $this->setIfExists('incentivo_produtivo_basico', $data ?? [], null);
        $this->setIfExists('descricao', $data ?? [], null);
        $this->setIfExists('quantidade', $data ?? [], null);
        $this->setIfExists('unidade_medida', $data ?? [], null);
        $this->setIfExists('valor_unitario_estimado', $data ?? [], null);
        $this->setIfExists('valor_total', $data ?? [], null);
        $this->setIfExists('criterio_julgamento_id', $data ?? [], null);
        $this->setIfExists('patrimonio', $data ?? [], null);
        $this->setIfExists('codigo_registro_imobiliario', $data ?? [], null);
        $this->setIfExists('item_categoria_id', $data ?? [], null);
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

        if ($this->container['numero_item'] === null) {
            $invalidProperties[] = "'numero_item' can't be null";
        }
        if ($this->container['material_ou_servico'] === null) {
            $invalidProperties[] = "'material_ou_servico' can't be null";
        }
        $allowedValues = $this->getMaterialOuServicoAllowableValues();
        if (!is_null($this->container['material_ou_servico']) && !in_array($this->container['material_ou_servico'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'material_ou_servico', must be one of '%s'",
                $this->container['material_ou_servico'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['orcamento_sigiloso'] === null) {
            $invalidProperties[] = "'orcamento_sigiloso' can't be null";
        }
        if ($this->container['tipo_beneficio_id'] === null) {
            $invalidProperties[] = "'tipo_beneficio_id' can't be null";
        }
        $allowedValues = $this->getTipoBeneficioIdAllowableValues();
        if (!is_null($this->container['tipo_beneficio_id']) && !in_array($this->container['tipo_beneficio_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tipo_beneficio_id', must be one of '%s'",
                $this->container['tipo_beneficio_id'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['incentivo_produtivo_basico'] === null) {
            $invalidProperties[] = "'incentivo_produtivo_basico' can't be null";
        }
        if ($this->container['descricao'] === null) {
            $invalidProperties[] = "'descricao' can't be null";
        }
        if ((mb_strlen($this->container['descricao']) > 2048)) {
            $invalidProperties[] = "invalid value for 'descricao', the character length must be smaller than or equal to 2048.";
        }

        if ((mb_strlen($this->container['descricao']) < 0)) {
            $invalidProperties[] = "invalid value for 'descricao', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['quantidade'] === null) {
            $invalidProperties[] = "'quantidade' can't be null";
        }
        if (($this->container['quantidade'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'quantidade', must be bigger than or equal to 0.0.";
        }

        if ($this->container['unidade_medida'] === null) {
            $invalidProperties[] = "'unidade_medida' can't be null";
        }
        if ((mb_strlen($this->container['unidade_medida']) > 30)) {
            $invalidProperties[] = "invalid value for 'unidade_medida', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['unidade_medida']) < 0)) {
            $invalidProperties[] = "invalid value for 'unidade_medida', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['valor_unitario_estimado'] === null) {
            $invalidProperties[] = "'valor_unitario_estimado' can't be null";
        }
        if (($this->container['valor_unitario_estimado'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'valor_unitario_estimado', must be bigger than or equal to 0.0.";
        }

        if ($this->container['valor_total'] === null) {
            $invalidProperties[] = "'valor_total' can't be null";
        }
        if (($this->container['valor_total'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'valor_total', must be bigger than or equal to 0.0.";
        }

        if ($this->container['criterio_julgamento_id'] === null) {
            $invalidProperties[] = "'criterio_julgamento_id' can't be null";
        }
        $allowedValues = $this->getCriterioJulgamentoIdAllowableValues();
        if (!is_null($this->container['criterio_julgamento_id']) && !in_array($this->container['criterio_julgamento_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'criterio_julgamento_id', must be one of '%s'",
                $this->container['criterio_julgamento_id'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['patrimonio']) && (mb_strlen($this->container['patrimonio']) > 255)) {
            $invalidProperties[] = "invalid value for 'patrimonio', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['patrimonio']) && (mb_strlen($this->container['patrimonio']) < 0)) {
            $invalidProperties[] = "invalid value for 'patrimonio', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['patrimonio']) && !preg_match("/^(?!\\s*$).*/", $this->container['patrimonio'])) {
            $invalidProperties[] = "invalid value for 'patrimonio', must be conform to the pattern /^(?!\\s*$).*/.";
        }

        if (!is_null($this->container['codigo_registro_imobiliario']) && !preg_match("/^(?!\\s*$).*/", $this->container['codigo_registro_imobiliario'])) {
            $invalidProperties[] = "invalid value for 'codigo_registro_imobiliario', must be conform to the pattern /^(?!\\s*$).*/.";
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
     * Gets numero_item
     *
     * @return int
     */
    public function getNumeroItem()
    {
        return $this->container['numero_item'];
    }

    /**
     * Sets numero_item
     *
     * @param int $numero_item numero_item
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
     * Gets material_ou_servico
     *
     * @return string
     */
    public function getMaterialOuServico()
    {
        return $this->container['material_ou_servico'];
    }

    /**
     * Sets material_ou_servico
     *
     * @param string $material_ou_servico material_ou_servico
     *
     * @return self
     */
    public function setMaterialOuServico($material_ou_servico)
    {
        if (is_null($material_ou_servico)) {
            throw new \InvalidArgumentException('non-nullable material_ou_servico cannot be null');
        }
        $allowedValues = $this->getMaterialOuServicoAllowableValues();
        if (!in_array($material_ou_servico, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'material_ou_servico', must be one of '%s'",
                    $material_ou_servico,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['material_ou_servico'] = $material_ou_servico;

        return $this;
    }

    /**
     * Gets orcamento_sigiloso
     *
     * @return bool
     */
    public function getOrcamentoSigiloso()
    {
        return $this->container['orcamento_sigiloso'];
    }

    /**
     * Sets orcamento_sigiloso
     *
     * @param bool $orcamento_sigiloso orcamento_sigiloso
     *
     * @return self
     */
    public function setOrcamentoSigiloso($orcamento_sigiloso)
    {
        if (is_null($orcamento_sigiloso)) {
            throw new \InvalidArgumentException('non-nullable orcamento_sigiloso cannot be null');
        }
        $this->container['orcamento_sigiloso'] = $orcamento_sigiloso;

        return $this;
    }

    /**
     * Gets tipo_beneficio_id
     *
     * @return string
     */
    public function getTipoBeneficioId()
    {
        return $this->container['tipo_beneficio_id'];
    }

    /**
     * Sets tipo_beneficio_id
     *
     * @param string $tipo_beneficio_id tipo_beneficio_id
     *
     * @return self
     */
    public function setTipoBeneficioId($tipo_beneficio_id)
    {
        if (is_null($tipo_beneficio_id)) {
            throw new \InvalidArgumentException('non-nullable tipo_beneficio_id cannot be null');
        }
        $allowedValues = $this->getTipoBeneficioIdAllowableValues();
        if (!in_array($tipo_beneficio_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tipo_beneficio_id', must be one of '%s'",
                    $tipo_beneficio_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_beneficio_id'] = $tipo_beneficio_id;

        return $this;
    }

    /**
     * Gets incentivo_produtivo_basico
     *
     * @return bool
     */
    public function getIncentivoProdutivoBasico()
    {
        return $this->container['incentivo_produtivo_basico'];
    }

    /**
     * Sets incentivo_produtivo_basico
     *
     * @param bool $incentivo_produtivo_basico incentivo_produtivo_basico
     *
     * @return self
     */
    public function setIncentivoProdutivoBasico($incentivo_produtivo_basico)
    {
        if (is_null($incentivo_produtivo_basico)) {
            throw new \InvalidArgumentException('non-nullable incentivo_produtivo_basico cannot be null');
        }
        $this->container['incentivo_produtivo_basico'] = $incentivo_produtivo_basico;

        return $this;
    }

    /**
     * Gets descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->container['descricao'];
    }

    /**
     * Sets descricao
     *
     * @param string $descricao descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        if (is_null($descricao)) {
            throw new \InvalidArgumentException('non-nullable descricao cannot be null');
        }
        if ((mb_strlen($descricao) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $descricao when calling IncluirCompraItemDTO., must be smaller than or equal to 2048.');
        }
        if ((mb_strlen($descricao) < 0)) {
            throw new \InvalidArgumentException('invalid length for $descricao when calling IncluirCompraItemDTO., must be bigger than or equal to 0.');
        }

        $this->container['descricao'] = $descricao;

        return $this;
    }

    /**
     * Gets quantidade
     *
     * @return float
     */
    public function getQuantidade()
    {
        return $this->container['quantidade'];
    }

    /**
     * Sets quantidade
     *
     * @param float $quantidade quantidade
     *
     * @return self
     */
    public function setQuantidade($quantidade)
    {
        if (is_null($quantidade)) {
            throw new \InvalidArgumentException('non-nullable quantidade cannot be null');
        }

        if (($quantidade < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $quantidade when calling IncluirCompraItemDTO., must be bigger than or equal to 0.0.');
        }

        $this->container['quantidade'] = $quantidade;

        return $this;
    }

    /**
     * Gets unidade_medida
     *
     * @return string
     */
    public function getUnidadeMedida()
    {
        return $this->container['unidade_medida'];
    }

    /**
     * Sets unidade_medida
     *
     * @param string $unidade_medida unidade_medida
     *
     * @return self
     */
    public function setUnidadeMedida($unidade_medida)
    {
        if (is_null($unidade_medida)) {
            throw new \InvalidArgumentException('non-nullable unidade_medida cannot be null');
        }
        if ((mb_strlen($unidade_medida) > 30)) {
            throw new \InvalidArgumentException('invalid length for $unidade_medida when calling IncluirCompraItemDTO., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($unidade_medida) < 0)) {
            throw new \InvalidArgumentException('invalid length for $unidade_medida when calling IncluirCompraItemDTO., must be bigger than or equal to 0.');
        }

        $this->container['unidade_medida'] = $unidade_medida;

        return $this;
    }

    /**
     * Gets valor_unitario_estimado
     *
     * @return float
     */
    public function getValorUnitarioEstimado()
    {
        return $this->container['valor_unitario_estimado'];
    }

    /**
     * Sets valor_unitario_estimado
     *
     * @param float $valor_unitario_estimado valor_unitario_estimado
     *
     * @return self
     */
    public function setValorUnitarioEstimado($valor_unitario_estimado)
    {
        if (is_null($valor_unitario_estimado)) {
            throw new \InvalidArgumentException('non-nullable valor_unitario_estimado cannot be null');
        }

        if (($valor_unitario_estimado < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $valor_unitario_estimado when calling IncluirCompraItemDTO., must be bigger than or equal to 0.0.');
        }

        $this->container['valor_unitario_estimado'] = $valor_unitario_estimado;

        return $this;
    }

    /**
     * Gets valor_total
     *
     * @return float
     */
    public function getValorTotal()
    {
        return $this->container['valor_total'];
    }

    /**
     * Sets valor_total
     *
     * @param float $valor_total valor_total
     *
     * @return self
     */
    public function setValorTotal($valor_total)
    {
        if (is_null($valor_total)) {
            throw new \InvalidArgumentException('non-nullable valor_total cannot be null');
        }

        if (($valor_total < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $valor_total when calling IncluirCompraItemDTO., must be bigger than or equal to 0.0.');
        }

        $this->container['valor_total'] = $valor_total;

        return $this;
    }

    /**
     * Gets criterio_julgamento_id
     *
     * @return string
     */
    public function getCriterioJulgamentoId()
    {
        return $this->container['criterio_julgamento_id'];
    }

    /**
     * Sets criterio_julgamento_id
     *
     * @param string $criterio_julgamento_id criterio_julgamento_id
     *
     * @return self
     */
    public function setCriterioJulgamentoId($criterio_julgamento_id)
    {
        if (is_null($criterio_julgamento_id)) {
            throw new \InvalidArgumentException('non-nullable criterio_julgamento_id cannot be null');
        }
        $allowedValues = $this->getCriterioJulgamentoIdAllowableValues();
        if (!in_array($criterio_julgamento_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'criterio_julgamento_id', must be one of '%s'",
                    $criterio_julgamento_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['criterio_julgamento_id'] = $criterio_julgamento_id;

        return $this;
    }

    /**
     * Gets patrimonio
     *
     * @return string|null
     */
    public function getPatrimonio()
    {
        return $this->container['patrimonio'];
    }

    /**
     * Sets patrimonio
     *
     * @param string|null $patrimonio patrimonio
     *
     * @return self
     */
    public function setPatrimonio($patrimonio)
    {
        if (is_null($patrimonio)) {
            throw new \InvalidArgumentException('non-nullable patrimonio cannot be null');
        }
        if ((mb_strlen($patrimonio) > 255)) {
            throw new \InvalidArgumentException('invalid length for $patrimonio when calling IncluirCompraItemDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($patrimonio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $patrimonio when calling IncluirCompraItemDTO., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^(?!\\s*$).*/", ObjectSerializer::toString($patrimonio)))) {
            throw new \InvalidArgumentException("invalid value for \$patrimonio when calling IncluirCompraItemDTO., must conform to the pattern /^(?!\\s*$).*/.");
        }

        $this->container['patrimonio'] = $patrimonio;

        return $this;
    }

    /**
     * Gets codigo_registro_imobiliario
     *
     * @return string|null
     */
    public function getCodigoRegistroImobiliario()
    {
        return $this->container['codigo_registro_imobiliario'];
    }

    /**
     * Sets codigo_registro_imobiliario
     *
     * @param string|null $codigo_registro_imobiliario codigo_registro_imobiliario
     *
     * @return self
     */
    public function setCodigoRegistroImobiliario($codigo_registro_imobiliario)
    {
        if (is_null($codigo_registro_imobiliario)) {
            throw new \InvalidArgumentException('non-nullable codigo_registro_imobiliario cannot be null');
        }

        if ((!preg_match("/^(?!\\s*$).*/", ObjectSerializer::toString($codigo_registro_imobiliario)))) {
            throw new \InvalidArgumentException("invalid value for \$codigo_registro_imobiliario when calling IncluirCompraItemDTO., must conform to the pattern /^(?!\\s*$).*/.");
        }

        $this->container['codigo_registro_imobiliario'] = $codigo_registro_imobiliario;

        return $this;
    }

    /**
     * Gets item_categoria_id
     *
     * @return int|null
     */
    public function getItemCategoriaId()
    {
        return $this->container['item_categoria_id'];
    }

    /**
     * Sets item_categoria_id
     *
     * @param int|null $item_categoria_id item_categoria_id
     *
     * @return self
     */
    public function setItemCategoriaId($item_categoria_id)
    {
        if (is_null($item_categoria_id)) {
            throw new \InvalidArgumentException('non-nullable item_categoria_id cannot be null');
        }
        $this->container['item_categoria_id'] = $item_categoria_id;

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


