<?php
/**
 * TransactionEventModel
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
 * TransactionEventModel Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransactionEventModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'event_date' => '\DateTime',
        'event_type' => 'string',
        'comments' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'event_date' => 'eventDate',
        'event_type' => 'eventType',
        'comments' => 'comments'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'event_date' => 'setEventDate',
        'event_type' => 'setEventType',
        'comments' => 'setComments'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'event_date' => 'getEventDate',
        'event_type' => 'getEventType',
        'comments' => 'getComments'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $event_date The date of the event.
      * @var \DateTime
      */
    protected $event_date;
    
    /**
      * $event_type The type of event.
      * @var string
      */
    protected $event_type;
    
    /**
      * $comments Additional context describing the event if applicable.
      * @var string
      */
    protected $comments;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->event_date = $data["event_date"];
            $this->event_type = $data["event_type"];
            $this->comments = $data["comments"];
        }
    }
    
    /**
     * Gets event_date
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->event_date;
    }
  
    /**
     * Sets event_date
     * @param \DateTime $event_date The date of the event.
     * @return $this
     */
    public function setEventDate($event_date)
    {
        
        $this->event_date = $event_date;
        return $this;
    }
    
    /**
     * Gets event_type
     * @return string
     */
    public function getEventType()
    {
        return $this->event_type;
    }
  
    /**
     * Sets event_type
     * @param string $event_type The type of event.
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowed_values = array("Sale", "Credit", "Statement", "Reject", "Chargeback", "Refund", "Settle", "GeneralError", "Alert", "Void", "Return", "Send", "Debit", "Hold", "ChargebackReported", "Authorize", "Capture", "ChargebackRepresentmentClosed");
        if (!in_array($event_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'event_type', must be one of 'Sale', 'Credit', 'Statement', 'Reject', 'Chargeback', 'Refund', 'Settle', 'GeneralError', 'Alert', 'Void', 'Return', 'Send', 'Debit', 'Hold', 'ChargebackReported', 'Authorize', 'Capture', 'ChargebackRepresentmentClosed'");
        }
        $this->event_type = $event_type;
        return $this;
    }
    
    /**
     * Gets comments
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }
  
    /**
     * Sets comments
     * @param string $comments Additional context describing the event if applicable.
     * @return $this
     */
    public function setComments($comments)
    {
        
        $this->comments = $comments;
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
