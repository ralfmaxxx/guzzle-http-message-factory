<?php

namespace Http\Message\Guzzle;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Http\Message\MessageFactory as MessageFactoryInterface;

class MessageFactory implements MessageFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createRequest(
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ) {
        return new Request($method, $uri, $headers, $body, $protocolVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function createResponse(
        $statusCode = 200,
        $reasonPhrase = null,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ) {
        return new Response($statusCode, $headers, $body, $protocolVersion, $reasonPhrase);
    }
}
