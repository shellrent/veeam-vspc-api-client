<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\Payload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePutRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class BackupAgentRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;
	use CreatePutRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/backupAgents';
	}

	/**
	 * Get All Backup Agents Returns a collection resource representation of all Veeam backup agents.
	 * Path: /infrastructure/backupAgents
	 */
	public function getBackupAgents(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Agents for Linux Returns a collection resource representation of all Veeam Agents for Linux.
	 * Path: /infrastructure/backupAgents/linux
	 */
	public function getLinuxBackupAgents(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/linux');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Policies Assigned to All Veeam Agents for Linux Returns a collection resource representation of all backup policies assigned to Veeam Agents for Linux.
	 * Path: /infrastructure/backupAgents/linux/assignedPolicies
	 */
	public function getAllLinuxBackupAgentAssignedPolicies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/linux/assignedPolicies');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Agent for Linux Returns a resource representation of a Veeam Agent for Linux with the specified UID.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}
	 */
	public function getLinuxBackupAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/linux/%s', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Policies Assigned to Veeam Agent for Linux Returns a collection resource representation of all backup policies assigned to a Veeam Agent for Linux with the specified UID.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/assignedPolicies
	 */
	public function getLinuxBackupAgentAssignedPolicies(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/linux/%s/assignedPolicies', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Assign Policy to Veeam Agent for Linux Assigns a backup policy to a Veeam Agent for Linux with the specified UID. Returns a positive response when the management agent receives the task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/assignedPolicies
	 */
	public function assignLinuxPolicyOnBackupAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/linux/%s/assignedPolicies', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Agents for Mac Returns a collection resource representation of all Veeam Agents for Mac.
	 * Path: /infrastructure/backupAgents/mac
	 */
	public function getMacBackupAgents(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/mac');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Policies Assigned to All Veeam Agents for Mac Returns a collection resource representation of all backup policies assigned to Veeam Agents for Mac.
	 * Path: /infrastructure/backupAgents/mac/assignedPolicies
	 */
	public function getAllMacBackupAgentAssignedPolicies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/mac/assignedPolicies');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Agent for Mac Returns a resource representation of a Veeam Agent for Mac with the specified UID.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}
	 */
	public function getMacBackupAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/mac/%s', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Policies Assigned to Veeam Agent for Mac Returns a collection resource representation of all backup policies assigned to a Veeam Agent for Mac with the specified UID.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}/assignedPolicies
	 */
	public function getMacBackupAgentAssignedPolicies(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/mac/%s/assignedPolicies', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Assign Policy to Veeam Agent for Mac Assigns a backup policy to a Veeam Agent for Mac with the specified UID. Returns a positive response when the management agent receives the task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}/assignedPolicies
	 */
	public function assignMacPolicyOnBackupAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/mac/%s/assignedPolicies', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Agents for Microsoft Windows Returns a collection resource representation of all Veeam backup agents installed on Windows computers.
	 * Path: /infrastructure/backupAgents/windows
	 */
	public function getWindowsBackupAgents(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/windows');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Policies Assigned to All Veeam Agents for Microsoft Windows Returns a collection resource representation of all backup policies assigned to Veeam Agents for Microsoft Windows.
	 * Path: /infrastructure/backupAgents/windows/assignedPolicies
	 */
	public function getAllBackupAgentAssignedPolicies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/windows/assignedPolicies');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Agents for Microsoft Windows Settings Returns a collection resource representation of settings configured for all Veeam backup agents installed on Windows computers.
	 * Path: /infrastructure/backupAgents/windows/settings
	 */
	public function getBackupAgentsSettings(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/windows/settings');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Agent for Microsoft Windows Returns a resource representation of a Veeam Agent for Microsoft Windows with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}
	 */
	public function getWindowsBackupAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/windows/%s', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Policies Assigned to Veeam Agent for Microsoft Windows Returns a collection resource representation of all backup policies assigned to Veeam Agent for Microsoft Windows with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/assignedPolicies
	 */
	public function getBackupAgentAssignedPolicies(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/windows/%s/assignedPolicies', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Assign Policy to Veeam Agent for Microsoft Windows Assigns a backup policy to a Veeam Agent for Microsoft Windows with the specified UID. Returns a positive response when the management agent receives the task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/assignedPolicies
	 */
	public function assignPolicyOnBackupAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/windows/%s/assignedPolicies', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Install CBT Driver Installs the Veeam CBT driver on a Windows computer that runs Veeam Agent with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/installCbtDriver
	 */
	public function installCbtDriver(string $backupAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/windows/%s/installCbtDriver', $backupAgentUid ));
	}

	/**
	 * Get Veeam Agent for Microsoft Windows Settings Returns a resource representation of settings configured for Veeam Agent for Microsoft Windows with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/settings
	 */
	public function getBackupAgentSettings(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/windows/%s/settings', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Veeam Agent for Microsoft Windows Settings Modifies settings configured for Veeam Agent for Microsoft Windows with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/settings
	 */
	public function patchBackupAgentSettings(string $backupAgentUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/windows/%s/settings', $backupAgentUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Replace Veeam Agent for Microsoft Windows Settings Replaces settings configured for Veeam Agent for Microsoft Windows with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/settings
	 */
	public function setBackupAgentSettings(string $backupAgentUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/windows/%s/settings', $backupAgentUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Uninstall CBT Driver Uninstalls the Veeam CBT driver from a Windows computer that runs Veeam Agent with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/uninstallCbtDriver
	 */
	public function uninstallCbtDriver(string $backupAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/windows/%s/uninstallCbtDriver', $backupAgentUid ));
	}

	/**
	 * Delete Backup Agent Deletes Veeam backup agent with the specified UID.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}
	 */
	public function deleteBackupAgent(string $backupAgentUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s', $backupAgentUid ));
	}

	/**
	 * Get Backup Agent Returns a resource representation of a Veeam backup agent with the specified UID.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}
	 */
	public function getBackupAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s', $backupAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Backup Agent Modifies Veeam backup agent with the specified UID.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}
	 */
	public function patchBackupAgent(string $backupAgentUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s', $backupAgentUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Activate Backup Agent Changes management mode of a Veeam backup agent with the specified UID to ManagedByConsole.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}/activate
	 */
	public function activateBackupAgent(string $backupAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/activate', $backupAgentUid ));
	}

	/**
	 * Force Data Collection from Backup Agent Forces data collection from a Veeam backup agent with the specified UID. Returns a positive response when the management agent receives the data collection task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}/collect
	 */
	public function forceCollectBackupAgent(string $backupAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/collect', $backupAgentUid ));
	}

	/**
	 * Deactivate Backup Agent Changes management mode of Veeam backup agent with the specified UID to UnManaged and deletes management agent from the agent computer.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}/deactivate
	 */
	public function deactivateBackupAgent(string $backupAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/deactivate', $backupAgentUid ));
	}

	/**
	 * Restart Backup Agent Restarts Veeam backup agent with the specified UID. Returns a positive response if the restart task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}/restart
	 */
	public function restartBackupAgentService(string $backupAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/restart', $backupAgentUid ));
	}
}
