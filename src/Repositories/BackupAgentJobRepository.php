<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateLinuxBackupAgentJobConfigurationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateWindowsBackupAgentJobConfigurationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditLinuxBackupAgentJobConfigurationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditWindowsBackupAgentJobConfigurationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditWindowsBackupAgentJobPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class BackupAgentJobRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/backupAgents';
	}

	/**
	 * Get All Veeam Backup Agent Jobs Returns a collection resource representation of all Veeam backup agent jobs protecting Windows computers.
	 * Path: /infrastructure/backupAgents/jobs
	 */
	public function getBackupAgentJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/jobs');
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Start Veeam Backup Agent Job Starts a Veeam backup agent job with the specified UID. Returns a positive response when the management agent receives the task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}/jobs/{backupAgentJobUid}/start
	 */
	public function startBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/%s/jobs/%s/start', $backupAgentUid, $backupAgentJobUid));
	}

	/**
	 * Stop Veeam Backup Agent Job Stops a Veeam backup agent job with the specified UID. Returns a positive response when the management agent receives the task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/{backupAgentUid}/jobs/{backupAgentJobUid}/stop
	 */
	public function stopBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/%s/jobs/%s/stop', $backupAgentUid, $backupAgentJobUid));
	}

	/**
	 * Get Jobs for All Veeam Agents for Microsoft Windows Returns a collection resource representation of all Veeam backup agent jobs protecting Windows computers.
	 * Path: /infrastructure/backupAgents/windows/jobs
	 */
	public function getWindowsBackupAgentJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/windows/jobs');
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get All Jobs for Veeam Agent for Microsoft Windows Returns a collection resource representation of all jobs configured for Veeam backup agent for Microsoft Windows with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs
	 */
	public function getWindowsBackupAgentJobsByAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/windows/%s/jobs', $backupAgentUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get Job for Veeam Agent for Microsoft Windows Returns a resource representation of a Veeam Agent for Microsoft Windows job with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/{backupAgentJobUid}
	 */
	public function getWindowsBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/windows/%s/jobs/%s', $backupAgentUid, $backupAgentJobUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Delete Job for Veeam Agent for Microsoft Windows Deletes a Veeam Agent for Microsoft Windows job with the specified UID. Returns a positive response when the management agent receives the task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/{backupAgentJobUid}
	 */
	public function deleteWindowsBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid, bool $removeRestorePoints, array $query = []): RequestBuilder {
		$request = $this->createDeleteRequest(sprintf('/windows/%s/jobs/%s', $backupAgentUid, $backupAgentJobUid));
		$request->query(array_merge([
			'removeRestorePoints' => $removeRestorePoints ? 'true' : 'false',
		], $query));

		return $request;
	}

	/**
	 * Modify Job for Veeam Agent for Microsoft Windows Modifies a Veeam Agent for Microsoft Windows job with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/{backupAgentJobUid}
	 */
        public function patchWindowsBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid, ?EditWindowsBackupAgentJobPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf('/windows/%s/jobs/%s', $backupAgentUid, $backupAgentJobUid), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Start Job for Veeam Agent for Microsoft Windows Starts a Veeam Agent for Microsoft Windows job with the specified UID. Returns a positive response when the management agent receives the reboot task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/{backupAgentJobUid}/start
	 */
	public function startWindowsBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/windows/%s/jobs/%s/start', $backupAgentUid, $backupAgentJobUid));
	}

	/**
	 * Stop Job for Veeam Agent for Microsoft Windows Stops a Veeam Agent for Microsoft Windows job with the specified UID. Returns a positive response when the management agent receives the task and not when the task is executed.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/{backupAgentJobUid}/stop
	 */
	public function stopWindowsBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/windows/%s/jobs/%s/stop', $backupAgentUid, $backupAgentJobUid));
	}

	/**
	 * Get Configuration of Job for Veeam Agent for Microsoft Windows Returns a resource representation of a configuration of the Veeam Agent for Microsoft Windows job with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/{backupAgentJobUid}/configuration
	 */
	public function getWindowsBackupAgentJobConfiguration(string $backupAgentUid, string $backupAgentJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/windows/%s/jobs/%s/configuration', $backupAgentUid, $backupAgentJobUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Modify Configuration of Job for Veeam Agent for Microsoft Windows Modifies a configuration of the Veeam Agent for Microsoft Windows job with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/{backupAgentJobUid}/configuration
	 */
        public function patchWindowsBackupAgentJobConfiguration(string $backupAgentUid, string $backupAgentJobUid, ?EditWindowsBackupAgentJobConfigurationPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf('/windows/%s/jobs/%s/configuration', $backupAgentUid, $backupAgentJobUid), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Create Configuration of Job for Veeam Agent for Microsoft Windows Creates a configuration of a Veeam backup agent job protecting a Windows computer with the specified UID.
	 * Path: /infrastructure/backupAgents/windows/{backupAgentUid}/jobs/configuration
	 */
        public function createWindowsBackupAgentJobConfiguration(string $backupAgentUid, ?CreateWindowsBackupAgentJobConfigurationPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf('/windows/%s/jobs/configuration', $backupAgentUid), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get Jobs for All Veeam Agents for Linux Returns a collection resource representation of all Veeam Agent jobs protecting Linux computers.
	 * Path: /infrastructure/backupAgents/linux/jobs
	 */
	public function getLinuxBackupAgentJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/linux/jobs');
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get All Jobs for Veeam Agent for Linux Returns a collection resource representation of all jobs configured for a Veeam Agent for Linux with the specified UID.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs
	 */
	public function getLinuxBackupAgentJobsByAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/linux/%s/jobs', $backupAgentUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get Job for Veeam Agent for Linux Returns a resource representation of a Veeam Agent for Linux job with the specified UID.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs/{backupAgentJobUid}
	 */
	public function getLinuxBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/linux/%s/jobs/%s', $backupAgentUid, $backupAgentJobUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Delete Job for Veeam Agent for Linux Deletes a Veeam Agent for Linux job with the specified UID. Returns a positive response if the restart task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs/{backupAgentJobUid}
	 */
	public function deleteLinuxBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid, bool $removeRestorePoints, array $query = []): RequestBuilder {
		$request = $this->createDeleteRequest(sprintf('/linux/%s/jobs/%s', $backupAgentUid, $backupAgentJobUid));
		$request->query(array_merge([
			'removeRestorePoints' => $removeRestorePoints ? 'true' : 'false',
		], $query));

		return $request;
	}

	/**
	 * Start Job for Veeam Agent for Linux Starts a Veeam Agent for Linux job with the specified UID. Returns a positive response if the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs/{backupAgentJobUid}/start
	 */
	public function startLinuxBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/linux/%s/jobs/%s/start', $backupAgentUid, $backupAgentJobUid));
	}

	/**
	 * Stop Job for Veeam Agent for Linux Stops a Veeam Agent for Linux job with the specified UID. Returns a positive response if the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs/{backupAgentJobUid}/stop
	 */
	public function stopLinuxBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/linux/%s/jobs/%s/stop', $backupAgentUid, $backupAgentJobUid));
	}

	/**
	 * Get Configuration of Job for Veeam Agent for Linux Returns a resource representation of Veeam Agent for Linux job configuration with the specified UID.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs/{backupAgentJobUid}/configuration
	 */
	public function getLinuxBackupAgentJobConfiguration(string $backupAgentUid, string $backupAgentJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/linux/%s/jobs/%s/configuration', $backupAgentUid, $backupAgentJobUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Modify Configuration of Job for Veeam Agent for Linux Modifies Veeam Agent for Linux job configuration with the specified UID.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs/{backupAgentJobUid}/configuration
	 */
        public function patchLinuxBackupAgentJobConfiguration(string $backupAgentUid, string $backupAgentJobUid, ?EditLinuxBackupAgentJobConfigurationPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf('/linux/%s/jobs/%s/configuration', $backupAgentUid, $backupAgentJobUid), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Create Configuration of Job for Veeam Agent for Linux Creates configuration of a Veeam backup agent job protecting Linux computer with the specified UID.
	 * Path: /infrastructure/backupAgents/linux/{backupAgentUid}/jobs/configuration
	 */
        public function createLinuxBackupAgentJobConfiguration(string $backupAgentUid, ?CreateLinuxBackupAgentJobConfigurationPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf('/linux/%s/jobs/configuration', $backupAgentUid), $payload);
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get Jobs for All Veeam Agents for Mac Returns a collection resource representation of all Veeam Agent for Mac jobs.
	 * Path: /infrastructure/backupAgents/mac/jobs
	 */
	public function getMacBackupAgentJobs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/mac/jobs');
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get All Jobs for Veeam Agent for Mac Returns a collection resource representation of all jobs configured for Veeam Agent for Mac with the specified UID.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}/jobs
	 */
	public function getMacBackupAgentJobsByAgent(string $backupAgentUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/mac/%s/jobs', $backupAgentUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Get Job for Veeam Agent for Mac Returns a resource representation of a Veeam Agent for Mac job with the specified UID.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}/jobs/{backupAgentJobUid}
	 */
	public function getMacBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf('/mac/%s/jobs/%s', $backupAgentUid, $backupAgentJobUid));
		if ($query !== []) {
			$request->query($query);
		}

		return $request;
	}

	/**
	 * Delete Job for Veeam Agent for Mac Deletes a Veeam Agent for Mac job with the specified UID. Returns a positive response if the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}/jobs/{backupAgentJobUid}
	 */
	public function deleteMacBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid, bool $removeRestorePoints, array $query = []): RequestBuilder {
		$request = $this->createDeleteRequest(sprintf('/mac/%s/jobs/%s', $backupAgentUid, $backupAgentJobUid));
		$request->query(array_merge([
			'removeRestorePoints' => $removeRestorePoints ? 'true' : 'false',
		], $query));

		return $request;
	}

	/**
	 * Start Job for Veeam Agent for Mac Starts a Veeam Agent for Mac job with the specified UID. Returns a positive response if the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}/jobs/{backupAgentJobUid}/start
	 */
	public function startMacBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/mac/%s/jobs/%s/start', $backupAgentUid, $backupAgentJobUid));
	}

	/**
	 * Stop Job for Veeam Agent for Mac Stops a Veeam Agent for Mac job with the specified UID. Returns a positive response if the task is added to the internal queue and not when the task is executed.
	 * Path: /infrastructure/backupAgents/mac/{backupAgentUid}/jobs/{backupAgentJobUid}/stop
	 */
	public function stopMacBackupAgentJob(string $backupAgentUid, string $backupAgentJobUid): RequestBuilder {
		return $this->createPostRequest(sprintf('/mac/%s/jobs/%s/stop', $backupAgentUid, $backupAgentJobUid));
	}
}

