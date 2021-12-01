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
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\RequestOptions;
use InvalidArgumentException;
use Qase\Client\ApiException;
use Qase\Client\Configuration;
use Qase\Client\HeaderSelector;
use Qase\Client\Model\AttachmentListResponse;
use Qase\Client\Model\AttachmentResponse;
use Qase\Client\Model\AttachmentUploadsResponse;
use Qase\Client\Model\HashResponse;
use Qase\Client\ObjectSerializer;
use RuntimeException;
use SplFileObject;

/**
 * AttachmentsApi Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AttachmentsApi
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
     * Operation deleteAttachment
     *
     * Remove attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return HashResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteAttachment($codeOrHash)
    {
        list($response) = $this->deleteAttachmentWithHttpInfo($codeOrHash);
        return $response;
    }

    /**
     * Operation deleteAttachmentWithHttpInfo
     *
     * Remove attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return array of \Qase\Client\Model\HashResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteAttachmentWithHttpInfo($codeOrHash)
    {
        $request = $this->deleteAttachmentRequest($codeOrHash);

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
                    if ('\Qase\Client\Model\HashResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\HashResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\HashResponse';
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
                        '\Qase\Client\Model\HashResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'deleteAttachment'
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function deleteAttachmentRequest($codeOrHash)
    {
        // verify the required parameter 'codeOrHash' is set
        if ($codeOrHash === null || (is_array($codeOrHash) && count($codeOrHash) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $codeOrHash when calling deleteAttachment'
            );
        }

        $resourcePath = '/attachment/{code_or_hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($codeOrHash !== null) {
            $resourcePath = str_replace(
                '{' . 'code_or_hash' . '}',
                ObjectSerializer::toPathValue($codeOrHash),
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
     * Operation deleteAttachmentAsync
     *
     * Remove attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteAttachmentAsync($codeOrHash)
    {
        return $this->deleteAttachmentAsyncWithHttpInfo($codeOrHash)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteAttachmentAsyncWithHttpInfo
     *
     * Remove attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteAttachmentAsyncWithHttpInfo($codeOrHash)
    {
        $returnType = '\Qase\Client\Model\HashResponse';
        $request = $this->deleteAttachmentRequest($codeOrHash);

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
     * Operation getAttachment
     *
     * Get attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return AttachmentResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getAttachment($codeOrHash)
    {
        list($response) = $this->getAttachmentWithHttpInfo($codeOrHash);
        return $response;
    }

    /**
     * Operation getAttachmentWithHttpInfo
     *
     * Get attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return array of \Qase\Client\Model\AttachmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getAttachmentWithHttpInfo($codeOrHash)
    {
        $request = $this->getAttachmentRequest($codeOrHash);

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
                    if ('\Qase\Client\Model\AttachmentResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\AttachmentResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\AttachmentResponse';
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
                        '\Qase\Client\Model\AttachmentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getAttachment'
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getAttachmentRequest($codeOrHash)
    {
        // verify the required parameter 'codeOrHash' is set
        if ($codeOrHash === null || (is_array($codeOrHash) && count($codeOrHash) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $codeOrHash when calling getAttachment'
            );
        }

        $resourcePath = '/attachment/{code_or_hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($codeOrHash !== null) {
            $resourcePath = str_replace(
                '{' . 'code_or_hash' . '}',
                ObjectSerializer::toPathValue($codeOrHash),
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
     * Operation getAttachmentAsync
     *
     * Get attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getAttachmentAsync($codeOrHash)
    {
        return $this->getAttachmentAsyncWithHttpInfo($codeOrHash)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAttachmentAsyncWithHttpInfo
     *
     * Get attachment by Hash.
     *
     * @param string $codeOrHash Code or Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getAttachmentAsyncWithHttpInfo($codeOrHash)
    {
        $returnType = '\Qase\Client\Model\AttachmentResponse';
        $request = $this->getAttachmentRequest($codeOrHash);

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
     * Operation getAttachments
     *
     * Get all attachments.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return AttachmentListResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getAttachments($limit = 10, $offset = 0)
    {
        list($response) = $this->getAttachmentsWithHttpInfo($limit, $offset);
        return $response;
    }

    /**
     * Operation getAttachmentsWithHttpInfo
     *
     * Get all attachments.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return array of \Qase\Client\Model\AttachmentListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getAttachmentsWithHttpInfo($limit = 10, $offset = 0)
    {
        $request = $this->getAttachmentsRequest($limit, $offset);

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
                    if ('\Qase\Client\Model\AttachmentListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\AttachmentListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\AttachmentListResponse';
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
                        '\Qase\Client\Model\AttachmentListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getAttachments'
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getAttachmentsRequest($limit = 10, $offset = 0)
    {
        if ($limit !== null && $limit > 25) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling AttachmentsApi.getAttachments, must be smaller than or equal to 25.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling AttachmentsApi.getAttachments, must be bigger than or equal to 0.');
        }

        if ($offset !== null && $offset > 100000) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling AttachmentsApi.getAttachments, must be smaller than or equal to 100000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling AttachmentsApi.getAttachments, must be bigger than or equal to 0.');
        }


        $resourcePath = '/attachment';
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
     * Operation getAttachmentsAsync
     *
     * Get all attachments.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getAttachmentsAsync($limit = 10, $offset = 0)
    {
        return $this->getAttachmentsAsyncWithHttpInfo($limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAttachmentsAsyncWithHttpInfo
     *
     * Get all attachments.
     *
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getAttachmentsAsyncWithHttpInfo($limit = 10, $offset = 0)
    {
        $returnType = '\Qase\Client\Model\AttachmentListResponse';
        $request = $this->getAttachmentsRequest($limit, $offset);

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
     * Operation uploadAttachment
     *
     * Upload attachment.
     *
     * @param string $codeOrHash Code or Hash. (required)
     * @param SplFileObject[] $file file (optional)
     *
     * @return AttachmentUploadsResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function uploadAttachment($codeOrHash, $file = null)
    {
        list($response) = $this->uploadAttachmentWithHttpInfo($codeOrHash, $file);
        return $response;
    }

    /**
     * Operation uploadAttachmentWithHttpInfo
     *
     * Upload attachment.
     *
     * @param string $codeOrHash Code or Hash. (required)
     * @param SplFileObject[] $file (optional)
     *
     * @return array of \Qase\Client\Model\AttachmentUploadsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function uploadAttachmentWithHttpInfo($codeOrHash, $file = null)
    {
        $request = $this->uploadAttachmentRequest($codeOrHash, $file);

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
                    if ('\Qase\Client\Model\AttachmentUploadsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\AttachmentUploadsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\AttachmentUploadsResponse';
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
                        '\Qase\Client\Model\AttachmentUploadsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'uploadAttachment'
     *
     * @param string $codeOrHash Code or Hash. (required)
     * @param SplFileObject[] $file (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function uploadAttachmentRequest($codeOrHash, $file = null)
    {
        // verify the required parameter 'codeOrHash' is set
        if ($codeOrHash === null || (is_array($codeOrHash) && count($codeOrHash) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $codeOrHash when calling uploadAttachment'
            );
        }

        $resourcePath = '/attachment/{code_or_hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($codeOrHash !== null) {
            $resourcePath = str_replace(
                '{' . 'code_or_hash' . '}',
                ObjectSerializer::toPathValue($codeOrHash),
                $resourcePath
            );
        }

        // form params
        if ($file !== null) {
            $multipart = true;
            $formParams['file'] = [];
            $paramFiles = is_array($file) ? $file : [$file];
            foreach ($paramFiles as $paramFile) {
                $formParams['file'][] = Utils::tryFopen(
                    ObjectSerializer::toFormValue($paramFile),
                    'rb'
                );
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
     * Operation uploadAttachmentAsync
     *
     * Upload attachment.
     *
     * @param string $codeOrHash Code or Hash. (required)
     * @param SplFileObject[] $file (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function uploadAttachmentAsync($codeOrHash, $file = null)
    {
        return $this->uploadAttachmentAsyncWithHttpInfo($codeOrHash, $file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadAttachmentAsyncWithHttpInfo
     *
     * Upload attachment.
     *
     * @param string $codeOrHash Code or Hash. (required)
     * @param SplFileObject[] $file (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function uploadAttachmentAsyncWithHttpInfo($codeOrHash, $file = null)
    {
        $returnType = '\Qase\Client\Model\AttachmentUploadsResponse';
        $request = $this->uploadAttachmentRequest($codeOrHash, $file);

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
