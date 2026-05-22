<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateCompanyPayload implements Payload {
	private string $Name;
	
	private ?string $Alias = null;
	
	private ?string $TaxId = null;
	
	private ?string $Email = null;
	
	private ?string $Phone = null;
	
	private ?int $Country = null;
	
	private ?string $City = null;
	
	private ?string $Street = null;
	
	private ?int $ZipCode = null;
	
	private ?int $CompanyId = null;
	
	private ?string $ResellerUid = null;

	private ?string $SubscriptionPlanUid = null;

    private bool $IsRestAccessEnabled = true;

    private bool $IsAlarmDetectEnabled = true;

    private string $Username;

    private string $Password;

    private bool $IsBackupAgentsManagementEnabled = true;

    private ?bool $BackupAgentsManagementHardQuota = null;

    private ?int $BackupAgentsManagementWorkstationAgentsQuota = null;

    private ?int $BackupAgentsManagementServerAgentsQuota = null;

    private bool $IsBackupServersManagementEnabled = true;

    private ?int $BackupServersManagementBackupServerQuota = null;

	/**
	 * @param mixed $Name
	 *
	 * @return CreateCompanyPayload
	 */
	public function setName( $Name ) {
		$this->Name = $Name;

		return $this;
	}
	
	/**
	 * @param mixed $Alias
	 *
	 * @return CreateCompanyPayload
	 */
	public function setAlias( $Alias ) {
		$this->Alias = $Alias;

		return $this;
	}
	
	/**
	 * @param mixed $TaxId
	 *
	 * @return CreateCompanyPayload
	 */
	public function setTaxId( $TaxId ) {
		$this->TaxId = $TaxId;

		return $this;
	}
	
	/**
	 * @param mixed $Email
	 *
	 * @return CreateCompanyPayload
	 */
	public function setEmail( $Email ) {
		$this->Email = $Email;

		return $this;
	}
	
	/**
	 * @param mixed $Phone
	 *
	 * @return CreateCompanyPayload
	 */
	public function setPhone( $Phone ) {
		$this->Phone = $Phone;

		return $this;
	}
	
	/**
	 * @param mixed $Country
	 *
	 * @return CreateCompanyPayload
	 */
	public function setCountry( $Country ) {
		$this->Country = $Country;

		return $this;
	}
	
	/**
	 * @param mixed $City
	 *
	 * @return CreateCompanyPayload
	 */
	public function setCity( $City ) {
		$this->City = $City;

		return $this;
	}
	
	/**
	 * @param mixed $Street
	 *
	 * @return CreateCompanyPayload
	 */
	public function setStreet( $Street ) {
		$this->Street = $Street;

		return $this;
	}
	
	/**
	 * @param mixed $ZipCode
	 *
	 * @return CreateCompanyPayload
	 */
	public function setZipCode( $ZipCode ) {
		$this->ZipCode = $ZipCode;

		return $this;
	}
	
	/**
	 * @param mixed $CompanyId
	 *
	 * @return CreateCompanyPayload
	 */
	public function setCompanyId( $CompanyId ) {
		$this->CompanyId = $CompanyId;

		return $this;
	}
	
	/**
	 * @param string|null $ResellerUid
	 *
	 * @return CreateCompanyPayload
	 */
	public function setResellerUid( ?string $ResellerUid ): CreateCompanyPayload {
		$this->ResellerUid = $ResellerUid;

		return $this;
	}
	
	/**
	 * @param string|null $SubscriptionPlanUid
	 *
	 * @return CreateCompanyPayload
	 */
	public function setSubscriptionPlanUid( ?string $SubscriptionPlanUid ): CreateCompanyPayload {
		$this->SubscriptionPlanUid = $SubscriptionPlanUid;

		return $this;
	}
	
	/**
	 * @param bool $IsRestAccessEnabled
	 *
	 * @return CreateCompanyPayload
	 */
	public function setIsRestAccessEnabled( bool $IsRestAccessEnabled ): CreateCompanyPayload {
		$this->IsRestAccessEnabled = $IsRestAccessEnabled;

		return $this;
	}

    /**
     * @param string $Username
     *
     * @return CreateCompanyPayload
     */
    public function setUsername( string $Username ): CreateCompanyPayload {
        $this->Username = $Username;

        return $this;
    }

    /**
     * @param string $Password
     *
     * @return CreateCompanyPayload
     */
    public function setPassword( string $Password ): CreateCompanyPayload {
        $this->Password = $Password;

        return $this;
    }

	/**
	 * @param bool $IsAlarmDetectEnabled
	 *
	 * @return CreateCompanyPayload
	 */
	public function setIsAlarmDetectEnabled( bool $IsAlarmDetectEnabled ): CreateCompanyPayload {
		$this->IsAlarmDetectEnabled = $IsAlarmDetectEnabled;

		return $this;
	}

    /**
     * @param bool $IsBackupAgentsManagementEnabled
     * @return $this
     */
    public function setIsBackupAgentsManagementEnabled( bool $IsBackupAgentsManagementEnabled ): CreateCompanyPayload {
        $this->IsBackupAgentsManagementEnabled = $IsBackupAgentsManagementEnabled;

        return $this;
    }

    /**
     * @param null|bool $BackupAgentsManagementHardQuota
     * @return $this
     */
    public function setBackupAgentsManagementHardQuota( ?bool $BackupAgentsManagementHardQuota ): CreateCompanyPayload {
        $this->BackupAgentsManagementHardQuota = $BackupAgentsManagementHardQuota;

        return $this;
    }

    /**
     * @param null|int $BackupAgentsManagementWorkstationAgentsQuota
     * @return $this
     */
    public function setBackupAgentsManagementWorkstationAgentsQuota( ?int $BackupAgentsManagementWorkstationAgentsQuota ): CreateCompanyPayload {
        $this->BackupAgentsManagementWorkstationAgentsQuota = $BackupAgentsManagementWorkstationAgentsQuota;

        return $this;
    }

    /**
     * @param null|int $BackupAgentsManagementServerAgentsQuota
     * @return $this
     */
    public function setBackupAgentsManagementServerAgentsQuota( ?int $BackupAgentsManagementServerAgentsQuota ): CreateCompanyPayload {
        $this->BackupAgentsManagementServerAgentsQuota = $BackupAgentsManagementServerAgentsQuota;

        return $this;
    }

    /**
     * @param bool $IsBackupServersManagementEnabled
     * @return $this
     */
    public function setIsBackupServersManagementEnabled( bool $IsBackupServersManagementEnabled ): CreateCompanyPayload {
        $this->IsBackupServersManagementEnabled = $IsBackupServersManagementEnabled;

        return $this;
    }

    /**
     * @param null|int $BackupServersManagementBackupServerQuota
     * @return $this
     */
    public function setBackupServersManagementBackupServerQuota( ?int $BackupServersManagementBackupServerQuota ): CreateCompanyPayload {
        $this->BackupServersManagementBackupServerQuota = $BackupServersManagementBackupServerQuota;

        return $this;
    }

	public function getBody() {

        $remoteServices = [];
        if ($this->IsBackupAgentsManagementEnabled) {
            $remoteServices = [
                'backupAgentsManagement' => [
                    'isHardQuotaEnabled' => $this->BackupAgentsManagementHardQuota ?? false,
                    'workstationAgentsQuota' => $this->BackupAgentsManagementWorkstationAgentsQuota ?? null,
                    'serverAgentsQuota' => $this->BackupAgentsManagementServerAgentsQuota ?? null
                ]
            ];
        }

        if ($this->IsBackupServersManagementEnabled) {
            $remoteServices = [
                'backupServersManagement' => [
                    'backupServerQuota' => $this->BackupServersManagementBackupServerQuota ?? null,
                ]
            ];
        }

		$array = [
			'resellerUid' => $this->ResellerUid,
			'organizationInput' => [
				'name' => $this->Name,
				'alias' => $this->Alias ?? null,
				'taxId' => $this->TaxId ?? null,
				'email' => $this->Email ?? null,
				'phone' => $this->Phone ?? null,
				'country' => $this->Country ?? null,
				'city' => $this->City ?? null,
				'street' => $this->Street ?? null,
				'zipCode' => $this->ZipCode ?? null,
				'companyId' => $this->CompanyId ?? null,
			],
            'ownerCredentials' => [
                'userName' => $this->Username,
                'password' => $this->Password
            ],
			'subscriptionPlanUid' => $this->SubscriptionPlanUid,
			'isRestAccessEnabled' => $this->IsRestAccessEnabled,
			'IsAlarmDetectEnabled' => $this->IsAlarmDetectEnabled,
		];

        if ($remoteServices) {
            $array['companyServices'] = [
                'remoteServices' => $remoteServices
            ];
        }
		
		return json_encode( $array );
	}
	
	public function getContentType(): string {
		return 'application/json';
	}
}
