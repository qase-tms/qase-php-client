<?php

namespace Qase\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use InvalidArgumentException;
use Qase\Client\ApiException;
use Qase\Client\Configuration;
use Qase\Client\HeaderSelector;
use Qase\Client\Model\ProjectAccess;
use Qase\Client\Model\ProjectCodeResponse;
use Qase\Client\Model\ProjectCreate;
use Qase\Client\Model\ProjectListResponse;
use Qase\Client\Model\ProjectResponse;
use Qase\Client\Model\Response;
use Qase\Client\ObjectSerializer;
use RuntimeException;

/**
 * ProjectsApi Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProjectsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration   $config = null,
        HeaderSelector  $selector = null,
                        $hostIndex = 0
    )
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createProject
     *
     * Create new project.
     *
     * @param ProjectCreate $projectCreate projectCreate (required)
     *
     * @return ProjectCodeResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createProject($projectCreate)
    {
        list($response) = $this->createProjectWithHttpInfo($projectCreate);
        return $response;
    }

    /**
     * Operation createProjectWithHttpInfo
     *
     * Create new project.
     *
     * @param ProjectCreate $projectCreate (required)
     *
     * @return array of \Qase\Client\Model\ProjectCodeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createProjectWithHttpInfo($projectCreate)
    {
        $request = $this->createProjectRequest($projectCreate);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\ProjectCodeResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\ProjectCodeResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\ProjectCodeResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\ProjectCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createProjectAsync
     *
     * Create new project.
     *
     * @param ProjectCreate $projectCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createProjectAsync($projectCreate)
    {
        return $this->createProjectAsyncWithHttpInfo($projectCreate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createProjectAsyncWithHttpInfo
     *
     * Create new project.
     *
     * @param ProjectCreate $projectCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createProjectAsyncWithHttpInfo($projectCreate)
    {
        $returnType = '\Qase\Client\Model\ProjectCodeResponse';
        $request = $this->createProjectRequest($projectCreate);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createProject'
     *
     * @param ProjectCreate $projectCreate (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function createProjectRequest($projectCreate)
    {
        // verify the required parameter 'projectCreate' is set
        if ($projectCreate === null || (is_array($projectCreate) && count($projectCreate) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $projectCreate when calling createProject'
            );
        }

        $resourcePath = '/project';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($projectCreate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($projectCreate));
            } else {
                $httpBody = $projectCreate;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteProject
     *
     * Delete Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return Response
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteProject($code)
    {
        list($response) = $this->deleteProjectWithHttpInfo($code);
        return $response;
    }

    /**
     * Operation deleteProjectWithHttpInfo
     *
     * Delete Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return array of \Qase\Client\Model\Response, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteProjectWithHttpInfo($code)
    {
        $request = $this->deleteProjectRequest($code);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteProjectAsync
     *
     * Delete Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteProjectAsync($code)
    {
        return $this->deleteProjectAsyncWithHttpInfo($code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteProjectAsyncWithHttpInfo
     *
     * Delete Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteProjectAsyncWithHttpInfo($code)
    {
        $returnType = '\Qase\Client\Model\Response';
        $request = $this->deleteProjectRequest($code);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteProject'
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function deleteProjectRequest($code)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling deleteProject'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.deleteProject, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.deleteProject, must be bigger than or equal to 2.');
        }


        $resourcePath = '/project/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProject
     *
     * Get Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return ProjectResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getProject($code)
    {
        list($response) = $this->getProjectWithHttpInfo($code);
        return $response;
    }

    /**
     * Operation getProjectWithHttpInfo
     *
     * Get Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return array of \Qase\Client\Model\ProjectResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getProjectWithHttpInfo($code)
    {
        $request = $this->getProjectRequest($code);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\ProjectResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\ProjectResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\ProjectResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\ProjectResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProjectAsync
     *
     * Get Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getProjectAsync($code)
    {
        return $this->getProjectAsyncWithHttpInfo($code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProjectAsyncWithHttpInfo
     *
     * Get Project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getProjectAsyncWithHttpInfo($code)
    {
        $returnType = '\Qase\Client\Model\ProjectResponse';
        $request = $this->getProjectRequest($code);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProject'
     *
     * @param string $code Code of project, where to search entities. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getProjectRequest($code)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling getProject'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.getProject, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.getProject, must be bigger than or equal to 2.');
        }


        $resourcePath = '/project/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProjects
     *
     * Get All Projects.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return ProjectListResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getProjects($limit = 10, $offset = 0)
    {
        list($response) = $this->getProjectsWithHttpInfo($limit, $offset);
        return $response;
    }

    /**
     * Operation getProjectsWithHttpInfo
     *
     * Get All Projects.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return array of \Qase\Client\Model\ProjectListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getProjectsWithHttpInfo($limit = 10, $offset = 0)
    {
        $request = $this->getProjectsRequest($limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\ProjectListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\ProjectListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\ProjectListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\ProjectListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProjectsAsync
     *
     * Get All Projects.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getProjectsAsync($limit = 10, $offset = 0)
    {
        return $this->getProjectsAsyncWithHttpInfo($limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProjectsAsyncWithHttpInfo
     *
     * Get All Projects.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getProjectsAsyncWithHttpInfo($limit = 10, $offset = 0)
    {
        $returnType = '\Qase\Client\Model\ProjectListResponse';
        $request = $this->getProjectsRequest($limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProjects'
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getProjectsRequest($limit = 10, $offset = 0)
    {
        if ($limit !== null && $limit > 25) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ProjectsApi.getProjects, must be smaller than or equal to 25.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ProjectsApi.getProjects, must be bigger than or equal to 0.');
        }

        if ($offset !== null && $offset > 100000) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling ProjectsApi.getProjects, must be smaller than or equal to 100000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling ProjectsApi.getProjects, must be bigger than or equal to 0.');
        }


        $resourcePath = '/project';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            if ('form' === 'form' && is_array($limit)) {
                foreach ($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($offset !== null) {
            if ('form' === 'form' && is_array($offset)) {
                foreach ($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['offset'] = $offset;
            }
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation grantAccessToProject
     *
     * Grant access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess projectAccess (required)
     *
     * @return Response
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function grantAccessToProject($code, $projectAccess)
    {
        list($response) = $this->grantAccessToProjectWithHttpInfo($code, $projectAccess);
        return $response;
    }

    /**
     * Operation grantAccessToProjectWithHttpInfo
     *
     * Grant access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return array of \Qase\Client\Model\Response, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function grantAccessToProjectWithHttpInfo($code, $projectAccess)
    {
        $request = $this->grantAccessToProjectRequest($code, $projectAccess);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation grantAccessToProjectAsync
     *
     * Grant access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function grantAccessToProjectAsync($code, $projectAccess)
    {
        return $this->grantAccessToProjectAsyncWithHttpInfo($code, $projectAccess)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation grantAccessToProjectAsyncWithHttpInfo
     *
     * Grant access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function grantAccessToProjectAsyncWithHttpInfo($code, $projectAccess)
    {
        $returnType = '\Qase\Client\Model\Response';
        $request = $this->grantAccessToProjectRequest($code, $projectAccess);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'grantAccessToProject'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function grantAccessToProjectRequest($code, $projectAccess)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling grantAccessToProject'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.grantAccessToProject, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.grantAccessToProject, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'projectAccess' is set
        if ($projectAccess === null || (is_array($projectAccess) && count($projectAccess) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $projectAccess when calling grantAccessToProject'
            );
        }

        $resourcePath = '/project/{code}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($projectAccess)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($projectAccess));
            } else {
                $httpBody = $projectAccess;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation revokeAccessToProject
     *
     * Revoke access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess projectAccess (required)
     *
     * @return Response
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function revokeAccessToProject($code, $projectAccess)
    {
        list($response) = $this->revokeAccessToProjectWithHttpInfo($code, $projectAccess);
        return $response;
    }

    /**
     * Operation revokeAccessToProjectWithHttpInfo
     *
     * Revoke access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return array of \Qase\Client\Model\Response, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function revokeAccessToProjectWithHttpInfo($code, $projectAccess)
    {
        $request = $this->revokeAccessToProjectRequest($code, $projectAccess);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation revokeAccessToProjectAsync
     *
     * Revoke access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function revokeAccessToProjectAsync($code, $projectAccess)
    {
        return $this->revokeAccessToProjectAsyncWithHttpInfo($code, $projectAccess)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation revokeAccessToProjectAsyncWithHttpInfo
     *
     * Revoke access to project by code.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function revokeAccessToProjectAsyncWithHttpInfo($code, $projectAccess)
    {
        $returnType = '\Qase\Client\Model\Response';
        $request = $this->revokeAccessToProjectRequest($code, $projectAccess);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'revokeAccessToProject'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param ProjectAccess $projectAccess (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function revokeAccessToProjectRequest($code, $projectAccess)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling revokeAccessToProject'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.revokeAccessToProject, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling ProjectsApi.revokeAccessToProject, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'projectAccess' is set
        if ($projectAccess === null || (is_array($projectAccess) && count($projectAccess) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $projectAccess when calling revokeAccessToProject'
            );
        }

        $resourcePath = '/project/{code}/access';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($projectAccess)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($projectAccess));
            } else {
                $httpBody = $projectAccess;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws RuntimeException on file opening failure
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
