<?php
/**
 * AlterarTermoContratoDTO
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
 * AlterarTermoContratoDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AlterarTermoContratoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlterarTermoContratoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tipo_termo_contrato_id' => 'int',
        'numero_termo_contrato' => 'string',
        'objeto_termo_contrato' => 'string',
        'qualificacao_acrescimo_supressao' => 'bool',
        'qualificacao_vigencia' => 'bool',
        'qualificacao_fornecedor' => 'bool',
        'qualificacao_informativo' => 'bool',
        'qualificacao_reajuste' => 'bool',
        'data_assinatura' => '\DateTime',
        'ni_fornecedor' => 'string',
        'tipo_pessoa_fornecedor' => 'string',
        'nome_razao_social_fornecedor' => 'string',
        'ni_fornecedor_sub_contratado' => 'string',
        'tipo_pessoa_fornecedor_sub_contratado' => 'string',
        'nome_razao_social_fornecedor_sub_contratado' => 'string',
        'informativo_observacao' => 'string',
        'fundamento_legal' => 'string',
        'valor_acrescido' => 'float',
        'numero_parcelas' => 'int',
        'valor_parcela' => 'float',
        'valor_global' => 'float',
        'prazo_aditado_dias' => 'int',
        'data_vigencia_inicio' => '\DateTime',
        'data_vigencia_fim' => '\DateTime',
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
        'tipo_termo_contrato_id' => 'int64',
        'numero_termo_contrato' => null,
        'objeto_termo_contrato' => null,
        'qualificacao_acrescimo_supressao' => null,
        'qualificacao_vigencia' => null,
        'qualificacao_fornecedor' => null,
        'qualificacao_informativo' => null,
        'qualificacao_reajuste' => null,
        'data_assinatura' => 'date',
        'ni_fornecedor' => null,
        'tipo_pessoa_fornecedor' => null,
        'nome_razao_social_fornecedor' => null,
        'ni_fornecedor_sub_contratado' => null,
        'tipo_pessoa_fornecedor_sub_contratado' => null,
        'nome_razao_social_fornecedor_sub_contratado' => null,
        'informativo_observacao' => null,
        'fundamento_legal' => null,
        'valor_acrescido' => null,
        'numero_parcelas' => 'int32',
        'valor_parcela' => null,
        'valor_global' => null,
        'prazo_aditado_dias' => 'int32',
        'data_vigencia_inicio' => 'date',
        'data_vigencia_fim' => 'date',
        'justificativa' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tipo_termo_contrato_id' => false,
		'numero_termo_contrato' => false,
		'objeto_termo_contrato' => false,
		'qualificacao_acrescimo_supressao' => false,
		'qualificacao_vigencia' => false,
		'qualificacao_fornecedor' => false,
		'qualificacao_informativo' => false,
		'qualificacao_reajuste' => false,
		'data_assinatura' => false,
		'ni_fornecedor' => false,
		'tipo_pessoa_fornecedor' => false,
		'nome_razao_social_fornecedor' => false,
		'ni_fornecedor_sub_contratado' => false,
		'tipo_pessoa_fornecedor_sub_contratado' => false,
		'nome_razao_social_fornecedor_sub_contratado' => false,
		'informativo_observacao' => false,
		'fundamento_legal' => false,
		'valor_acrescido' => false,
		'numero_parcelas' => false,
		'valor_parcela' => false,
		'valor_global' => false,
		'prazo_aditado_dias' => false,
		'data_vigencia_inicio' => false,
		'data_vigencia_fim' => false,
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
        'tipo_termo_contrato_id' => 'tipoTermoContratoId',
        'numero_termo_contrato' => 'numeroTermoContrato',
        'objeto_termo_contrato' => 'objetoTermoContrato',
        'qualificacao_acrescimo_supressao' => 'qualificacaoAcrescimoSupressao',
        'qualificacao_vigencia' => 'qualificacaoVigencia',
        'qualificacao_fornecedor' => 'qualificacaoFornecedor',
        'qualificacao_informativo' => 'qualificacaoInformativo',
        'qualificacao_reajuste' => 'qualificacaoReajuste',
        'data_assinatura' => 'dataAssinatura',
        'ni_fornecedor' => 'niFornecedor',
        'tipo_pessoa_fornecedor' => 'tipoPessoaFornecedor',
        'nome_razao_social_fornecedor' => 'nomeRazaoSocialFornecedor',
        'ni_fornecedor_sub_contratado' => 'niFornecedorSubContratado',
        'tipo_pessoa_fornecedor_sub_contratado' => 'tipoPessoaFornecedorSubContratado',
        'nome_razao_social_fornecedor_sub_contratado' => 'nomeRazaoSocialFornecedorSubContratado',
        'informativo_observacao' => 'informativoObservacao',
        'fundamento_legal' => 'fundamentoLegal',
        'valor_acrescido' => 'valorAcrescido',
        'numero_parcelas' => 'numeroParcelas',
        'valor_parcela' => 'valorParcela',
        'valor_global' => 'valorGlobal',
        'prazo_aditado_dias' => 'prazoAditadoDias',
        'data_vigencia_inicio' => 'dataVigenciaInicio',
        'data_vigencia_fim' => 'dataVigenciaFim',
        'justificativa' => 'justificativa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tipo_termo_contrato_id' => 'setTipoTermoContratoId',
        'numero_termo_contrato' => 'setNumeroTermoContrato',
        'objeto_termo_contrato' => 'setObjetoTermoContrato',
        'qualificacao_acrescimo_supressao' => 'setQualificacaoAcrescimoSupressao',
        'qualificacao_vigencia' => 'setQualificacaoVigencia',
        'qualificacao_fornecedor' => 'setQualificacaoFornecedor',
        'qualificacao_informativo' => 'setQualificacaoInformativo',
        'qualificacao_reajuste' => 'setQualificacaoReajuste',
        'data_assinatura' => 'setDataAssinatura',
        'ni_fornecedor' => 'setNiFornecedor',
        'tipo_pessoa_fornecedor' => 'setTipoPessoaFornecedor',
        'nome_razao_social_fornecedor' => 'setNomeRazaoSocialFornecedor',
        'ni_fornecedor_sub_contratado' => 'setNiFornecedorSubContratado',
        'tipo_pessoa_fornecedor_sub_contratado' => 'setTipoPessoaFornecedorSubContratado',
        'nome_razao_social_fornecedor_sub_contratado' => 'setNomeRazaoSocialFornecedorSubContratado',
        'informativo_observacao' => 'setInformativoObservacao',
        'fundamento_legal' => 'setFundamentoLegal',
        'valor_acrescido' => 'setValorAcrescido',
        'numero_parcelas' => 'setNumeroParcelas',
        'valor_parcela' => 'setValorParcela',
        'valor_global' => 'setValorGlobal',
        'prazo_aditado_dias' => 'setPrazoAditadoDias',
        'data_vigencia_inicio' => 'setDataVigenciaInicio',
        'data_vigencia_fim' => 'setDataVigenciaFim',
        'justificativa' => 'setJustificativa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tipo_termo_contrato_id' => 'getTipoTermoContratoId',
        'numero_termo_contrato' => 'getNumeroTermoContrato',
        'objeto_termo_contrato' => 'getObjetoTermoContrato',
        'qualificacao_acrescimo_supressao' => 'getQualificacaoAcrescimoSupressao',
        'qualificacao_vigencia' => 'getQualificacaoVigencia',
        'qualificacao_fornecedor' => 'getQualificacaoFornecedor',
        'qualificacao_informativo' => 'getQualificacaoInformativo',
        'qualificacao_reajuste' => 'getQualificacaoReajuste',
        'data_assinatura' => 'getDataAssinatura',
        'ni_fornecedor' => 'getNiFornecedor',
        'tipo_pessoa_fornecedor' => 'getTipoPessoaFornecedor',
        'nome_razao_social_fornecedor' => 'getNomeRazaoSocialFornecedor',
        'ni_fornecedor_sub_contratado' => 'getNiFornecedorSubContratado',
        'tipo_pessoa_fornecedor_sub_contratado' => 'getTipoPessoaFornecedorSubContratado',
        'nome_razao_social_fornecedor_sub_contratado' => 'getNomeRazaoSocialFornecedorSubContratado',
        'informativo_observacao' => 'getInformativoObservacao',
        'fundamento_legal' => 'getFundamentoLegal',
        'valor_acrescido' => 'getValorAcrescido',
        'numero_parcelas' => 'getNumeroParcelas',
        'valor_parcela' => 'getValorParcela',
        'valor_global' => 'getValorGlobal',
        'prazo_aditado_dias' => 'getPrazoAditadoDias',
        'data_vigencia_inicio' => 'getDataVigenciaInicio',
        'data_vigencia_fim' => 'getDataVigenciaFim',
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
        $this->setIfExists('tipo_termo_contrato_id', $data ?? [], null);
        $this->setIfExists('numero_termo_contrato', $data ?? [], null);
        $this->setIfExists('objeto_termo_contrato', $data ?? [], null);
        $this->setIfExists('qualificacao_acrescimo_supressao', $data ?? [], null);
        $this->setIfExists('qualificacao_vigencia', $data ?? [], null);
        $this->setIfExists('qualificacao_fornecedor', $data ?? [], null);
        $this->setIfExists('qualificacao_informativo', $data ?? [], null);
        $this->setIfExists('qualificacao_reajuste', $data ?? [], null);
        $this->setIfExists('data_assinatura', $data ?? [], null);
        $this->setIfExists('ni_fornecedor', $data ?? [], null);
        $this->setIfExists('tipo_pessoa_fornecedor', $data ?? [], null);
        $this->setIfExists('nome_razao_social_fornecedor', $data ?? [], null);
        $this->setIfExists('ni_fornecedor_sub_contratado', $data ?? [], null);
        $this->setIfExists('tipo_pessoa_fornecedor_sub_contratado', $data ?? [], null);
        $this->setIfExists('nome_razao_social_fornecedor_sub_contratado', $data ?? [], null);
        $this->setIfExists('informativo_observacao', $data ?? [], null);
        $this->setIfExists('fundamento_legal', $data ?? [], null);
        $this->setIfExists('valor_acrescido', $data ?? [], null);
        $this->setIfExists('numero_parcelas', $data ?? [], null);
        $this->setIfExists('valor_parcela', $data ?? [], null);
        $this->setIfExists('valor_global', $data ?? [], null);
        $this->setIfExists('prazo_aditado_dias', $data ?? [], null);
        $this->setIfExists('data_vigencia_inicio', $data ?? [], null);
        $this->setIfExists('data_vigencia_fim', $data ?? [], null);
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

        if ($this->container['tipo_termo_contrato_id'] === null) {
            $invalidProperties[] = "'tipo_termo_contrato_id' can't be null";
        }
        if (($this->container['tipo_termo_contrato_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'tipo_termo_contrato_id', must be bigger than or equal to 1.";
        }

        if ($this->container['objeto_termo_contrato'] === null) {
            $invalidProperties[] = "'objeto_termo_contrato' can't be null";
        }
        if ($this->container['qualificacao_acrescimo_supressao'] === null) {
            $invalidProperties[] = "'qualificacao_acrescimo_supressao' can't be null";
        }
        if ($this->container['qualificacao_vigencia'] === null) {
            $invalidProperties[] = "'qualificacao_vigencia' can't be null";
        }
        if ($this->container['qualificacao_fornecedor'] === null) {
            $invalidProperties[] = "'qualificacao_fornecedor' can't be null";
        }
        if ($this->container['qualificacao_informativo'] === null) {
            $invalidProperties[] = "'qualificacao_informativo' can't be null";
        }
        if ($this->container['qualificacao_reajuste'] === null) {
            $invalidProperties[] = "'qualificacao_reajuste' can't be null";
        }
        if ($this->container['data_assinatura'] === null) {
            $invalidProperties[] = "'data_assinatura' can't be null";
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
     * Gets tipo_termo_contrato_id
     *
     * @return int
     */
    public function getTipoTermoContratoId()
    {
        return $this->container['tipo_termo_contrato_id'];
    }

    /**
     * Sets tipo_termo_contrato_id
     *
     * @param int $tipo_termo_contrato_id tipo_termo_contrato_id
     *
     * @return self
     */
    public function setTipoTermoContratoId($tipo_termo_contrato_id)
    {
        if (is_null($tipo_termo_contrato_id)) {
            throw new \InvalidArgumentException('non-nullable tipo_termo_contrato_id cannot be null');
        }

        if (($tipo_termo_contrato_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $tipo_termo_contrato_id when calling AlterarTermoContratoDTO., must be bigger than or equal to 1.');
        }

        $this->container['tipo_termo_contrato_id'] = $tipo_termo_contrato_id;

        return $this;
    }

    /**
     * Gets numero_termo_contrato
     *
     * @return string|null
     */
    public function getNumeroTermoContrato()
    {
        return $this->container['numero_termo_contrato'];
    }

    /**
     * Sets numero_termo_contrato
     *
     * @param string|null $numero_termo_contrato numero_termo_contrato
     *
     * @return self
     */
    public function setNumeroTermoContrato($numero_termo_contrato)
    {
        if (is_null($numero_termo_contrato)) {
            throw new \InvalidArgumentException('non-nullable numero_termo_contrato cannot be null');
        }
        $this->container['numero_termo_contrato'] = $numero_termo_contrato;

        return $this;
    }

    /**
     * Gets objeto_termo_contrato
     *
     * @return string
     */
    public function getObjetoTermoContrato()
    {
        return $this->container['objeto_termo_contrato'];
    }

    /**
     * Sets objeto_termo_contrato
     *
     * @param string $objeto_termo_contrato objeto_termo_contrato
     *
     * @return self
     */
    public function setObjetoTermoContrato($objeto_termo_contrato)
    {
        if (is_null($objeto_termo_contrato)) {
            throw new \InvalidArgumentException('non-nullable objeto_termo_contrato cannot be null');
        }
        $this->container['objeto_termo_contrato'] = $objeto_termo_contrato;

        return $this;
    }

    /**
     * Gets qualificacao_acrescimo_supressao
     *
     * @return bool
     */
    public function getQualificacaoAcrescimoSupressao()
    {
        return $this->container['qualificacao_acrescimo_supressao'];
    }

    /**
     * Sets qualificacao_acrescimo_supressao
     *
     * @param bool $qualificacao_acrescimo_supressao qualificacao_acrescimo_supressao
     *
     * @return self
     */
    public function setQualificacaoAcrescimoSupressao($qualificacao_acrescimo_supressao)
    {
        if (is_null($qualificacao_acrescimo_supressao)) {
            throw new \InvalidArgumentException('non-nullable qualificacao_acrescimo_supressao cannot be null');
        }
        $this->container['qualificacao_acrescimo_supressao'] = $qualificacao_acrescimo_supressao;

        return $this;
    }

    /**
     * Gets qualificacao_vigencia
     *
     * @return bool
     */
    public function getQualificacaoVigencia()
    {
        return $this->container['qualificacao_vigencia'];
    }

    /**
     * Sets qualificacao_vigencia
     *
     * @param bool $qualificacao_vigencia qualificacao_vigencia
     *
     * @return self
     */
    public function setQualificacaoVigencia($qualificacao_vigencia)
    {
        if (is_null($qualificacao_vigencia)) {
            throw new \InvalidArgumentException('non-nullable qualificacao_vigencia cannot be null');
        }
        $this->container['qualificacao_vigencia'] = $qualificacao_vigencia;

        return $this;
    }

    /**
     * Gets qualificacao_fornecedor
     *
     * @return bool
     */
    public function getQualificacaoFornecedor()
    {
        return $this->container['qualificacao_fornecedor'];
    }

    /**
     * Sets qualificacao_fornecedor
     *
     * @param bool $qualificacao_fornecedor qualificacao_fornecedor
     *
     * @return self
     */
    public function setQualificacaoFornecedor($qualificacao_fornecedor)
    {
        if (is_null($qualificacao_fornecedor)) {
            throw new \InvalidArgumentException('non-nullable qualificacao_fornecedor cannot be null');
        }
        $this->container['qualificacao_fornecedor'] = $qualificacao_fornecedor;

        return $this;
    }

    /**
     * Gets qualificacao_informativo
     *
     * @return bool
     */
    public function getQualificacaoInformativo()
    {
        return $this->container['qualificacao_informativo'];
    }

    /**
     * Sets qualificacao_informativo
     *
     * @param bool $qualificacao_informativo qualificacao_informativo
     *
     * @return self
     */
    public function setQualificacaoInformativo($qualificacao_informativo)
    {
        if (is_null($qualificacao_informativo)) {
            throw new \InvalidArgumentException('non-nullable qualificacao_informativo cannot be null');
        }
        $this->container['qualificacao_informativo'] = $qualificacao_informativo;

        return $this;
    }

    /**
     * Gets qualificacao_reajuste
     *
     * @return bool
     */
    public function getQualificacaoReajuste()
    {
        return $this->container['qualificacao_reajuste'];
    }

    /**
     * Sets qualificacao_reajuste
     *
     * @param bool $qualificacao_reajuste qualificacao_reajuste
     *
     * @return self
     */
    public function setQualificacaoReajuste($qualificacao_reajuste)
    {
        if (is_null($qualificacao_reajuste)) {
            throw new \InvalidArgumentException('non-nullable qualificacao_reajuste cannot be null');
        }
        $this->container['qualificacao_reajuste'] = $qualificacao_reajuste;

        return $this;
    }

    /**
     * Gets data_assinatura
     *
     * @return \DateTime
     */
    public function getDataAssinatura()
    {
        return $this->container['data_assinatura'];
    }

    /**
     * Sets data_assinatura
     *
     * @param \DateTime $data_assinatura data_assinatura
     *
     * @return self
     */
    public function setDataAssinatura($data_assinatura)
    {
        if (is_null($data_assinatura)) {
            throw new \InvalidArgumentException('non-nullable data_assinatura cannot be null');
        }
        $this->container['data_assinatura'] = $data_assinatura;

        return $this;
    }

    /**
     * Gets ni_fornecedor
     *
     * @return string|null
     */
    public function getNiFornecedor()
    {
        return $this->container['ni_fornecedor'];
    }

    /**
     * Sets ni_fornecedor
     *
     * @param string|null $ni_fornecedor ni_fornecedor
     *
     * @return self
     */
    public function setNiFornecedor($ni_fornecedor)
    {
        if (is_null($ni_fornecedor)) {
            throw new \InvalidArgumentException('non-nullable ni_fornecedor cannot be null');
        }
        $this->container['ni_fornecedor'] = $ni_fornecedor;

        return $this;
    }

    /**
     * Gets tipo_pessoa_fornecedor
     *
     * @return string|null
     */
    public function getTipoPessoaFornecedor()
    {
        return $this->container['tipo_pessoa_fornecedor'];
    }

    /**
     * Sets tipo_pessoa_fornecedor
     *
     * @param string|null $tipo_pessoa_fornecedor tipo_pessoa_fornecedor
     *
     * @return self
     */
    public function setTipoPessoaFornecedor($tipo_pessoa_fornecedor)
    {
        if (is_null($tipo_pessoa_fornecedor)) {
            throw new \InvalidArgumentException('non-nullable tipo_pessoa_fornecedor cannot be null');
        }
        $this->container['tipo_pessoa_fornecedor'] = $tipo_pessoa_fornecedor;

        return $this;
    }

    /**
     * Gets nome_razao_social_fornecedor
     *
     * @return string|null
     */
    public function getNomeRazaoSocialFornecedor()
    {
        return $this->container['nome_razao_social_fornecedor'];
    }

    /**
     * Sets nome_razao_social_fornecedor
     *
     * @param string|null $nome_razao_social_fornecedor nome_razao_social_fornecedor
     *
     * @return self
     */
    public function setNomeRazaoSocialFornecedor($nome_razao_social_fornecedor)
    {
        if (is_null($nome_razao_social_fornecedor)) {
            throw new \InvalidArgumentException('non-nullable nome_razao_social_fornecedor cannot be null');
        }
        $this->container['nome_razao_social_fornecedor'] = $nome_razao_social_fornecedor;

        return $this;
    }

    /**
     * Gets ni_fornecedor_sub_contratado
     *
     * @return string|null
     */
    public function getNiFornecedorSubContratado()
    {
        return $this->container['ni_fornecedor_sub_contratado'];
    }

    /**
     * Sets ni_fornecedor_sub_contratado
     *
     * @param string|null $ni_fornecedor_sub_contratado ni_fornecedor_sub_contratado
     *
     * @return self
     */
    public function setNiFornecedorSubContratado($ni_fornecedor_sub_contratado)
    {
        if (is_null($ni_fornecedor_sub_contratado)) {
            throw new \InvalidArgumentException('non-nullable ni_fornecedor_sub_contratado cannot be null');
        }
        $this->container['ni_fornecedor_sub_contratado'] = $ni_fornecedor_sub_contratado;

        return $this;
    }

    /**
     * Gets tipo_pessoa_fornecedor_sub_contratado
     *
     * @return string|null
     */
    public function getTipoPessoaFornecedorSubContratado()
    {
        return $this->container['tipo_pessoa_fornecedor_sub_contratado'];
    }

    /**
     * Sets tipo_pessoa_fornecedor_sub_contratado
     *
     * @param string|null $tipo_pessoa_fornecedor_sub_contratado tipo_pessoa_fornecedor_sub_contratado
     *
     * @return self
     */
    public function setTipoPessoaFornecedorSubContratado($tipo_pessoa_fornecedor_sub_contratado)
    {
        if (is_null($tipo_pessoa_fornecedor_sub_contratado)) {
            throw new \InvalidArgumentException('non-nullable tipo_pessoa_fornecedor_sub_contratado cannot be null');
        }
        $this->container['tipo_pessoa_fornecedor_sub_contratado'] = $tipo_pessoa_fornecedor_sub_contratado;

        return $this;
    }

    /**
     * Gets nome_razao_social_fornecedor_sub_contratado
     *
     * @return string|null
     */
    public function getNomeRazaoSocialFornecedorSubContratado()
    {
        return $this->container['nome_razao_social_fornecedor_sub_contratado'];
    }

    /**
     * Sets nome_razao_social_fornecedor_sub_contratado
     *
     * @param string|null $nome_razao_social_fornecedor_sub_contratado nome_razao_social_fornecedor_sub_contratado
     *
     * @return self
     */
    public function setNomeRazaoSocialFornecedorSubContratado($nome_razao_social_fornecedor_sub_contratado)
    {
        if (is_null($nome_razao_social_fornecedor_sub_contratado)) {
            throw new \InvalidArgumentException('non-nullable nome_razao_social_fornecedor_sub_contratado cannot be null');
        }
        $this->container['nome_razao_social_fornecedor_sub_contratado'] = $nome_razao_social_fornecedor_sub_contratado;

        return $this;
    }

    /**
     * Gets informativo_observacao
     *
     * @return string|null
     */
    public function getInformativoObservacao()
    {
        return $this->container['informativo_observacao'];
    }

    /**
     * Sets informativo_observacao
     *
     * @param string|null $informativo_observacao informativo_observacao
     *
     * @return self
     */
    public function setInformativoObservacao($informativo_observacao)
    {
        if (is_null($informativo_observacao)) {
            throw new \InvalidArgumentException('non-nullable informativo_observacao cannot be null');
        }
        $this->container['informativo_observacao'] = $informativo_observacao;

        return $this;
    }

    /**
     * Gets fundamento_legal
     *
     * @return string|null
     */
    public function getFundamentoLegal()
    {
        return $this->container['fundamento_legal'];
    }

    /**
     * Sets fundamento_legal
     *
     * @param string|null $fundamento_legal fundamento_legal
     *
     * @return self
     */
    public function setFundamentoLegal($fundamento_legal)
    {
        if (is_null($fundamento_legal)) {
            throw new \InvalidArgumentException('non-nullable fundamento_legal cannot be null');
        }
        $this->container['fundamento_legal'] = $fundamento_legal;

        return $this;
    }

    /**
     * Gets valor_acrescido
     *
     * @return float|null
     */
    public function getValorAcrescido()
    {
        return $this->container['valor_acrescido'];
    }

    /**
     * Sets valor_acrescido
     *
     * @param float|null $valor_acrescido valor_acrescido
     *
     * @return self
     */
    public function setValorAcrescido($valor_acrescido)
    {
        if (is_null($valor_acrescido)) {
            throw new \InvalidArgumentException('non-nullable valor_acrescido cannot be null');
        }
        $this->container['valor_acrescido'] = $valor_acrescido;

        return $this;
    }

    /**
     * Gets numero_parcelas
     *
     * @return int|null
     */
    public function getNumeroParcelas()
    {
        return $this->container['numero_parcelas'];
    }

    /**
     * Sets numero_parcelas
     *
     * @param int|null $numero_parcelas numero_parcelas
     *
     * @return self
     */
    public function setNumeroParcelas($numero_parcelas)
    {
        if (is_null($numero_parcelas)) {
            throw new \InvalidArgumentException('non-nullable numero_parcelas cannot be null');
        }
        $this->container['numero_parcelas'] = $numero_parcelas;

        return $this;
    }

    /**
     * Gets valor_parcela
     *
     * @return float|null
     */
    public function getValorParcela()
    {
        return $this->container['valor_parcela'];
    }

    /**
     * Sets valor_parcela
     *
     * @param float|null $valor_parcela valor_parcela
     *
     * @return self
     */
    public function setValorParcela($valor_parcela)
    {
        if (is_null($valor_parcela)) {
            throw new \InvalidArgumentException('non-nullable valor_parcela cannot be null');
        }
        $this->container['valor_parcela'] = $valor_parcela;

        return $this;
    }

    /**
     * Gets valor_global
     *
     * @return float|null
     */
    public function getValorGlobal()
    {
        return $this->container['valor_global'];
    }

    /**
     * Sets valor_global
     *
     * @param float|null $valor_global valor_global
     *
     * @return self
     */
    public function setValorGlobal($valor_global)
    {
        if (is_null($valor_global)) {
            throw new \InvalidArgumentException('non-nullable valor_global cannot be null');
        }
        $this->container['valor_global'] = $valor_global;

        return $this;
    }

    /**
     * Gets prazo_aditado_dias
     *
     * @return int|null
     */
    public function getPrazoAditadoDias()
    {
        return $this->container['prazo_aditado_dias'];
    }

    /**
     * Sets prazo_aditado_dias
     *
     * @param int|null $prazo_aditado_dias prazo_aditado_dias
     *
     * @return self
     */
    public function setPrazoAditadoDias($prazo_aditado_dias)
    {
        if (is_null($prazo_aditado_dias)) {
            throw new \InvalidArgumentException('non-nullable prazo_aditado_dias cannot be null');
        }
        $this->container['prazo_aditado_dias'] = $prazo_aditado_dias;

        return $this;
    }

    /**
     * Gets data_vigencia_inicio
     *
     * @return \DateTime|null
     */
    public function getDataVigenciaInicio()
    {
        return $this->container['data_vigencia_inicio'];
    }

    /**
     * Sets data_vigencia_inicio
     *
     * @param \DateTime|null $data_vigencia_inicio data_vigencia_inicio
     *
     * @return self
     */
    public function setDataVigenciaInicio($data_vigencia_inicio)
    {
        if (is_null($data_vigencia_inicio)) {
            throw new \InvalidArgumentException('non-nullable data_vigencia_inicio cannot be null');
        }
        $this->container['data_vigencia_inicio'] = $data_vigencia_inicio;

        return $this;
    }

    /**
     * Gets data_vigencia_fim
     *
     * @return \DateTime|null
     */
    public function getDataVigenciaFim()
    {
        return $this->container['data_vigencia_fim'];
    }

    /**
     * Sets data_vigencia_fim
     *
     * @param \DateTime|null $data_vigencia_fim data_vigencia_fim
     *
     * @return self
     */
    public function setDataVigenciaFim($data_vigencia_fim)
    {
        if (is_null($data_vigencia_fim)) {
            throw new \InvalidArgumentException('non-nullable data_vigencia_fim cannot be null');
        }
        $this->container['data_vigencia_fim'] = $data_vigencia_fim;

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

