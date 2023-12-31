<?php
/**
 * AlterarCompraItemParcialDTO
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
 * AlterarCompraItemParcialDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AlterarCompraItemParcialDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlterarCompraItemParcialDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'material_ou_servico' => 'string',
        'tipo_beneficio_id' => 'string',
        'incentivo_produtivo_basico' => 'bool',
        'descricao' => 'string',
        'quantidade' => 'float',
        'unidade_medida' => 'string',
        'valor_unitario_estimado' => 'float',
        'valor_total' => 'float',
        'orcamento_sigiloso' => 'bool',
        'situacao_compra_item_id' => 'string',
        'criterio_julgamento_id' => 'string',
        'patrimonio' => 'string',
        'codigo_registro_imobiliario' => 'string',
        'item_categoria_id' => 'int',
        'justificativa' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'material_ou_servico' => null,
        'tipo_beneficio_id' => null,
        'incentivo_produtivo_basico' => null,
        'descricao' => null,
        'quantidade' => null,
        'unidade_medida' => null,
        'valor_unitario_estimado' => null,
        'valor_total' => null,
        'orcamento_sigiloso' => null,
        'situacao_compra_item_id' => null,
        'criterio_julgamento_id' => null,
        'patrimonio' => null,
        'codigo_registro_imobiliario' => null,
        'item_categoria_id' => 'int64',
        'justificativa' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'material_ou_servico' => false,
		'tipo_beneficio_id' => false,
		'incentivo_produtivo_basico' => false,
		'descricao' => false,
		'quantidade' => false,
		'unidade_medida' => false,
		'valor_unitario_estimado' => false,
		'valor_total' => false,
		'orcamento_sigiloso' => false,
		'situacao_compra_item_id' => false,
		'criterio_julgamento_id' => false,
		'patrimonio' => false,
		'codigo_registro_imobiliario' => false,
		'item_categoria_id' => false,
		'justificativa' => false
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
        'material_ou_servico' => 'materialOuServico',
        'tipo_beneficio_id' => 'tipoBeneficioId',
        'incentivo_produtivo_basico' => 'incentivoProdutivoBasico',
        'descricao' => 'descricao',
        'quantidade' => 'quantidade',
        'unidade_medida' => 'unidadeMedida',
        'valor_unitario_estimado' => 'valorUnitarioEstimado',
        'valor_total' => 'valorTotal',
        'orcamento_sigiloso' => 'orcamentoSigiloso',
        'situacao_compra_item_id' => 'situacaoCompraItemId',
        'criterio_julgamento_id' => 'criterioJulgamentoId',
        'patrimonio' => 'patrimonio',
        'codigo_registro_imobiliario' => 'codigoRegistroImobiliario',
        'item_categoria_id' => 'itemCategoriaId',
        'justificativa' => 'justificativa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'material_ou_servico' => 'setMaterialOuServico',
        'tipo_beneficio_id' => 'setTipoBeneficioId',
        'incentivo_produtivo_basico' => 'setIncentivoProdutivoBasico',
        'descricao' => 'setDescricao',
        'quantidade' => 'setQuantidade',
        'unidade_medida' => 'setUnidadeMedida',
        'valor_unitario_estimado' => 'setValorUnitarioEstimado',
        'valor_total' => 'setValorTotal',
        'orcamento_sigiloso' => 'setOrcamentoSigiloso',
        'situacao_compra_item_id' => 'setSituacaoCompraItemId',
        'criterio_julgamento_id' => 'setCriterioJulgamentoId',
        'patrimonio' => 'setPatrimonio',
        'codigo_registro_imobiliario' => 'setCodigoRegistroImobiliario',
        'item_categoria_id' => 'setItemCategoriaId',
        'justificativa' => 'setJustificativa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'material_ou_servico' => 'getMaterialOuServico',
        'tipo_beneficio_id' => 'getTipoBeneficioId',
        'incentivo_produtivo_basico' => 'getIncentivoProdutivoBasico',
        'descricao' => 'getDescricao',
        'quantidade' => 'getQuantidade',
        'unidade_medida' => 'getUnidadeMedida',
        'valor_unitario_estimado' => 'getValorUnitarioEstimado',
        'valor_total' => 'getValorTotal',
        'orcamento_sigiloso' => 'getOrcamentoSigiloso',
        'situacao_compra_item_id' => 'getSituacaoCompraItemId',
        'criterio_julgamento_id' => 'getCriterioJulgamentoId',
        'patrimonio' => 'getPatrimonio',
        'codigo_registro_imobiliario' => 'getCodigoRegistroImobiliario',
        'item_categoria_id' => 'getItemCategoriaId',
        'justificativa' => 'getJustificativa'
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
    public const SITUACAO_COMPRA_ITEM_ID__1 = '1';
    public const SITUACAO_COMPRA_ITEM_ID__2 = '2';
    public const SITUACAO_COMPRA_ITEM_ID__3 = '3';
    public const SITUACAO_COMPRA_ITEM_ID__4 = '4';
    public const SITUACAO_COMPRA_ITEM_ID__5 = '5';
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
    public function getSituacaoCompraItemIdAllowableValues()
    {
        return [
            self::SITUACAO_COMPRA_ITEM_ID__1,
            self::SITUACAO_COMPRA_ITEM_ID__2,
            self::SITUACAO_COMPRA_ITEM_ID__3,
            self::SITUACAO_COMPRA_ITEM_ID__4,
            self::SITUACAO_COMPRA_ITEM_ID__5,
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
        $this->setIfExists('material_ou_servico', $data ?? [], null);
        $this->setIfExists('tipo_beneficio_id', $data ?? [], null);
        $this->setIfExists('incentivo_produtivo_basico', $data ?? [], null);
        $this->setIfExists('descricao', $data ?? [], null);
        $this->setIfExists('quantidade', $data ?? [], null);
        $this->setIfExists('unidade_medida', $data ?? [], null);
        $this->setIfExists('valor_unitario_estimado', $data ?? [], null);
        $this->setIfExists('valor_total', $data ?? [], null);
        $this->setIfExists('orcamento_sigiloso', $data ?? [], null);
        $this->setIfExists('situacao_compra_item_id', $data ?? [], null);
        $this->setIfExists('criterio_julgamento_id', $data ?? [], null);
        $this->setIfExists('patrimonio', $data ?? [], null);
        $this->setIfExists('codigo_registro_imobiliario', $data ?? [], null);
        $this->setIfExists('item_categoria_id', $data ?? [], null);
        $this->setIfExists('justificativa', $data ?? [], null);
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

        $allowedValues = $this->getMaterialOuServicoAllowableValues();
        if (!is_null($this->container['material_ou_servico']) && !in_array($this->container['material_ou_servico'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'material_ou_servico', must be one of '%s'",
                $this->container['material_ou_servico'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTipoBeneficioIdAllowableValues();
        if (!is_null($this->container['tipo_beneficio_id']) && !in_array($this->container['tipo_beneficio_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tipo_beneficio_id', must be one of '%s'",
                $this->container['tipo_beneficio_id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSituacaoCompraItemIdAllowableValues();
        if (!is_null($this->container['situacao_compra_item_id']) && !in_array($this->container['situacao_compra_item_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'situacao_compra_item_id', must be one of '%s'",
                $this->container['situacao_compra_item_id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCriterioJulgamentoIdAllowableValues();
        if (!is_null($this->container['criterio_julgamento_id']) && !in_array($this->container['criterio_julgamento_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'criterio_julgamento_id', must be one of '%s'",
                $this->container['criterio_julgamento_id'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['justificativa']) && (mb_strlen($this->container['justificativa']) > 255)) {
            $invalidProperties[] = "invalid value for 'justificativa', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['justificativa']) && (mb_strlen($this->container['justificativa']) < 0)) {
            $invalidProperties[] = "invalid value for 'justificativa', the character length must be bigger than or equal to 0.";
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
     * Gets material_ou_servico
     *
     * @return string|null
     */
    public function getMaterialOuServico()
    {
        return $this->container['material_ou_servico'];
    }

    /**
     * Sets material_ou_servico
     *
     * @param string|null $material_ou_servico material_ou_servico
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
     * Gets tipo_beneficio_id
     *
     * @return string|null
     */
    public function getTipoBeneficioId()
    {
        return $this->container['tipo_beneficio_id'];
    }

    /**
     * Sets tipo_beneficio_id
     *
     * @param string|null $tipo_beneficio_id tipo_beneficio_id
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
     * @return bool|null
     */
    public function getIncentivoProdutivoBasico()
    {
        return $this->container['incentivo_produtivo_basico'];
    }

    /**
     * Sets incentivo_produtivo_basico
     *
     * @param bool|null $incentivo_produtivo_basico incentivo_produtivo_basico
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
     * @return string|null
     */
    public function getDescricao()
    {
        return $this->container['descricao'];
    }

    /**
     * Sets descricao
     *
     * @param string|null $descricao descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        if (is_null($descricao)) {
            throw new \InvalidArgumentException('non-nullable descricao cannot be null');
        }
        $this->container['descricao'] = $descricao;

        return $this;
    }

    /**
     * Gets quantidade
     *
     * @return float|null
     */
    public function getQuantidade()
    {
        return $this->container['quantidade'];
    }

    /**
     * Sets quantidade
     *
     * @param float|null $quantidade quantidade
     *
     * @return self
     */
    public function setQuantidade($quantidade)
    {
        if (is_null($quantidade)) {
            throw new \InvalidArgumentException('non-nullable quantidade cannot be null');
        }
        $this->container['quantidade'] = $quantidade;

        return $this;
    }

    /**
     * Gets unidade_medida
     *
     * @return string|null
     */
    public function getUnidadeMedida()
    {
        return $this->container['unidade_medida'];
    }

    /**
     * Sets unidade_medida
     *
     * @param string|null $unidade_medida unidade_medida
     *
     * @return self
     */
    public function setUnidadeMedida($unidade_medida)
    {
        if (is_null($unidade_medida)) {
            throw new \InvalidArgumentException('non-nullable unidade_medida cannot be null');
        }
        $this->container['unidade_medida'] = $unidade_medida;

        return $this;
    }

    /**
     * Gets valor_unitario_estimado
     *
     * @return float|null
     */
    public function getValorUnitarioEstimado()
    {
        return $this->container['valor_unitario_estimado'];
    }

    /**
     * Sets valor_unitario_estimado
     *
     * @param float|null $valor_unitario_estimado valor_unitario_estimado
     *
     * @return self
     */
    public function setValorUnitarioEstimado($valor_unitario_estimado)
    {
        if (is_null($valor_unitario_estimado)) {
            throw new \InvalidArgumentException('non-nullable valor_unitario_estimado cannot be null');
        }
        $this->container['valor_unitario_estimado'] = $valor_unitario_estimado;

        return $this;
    }

    /**
     * Gets valor_total
     *
     * @return float|null
     */
    public function getValorTotal()
    {
        return $this->container['valor_total'];
    }

    /**
     * Sets valor_total
     *
     * @param float|null $valor_total valor_total
     *
     * @return self
     */
    public function setValorTotal($valor_total)
    {
        if (is_null($valor_total)) {
            throw new \InvalidArgumentException('non-nullable valor_total cannot be null');
        }
        $this->container['valor_total'] = $valor_total;

        return $this;
    }

    /**
     * Gets orcamento_sigiloso
     *
     * @return bool|null
     */
    public function getOrcamentoSigiloso()
    {
        return $this->container['orcamento_sigiloso'];
    }

    /**
     * Sets orcamento_sigiloso
     *
     * @param bool|null $orcamento_sigiloso orcamento_sigiloso
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
     * Gets situacao_compra_item_id
     *
     * @return string|null
     */
    public function getSituacaoCompraItemId()
    {
        return $this->container['situacao_compra_item_id'];
    }

    /**
     * Sets situacao_compra_item_id
     *
     * @param string|null $situacao_compra_item_id situacao_compra_item_id
     *
     * @return self
     */
    public function setSituacaoCompraItemId($situacao_compra_item_id)
    {
        if (is_null($situacao_compra_item_id)) {
            throw new \InvalidArgumentException('non-nullable situacao_compra_item_id cannot be null');
        }
        $allowedValues = $this->getSituacaoCompraItemIdAllowableValues();
        if (!in_array($situacao_compra_item_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'situacao_compra_item_id', must be one of '%s'",
                    $situacao_compra_item_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['situacao_compra_item_id'] = $situacao_compra_item_id;

        return $this;
    }

    /**
     * Gets criterio_julgamento_id
     *
     * @return string|null
     */
    public function getCriterioJulgamentoId()
    {
        return $this->container['criterio_julgamento_id'];
    }

    /**
     * Sets criterio_julgamento_id
     *
     * @param string|null $criterio_julgamento_id criterio_julgamento_id
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
     * Gets justificativa
     *
     * @return string|null
     */
    public function getJustificativa()
    {
        return $this->container['justificativa'];
    }

    /**
     * Sets justificativa
     *
     * @param string|null $justificativa justificativa
     *
     * @return self
     */
    public function setJustificativa($justificativa)
    {
        if (is_null($justificativa)) {
            throw new \InvalidArgumentException('non-nullable justificativa cannot be null');
        }
        if ((mb_strlen($justificativa) > 255)) {
            throw new \InvalidArgumentException('invalid length for $justificativa when calling AlterarCompraItemParcialDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($justificativa) < 0)) {
            throw new \InvalidArgumentException('invalid length for $justificativa when calling AlterarCompraItemParcialDTO., must be bigger than or equal to 0.');
        }

        $this->container['justificativa'] = $justificativa;

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


