<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerEncryptionPasswordPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerIsoPredownloadPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerLinuxCredentialsPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerMultipartPatchPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerPatchPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerScheduledPatchPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerScheduledUpgradePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerStandardCredentialsPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerUpgradePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerVcdObjectsExpansionPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateBackupServerVirtualCenterObjectsExpansionPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class BackupServerRepository implements Repository {
	use CreateGetRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/backupServers';
	}

	/**
	 * Get All Backup Servers Returns a collection resource representation of all Veeam Backup & Replication servers.
	 * Path: /infrastructure/backupServers
	 */
	public function getBackupServers(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Backup Agents Managed by All Veeam Backup & Replication Servers Returns a collection resource representation of all Veeam backup agents managed by connected Veeam Backup & Replication servers.
	 * Path: /infrastructure/backupServers/agents
	 */
	public function getBackupServersAgents(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/agents');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Protection Groups Returns a collection resource representation of all protection groups configured on managed Veeam Backup & Replication servers.
	 * Path: /infrastructure/backupServers/protectionGroups
	 */
	public function getBackupServerAgentProtectionGroups(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/protectionGroups');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Proxies Returns a collection resource representation of all backup proxies.
	 * Path: /infrastructure/backupServers/proxies
	 */
	public function getBackupProxies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/proxies');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Repositories Returns a collection resource representation of all backup repositories.
	 * Path: /infrastructure/backupServers/repositories
	 */
	public function getBackupRepositories(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/repositories');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hosts Connected to Backup Servers Returns a collection resource representation of all servers connected to all Veeam Backup & Replication servers.
	 * Path: /infrastructure/backupServers/servers
	 */
	public function getBackupServerHosts(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/servers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Servers Returns a collection resource representation of all VMware Cloud Director servers.
	 * Path: /infrastructure/backupServers/vcdServers
	 */
	public function getVcdServers(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Organizations Returns a collection resource representation of all VMware Cloud Director organizations.
	 * Path: /infrastructure/backupServers/vcdServers/vcdOrganizations
	 */
	public function getVcdOrganizations(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers/vcdOrganizations');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Users of All VMware Cloud Director Organizations Returns a collection resource representation of users of all VMware Cloud Director organizations.
	 * Path: /infrastructure/backupServers/vcdServers/vcdOrganizations/users
	 */
	public function getVcdOrganizationUsers(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers/vcdOrganizations/users');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Organization VDCs Returns a collection resource representation of all organization VDCs.
	 * Path: /infrastructure/backupServers/vcdServers/vcdOrganizations/vDCs
	 */
	public function getVcdOrganizationVDCs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers/vcdOrganizations/vDCs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All WAN Accelerators Returns a collection resource representation of all WAN accelerators.
	 * Path: /infrastructure/backupServers/wanaccelerators
	 */
	public function getBackupWanAccelerators(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/wanaccelerators');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Backup Server Returns a resource representation of a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}
	 */
	public function getBackupServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Backup Agents Managed by Veeam Backup & Replication Server Returns a collection resource representation of all Veeam backup agents managed by a connected Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/agents
	 */
	public function getBackupServerAgentsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/agents', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Backup Agent Managed by Veeam Backup & Replication Server Returns a resource representation of a Veeam backup agent with the specified UID managed by a Veeam Backup & Replication server.
	 * Path: /infrastructure/backupServers/{backupServerUid}/agents/{agentUid}
	 */
	public function getBackupServerAgent(string $backupServerUid, string $agentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/agents/%s', $backupServerUid, $agentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Force Data Collection from Backup Server Forces data collection from a Veeam Backup & Replication server with the specified UID. Returns a positive response when the collection task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupServers/{backupServerUid}/collect
	 */
	public function forceCollectBackupServer(string $backupServerUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/collect', $backupServerUid ));
	}

	/**
	 * Download Veeam Backup & Replication Upgrade Setup File Downloads the Veeam Backup & Replication upgrade setup file for further installation on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/upgrade/iso/predownload
	 */
	public function createBackupServerIsoPredownload(string $backupServerUid, ?CreateBackupServerIsoPredownloadPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/upgrade/iso/predownload', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Install Veeam Backup & Replication Update Installs the latest Veeam Backup & Replication update on a server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/upgrade
	 */
	public function createBackupServerUpgrade(string $backupServerUid, ?CreateBackupServerUpgradePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/upgrade', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Install Veeam Backup & Replication Patch Installs a Veeam Backup & Replication patch on a server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/patch
	 */
	public function createBackupServerPatch(string $backupServerUid, ?CreateBackupServerPatchPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/patch', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Create Veeam Backup & Replication Patch Upload Creates a multipart upload session for a Veeam Backup & Replication patch on a server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/patch/upload/multipart/create
	 */
	public function createBackupServerMultipartPatch(string $backupServerUid, ?CreateBackupServerMultipartPatchPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/patch/upload/multipart/create', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Schedule Veeam Backup & Replication Update Creates a scheduled task that installs the latest Veeam Backup & Replication update on a server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/scheduledTasks/upgrade
	 */
	public function scheduleBackupServerUpgrade(string $backupServerUid, ?CreateBackupServerScheduledUpgradePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/scheduledTasks/upgrade', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Schedule Veeam Backup & Replication Patch Creates a scheduled task that installs a Veeam Backup & Replication patch on a server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/scheduledTasks/patch
	 */
	public function scheduleBackupServerPatch(string $backupServerUid, ?CreateBackupServerScheduledPatchPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/scheduledTasks/patch', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Expand VMware vSphere Object Containers Retrieves nested inventory items for the specified VMware vSphere object.
	 * Path: /infrastructure/backupServers/{backupServerUid}/servers/virtualCenter/{virtualCenterUid}/objects/expand
	 */
	public function expandBackupServerVirtualCenterObjects(string $backupServerUid, string $virtualCenterUid, ?CreateBackupServerVirtualCenterObjectsExpansionPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/servers/virtualCenter/%s/objects/expand', $backupServerUid, $virtualCenterUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Expand VMware Cloud Director Object Containers Retrieves nested inventory items for the specified VMware Cloud Director object.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/{vcdServerUid}/objects/expand
	 */
	public function expandBackupServerVcdObjects(string $backupServerUid, string $vcdServerUid, ?CreateBackupServerVcdObjectsExpansionPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/vcdServers/%s/objects/expand', $backupServerUid, $vcdServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Create Standard Credentials Creates Windows or general-purpose credentials on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/credentials/standard
	 */
	public function createBackupServerStandardCredentials(string $backupServerUid, ?CreateBackupServerStandardCredentialsPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/credentials/standard', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Create Linux Credentials Creates Linux credentials on a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/credentials/linux
	 */
	public function createBackupServerLinuxCredentials(string $backupServerUid, ?CreateBackupServerLinuxCredentialsPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/credentials/linux', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Create Encryption Password Registers an encryption password for a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/encryptionPasswords
	 */
	public function createBackupServerEncryptionPassword(string $backupServerUid, ?CreateBackupServerEncryptionPasswordPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/encryptionPasswords', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get All Protection Groups Configured on Backup Server Returns a collection resource representation of all protection groups configured on a managed Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/protectionGroups
	 */
	public function getBackupServerAgentProtectionGroupsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/protectionGroups', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Proxies Connected to Backup Server Returns a collection resource representation of all backup proxies connected to a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/proxies
	 */
	public function getBackupProxiesByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/proxies', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Backup Proxy Returns a resource representation of a backup proxy with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/proxies/{proxyUid}
	 */
	public function getBackupProxy(string $backupServerUid, string $proxyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/proxies/%s', $backupServerUid, $proxyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Repositories Connected to Backup Server Returns a collection resource representation of all backup repositories connected to a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/repositories
	 */
	public function getBackupRepositoriesByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/repositories', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Backup Repository Returns a resource representation of a backup repository with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/repositories/{repositoryUid}
	 */
	public function getBackupRepository(string $backupServerUid, string $repositoryUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/repositories/%s', $backupServerUid, $repositoryUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hosts Connected to Backup Server Returns a collection resource representation of all servers connected to a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/servers
	 */
	public function getBackupServerHostsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/servers', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Host Connected to Backup Server Returns a resource representation of a server with the specified UID connected to a Veeam Backup & Replication server.
	 * Path: /infrastructure/backupServers/{backupServerUid}/servers/{serverUid}
	 */
	public function getBackupServerHost(string $backupServerUid, string $serverUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/servers/%s', $backupServerUid, $serverUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Servers Managed by Veeam Backup & Replication Server Returns a collection resource representation of all VMware Cloud Director servers managed by a Veeam Backup & Replication Server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers
	 */
	public function getVcdServersByBackupServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Organizations Managed by Veeam Backup & Replication Server Returns a collection resource representation of all VMware Cloud Director organizations managed by a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/vcdOrganizations
	 */
	public function getVcdOrganizationsByBackupServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Users of All VMware Cloud Director Organizations Managed by Veeam Backup & Replication server Returns a collection resource representation of users of all VMware Cloud Director organizations managed by a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/vcdOrganizations/users
	 */
	public function getVcdOrganizationUsersByBackupServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/users', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Organization VDCs Managed by Veeam Backup & Replication Server Returns a collection resource representation of all organization VDCs managed by a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/vcdOrganizations/vDCs
	 */
	public function getVcdOrganizationVDCsByBackupServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/vDCs', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization VDC Returns a resource representation of an organization VDC with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/vcdOrganizations/vDCs/{vdcUid}
	 */
	public function getVcdOrganizationVDC(string $backupServerUid, string $vdcUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/vDCs/%s', $backupServerUid, $vdcUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VMware Cloud Director Organization Returns a resource representation of a VMware Cloud Director organization with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/vcdOrganizations/{vcdOrganizationUid}
	 */
	public function getVcdOrganization(string $backupServerUid, string $vcdOrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/%s', $backupServerUid, $vcdOrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Users of VMware Cloud Director Organization Returns a collection resource representation of all users of a VMware Cloud Director organization with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/vcdOrganizations/{vcdOrganizationUid}/users
	 */
	public function getVcdOrganizationUsersByOrganization(string $backupServerUid, string $vcdOrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/%s/users', $backupServerUid, $vcdOrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VDCs Providing Resources to VMware Cloud Director Organization Returns a collection resource representation of all VDCs that provide resources to a VMware Cloud Director organization with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/vcdOrganizations/{vcdOrganizationUid}/vDCs
	 */
	public function getVcdOrganizationVDCsByOrganization(string $backupServerUid, string $vcdOrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/%s/vDCs', $backupServerUid, $vcdOrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VMware Cloud Director Server Returns a resource representation of a VMware Cloud Director server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/{vcdServerUid}
	 */
	public function getVcdServer(string $backupServerUid, string $vcdServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/%s', $backupServerUid, $vcdServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Organizations Configured on VMware Cloud Director Server Returns a collection resource representation of all VMware Cloud Director organizations configured on a VMware Cloud Director server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/{vcdServerUid}/vcdOrganizations
	 */
	public function getVcdOrganizationsByVcd(string $backupServerUid, string $vcdServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/%s/vcdOrganizations', $backupServerUid, $vcdServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Organization VDCs on VMware Cloud Director Server Returns a collection resource representation of all organization VDCs on a VMware Cloud Director Server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/{vcdServerUid}/vcdOrganizations/vDCs
	 */
	public function getVcdOrganizationVDCsByVcd(string $backupServerUid, string $vcdServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/%s/vcdOrganizations/vDCs', $backupServerUid, $vcdServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get vApps Configured on VMware Cloud Director Server Returns a collection resource representation of all vApps configured on a VMware Cloud Director server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/{vcdServerUid}/vcdOrganizations/vDCs/vApps
	 */
	public function getVcdOrganizationVAppsByVcd(string $backupServerUid, string $vcdServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/%s/vcdOrganizations/vDCs/vApps', $backupServerUid, $vcdServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VMs Configured on VMware Cloud Director Server Returns a collection resource representation of all VMs configured on a VMware Cloud Director server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/vcdServers/{vcdServerUid}/vcdOrganizations/vDCs/virtualMachines
	 */
	public function getVcdOrganizationVirtualMachinesByVcd(string $backupServerUid, string $vcdServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/%s/vcdOrganizations/vDCs/virtualMachines', $backupServerUid, $vcdServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All WAN Accelerators Connected to Backup Server Returns a collection resource representation of all WAN accelerators connected to a Veeam Backup & Replication server with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/wanaccelerators
	 */
	public function getBackupWanAcceleratorsByServer(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/wanaccelerators', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get WAN Accelerator Returns a resource representation of a WAN accelerator with the specified UID.
	 * Path: /infrastructure/backupServers/{backupServerUid}/wanaccelerators/{wanAcceleratorUid}
	 */
	public function getBackupWanAccelerator(string $backupServerUid, string $wanAcceleratorUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/wanaccelerators/%s', $backupServerUid, $wanAcceleratorUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
