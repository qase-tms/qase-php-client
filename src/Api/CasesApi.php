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
use Qase\Client\Model\IdResponse;
use Qase\Client\Model\TestCaseCreate;
use Qase\Client\Model\TestCaseListResponse;
use Qase\Client\Model\TestCaseResponse;
use Qase\Client\Model\TestCaseUpdate;
use Qase\Client\ObjectSerializer;
use RuntimeException;

/**
 * CasesApi Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CasesApi
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
     * Operation createCase
     *
     * Create a new test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param TestCaseCreate $testCaseCreate testCaseCreate (required)
     *
     * @return IdResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createCase($code, $testCaseCreate)
    {
        list($response) = $this->createCaseWithHttpInfo($code, $testCaseCreate);
        return $response;
    }

    /**
     * Operation createCaseWithHttpInfo
     *
     * Create a new test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param TestCaseCreate $testCaseCreate (required)
     *
     * @return array of \Qase\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createCaseWithHttpInfo($code, $testCaseCreate)
    {
        $request = $this->createCaseRequest($code, $testCaseCreate);

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
                    if ('\Qase\Client\Model\IdResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\IdResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\IdResponse';
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
                        '\Qase\Client\Model\IdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'createCase'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param TestCaseCreate $testCaseCreate (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function createCaseRequest($code, $testCaseCreate)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling createCase'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.createCase, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.createCase, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'testCaseCreate' is set
        if ($testCaseCreate === null || (is_array($testCaseCreate) && count($testCaseCreate) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $testCaseCreate when calling createCase'
            );
        }

        $resourcePath = '/case/{code}';
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
        if (isset($testCaseCreate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($testCaseCreate));
            } else {
                $httpBody = $testCaseCreate;
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

    /**
     * Operation createCaseAsync
     *
     * Create a new test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param TestCaseCreate $testCaseCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createCaseAsync($code, $testCaseCreate)
    {
        return $this->createCaseAsyncWithHttpInfo($code, $testCaseCreate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCaseAsyncWithHttpInfo
     *
     * Create a new test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param TestCaseCreate $testCaseCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createCaseAsyncWithHttpInfo($code, $testCaseCreate)
    {
        $returnType = '\Qase\Client\Model\IdResponse';
        $request = $this->createCaseRequest($code, $testCaseCreate);

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
     * Operation deleteCase
     *
     * Delete test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return IdResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteCase($code, $id)
    {
        list($response) = $this->deleteCaseWithHttpInfo($code, $id);
        return $response;
    }

    /**
     * Operation deleteCaseWithHttpInfo
     *
     * Delete test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return array of \Qase\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteCaseWithHttpInfo($code, $id)
    {
        $request = $this->deleteCaseRequest($code, $id);

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
                    if ('\Qase\Client\Model\IdResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\IdResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\IdResponse';
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
                        '\Qase\Client\Model\IdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'deleteCase'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function deleteCaseRequest($code, $id)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling deleteCase'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.deleteCase, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.deleteCase, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling deleteCase'
            );
        }

        $resourcePath = '/case/{code}/{id}';
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
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation deleteCaseAsync
     *
     * Delete test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteCaseAsync($code, $id)
    {
        return $this->deleteCaseAsyncWithHttpInfo($code, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteCaseAsyncWithHttpInfo
     *
     * Delete test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteCaseAsyncWithHttpInfo($code, $id)
    {
        $returnType = '\Qase\Client\Model\IdResponse';
        $request = $this->deleteCaseRequest($code, $id);

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
     * Operation getCase
     *
     * Get a specific test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return TestCaseResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getCase($code, $id)
    {
        list($response) = $this->getCaseWithHttpInfo($code, $id);
        return $response;
    }

    /**
     * Operation getCaseWithHttpInfo
     *
     * Get a specific test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return array of \Qase\Client\Model\TestCaseResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getCaseWithHttpInfo($code, $id)
    {
        $request = $this->getCaseRequest($code, $id);

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
                    if ('\Qase\Client\Model\TestCaseResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\TestCaseResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\TestCaseResponse';
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
                        '\Qase\Client\Model\TestCaseResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getCase'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getCaseRequest($code, $id)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling getCase'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.getCase, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.getCase, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling getCase'
            );
        }

        $resourcePath = '/case/{code}/{id}';
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
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation getCaseAsync
     *
     * Get a specific test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getCaseAsync($code, $id)
    {
        return $this->getCaseAsyncWithHttpInfo($code, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCaseAsyncWithHttpInfo
     *
     * Get a specific test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getCaseAsyncWithHttpInfo($code, $id)
    {
        $returnType = '\Qase\Client\Model\TestCaseResponse';
        $request = $this->getCaseRequest($code, $id);

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
     * Operation getCases
     *
     * Get all test cases.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters $filters filters (optional)
     *
     * @return TestCaseListResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getCases($code, $limit = 10, $offset = 0, $filters = null)
    {
        list($response) = $this->getCasesWithHttpInfo($code, $limit, $offset, $filters);
        return $response;
    }

    /**
     * Operation getCasesWithHttpInfo
     *
     * Get all test cases.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters $filters (optional)
     *
     * @return array of \Qase\Client\Model\TestCaseListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getCasesWithHttpInfo($code, $limit = 10, $offset = 0, $filters = null)
    {
        $request = $this->getCasesRequest($code, $limit, $offset, $filters);

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
                    if ('\Qase\Client\Model\TestCaseListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\TestCaseListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\TestCaseListResponse';
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
                        '\Qase\Client\Model\TestCaseListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getCases'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters $filters (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getCasesRequest($code, $limit = 10, $offset = 0, $filters = null)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling getCases'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.getCases, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.getCases, must be bigger than or equal to 2.');
        }

        if ($limit !== null && $limit > 25) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling CasesApi.getCases, must be smaller than or equal to 25.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling CasesApi.getCases, must be bigger than or equal to 0.');
        }

        if ($offset !== null && $offset > 100000) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling CasesApi.getCases, must be smaller than or equal to 100000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling CasesApi.getCases, must be bigger than or equal to 0.');
        }


        $resourcePath = '/case/{code}';
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
        // query params
        if (is_array($filters)) {
            $filters = ObjectSerializer::serializeCollection($filters, 'deepObject', true);
        }
        if ($filters !== null) {
            $queryParams['filters'] = $filters;
        }


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
     * Operation getCasesAsync
     *
     * Get all test cases.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters $filters (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getCasesAsync($code, $limit = 10, $offset = 0, $filters = null)
    {
        return $this->getCasesAsyncWithHttpInfo($code, $limit, $offset, $filters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCasesAsyncWithHttpInfo
     *
     * Get all test cases.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters $filters (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getCasesAsyncWithHttpInfo($code, $limit = 10, $offset = 0, $filters = null)
    {
        $returnType = '\Qase\Client\Model\TestCaseListResponse';
        $request = $this->getCasesRequest($code, $limit, $offset, $filters);

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
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
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
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Operation updateCase
     *
     * Update test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param TestCaseUpdate $testCaseUpdate testCaseUpdate (required)
     *
     * @return IdResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateCase($code, $id, $testCaseUpdate)
    {
        list($response) = $this->updateCaseWithHttpInfo($code, $id, $testCaseUpdate);
        return $response;
    }

    /**
     * Operation updateCaseWithHttpInfo
     *
     * Update test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param TestCaseUpdate $testCaseUpdate (required)
     *
     * @return array of \Qase\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateCaseWithHttpInfo($code, $id, $testCaseUpdate)
    {
        $request = $this->updateCaseRequest($code, $id, $testCaseUpdate);

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
                    if ('\Qase\Client\Model\IdResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\IdResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\IdResponse';
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
                        '\Qase\Client\Model\IdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'updateCase'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param TestCaseUpdate $testCaseUpdate (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function updateCaseRequest($code, $id, $testCaseUpdate)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling updateCase'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.updateCase, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling CasesApi.updateCase, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling updateCase'
            );
        }
        // verify the required parameter 'testCaseUpdate' is set
        if ($testCaseUpdate === null || (is_array($testCaseUpdate) && count($testCaseUpdate) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $testCaseUpdate when calling updateCase'
            );
        }

        $resourcePath = '/case/{code}/{id}';
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
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
        if (isset($testCaseUpdate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($testCaseUpdate));
            } else {
                $httpBody = $testCaseUpdate;
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
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateCaseAsync
     *
     * Update test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param TestCaseUpdate $testCaseUpdate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function updateCaseAsync($code, $id, $testCaseUpdate)
    {
        return $this->updateCaseAsyncWithHttpInfo($code, $id, $testCaseUpdate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateCaseAsyncWithHttpInfo
     *
     * Update test case.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param TestCaseUpdate $testCaseUpdate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function updateCaseAsyncWithHttpInfo($code, $id, $testCaseUpdate)
    {
        $returnType = '\Qase\Client\Model\IdResponse';
        $request = $this->updateCaseRequest($code, $id, $testCaseUpdate);

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
}
