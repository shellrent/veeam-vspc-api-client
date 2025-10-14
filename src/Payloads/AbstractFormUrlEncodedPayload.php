<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

abstract class AbstractFormUrlEncodedPayload extends GenericPayload {
	public function __construct() {
		parent::__construct('application/x-www-form-urlencoded');
	}

	final protected function serializeBody(): string {
		return http_build_query($this->filterNullFields($this->formFields()));
	}

	abstract protected function formFields(): array;

	protected function filterNullFields(array $fields): array {
		return array_filter(
			$fields,
			static fn ($value): bool => $value !== null
		);
	}
}
