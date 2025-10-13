<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class GenericPayload implements Payload {
        private $body;

        private string $contentType;

        public function __construct( $body, string $contentType = 'application/json' ) {
                $this->body = is_array( $body ) ? json_encode( $body ) : $body;
                $this->contentType = $contentType;
        }

        public function getBody() {
                return $this->body;
        }

        public function getContentType(): string {
                return $this->contentType;
        }
}
