<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateVb365BackupJobPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateVb365CopyJobPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateVb365Microsoft365OrganizationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateVb365OrganizationCompanyMappingPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditVb365BackupJobPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditVb365CopyJobPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditVb365Microsoft365OrganizationPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class Microsoft365ServerRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'infrastructure';
	}

	/**
	 * Get All Unactivated Veeam Backup for Microsoft 365 Servers. Returns a collection resource representation of all unactivated Veeam Backup for Microsoft 365 servers.
	 * Path: /infrastructure/unactivatedVb365Servers
	 */
	public function getUnactivatedVb365Servers(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/unactivatedVb365Servers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Unactivated Veeam Backup for Microsoft 365 Server Returns an resource representation of an Unactivated Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /infrastructure/unactivatedVb365Servers/{uniqueUid}
	 */
	public function getUnactivatedVb365Server(string $uniqueUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/unactivatedVb365Servers/%s', $uniqueUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Activate Unactivated Veeam Backup for Microsoft 365 Server Activates an unactivated Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /infrastructure/unactivatedVb365Servers/{uniqueUid}/activate
	 */
	public function activateVb365Server(string $uniqueUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/unactivatedVb365Servers/%s/activate', $uniqueUid ));
	}

	/**
	 * Get All Connected Veeam Backup fot Microsoft 365 Servers. Returns a collection resource representation of all connected Veeam Backup for Microsoft 365 servers.
	 * Path: /infrastructure/vb365Servers
	 */
	public function getVb365Servers(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vb365Servers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Microsoft Organizations Returns a collection resource representation of all Microsoft organizations. > Does not include hybrid and on-premises organizations.
	 * Path: /infrastructure/vb365Servers/organizations
	 */
	public function getVb365Organizations(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vb365Servers/organizations');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Microsoft Organization Mappings to Companies Returns a collection resource representation of all Microsoft organization mappings to companies.
	 * Path: /infrastructure/vb365Servers/organizations/companyMappings
	 */
	public function getVb365OrganizationsToCompanyMappings(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vb365Servers/organizations/companyMappings');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Map Microsoft Organization to Company Maps a Microsoft organization to a company.
	 * Path: /infrastructure/vb365Servers/organizations/companyMappings
	 */
        public function createVb365OrganizationToCompanyMapping(CreateVb365OrganizationCompanyMappingPayload $payload, array $query = []): RequestBuilder {
                $request = $this->createPostRequest('/vb365Servers/organizations/companyMappings', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Microsoft Organization to Company Mapping Deletes a Microsoft organization to company mapping with the specified UID.
	 * Path: /infrastructure/vb365Servers/organizations/companyMappings/{mappingUid}
	 */
	public function deleteVb365OrganizationToCompanyMapping(string $mappingUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/vb365Servers/organizations/companyMappings/%s', $mappingUid ));
	}

	/**
	 * Get Microsoft Organization to Company Mapping Returns a resource representation of a Microsoft organization to company mapping with the specified UID.
	 * Path: /infrastructure/vb365Servers/organizations/companyMappings/{mappingUid}
	 */
	public function getVb365OrganizationToCompanyMapping(string $mappingUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/organizations/companyMappings/%s', $mappingUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Backup for Microsoft 365 Jobs Returns a collection resource representation of all Veeam Backup for Microsoft 365 jobs.
	 * Path: /infrastructure/vb365Servers/organizations/jobs
	 */
	public function getVb365Jobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vb365Servers/organizations/jobs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Backup for Microsoft 365 Backup Copy Jobs Returns a collection resource representation of all Veeam Backup for Microsoft 365 backup jobs.
	 * Path: /infrastructure/vb365Servers/organizations/jobs/backup
	 */
	public function getVb365BackupJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vb365Servers/organizations/jobs/backup');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Backup for Microsoft 365 Backup Copy Jobs Returns a collection resource representation of all Veeam Backup for Microsoft 365 backup copy jobs.
	 * Path: /infrastructure/vb365Servers/organizations/jobs/copy
	 */
	public function getVb365CopyJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vb365Servers/organizations/jobs/copy');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Veeam Backup for Microsoft 365 Server Disconnects Veeam Backup for Microsoft 365 server with the specified UID.  > The operation is available only for hosted Veeam Backup for Microsoft 365 servers. If you want to disconnect a client server, delete a management agent installed on that server.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}
	 */
	public function deleteVb365Server(string $vb365ServerUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/vb365Servers/%s', $vb365ServerUid ));
	}

	/**
	 * Get Veeam Backup for Microsoft 365 Server Returns a resource representation of a connected Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}
	 */
	public function getVb365Server(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Proxies Connected to Veeam Backup for Microsoft 365 Server Returns a collection resource representation of all backup proxies connected to a Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/backupProxies
	 */
	public function getVb365BackupProxies(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/backupProxies', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Proxy Pools Connected to Veeam Backup for Microsoft 365 Server Returns a collection resource representation of all backup proxy pools connected to a Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/backupProxyPools
	 */
	public function getVb365BackupProxyPools(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/backupProxyPools', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Repositories Connected to Veeam Backup for Microsoft 365 Server Returns a collection resource representation of all backup repositories connected to a Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/backupRepositories
	 */
	public function getVb365BackupRepositories(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/backupRepositories', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Enforce Data Collection from Veeam Backup for Microsoft 365 Server Enforces data collection from a Veeam Backup for Microsoft 365 server with the specified UID. > Returns a positive response when the collection task is added to the internal queue and not when the task is executed.'
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/collect
	 */
	public function forceCollectVb365Server(string $vb365ServerUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/vb365Servers/%s/collect', $vb365ServerUid ));
	}

	/**
	 * Get All Microsoft Organizations Managed by Veeam Backup for Microsoft 365 Server Returns a collection resource representation of all Microsoft organizations managed by Veeam Backup for Microsoft 365 server with the spectified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations
	 */
	public function getVb365OrganizationsByVb365Server(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Microsoft 365 Organizations Managed by Veeam Backup for Microsoft 365 Server Returns a collection resource representation of all Microsoft 365 organizations managed by a Veeam Backup for Microsoft 365 server with the spectified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/Microsoft365
	 */
	public function getVb365Microsoft365Organizations(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/Microsoft365', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Microsoft 365 Organization Creates a new Microsoft 365 organization on a Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/Microsoft365
	 */
        public function createVb365Microsoft365Organization(string $vb365ServerUid, CreateVb365Microsoft365OrganizationPayload $payload, array $query = []): RequestBuilder {
                $request = $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/Microsoft365', $vb365ServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Microsoft 365 Organization Returns a resource representation of a Microsoft 365 organization with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/Microsoft365/{vb365OrganizationUid}
	 */
	public function getVb365Microsoft365Organization(string $vb365ServerUid, string $vb365OrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/Microsoft365/%s', $vb365ServerUid, $vb365OrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Microsoft 365 Organization Modifies a Microsoft 365 organization with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/Microsoft365/{vb365OrganizationUid}
	 */
        public function patchVb365Microsoft365Organization(string $vb365ServerUid, string $vb365OrganizationUid, EditVb365Microsoft365OrganizationPayload $payload, array $query = []): RequestBuilder {
                $request = $this->createPatchRequest(sprintf( '/vb365Servers/%s/organizations/Microsoft365/%s', $vb365ServerUid, $vb365OrganizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Check Microsoft 365 Organization Application Certificate Checks whether a security certificate is available for a Microsoft 365 organization application with the specified UID. > If a Microsoft 365 organization was not created in Veeam Service Provider Console, its application certificate is not available.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/Microsoft365/{vb365OrganizationUid}/certificate/exist
	 */
	public function checkVb365Microsoft365OrganizationCertificateExistenceInTheStorage(string $vb365ServerUid, string $vb365OrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/Microsoft365/%s/certificate/exist', $vb365ServerUid, $vb365OrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Device Code Generates a device code to log in to a Microsoft organization. > You can get a device code from Microsoft Azure to sign in to the [Microsoft authentication portal](https://login.microsoftonline.com/common/oauth2/deviceauth).
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/deviceCode
	 */
	public function createAzureDeviceCode(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/deviceCode', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Device Code Status Returns a resource representation of a device code status.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/deviceCode/{code}/status
	 */
	public function getAzureDeviceCodeStatus(string $vb365ServerUid, string $code, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/deviceCode/%s/status', $vb365ServerUid, $code ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Backup for Microsoft 365 Backup Job Returns a resource representation of a Veeam Backup for Microsoft 365 backup job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/backup/{vb365BackupJobUid}
	 */
	public function getVb365BackupJob(string $vb365ServerUid, string $vb365BackupJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/jobs/backup/%s', $vb365ServerUid, $vb365BackupJobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Veeam Backup for Microsoft 365 Backup Job Modifies a Veeam Backup for Microsoft 365 backup job with the specified UID. > [For Veeam Backup for Microsoft 365 servers hosted by Veeam Service Provider Console] Company users must not modify the `schedulePolicy` property. Otherwise the operation will result in error.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/backup/{vb365BackupJobUid}
	 */
        public function patchVb365BackupJob(string $vb365ServerUid, string $vb365BackupJobUid, EditVb365BackupJobPayload $payload, array $query = []): RequestBuilder {
                $request = $this->createPatchRequest(sprintf( '/vb365Servers/%s/organizations/jobs/backup/%s', $vb365ServerUid, $vb365BackupJobUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Available Backup Repositories for Veeam Backup for Microsoft 365 Backup Job Returns a collection resource representation of backup repositories that can be selected as target repositories of a Veeam Backup for Microsoft 365 backup job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/backup/{vb365BackupJobUid}/availableBackupRepositories
	 */
	public function getVb365BackupJobAvailableBackupRepositories(string $vb365ServerUid, string $vb365BackupJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/jobs/backup/%s/availableBackupRepositories', $vb365ServerUid, $vb365BackupJobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Veeam Backup for Microsoft 365 Backup Copy Job Creates a new Veeam Backup for Microsoft 365 backup copy job. > You can save the job schedule only if that functionality is enabled for you in the Veeam Backup for Microsoft 365 resource configuration. Otherwise the operation will result in error.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/copy
	 */
        public function createVb365CopyJob(string $vb365ServerUid, CreateVb365CopyJobPayload $payload, array $query = []): RequestBuilder {
                $request = $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/jobs/copy', $vb365ServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Backup for Microsoft 365 Backup Copy Job Returns a resource representation of a Veeam Backup for Microsoft 365 backup copy job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/copy/{vb365CopyJobUid}
	 */
	public function getVb365CopyJob(string $vb365ServerUid, string $vb365CopyJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/jobs/copy/%s', $vb365ServerUid, $vb365CopyJobUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Veeam Backup for Microsoft 365 Backup Copy Job Modifies a Veeam Backup for Microsoft 365 backup copy job with the specified UID. > You can save the job schedule only if that functionality is enabled for you in the Veeam Backup for Microsoft 365 resource configuration. Otherwise the operation will result in error.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/copy/{vb365CopyJobUid}
	 */
        public function patchVb365CopyJob(string $vb365ServerUid, string $vb365CopyJobUid, EditVb365CopyJobPayload $payload, array $query = []): RequestBuilder {
                $request = $this->createPatchRequest(sprintf( '/vb365Servers/%s/organizations/jobs/copy/%s', $vb365ServerUid, $vb365CopyJobUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Veeam Backup for Microsoft 365 Job Deletes a Veeam Backup for Microsoft 365 job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/{vb365JobUid}
	 */
	public function deleteVb365Job(string $vb365ServerUid, string $vb365JobUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/vb365Servers/%s/organizations/jobs/%s', $vb365ServerUid, $vb365JobUid ));
	}

	/**
	 * Disable Veeam Backup for Microsoft 365 Job Disables a Veeam Backup for Microsoft 365 job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/{vb365JobUid}/disable
	 */
	public function disableVb365Job(string $vb365ServerUid, string $vb365JobUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/jobs/%s/disable', $vb365ServerUid, $vb365JobUid ));
	}

	/**
	 * Enable Veeam Backup for Microsoft 365 Job Enables a Veeam Backup for Microsoft 365 job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/{vb365JobUid}/enable
	 */
	public function enableVb365Job(string $vb365ServerUid, string $vb365JobUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/jobs/%s/enable', $vb365ServerUid, $vb365JobUid ));
	}

	/**
	 * Start Veeam Backup for Microsoft 365 Job Starts a Veeam Backup for Microsoft 365 job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/{vb365JobUid}/start
	 */
	public function startVb365Job(string $vb365ServerUid, string $vb365JobUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/jobs/%s/start', $vb365ServerUid, $vb365JobUid ));
	}

	/**
	 * Stop Veeam Backup for Microsoft 365 Job Stops a Veeam Backup for Microsoft 365 job with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/jobs/{vb365JobUid}/stop
	 */
	public function stopVb365Job(string $vb365ServerUid, string $vb365JobUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/jobs/%s/stop', $vb365ServerUid, $vb365JobUid ));
	}

	/**
	 * Delete Microsoft Organization Deletes a Microsoft organization with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/{vb365OrganizationUid}
	 */
	public function deleteVb365Organization(string $vb365ServerUid, string $vb365OrganizationUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/vb365Servers/%s/organizations/%s', $vb365ServerUid, $vb365OrganizationUid ));
	}

	/**
	 * Get Microsoft Organization Returns a resource representation of a Microsoft organization with the specified UID.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/{vb365OrganizationUid}
	 */
	public function getVb365Organization(string $vb365ServerUid, string $vb365OrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/%s', $vb365ServerUid, $vb365OrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Microsoft Organization Groups Returns a collection resource representation of all groups in a Microsoft organization with the specified UID. > The `total` property of the `meta` response section always has the `0` value.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/{vb365OrganizationUid}/groups
	 */
	public function getVb365OrganizationGroups(string $vb365ServerUid, string $vb365OrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/%s/groups', $vb365ServerUid, $vb365OrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Veeam Backup for Microsoft 365 Backup Job Creates a new Veeam Backup for Microsoft 365 backup job. > [For Veeam Backup for Microsoft 365 servers hosted by Veeam Service Provider Console] Company users must pass the `null` value for the `schedulePolicy` property. Otherwise the operation will result in error.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/{vb365OrganizationUid}/jobs/backup
	 */
        public function createVb365BackupJob(string $vb365ServerUid, string $vb365OrganizationUid, CreateVb365BackupJobPayload $payload, array $query = []): RequestBuilder {
                $request = $this->createPostRequest(sprintf( '/vb365Servers/%s/organizations/%s/jobs/backup', $vb365ServerUid, $vb365OrganizationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Microsoft Organization Sites Returns a collection resource representation of all sites of a Microsoft organization with the specified UID. > The `total` property of the `meta` response section always has the `0` value.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/{vb365OrganizationUid}/sites
	 */
	public function getVb365OrganizationSites(string $vb365ServerUid, string $vb365OrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/%s/sites', $vb365ServerUid, $vb365OrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Microsoft Organization Teams Returns a collection resource representation of all teams of a Microsoft organization with the specified UID. > The `total` property of the `meta` response section always has the `0` value.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/{vb365OrganizationUid}/teams
	 */
	public function getVb365OrganizationTeams(string $vb365ServerUid, string $vb365OrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/%s/teams', $vb365ServerUid, $vb365OrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Microsoft Organization Users Returns a collection resource representation of all users of a Microsoft organization with the specified UID. > The `total` property of the `meta` response section always has the `0` value.
	 * Path: /infrastructure/vb365Servers/{vb365ServerUid}/organizations/{vb365OrganizationUid}/users
	 */
	public function getVb365OrganizationUsers(string $vb365ServerUid, string $vb365OrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s/organizations/%s/users', $vb365ServerUid, $vb365OrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
