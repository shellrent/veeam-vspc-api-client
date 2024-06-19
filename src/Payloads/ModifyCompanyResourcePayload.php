<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class ModifyCompanyResourcePayload implements Payload {
	private array $Modifiers = [];
	
	public function addModifier( $value, string $path, string $operation, string $from = null ) {
		$this->Modifiers[] = [
			'value' => $value,
			'path' => $path,
			'op' => $operation,
			'from' => $from
		];
		
		return $this;
	}
	
	public function getBody() {
		return json_encode( $this->Modifiers );
	}
	
	public function getContentType(): string {
		return 'application/json';
	}
}