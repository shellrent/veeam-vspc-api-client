<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\EditBackupServerJobPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class BackupServerJobRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/backupServers';
	}

	/**
	 * Get All Jobs Returns a collection resource representation of all jobs on all Veeam Backup & Replication servers.
	 * Path: /infrastructure/backupServers/jobs
	 */
	public function getBackupServerJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Agent Jobs Returns a collection resource representation of all backup agent jobs.
	 * Path: /infrastructure/backupServers/jobs/agentJobs
	 */
	public function getBackupServerAgentJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/agentJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Backup Agent Jobs Returns a collection resource representation of all backup agent job objects.
	 * Path: /infrastructure/backupServers/jobs/agentJobs/objects
	 */
	public function getBackupServerAgentJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/agentJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Backup Agent Job Returns a resource representation of a backup agent job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/agentJobs/{jobUid}
	 */
	public function getBackupServerAgentJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/agentJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Backup Agent Job Returns a collection resource representation of all objects of a backup agent job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/agentJobs/{jobUid}/objects
	 */
	public function getBackupServerAgentJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/agentJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Periodic Backup Copy Jobs Returns a collection resource representation of all periodic backup copy and legacy periodic backup copy jobs.
	 * Path: /infrastructure/backupServers/jobs/backupCopyJobs
	 */
	public function getBackupServerBackupCopyJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/backupCopyJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Periodic Backup Copy Jobs Returns a collection resource representation of objects of all periodic backup copy and legacy periodic backup copy jobs.
	 * Path: /infrastructure/backupServers/jobs/backupCopyJobs/jobObjects
	 */
	public function getBackupServerBackupCopyJobsLinkedJobObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/backupCopyJobs/jobObjects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Periodic Backup Copy Job Returns a resource representation of a periodic backup copy or legacy periodic backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/backupCopyJobs/{jobUid}
	 */
	public function getBackupServerBackupCopyJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/backupCopyJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Periodic Backup Copy Job Returns a collection resource representation of all objects of a periodic backup copy or legacy periodic backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/backupCopyJobs/{jobUid}/jobObjects
	 */
	public function getBackupServerBackupCopyJobLinkedJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/backupCopyJobs/%s/jobObjects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup to Tape Jobs Returns a collection resource representation of all backup to tape jobs.
	 * Path: /infrastructure/backupServers/jobs/backupTapeJobs
	 */
	public function getBackupServerBackupTapeJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/backupTapeJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Job Objects of Backup to Tape Jobs Returns a collection resource representation of all jobs processed by backup to tape jobs.
	 * Path: /infrastructure/backupServers/jobs/backupTapeJobs/jobObjects
	 */
	public function getBackupServerBackupTapeJobsLinkedJobObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/backupTapeJobs/jobObjects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Repository Objects of Backup to Tape Jobs Returns a collection resource representation of all repositories processed by backup to tape jobs.
	 * Path: /infrastructure/backupServers/jobs/backupTapeJobs/repositoryObjects
	 */
	public function getBackupServerBackupTapeJobsLinkedRepositoryObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/backupTapeJobs/repositoryObjects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Backup to Tape Job Returns a resource representation of a backup to tape job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/backupTapeJobs/{jobUid}
	 */
	public function getBackupServerBackupTapeJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/backupTapeJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Job Objects of Backup to Tape Job Returns a collection resource representation of all jobs processed by a backup to tape job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/backupTapeJobs/{jobUid}/jobObjects
	 */
	public function getBackupServerBackupTapeJobLinkedJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/backupTapeJobs/%s/jobObjects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Repository Objects of Backup to Tape Job Returns a collection resource representation of all repositories processed by a backup to tape job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/backupTapeJobs/{jobUid}/repositoryObjects
	 */
	public function getBackupServerBackupTapeJobLinkedRepositoryObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/backupTapeJobs/%s/repositoryObjects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VM Backup Jobs Returns a collection resource representation of all backup jobs that protect VMs.
	 * Path: /infrastructure/backupServers/jobs/backupVmJobs
	 */
	public function getBackupServerBackupVmJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/backupVmJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of VM Backup Jobs Returns a collection resource representation of all VM backup job objects.
	 * Path: /infrastructure/backupServers/jobs/backupVmJobs/objects
	 */
	public function getBackupServerBackupVmJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/backupVmJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VM Backup Job Returns a resource representation of a backup job with the specified UID that protects VMs.
	 * Path: /infrastructure/backupServers/jobs/backupVmJobs/{jobUid}
	 */
	public function getBackupServerBackupVmJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/backupVmJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of VM Backup Job Returns a collection resource representation of all objects of a VM backup job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/backupVmJobs/{jobUid}/objects
	 */
	public function getBackupServerBackupVmJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/backupVmJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All CDP Replication Jobs Returns a collection resource representation of all CDP replication jobs.
	 * Path: /infrastructure/backupServers/jobs/cdpReplicationJobs
	 */
	public function getBackupServerCdpReplicationJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/cdpReplicationJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of CDP Replication Jobs Returns a collection resource representation of all CDP replication job objects.
	 * Path: /infrastructure/backupServers/jobs/cdpReplicationJobs/objects
	 */
	public function getBackupServerCdpReplicationJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/cdpReplicationJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get CDP Replication Job Returns a resource representation of a CDP replication job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/cdpReplicationJobs/{jobUid}
	 */
	public function getBackupServerCdpReplicationJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/cdpReplicationJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of CDP Replication Job Returns a collection resource representation of all objects of a CDP replication job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/cdpReplicationJobs/{jobUid}/objects
	 */
	public function getBackupServerCdpReplicationJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/cdpReplicationJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File Copy Jobs Returns a collection resource representation of all file copy jobs.
	 * Path: /infrastructure/backupServers/jobs/fileCopyJobs
	 */
	public function getBackupServerFileCopyJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/fileCopyJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get File Copy Job Returns a resource representation of a file copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/fileCopyJobs/{jobUid}
	 */
	public function getBackupServerFileCopyJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/fileCopyJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File Share Copy Jobs Returns a collection resource representation of all backup copy jobs for file shares.
	 * Path: /infrastructure/backupServers/jobs/fileShareCopyJobs
	 */
	public function getBackupServerFileShareCopyJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/fileShareCopyJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File Share Copy Jobs Returns a collection resource representation of all file share backup copy job objects.
	 * Path: /infrastructure/backupServers/jobs/fileShareCopyJobs/objects
	 */
	public function getBackupServerFileShareCopyJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/fileShareCopyJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get File Share Copy Job Returns a resource representation of a file share backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/fileShareCopyJobs/{jobUid}
	 */
	public function getBackupServerFileShareCopyJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/fileShareCopyJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File Share Copy Job Returns a collection resource representation of all objects of a file share backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/fileShareCopyJobs/{jobUid}/objects
	 */
	public function getBackupServerFileShareCopyJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/fileShareCopyJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File Share Jobs Returns a collection resource representation of all file share jobs.
	 * Path: /infrastructure/backupServers/jobs/fileShareJobs
	 */
	public function getBackupServerFileShareJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/fileShareJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File Share Jobs Returns a collection resource representation of all file share job objects.
	 * Path: /infrastructure/backupServers/jobs/fileShareJobs/objects
	 */
	public function getBackupServerFileShareJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/fileShareJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get File Share Job Returns a resource representation of a file share job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/fileShareJobs/{jobUid}
	 */
	public function getBackupServerFileShareJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/fileShareJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File Share Job Returns a collection resource representation of all objects of a file share job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/fileShareJobs/{jobUid}/objects
	 */
	public function getBackupServerFileShareJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/fileShareJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File to Tape Jobs Returns a collection resource representation of all file to tape jobs.
	 * Path: /infrastructure/backupServers/jobs/fileTapeJobs
	 */
	public function getBackupServerFileTapeJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/fileTapeJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File to Tape Jobs Returns a collection resource representation of all file to tape job objects.
	 * Path: /infrastructure/backupServers/jobs/fileTapeJobs/objects
	 */
	public function getBackupServerFileTapeJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/fileTapeJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get File to Tape Job Returns a resource representation of a file to tape job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/fileTapeJobs/{jobUid}
	 */
	public function getBackupServerFileTapeJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/fileTapeJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File to Tape Job Returns a collection resource representation of all objects of a file to tape job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/fileTapeJobs/{jobUid}/objects
	 */
	public function getBackupServerFileTapeJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/fileTapeJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Object Storage Backup Copy Jobs Returns a collection resource representation of all backup copy jobs for object storage backups.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupCopyJobs
	 */
	public function getBackupServerObjectStorageBackupCopyJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/objectStorageBackupCopyJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Object Storage Backup Copy Jobs Returns a collection resource representation of all object storage backup backup copy job objects.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupCopyJobs/objects
	 */
	public function getBackupServerObjectStorageBackupCopyJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/objectStorageBackupCopyJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Object Storage Backup Copy Job Returns a resource representation of a object storage backup backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupCopyJobs/{jobUid}
	 */
	public function getBackupServerObjectStorageBackupCopyJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/objectStorageBackupCopyJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Object Storage Backup Copy Job Returns a collection resource representation of all objects of a object storage backup backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupCopyJobs/{jobUid}/objects
	 */
	public function getBackupServerObjectStorageBackupCopyJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/objectStorageBackupCopyJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Object Storage Backup Jobs Returns a collection resource representation of all object storage backup jobs.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupJobs
	 */
	public function getBackupServerObjectStorageBackupJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/objectStorageBackupJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Object Storage Backup Jobs Returns a collection resource representation of all object storage backup job objects.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupJobs/objects
	 */
	public function getBackupServerObjectStorageBackupJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/objectStorageBackupJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Object Storage Backup Job Returns a resource representation of a object storage backup job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupJobs/{jobUid}
	 */
	public function getBackupServerObjectStorageBackupJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/objectStorageBackupJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Object Storage Backup Job Returns a collection resource representation of all objects of a object storage backup job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/objectStorageBackupJobs/{jobUid}/objects
	 */
	public function getBackupServerObjectStorageBackupJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/objectStorageBackupJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VM Replication Jobs Returns a resource representation of all replication jobs that protects VMs.
	 * Path: /infrastructure/backupServers/jobs/replicationVmJobs
	 */
	public function getBackupServerReplicationVmJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/replicationVmJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of VM Replication Jobs Returns a collection resource representation of all VM replication job objects.
	 * Path: /infrastructure/backupServers/jobs/replicationVmJobs/objects
	 */
	public function getBackupServerReplicationVmJobsObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/replicationVmJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VM Replication Job Returns a resource representation of a replication job with the specified UID that protects VMs.
	 * Path: /infrastructure/backupServers/jobs/replicationVmJobs/{jobUid}
	 */
	public function getBackupServerReplicationVmJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/replicationVmJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of VM Replication Job Returns a collection resource representation of all objects of a VM replication job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/replicationVmJobs/{jobUid}/objects
	 */
	public function getBackupServerReplicationVmJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/replicationVmJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Immediate Backup Copy Jobs Returns a collection resource representation of all immediate backup copy jobs.
	 * Path: /infrastructure/backupServers/jobs/simpleBackupCopyJobs
	 */
	public function getBackupServerSimpleBackupCopyJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/simpleBackupCopyJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Immediate Backup Copy Jobs Returns a collection resource representation of all immediate backup copy job objects.
	 * Path: /infrastructure/backupServers/jobs/simpleBackupCopyJobs/objects
	 */
	public function getBackupServerSimpleBackupCopyJobsLinkedJobObjects(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/simpleBackupCopyJobs/objects');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Immediate Backup Copy Job Returns a resource representation of an immediate backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/simpleBackupCopyJobs/{jobUid}
	 */
	public function getBackupServerSimpleBackupCopyJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/simpleBackupCopyJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Immediate Backup Copy Job Returns a collection resource representation of all objects of an immediate backup copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/simpleBackupCopyJobs/{jobUid}/objects
	 */
	public function getBackupServerSimpleBackupCopyJobLinkedJobObjects(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/simpleBackupCopyJobs/%s/objects', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VM Copy Jobs Returns a collection resource representation of all VM copy jobs.
	 * Path: /infrastructure/backupServers/jobs/vmCopyJobs
	 */
	public function getBackupServerVmCopyJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs/vmCopyJobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VM Copy Job Returns a resource representation of a VM copy job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/vmCopyJobs/{jobUid}
	 */
	public function getBackupServerVmCopyJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/vmCopyJobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Job Returns a resource representation of a job with the specified UID.
	 * Path: /infrastructure/backupServers/jobs/{jobUid}
	 */
	public function getBackupServerJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/jobs/%s', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Job Modifies a job with the specified UID. Returns a positive response when the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupServers/jobs/{jobUid}
	 */
	public function patchBackupServerJob(string $jobUid, ?EditBackupServerJobPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/jobs/%s', $jobUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Unassign Job from Company Unassigns a job with the specified UID from a company. >Returns a positive response when the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupServers/jobs/{jobUid}/assign
	 */
	public function unassignBackupServerJob(string $jobUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/jobs/%s/assign', $jobUid ));
	}

	/**
	 * Assign Job to Company Assign a job with the specified UID to a company. >Returns a positive response when the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupServers/jobs/{jobUid}/assign
	 */
	public function assignBackupServerJob(string $jobUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/jobs/%s/assign', $jobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Retry Job Retries a job with the specified UID. Returns a positive response when the retry task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupServers/jobs/{jobUid}/retry
	 */
	public function retryBackupServerJob(string $jobUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/jobs/%s/retry', $jobUid ));
	}

	/**
	 * Start Job Starts a job with the specified UID. Returns a positive response when the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupServers/jobs/{jobUid}/start
	 */
	public function startBackupServerJob(string $jobUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/jobs/%s/start', $jobUid ));
	}

	/**
	 * Stop Job Stops a job with the specified UID. Returns a positive response when the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupServers/jobs/{jobUid}/stop
	 */
	public function stopBackupServerJob(string $jobUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/jobs/%s/stop', $jobUid ));
	}

	/**
	 * Get All Jobs Configured on Backup Server Returns a collection resource representation of all jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs
	 */
	public function getBackupServerJobByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Agent Jobs Configured on Backup Server Returns a collection resource representation of all backup agent jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/agentJobs
	 */
	public function getBackupServerAgentJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/agentJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Periodic Backup Copy Jobs Configured on Backup Server Returns a collection resource representation of all periodic backup copy and legacy periodic backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/backupCopyJobs
	 */
	public function getBackupServerBackupCopyJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/backupCopyJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Periodic Backup Copy Jobs Configured on Backup Server Returns a collection resource representation of objects of all periodic backup copy and legacy periodic backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/backupCopyJobs/jobObjects
	 */
	public function getBackupServerBackupCopyJobsLinkedJobObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/backupCopyJobs/jobObjects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup to Tape Jobs Configured on Backup Server Returns a collection resource representation of all backup to tape jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/backupTapeJobs
	 */
	public function getBackupServerBackupTapeJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/backupTapeJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Job Objects of Backup to Tape Jobs Configured on Backup Server Returns a collection resource representation of all jobs that are processed by backup to tape jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/backupTapeJobs/jobObjects
	 */
	public function getBackupServerBackupTapeJobsLinkedJobObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/backupTapeJobs/jobObjects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Repository Objects of Backup to Tape Jobs Configured on Backup Server Returns a collection resource representation of all repositories that are processed by backup to tape jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/backupTapeJobs/repositoryObjects
	 */
	public function getBackupServerBackupTapeJobsLinkedRepositoryObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/backupTapeJobs/repositoryObjects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VM Backup Jobs Configured on Backup Server Returns a collection resource representation of all VM backup jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/backupVmJobs
	 */
	public function getBackupServerBackupVmJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/backupVmJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of VM Backup Jobs Configured on Backup Server Returns a collection resource representation of all objects of VM backup jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/backupVmJobs/objects
	 */
	public function getBackupServerBackupVmJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/backupVmJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All CDP Replication Jobs Configured on Backup Server Returns a collection resource representation of all CDP replication jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/cdpReplicationJobs
	 */
	public function getBackupServerCdpReplicationJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/cdpReplicationJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of CDP Replication Jobs Configured on Backup Server Returns a collection resource representation of all objects of CDP replication jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/cdpReplicationJobs/objects
	 */
	public function getBackupServerCdpReplicationJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/cdpReplicationJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File Copy Jobs Configured on Backup Server Returns a collection resource representation of all file copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/fileCopyJobs
	 */
	public function getBackupServerFileCopyJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/fileCopyJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File Share Copy Jobs Configured on Backup Server Returns a collection resource representation of all file share backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/fileShareCopyJobs
	 */
	public function getBackupServerFileShareCopyJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/fileShareCopyJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File Share Copy Jobs Configured on Backup Server Returns a collection resource representation of all objects of file share backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/fileShareCopyJobs/objects
	 */
	public function getBackupServerFileShareCopyJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/fileShareCopyJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File Share Jobs Configured on Backup Server Returns a collection resource representation of all file share jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/fileShareJobs
	 */
	public function getBackupServerFileShareJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/fileShareJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File Share Jobs Configured on Backup Server Returns a collection resource representation of all objects of file share jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/fileShareJobs/objects
	 */
	public function getBackupServerFileShareJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/fileShareJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All File to Tape Jobs Configured on Backup Server Returns a collection resource representation of all file to tape jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/fileTapeJobs
	 */
	public function getBackupServerFileTapeJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/fileTapeJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of File to Tape Jobs Configured on Backup Server Returns a collection resource representation of all objects of file to tape jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/fileTapeJobs/objects
	 */
	public function getBackupServerFileTapeJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/fileTapeJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Object Storage Backup Copy Jobs Configured on Backup Server Returns a collection resource representation of all object storage backup backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/objectStorageBackupCopyJobs
	 */
	public function getBackupServerObjectStorageBackupCopyJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/objectStorageBackupCopyJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Object Storage Backup Copy Jobs Configured on Backup Server Returns a collection resource representation of all objects of object storage backup backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/objectStorageBackupCopyJobs/objects
	 */
	public function getBackupServerObjectStorageBackupCopyJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/objectStorageBackupCopyJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Object Storage Backup Jobs Configured on Backup Server Returns a collection resource representation of all object storage backup jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/objectStorageBackupJobs
	 */
	public function getBackupServerObjectStorageBackupJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/objectStorageBackupJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Object Storage Backup Jobs Configured on Backup Server Returns a collection resource representation of all objects of object storage backup jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/objectStorageBackupJobs/objects
	 */
	public function getBackupServerObjectStorageBackupJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/objectStorageBackupJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VM Replication Jobs Configured on Backup Server Returns a collection resource representation of all VM replication jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/replicationVmJobs
	 */
	public function getBackupServerReplicationVmJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/replicationVmJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of VM Replication Jobs Configured on Backup Server Returns a collection resource representation of all objects of VM replication jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/replicationVmJobs/objects
	 */
	public function getBackupServerReplicationVmJobsObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/replicationVmJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Immediate Backup Copy Jobs Configured on Backup Server Returns a collection resource representation of all immediate backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/simpleBackupCopyJobs
	 */
	public function getBackupServerSimpleBackupCopyJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/simpleBackupCopyJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Objects of Immediate Backup Copy Jobs Configured on Backup Server Returns a collection resource representation of all objects of immediate backup copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/simpleBackupCopyJobs/objects
	 */
	public function getBackupServerSimpleBackupCopyJobsLinkedJobObjectsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/simpleBackupCopyJobs/objects', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VM Copy Jobs Configured on Backup Server Returns a collection resource representation of all VM copy jobs configured on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/jobs/vmCopyJobs
	 */
	public function getBackupServerVmCopyJobsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/jobs/vmCopyJobs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
