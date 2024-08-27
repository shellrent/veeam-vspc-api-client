<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyMicrosoft365BackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyMicrosoft365ResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanySiteResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanyBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\ModifyCompanyPayload;
use Shellrent\VeeamVspcApiClient\Payloads\ModifyCompanyResourcePayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class CompanyRepository implements Repository {
	use CreatePostRequest;

	use CreateGetRequest;

	use CreatePatchRequest;
	
	use CreateDeleteRequest;
	
	public function getBaseRoute(): string {
		return 'organizations/companies';
	}
	
	public function getAll(): RequestBuilder {
		return $this->createGetRequest( '/' );
	}
	
	public function getAllSites( string $companyUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/sites', $companyUid ) );
	}
	
	public function getAllCompanyBackupResources( string $companyUid, string $siteUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/sites/%s/backupResources', $companyUid, $siteUid ) );
	}
	
	public function getBackupResourceUsage( string $companyUid, string $siteUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/sites/%s/backupResources/usage', $companyUid, $siteUid ) );
	}
	
	public function postCreate( CreateCompanyPayload $request ): RequestBuilder {
		return $this->createPostRequest( '', $request );
	}
	
	public function patchModifyCompany( string $companyUid, ModifyCompanyPayload $payload ): RequestBuilder {
		return $this->createPatchRequest( sprintf( '/%s', $companyUid ), $payload );
	}
	
	public function postCreateCompanySiteResource( string $companyUid, CreateCompanySiteResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '/%s/sites', $companyUid ), $request );
	}
	
	public function postCreateCompanyBackupResource( string $companyUid, string $siteUid, CreateCompanyBackupResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '/%s/sites/%s/backupResources', $companyUid, $siteUid ), $request );
	}
	
	public function patchEditCompanyBackupResource( string $companyUid, string $siteUid, string $resourceUid, EditCompanyBackupResourcePayload $payload ): RequestBuilder {
		return $this->createPatchRequest( sprintf( '/%s/sites/%s/backupResources/%s', $companyUid, $siteUid, $resourceUid ), $payload );
	}
	
	public function delete( string $companyUid ): RequestBuilder {
		return $this->createDeleteRequest( '/' . $companyUid );
	}
	
	public function get( string $companyUid ): RequestBuilder {
		return $this->createGetRequest( '/' . $companyUid );
	}
	
	public function deleteCompanyBackupResource( string $companyUid, string $siteUid, string $resourceUid ): RequestBuilder {
		return $this->createDeleteRequest( sprintf( '/%s/sites/%s/backupResources/%s', $companyUid, $siteUid, $resourceUid ) );
	}
	
	public function getAllCompanyVb365Resources( string $companyId ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/vb365Resources', $companyId ) );
	}
	
	public function getAllCompanyVb365BackupResources( string $companyId, string $vb365ResourceUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/vb365Resources/%s/backupResources', $companyId, $vb365ResourceUid ) );
	}
	
	public function getCompanyVb365BackupResource( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/vb365Resources/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ) );
	}
	
	public function patchModifyCompanyVb365Resource( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid, ModifyCompanyResourcePayload $request ): RequestBuilder {
		return $this->createPatchRequest(
			sprintf( '/%s/vb365Resources/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ),
			$request
		);
	}
	
	public function deleteCompanyVb365Resource( string $companyId, string $vb365ResourceUid ): RequestBuilder {
		return $this->createDeleteRequest( sprintf( '/%s/vb365Resources/%s', $companyId, $vb365ResourceUid ) );
	}
	
	public function deleteCompanyVb365BackupResources( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid ): RequestBuilder {
		return $this->createDeleteRequest( sprintf( '/%s/vb365Resources/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ) );
	}
	
	public function createCompanyVb365Resource( string $companyId, CreateCompanyMicrosoft365ResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '/%s/vb365Resources', $companyId ), $request );
	}
	
	public function createCompanyVb365BackupResource( string $companyId, string $vb365ResourceUid, CreateCompanyMicrosoft365BackupResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '/%s/vb365Resources/%s/backupResources', $companyId, $vb365ResourceUid ), $request );
	}
}
