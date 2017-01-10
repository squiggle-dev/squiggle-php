<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  Squiggle
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Squiggle API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Squiggle\Model;

use \ArrayAccess;

/**
 * Address Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Squiggle
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'email' => 'string',
        'password' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'job_title' => 'string',
        'tel_mobile' => 'string',
        'tel_direct' => 'string',
        'linkedin' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'instagram' => 'string',
        'googleplus' => 'string',
        'template' => 'int',
        'signatures' => '\Squiggle\Model\Signature[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'email' => 'email',
        'password' => 'password',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'job_title' => 'job_title',
        'tel_mobile' => 'tel_mobile',
        'tel_direct' => 'tel_direct',
        'linkedin' => 'linkedin',
        'facebook' => 'facebook',
        'twitter' => 'twitter',
        'instagram' => 'instagram',
        'googleplus' => 'googleplus',
        'template' => 'template',
        'signatures' => 'signatures',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'job_title' => 'setJobTitle',
        'tel_mobile' => 'setTelMobile',
        'tel_direct' => 'setTelDirect',
        'linkedin' => 'setLinkedin',
        'facebook' => 'setFacebook',
        'twitter' => 'setTwitter',
        'instagram' => 'setInstagram',
        'googleplus' => 'setGoogleplus',
        'template' => 'setTemplate',
        'signatures' => 'setSignatures',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'job_title' => 'getJobTitle',
        'tel_mobile' => 'getTelMobile',
        'tel_direct' => 'getTelDirect',
        'linkedin' => 'getLinkedin',
        'facebook' => 'getFacebook',
        'twitter' => 'getTwitter',
        'instagram' => 'getInstagram',
        'googleplus' => 'getGoogleplus',
        'template' => 'getTemplate',
        'signatures' => 'getSignatures',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['tel_mobile'] = isset($data['tel_mobile']) ? $data['tel_mobile'] : null;
        $this->container['tel_direct'] = isset($data['tel_direct']) ? $data['tel_direct'] : null;
        $this->container['linkedin'] = isset($data['linkedin']) ? $data['linkedin'] : null;
        $this->container['facebook'] = isset($data['facebook']) ? $data['facebook'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
        $this->container['instagram'] = isset($data['instagram']) ? $data['instagram'] : null;
        $this->container['googleplus'] = isset($data['googleplus']) ? $data['googleplus'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['signatures'] = isset($data['signatures']) ? $data['signatures'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets job_title
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     * @param string $job_title
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets tel_mobile
     * @return string
     */
    public function getTelMobile()
    {
        return $this->container['tel_mobile'];
    }

    /**
     * Sets tel_mobile
     * @param string $tel_mobile
     * @return $this
     */
    public function setTelMobile($tel_mobile)
    {
        $this->container['tel_mobile'] = $tel_mobile;

        return $this;
    }

    /**
     * Gets tel_direct
     * @return string
     */
    public function getTelDirect()
    {
        return $this->container['tel_direct'];
    }

    /**
     * Sets tel_direct
     * @param string $tel_direct
     * @return $this
     */
    public function setTelDirect($tel_direct)
    {
        $this->container['tel_direct'] = $tel_direct;

        return $this;
    }

    /**
     * Gets linkedin
     * @return string
     */
    public function getLinkedin()
    {
        return $this->container['linkedin'];
    }

    /**
     * Sets linkedin
     * @param string $linkedin
     * @return $this
     */
    public function setLinkedin($linkedin)
    {
        $this->container['linkedin'] = $linkedin;

        return $this;
    }

    /**
     * Gets facebook
     * @return string
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     * @param string $facebook
     * @return $this
     */
    public function setFacebook($facebook)
    {
        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets twitter
     * @return string
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     * @param string $twitter
     * @return $this
     */
    public function setTwitter($twitter)
    {
        $this->container['twitter'] = $twitter;

        return $this;
    }

    /**
     * Gets instagram
     * @return string
     */
    public function getInstagram()
    {
        return $this->container['instagram'];
    }

    /**
     * Sets instagram
     * @param string $instagram
     * @return $this
     */
    public function setInstagram($instagram)
    {
        $this->container['instagram'] = $instagram;

        return $this;
    }

    /**
     * Gets googleplus
     * @return string
     */
    public function getGoogleplus()
    {
        return $this->container['googleplus'];
    }

    /**
     * Sets googleplus
     * @param string $googleplus
     * @return $this
     */
    public function setGoogleplus($googleplus)
    {
        $this->container['googleplus'] = $googleplus;

        return $this;
    }

    /**
     * Gets template
     * @return int
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     * @param int $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets signatures
     * @return \Squiggle\Model\Signature[]
     */
    public function getSignatures()
    {
        return $this->container['signatures'];
    }

    /**
     * Sets signatures
     * @param \Squiggle\Model\Signature[] $signatures
     * @return $this
     */
    public function setSignatures($signatures)
    {
        $this->container['signatures'] = $signatures;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Squiggle\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Squiggle\ObjectSerializer::sanitizeForSerialization($this));
    }
}

