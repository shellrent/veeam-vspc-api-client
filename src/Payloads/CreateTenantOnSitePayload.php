<?php

namespace Shellrent\VeeamVspcApiClient\Payloads;

class CreateTenantOnSitePayload implements Payload
{

    private string $CompanyUid;

    private string $Username;

    private string $Password;

    private string $GatewayPool;

    /**
     * @param string $CompanyUid
     *
     * @return CreateTenantOnSitePayload
     */
    public function setCompanyUid( string $CompanyUid ): CreateTenantOnSitePayload {
        $this->CompanyUid = $CompanyUid;

        return $this;
    }

    /**
     * @param string $Username
     *
     * @return CreateTenantOnSitePayload
     */
    public function setUsername( string $Username ): CreateTenantOnSitePayload {
        $this->Username = $Username;

        return $this;
    }

    /**
     * @param string $Password
     *
     * @return CreateTenantOnSitePayload
     */
    public function setPassword( string $Password ): CreateTenantOnSitePayload {
        $this->Password = $Password;

        return $this;
    }

    /**
     * @param string $GatewayPool
     *
     * @return CreateTenantOnSitePayload
     */
    public function setGatewayPool( string $GatewayPool ): CreateTenantOnSitePayload {
        $this->GatewayPool = $GatewayPool;

        return $this;
    }

    public function getBody() {
        $body = [
            'type' => 'General',
            'vCloudOrganizationUid' => null,
            'credentials' => [
                'userName' => $this->Username,
                'password' => $this->Password,
            ],
            'description' => '',
            'isLeaseExpirationEnabled' => false,
            'leaseExpirationDate' => null,
            'isThrottlingEnabled' => false,
            'throttlingValue' => 1,
            'throttlingUnit' => 'MbitPerSec',
            'maxConcurrentTask' => 1,
            'isBackupProtectionEnabled' => true,
            'backupProtectionPeriod' => 1,
            'gatewaySelectionType' => 'GatewayPool',
            'gatewayPoolsUids' => [$this->GatewayPool],
            'isGatewayFailoverEnabled' => false,
            'isNativeReplicationResourcesEnabled' => false,
            'isVcdReplicationResourcesEnabled' => false,
            'assignedForCompany' => $this->CompanyUid
        ];

        return json_encode( $body );
    }

    public function getContentType(): string {
        return 'application/json';
    }
}