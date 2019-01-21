<?php
/**
 * PostIvrSessionRequestModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * PostIvrSessionRequestModel Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostIvrSessionRequestModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'attribute_values' => 'map[string,string]',
        'phone_number' => 'string',
        'expiration' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'attribute_values' => 'attributeValues',
        'phone_number' => 'phoneNumber',
        'expiration' => 'expiration'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'attribute_values' => 'setAttributeValues',
        'phone_number' => 'setPhoneNumber',
        'expiration' => 'setExpiration'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'attribute_values' => 'getAttributeValues',
        'phone_number' => 'getPhoneNumber',
        'expiration' => 'getExpiration'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $attribute_values Key/value collection of all custom attributes for the IVR session.
      * @var map[string,string]
      */
    protected $attribute_values;
    
    /**
      * $phone_number The phone number of the caller.
      * @var string
      */
    protected $phone_number;
    
    /**
      * $expiration The amount of time from creation, in seconds, before the session expires.
      * @var int
      */
    protected $expiration;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->attribute_values = $data["attribute_values"];
            $this->phone_number = $data["phone_number"];
            $this->expiration = $data["expiration"];
        }
    }
    
    /**
     * Gets attribute_values
     * @return map[string,string]
     */
    public function getAttributeValues()
    {
        return $this->attribute_values;
    }
  
    /**
     * Sets attribute_values
     * @param map[string,string] $attribute_values Key/value collection of all custom attributes for the IVR session.
     * @return $this
     */
    public function setAttributeValues($attribute_values)
    {
        
        $this->attribute_values = $attribute_values;
        return $this;
    }
    
    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
  
    /**
     * Sets phone_number
     * @param string $phone_number The phone number of the caller.
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        
        $this->phone_number = $phone_number;
        return $this;
    }
    
    /**
     * Gets expiration
     * @return int
     */
    public function getExpiration()
    {
        return $this->expiration;
    }
  
    /**
     * Sets expiration
     * @param int $expiration The amount of time from creation, in seconds, before the session expires.
     * @return $this
     */
    public function setExpiration($expiration)
    {
        
        $this->expiration = $expiration;
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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
