<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\EditManagementAgentPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class ManagementAgentsRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'infrastructure';
	}

	/**
	 * Get All Management Agents Returns a collection resource representation of all management agents.
	 * Path: /infrastructure/managementAgents
	 */
	public function getManagementAgents(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/managementAgents');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Download Management Agent Setup File for Linux Returns a download link to a management agent setup file in the shell script format for Linux computers.
	 * Path: /infrastructure/managementAgents/packages/linux
	 */
	public function downloadLinuxManagementPackage(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/managementAgents/packages/linux');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Download Management Agent Setup File for macOS. Returns a download link to a management agent setup file in the shell script format for macOS computers.
	 * Path: /infrastructure/managementAgents/packages/mac
	 */
	public function downloadMacManagementPackage(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/managementAgents/packages/mac');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Download Management Agent Setup File for Windows Returns a download link to a management agent setup file in the `EXE` or `MSI` format for Microsoft Windows computers.
	 * Path: /infrastructure/managementAgents/packages/windows
	 */
	public function downloadWindowsManagementPackage(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/managementAgents/packages/windows');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Management Agent Deletes a management agent with the specified UID. > If the management agent is inaccessible, it will be deleted only on the Veeam Service Provider Console side  and the operation response will contain a warning message.  > Does not delete the unverified management agents and the management agents that are installed on the Veeam Cloud Connect servers.
	 * Path: /infrastructure/managementAgents/{managementAgentUid}
	 */
	public function deleteManagementAgent(string $managementAgentUid, array $query = []): RequestBuilder {
		$request = $this->createDeleteRequest(sprintf( '/managementAgents/%s', $managementAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Management Agent Returns a resource representation of a management agent with the specified UID.
	 * Path: /infrastructure/managementAgents/{managementAgentUid}
	 */
	public function getManagementAgent(string $managementAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/managementAgents/%s', $managementAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Management Agent Modifies a management agent with the specified UID.
	 * Path: /infrastructure/managementAgents/{managementAgentUid}
	 */
        public function patchManagementAgent(string $managementAgentUid, EditManagementAgentPayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/managementAgents/%s', $managementAgentUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Reboot System on Managed Computer Runs system reboot on a computer where management agent with the specified UID is installed. Returns a positive response when the management agent receives the reboot task and not when the task is executed.
	 * Path: /infrastructure/managementAgents/{managementAgentUid}/reboot
	 */
	public function rebootSystemOnManagementAgent(string $managementAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/managementAgents/%s/reboot', $managementAgentUid ));
	}

	/**
	 * Restart Management Agent Restarts a management agent with the specified UID. Returns a positive response when the management agent receives the restart task and not when the task is executed.
	 * Path: /infrastructure/managementAgents/{managementAgentUid}/restart
	 */
	public function restartManagementAgent(string $managementAgentUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/managementAgents/%s/restart', $managementAgentUid ));
	}

	/**
	 * Get All Unverified Management Agents Returns a collection resource representation of all unverified management agents.
	 * Path: /infrastructure/unverifiedAgents
	 */
	public function getUnverifiedAgents(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/unverifiedAgents');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Unverified Management Agent Returns a resource representation of an unverified management agent with the specified UID.
	 * Path: /infrastructure/unverifiedAgents/{unverifiedAgentUid}
	 */
	public function getUnverifiedAgent(string $unverifiedAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/unverifiedAgents/%s', $unverifiedAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Accept Unverified Management Agent Accepts an unverified management agent with the specified UID.
	 * Path: /infrastructure/unverifiedAgents/{unverifiedAgentUid}/accept
	 */
	public function acceptUnverifiedAgent(string $unverifiedAgentUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/unverifiedAgents/%s/accept', $unverifiedAgentUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
