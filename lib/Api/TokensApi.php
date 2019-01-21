<?php
/**
 * TokensApi
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokensApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api-sandbox.epaypolicy.com:443');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return TokensApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * tokensDelete
     *
     * Removes a stored token.
     *
     * @param string $id The Id of the token to be deleted. (required)
     * @param string $impersonation_account_key The key that allows impersonation of another account for which the token is being processed. Only specify a value if the account being impersonated is different from the account that is submitting this request. (optional, default to )
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function tokensDelete($id, $impersonation_account_key = null)
    {
        list($response, $statusCode, $httpHeader) = $this->tokensDeleteWithHttpInfo ($id, $impersonation_account_key);
        return $response; 
    }


    /**
     * tokensDeleteWithHttpInfo
     *
     * Removes a stored token.
     *
     * @param string $id The Id of the token to be deleted. (required)
     * @param string $impersonation_account_key The key that allows impersonation of another account for which the token is being processed. Only specify a value if the account being impersonated is different from the account that is submitting this request. (optional, default to )
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function tokensDeleteWithHttpInfo($id, $impersonation_account_key = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling tokensDelete');
        }
  
        // parse inputs
        $resourcePath = "/api/v1/tokens/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'text/json', 'application/xml', 'text/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        // header params
        
        if ($impersonation_account_key !== null) {
            $headerParams['impersonationAccountKey'] = $this->apiClient->getSerializer()->toHeaderValue($impersonation_account_key);
        }
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * tokensGet
     *
     * Retrieves the details of a token.
     *
     * @param string $id The unique identifier of the token. (required)
     * @param string $impersonation_account_key The key that allows impersonation of another account for which the token is being processed. Only specify a value if the account being impersonated is different from the account that is submitting this request. (optional, default to )
     * @return \Swagger\Client\Model\GetTokenResponseModel
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function tokensGet($id, $impersonation_account_key = null)
    {
        list($response, $statusCode, $httpHeader) = $this->tokensGetWithHttpInfo ($id, $impersonation_account_key);
        return $response; 
    }


    /**
     * tokensGetWithHttpInfo
     *
     * Retrieves the details of a token.
     *
     * @param string $id The unique identifier of the token. (required)
     * @param string $impersonation_account_key The key that allows impersonation of another account for which the token is being processed. Only specify a value if the account being impersonated is different from the account that is submitting this request. (optional, default to )
     * @return Array of \Swagger\Client\Model\GetTokenResponseModel, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function tokensGetWithHttpInfo($id, $impersonation_account_key = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling tokensGet');
        }
  
        // parse inputs
        $resourcePath = "/api/v1/tokens/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'text/json', 'application/xml', 'text/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = "application/json";
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        // header params
        
        if ($impersonation_account_key !== null) {
            $headerParams['impersonationAccountKey'] = $this->apiClient->getSerializer()->toHeaderValue($impersonation_account_key);
        }
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\GetTokenResponseModel'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\GetTokenResponseModel', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetTokenResponseModel', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), 'map[string,\Swagger\Client\Model\Object]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * tokensPost
     *
     * Stores a token for either ACH or credit card payments.
     *
     * @param \Swagger\Client\Model\PostTokenRequestModel $post_token_request_model The details of the token to be created. (required)
     * @param string $impersonation_account_key The key that allows impersonation of another account for which the token is being processed. Only specify a value if the account being impersonated is different from the account that is submitting this request. (optional, default to )
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function tokensPost($post_token_request_model, $impersonation_account_key = null)
    {
        list($response, $statusCode, $httpHeader) = $this->tokensPostWithHttpInfo ($post_token_request_model, $impersonation_account_key);
        $tokenArray = explode("/", $httpHeader["Location"]);
        return $tokenArray[count($tokenArray) - 1]; 
    }


    /**
     * tokensPostWithHttpInfo
     *
     * Stores a token for either ACH or credit card payments.
     *
     * @param \Swagger\Client\Model\PostTokenRequestModel $post_token_request_model The details of the token to be created. (required)
     * @param string $impersonation_account_key The key that allows impersonation of another account for which the token is being processed. Only specify a value if the account being impersonated is different from the account that is submitting this request. (optional, default to )
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function tokensPostWithHttpInfo($post_token_request_model, $impersonation_account_key = null)
    {
        
        // verify the required parameter 'post_token_request_model' is set
        if ($post_token_request_model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $post_token_request_model when calling tokensPost');
        }
  
        // parse inputs
        $resourcePath = "/api/v1/tokens";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'text/json', 'application/xml', 'text/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
				
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','text/json','application/xml','text/xml','application/x-www-form-urlencoded'));
  
        
        // header params
        
        if ($impersonation_account_key !== null) {
            $headerParams['impersonationAccountKey'] = $this->apiClient->getSerializer()->toHeaderValue($impersonation_account_key);
        }
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($post_token_request_model)) {
            $_tempBody = $post_token_request_model;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 400:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), 'map[string,\Swagger\Client\Model\Object]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
