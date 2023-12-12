<?php
/**
 * IRecuperarPlanoItemDTO
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
 * IRecuperarPlanoItemDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IRecuperarPlanoItemDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IRecuperarPlanoItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codigo_unidade' => 'string',
        'nome_unidade' => 'string',
        'valor_total' => 'float',
        'cnpj' => 'string',
        'ano_pca' => 'int',
        'data_atualizacao' => '\DateTime',
        'sequencial_pca' => 'int',
        'quantidade' => 'float',
        'data_inclusao' => '\DateTime',
        'data_publicacao_pncp' => '\DateTime',
        'data_desejada' => '\DateTime',
        'numero_item' => 'int',
        'pdm_codigo' => 'string',
        'pdm_descricao' => 'string',
        'codigo_item' => 'string',
        'unidade_requisitante' => 'string',
        'grupo_contratacao_codigo' => 'string',
        'grupo_contratacao_nome' => 'string',
        'descricao' => 'string',
        'classificacao_superior_codigo' => 'string',
        'classificacao_superior_nome' => 'string',
        'unidade_fornecimento' => 'string',
        'valor_unitario' => 'float',
        'valor_orcamento_exercicio' => 'float',
        'nome_classificacao' => 'string',
        'categoria_item_pcaid' => 'int',
        'catalogo_id' => 'int',
        'classificacao_catalogo_id' => 'int',
        'nome_catalogo' => 'string',
        'categoria_item_pca_nome' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'codigo_unidade' => null,
        'nome_unidade' => null,
        'valor_total' => null,
        'cnpj' => null,
        'ano_pca' => 'int32',
        'data_atualizacao' => 'date-time',
        'sequencial_pca' => 'int32',
        'quantidade' => null,
        'data_inclusao' => 'date-time',
        'data_publicacao_pncp' => 'date-time',
        'data_desejada' => 'date',
        'numero_item' => 'int32',
        'pdm_codigo' => null,
        'pdm_descricao' => null,
        'codigo_item' => null,
        'unidade_requisitante' => null,
        'grupo_contratacao_codigo' => null,
        'grupo_contratacao_nome' => null,
        'descricao' => null,
        'classificacao_superior_codigo' => null,
        'classificacao_superior_nome' => null,
        'unidade_fornecimento' => null,
        'valor_unitario' => null,
        'valor_orcamento_exercicio' => null,
        'nome_classificacao' => null,
        'categoria_item_pcaid' => 'int32',
        'catalogo_id' => 'int32',
        'classificacao_catalogo_id' => 'int32',
        'nome_catalogo' => null,
        'categoria_item_pca_nome' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'codigo_unidade' => false,
		'nome_unidade' => false,
		'valor_total' => false,
		'cnpj' => false,
		'ano_pca' => false,
		'data_atualizacao' => false,
		'sequencial_pca' => false,
		'quantidade' => false,
		'data_inclusao' => false,
		'data_publicacao_pncp' => false,
		'data_desejada' => false,
		'numero_item' => false,
		'pdm_codigo' => false,
		'pdm_descricao' => false,
		'codigo_item' => false,
		'unidade_requisitante' => false,
		'grupo_contratacao_codigo' => false,
		'grupo_contratacao_nome' => false,
		'descricao' => false,
		'classificacao_superior_codigo' => false,
		'classificacao_superior_nome' => false,
		'unidade_fornecimento' => false,
		'valor_unitario' => false,
		'valor_orcamento_exercicio' => false,
		'nome_classificacao' => false,
		'categoria_item_pcaid' => false,
		'catalogo_id' => false,
		'classificacao_catalogo_id' => false,
		'nome_catalogo' => false,
		'categoria_item_pca_nome' => false
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
        'codigo_unidade' => 'codigoUnidade',
        'nome_unidade' => 'nomeUnidade',
        'valor_total' => 'valorTotal',
        'cnpj' => 'cnpj',
        'ano_pca' => 'anoPca',
        'data_atualizacao' => 'dataAtualizacao',
        'sequencial_pca' => 'sequencialPca',
        'quantidade' => 'quantidade',
        'data_inclusao' => 'dataInclusao',
        'data_publicacao_pncp' => 'dataPublicacaoPncp',
        'data_desejada' => 'dataDesejada',
        'numero_item' => 'numeroItem',
        'pdm_codigo' => 'pdmCodigo',
        'pdm_descricao' => 'pdmDescricao',
        'codigo_item' => 'codigoItem',
        'unidade_requisitante' => 'unidadeRequisitante',
        'grupo_contratacao_codigo' => 'grupoContratacaoCodigo',
        'grupo_contratacao_nome' => 'grupoContratacaoNome',
        'descricao' => 'descricao',
        'classificacao_superior_codigo' => 'classificacaoSuperiorCodigo',
        'classificacao_superior_nome' => 'classificacaoSuperiorNome',
        'unidade_fornecimento' => 'unidadeFornecimento',
        'valor_unitario' => 'valorUnitario',
        'valor_orcamento_exercicio' => 'valorOrcamentoExercicio',
        'nome_classificacao' => 'nomeClassificacao',
        'categoria_item_pcaid' => 'categoriaItemPcaid',
        'catalogo_id' => 'catalogoId',
        'classificacao_catalogo_id' => 'classificacaoCatalogoId',
        'nome_catalogo' => 'nomeCatalogo',
        'categoria_item_pca_nome' => 'categoriaItemPcaNome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo_unidade' => 'setCodigoUnidade',
        'nome_unidade' => 'setNomeUnidade',
        'valor_total' => 'setValorTotal',
        'cnpj' => 'setCnpj',
        'ano_pca' => 'setAnoPca',
        'data_atualizacao' => 'setDataAtualizacao',
        'sequencial_pca' => 'setSequencialPca',
        'quantidade' => 'setQuantidade',
        'data_inclusao' => 'setDataInclusao',
        'data_publicacao_pncp' => 'setDataPublicacaoPncp',
        'data_desejada' => 'setDataDesejada',
        'numero_item' => 'setNumeroItem',
        'pdm_codigo' => 'setPdmCodigo',
        'pdm_descricao' => 'setPdmDescricao',
        'codigo_item' => 'setCodigoItem',
        'unidade_requisitante' => 'setUnidadeRequisitante',
        'grupo_contratacao_codigo' => 'setGrupoContratacaoCodigo',
        'grupo_contratacao_nome' => 'setGrupoContratacaoNome',
        'descricao' => 'setDescricao',
        'classificacao_superior_codigo' => 'setClassificacaoSuperiorCodigo',
        'classificacao_superior_nome' => 'setClassificacaoSuperiorNome',
        'unidade_fornecimento' => 'setUnidadeFornecimento',
        'valor_unitario' => 'setValorUnitario',
        'valor_orcamento_exercicio' => 'setValorOrcamentoExercicio',
        'nome_classificacao' => 'setNomeClassificacao',
        'categoria_item_pcaid' => 'setCategoriaItemPcaid',
        'catalogo_id' => 'setCatalogoId',
        'classificacao_catalogo_id' => 'setClassificacaoCatalogoId',
        'nome_catalogo' => 'setNomeCatalogo',
        'categoria_item_pca_nome' => 'setCategoriaItemPcaNome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo_unidade' => 'getCodigoUnidade',
        'nome_unidade' => 'getNomeUnidade',
        'valor_total' => 'getValorTotal',
        'cnpj' => 'getCnpj',
        'ano_pca' => 'getAnoPca',
        'data_atualizacao' => 'getDataAtualizacao',
        'sequencial_pca' => 'getSequencialPca',
        'quantidade' => 'getQuantidade',
        'data_inclusao' => 'getDataInclusao',
        'data_publicacao_pncp' => 'getDataPublicacaoPncp',
        'data_desejada' => 'getDataDesejada',
        'numero_item' => 'getNumeroItem',
        'pdm_codigo' => 'getPdmCodigo',
        'pdm_descricao' => 'getPdmDescricao',
        'codigo_item' => 'getCodigoItem',
        'unidade_requisitante' => 'getUnidadeRequisitante',
        'grupo_contratacao_codigo' => 'getGrupoContratacaoCodigo',
        'grupo_contratacao_nome' => 'getGrupoContratacaoNome',
        'descricao' => 'getDescricao',
        'classificacao_superior_codigo' => 'getClassificacaoSuperiorCodigo',
        'classificacao_superior_nome' => 'getClassificacaoSuperiorNome',
        'unidade_fornecimento' => 'getUnidadeFornecimento',
        'valor_unitario' => 'getValorUnitario',
        'valor_orcamento_exercicio' => 'getValorOrcamentoExercicio',
        'nome_classificacao' => 'getNomeClassificacao',
        'categoria_item_pcaid' => 'getCategoriaItemPcaid',
        'catalogo_id' => 'getCatalogoId',
        'classificacao_catalogo_id' => 'getClassificacaoCatalogoId',
        'nome_catalogo' => 'getNomeCatalogo',
        'categoria_item_pca_nome' => 'getCategoriaItemPcaNome'
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
        $this->setIfExists('codigo_unidade', $data ?? [], null);
        $this->setIfExists('nome_unidade', $data ?? [], null);
        $this->setIfExists('valor_total', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('ano_pca', $data ?? [], null);
        $this->setIfExists('data_atualizacao', $data ?? [], null);
        $this->setIfExists('sequencial_pca', $data ?? [], null);
        $this->setIfExists('quantidade', $data ?? [], null);
        $this->setIfExists('data_inclusao', $data ?? [], null);
        $this->setIfExists('data_publicacao_pncp', $data ?? [], null);
        $this->setIfExists('data_desejada', $data ?? [], null);
        $this->setIfExists('numero_item', $data ?? [], null);
        $this->setIfExists('pdm_codigo', $data ?? [], null);
        $this->setIfExists('pdm_descricao', $data ?? [], null);
        $this->setIfExists('codigo_item', $data ?? [], null);
        $this->setIfExists('unidade_requisitante', $data ?? [], null);
        $this->setIfExists('grupo_contratacao_codigo', $data ?? [], null);
        $this->setIfExists('grupo_contratacao_nome', $data ?? [], null);
        $this->setIfExists('descricao', $data ?? [], null);
        $this->setIfExists('classificacao_superior_codigo', $data ?? [], null);
        $this->setIfExists('classificacao_superior_nome', $data ?? [], null);
        $this->setIfExists('unidade_fornecimento', $data ?? [], null);
        $this->setIfExists('valor_unitario', $data ?? [], null);
        $this->setIfExists('valor_orcamento_exercicio', $data ?? [], null);
        $this->setIfExists('nome_classificacao', $data ?? [], null);
        $this->setIfExists('categoria_item_pcaid', $data ?? [], null);
        $this->setIfExists('catalogo_id', $data ?? [], null);
        $this->setIfExists('classificacao_catalogo_id', $data ?? [], null);
        $this->setIfExists('nome_catalogo', $data ?? [], null);
        $this->setIfExists('categoria_item_pca_nome', $data ?? [], null);
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
        $this->container['nome_unidade'] = $nome_unidade;

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
     * Gets ano_pca
     *
     * @return int|null
     */
    public function getAnoPca()
    {
        return $this->container['ano_pca'];
    }

    /**
     * Sets ano_pca
     *
     * @param int|null $ano_pca ano_pca
     *
     * @return self
     */
    public function setAnoPca($ano_pca)
    {
        if (is_null($ano_pca)) {
            throw new \InvalidArgumentException('non-nullable ano_pca cannot be null');
        }
        $this->container['ano_pca'] = $ano_pca;

        return $this;
    }

    /**
     * Gets data_atualizacao
     *
     * @return \DateTime|null
     */
    public function getDataAtualizacao()
    {
        return $this->container['data_atualizacao'];
    }

    /**
     * Sets data_atualizacao
     *
     * @param \DateTime|null $data_atualizacao data_atualizacao
     *
     * @return self
     */
    public function setDataAtualizacao($data_atualizacao)
    {
        if (is_null($data_atualizacao)) {
            throw new \InvalidArgumentException('non-nullable data_atualizacao cannot be null');
        }
        $this->container['data_atualizacao'] = $data_atualizacao;

        return $this;
    }

    /**
     * Gets sequencial_pca
     *
     * @return int|null
     */
    public function getSequencialPca()
    {
        return $this->container['sequencial_pca'];
    }

    /**
     * Sets sequencial_pca
     *
     * @param int|null $sequencial_pca sequencial_pca
     *
     * @return self
     */
    public function setSequencialPca($sequencial_pca)
    {
        if (is_null($sequencial_pca)) {
            throw new \InvalidArgumentException('non-nullable sequencial_pca cannot be null');
        }
        $this->container['sequencial_pca'] = $sequencial_pca;

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
     * Gets data_inclusao
     *
     * @return \DateTime|null
     */
    public function getDataInclusao()
    {
        return $this->container['data_inclusao'];
    }

    /**
     * Sets data_inclusao
     *
     * @param \DateTime|null $data_inclusao data_inclusao
     *
     * @return self
     */
    public function setDataInclusao($data_inclusao)
    {
        if (is_null($data_inclusao)) {
            throw new \InvalidArgumentException('non-nullable data_inclusao cannot be null');
        }
        $this->container['data_inclusao'] = $data_inclusao;

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
     * Gets data_desejada
     *
     * @return \DateTime|null
     */
    public function getDataDesejada()
    {
        return $this->container['data_desejada'];
    }

    /**
     * Sets data_desejada
     *
     * @param \DateTime|null $data_desejada data_desejada
     *
     * @return self
     */
    public function setDataDesejada($data_desejada)
    {
        if (is_null($data_desejada)) {
            throw new \InvalidArgumentException('non-nullable data_desejada cannot be null');
        }
        $this->container['data_desejada'] = $data_desejada;

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
     * Gets pdm_codigo
     *
     * @return string|null
     */
    public function getPdmCodigo()
    {
        return $this->container['pdm_codigo'];
    }

    /**
     * Sets pdm_codigo
     *
     * @param string|null $pdm_codigo pdm_codigo
     *
     * @return self
     */
    public function setPdmCodigo($pdm_codigo)
    {
        if (is_null($pdm_codigo)) {
            throw new \InvalidArgumentException('non-nullable pdm_codigo cannot be null');
        }
        $this->container['pdm_codigo'] = $pdm_codigo;

        return $this;
    }

    /**
     * Gets pdm_descricao
     *
     * @return string|null
     */
    public function getPdmDescricao()
    {
        return $this->container['pdm_descricao'];
    }

    /**
     * Sets pdm_descricao
     *
     * @param string|null $pdm_descricao pdm_descricao
     *
     * @return self
     */
    public function setPdmDescricao($pdm_descricao)
    {
        if (is_null($pdm_descricao)) {
            throw new \InvalidArgumentException('non-nullable pdm_descricao cannot be null');
        }
        $this->container['pdm_descricao'] = $pdm_descricao;

        return $this;
    }

    /**
     * Gets codigo_item
     *
     * @return string|null
     */
    public function getCodigoItem()
    {
        return $this->container['codigo_item'];
    }

    /**
     * Sets codigo_item
     *
     * @param string|null $codigo_item codigo_item
     *
     * @return self
     */
    public function setCodigoItem($codigo_item)
    {
        if (is_null($codigo_item)) {
            throw new \InvalidArgumentException('non-nullable codigo_item cannot be null');
        }
        $this->container['codigo_item'] = $codigo_item;

        return $this;
    }

    /**
     * Gets unidade_requisitante
     *
     * @return string|null
     */
    public function getUnidadeRequisitante()
    {
        return $this->container['unidade_requisitante'];
    }

    /**
     * Sets unidade_requisitante
     *
     * @param string|null $unidade_requisitante unidade_requisitante
     *
     * @return self
     */
    public function setUnidadeRequisitante($unidade_requisitante)
    {
        if (is_null($unidade_requisitante)) {
            throw new \InvalidArgumentException('non-nullable unidade_requisitante cannot be null');
        }
        $this->container['unidade_requisitante'] = $unidade_requisitante;

        return $this;
    }

    /**
     * Gets grupo_contratacao_codigo
     *
     * @return string|null
     */
    public function getGrupoContratacaoCodigo()
    {
        return $this->container['grupo_contratacao_codigo'];
    }

    /**
     * Sets grupo_contratacao_codigo
     *
     * @param string|null $grupo_contratacao_codigo grupo_contratacao_codigo
     *
     * @return self
     */
    public function setGrupoContratacaoCodigo($grupo_contratacao_codigo)
    {
        if (is_null($grupo_contratacao_codigo)) {
            throw new \InvalidArgumentException('non-nullable grupo_contratacao_codigo cannot be null');
        }
        $this->container['grupo_contratacao_codigo'] = $grupo_contratacao_codigo;

        return $this;
    }

    /**
     * Gets grupo_contratacao_nome
     *
     * @return string|null
     */
    public function getGrupoContratacaoNome()
    {
        return $this->container['grupo_contratacao_nome'];
    }

    /**
     * Sets grupo_contratacao_nome
     *
     * @param string|null $grupo_contratacao_nome grupo_contratacao_nome
     *
     * @return self
     */
    public function setGrupoContratacaoNome($grupo_contratacao_nome)
    {
        if (is_null($grupo_contratacao_nome)) {
            throw new \InvalidArgumentException('non-nullable grupo_contratacao_nome cannot be null');
        }
        $this->container['grupo_contratacao_nome'] = $grupo_contratacao_nome;

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
     * Gets classificacao_superior_codigo
     *
     * @return string|null
     */
    public function getClassificacaoSuperiorCodigo()
    {
        return $this->container['classificacao_superior_codigo'];
    }

    /**
     * Sets classificacao_superior_codigo
     *
     * @param string|null $classificacao_superior_codigo classificacao_superior_codigo
     *
     * @return self
     */
    public function setClassificacaoSuperiorCodigo($classificacao_superior_codigo)
    {
        if (is_null($classificacao_superior_codigo)) {
            throw new \InvalidArgumentException('non-nullable classificacao_superior_codigo cannot be null');
        }
        $this->container['classificacao_superior_codigo'] = $classificacao_superior_codigo;

        return $this;
    }

    /**
     * Gets classificacao_superior_nome
     *
     * @return string|null
     */
    public function getClassificacaoSuperiorNome()
    {
        return $this->container['classificacao_superior_nome'];
    }

    /**
     * Sets classificacao_superior_nome
     *
     * @param string|null $classificacao_superior_nome classificacao_superior_nome
     *
     * @return self
     */
    public function setClassificacaoSuperiorNome($classificacao_superior_nome)
    {
        if (is_null($classificacao_superior_nome)) {
            throw new \InvalidArgumentException('non-nullable classificacao_superior_nome cannot be null');
        }
        $this->container['classificacao_superior_nome'] = $classificacao_superior_nome;

        return $this;
    }

    /**
     * Gets unidade_fornecimento
     *
     * @return string|null
     */
    public function getUnidadeFornecimento()
    {
        return $this->container['unidade_fornecimento'];
    }

    /**
     * Sets unidade_fornecimento
     *
     * @param string|null $unidade_fornecimento unidade_fornecimento
     *
     * @return self
     */
    public function setUnidadeFornecimento($unidade_fornecimento)
    {
        if (is_null($unidade_fornecimento)) {
            throw new \InvalidArgumentException('non-nullable unidade_fornecimento cannot be null');
        }
        $this->container['unidade_fornecimento'] = $unidade_fornecimento;

        return $this;
    }

    /**
     * Gets valor_unitario
     *
     * @return float|null
     */
    public function getValorUnitario()
    {
        return $this->container['valor_unitario'];
    }

    /**
     * Sets valor_unitario
     *
     * @param float|null $valor_unitario valor_unitario
     *
     * @return self
     */
    public function setValorUnitario($valor_unitario)
    {
        if (is_null($valor_unitario)) {
            throw new \InvalidArgumentException('non-nullable valor_unitario cannot be null');
        }
        $this->container['valor_unitario'] = $valor_unitario;

        return $this;
    }

    /**
     * Gets valor_orcamento_exercicio
     *
     * @return float|null
     */
    public function getValorOrcamentoExercicio()
    {
        return $this->container['valor_orcamento_exercicio'];
    }

    /**
     * Sets valor_orcamento_exercicio
     *
     * @param float|null $valor_orcamento_exercicio valor_orcamento_exercicio
     *
     * @return self
     */
    public function setValorOrcamentoExercicio($valor_orcamento_exercicio)
    {
        if (is_null($valor_orcamento_exercicio)) {
            throw new \InvalidArgumentException('non-nullable valor_orcamento_exercicio cannot be null');
        }
        $this->container['valor_orcamento_exercicio'] = $valor_orcamento_exercicio;

        return $this;
    }

    /**
     * Gets nome_classificacao
     *
     * @return string|null
     */
    public function getNomeClassificacao()
    {
        return $this->container['nome_classificacao'];
    }

    /**
     * Sets nome_classificacao
     *
     * @param string|null $nome_classificacao nome_classificacao
     *
     * @return self
     */
    public function setNomeClassificacao($nome_classificacao)
    {
        if (is_null($nome_classificacao)) {
            throw new \InvalidArgumentException('non-nullable nome_classificacao cannot be null');
        }
        $this->container['nome_classificacao'] = $nome_classificacao;

        return $this;
    }

    /**
     * Gets categoria_item_pcaid
     *
     * @return int|null
     */
    public function getCategoriaItemPcaid()
    {
        return $this->container['categoria_item_pcaid'];
    }

    /**
     * Sets categoria_item_pcaid
     *
     * @param int|null $categoria_item_pcaid categoria_item_pcaid
     *
     * @return self
     */
    public function setCategoriaItemPcaid($categoria_item_pcaid)
    {
        if (is_null($categoria_item_pcaid)) {
            throw new \InvalidArgumentException('non-nullable categoria_item_pcaid cannot be null');
        }
        $this->container['categoria_item_pcaid'] = $categoria_item_pcaid;

        return $this;
    }

    /**
     * Gets catalogo_id
     *
     * @return int|null
     */
    public function getCatalogoId()
    {
        return $this->container['catalogo_id'];
    }

    /**
     * Sets catalogo_id
     *
     * @param int|null $catalogo_id catalogo_id
     *
     * @return self
     */
    public function setCatalogoId($catalogo_id)
    {
        if (is_null($catalogo_id)) {
            throw new \InvalidArgumentException('non-nullable catalogo_id cannot be null');
        }
        $this->container['catalogo_id'] = $catalogo_id;

        return $this;
    }

    /**
     * Gets classificacao_catalogo_id
     *
     * @return int|null
     */
    public function getClassificacaoCatalogoId()
    {
        return $this->container['classificacao_catalogo_id'];
    }

    /**
     * Sets classificacao_catalogo_id
     *
     * @param int|null $classificacao_catalogo_id classificacao_catalogo_id
     *
     * @return self
     */
    public function setClassificacaoCatalogoId($classificacao_catalogo_id)
    {
        if (is_null($classificacao_catalogo_id)) {
            throw new \InvalidArgumentException('non-nullable classificacao_catalogo_id cannot be null');
        }
        $this->container['classificacao_catalogo_id'] = $classificacao_catalogo_id;

        return $this;
    }

    /**
     * Gets nome_catalogo
     *
     * @return string|null
     */
    public function getNomeCatalogo()
    {
        return $this->container['nome_catalogo'];
    }

    /**
     * Sets nome_catalogo
     *
     * @param string|null $nome_catalogo nome_catalogo
     *
     * @return self
     */
    public function setNomeCatalogo($nome_catalogo)
    {
        if (is_null($nome_catalogo)) {
            throw new \InvalidArgumentException('non-nullable nome_catalogo cannot be null');
        }
        $this->container['nome_catalogo'] = $nome_catalogo;

        return $this;
    }

    /**
     * Gets categoria_item_pca_nome
     *
     * @return string|null
     */
    public function getCategoriaItemPcaNome()
    {
        return $this->container['categoria_item_pca_nome'];
    }

    /**
     * Sets categoria_item_pca_nome
     *
     * @param string|null $categoria_item_pca_nome categoria_item_pca_nome
     *
     * @return self
     */
    public function setCategoriaItemPcaNome($categoria_item_pca_nome)
    {
        if (is_null($categoria_item_pca_nome)) {
            throw new \InvalidArgumentException('non-nullable categoria_item_pca_nome cannot be null');
        }
        $this->container['categoria_item_pca_nome'] = $categoria_item_pca_nome;

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

