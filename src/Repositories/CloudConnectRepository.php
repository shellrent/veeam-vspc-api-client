<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateTenantBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateTenantOnSitePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditTenantBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\Filter;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class CloudConnectRepository implements Repository {

    use CreatePostRequest;

    use CreateGetRequest;

    use CreatePatchRequest;

    use CreateDeleteRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/sites';
	}
	
	public function getAllSites(): RequestBuilder {
		return $this->createGetRequest( '' );
	}

	public function getAllTenantsByCompany(string $companyUid): RequestBuilder {
		return $this->createGetRequest( '/tenants' )
            ->filter(new Filter('assignedForCompany', Filter::OPERATION_EQUALS, $companyUid));
	}

	public function getAllCloudGatewayPools(): RequestBuilder {
		return $this->createGetRequest( '/cloudgatewaypools' );
	}

    public function postCreateTenantOnSite( string $siteUid, CreateTenantOnSitePayload $request ): RequestBuilder {
        return $this->createPostRequest( sprintf( '/%s/tenants', $siteUid ), $request );
    }

    public function postCreateTenantBackupResource( string $tenantUid, CreateTenantBackupResourcePayload $request ): RequestBuilder {
        return $this->createPostRequest( sprintf( '/tenants/%s/backupResources', $tenantUid ), $request );
    }

    public function getAllTenantBackupResources( string $tenantUid ): RequestBuilder {
        return $this->createGetRequest( sprintf('/tenants/%s/backupResources', $tenantUid ));
    }

    public function getTenantBackupResourceUsage( string $tenantUid ): RequestBuilder {
        return $this->createGetRequest( sprintf( '/tenants/%s/backupResources/usage', $tenantUid ) );
    }

    public function deleteTenantBackupResource( string $tenantUid, string $resourceUid ): RequestBuilder {
        return $this->createDeleteRequest( sprintf( '/tenants/%s/backupResources/%s', $tenantUid, $resourceUid ) );
    }

    public function patchEditTenantBackupResource( string $tenantUid, string $resourceUid, EditTenantBackupResourcePayload $payload ): RequestBuilder {
        return $this->createPatchRequest( sprintf( '/tenants/%s/backupResources/%s', $tenantUid, $resourceUid ), $payload );
    }
}
