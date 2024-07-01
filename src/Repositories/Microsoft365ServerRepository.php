<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class Microsoft365ServerRepository implements Repository {
	use CreateGetRequest;
	
	public function getBaseRoute(): string {
		return 'infrastructure/vb365Servers';
	}
	
	public function getAll(): RequestBuilder {
		return $this->createGetRequest( '' );
	}
	
	public function getAllRepositoriesForServer( string $vb365ServerUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/backupRepositories', $vb365ServerUid ) );
	}

	public function getAllProxiesForServer( string $vb365ServerUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/backupProxies', $vb365ServerUid ) );
	}
}
