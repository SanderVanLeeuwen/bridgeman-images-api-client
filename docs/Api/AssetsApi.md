# Bridgeman\Client\AssetsApi

All URIs are relative to *https://public-api.bridgemanimages.com/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetsBasic**](AssetsApi.md#getassetsbasic) | **GET** /assets/basic | 
[**getAssetsLimitedProfile**](AssetsApi.md#getassetslimitedprofile) | **GET** /assets/limited_profile | 
[**getAssetsProfile**](AssetsApi.md#getassetsprofile) | **GET** /assets/profile | 
[**getAssetsRemoved**](AssetsApi.md#getassetsremoved) | **GET** /assets-removed | 

# **getAssetsBasic**
> \Bridgeman\Client\Model\InlineResponse200 getAssetsBasic($offset, $limit, $sort, $sort_order, $query, $asset_category_id, $asset_colour_type, $asset_copyright_status, $asset_created_century_from, $asset_created_century_until, $asset_created_year_from, $asset_created_year_until, $asset_description, $asset_height_min, $asset_height_max, $asset_id, $asset_id_from, $asset_id_to, $asset_image_of, $asset_keywords, $asset_location, $asset_medium, $asset_orientation, $asset_rgb_red_value, $asset_rgb_green_value, $asset_rgb_blue_value, $asset_rgb_profile, $asset_title, $asset_type, $asset_width_min, $asset_width_max, $copyright_handler_id, $copyright_holder_id, $creator_id, $region, $supplier_id)



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
$limit = 56; // int | Limits the list returned to this amount. Default 10.
$sort = "sort_example"; // string | Order the results using following options: * default * asset_hr_size * asset_id * asset_in_copyright * asset_medium * creator_name * latest * location_name * most_popular * most_relevant * photographer_name * supplier_prefix
$sort_order = "sort_order_example"; // string | Defines an order for sorting: ASC or DESC.
$query = "query_example"; // string | Filter the list by given query, e.g.: 'cats dogs'
$asset_category_id = 56; // int | 
$asset_colour_type = "asset_colour_type_example"; // string | * bw = Black and White * col = Coloured
$asset_copyright_status = 56; // int | * 0 = OUT of Copyright * 1 = IN Copyright * 2 = Unknown Copyright Status
$asset_created_century_from = 56; // int | 
$asset_created_century_until = 56; // int | 
$asset_created_year_from = 56; // int | 
$asset_created_year_until = 56; // int | 
$asset_description = "asset_description_example"; // string | 
$asset_height_min = 56; // int | 
$asset_height_max = 56; // int | 
$asset_id = 56; // int | 
$asset_id_from = 56; // int | starting asset id (inclusive)
$asset_id_to = 56; // int | ending asset id (inclusive)
$asset_image_of = "asset_image_of_example"; // string | * ill = Illustration * obj = Object * pho = Photo
$asset_keywords = "asset_keywords_example"; // string | 
$asset_location = "asset_location_example"; // string | 
$asset_medium = "asset_medium_example"; // string | 
$asset_orientation = "asset_orientation_example"; // string | * h = Horizontal * v = Vertical * s = Square
$asset_rgb_red_value = 56; // int | 
$asset_rgb_green_value = 56; // int | 
$asset_rgb_blue_value = 56; // int | 
$asset_rgb_profile = "asset_rgb_profile_example"; // string | 
$asset_title = "asset_title_example"; // string | Example: 'rainy%20day'
$asset_type = 56; // int | * 1 = Image * 2 = Footage
$asset_width_min = 56; // int | 
$asset_width_max = 56; // int | 
$copyright_handler_id = 56; // int | 
$copyright_holder_id = 56; // int | 
$creator_id = 56; // int | 
$region = "region_example"; // string | 3 letters country code
$supplier_id = 56; // int | 

try {
    $result = $apiInstance->getAssetsBasic($offset, $limit, $sort, $sort_order, $query, $asset_category_id, $asset_colour_type, $asset_copyright_status, $asset_created_century_from, $asset_created_century_until, $asset_created_year_from, $asset_created_year_until, $asset_description, $asset_height_min, $asset_height_max, $asset_id, $asset_id_from, $asset_id_to, $asset_image_of, $asset_keywords, $asset_location, $asset_medium, $asset_orientation, $asset_rgb_red_value, $asset_rgb_green_value, $asset_rgb_blue_value, $asset_rgb_profile, $asset_title, $asset_type, $asset_width_min, $asset_width_max, $copyright_handler_id, $copyright_holder_id, $creator_id, $region, $supplier_id);
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
 **limit** | **int**| Limits the list returned to this amount. Default 10. | [optional]
 **sort** | **string**| Order the results using following options: * default * asset_hr_size * asset_id * asset_in_copyright * asset_medium * creator_name * latest * location_name * most_popular * most_relevant * photographer_name * supplier_prefix | [optional]
 **sort_order** | **string**| Defines an order for sorting: ASC or DESC. | [optional]
 **query** | **string**| Filter the list by given query, e.g.: &#x27;cats dogs&#x27; | [optional]
 **asset_category_id** | **int**|  | [optional]
 **asset_colour_type** | **string**| * bw &#x3D; Black and White * col &#x3D; Coloured | [optional]
 **asset_copyright_status** | **int**| * 0 &#x3D; OUT of Copyright * 1 &#x3D; IN Copyright * 2 &#x3D; Unknown Copyright Status | [optional]
 **asset_created_century_from** | **int**|  | [optional]
 **asset_created_century_until** | **int**|  | [optional]
 **asset_created_year_from** | **int**|  | [optional]
 **asset_created_year_until** | **int**|  | [optional]
 **asset_description** | **string**|  | [optional]
 **asset_height_min** | **int**|  | [optional]
 **asset_height_max** | **int**|  | [optional]
 **asset_id** | **int**|  | [optional]
 **asset_id_from** | **int**| starting asset id (inclusive) | [optional]
 **asset_id_to** | **int**| ending asset id (inclusive) | [optional]
 **asset_image_of** | **string**| * ill &#x3D; Illustration * obj &#x3D; Object * pho &#x3D; Photo | [optional]
 **asset_keywords** | **string**|  | [optional]
 **asset_location** | **string**|  | [optional]
 **asset_medium** | **string**|  | [optional]
 **asset_orientation** | **string**| * h &#x3D; Horizontal * v &#x3D; Vertical * s &#x3D; Square | [optional]
 **asset_rgb_red_value** | **int**|  | [optional]
 **asset_rgb_green_value** | **int**|  | [optional]
 **asset_rgb_blue_value** | **int**|  | [optional]
 **asset_rgb_profile** | **string**|  | [optional]
 **asset_title** | **string**| Example: &#x27;rainy%20day&#x27; | [optional]
 **asset_type** | **int**| * 1 &#x3D; Image * 2 &#x3D; Footage | [optional]
 **asset_width_min** | **int**|  | [optional]
 **asset_width_max** | **int**|  | [optional]
 **copyright_handler_id** | **int**|  | [optional]
 **copyright_holder_id** | **int**|  | [optional]
 **creator_id** | **int**|  | [optional]
 **region** | **string**| 3 letters country code | [optional]
 **supplier_id** | **int**|  | [optional]

### Return type

[**\Bridgeman\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetsLimitedProfile**
> \Bridgeman\Client\Model\InlineResponse2002 getAssetsLimitedProfile($offset, $limit, $sort, $sort_order, $query, $asset_category_id, $asset_colour_type, $asset_copyright_status, $asset_created_century_from, $asset_created_century_until, $asset_created_year_from, $asset_created_year_until, $asset_description, $asset_height_min, $asset_height_max, $asset_id, $asset_id_from, $asset_id_to, $asset_image_of, $asset_keywords, $asset_location, $asset_medium, $asset_orientation, $asset_rgb_red_value, $asset_rgb_green_value, $asset_rgb_blue_value, $asset_rgb_profile, $asset_title, $asset_type, $asset_width_min, $asset_width_max, $copyright_handler_id, $copyright_holder_id, $creator_id, $region, $supplier_id)



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
$limit = 56; // int | Limits the list returned to this amount. Default 10.
$sort = "sort_example"; // string | Order the results using following options: * default * asset_hr_size * asset_id * asset_in_copyright * asset_medium * creator_name * latest * location_name * most_popular * most_relevant * photographer_name * supplier_prefix
$sort_order = "sort_order_example"; // string | Defines an order for sorting: ASC or DESC.
$query = "query_example"; // string | Filter the list by given query, e.g.: 'cats dogs'
$asset_category_id = 56; // int | 
$asset_colour_type = "asset_colour_type_example"; // string | * bw = Black and White * col = Coloured
$asset_copyright_status = 56; // int | * 0 = OUT of Copyright * 1 = IN Copyright * 2 = Unknown Copyright Status
$asset_created_century_from = 56; // int | 
$asset_created_century_until = 56; // int | 
$asset_created_year_from = 56; // int | 
$asset_created_year_until = 56; // int | 
$asset_description = "asset_description_example"; // string | 
$asset_height_min = 56; // int | 
$asset_height_max = 56; // int | 
$asset_id = 56; // int | 
$asset_id_from = 56; // int | starting asset id (inclusive)
$asset_id_to = 56; // int | ending asset id (inclusive)
$asset_image_of = "asset_image_of_example"; // string | * ill = Illustration * obj = Object * pho = Photo
$asset_keywords = "asset_keywords_example"; // string | 
$asset_location = "asset_location_example"; // string | 
$asset_medium = "asset_medium_example"; // string | 
$asset_orientation = "asset_orientation_example"; // string | * h = Horizontal * v = Vertical * s = Square
$asset_rgb_red_value = 56; // int | 
$asset_rgb_green_value = 56; // int | 
$asset_rgb_blue_value = 56; // int | 
$asset_rgb_profile = "asset_rgb_profile_example"; // string | 
$asset_title = "asset_title_example"; // string | Example: 'rainy%20day'
$asset_type = 56; // int | * 1 = Image * 2 = Footage
$asset_width_min = 56; // int | 
$asset_width_max = 56; // int | 
$copyright_handler_id = 56; // int | 
$copyright_holder_id = 56; // int | 
$creator_id = 56; // int | 
$region = "region_example"; // string | 3 letters country code
$supplier_id = 56; // int | 

try {
    $result = $apiInstance->getAssetsLimitedProfile($offset, $limit, $sort, $sort_order, $query, $asset_category_id, $asset_colour_type, $asset_copyright_status, $asset_created_century_from, $asset_created_century_until, $asset_created_year_from, $asset_created_year_until, $asset_description, $asset_height_min, $asset_height_max, $asset_id, $asset_id_from, $asset_id_to, $asset_image_of, $asset_keywords, $asset_location, $asset_medium, $asset_orientation, $asset_rgb_red_value, $asset_rgb_green_value, $asset_rgb_blue_value, $asset_rgb_profile, $asset_title, $asset_type, $asset_width_min, $asset_width_max, $copyright_handler_id, $copyright_holder_id, $creator_id, $region, $supplier_id);
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
 **limit** | **int**| Limits the list returned to this amount. Default 10. | [optional]
 **sort** | **string**| Order the results using following options: * default * asset_hr_size * asset_id * asset_in_copyright * asset_medium * creator_name * latest * location_name * most_popular * most_relevant * photographer_name * supplier_prefix | [optional]
 **sort_order** | **string**| Defines an order for sorting: ASC or DESC. | [optional]
 **query** | **string**| Filter the list by given query, e.g.: &#x27;cats dogs&#x27; | [optional]
 **asset_category_id** | **int**|  | [optional]
 **asset_colour_type** | **string**| * bw &#x3D; Black and White * col &#x3D; Coloured | [optional]
 **asset_copyright_status** | **int**| * 0 &#x3D; OUT of Copyright * 1 &#x3D; IN Copyright * 2 &#x3D; Unknown Copyright Status | [optional]
 **asset_created_century_from** | **int**|  | [optional]
 **asset_created_century_until** | **int**|  | [optional]
 **asset_created_year_from** | **int**|  | [optional]
 **asset_created_year_until** | **int**|  | [optional]
 **asset_description** | **string**|  | [optional]
 **asset_height_min** | **int**|  | [optional]
 **asset_height_max** | **int**|  | [optional]
 **asset_id** | **int**|  | [optional]
 **asset_id_from** | **int**| starting asset id (inclusive) | [optional]
 **asset_id_to** | **int**| ending asset id (inclusive) | [optional]
 **asset_image_of** | **string**| * ill &#x3D; Illustration * obj &#x3D; Object * pho &#x3D; Photo | [optional]
 **asset_keywords** | **string**|  | [optional]
 **asset_location** | **string**|  | [optional]
 **asset_medium** | **string**|  | [optional]
 **asset_orientation** | **string**| * h &#x3D; Horizontal * v &#x3D; Vertical * s &#x3D; Square | [optional]
 **asset_rgb_red_value** | **int**|  | [optional]
 **asset_rgb_green_value** | **int**|  | [optional]
 **asset_rgb_blue_value** | **int**|  | [optional]
 **asset_rgb_profile** | **string**|  | [optional]
 **asset_title** | **string**| Example: &#x27;rainy%20day&#x27; | [optional]
 **asset_type** | **int**| * 1 &#x3D; Image * 2 &#x3D; Footage | [optional]
 **asset_width_min** | **int**|  | [optional]
 **asset_width_max** | **int**|  | [optional]
 **copyright_handler_id** | **int**|  | [optional]
 **copyright_holder_id** | **int**|  | [optional]
 **creator_id** | **int**|  | [optional]
 **region** | **string**| 3 letters country code | [optional]
 **supplier_id** | **int**|  | [optional]

### Return type

[**\Bridgeman\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetsProfile**
> \Bridgeman\Client\Model\InlineResponse2001 getAssetsProfile($offset, $limit, $sort, $sort_order, $query, $asset_category_id, $asset_colour_type, $asset_copyright_status, $asset_created_century_from, $asset_created_century_until, $asset_created_year_from, $asset_created_year_until, $asset_description, $asset_height_min, $asset_height_max, $asset_id, $asset_id_from, $asset_id_to, $asset_image_of, $asset_keywords, $asset_location, $asset_medium, $asset_orientation, $asset_rgb_red_value, $asset_rgb_green_value, $asset_rgb_blue_value, $asset_rgb_profile, $asset_title, $asset_type, $asset_width_min, $asset_width_max, $copyright_handler_id, $copyright_holder_id, $creator_id, $region, $supplier_id)



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
$limit = 56; // int | Limits the list returned to this amount. Default 10.
$sort = "sort_example"; // string | Order the results using following options: * default * asset_hr_size * asset_id * asset_in_copyright * asset_medium * creator_name * latest * location_name * most_popular * most_relevant * photographer_name * supplier_prefix
$sort_order = "sort_order_example"; // string | Defines an order for sorting: ASC or DESC.
$query = "query_example"; // string | Filter the list by given query, e.g.: 'cats dogs'
$asset_category_id = 56; // int | 
$asset_colour_type = "asset_colour_type_example"; // string | * bw = Black and White * col = Coloured
$asset_copyright_status = 56; // int | * 0 = OUT of Copyright * 1 = IN Copyright * 2 = Unknown Copyright Status
$asset_created_century_from = 56; // int | 
$asset_created_century_until = 56; // int | 
$asset_created_year_from = 56; // int | 
$asset_created_year_until = 56; // int | 
$asset_description = "asset_description_example"; // string | 
$asset_height_min = 56; // int | 
$asset_height_max = 56; // int | 
$asset_id = 56; // int | 
$asset_id_from = 56; // int | starting asset id (inclusive)
$asset_id_to = 56; // int | ending asset id (inclusive)
$asset_image_of = "asset_image_of_example"; // string | * ill = Illustration * obj = Object * pho = Photo
$asset_keywords = "asset_keywords_example"; // string | 
$asset_location = "asset_location_example"; // string | 
$asset_medium = "asset_medium_example"; // string | 
$asset_orientation = "asset_orientation_example"; // string | * h = Horizontal * v = Vertical * s = Square
$asset_rgb_red_value = 56; // int | 
$asset_rgb_green_value = 56; // int | 
$asset_rgb_blue_value = 56; // int | 
$asset_rgb_profile = "asset_rgb_profile_example"; // string | 
$asset_title = "asset_title_example"; // string | Example: 'rainy%20day'
$asset_type = 56; // int | * 1 = Image * 2 = Footage
$asset_width_min = 56; // int | 
$asset_width_max = 56; // int | 
$copyright_handler_id = 56; // int | 
$copyright_holder_id = 56; // int | 
$creator_id = 56; // int | 
$region = "region_example"; // string | 3 letters country code
$supplier_id = 56; // int | 

try {
    $result = $apiInstance->getAssetsProfile($offset, $limit, $sort, $sort_order, $query, $asset_category_id, $asset_colour_type, $asset_copyright_status, $asset_created_century_from, $asset_created_century_until, $asset_created_year_from, $asset_created_year_until, $asset_description, $asset_height_min, $asset_height_max, $asset_id, $asset_id_from, $asset_id_to, $asset_image_of, $asset_keywords, $asset_location, $asset_medium, $asset_orientation, $asset_rgb_red_value, $asset_rgb_green_value, $asset_rgb_blue_value, $asset_rgb_profile, $asset_title, $asset_type, $asset_width_min, $asset_width_max, $copyright_handler_id, $copyright_holder_id, $creator_id, $region, $supplier_id);
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
 **limit** | **int**| Limits the list returned to this amount. Default 10. | [optional]
 **sort** | **string**| Order the results using following options: * default * asset_hr_size * asset_id * asset_in_copyright * asset_medium * creator_name * latest * location_name * most_popular * most_relevant * photographer_name * supplier_prefix | [optional]
 **sort_order** | **string**| Defines an order for sorting: ASC or DESC. | [optional]
 **query** | **string**| Filter the list by given query, e.g.: &#x27;cats dogs&#x27; | [optional]
 **asset_category_id** | **int**|  | [optional]
 **asset_colour_type** | **string**| * bw &#x3D; Black and White * col &#x3D; Coloured | [optional]
 **asset_copyright_status** | **int**| * 0 &#x3D; OUT of Copyright * 1 &#x3D; IN Copyright * 2 &#x3D; Unknown Copyright Status | [optional]
 **asset_created_century_from** | **int**|  | [optional]
 **asset_created_century_until** | **int**|  | [optional]
 **asset_created_year_from** | **int**|  | [optional]
 **asset_created_year_until** | **int**|  | [optional]
 **asset_description** | **string**|  | [optional]
 **asset_height_min** | **int**|  | [optional]
 **asset_height_max** | **int**|  | [optional]
 **asset_id** | **int**|  | [optional]
 **asset_id_from** | **int**| starting asset id (inclusive) | [optional]
 **asset_id_to** | **int**| ending asset id (inclusive) | [optional]
 **asset_image_of** | **string**| * ill &#x3D; Illustration * obj &#x3D; Object * pho &#x3D; Photo | [optional]
 **asset_keywords** | **string**|  | [optional]
 **asset_location** | **string**|  | [optional]
 **asset_medium** | **string**|  | [optional]
 **asset_orientation** | **string**| * h &#x3D; Horizontal * v &#x3D; Vertical * s &#x3D; Square | [optional]
 **asset_rgb_red_value** | **int**|  | [optional]
 **asset_rgb_green_value** | **int**|  | [optional]
 **asset_rgb_blue_value** | **int**|  | [optional]
 **asset_rgb_profile** | **string**|  | [optional]
 **asset_title** | **string**| Example: &#x27;rainy%20day&#x27; | [optional]
 **asset_type** | **int**| * 1 &#x3D; Image * 2 &#x3D; Footage | [optional]
 **asset_width_min** | **int**|  | [optional]
 **asset_width_max** | **int**|  | [optional]
 **copyright_handler_id** | **int**|  | [optional]
 **copyright_holder_id** | **int**|  | [optional]
 **creator_id** | **int**|  | [optional]
 **region** | **string**| 3 letters country code | [optional]
 **supplier_id** | **int**|  | [optional]

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

