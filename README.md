# OpenAPIClient-php

Qase API Specification.

For more information, please visit [https://qase.io](https://qase.io).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = 'hash_example'; // string | Hash.

try {
    $result = $apiInstance->deleteAttachment($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.qase.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AttachmentsApi* | [**deleteAttachment**](docs/Api/AttachmentsApi.md#deleteattachment) | **DELETE** /attachment/{hash} | Remove attachment by Hash.
*AttachmentsApi* | [**getAttachment**](docs/Api/AttachmentsApi.md#getattachment) | **GET** /attachment/{hash} | Get attachment by Hash.
*AttachmentsApi* | [**getAttachments**](docs/Api/AttachmentsApi.md#getattachments) | **GET** /attachment | Get all attachments.
*AttachmentsApi* | [**uploadAttachment**](docs/Api/AttachmentsApi.md#uploadattachment) | **POST** /attachment/{code} | Upload attachment.
*CasesApi* | [**createCase**](docs/Api/CasesApi.md#createcase) | **POST** /case/{code} | Create a new test case.
*CasesApi* | [**deleteCase**](docs/Api/CasesApi.md#deletecase) | **DELETE** /case/{code}/{id} | Delete test case.
*CasesApi* | [**getCase**](docs/Api/CasesApi.md#getcase) | **GET** /case/{code}/{id} | Get a specific test case.
*CasesApi* | [**getCases**](docs/Api/CasesApi.md#getcases) | **GET** /case/{code} | Get all test cases.
*CasesApi* | [**updateCase**](docs/Api/CasesApi.md#updatecase) | **PATCH** /case/{code}/{id} | Update test case.
*CustomFieldsApi* | [**createCustomField**](docs/Api/CustomFieldsApi.md#createcustomfield) | **POST** /custom_field | Create new Custom Field.
*CustomFieldsApi* | [**deleteCustomField**](docs/Api/CustomFieldsApi.md#deletecustomfield) | **DELETE** /custom_field/{id} | Delete Custom Field by id.
*CustomFieldsApi* | [**getCustomField**](docs/Api/CustomFieldsApi.md#getcustomfield) | **GET** /custom_field/{id} | Get Custom Field by id.
*CustomFieldsApi* | [**getCustomFields**](docs/Api/CustomFieldsApi.md#getcustomfields) | **GET** /custom_field | Get all Custom Fields.
*CustomFieldsApi* | [**updateCustomField**](docs/Api/CustomFieldsApi.md#updatecustomfield) | **PATCH** /custom_field/{id} | Update Custom Field by id.
*DefectsApi* | [**createDefect**](docs/Api/DefectsApi.md#createdefect) | **POST** /defect/{code} | Create a new defect.
*DefectsApi* | [**deleteDefect**](docs/Api/DefectsApi.md#deletedefect) | **DELETE** /defect/{code}/{id} | Delete defect.
*DefectsApi* | [**getDefect**](docs/Api/DefectsApi.md#getdefect) | **GET** /defect/{code}/{id} | Get a specific defect.
*DefectsApi* | [**getDefects**](docs/Api/DefectsApi.md#getdefects) | **GET** /defect/{code} | Get all defects.
*DefectsApi* | [**resolveDefect**](docs/Api/DefectsApi.md#resolvedefect) | **PATCH** /defect/{code}/resolve/{id} | Resolve a specific defect.
*DefectsApi* | [**updateDefect**](docs/Api/DefectsApi.md#updatedefect) | **PATCH** /defect/{code}/{id} | Update defect.
*DefectsApi* | [**updateDefectStatus**](docs/Api/DefectsApi.md#updatedefectstatus) | **PATCH** /defect/{code}/status/{id} | Update a specific defect status.
*EnvironmentsApi* | [**createEnvironment**](docs/Api/EnvironmentsApi.md#createenvironment) | **POST** /environment/{code} | Create a new environment.
*EnvironmentsApi* | [**deleteEnvironment**](docs/Api/EnvironmentsApi.md#deleteenvironment) | **DELETE** /environment/{code}/{id} | Delete environment.
*EnvironmentsApi* | [**getEnvironment**](docs/Api/EnvironmentsApi.md#getenvironment) | **GET** /environment/{code}/{id} | Get a specific environment.
*EnvironmentsApi* | [**getEnvironments**](docs/Api/EnvironmentsApi.md#getenvironments) | **GET** /environment/{code} | Get all environments.
*EnvironmentsApi* | [**updateEnvironment**](docs/Api/EnvironmentsApi.md#updateenvironment) | **PATCH** /environment/{code}/{id} | Update environment.
*MilestonesApi* | [**createMilestone**](docs/Api/MilestonesApi.md#createmilestone) | **POST** /milestone/{code} | Create a new milestone.
*MilestonesApi* | [**deleteMilestone**](docs/Api/MilestonesApi.md#deletemilestone) | **DELETE** /milestone/{code}/{id} | Delete milestone.
*MilestonesApi* | [**getMilestone**](docs/Api/MilestonesApi.md#getmilestone) | **GET** /milestone/{code}/{id} | Get a specific milestone.
*MilestonesApi* | [**getMilestones**](docs/Api/MilestonesApi.md#getmilestones) | **GET** /milestone/{code} | Get all milestones.
*MilestonesApi* | [**updateMilestone**](docs/Api/MilestonesApi.md#updatemilestone) | **PATCH** /milestone/{code}/{id} | Update milestone.
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plan/{code} | Create a new plan.
*PlansApi* | [**deletePlan**](docs/Api/PlansApi.md#deleteplan) | **DELETE** /plan/{code}/{id} | Delete plan.
*PlansApi* | [**getPlan**](docs/Api/PlansApi.md#getplan) | **GET** /plan/{code}/{id} | Get a specific plan.
*PlansApi* | [**getPlans**](docs/Api/PlansApi.md#getplans) | **GET** /plan/{code} | Get all plans.
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PATCH** /plan/{code}/{id} | Update plan.
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /project | Create new project.
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /project/{code} | Delete Project by code.
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /project/{code} | Get Project by code.
*ProjectsApi* | [**getProjects**](docs/Api/ProjectsApi.md#getprojects) | **GET** /project | Get All Projects.
*ProjectsApi* | [**grantAccessToProject**](docs/Api/ProjectsApi.md#grantaccesstoproject) | **POST** /project/{code}/access | Grant access to project by code.
*ProjectsApi* | [**revokeAccessToProject**](docs/Api/ProjectsApi.md#revokeaccesstoproject) | **DELETE** /project/{code}/access | Revoke access to project by code.
*ResultsApi* | [**createResult**](docs/Api/ResultsApi.md#createresult) | **POST** /result/{code}/{id} | Create test run result.
*ResultsApi* | [**createResultBulk**](docs/Api/ResultsApi.md#createresultbulk) | **POST** /result/{code}/{id}/bulk | Bulk create test run result.
*ResultsApi* | [**deleteResult**](docs/Api/ResultsApi.md#deleteresult) | **DELETE** /result/{code}/{id}/{hash} | Delete test run result.
*ResultsApi* | [**getResult**](docs/Api/ResultsApi.md#getresult) | **GET** /result/{code}/{hash} | Get test run result by code.
*ResultsApi* | [**getResults**](docs/Api/ResultsApi.md#getresults) | **GET** /result/{code} | Get all test run results.
*ResultsApi* | [**updateResult**](docs/Api/ResultsApi.md#updateresult) | **PATCH** /result/{code}/{id}/{hash} | Update test run result.
*RunsApi* | [**completeRun**](docs/Api/RunsApi.md#completerun) | **POST** /run/{code}/{id}/complete | Complete a specific run.
*RunsApi* | [**createRun**](docs/Api/RunsApi.md#createrun) | **POST** /run/{code} | Create a new run.
*RunsApi* | [**deleteRun**](docs/Api/RunsApi.md#deleterun) | **DELETE** /run/{code}/{id} | Delete run.
*RunsApi* | [**getRun**](docs/Api/RunsApi.md#getrun) | **GET** /run/{code}/{id} | Get a specific run.
*RunsApi* | [**getRuns**](docs/Api/RunsApi.md#getruns) | **GET** /run/{code} | Get all runs.
*RunsApi* | [**updateRunPublicity**](docs/Api/RunsApi.md#updaterunpublicity) | **PATCH** /run/{code}/{id}/public | Update publicity of a specific run.
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **GET** /search | Search entities by Qase Query Language (QQL).
*SharedStepsApi* | [**createSharedStep**](docs/Api/SharedStepsApi.md#createsharedstep) | **POST** /shared_step/{code} | Create a new shared step.
*SharedStepsApi* | [**deleteSharedStep**](docs/Api/SharedStepsApi.md#deletesharedstep) | **DELETE** /shared_step/{code}/{hash} | Delete shared step.
*SharedStepsApi* | [**getSharedStep**](docs/Api/SharedStepsApi.md#getsharedstep) | **GET** /shared_step/{code}/{hash} | Get a specific shared step.
*SharedStepsApi* | [**getSharedSteps**](docs/Api/SharedStepsApi.md#getsharedsteps) | **GET** /shared_step/{code} | Get all shared steps.
*SharedStepsApi* | [**updateSharedStep**](docs/Api/SharedStepsApi.md#updatesharedstep) | **PATCH** /shared_step/{code}/{hash} | Update shared step.
*SuitesApi* | [**createSuite**](docs/Api/SuitesApi.md#createsuite) | **POST** /suite/{code} | Create a new test suite.
*SuitesApi* | [**deleteSuite**](docs/Api/SuitesApi.md#deletesuite) | **DELETE** /suite/{code}/{id} | Delete test suite.
*SuitesApi* | [**getSuite**](docs/Api/SuitesApi.md#getsuite) | **GET** /suite/{code}/{id} | Get a specific test suite.
*SuitesApi* | [**getSuites**](docs/Api/SuitesApi.md#getsuites) | **GET** /suite/{code} | Get all test suites.
*SuitesApi* | [**updateSuite**](docs/Api/SuitesApi.md#updatesuite) | **PATCH** /suite/{code}/{id} | Update test suite.

## Models

- [Attachment](docs/Model/Attachment.md)
- [AttachmentGet](docs/Model/AttachmentGet.md)
- [AttachmentHash](docs/Model/AttachmentHash.md)
- [AttachmentListResponse](docs/Model/AttachmentListResponse.md)
- [AttachmentListResponseAllOf](docs/Model/AttachmentListResponseAllOf.md)
- [AttachmentListResponseAllOfResult](docs/Model/AttachmentListResponseAllOfResult.md)
- [AttachmentResponse](docs/Model/AttachmentResponse.md)
- [AttachmentResponseAllOf](docs/Model/AttachmentResponseAllOf.md)
- [AttachmentUploadsResponse](docs/Model/AttachmentUploadsResponse.md)
- [AttachmentUploadsResponseAllOf](docs/Model/AttachmentUploadsResponseAllOf.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldCreate](docs/Model/CustomFieldCreate.md)
- [CustomFieldCreateValue](docs/Model/CustomFieldCreateValue.md)
- [CustomFieldResponse](docs/Model/CustomFieldResponse.md)
- [CustomFieldResponseAllOf](docs/Model/CustomFieldResponseAllOf.md)
- [CustomFieldUpdate](docs/Model/CustomFieldUpdate.md)
- [CustomFieldValue](docs/Model/CustomFieldValue.md)
- [CustomFieldsResponse](docs/Model/CustomFieldsResponse.md)
- [CustomFieldsResponseAllOf](docs/Model/CustomFieldsResponseAllOf.md)
- [CustomFieldsResponseAllOfResult](docs/Model/CustomFieldsResponseAllOfResult.md)
- [Defect](docs/Model/Defect.md)
- [DefectCreate](docs/Model/DefectCreate.md)
- [DefectListResponse](docs/Model/DefectListResponse.md)
- [DefectListResponseAllOf](docs/Model/DefectListResponseAllOf.md)
- [DefectListResponseAllOfResult](docs/Model/DefectListResponseAllOfResult.md)
- [DefectResponse](docs/Model/DefectResponse.md)
- [DefectResponseAllOf](docs/Model/DefectResponseAllOf.md)
- [DefectStatus](docs/Model/DefectStatus.md)
- [DefectUpdate](docs/Model/DefectUpdate.md)
- [Environment](docs/Model/Environment.md)
- [EnvironmentCreate](docs/Model/EnvironmentCreate.md)
- [EnvironmentListResponse](docs/Model/EnvironmentListResponse.md)
- [EnvironmentListResponseAllOf](docs/Model/EnvironmentListResponseAllOf.md)
- [EnvironmentListResponseAllOfResult](docs/Model/EnvironmentListResponseAllOfResult.md)
- [EnvironmentResponse](docs/Model/EnvironmentResponse.md)
- [EnvironmentResponseAllOf](docs/Model/EnvironmentResponseAllOf.md)
- [EnvironmentUpdate](docs/Model/EnvironmentUpdate.md)
- [Filters](docs/Model/Filters.md)
- [Filters1](docs/Model/Filters1.md)
- [Filters2](docs/Model/Filters2.md)
- [Filters3](docs/Model/Filters3.md)
- [Filters4](docs/Model/Filters4.md)
- [Filters5](docs/Model/Filters5.md)
- [Filters6](docs/Model/Filters6.md)
- [Filters7](docs/Model/Filters7.md)
- [HashResponse](docs/Model/HashResponse.md)
- [HashResponseAllOf](docs/Model/HashResponseAllOf.md)
- [HashResponseAllOfResult](docs/Model/HashResponseAllOfResult.md)
- [IdResponse](docs/Model/IdResponse.md)
- [IdResponseAllOf](docs/Model/IdResponseAllOf.md)
- [IdResponseAllOfResult](docs/Model/IdResponseAllOfResult.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [Milestone](docs/Model/Milestone.md)
- [MilestoneCreate](docs/Model/MilestoneCreate.md)
- [MilestoneListResponse](docs/Model/MilestoneListResponse.md)
- [MilestoneListResponseAllOf](docs/Model/MilestoneListResponseAllOf.md)
- [MilestoneListResponseAllOfResult](docs/Model/MilestoneListResponseAllOfResult.md)
- [MilestoneResponse](docs/Model/MilestoneResponse.md)
- [MilestoneResponseAllOf](docs/Model/MilestoneResponseAllOf.md)
- [MilestoneUpdate](docs/Model/MilestoneUpdate.md)
- [Plan](docs/Model/Plan.md)
- [PlanCreate](docs/Model/PlanCreate.md)
- [PlanDetailed](docs/Model/PlanDetailed.md)
- [PlanDetailedAllOf](docs/Model/PlanDetailedAllOf.md)
- [PlanDetailedAllOfCases](docs/Model/PlanDetailedAllOfCases.md)
- [PlanListResponse](docs/Model/PlanListResponse.md)
- [PlanListResponseAllOf](docs/Model/PlanListResponseAllOf.md)
- [PlanListResponseAllOfResult](docs/Model/PlanListResponseAllOfResult.md)
- [PlanResponse](docs/Model/PlanResponse.md)
- [PlanResponseAllOf](docs/Model/PlanResponseAllOf.md)
- [PlanUpdate](docs/Model/PlanUpdate.md)
- [Project](docs/Model/Project.md)
- [ProjectAccess](docs/Model/ProjectAccess.md)
- [ProjectCodeResponse](docs/Model/ProjectCodeResponse.md)
- [ProjectCodeResponseAllOf](docs/Model/ProjectCodeResponseAllOf.md)
- [ProjectCodeResponseAllOfResult](docs/Model/ProjectCodeResponseAllOfResult.md)
- [ProjectCounts](docs/Model/ProjectCounts.md)
- [ProjectCountsDefects](docs/Model/ProjectCountsDefects.md)
- [ProjectCountsRuns](docs/Model/ProjectCountsRuns.md)
- [ProjectCreate](docs/Model/ProjectCreate.md)
- [ProjectListResponse](docs/Model/ProjectListResponse.md)
- [ProjectListResponseAllOf](docs/Model/ProjectListResponseAllOf.md)
- [ProjectListResponseAllOfResult](docs/Model/ProjectListResponseAllOfResult.md)
- [ProjectResponse](docs/Model/ProjectResponse.md)
- [ProjectResponseAllOf](docs/Model/ProjectResponseAllOf.md)
- [QqlDefect](docs/Model/QqlDefect.md)
- [QqlPlan](docs/Model/QqlPlan.md)
- [QqlTestCase](docs/Model/QqlTestCase.md)
- [Requirement](docs/Model/Requirement.md)
- [Response](docs/Model/Response.md)
- [Result](docs/Model/Result.md)
- [ResultCreate](docs/Model/ResultCreate.md)
- [ResultCreateBulk](docs/Model/ResultCreateBulk.md)
- [ResultCreateCase](docs/Model/ResultCreateCase.md)
- [ResultCreateSteps](docs/Model/ResultCreateSteps.md)
- [ResultListResponse](docs/Model/ResultListResponse.md)
- [ResultListResponseAllOf](docs/Model/ResultListResponseAllOf.md)
- [ResultListResponseAllOfResult](docs/Model/ResultListResponseAllOfResult.md)
- [ResultResponse](docs/Model/ResultResponse.md)
- [ResultResponseAllOf](docs/Model/ResultResponseAllOf.md)
- [ResultSteps](docs/Model/ResultSteps.md)
- [ResultUpdate](docs/Model/ResultUpdate.md)
- [ResultUpdateSteps](docs/Model/ResultUpdateSteps.md)
- [Run](docs/Model/Run.md)
- [RunCreate](docs/Model/RunCreate.md)
- [RunEnvironment](docs/Model/RunEnvironment.md)
- [RunListResponse](docs/Model/RunListResponse.md)
- [RunListResponseAllOf](docs/Model/RunListResponseAllOf.md)
- [RunListResponseAllOfResult](docs/Model/RunListResponseAllOfResult.md)
- [RunMilestone](docs/Model/RunMilestone.md)
- [RunPublic](docs/Model/RunPublic.md)
- [RunPublicResponse](docs/Model/RunPublicResponse.md)
- [RunPublicResponseAllOf](docs/Model/RunPublicResponseAllOf.md)
- [RunPublicResponseAllOfResult](docs/Model/RunPublicResponseAllOfResult.md)
- [RunResponse](docs/Model/RunResponse.md)
- [RunResponseAllOf](docs/Model/RunResponseAllOf.md)
- [RunStats](docs/Model/RunStats.md)
- [SearchResponse](docs/Model/SearchResponse.md)
- [SearchResponseAllOf](docs/Model/SearchResponseAllOf.md)
- [SearchResponseAllOfResult](docs/Model/SearchResponseAllOfResult.md)
- [SharedStep](docs/Model/SharedStep.md)
- [SharedStepCreate](docs/Model/SharedStepCreate.md)
- [SharedStepCreateSteps](docs/Model/SharedStepCreateSteps.md)
- [SharedStepListResponse](docs/Model/SharedStepListResponse.md)
- [SharedStepListResponseAllOf](docs/Model/SharedStepListResponseAllOf.md)
- [SharedStepListResponseAllOfResult](docs/Model/SharedStepListResponseAllOfResult.md)
- [SharedStepResponse](docs/Model/SharedStepResponse.md)
- [SharedStepResponseAllOf](docs/Model/SharedStepResponseAllOf.md)
- [SharedStepSteps](docs/Model/SharedStepSteps.md)
- [SharedStepUpdate](docs/Model/SharedStepUpdate.md)
- [Suite](docs/Model/Suite.md)
- [SuiteCreate](docs/Model/SuiteCreate.md)
- [SuiteDelete](docs/Model/SuiteDelete.md)
- [SuiteListResponse](docs/Model/SuiteListResponse.md)
- [SuiteListResponseAllOf](docs/Model/SuiteListResponseAllOf.md)
- [SuiteListResponseAllOfResult](docs/Model/SuiteListResponseAllOfResult.md)
- [SuiteResponse](docs/Model/SuiteResponse.md)
- [SuiteResponseAllOf](docs/Model/SuiteResponseAllOf.md)
- [TagValue](docs/Model/TagValue.md)
- [TestCase](docs/Model/TestCase.md)
- [TestCaseCreate](docs/Model/TestCaseCreate.md)
- [TestCaseCreateSteps](docs/Model/TestCaseCreateSteps.md)
- [TestCaseListResponse](docs/Model/TestCaseListResponse.md)
- [TestCaseListResponseAllOf](docs/Model/TestCaseListResponseAllOf.md)
- [TestCaseListResponseAllOfResult](docs/Model/TestCaseListResponseAllOfResult.md)
- [TestCaseResponse](docs/Model/TestCaseResponse.md)
- [TestCaseResponseAllOf](docs/Model/TestCaseResponseAllOf.md)
- [TestCaseUpdate](docs/Model/TestCaseUpdate.md)
- [TestStep](docs/Model/TestStep.md)

## Authorization

### TokenAuth

- **Type**: API key
- **API key parameter name**: Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@qase.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
