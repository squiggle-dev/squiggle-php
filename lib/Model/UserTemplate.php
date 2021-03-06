<?php
/**
 * UserTemplate
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
 * UserTemplate Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Squiggle
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserTemplate implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'email' => 'string',
        'company_name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'domain' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'address_city' => 'string',
        'address_postcode' => 'string',
        'address_country' => 'string',
        'tel' => 'string',
        'website' => 'string',
        'linkedin' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'instagram' => 'string',
        'googleplus' => 'string',
        'additional_text' => 'string',
        'logo' => '\Squiggle\Model\FileTemplate'
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
        'id' => 'Id',
        'email' => 'Email',
        'company_name' => 'CompanyName',
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'domain' => 'Domain',
        'address1' => 'Address1',
        'address2' => 'Address2',
        'address3' => 'Address3',
        'address_city' => 'AddressCity',
        'address_postcode' => 'AddressPostcode',
        'address_country' => 'AddressCountry',
        'tel' => 'Tel',
        'website' => 'Website',
        'linkedin' => 'Linkedin',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'googleplus' => 'Googleplus',
        'additional_text' => 'AdditionalText',
        'logo' => 'Logo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'company_name' => 'setCompanyName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'domain' => 'setDomain',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'address_city' => 'setAddressCity',
        'address_postcode' => 'setAddressPostcode',
        'address_country' => 'setAddressCountry',
        'tel' => 'setTel',
        'website' => 'setWebsite',
        'linkedin' => 'setLinkedin',
        'facebook' => 'setFacebook',
        'twitter' => 'setTwitter',
        'instagram' => 'setInstagram',
        'googleplus' => 'setGoogleplus',
        'additional_text' => 'setAdditionalText',
        'logo' => 'setLogo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'company_name' => 'getCompanyName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'domain' => 'getDomain',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'address_city' => 'getAddressCity',
        'address_postcode' => 'getAddressPostcode',
        'address_country' => 'getAddressCountry',
        'tel' => 'getTel',
        'website' => 'getWebsite',
        'linkedin' => 'getLinkedin',
        'facebook' => 'getFacebook',
        'twitter' => 'getTwitter',
        'instagram' => 'getInstagram',
        'googleplus' => 'getGoogleplus',
        'additional_text' => 'getAdditionalText',
        'logo' => 'getLogo'
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['address3'] = isset($data['address3']) ? $data['address3'] : null;
        $this->container['address_city'] = isset($data['address_city']) ? $data['address_city'] : null;
        $this->container['address_postcode'] = isset($data['address_postcode']) ? $data['address_postcode'] : null;
        $this->container['address_country'] = isset($data['address_country']) ? $data['address_country'] : null;
        $this->container['tel'] = isset($data['tel']) ? $data['tel'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['linkedin'] = isset($data['linkedin']) ? $data['linkedin'] : null;
        $this->container['facebook'] = isset($data['facebook']) ? $data['facebook'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
        $this->container['instagram'] = isset($data['instagram']) ? $data['instagram'] : null;
        $this->container['googleplus'] = isset($data['googleplus']) ? $data['googleplus'] : null;
        $this->container['additional_text'] = isset($data['additional_text']) ? $data['additional_text'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
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
     * Gets company_name
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     * @param string $company_name
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address3
     * @return string
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     * @param string $address3
     * @return $this
     */
    public function setAddress3($address3)
    {
        $this->container['address3'] = $address3;

        return $this;
    }

    /**
     * Gets address_city
     * @return string
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     * @param string $address_city
     * @return $this
     */
    public function setAddressCity($address_city)
    {
        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_postcode
     * @return string
     */
    public function getAddressPostcode()
    {
        return $this->container['address_postcode'];
    }

    /**
     * Sets address_postcode
     * @param string $address_postcode
     * @return $this
     */
    public function setAddressPostcode($address_postcode)
    {
        $this->container['address_postcode'] = $address_postcode;

        return $this;
    }

    /**
     * Gets address_country
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     * @param string $address_country
     * @return $this
     */
    public function setAddressCountry($address_country)
    {
        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets tel
     * @return string
     */
    public function getTel()
    {
        return $this->container['tel'];
    }

    /**
     * Sets tel
     * @param string $tel
     * @return $this
     */
    public function setTel($tel)
    {
        $this->container['tel'] = $tel;

        return $this;
    }

    /**
     * Gets website
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     * @param string $website
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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
     * Gets additional_text
     * @return string
     */
    public function getAdditionalText()
    {
        return $this->container['additional_text'];
    }

    /**
     * Sets additional_text
     * @param string $additional_text
     * @return $this
     */
    public function setAdditionalText($additional_text)
    {
        $this->container['additional_text'] = $additional_text;

        return $this;
    }

    /**
     * Gets logo
     * @return \Squiggle\Model\FileTemplate
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     * @param \Squiggle\Model\FileTemplate $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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

