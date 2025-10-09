<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\Payload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class BackupPolicyRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'configuration';
	}

	/**
	 * Get All Backup Policies Returns a collection resource representation of all backup policies.
	 * Path: /configuration/backupPolicies
	 */
	public function getBackupPolicies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/backupPolicies');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Policies for Linux Computers Returns a collection resource representation of all backup policies configured for Linux computers.
	 * Path: /configuration/backupPolicies/linux
	 */
	public function getLinuxBackupPolicies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/backupPolicies/linux');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Backup Policy for Linux Computers Creates a backup policy for Linux computers.
	 * Path: /configuration/backupPolicies/linux
	 */
	public function createLinuxBackupPolicy(?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/backupPolicies/linux', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Backup Policy for Linux Computers Returns a resource representation of a Linux computer backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/linux/{policyUid}
	 */
	public function getLinuxBackupPolicy(string $policyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/backupPolicies/linux/%s', $policyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Backup Policy for Linux Computers Modifies a Linux computer backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/linux/{policyUid}
	 */
	public function patchLinuxBackupPolicy(string $policyUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/backupPolicies/linux/%s', $policyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Policies for Windows Computers Returns a collection resource representation of all backup policies configured for Microsoft Windows computers.
	 * Path: /configuration/backupPolicies/windows
	 */
	public function getWindowsBackupPolicies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/backupPolicies/windows');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Backup Policy for Windows Computers Creates a backup policy for Microsoft Windows computers.
	 * Path: /configuration/backupPolicies/windows
	 */
	public function createWindowsBackupPolicy(?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/backupPolicies/windows', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Backup Policy for Windows Computers Returns a resource representation of a Windows computer backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/windows/{policyUid}
	 */
	public function getWindowsBackupPolicy(string $policyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/backupPolicies/windows/%s', $policyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Backup Policy for Windows Computers Modifies a Windows computer backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/windows/{policyUid}
	 */
	public function patchWindowsBackupPolicy(string $policyUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/backupPolicies/windows/%s', $policyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Backup Policy Deletes a backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/{policyUid}
	 */
	public function deleteBackupPolicy(string $policyUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/backupPolicies/%s', $policyUid ));
	}

	/**
	 * Get Backup Policy Returns a resource representation of a backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/{policyUid}
	 */
	public function getBackupPolicy(string $policyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/backupPolicies/%s', $policyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Backup Policy Modifies a backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/{policyUid}
	 */
	public function patchBackupPolicy(string $policyUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/backupPolicies/%s', $policyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Copy Backup Policy Creates a copy of a backup policy with the specified UID.
	 * Path: /configuration/backupPolicies/{policyUid}/copy
	 */
	public function copyBackupPolicy(string $policyUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/backupPolicies/%s/copy', $policyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Available Backup Policies Returns a collection resource representation of all backup policies that can be assigned to agents.
	 * Path: /configuration/backupPoliciesToAssign
	 */
	public function getBackupPoliciesToAssign(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/backupPoliciesToAssign');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
