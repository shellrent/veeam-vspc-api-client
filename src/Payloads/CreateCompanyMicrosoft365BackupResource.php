<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyMicrosoft365BackupResource implements Payload {
	private $RepositoryUid;
	
	private $ProxyUid;
	
	private $UsersQuota;
	
	private $IsUsersQuotaUnlimited;
	
	
	/**
	 * @param mixed $RepositoryUid
	 */
	public function setRepositoryUid( $RepositoryUid ) {
		$this->RepositoryUid = $RepositoryUid;
		
		return $this;
	}
	
	
	/**
	 * @param mixed $ProxyUid
	 */
	public function setProxyUid( $ProxyUid ) {
		$this->ProxyUid = $ProxyUid;
		
		return $this;
	}
	
	
	/**
	 * @param mixed $UsersQuota
	 */
	public function setUsersQuota( $UsersQuota ) {
		$this->UsersQuota = $UsersQuota;
		
		return $this;
	}
	
	
	/**
	 * @param mixed $IsUsersQuotaUnlimited
	 */
	public function setIsUsersQuotaUnlimited( $IsUsersQuotaUnlimited ) {
		$this->IsUsersQuotaUnlimited = $IsUsersQuotaUnlimited;
		
		return $this;
	}
	
	public function getBody() {
		$body = [
			"repositoryUid" => $this->RepositoryUid,
			"proxyUid" => $this->ProxyUid,
			"usersQuota" => $this->UsersQuota ?? null,
			"isUsersQuotaUnlimited" => $this->IsUsersQuotaUnlimited ?? null,
		];
		
		return json_encode( $body );
	}
	
	public function getContentType(): string {
		return 'application/json';
	}
}