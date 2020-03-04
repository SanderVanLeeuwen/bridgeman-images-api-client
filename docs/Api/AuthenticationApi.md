# Bridgeman\Client\AuthenticationApi

All URIs are relative to *https://public-api.bridgemanimages.com/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken**](AuthenticationApi.md#gettoken) | **GET** /token | 

# **getToken**
> \Bridgeman\Client\Model\InlineResponse2001 getToken($client_id, $client_secret, $grant_type)



Get access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bridgeman\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$grant_type = "grant_type_example"; // string | 

try {
    $result = $apiInstance->getToken($client_id, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **client_secret** | **string**|  |
 **grant_type** | **string**|  |

### Return type

[**\Bridgeman\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

