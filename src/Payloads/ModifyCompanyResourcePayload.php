<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class ModifyCompanyResourcePayload implements Payload {
	private ?int $UsersQuota = null;
	
	private ?int $UsersQuotaUnlimited = null;
	
	public function setUsersQuota( ?int $UsersQuota ) {
		$this->UsersQuota = $UsersQuota;
		
		return $this;
	}
	
	public function setUsersQuotaUnlimited( ?int $UsersQuotaUnlimited ) {
		$this->UsersQuotaUnlimited = $UsersQuotaUnlimited;
		
		return $this;
	}
	
	public function getBody(): string {
		$body = [];
		
		if ( !is_null( $this->UsersQuota ) ) {
			$body[] = [
				'value' => $this->UsersQuota,
				'path' => '/usersQuota',
				'op' => 'replace',
			];
		}
		
		if ( !is_null( $this->UsersQuotaUnlimited ) ) {
			$body[] = [
				'value' => $this->UsersQuotaUnlimited,
				'path' => '/isUsersQuotaUnlimited',
				'op' => 'replace',
			];
		}
		
		return json_encode( $body );
	}
	
	public function getContentType(): string {
		return 'application/json';
	}
}
