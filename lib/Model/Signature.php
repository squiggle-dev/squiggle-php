<?php
/**
 * Signature
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
 * Signature Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Squiggle
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Signature implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'template' => 'int',
        'plain' => 'string',
        'html' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'template' => 'template',
        'plain' => 'plain',
        'html' => 'html'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'template' => 'setTemplate',
        'plain' => 'setPlain',
        'html' => 'setHtml'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'template' => 'getTemplate',
        'plain' => 'getPlain',
        'html' => 'getHtml'
    );
  
    
    /**
      * $id 
      * @var int
      */
    protected $id;
    
    /**
      * $template 
      * @var int
      */
    protected $template;
    
    /**
      * $plain 
      * @var string
      */
    protected $plain;
    
    /**
      * $html 
      * @var string
      */
    protected $html;
    

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
     * Gets template
     * @return int
     */
    public function getTemplate()
    {
        return $this->template;
    }
  
    /**
     * Sets template
     * @param int $template 
     * @return $this
     */
    public function setTemplate($template)
    {
        
        $this->template = $template;
        return $this;
    }
    
    /**
     * Gets plain
     * @return string
     */
    public function getPlain()
    {
        return $this->plain;
    }
  
    /**
     * Sets plain
     * @param string $plain 
     * @return $this
     */
    public function setPlain($plain)
    {
        
        $this->plain = $plain;
        return $this;
    }
    
    /**
     * Gets html
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }
  
    /**
     * Sets html
     * @param string $html 
     * @return $this
     */
    public function setHtml($html)
    {
        
        $this->html = $html;
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
