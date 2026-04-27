<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateTenantBackupResourcePayload implements Payload {
	private string $RepositoryUid;
	
	private string $RepositoryName;
	
	private int $StorageQuota;
	
	private ?int $ServerQuota = null;
	
	private ?int $WorkstationQuota = null;
	
	private ?int $VmQuota = null;
	
	private bool $IsServersQuotaUnlimited = false;
	
	private bool $IsWorkstationsQuotaUnlimited = false;
	
	private bool $IsVmsQuotaUnlimited = false;
	
	private bool $IsWanAccelerationEnabled = false;
	
	private ?string $WanAcceleratorUid = null;
	
	private bool $IsDefault = true;
	
	/**
	 * @param string $RepositoryUid
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setRepositoryUid( string $RepositoryUid ): CreateTenantBackupResourcePayload {
		$this->RepositoryUid = $RepositoryUid;
		
		return $this;
	}
	
	/**
	 * @param string $RepositoryName
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setRepositoryName( string $RepositoryName ): CreateTenantBackupResourcePayload {
		$this->RepositoryName = $RepositoryName;
		
		return $this;
	}
	
	/**
	 * @param string $StorageQuota
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setStorageQuota( int $StorageQuota ): CreateTenantBackupResourcePayload {
		$this->StorageQuota = $StorageQuota;
		
		return $this;
	}
	
	/**
	 * @param string $ServerQuota
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setServerQuota( int $ServerQuota ): CreateTenantBackupResourcePayload {
		$this->ServerQuota = $ServerQuota;
		
		return $this;
	}
	
	/**
	 * @param string $WorkstationQuota
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setWorkstationQuota( int $WorkstationQuota ): CreateTenantBackupResourcePayload {
		$this->WorkstationQuota = $WorkstationQuota;
		
		return $this;
	}
	
	/**
	 * @param string $VmQuota
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setVmQuota( int $VmQuota ): CreateTenantBackupResourcePayload {
		$this->VmQuota = $VmQuota;
		
		return $this;
	}
	
	/**
	 * @param bool $IsServersQuotaUnlimited
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setIsServersQuotaUnlimited( bool $IsServersQuotaUnlimited ): CreateTenantBackupResourcePayload {
		$this->IsServersQuotaUnlimited = $IsServersQuotaUnlimited;

		return $this;
	}
	
	/**
	 * @param bool $IsWorkstationsQuotaUnlimited
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setIsWorkstationsQuotaUnlimited( bool $IsWorkstationsQuotaUnlimited ): CreateTenantBackupResourcePayload {
		$this->IsWorkstationsQuotaUnlimited = $IsWorkstationsQuotaUnlimited;

		return $this;
	}
	
	/**
	 * @param bool $IsVmsQuotaUnlimited
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setIsVmsQuotaUnlimited( bool $IsVmsQuotaUnlimited ): CreateTenantBackupResourcePayload {
		$this->IsVmsQuotaUnlimited = $IsVmsQuotaUnlimited;

		return $this;
	}
	
	/**
	 * @param bool $IsWanAccelerationEnabled
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setIsWanAccelerationEnabled( bool $IsWanAccelerationEnabled ): CreateTenantBackupResourcePayload {
		$this->IsWanAccelerationEnabled = $IsWanAccelerationEnabled;

		return $this;
	}
	
	/**
	 * @param string|null $WanAcceleratorUid
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setWanAcceleratorUid( ?string $WanAcceleratorUid ): CreateTenantBackupResourcePayload {
		$this->WanAcceleratorUid = $WanAcceleratorUid;

		return $this;
	}
	
	/**
	 * @param bool $IsDefault
	 *
	 * @return CreateTenantBackupResourcePayload
	 */
	public function setIsDefault( bool $IsDefault ): CreateTenantBackupResourcePayload {
		$this->IsDefault = $IsDefault;

		return $this;
	}
	
	public function getBody(): string {
		$body = [
			'repositoryUid' => $this->RepositoryUid,
			'cloudRepositoryName' => $this->RepositoryName,
			'storageQuota' => $this->StorageQuota,
			'serversQuota' => $this->ServerQuota,
			'isServersQuotaUnlimited' => $this->IsServersQuotaUnlimited,
			'workstationsQuota' => $this->WorkstationQuota,
			'isWorkstationsQuotaUnlimited' => $this->IsWorkstationsQuotaUnlimited,
			'vmsQuota' => $this->VmQuota,
			'isVmsQuotaUnlimited' => $this->IsVmsQuotaUnlimited,
			'isWanAccelerationEnabled' => $this->IsWanAccelerationEnabled,
			'wanAcceleratorUid' => $this->WanAcceleratorUid,
			'isDefault' => $this->IsDefault,
		];
		
		return json_encode( $body );
	}
	
	public function getContentType(): string {
		return 'application/json';
	}
}
