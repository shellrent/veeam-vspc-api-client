<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

use JsonSerializable;

abstract class AbstractJsonPayload extends GenericPayload implements JsonSerializable {
	public function __construct() {
		parent::__construct('application/json');
	}

	final protected function serializeBody(): string {
		return self::encodeJson($this->jsonSerialize());
	}

	abstract public function jsonSerialize(): array;
}
