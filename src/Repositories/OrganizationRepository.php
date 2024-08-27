<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class OrganizationRepository implements Repository {
	use CreateGetRequest;
	
	public function getBaseRoute(): string {
		return 'organizations';
	}
	
	public function getOrganization( string $organizationUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s', $organizationUid ) );
	}
}