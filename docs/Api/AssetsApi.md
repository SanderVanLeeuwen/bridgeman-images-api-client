# Bridgeman\Client\AssetsApi

All URIs are relative to *https://public-api.bridgemanimages.com/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetsBasic**](AssetsApi.md#getassetsbasic) | **GET** /assets/basic | 
[**getAssetsLimitedProfile**](AssetsApi.md#getassetslimitedprofile) | **GET** /assets/limited_profile | 
[**getAssetsProfile**](AssetsApi.md#getassetsprofile) | **GET** /assets/profile | 
[**getAssetsRemoved**](AssetsApi.md#getassetsremoved) | **GET** /assets-removed | 

# **getAssetsBasic**
> \Bridgeman\Client\Model\InlineResponse200 getAssetsBasic($offset)



Returns an array of assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Bridgeman\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bridgeman\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offsets the list returned to this amount. Default 0.

try {
    $result = $apiInstance->getAssetsBasic($offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetsBasic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offsets the list returned to this amount. Default 0. | [optional]

### Return type

[**\Bridgeman\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetsLimitedProfile**
> \Bridgeman\Client\Model\InlineResponse2002 getAssetsLimitedProfile($offset)



Returns an array of assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Bridgeman\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bridgeman\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offsets the list returned to this amount. Default 0.

try {
    $result = $apiInstance->getAssetsLimitedProfile($offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetsLimitedProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offsets the list returned to this amount. Default 0. | [optional]

### Return type

[**\Bridgeman\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetsProfile**
> \Bridgeman\Client\Model\InlineResponse2001 getAssetsProfile($offset)



Returns an array of assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Bridgeman\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bridgeman\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offsets the list returned to this amount. Default 0.

try {
    $result = $apiInstance->getAssetsProfile($offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetsProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offsets the list returned to this amount. Default 0. | [optional]

### Return type

[**\Bridgeman\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetsRemoved**
> \Bridgeman\Client\Model\InlineResponse2003 getAssetsRemoved($date_start, $date_end)



Return an array of assets that are removed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Bridgeman\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bridgeman\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_start = new \DateTime("2013-10-20"); // \DateTime | start date
$date_end = new \DateTime("2013-10-20"); // \DateTime | end date

try {
    $result = $apiInstance->getAssetsRemoved($date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetsRemoved: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_start** | **\DateTime**| start date |
 **date_end** | **\DateTime**| end date | [optional]

### Return type

[**\Bridgeman\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

