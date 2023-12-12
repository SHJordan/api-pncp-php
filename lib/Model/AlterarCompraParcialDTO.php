<?php
/**
 * AlterarCompraParcialDTO
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
 * AlterarCompraParcialDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AlterarCompraParcialDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlterarCompraParcialDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tipo_instrumento_convocatorio_id' => 'string',
        'modalidade_id' => 'string',
        'modo_disputa_id' => 'string',
        'numero_compra' => 'string',
        'numero_processo' => 'string',
        'situacao_compra_id' => 'string',
        'objeto_compra' => 'string',
        'informacao_complementar' => 'string',
        'amparo_legal_id' => 'int',
        'cnpj_orgao_sub_rogado' => 'string',
        'codigo_unidade_sub_rogada' => 'string',
        'srp' => 'bool',
        'data_abertura_proposta' => '\DateTime',
        'data_encerramento_proposta' => '\DateTime',
        'codigo_unidade_compradora' => 'string',
        'link_sistema_origem' => 'string',
        'justificativa' => 'string',
        'justificativa_presencial' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tipo_instrumento_convocatorio_id' => null,
        'modalidade_id' => null,
        'modo_disputa_id' => null,
        'numero_compra' => null,
        'numero_processo' => null,
        'situacao_compra_id' => null,
        'objeto_compra' => null,
        'informacao_complementar' => null,
        'amparo_legal_id' => 'int64',
        'cnpj_orgao_sub_rogado' => null,
        'codigo_unidade_sub_rogada' => null,
        'srp' => null,
        'data_abertura_proposta' => 'date-time',
        'data_encerramento_proposta' => 'date-time',
        'codigo_unidade_compradora' => null,
        'link_sistema_origem' => null,
        'justificativa' => null,
        'justificativa_presencial' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tipo_instrumento_convocatorio_id' => false,
		'modalidade_id' => false,
		'modo_disputa_id' => false,
		'numero_compra' => false,
		'numero_processo' => false,
		'situacao_compra_id' => false,
		'objeto_compra' => false,
		'informacao_complementar' => false,
		'amparo_legal_id' => false,
		'cnpj_orgao_sub_rogado' => false,
		'codigo_unidade_sub_rogada' => false,
		'srp' => false,
		'data_abertura_proposta' => false,
		'data_encerramento_proposta' => false,
		'codigo_unidade_compradora' => false,
		'link_sistema_origem' => false,
		'justificativa' => false,
		'justificativa_presencial' => false
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
        'tipo_instrumento_convocatorio_id' => 'tipoInstrumentoConvocatorioId',
        'modalidade_id' => 'modalidadeId',
        'modo_disputa_id' => 'modoDisputaId',
        'numero_compra' => 'numeroCompra',
        'numero_processo' => 'numeroProcesso',
        'situacao_compra_id' => 'situacaoCompraId',
        'objeto_compra' => 'objetoCompra',
        'informacao_complementar' => 'informacaoComplementar',
        'amparo_legal_id' => 'amparoLegalId',
        'cnpj_orgao_sub_rogado' => 'cnpjOrgaoSubRogado',
        'codigo_unidade_sub_rogada' => 'codigoUnidadeSubRogada',
        'srp' => 'srp',
        'data_abertura_proposta' => 'dataAberturaProposta',
        'data_encerramento_proposta' => 'dataEncerramentoProposta',
        'codigo_unidade_compradora' => 'codigoUnidadeCompradora',
        'link_sistema_origem' => 'linkSistemaOrigem',
        'justificativa' => 'justificativa',
        'justificativa_presencial' => 'justificativaPresencial'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tipo_instrumento_convocatorio_id' => 'setTipoInstrumentoConvocatorioId',
        'modalidade_id' => 'setModalidadeId',
        'modo_disputa_id' => 'setModoDisputaId',
        'numero_compra' => 'setNumeroCompra',
        'numero_processo' => 'setNumeroProcesso',
        'situacao_compra_id' => 'setSituacaoCompraId',
        'objeto_compra' => 'setObjetoCompra',
        'informacao_complementar' => 'setInformacaoComplementar',
        'amparo_legal_id' => 'setAmparoLegalId',
        'cnpj_orgao_sub_rogado' => 'setCnpjOrgaoSubRogado',
        'codigo_unidade_sub_rogada' => 'setCodigoUnidadeSubRogada',
        'srp' => 'setSrp',
        'data_abertura_proposta' => 'setDataAberturaProposta',
        'data_encerramento_proposta' => 'setDataEncerramentoProposta',
        'codigo_unidade_compradora' => 'setCodigoUnidadeCompradora',
        'link_sistema_origem' => 'setLinkSistemaOrigem',
        'justificativa' => 'setJustificativa',
        'justificativa_presencial' => 'setJustificativaPresencial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tipo_instrumento_convocatorio_id' => 'getTipoInstrumentoConvocatorioId',
        'modalidade_id' => 'getModalidadeId',
        'modo_disputa_id' => 'getModoDisputaId',
        'numero_compra' => 'getNumeroCompra',
        'numero_processo' => 'getNumeroProcesso',
        'situacao_compra_id' => 'getSituacaoCompraId',
        'objeto_compra' => 'getObjetoCompra',
        'informacao_complementar' => 'getInformacaoComplementar',
        'amparo_legal_id' => 'getAmparoLegalId',
        'cnpj_orgao_sub_rogado' => 'getCnpjOrgaoSubRogado',
        'codigo_unidade_sub_rogada' => 'getCodigoUnidadeSubRogada',
        'srp' => 'getSrp',
        'data_abertura_proposta' => 'getDataAberturaProposta',
        'data_encerramento_proposta' => 'getDataEncerramentoProposta',
        'codigo_unidade_compradora' => 'getCodigoUnidadeCompradora',
        'link_sistema_origem' => 'getLinkSistemaOrigem',
        'justificativa' => 'getJustificativa',
        'justificativa_presencial' => 'getJustificativaPresencial'
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

    public const TIPO_INSTRUMENTO_CONVOCATORIO_ID__1 = '1';
    public const TIPO_INSTRUMENTO_CONVOCATORIO_ID__2 = '2';
    public const TIPO_INSTRUMENTO_CONVOCATORIO_ID__3 = '3';
    public const MODALIDADE_ID__1 = '1';
    public const MODALIDADE_ID__2 = '2';
    public const MODALIDADE_ID__3 = '3';
    public const MODALIDADE_ID__4 = '4';
    public const MODALIDADE_ID__5 = '5';
    public const MODALIDADE_ID__6 = '6';
    public const MODALIDADE_ID__7 = '7';
    public const MODALIDADE_ID__8 = '8';
    public const MODALIDADE_ID__9 = '9';
    public const MODALIDADE_ID__10 = '10';
    public const MODALIDADE_ID__11 = '11';
    public const MODALIDADE_ID__12 = '12';
    public const MODALIDADE_ID__13 = '13';
    public const MODALIDADE_ID__14 = '14';
    public const MODO_DISPUTA_ID__1 = '1';
    public const MODO_DISPUTA_ID__2 = '2';
    public const MODO_DISPUTA_ID__3 = '3';
    public const MODO_DISPUTA_ID__4 = '4';
    public const MODO_DISPUTA_ID__5 = '5';
    public const MODO_DISPUTA_ID__6 = '6';
    public const SITUACAO_COMPRA_ID__1 = '1';
    public const SITUACAO_COMPRA_ID__2 = '2';
    public const SITUACAO_COMPRA_ID__3 = '3';
    public const SITUACAO_COMPRA_ID__4 = '4';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTipoInstrumentoConvocatorioIdAllowableValues()
    {
        return [
            self::TIPO_INSTRUMENTO_CONVOCATORIO_ID__1,
            self::TIPO_INSTRUMENTO_CONVOCATORIO_ID__2,
            self::TIPO_INSTRUMENTO_CONVOCATORIO_ID__3,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModalidadeIdAllowableValues()
    {
        return [
            self::MODALIDADE_ID__1,
            self::MODALIDADE_ID__2,
            self::MODALIDADE_ID__3,
            self::MODALIDADE_ID__4,
            self::MODALIDADE_ID__5,
            self::MODALIDADE_ID__6,
            self::MODALIDADE_ID__7,
            self::MODALIDADE_ID__8,
            self::MODALIDADE_ID__9,
            self::MODALIDADE_ID__10,
            self::MODALIDADE_ID__11,
            self::MODALIDADE_ID__12,
            self::MODALIDADE_ID__13,
            self::MODALIDADE_ID__14,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModoDisputaIdAllowableValues()
    {
        return [
            self::MODO_DISPUTA_ID__1,
            self::MODO_DISPUTA_ID__2,
            self::MODO_DISPUTA_ID__3,
            self::MODO_DISPUTA_ID__4,
            self::MODO_DISPUTA_ID__5,
            self::MODO_DISPUTA_ID__6,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSituacaoCompraIdAllowableValues()
    {
        return [
            self::SITUACAO_COMPRA_ID__1,
            self::SITUACAO_COMPRA_ID__2,
            self::SITUACAO_COMPRA_ID__3,
            self::SITUACAO_COMPRA_ID__4,
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
        $this->setIfExists('tipo_instrumento_convocatorio_id', $data ?? [], null);
        $this->setIfExists('modalidade_id', $data ?? [], null);
        $this->setIfExists('modo_disputa_id', $data ?? [], null);
        $this->setIfExists('numero_compra', $data ?? [], null);
        $this->setIfExists('numero_processo', $data ?? [], null);
        $this->setIfExists('situacao_compra_id', $data ?? [], null);
        $this->setIfExists('objeto_compra', $data ?? [], null);
        $this->setIfExists('informacao_complementar', $data ?? [], null);
        $this->setIfExists('amparo_legal_id', $data ?? [], null);
        $this->setIfExists('cnpj_orgao_sub_rogado', $data ?? [], null);
        $this->setIfExists('codigo_unidade_sub_rogada', $data ?? [], null);
        $this->setIfExists('srp', $data ?? [], null);
        $this->setIfExists('data_abertura_proposta', $data ?? [], null);
        $this->setIfExists('data_encerramento_proposta', $data ?? [], null);
        $this->setIfExists('codigo_unidade_compradora', $data ?? [], null);
        $this->setIfExists('link_sistema_origem', $data ?? [], null);
        $this->setIfExists('justificativa', $data ?? [], null);
        $this->setIfExists('justificativa_presencial', $data ?? [], null);
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

        $allowedValues = $this->getTipoInstrumentoConvocatorioIdAllowableValues();
        if (!is_null($this->container['tipo_instrumento_convocatorio_id']) && !in_array($this->container['tipo_instrumento_convocatorio_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tipo_instrumento_convocatorio_id', must be one of '%s'",
                $this->container['tipo_instrumento_convocatorio_id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getModalidadeIdAllowableValues();
        if (!is_null($this->container['modalidade_id']) && !in_array($this->container['modalidade_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'modalidade_id', must be one of '%s'",
                $this->container['modalidade_id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getModoDisputaIdAllowableValues();
        if (!is_null($this->container['modo_disputa_id']) && !in_array($this->container['modo_disputa_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'modo_disputa_id', must be one of '%s'",
                $this->container['modo_disputa_id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSituacaoCompraIdAllowableValues();
        if (!is_null($this->container['situacao_compra_id']) && !in_array($this->container['situacao_compra_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'situacao_compra_id', must be one of '%s'",
                $this->container['situacao_compra_id'],
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
     * Gets tipo_instrumento_convocatorio_id
     *
     * @return string|null
     */
    public function getTipoInstrumentoConvocatorioId()
    {
        return $this->container['tipo_instrumento_convocatorio_id'];
    }

    /**
     * Sets tipo_instrumento_convocatorio_id
     *
     * @param string|null $tipo_instrumento_convocatorio_id tipo_instrumento_convocatorio_id
     *
     * @return self
     */
    public function setTipoInstrumentoConvocatorioId($tipo_instrumento_convocatorio_id)
    {
        if (is_null($tipo_instrumento_convocatorio_id)) {
            throw new \InvalidArgumentException('non-nullable tipo_instrumento_convocatorio_id cannot be null');
        }
        $allowedValues = $this->getTipoInstrumentoConvocatorioIdAllowableValues();
        if (!in_array($tipo_instrumento_convocatorio_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tipo_instrumento_convocatorio_id', must be one of '%s'",
                    $tipo_instrumento_convocatorio_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_instrumento_convocatorio_id'] = $tipo_instrumento_convocatorio_id;

        return $this;
    }

    /**
     * Gets modalidade_id
     *
     * @return string|null
     */
    public function getModalidadeId()
    {
        return $this->container['modalidade_id'];
    }

    /**
     * Sets modalidade_id
     *
     * @param string|null $modalidade_id modalidade_id
     *
     * @return self
     */
    public function setModalidadeId($modalidade_id)
    {
        if (is_null($modalidade_id)) {
            throw new \InvalidArgumentException('non-nullable modalidade_id cannot be null');
        }
        $allowedValues = $this->getModalidadeIdAllowableValues();
        if (!in_array($modalidade_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'modalidade_id', must be one of '%s'",
                    $modalidade_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['modalidade_id'] = $modalidade_id;

        return $this;
    }

    /**
     * Gets modo_disputa_id
     *
     * @return string|null
     */
    public function getModoDisputaId()
    {
        return $this->container['modo_disputa_id'];
    }

    /**
     * Sets modo_disputa_id
     *
     * @param string|null $modo_disputa_id modo_disputa_id
     *
     * @return self
     */
    public function setModoDisputaId($modo_disputa_id)
    {
        if (is_null($modo_disputa_id)) {
            throw new \InvalidArgumentException('non-nullable modo_disputa_id cannot be null');
        }
        $allowedValues = $this->getModoDisputaIdAllowableValues();
        if (!in_array($modo_disputa_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'modo_disputa_id', must be one of '%s'",
                    $modo_disputa_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['modo_disputa_id'] = $modo_disputa_id;

        return $this;
    }

    /**
     * Gets numero_compra
     *
     * @return string|null
     */
    public function getNumeroCompra()
    {
        return $this->container['numero_compra'];
    }

    /**
     * Sets numero_compra
     *
     * @param string|null $numero_compra numero_compra
     *
     * @return self
     */
    public function setNumeroCompra($numero_compra)
    {
        if (is_null($numero_compra)) {
            throw new \InvalidArgumentException('non-nullable numero_compra cannot be null');
        }
        $this->container['numero_compra'] = $numero_compra;

        return $this;
    }

    /**
     * Gets numero_processo
     *
     * @return string|null
     */
    public function getNumeroProcesso()
    {
        return $this->container['numero_processo'];
    }

    /**
     * Sets numero_processo
     *
     * @param string|null $numero_processo numero_processo
     *
     * @return self
     */
    public function setNumeroProcesso($numero_processo)
    {
        if (is_null($numero_processo)) {
            throw new \InvalidArgumentException('non-nullable numero_processo cannot be null');
        }
        $this->container['numero_processo'] = $numero_processo;

        return $this;
    }

    /**
     * Gets situacao_compra_id
     *
     * @return string|null
     */
    public function getSituacaoCompraId()
    {
        return $this->container['situacao_compra_id'];
    }

    /**
     * Sets situacao_compra_id
     *
     * @param string|null $situacao_compra_id situacao_compra_id
     *
     * @return self
     */
    public function setSituacaoCompraId($situacao_compra_id)
    {
        if (is_null($situacao_compra_id)) {
            throw new \InvalidArgumentException('non-nullable situacao_compra_id cannot be null');
        }
        $allowedValues = $this->getSituacaoCompraIdAllowableValues();
        if (!in_array($situacao_compra_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'situacao_compra_id', must be one of '%s'",
                    $situacao_compra_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['situacao_compra_id'] = $situacao_compra_id;

        return $this;
    }

    /**
     * Gets objeto_compra
     *
     * @return string|null
     */
    public function getObjetoCompra()
    {
        return $this->container['objeto_compra'];
    }

    /**
     * Sets objeto_compra
     *
     * @param string|null $objeto_compra objeto_compra
     *
     * @return self
     */
    public function setObjetoCompra($objeto_compra)
    {
        if (is_null($objeto_compra)) {
            throw new \InvalidArgumentException('non-nullable objeto_compra cannot be null');
        }
        $this->container['objeto_compra'] = $objeto_compra;

        return $this;
    }

    /**
     * Gets informacao_complementar
     *
     * @return string|null
     */
    public function getInformacaoComplementar()
    {
        return $this->container['informacao_complementar'];
    }

    /**
     * Sets informacao_complementar
     *
     * @param string|null $informacao_complementar informacao_complementar
     *
     * @return self
     */
    public function setInformacaoComplementar($informacao_complementar)
    {
        if (is_null($informacao_complementar)) {
            throw new \InvalidArgumentException('non-nullable informacao_complementar cannot be null');
        }
        $this->container['informacao_complementar'] = $informacao_complementar;

        return $this;
    }

    /**
     * Gets amparo_legal_id
     *
     * @return int|null
     */
    public function getAmparoLegalId()
    {
        return $this->container['amparo_legal_id'];
    }

    /**
     * Sets amparo_legal_id
     *
     * @param int|null $amparo_legal_id amparo_legal_id
     *
     * @return self
     */
    public function setAmparoLegalId($amparo_legal_id)
    {
        if (is_null($amparo_legal_id)) {
            throw new \InvalidArgumentException('non-nullable amparo_legal_id cannot be null');
        }
        $this->container['amparo_legal_id'] = $amparo_legal_id;

        return $this;
    }

    /**
     * Gets cnpj_orgao_sub_rogado
     *
     * @return string|null
     */
    public function getCnpjOrgaoSubRogado()
    {
        return $this->container['cnpj_orgao_sub_rogado'];
    }

    /**
     * Sets cnpj_orgao_sub_rogado
     *
     * @param string|null $cnpj_orgao_sub_rogado cnpj_orgao_sub_rogado
     *
     * @return self
     */
    public function setCnpjOrgaoSubRogado($cnpj_orgao_sub_rogado)
    {
        if (is_null($cnpj_orgao_sub_rogado)) {
            throw new \InvalidArgumentException('non-nullable cnpj_orgao_sub_rogado cannot be null');
        }
        $this->container['cnpj_orgao_sub_rogado'] = $cnpj_orgao_sub_rogado;

        return $this;
    }

    /**
     * Gets codigo_unidade_sub_rogada
     *
     * @return string|null
     */
    public function getCodigoUnidadeSubRogada()
    {
        return $this->container['codigo_unidade_sub_rogada'];
    }

    /**
     * Sets codigo_unidade_sub_rogada
     *
     * @param string|null $codigo_unidade_sub_rogada codigo_unidade_sub_rogada
     *
     * @return self
     */
    public function setCodigoUnidadeSubRogada($codigo_unidade_sub_rogada)
    {
        if (is_null($codigo_unidade_sub_rogada)) {
            throw new \InvalidArgumentException('non-nullable codigo_unidade_sub_rogada cannot be null');
        }
        $this->container['codigo_unidade_sub_rogada'] = $codigo_unidade_sub_rogada;

        return $this;
    }

    /**
     * Gets srp
     *
     * @return bool|null
     */
    public function getSrp()
    {
        return $this->container['srp'];
    }

    /**
     * Sets srp
     *
     * @param bool|null $srp srp
     *
     * @return self
     */
    public function setSrp($srp)
    {
        if (is_null($srp)) {
            throw new \InvalidArgumentException('non-nullable srp cannot be null');
        }
        $this->container['srp'] = $srp;

        return $this;
    }

    /**
     * Gets data_abertura_proposta
     *
     * @return \DateTime|null
     */
    public function getDataAberturaProposta()
    {
        return $this->container['data_abertura_proposta'];
    }

    /**
     * Sets data_abertura_proposta
     *
     * @param \DateTime|null $data_abertura_proposta data_abertura_proposta
     *
     * @return self
     */
    public function setDataAberturaProposta($data_abertura_proposta)
    {
        if (is_null($data_abertura_proposta)) {
            throw new \InvalidArgumentException('non-nullable data_abertura_proposta cannot be null');
        }
        $this->container['data_abertura_proposta'] = $data_abertura_proposta;

        return $this;
    }

    /**
     * Gets data_encerramento_proposta
     *
     * @return \DateTime|null
     */
    public function getDataEncerramentoProposta()
    {
        return $this->container['data_encerramento_proposta'];
    }

    /**
     * Sets data_encerramento_proposta
     *
     * @param \DateTime|null $data_encerramento_proposta data_encerramento_proposta
     *
     * @return self
     */
    public function setDataEncerramentoProposta($data_encerramento_proposta)
    {
        if (is_null($data_encerramento_proposta)) {
            throw new \InvalidArgumentException('non-nullable data_encerramento_proposta cannot be null');
        }
        $this->container['data_encerramento_proposta'] = $data_encerramento_proposta;

        return $this;
    }

    /**
     * Gets codigo_unidade_compradora
     *
     * @return string|null
     */
    public function getCodigoUnidadeCompradora()
    {
        return $this->container['codigo_unidade_compradora'];
    }

    /**
     * Sets codigo_unidade_compradora
     *
     * @param string|null $codigo_unidade_compradora codigo_unidade_compradora
     *
     * @return self
     */
    public function setCodigoUnidadeCompradora($codigo_unidade_compradora)
    {
        if (is_null($codigo_unidade_compradora)) {
            throw new \InvalidArgumentException('non-nullable codigo_unidade_compradora cannot be null');
        }
        $this->container['codigo_unidade_compradora'] = $codigo_unidade_compradora;

        return $this;
    }

    /**
     * Gets link_sistema_origem
     *
     * @return string|null
     */
    public function getLinkSistemaOrigem()
    {
        return $this->container['link_sistema_origem'];
    }

    /**
     * Sets link_sistema_origem
     *
     * @param string|null $link_sistema_origem link_sistema_origem
     *
     * @return self
     */
    public function setLinkSistemaOrigem($link_sistema_origem)
    {
        if (is_null($link_sistema_origem)) {
            throw new \InvalidArgumentException('non-nullable link_sistema_origem cannot be null');
        }
        $this->container['link_sistema_origem'] = $link_sistema_origem;

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
            throw new \InvalidArgumentException('invalid length for $justificativa when calling AlterarCompraParcialDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($justificativa) < 0)) {
            throw new \InvalidArgumentException('invalid length for $justificativa when calling AlterarCompraParcialDTO., must be bigger than or equal to 0.');
        }

        $this->container['justificativa'] = $justificativa;

        return $this;
    }

    /**
     * Gets justificativa_presencial
     *
     * @return string|null
     */
    public function getJustificativaPresencial()
    {
        return $this->container['justificativa_presencial'];
    }

    /**
     * Sets justificativa_presencial
     *
     * @param string|null $justificativa_presencial justificativa_presencial
     *
     * @return self
     */
    public function setJustificativaPresencial($justificativa_presencial)
    {
        if (is_null($justificativa_presencial)) {
            throw new \InvalidArgumentException('non-nullable justificativa_presencial cannot be null');
        }
        $this->container['justificativa_presencial'] = $justificativa_presencial;

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


