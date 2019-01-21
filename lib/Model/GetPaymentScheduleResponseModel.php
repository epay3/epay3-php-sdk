<?php
/**
 * GetPaymentScheduleResponseModel
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
 * GetPaymentScheduleResponseModel Class Doc Comment
 *
 * @category    Class
 * @description Provides details of a payment schedule.
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetPaymentScheduleResponseModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'payer' => 'string',
        'email_address' => 'string',
        'token_id' => 'string',
        'number_of_total_payments' => 'int',
        'number_of_executed_payments' => 'int',
        'amount' => 'double',
        'payer_fee' => 'double',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'next_payment_date' => '\DateTime',
        'interval' => 'string',
        'interval_count' => 'int',
        'attribute_values' => 'map[string,string]',
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
        'id' => 'id',
        'payer' => 'payer',
        'email_address' => 'emailAddress',
        'token_id' => 'tokenId',
        'number_of_total_payments' => 'numberOfTotalPayments',
        'number_of_executed_payments' => 'numberOfExecutedPayments',
        'amount' => 'amount',
        'payer_fee' => 'payerFee',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'next_payment_date' => 'nextPaymentDate',
        'interval' => 'interval',
        'interval_count' => 'intervalCount',
        'attribute_values' => 'attributeValues',
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
        'id' => 'setId',
        'payer' => 'setPayer',
        'email_address' => 'setEmailAddress',
        'token_id' => 'setTokenId',
        'number_of_total_payments' => 'setNumberOfTotalPayments',
        'number_of_executed_payments' => 'setNumberOfExecutedPayments',
        'amount' => 'setAmount',
        'payer_fee' => 'setPayerFee',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'next_payment_date' => 'setNextPaymentDate',
        'interval' => 'setInterval',
        'interval_count' => 'setIntervalCount',
        'attribute_values' => 'setAttributeValues',
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
        'id' => 'getId',
        'payer' => 'getPayer',
        'email_address' => 'getEmailAddress',
        'token_id' => 'getTokenId',
        'number_of_total_payments' => 'getNumberOfTotalPayments',
        'number_of_executed_payments' => 'getNumberOfExecutedPayments',
        'amount' => 'getAmount',
        'payer_fee' => 'getPayerFee',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'next_payment_date' => 'getNextPaymentDate',
        'interval' => 'getInterval',
        'interval_count' => 'getIntervalCount',
        'attribute_values' => 'getAttributeValues',
        'comments' => 'getComments'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id The unique identifier of the payment schedule.
      * @var string
      */
    protected $id;
    
    /**
      * $payer Name of the payer that is shown on the receipt.
      * @var string
      */
    protected $payer;
    
    /**
      * $email_address The recipient of the emailed receipt.
      * @var string
      */
    protected $email_address;
    
    /**
      * $token_id The token Id that represents the payment method to be used on the schedule.
      * @var string
      */
    protected $token_id;
    
    /**
      * $number_of_total_payments The number of payments to process on the schedule if the payment schedule has a pre-determined list of payments.
      * @var int
      */
    protected $number_of_total_payments;
    
    /**
      * $number_of_executed_payments The number of executed payments.
      * @var int
      */
    protected $number_of_executed_payments;
    
    /**
      * $amount The amount of each recurring payment.
      * @var double
      */
    protected $amount;
    
    /**
      * $payer_fee Used if the calling application has pre-calculated a payer fee. In that case, the fee will not be re-calculated. This amount, if set, will not be added to the amount field prior to processing.
      * @var double
      */
    protected $payer_fee;
    
    /**
      * $start_date The date of the initial payment.
      * @var \DateTime
      */
    protected $start_date;
    
    /**
      * $end_date The end date of the schedule if the schedule was created with a pre-determined end date.
      * @var \DateTime
      */
    protected $end_date;
    
    /**
      * $next_payment_date The date of the next payment.
      * @var \DateTime
      */
    protected $next_payment_date;
    
    /**
      * $interval The interval by which the payments should be run.
      * @var string
      */
    protected $interval;
    
    /**
      * $interval_count The number of days, weeks, etc to wait between payments.
      * @var int
      */
    protected $interval_count;
    
    /**
      * $attribute_values Dictionary of custom attribute values. The key in the dictionary is the identifier of the custom attribute.
      * @var map[string,string]
      */
    protected $attribute_values;
    
    /**
      * $comments Comments that are shown on the receipt.
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
            $this->id = $data["id"];
            $this->payer = $data["payer"];
            $this->email_address = $data["email_address"];
            $this->token_id = $data["token_id"];
            $this->number_of_total_payments = $data["number_of_total_payments"];
            $this->number_of_executed_payments = $data["number_of_executed_payments"];
            $this->amount = $data["amount"];
            $this->payer_fee = $data["payer_fee"];
            $this->start_date = $data["start_date"];
            $this->end_date = $data["end_date"];
            $this->next_payment_date = $data["next_payment_date"];
            $this->interval = $data["interval"];
            $this->interval_count = $data["interval_count"];
            $this->attribute_values = $data["attribute_values"];
            $this->comments = $data["comments"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The unique identifier of the payment schedule.
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets payer
     * @return string
     */
    public function getPayer()
    {
        return $this->payer;
    }
  
    /**
     * Sets payer
     * @param string $payer Name of the payer that is shown on the receipt.
     * @return $this
     */
    public function setPayer($payer)
    {
        
        $this->payer = $payer;
        return $this;
    }
    
    /**
     * Gets email_address
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }
  
    /**
     * Sets email_address
     * @param string $email_address The recipient of the emailed receipt.
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        
        $this->email_address = $email_address;
        return $this;
    }
    
    /**
     * Gets token_id
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }
  
    /**
     * Sets token_id
     * @param string $token_id The token Id that represents the payment method to be used on the schedule.
     * @return $this
     */
    public function setTokenId($token_id)
    {
        
        $this->token_id = $token_id;
        return $this;
    }
    
    /**
     * Gets number_of_total_payments
     * @return int
     */
    public function getNumberOfTotalPayments()
    {
        return $this->number_of_total_payments;
    }
  
    /**
     * Sets number_of_total_payments
     * @param int $number_of_total_payments The number of payments to process on the schedule if the payment schedule has a pre-determined list of payments.
     * @return $this
     */
    public function setNumberOfTotalPayments($number_of_total_payments)
    {
        
        $this->number_of_total_payments = $number_of_total_payments;
        return $this;
    }
    
    /**
     * Gets number_of_executed_payments
     * @return int
     */
    public function getNumberOfExecutedPayments()
    {
        return $this->number_of_executed_payments;
    }
  
    /**
     * Sets number_of_executed_payments
     * @param int $number_of_executed_payments The number of executed payments.
     * @return $this
     */
    public function setNumberOfExecutedPayments($number_of_executed_payments)
    {
        
        $this->number_of_executed_payments = $number_of_executed_payments;
        return $this;
    }
    
    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param double $amount The amount of each recurring payment.
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets payer_fee
     * @return double
     */
    public function getPayerFee()
    {
        return $this->payer_fee;
    }
  
    /**
     * Sets payer_fee
     * @param double $payer_fee Used if the calling application has pre-calculated a payer fee. In that case, the fee will not be re-calculated. This amount, if set, will not be added to the amount field prior to processing.
     * @return $this
     */
    public function setPayerFee($payer_fee)
    {
        
        $this->payer_fee = $payer_fee;
        return $this;
    }
    
    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }
  
    /**
     * Sets start_date
     * @param \DateTime $start_date The date of the initial payment.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        
        $this->start_date = $start_date;
        return $this;
    }
    
    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }
  
    /**
     * Sets end_date
     * @param \DateTime $end_date The end date of the schedule if the schedule was created with a pre-determined end date.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        
        $this->end_date = $end_date;
        return $this;
    }
    
    /**
     * Gets next_payment_date
     * @return \DateTime
     */
    public function getNextPaymentDate()
    {
        return $this->next_payment_date;
    }
  
    /**
     * Sets next_payment_date
     * @param \DateTime $next_payment_date The date of the next payment.
     * @return $this
     */
    public function setNextPaymentDate($next_payment_date)
    {
        
        $this->next_payment_date = $next_payment_date;
        return $this;
    }
    
    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }
  
    /**
     * Sets interval
     * @param string $interval The interval by which the payments should be run.
     * @return $this
     */
    public function setInterval($interval)
    {
        $allowed_values = array("Day", "Week", "Month", "Year");
        if (!in_array($interval, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'interval', must be one of 'Day', 'Week', 'Month', 'Year'");
        }
        $this->interval = $interval;
        return $this;
    }
    
    /**
     * Gets interval_count
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->interval_count;
    }
  
    /**
     * Sets interval_count
     * @param int $interval_count The number of days, weeks, etc to wait between payments.
     * @return $this
     */
    public function setIntervalCount($interval_count)
    {
        
        $this->interval_count = $interval_count;
        return $this;
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
     * @param map[string,string] $attribute_values Dictionary of custom attribute values. The key in the dictionary is the identifier of the custom attribute.
     * @return $this
     */
    public function setAttributeValues($attribute_values)
    {
        
        $this->attribute_values = $attribute_values;
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
     * @param string $comments Comments that are shown on the receipt.
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
