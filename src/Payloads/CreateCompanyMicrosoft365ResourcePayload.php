<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyMicrosoft365ResourcePayload implements Payload {
	private $Vb365ServerUid;
	
	private $FriendlyName;
	
	/**
	 * @param mixed $Vb365ServerUid
	 */
	public function setVb365ServerUid( $Vb365ServerUid ) {
		$this->Vb365ServerUid = $Vb365ServerUid;
		
		return $this;
	}
	
	
	/**
	 * @param mixed $FriendlyName
	 */
	public function setFriendlyName( $FriendlyName ) {
		$this->FriendlyName = $FriendlyName;
		
		return $this;
	}

	public function getBody() {
		$body = [
			"vb365ServerUid" => $this->Vb365ServerUid,
			"friendlyName" => $this->FriendlyName
		];
		
		return json_encode( $body );
	}
	
	public function getContentType(): string {
		return 'application/json';
	}
}