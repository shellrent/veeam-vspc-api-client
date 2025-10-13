<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

abstract class GenericPayload implements Payload {
	private string $contentType;

	public function __construct(string $contentType = 'application/json') {
		$this->contentType = $contentType;
	}

	public function getBody(): string {
		return $this->serializeBody();
	}

	public function getContentType(): string {
		return $this->contentType;
	}

	abstract protected function serializeBody(): string;

	protected static function encodeJson(array $payload): string {
		return json_encode($payload, JSON_THROW_ON_ERROR);
	}

	public static function fromArray(array $payload, string $contentType = 'application/json'): Payload {
		return new class($payload, $contentType) extends GenericPayload {
			private array $payload;

			public function __construct(array $payload, string $contentType) {
				parent::__construct($contentType);
				$this->payload = $payload;
			}

			protected function serializeBody(): string {
				return self::encodeJson($this->payload);
			}
		};
	}

	public static function fromString(string $body, string $contentType): Payload {
		return new class($body, $contentType) extends GenericPayload {
			private string $body;

			public function __construct(string $body, string $contentType) {
				parent::__construct($contentType);
				$this->body = $body;
			}

			protected function serializeBody(): string {
				return $this->body;
			}
		};
	}
}
