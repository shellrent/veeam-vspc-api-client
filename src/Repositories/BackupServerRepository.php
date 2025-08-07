<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class BackupServerRepository implements Repository {
	use CreateGetRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/backupServers';
	}
	
	public function getAll(): RequestBuilder {
		return $this->createGetRequest( '' );
	}
	
	public function getAllBackupRepositories(bool $expand = true): RequestBuilder {
		$request = $this->createGetRequest( '/repositories' );

        if ($expand) {
            $request->query([
                'expand' => 'BackupRepositoryInfo'
            ]);
        }

        return $request;
	}

	public function getBackupRepository( string $backupServerUid, string $repositoryUid, bool $expand = true ): RequestBuilder {
		$request = $this->createGetRequest( sprintf( '/%s/repositories/%s', $backupServerUid, $repositoryUid ) );

        if ($expand) {
            $request->query([
                'expand' => 'BackupRepositoryInfo'
            ]);
        }

        return $request;
	}
	
	public function getAllJobs(): RequestBuilder {
		return $this->createGetRequest( '/jobs' );
	}
	
	public function getBackupServer( string $backupServerUid ): RequestBuilder {
		return $this->createGetRequest( sprintf('/%s', $backupServerUid ) );
	}
}
