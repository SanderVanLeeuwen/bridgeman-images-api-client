<?php
/**
 * AssetBasic
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bridgeman\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bridgeman Images Public Api
 *
 * Last updated on 2019-12-19. Yml version [https://public-api.bridgemanimages.com/swagger.yaml](/swagger.yaml) Note that all endpoints have \"/1.0\" prefix, e.g. \"/1.0/asset/1699997/image/thumbnail\".
 *
 * OpenAPI spec version: 1.1.0-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.14
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bridgeman\Client\Model;

use \ArrayAccess;
use \Bridgeman\Client\ObjectSerializer;

/**
 * AssetBasic Class Doc Comment
 *
 * @category Class
 * @package  Bridgeman\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetBasic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssetBasic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'code' => 'string',
'type' => '\Bridgeman\Client\Model\AssetBasicType',
'title' => 'string',
'description' => 'string',
'keywords' => 'string[]',
'year' => 'int',
'century' => 'string',
'creator' => '\Bridgeman\Client\Model\AssetBasicType',
'supplier' => '\Bridgeman\Client\Model\AssetBasicSupplier',
'location' => '\Bridgeman\Client\Model\AssetBasicType',
'medium' => 'string',
'categories' => '\Bridgeman\Client\Model\AssetBasicType[]',
'copyright' => '\Bridgeman\Client\Model\AssetBasicCopyright',
'special_instruction' => 'string',
'dimensions' => '\Bridgeman\Client\Model\AssetBasicDimensions',
'rgb_profile' => '\Bridgeman\Client\Model\AssetBasicRgbProfile',
'credits' => 'string[]',
'permissions' => 'string[]',
'restrictions' => 'string[]',
'thumbnail' => '\Bridgeman\Client\Model\AssetBasicThumbnail',
'_score' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'code' => null,
'type' => null,
'title' => null,
'description' => null,
'keywords' => null,
'year' => null,
'century' => null,
'creator' => null,
'supplier' => null,
'location' => null,
'medium' => null,
'categories' => null,
'copyright' => null,
'special_instruction' => null,
'dimensions' => null,
'rgb_profile' => null,
'credits' => null,
'permissions' => null,
'restrictions' => null,
'thumbnail' => null,
'_score' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'code' => 'code',
'type' => 'type',
'title' => 'title',
'description' => 'description',
'keywords' => 'keywords',
'year' => 'year',
'century' => 'century',
'creator' => 'creator',
'supplier' => 'supplier',
'location' => 'location',
'medium' => 'medium',
'categories' => 'categories',
'copyright' => 'copyright',
'special_instruction' => 'special_instruction',
'dimensions' => 'dimensions',
'rgb_profile' => 'rgb_profile',
'credits' => 'credits',
'permissions' => 'permissions',
'restrictions' => 'restrictions',
'thumbnail' => 'thumbnail',
'_score' => '_score'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'code' => 'setCode',
'type' => 'setType',
'title' => 'setTitle',
'description' => 'setDescription',
'keywords' => 'setKeywords',
'year' => 'setYear',
'century' => 'setCentury',
'creator' => 'setCreator',
'supplier' => 'setSupplier',
'location' => 'setLocation',
'medium' => 'setMedium',
'categories' => 'setCategories',
'copyright' => 'setCopyright',
'special_instruction' => 'setSpecialInstruction',
'dimensions' => 'setDimensions',
'rgb_profile' => 'setRgbProfile',
'credits' => 'setCredits',
'permissions' => 'setPermissions',
'restrictions' => 'setRestrictions',
'thumbnail' => 'setThumbnail',
'_score' => 'setScore'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'code' => 'getCode',
'type' => 'getType',
'title' => 'getTitle',
'description' => 'getDescription',
'keywords' => 'getKeywords',
'year' => 'getYear',
'century' => 'getCentury',
'creator' => 'getCreator',
'supplier' => 'getSupplier',
'location' => 'getLocation',
'medium' => 'getMedium',
'categories' => 'getCategories',
'copyright' => 'getCopyright',
'special_instruction' => 'getSpecialInstruction',
'dimensions' => 'getDimensions',
'rgb_profile' => 'getRgbProfile',
'credits' => 'getCredits',
'permissions' => 'getPermissions',
'restrictions' => 'getRestrictions',
'thumbnail' => 'getThumbnail',
'_score' => 'getScore'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['century'] = isset($data['century']) ? $data['century'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
        $this->container['special_instruction'] = isset($data['special_instruction']) ? $data['special_instruction'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['rgb_profile'] = isset($data['rgb_profile']) ? $data['rgb_profile'] : null;
        $this->container['credits'] = isset($data['credits']) ? $data['credits'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['_score'] = isset($data['_score']) ? $data['_score'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Bridgeman\Client\Model\AssetBasicType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Bridgeman\Client\Model\AssetBasicType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets century
     *
     * @return string
     */
    public function getCentury()
    {
        return $this->container['century'];
    }

    /**
     * Sets century
     *
     * @param string $century century
     *
     * @return $this
     */
    public function setCentury($century)
    {
        $this->container['century'] = $century;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \Bridgeman\Client\Model\AssetBasicType
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \Bridgeman\Client\Model\AssetBasicType $creator creator
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \Bridgeman\Client\Model\AssetBasicSupplier
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \Bridgeman\Client\Model\AssetBasicSupplier $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Bridgeman\Client\Model\AssetBasicType
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Bridgeman\Client\Model\AssetBasicType $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param string $medium medium
     *
     * @return $this
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Bridgeman\Client\Model\AssetBasicType[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Bridgeman\Client\Model\AssetBasicType[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return \Bridgeman\Client\Model\AssetBasicCopyright
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param \Bridgeman\Client\Model\AssetBasicCopyright $copyright copyright
     *
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

        return $this;
    }

    /**
     * Gets special_instruction
     *
     * @return string
     */
    public function getSpecialInstruction()
    {
        return $this->container['special_instruction'];
    }

    /**
     * Sets special_instruction
     *
     * @param string $special_instruction special_instruction
     *
     * @return $this
     */
    public function setSpecialInstruction($special_instruction)
    {
        $this->container['special_instruction'] = $special_instruction;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \Bridgeman\Client\Model\AssetBasicDimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Bridgeman\Client\Model\AssetBasicDimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets rgb_profile
     *
     * @return \Bridgeman\Client\Model\AssetBasicRgbProfile
     */
    public function getRgbProfile()
    {
        return $this->container['rgb_profile'];
    }

    /**
     * Sets rgb_profile
     *
     * @param \Bridgeman\Client\Model\AssetBasicRgbProfile $rgb_profile rgb_profile
     *
     * @return $this
     */
    public function setRgbProfile($rgb_profile)
    {
        $this->container['rgb_profile'] = $rgb_profile;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return string[]
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param string[] $credits credits
     *
     * @return $this
     */
    public function setCredits($credits)
    {
        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string[] $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return string[]
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param string[] $restrictions restrictions
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return \Bridgeman\Client\Model\AssetBasicThumbnail
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param \Bridgeman\Client\Model\AssetBasicThumbnail $thumbnail thumbnail
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets _score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->container['_score'];
    }

    /**
     * Sets _score
     *
     * @param int $_score _score
     *
     * @return $this
     */
    public function setScore($_score)
    {
        $this->container['_score'] = $_score;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
