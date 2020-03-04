# Bridgeman\Client\AssetApi

All URIs are relative to *https://public-api.bridgemanimages.com/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImage**](AssetApi.md#getimage) | **GET** /asset/{id}/image/{size} | 

# **getImage**
> string getImage($id, $size)



Returns an image (JPG format)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Bridgeman\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bridgeman\Client\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Asset ID
$size = "size_example"; // string | Size of the image to be returned: * high-res * medium-res * low-res * thumbnail

try {
    $result = $apiInstance->getImage($id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Asset ID |
 **size** | **string**| Size of the image to be returned: * high-res * medium-res * low-res * thumbnail |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/jpeg

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

