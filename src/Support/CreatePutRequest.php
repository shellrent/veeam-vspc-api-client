<?php

namespace Shellrent\VeeamVspcApiClient\Support;

use Shellrent\VeeamVspcApiClient\Payloads\Payload;

trait CreatePutRequest {
        protected function createPutRequest( string $url, ?Payload $payload = null, array $options = [] ): RequestBuilder {
                $uri = $this->getBaseRoute() . $url;

                if ( $payload && $payload->getContentType() ) {
                        $options['Content-Type'] = $payload->getContentType();
                }

                return new RequestBuilder( 'PUT', $uri, $options, $payload ? $payload->getBody() : null );
        }
}
