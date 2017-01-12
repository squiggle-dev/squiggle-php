# Squiggle\DefaultApi

All URIs are relative to *http://api.squigglesignatures.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAddress**](DefaultApi.md#addAddress) | **POST** /addresses | 
[**addFile**](DefaultApi.md#addFile) | **POST** /files | 
[**addGlobalTemplate**](DefaultApi.md#addGlobalTemplate) | **POST** /global-templates | 
[**addSnippet**](DefaultApi.md#addSnippet) | **POST** /snippets | 
[**addTemplate**](DefaultApi.md#addTemplate) | **POST** /templates | 
[**addUser**](DefaultApi.md#addUser) | **POST** /users | 
[**deleteAddress**](DefaultApi.md#deleteAddress) | **DELETE** /addresses/{id} | 
[**deleteFile**](DefaultApi.md#deleteFile) | **DELETE** /files/{id} | 
[**deleteGlobalTemplate**](DefaultApi.md#deleteGlobalTemplate) | **DELETE** /global-templates/{id} | 
[**deleteSnippet**](DefaultApi.md#deleteSnippet) | **DELETE** /snippets/{id} | 
[**deleteTemplate**](DefaultApi.md#deleteTemplate) | **DELETE** /templates/{id} | 
[**deleteUser**](DefaultApi.md#deleteUser) | **DELETE** /users/{id} | 
[**editAddress**](DefaultApi.md#editAddress) | **PATCH** /addresses/{id} | 
[**editFile**](DefaultApi.md#editFile) | **PATCH** /files/{id} | 
[**editGlobalTemplate**](DefaultApi.md#editGlobalTemplate) | **PATCH** /global-templates/{id} | 
[**editSnippet**](DefaultApi.md#editSnippet) | **PATCH** /snippets/{id} | 
[**editTemplate**](DefaultApi.md#editTemplate) | **PATCH** /templates/{id} | 
[**editUser**](DefaultApi.md#editUser) | **PATCH** /users/{id} | 
[**findAddresses**](DefaultApi.md#findAddresses) | **GET** /addresses | 
[**findFiles**](DefaultApi.md#findFiles) | **GET** /files | 
[**findGlobalTemplates**](DefaultApi.md#findGlobalTemplates) | **GET** /global-templates | 
[**findSnippets**](DefaultApi.md#findSnippets) | **GET** /snippets | 
[**findTemplates**](DefaultApi.md#findTemplates) | **GET** /templates | 
[**findUsers**](DefaultApi.md#findUsers) | **GET** /users | 
[**getAddress**](DefaultApi.md#getAddress) | **GET** /addresses/{id} | 
[**getAddressToken**](DefaultApi.md#getAddressToken) | **POST** /token/address | 
[**getFile**](DefaultApi.md#getFile) | **GET** /files/{id} | 
[**getGlobalTemplate**](DefaultApi.md#getGlobalTemplate) | **GET** /global-templates/{id} | 
[**getSnippet**](DefaultApi.md#getSnippet) | **GET** /snippets/{id} | 
[**getTemplate**](DefaultApi.md#getTemplate) | **GET** /templates/{id} | 
[**getUser**](DefaultApi.md#getUser) | **GET** /users/{id} | 
[**getUserToken**](DefaultApi.md#getUserToken) | **POST** /token/user | 


# **addAddress**
> \Squiggle\Model\Address addAddress($data)



Creates a new address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$data = new \Squiggle\Model\Address(); // \Squiggle\Model\Address | 

try {
    $result = $api_instance->addAddress($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Squiggle\Model\Address**](../Model/\Squiggle\Model\Address.md)|  |

### Return type

[**\Squiggle\Model\Address**](../Model/Address.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFile**
> \Squiggle\Model\FileObject addFile($file, $name)



Upload a new file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$file = "/path/to/file.txt"; // \SplFileObject | 
$name = "name_example"; // string | 

try {
    $result = $api_instance->addFile($file, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**|  |
 **name** | **string**|  | [optional]

### Return type

[**\Squiggle\Model\FileObject**](../Model/FileObject.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGlobalTemplate**
> \Squiggle\Model\GlobalTemplate addGlobalTemplate($data)



Creates a new global template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$data = new \Squiggle\Model\GlobalTemplate(); // \Squiggle\Model\GlobalTemplate | 

try {
    $result = $api_instance->addGlobalTemplate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addGlobalTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Squiggle\Model\GlobalTemplate**](../Model/\Squiggle\Model\GlobalTemplate.md)|  |

### Return type

[**\Squiggle\Model\GlobalTemplate**](../Model/GlobalTemplate.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSnippet**
> \Squiggle\Model\Snippet addSnippet($data)



Creates a new snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$data = new \Squiggle\Model\Snippet(); // \Squiggle\Model\Snippet | 

try {
    $result = $api_instance->addSnippet($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addSnippet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Squiggle\Model\Snippet**](../Model/\Squiggle\Model\Snippet.md)|  |

### Return type

[**\Squiggle\Model\Snippet**](../Model/Snippet.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTemplate**
> \Squiggle\Model\Template addTemplate($data)



Creates a new template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$data = new \Squiggle\Model\Template(); // \Squiggle\Model\Template | 

try {
    $result = $api_instance->addTemplate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Squiggle\Model\Template**](../Model/\Squiggle\Model\Template.md)|  |

### Return type

[**\Squiggle\Model\Template**](../Model/Template.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUser**
> \Squiggle\Model\User addUser($data)



Creates a new user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$data = new \Squiggle\Model\User(); // \Squiggle\Model\User | 

try {
    $result = $api_instance->addUser($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Squiggle\Model\User**](../Model/\Squiggle\Model\User.md)|  |

### Return type

[**\Squiggle\Model\User**](../Model/User.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddress**
> deleteAddress($id, $force)



Deletes an address with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of address to delete
$force = true; // bool | Disables soft-delete when true, completely removing the row (use with caution!)

try {
    $api_instance->deleteAddress($id, $force);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of address to delete |
 **force** | **bool**| Disables soft-delete when true, completely removing the row (use with caution!) | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFile**
> deleteFile($id)



Deletes a file with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of file to delete

try {
    $api_instance->deleteFile($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file to delete |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGlobalTemplate**
> deleteGlobalTemplate($id, $force)



Deletes a global template with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of global template to delete
$force = true; // bool | Disables soft-delete when true, completely removing the row (use with caution!)

try {
    $api_instance->deleteGlobalTemplate($id, $force);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteGlobalTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of global template to delete |
 **force** | **bool**| Disables soft-delete when true, completely removing the row (use with caution!) | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSnippet**
> deleteSnippet($id, $force)



Deletes a snippet with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of snippet to delete
$force = true; // bool | Disables soft-delete when true, completely removing the row (use with caution!)

try {
    $api_instance->deleteSnippet($id, $force);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSnippet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of snippet to delete |
 **force** | **bool**| Disables soft-delete when true, completely removing the row (use with caution!) | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplate**
> deleteTemplate($id, $force)



Deletes a template with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of template to delete
$force = true; // bool | Disables soft-delete when true, completely removing the row (use with caution!)

try {
    $api_instance->deleteTemplate($id, $force);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of template to delete |
 **force** | **bool**| Disables soft-delete when true, completely removing the row (use with caution!) | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($id, $force)



Deletes a user with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of user to delete
$force = true; // bool | Disables soft-delete when true, completely removing the row (use with caution!)

try {
    $api_instance->deleteUser($id, $force);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of user to delete |
 **force** | **bool**| Disables soft-delete when true, completely removing the row (use with caution!) | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editAddress**
> \Squiggle\Model\Address editAddress($id, $data)



Updates an existing address with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of address to update
$data = new \Squiggle\Model\Address(); // \Squiggle\Model\Address | 

try {
    $result = $api_instance->editAddress($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of address to update |
 **data** | [**\Squiggle\Model\Address**](../Model/\Squiggle\Model\Address.md)|  |

### Return type

[**\Squiggle\Model\Address**](../Model/Address.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editFile**
> \Squiggle\Model\FileObject editFile($id, $file, $name)



Updates an existing file with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of file to update
$file = "/path/to/file.txt"; // \SplFileObject | 
$name = "name_example"; // string | 

try {
    $result = $api_instance->editFile($id, $file, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file to update |
 **file** | **\SplFileObject**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Squiggle\Model\FileObject**](../Model/FileObject.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editGlobalTemplate**
> \Squiggle\Model\GlobalTemplate editGlobalTemplate($id, $data)



Updates an existing global template with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of global template to update
$data = new \Squiggle\Model\GlobalTemplate(); // \Squiggle\Model\GlobalTemplate | 

try {
    $result = $api_instance->editGlobalTemplate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editGlobalTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of global template to update |
 **data** | [**\Squiggle\Model\GlobalTemplate**](../Model/\Squiggle\Model\GlobalTemplate.md)|  |

### Return type

[**\Squiggle\Model\GlobalTemplate**](../Model/GlobalTemplate.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editSnippet**
> \Squiggle\Model\Snippet editSnippet($id, $data)



Updates an existing snippet with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of snippet to update
$data = new \Squiggle\Model\Snippet(); // \Squiggle\Model\Snippet | 

try {
    $result = $api_instance->editSnippet($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editSnippet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of snippet to update |
 **data** | [**\Squiggle\Model\Snippet**](../Model/\Squiggle\Model\Snippet.md)|  |

### Return type

[**\Squiggle\Model\Snippet**](../Model/Snippet.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTemplate**
> \Squiggle\Model\Template editTemplate($id, $data)



Updates an existing template with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of template to update
$data = new \Squiggle\Model\Template(); // \Squiggle\Model\Template | 

try {
    $result = $api_instance->editTemplate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of template to update |
 **data** | [**\Squiggle\Model\Template**](../Model/\Squiggle\Model\Template.md)|  |

### Return type

[**\Squiggle\Model\Template**](../Model/Template.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editUser**
> \Squiggle\Model\User editUser($id, $data)



Updates an existing user with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of user to update
$data = new \Squiggle\Model\User(); // \Squiggle\Model\User | 

try {
    $result = $api_instance->editUser($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of user to update |
 **data** | [**\Squiggle\Model\User**](../Model/\Squiggle\Model\User.md)|  |

### Return type

[**\Squiggle\Model\User**](../Model/User.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAddresses**
> \Squiggle\Model\Address[] findAddresses($sort, $offset, $limit)



Gets addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$sort = "sort_example"; // string | A comma-separated list of fields to sort by
$offset = 56; // int | The start offset of the result set
$limit = 56; // int | Max records to return

try {
    $result = $api_instance->findAddresses($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A comma-separated list of fields to sort by | [optional]
 **offset** | **int**| The start offset of the result set | [optional]
 **limit** | **int**| Max records to return | [optional]

### Return type

[**\Squiggle\Model\Address[]**](../Model/Address.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findFiles**
> \Squiggle\Model\FileObject[] findFiles($sort, $offset, $limit)



Gets files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$sort = "sort_example"; // string | A comma-separated list of fields to sort by
$offset = 56; // int | The start offset of the result set
$limit = 56; // int | Max records to return

try {
    $result = $api_instance->findFiles($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A comma-separated list of fields to sort by | [optional]
 **offset** | **int**| The start offset of the result set | [optional]
 **limit** | **int**| Max records to return | [optional]

### Return type

[**\Squiggle\Model\FileObject[]**](../Model/FileObject.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findGlobalTemplates**
> \Squiggle\Model\GlobalTemplate[] findGlobalTemplates($sort, $offset, $limit)



Gets global templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$sort = "sort_example"; // string | A comma-separated list of fields to sort by
$offset = 56; // int | The start offset of the result set
$limit = 56; // int | Max records to return

try {
    $result = $api_instance->findGlobalTemplates($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findGlobalTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A comma-separated list of fields to sort by | [optional]
 **offset** | **int**| The start offset of the result set | [optional]
 **limit** | **int**| Max records to return | [optional]

### Return type

[**\Squiggle\Model\GlobalTemplate[]**](../Model/GlobalTemplate.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSnippets**
> \Squiggle\Model\Snippet[] findSnippets($sort, $offset, $limit)



Gets snippets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$sort = "sort_example"; // string | A comma-separated list of fields to sort by
$offset = 56; // int | The start offset of the result set
$limit = 56; // int | Max records to return

try {
    $result = $api_instance->findSnippets($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findSnippets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A comma-separated list of fields to sort by | [optional]
 **offset** | **int**| The start offset of the result set | [optional]
 **limit** | **int**| Max records to return | [optional]

### Return type

[**\Squiggle\Model\Snippet[]**](../Model/Snippet.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTemplates**
> \Squiggle\Model\Template[] findTemplates($sort, $offset, $limit)



Gets templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$sort = "sort_example"; // string | A comma-separated list of fields to sort by
$offset = 56; // int | The start offset of the result set
$limit = 56; // int | Max records to return

try {
    $result = $api_instance->findTemplates($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A comma-separated list of fields to sort by | [optional]
 **offset** | **int**| The start offset of the result set | [optional]
 **limit** | **int**| Max records to return | [optional]

### Return type

[**\Squiggle\Model\Template[]**](../Model/Template.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findUsers**
> \Squiggle\Model\User[] findUsers($sort, $offset, $limit)



Gets users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$sort = "sort_example"; // string | A comma-separated list of fields to sort by
$offset = 56; // int | The start offset of the result set
$limit = 56; // int | Max records to return

try {
    $result = $api_instance->findUsers($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| A comma-separated list of fields to sort by | [optional]
 **offset** | **int**| The start offset of the result set | [optional]
 **limit** | **int**| Max records to return | [optional]

### Return type

[**\Squiggle\Model\User[]**](../Model/User.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddress**
> \Squiggle\Model\Address getAddress($id)



Gets an address with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of address to get

try {
    $result = $api_instance->getAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of address to get |

### Return type

[**\Squiggle\Model\Address**](../Model/Address.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressToken**
> \Squiggle\Model\JSONWebToken getAddressToken($data)



Request JWT for Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Squiggle\Api\DefaultApi();
$data = new \Squiggle\Model\LoginDetails(); // \Squiggle\Model\LoginDetails | 

try {
    $result = $api_instance->getAddressToken($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAddressToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Squiggle\Model\LoginDetails**](../Model/\Squiggle\Model\LoginDetails.md)|  |

### Return type

[**\Squiggle\Model\JSONWebToken**](../Model/JSONWebToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFile**
> \Squiggle\Model\FileObject getFile($id)



Gets a file with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of file to get

try {
    $result = $api_instance->getFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file to get |

### Return type

[**\Squiggle\Model\FileObject**](../Model/FileObject.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGlobalTemplate**
> \Squiggle\Model\GlobalTemplate getGlobalTemplate($id)



Gets a global template with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of global template to get

try {
    $result = $api_instance->getGlobalTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGlobalTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of global template to get |

### Return type

[**\Squiggle\Model\GlobalTemplate**](../Model/GlobalTemplate.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippet**
> \Squiggle\Model\Snippet getSnippet($id)



Gets a snippet with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of snippet to get

try {
    $result = $api_instance->getSnippet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSnippet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of snippet to get |

### Return type

[**\Squiggle\Model\Snippet**](../Model/Snippet.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \Squiggle\Model\Template getTemplate($id)



Gets a template with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of template to get

try {
    $result = $api_instance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of template to get |

### Return type

[**\Squiggle\Model\Template**](../Model/Template.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Squiggle\Model\User getUser($id)



Gets a user with the specified ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Squiggle\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Squiggle\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Squiggle\Api\DefaultApi();
$id = 789; // int | ID of user to get

try {
    $result = $api_instance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of user to get |

### Return type

[**\Squiggle\Model\User**](../Model/User.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserToken**
> \Squiggle\Model\JSONWebToken getUserToken($data)



Request JWT for User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Squiggle\Api\DefaultApi();
$data = new \Squiggle\Model\LoginDetails(); // \Squiggle\Model\LoginDetails | 

try {
    $result = $api_instance->getUserToken($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Squiggle\Model\LoginDetails**](../Model/\Squiggle\Model\LoginDetails.md)|  |

### Return type

[**\Squiggle\Model\JSONWebToken**](../Model/JSONWebToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

