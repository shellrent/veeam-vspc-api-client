<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class Microsoft365CompaniesRepository implements Repository {
	use CreateGetRequest;
	
	public function getBaseRoute(): string {
		return 'organizations/companies';
	}
	
	
	public function getResoucesByCompanyId( string $companyId ): RequestBuilder {
		return $this->createGetRequest( sprintf( '%s/vb365Resources', $companyId ) );
	}

	public function getBackupForResouceId( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '%s/vb365Resources/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ) );
	}
}