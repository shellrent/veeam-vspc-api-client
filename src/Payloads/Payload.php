<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

interface Payload {
	public function getBody(): string;

	public function getContentType(): string;
}
