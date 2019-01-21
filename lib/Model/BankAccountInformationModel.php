<?php
/**
 * BankAccountInformationModel
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
 * BankAccountInformationModel Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BankAccountInformationModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'account_holder' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'account_type' => 'string',
        'routing_number' => 'string',
        'account_number' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'account_holder' => 'accountHolder',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'account_type' => 'accountType',
        'routing_number' => 'routingNumber',
        'account_number' => 'accountNumber'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'account_holder' => 'setAccountHolder',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'account_type' => 'setAccountType',
        'routing_number' => 'setRoutingNumber',
        'account_number' => 'setAccountNumber'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'account_holder' => 'getAccountHolder',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'account_type' => 'getAccountType',
        'routing_number' => 'getRoutingNumber',
        'account_number' => 'getAccountNumber'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $account_holder Name that is on the bank account.
      * @var string
      */
    protected $account_holder;
    
    /**
      * $first_name First name of the person authorizing the transaction.
      * @var string
      */
    protected $first_name;
    
    /**
      * $last_name Last name of the person authorizing the transaction.
      * @var string
      */
    protected $last_name;
    
    /**
      * $account_type The type of the bank account.
      * @var string
      */
    protected $account_type;
    
    /**
      * $routing_number The 9-digit routing number.
      * @var string
      */
    protected $routing_number;
    
    /**
      * $account_number The bank account number.
      * @var string
      */
    protected $account_number;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->account_holder = $data["account_holder"];
            $this->first_name = $data["first_name"];
            $this->last_name = $data["last_name"];
            $this->account_type = $data["account_type"];
            $this->routing_number = $data["routing_number"];
            $this->account_number = $data["account_number"];
        }
    }
    
    /**
     * Gets account_holder
     * @return string
     */
    public function getAccountHolder()
    {
        return $this->account_holder;
    }
  
    /**
     * Sets account_holder
     * @param string $account_holder Name that is on the bank account.
     * @return $this
     */
    public function setAccountHolder($account_holder)
    {
        
        $this->account_holder = $account_holder;
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
     * @param string $first_name First name of the person authorizing the transaction.
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
     * @param string $last_name Last name of the person authorizing the transaction.
     * @return $this
     */
    public function setLastName($last_name)
    {
        
        $this->last_name = $last_name;
        return $this;
    }
    
    /**
     * Gets account_type
     * @return string
     */
    public function getAccountType()
    {
        return $this->account_type;
    }
  
    /**
     * Sets account_type
     * @param string $account_type The type of the bank account.
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $allowed_values = array("PersonalChecking", "PersonalSavings", "CorporateChecking", "CorporateSavings");
        if (!in_array($account_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'account_type', must be one of 'PersonalChecking', 'PersonalSavings', 'CorporateChecking', 'CorporateSavings'");
        }
        $this->account_type = $account_type;
        return $this;
    }
    
    /**
     * Gets routing_number
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->routing_number;
    }
  
    /**
     * Sets routing_number
     * @param string $routing_number The 9-digit routing number.
     * @return $this
     */
    public function setRoutingNumber($routing_number)
    {
        
        $this->routing_number = $routing_number;
        return $this;
    }
    
    /**
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }
  
    /**
     * Sets account_number
     * @param string $account_number The bank account number.
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        
        $this->account_number = $account_number;
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
