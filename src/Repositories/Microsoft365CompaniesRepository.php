<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyMicrosoft365BackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyMicrosoft365ResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\ModifyCompanyResourcePayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class Microsoft365CompaniesRepository implements Repository {
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreateDeleteRequest;
	use CreatePostRequest;
	
	public function getBaseRoute(): string {
		return 'organizations/companies';
	}
	
	public function getAllResoucesForCompany( string $companyId ): RequestBuilder {
		return $this->createGetRequest( sprintf( '%s/vb365Resources', $companyId ) );
	}

	public function getCompanyForResource( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '%s/vb365Resources/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ) );
	}
	
	public function patchModifyCompanyResource( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid, ModifyCompanyResourcePayload $request ): RequestBuilder {
		return $this->createPatchRequest(
			sprintf( '%s/vb365Resources/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ),
			$request
		);
	}
	
	public function deleteCompanyForResource( string $companyId, string $vb365ResourceUid ): RequestBuilder {
		return $this->createDeleteRequest( sprintf( '%s/vb365Resources/%s', $companyId, $vb365ResourceUid ) );
	}
	
	public function deleteCompanyForBackupResource( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid ): RequestBuilder {
		return $this->createDeleteRequest( sprintf( '%s/vb365Resources/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ) );
	}
	
	public function createCompanyForResource( string $companyId, CreateCompanyMicrosoft365ResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '%s/vb365Resources', $companyId ), $request );
	}
	
	public function createCompanyForBackupResource( string $companyId, string $vb365ResourceUid, CreateCompanyMicrosoft365BackupResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '%s/vb365Resources/%s/backupResources', $companyId, $vb365ResourceUid ), $request );
	}
}