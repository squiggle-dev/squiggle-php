<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  Squiggle
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Squiggle\Model;

use \ArrayAccess;
/**
 * User Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Squiggle
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class User implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
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
        'website' => 'string',
        'tel' => 'string',
        'linkedin' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'instagram' => 'string',
        'googleplus' => 'string',
        'logo' => 'int',
        'snippet' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'email' => 'email',
        'company_name' => 'company_name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'domain' => 'domain',
        'address1' => 'address1',
        'address2' => 'address2',
        'address3' => 'address3',
        'address_city' => 'address_city',
        'address_postcode' => 'address_postcode',
        'address_country' => 'address_country',
        'website' => 'website',
        'tel' => 'tel',
        'linkedin' => 'linkedin',
        'facebook' => 'facebook',
        'twitter' => 'twitter',
        'instagram' => 'instagram',
        'googleplus' => 'googleplus',
        'logo' => 'logo',
        'snippet' => 'snippet',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
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
        'website' => 'setWebsite',
        'tel' => 'setTel',
        'linkedin' => 'setLinkedin',
        'facebook' => 'setFacebook',
        'twitter' => 'setTwitter',
        'instagram' => 'setInstagram',
        'googleplus' => 'setGoogleplus',
        'logo' => 'setLogo',
        'snippet' => 'setSnippet',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
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
        'website' => 'getWebsite',
        'tel' => 'getTel',
        'linkedin' => 'getLinkedin',
        'facebook' => 'getFacebook',
        'twitter' => 'getTwitter',
        'instagram' => 'getInstagram',
        'googleplus' => 'getGoogleplus',
        'logo' => 'getLogo',
        'snippet' => 'getSnippet',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    );
  
    
    /**
      * $id 
      * @var int
      */
    protected $id;
    
    /**
      * $email 
      * @var string
      */
    protected $email;
    
    /**
      * $company_name 
      * @var string
      */
    protected $company_name;
    
    /**
      * $first_name 
      * @var string
      */
    protected $first_name;
    
    /**
      * $last_name 
      * @var string
      */
    protected $last_name;
    
    /**
      * $domain 
      * @var string
      */
    protected $domain;
    
    /**
      * $address1 
      * @var string
      */
    protected $address1;
    
    /**
      * $address2 
      * @var string
      */
    protected $address2;
    
    /**
      * $address3 
      * @var string
      */
    protected $address3;
    
    /**
      * $address_city 
      * @var string
      */
    protected $address_city;
    
    /**
      * $address_postcode 
      * @var string
      */
    protected $address_postcode;
    
    /**
      * $address_country 
      * @var string
      */
    protected $address_country;
    
    /**
      * $website 
      * @var string
      */
    protected $website;
    
    /**
      * $tel 
      * @var string
      */
    protected $tel;
    
    /**
      * $linkedin 
      * @var string
      */
    protected $linkedin;
    
    /**
      * $facebook 
      * @var string
      */
    protected $facebook;
    
    /**
      * $twitter 
      * @var string
      */
    protected $twitter;
    
    /**
      * $instagram 
      * @var string
      */
    protected $instagram;
    
    /**
      * $googleplus 
      * @var string
      */
    protected $googleplus;
    
    /**
      * $logo 
      * @var int
      */
    protected $logo;
    
    /**
      * $snippet 
      * @var int
      */
    protected $snippet;
    
    /**
      * $created_at 
      * @var \DateTime
      */
    protected $created_at;
    
    /**
      * $updated_at 
      * @var \DateTime
      */
    protected $updated_at;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            foreach ($data as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets company_name
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }
  
    /**
     * Sets company_name
     * @param string $company_name 
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        
        $this->company_name = $company_name;
        return $this;
    }
    
    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
  
    /**
     * Sets first_name
     * @param string $first_name 
     * @return $this
     */
    public function setFirstName($first_name)
    {
        
        $this->first_name = $first_name;
        return $this;
    }
    
    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }
  
    /**
     * Sets last_name
     * @param string $last_name 
     * @return $this
     */
    public function setLastName($last_name)
    {
        
        $this->last_name = $last_name;
        return $this;
    }
    
    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
  
    /**
     * Sets domain
     * @param string $domain 
     * @return $this
     */
    public function setDomain($domain)
    {
        
        $this->domain = $domain;
        return $this;
    }
    
    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }
  
    /**
     * Sets address1
     * @param string $address1 
     * @return $this
     */
    public function setAddress1($address1)
    {
        
        $this->address1 = $address1;
        return $this;
    }
    
    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }
  
    /**
     * Sets address2
     * @param string $address2 
     * @return $this
     */
    public function setAddress2($address2)
    {
        
        $this->address2 = $address2;
        return $this;
    }
    
    /**
     * Gets address3
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }
  
    /**
     * Sets address3
     * @param string $address3 
     * @return $this
     */
    public function setAddress3($address3)
    {
        
        $this->address3 = $address3;
        return $this;
    }
    
    /**
     * Gets address_city
     * @return string
     */
    public function getAddressCity()
    {
        return $this->address_city;
    }
  
    /**
     * Sets address_city
     * @param string $address_city 
     * @return $this
     */
    public function setAddressCity($address_city)
    {
        
        $this->address_city = $address_city;
        return $this;
    }
    
    /**
     * Gets address_postcode
     * @return string
     */
    public function getAddressPostcode()
    {
        return $this->address_postcode;
    }
  
    /**
     * Sets address_postcode
     * @param string $address_postcode 
     * @return $this
     */
    public function setAddressPostcode($address_postcode)
    {
        
        $this->address_postcode = $address_postcode;
        return $this;
    }
    
    /**
     * Gets address_country
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->address_country;
    }
  
    /**
     * Sets address_country
     * @param string $address_country 
     * @return $this
     */
    public function setAddressCountry($address_country)
    {
        
        $this->address_country = $address_country;
        return $this;
    }
    
    /**
     * Gets website
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }
  
    /**
     * Sets website
     * @param string $website 
     * @return $this
     */
    public function setWebsite($website)
    {
        
        $this->website = $website;
        return $this;
    }
    
    /**
     * Gets tel
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }
  
    /**
     * Sets tel
     * @param string $tel 
     * @return $this
     */
    public function setTel($tel)
    {
        
        $this->tel = $tel;
        return $this;
    }
    
    /**
     * Gets linkedin
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }
  
    /**
     * Sets linkedin
     * @param string $linkedin 
     * @return $this
     */
    public function setLinkedin($linkedin)
    {
        
        $this->linkedin = $linkedin;
        return $this;
    }
    
    /**
     * Gets facebook
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
  
    /**
     * Sets facebook
     * @param string $facebook 
     * @return $this
     */
    public function setFacebook($facebook)
    {
        
        $this->facebook = $facebook;
        return $this;
    }
    
    /**
     * Gets twitter
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }
  
    /**
     * Sets twitter
     * @param string $twitter 
     * @return $this
     */
    public function setTwitter($twitter)
    {
        
        $this->twitter = $twitter;
        return $this;
    }
    
    /**
     * Gets instagram
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }
  
    /**
     * Sets instagram
     * @param string $instagram 
     * @return $this
     */
    public function setInstagram($instagram)
    {
        
        $this->instagram = $instagram;
        return $this;
    }
    
    /**
     * Gets googleplus
     * @return string
     */
    public function getGoogleplus()
    {
        return $this->googleplus;
    }
  
    /**
     * Sets googleplus
     * @param string $googleplus 
     * @return $this
     */
    public function setGoogleplus($googleplus)
    {
        
        $this->googleplus = $googleplus;
        return $this;
    }
    
    /**
     * Gets logo
     * @return int
     */
    public function getLogo()
    {
        return $this->logo;
    }
  
    /**
     * Sets logo
     * @param int $logo 
     * @return $this
     */
    public function setLogo($logo)
    {
        
        $this->logo = $logo;
        return $this;
    }
    
    /**
     * Gets snippet
     * @return int
     */
    public function getSnippet()
    {
        return $this->snippet;
    }
  
    /**
     * Sets snippet
     * @param int $snippet 
     * @return $this
     */
    public function setSnippet($snippet)
    {
        
        $this->snippet = $snippet;
        return $this;
    }
    
    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param \DateTime $created_at 
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        
        $this->created_at = $created_at;
        return $this;
    }
    
    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param \DateTime $updated_at 
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        
        $this->updated_at = $updated_at;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Squiggle\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Squiggle\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
