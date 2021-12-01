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
use Qase\Client\Model\Response;
use Qase\Client\Model\RunCreate;
use Qase\Client\Model\RunListResponse;
use Qase\Client\Model\RunPublic;
use Qase\Client\Model\RunPublicResponse;
use Qase\Client\Model\RunResponse;
use Qase\Client\ObjectSerializer;
use RuntimeException;

/**
 * RunsApi Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RunsApi
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
     * Operation completeRun
     *
     * Complete a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return Response
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function completeRun($code, $id)
    {
        list($response) = $this->completeRunWithHttpInfo($code, $id);
        return $response;
    }

    /**
     * Operation completeRunWithHttpInfo
     *
     * Complete a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return array of \Qase\Client\Model\Response, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function completeRunWithHttpInfo($code, $id)
    {
        $request = $this->completeRunRequest($code, $id);

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
     * Create request for operation 'completeRun'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function completeRunRequest($code, $id)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling completeRun'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.completeRun, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.completeRun, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling completeRun'
            );
        }

        $resourcePath = '/run/{code}/{id}/complete';
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
     * Operation completeRunAsync
     *
     * Complete a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function completeRunAsync($code, $id)
    {
        return $this->completeRunAsyncWithHttpInfo($code, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation completeRunAsyncWithHttpInfo
     *
     * Complete a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function completeRunAsyncWithHttpInfo($code, $id)
    {
        $returnType = '\Qase\Client\Model\Response';
        $request = $this->completeRunRequest($code, $id);

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
     * Operation createRun
     *
     * Create a new run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param RunCreate $runCreate runCreate (required)
     *
     * @return IdResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createRun($code, $runCreate)
    {
        list($response) = $this->createRunWithHttpInfo($code, $runCreate);
        return $response;
    }

    /**
     * Operation createRunWithHttpInfo
     *
     * Create a new run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param RunCreate $runCreate (required)
     *
     * @return array of \Qase\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createRunWithHttpInfo($code, $runCreate)
    {
        $request = $this->createRunRequest($code, $runCreate);

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
     * Create request for operation 'createRun'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param RunCreate $runCreate (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function createRunRequest($code, $runCreate)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling createRun'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.createRun, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.createRun, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'runCreate' is set
        if ($runCreate === null || (is_array($runCreate) && count($runCreate) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $runCreate when calling createRun'
            );
        }

        $resourcePath = '/run/{code}';
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
        if (isset($runCreate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($runCreate));
            } else {
                $httpBody = $runCreate;
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
     * Operation createRunAsync
     *
     * Create a new run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param RunCreate $runCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createRunAsync($code, $runCreate)
    {
        return $this->createRunAsyncWithHttpInfo($code, $runCreate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRunAsyncWithHttpInfo
     *
     * Create a new run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param RunCreate $runCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createRunAsyncWithHttpInfo($code, $runCreate)
    {
        $returnType = '\Qase\Client\Model\IdResponse';
        $request = $this->createRunRequest($code, $runCreate);

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
     * Operation deleteRun
     *
     * Delete run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return IdResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteRun($code, $id)
    {
        list($response) = $this->deleteRunWithHttpInfo($code, $id);
        return $response;
    }

    /**
     * Operation deleteRunWithHttpInfo
     *
     * Delete run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return array of \Qase\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteRunWithHttpInfo($code, $id)
    {
        $request = $this->deleteRunRequest($code, $id);

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
     * Create request for operation 'deleteRun'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function deleteRunRequest($code, $id)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling deleteRun'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.deleteRun, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.deleteRun, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling deleteRun'
            );
        }

        $resourcePath = '/run/{code}/{id}';
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
     * Operation deleteRunAsync
     *
     * Delete run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteRunAsync($code, $id)
    {
        return $this->deleteRunAsyncWithHttpInfo($code, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteRunAsyncWithHttpInfo
     *
     * Delete run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteRunAsyncWithHttpInfo($code, $id)
    {
        $returnType = '\Qase\Client\Model\IdResponse';
        $request = $this->deleteRunRequest($code, $id);

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
     * Operation getRun
     *
     * Get a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return RunResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getRun($code, $id)
    {
        list($response) = $this->getRunWithHttpInfo($code, $id);
        return $response;
    }

    /**
     * Operation getRunWithHttpInfo
     *
     * Get a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return array of \Qase\Client\Model\RunResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getRunWithHttpInfo($code, $id)
    {
        $request = $this->getRunRequest($code, $id);

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
                    if ('\Qase\Client\Model\RunResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\RunResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\RunResponse';
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
                        '\Qase\Client\Model\RunResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getRun'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getRunRequest($code, $id)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling getRun'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.getRun, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.getRun, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling getRun'
            );
        }

        $resourcePath = '/run/{code}/{id}';
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
     * Operation getRunAsync
     *
     * Get a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getRunAsync($code, $id)
    {
        return $this->getRunAsyncWithHttpInfo($code, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRunAsyncWithHttpInfo
     *
     * Get a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getRunAsyncWithHttpInfo($code, $id)
    {
        $returnType = '\Qase\Client\Model\RunResponse';
        $request = $this->getRunRequest($code, $id);

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
     * Operation getRuns
     *
     * Get all runs.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param string[] $include Add this param to include a list of test cases into response. Possible value: cases (optional)
     * @param Filters5 $filters filters (optional)
     *
     * @return RunListResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getRuns($code, $limit = 10, $offset = 0, $include = null, $filters = null)
    {
        list($response) = $this->getRunsWithHttpInfo($code, $limit, $offset, $include, $filters);
        return $response;
    }

    /**
     * Operation getRunsWithHttpInfo
     *
     * Get all runs.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param string[] $include Add this param to include a list of test cases into response. Possible value: cases (optional)
     * @param Filters5 $filters (optional)
     *
     * @return array of \Qase\Client\Model\RunListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getRunsWithHttpInfo($code, $limit = 10, $offset = 0, $include = null, $filters = null)
    {
        $request = $this->getRunsRequest($code, $limit, $offset, $include, $filters);

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
                    if ('\Qase\Client\Model\RunListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\RunListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\RunListResponse';
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
                        '\Qase\Client\Model\RunListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getRuns'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param string[] $include Add this param to include a list of test cases into response. Possible value: cases (optional)
     * @param Filters5 $filters (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getRunsRequest($code, $limit = 10, $offset = 0, $include = null, $filters = null)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling getRuns'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.getRuns, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.getRuns, must be bigger than or equal to 2.');
        }

        if ($limit !== null && $limit > 25) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling RunsApi.getRuns, must be smaller than or equal to 25.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling RunsApi.getRuns, must be bigger than or equal to 0.');
        }

        if ($offset !== null && $offset > 100000) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling RunsApi.getRuns, must be smaller than or equal to 100000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling RunsApi.getRuns, must be bigger than or equal to 0.');
        }


        $resourcePath = '/run/{code}';
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
        if ($include !== null) {
            if ('form' === 'form' && is_array($include)) {
                foreach ($include as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['include'] = $include;
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
     * Operation getRunsAsync
     *
     * Get all runs.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param string[] $include Add this param to include a list of test cases into response. Possible value: cases (optional)
     * @param Filters5 $filters (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getRunsAsync($code, $limit = 10, $offset = 0, $include = null, $filters = null)
    {
        return $this->getRunsAsyncWithHttpInfo($code, $limit, $offset, $include, $filters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRunsAsyncWithHttpInfo
     *
     * Get all runs.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param string[] $include Add this param to include a list of test cases into response. Possible value: cases (optional)
     * @param Filters5 $filters (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getRunsAsyncWithHttpInfo($code, $limit = 10, $offset = 0, $include = null, $filters = null)
    {
        $returnType = '\Qase\Client\Model\RunListResponse';
        $request = $this->getRunsRequest($code, $limit, $offset, $include, $filters);

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
     * Operation updateRunPublicity
     *
     * Update publicity of a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param RunPublic $runPublic runPublic (required)
     *
     * @return RunPublicResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateRunPublicity($code, $id, $runPublic)
    {
        list($response) = $this->updateRunPublicityWithHttpInfo($code, $id, $runPublic);
        return $response;
    }

    /**
     * Operation updateRunPublicityWithHttpInfo
     *
     * Update publicity of a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param RunPublic $runPublic (required)
     *
     * @return array of \Qase\Client\Model\RunPublicResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateRunPublicityWithHttpInfo($code, $id, $runPublic)
    {
        $request = $this->updateRunPublicityRequest($code, $id, $runPublic);

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
                    if ('\Qase\Client\Model\RunPublicResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\RunPublicResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\RunPublicResponse';
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
                        '\Qase\Client\Model\RunPublicResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'updateRunPublicity'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param RunPublic $runPublic (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function updateRunPublicityRequest($code, $id, $runPublic)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling updateRunPublicity'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.updateRunPublicity, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling RunsApi.updateRunPublicity, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling updateRunPublicity'
            );
        }
        // verify the required parameter 'runPublic' is set
        if ($runPublic === null || (is_array($runPublic) && count($runPublic) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $runPublic when calling updateRunPublicity'
            );
        }

        $resourcePath = '/run/{code}/{id}/public';
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
        if (isset($runPublic)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($runPublic));
            } else {
                $httpBody = $runPublic;
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
     * Operation updateRunPublicityAsync
     *
     * Update publicity of a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param RunPublic $runPublic (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function updateRunPublicityAsync($code, $id, $runPublic)
    {
        return $this->updateRunPublicityAsyncWithHttpInfo($code, $id, $runPublic)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateRunPublicityAsyncWithHttpInfo
     *
     * Update publicity of a specific run.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $id Identifier. (required)
     * @param RunPublic $runPublic (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function updateRunPublicityAsyncWithHttpInfo($code, $id, $runPublic)
    {
        $returnType = '\Qase\Client\Model\RunPublicResponse';
        $request = $this->updateRunPublicityRequest($code, $id, $runPublic);

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
