<?php

namespace Skymail\VeeamVspcApiClient\Repositories;

use Skymail\VeeamVspcApiClient\Support\CreateGetRequest;
use Skymail\VeeamVspcApiClient\Support\RequestBuilder;

class BackupServerRepository implements Repository {
	use CreateGetRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/backupServers';
	}

	public function getAll(): RequestBuilder {
		return $this->createGetRequest( '' );
	}

	public function getAllBackupRepositories(): RequestBuilder {
		return $this->createGetRequest( '/repositories' );
	}

	public function getBackupRepository( string $backupServerUid, string $repositoryUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/repositories/%s', $backupServerUid, $repositoryUid ) );
	}

	public function getAllJobs($offset, $limit, $order): RequestBuilder {
		if ($order) {
			return $this->createGetRequest( '/jobs?limit=' . $limit . '&offset=' . $offset . '&sort=' . $order);
		}
		return $this->createGetRequest( '/jobs?limit=' . $limit . '&offset=' . $offset );
	}

	public function getAllAgentJobs(): RequestBuilder {
		return $this->createGetRequest( '/jobs/agentJobs' );
	}

	public function getAllSimpleBackupCopyObjects($jobUid): RequestBuilder {
		return $this->createGetRequest( sprintf( '/jobs/simpleBackupCopyJobs/%s/objects', $jobUid) );
	}

	public function getAllBackupVmJobsObjects($jobUid): RequestBuilder {
		return $this->createGetRequest( sprintf( '/jobs/backupVmJobs/%s/objects', $jobUid) );
	}
}
