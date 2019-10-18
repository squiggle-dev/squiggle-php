# squiggle-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1
- Package version: 0.0.27
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/squiggle-dev/squiggle-php.git"
    }
  ],
  "require": {
    "squiggle-dev/squiggle-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/squiggle-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.squigglesignatures.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**addAddress**](docs/Api/DefaultApi.md#addaddress) | **POST** /addresses | 
*DefaultApi* | [**addAddressBatch**](docs/Api/DefaultApi.md#addaddressbatch) | **POST** /addresses/batch | 
*DefaultApi* | [**addClient**](docs/Api/DefaultApi.md#addclient) | **POST** /clients | 
*DefaultApi* | [**addFile**](docs/Api/DefaultApi.md#addfile) | **POST** /files | 
*DefaultApi* | [**addGlobalTemplate**](docs/Api/DefaultApi.md#addglobaltemplate) | **POST** /global-templates | 
*DefaultApi* | [**addSnippet**](docs/Api/DefaultApi.md#addsnippet) | **POST** /snippets | 
*DefaultApi* | [**addTemplate**](docs/Api/DefaultApi.md#addtemplate) | **POST** /templates | 
*DefaultApi* | [**addUser**](docs/Api/DefaultApi.md#adduser) | **POST** /users | 
*DefaultApi* | [**deleteAddress**](docs/Api/DefaultApi.md#deleteaddress) | **DELETE** /addresses/{id} | 
*DefaultApi* | [**deleteFile**](docs/Api/DefaultApi.md#deletefile) | **DELETE** /files/{id} | 
*DefaultApi* | [**deleteGlobalTemplate**](docs/Api/DefaultApi.md#deleteglobaltemplate) | **DELETE** /global-templates/{id} | 
*DefaultApi* | [**deleteSnippet**](docs/Api/DefaultApi.md#deletesnippet) | **DELETE** /snippets/{id} | 
*DefaultApi* | [**deleteTemplate**](docs/Api/DefaultApi.md#deletetemplate) | **DELETE** /templates/{id} | 
*DefaultApi* | [**deleteUser**](docs/Api/DefaultApi.md#deleteuser) | **DELETE** /users/{id} | 
*DefaultApi* | [**editAddress**](docs/Api/DefaultApi.md#editaddress) | **PATCH** /addresses/{id} | 
*DefaultApi* | [**editFile**](docs/Api/DefaultApi.md#editfile) | **PATCH** /files/{id} | 
*DefaultApi* | [**editGlobalTemplate**](docs/Api/DefaultApi.md#editglobaltemplate) | **PATCH** /global-templates/{id} | 
*DefaultApi* | [**editSnippet**](docs/Api/DefaultApi.md#editsnippet) | **PATCH** /snippets/{id} | 
*DefaultApi* | [**editTemplate**](docs/Api/DefaultApi.md#edittemplate) | **PATCH** /templates/{id} | 
*DefaultApi* | [**editUser**](docs/Api/DefaultApi.md#edituser) | **PATCH** /users/{id} | 
*DefaultApi* | [**findAddresses**](docs/Api/DefaultApi.md#findaddresses) | **GET** /addresses | 
*DefaultApi* | [**findFiles**](docs/Api/DefaultApi.md#findfiles) | **GET** /files | 
*DefaultApi* | [**findGlobalTemplates**](docs/Api/DefaultApi.md#findglobaltemplates) | **GET** /global-templates | 
*DefaultApi* | [**findSignatures**](docs/Api/DefaultApi.md#findsignatures) | **GET** /signatures | 
*DefaultApi* | [**findSnippets**](docs/Api/DefaultApi.md#findsnippets) | **GET** /snippets | 
*DefaultApi* | [**findTemplates**](docs/Api/DefaultApi.md#findtemplates) | **GET** /templates | 
*DefaultApi* | [**findUsers**](docs/Api/DefaultApi.md#findusers) | **GET** /users | 
*DefaultApi* | [**generateAddressAuthCode**](docs/Api/DefaultApi.md#generateaddressauthcode) | **POST** /addresses/generate-auth-code | 
*DefaultApi* | [**generateAddressAuthCodeById**](docs/Api/DefaultApi.md#generateaddressauthcodebyid) | **POST** /addresses/generate-auth-code/{id} | 
*DefaultApi* | [**getAddress**](docs/Api/DefaultApi.md#getaddress) | **GET** /addresses/{id} | 
*DefaultApi* | [**getAddressToken**](docs/Api/DefaultApi.md#getaddresstoken) | **POST** /token/address | 
*DefaultApi* | [**getFile**](docs/Api/DefaultApi.md#getfile) | **GET** /files/{id} | 
*DefaultApi* | [**getGlobalTemplate**](docs/Api/DefaultApi.md#getglobaltemplate) | **GET** /global-templates/{id} | 
*DefaultApi* | [**getImage**](docs/Api/DefaultApi.md#getimage) | **GET** /image/{id} | 
*DefaultApi* | [**getSignature**](docs/Api/DefaultApi.md#getsignature) | **GET** /signatures/{id} | 
*DefaultApi* | [**getSnippet**](docs/Api/DefaultApi.md#getsnippet) | **GET** /snippets/{id} | 
*DefaultApi* | [**getTemplate**](docs/Api/DefaultApi.md#gettemplate) | **GET** /templates/{id} | 
*DefaultApi* | [**getUser**](docs/Api/DefaultApi.md#getuser) | **GET** /users/{id} | 
*DefaultApi* | [**getUserToken**](docs/Api/DefaultApi.md#getusertoken) | **POST** /token/user | 
*DefaultApi* | [**render**](docs/Api/DefaultApi.md#render) | **POST** /render | 


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AddressTemplate](docs/Model/AddressTemplate.md)
 - [AuthCode](docs/Model/AuthCode.md)
 - [AuthCodeRequest](docs/Model/AuthCodeRequest.md)
 - [BatchErrorResponse](docs/Model/BatchErrorResponse.md)
 - [Client](docs/Model/Client.md)
 - [FileObject](docs/Model/FileObject.md)
 - [FileTemplate](docs/Model/FileTemplate.md)
 - [GlobalTemplate](docs/Model/GlobalTemplate.md)
 - [ImageInfo](docs/Model/ImageInfo.md)
 - [JSONWebToken](docs/Model/JSONWebToken.md)
 - [JsonApiResponse](docs/Model/JsonApiResponse.md)
 - [LoginDetails](docs/Model/LoginDetails.md)
 - [RenderOptions](docs/Model/RenderOptions.md)
 - [ResponseLinks](docs/Model/ResponseLinks.md)
 - [Signature](docs/Model/Signature.md)
 - [Snippet](docs/Model/Snippet.md)
 - [SnippetTemplate](docs/Model/SnippetTemplate.md)
 - [Template](docs/Model/Template.md)
 - [UnexpectedErrorResponse](docs/Model/UnexpectedErrorResponse.md)
 - [User](docs/Model/User.md)
 - [UserTemplate](docs/Model/UserTemplate.md)


## Documentation For Authorization


## jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




