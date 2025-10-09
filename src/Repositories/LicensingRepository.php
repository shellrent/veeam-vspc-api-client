<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\Payload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePutRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class LicensingRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;
	use CreatePutRequest;

	public function getBaseRoute(): string {
		return 'licensing';
	}

	/**
	 * Get All Veeam Backup & Replication Licenses Returns a collection resource representation of the licenses installed on all managed Veeam Backup & Replication servers.
	 * Path: /licensing/backupServers
	 */
	public function getBackupServersLicenses(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/backupServers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Veeam Backup & Replication License Deletes a license from a managed Veeam Backup & Replication server with the specified UID.
	 * Path: /licensing/backupServers/{backupServerUid}
	 */
	public function deleteBackupServerLicense(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createDeleteRequest(sprintf( '/backupServers/%s', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Backup & Replication License Returns a resource representation of a license installed on a managed Veeam Backup & Replication server with the specified UID.
	 * Path: /licensing/backupServers/{backupServerUid}
	 */
	public function getBackupServerLicense(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/backupServers/%s', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Veeam Backup & Replication License Modifies a license on a managed Veeam Backup & Replication server with the specified UID.
	 * Path: /licensing/backupServers/{backupServerUid}
	 */
	public function patchBackupServerLicense(string $backupServerUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/backupServers/%s', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Install Veeam Backup & Replication License Install a license on a managed Veeam Backup & Replication server with the specified UID.
	 * Path: /licensing/backupServers/{backupServerUid}
	 */
	public function installBackupServerLicense(string $backupServerUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/backupServers/%s', $backupServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Update Veeam Backup & Replication License Downloads a new license from the Internet and installs it on a Veeam Backup & Replication server.
	 * Path: /licensing/backupServers/{backupServerUid}/update
	 */
	public function updateBackupServerLicense(string $backupServerUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/backupServers/%s/update', $backupServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Service Provider Console License Returns resource representation of the currently installed Veeam Service Provider Console license.
	 * Path: /licensing/console
	 */
	public function getConsoleLicenseInformation(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/console');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Install Veeam Service Provider Console License Installs Veeam Service Provider Console license.
	 * Path: /licensing/console
	 */
	public function installConsoleLicense(?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest('/console', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Service Provider Console License Settings Returns a resource representation of the currently installed Veeam Service Provider Console license settings.
	 * Path: /licensing/console/settings
	 */
	public function getConsoleLicenseSettings(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/console/settings');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Update Veeam Service Provider Console License Downloads a new Veeam Service Provider Console license from the Internet and installs it.
	 * Path: /licensing/console/update
	 */
	public function updateConsoleLicense(array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/console/update');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All License Usage Reports Returns a collection resource representation of the Veeam license usage reports.
	 * Path: /licensing/reports
	 */
	public function getLicensingReports(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/reports');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Finalize License Usage Reports Finalize the Veeam license usage reports.
	 * Path: /licensing/reports/finalization
	 */
	public function finalizeLicensingReports(array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/reports/finalization');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Latest License Usage Reports Returns a collection resource representation of the latest Veeam license usage reports.
	 * Path: /licensing/reports/latest
	 */
	public function getLatestLicensingReports(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/reports/latest');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get License Usage Report Settings Returns a resource representation of license usage report settings.
	 * Path: /licensing/reports/settings
	 */
	public function getLicensingReportsSettings(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/reports/settings');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify License Usage Report Settings Modifies the Veeam licenses usage reports settings.
	 * Path: /licensing/reports/settings
	 */
	public function patchLicensingReportsSettings(?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest('/reports/settings', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get License Usage Reports for Date Returns a collection resource representation of the Veeam license usage reports with the specified generation date.
	 * Path: /licensing/reports/{date}
	 */
	public function getLicensingReportsForDate(string $date, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/reports/%s', $date ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Download License Usage Report Returns a download link to a license usage report with the specified ID in the `CSV` format.
	 * Path: /licensing/reports/{id}/csv
	 */
	public function downloadLicensingReportCsv(string $id): RequestBuilder {
		return $this->createGetRequest(sprintf( '/reports/%s/csv', $id ));
	}

	/**
	 * Get All Site Licenses Returns a collection resource representation of all licenses installed on the Veeam Cloud Connect sites.
	 * Path: /licensing/sites
	 */
	public function getSiteLicenses(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Site License Returns a resource representation of a license installed on the Veeam Cloud Connect site with the specified UID.
	 * Path: /licensing/sites/{siteUid}
	 */
	public function getSiteLicense(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/sites/%s', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Site License Modifies a license on a Veeam Cloud Connect site with the specified UID.
	 * Path: /licensing/sites/{siteUid}
	 */
	public function patchSiteLicense(string $siteUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/sites/%s', $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Install Site License Installs a license on the Veeam Cloud Connect site with the specified UID.
	 * Path: /licensing/sites/{siteUid}
	 */
	public function installSiteLicense(string $siteUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/sites/%s', $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Update Site License Downloads a license from the Internet and installs it on the Veeam Cloud Connect site with the specified UID.
	 * Path: /licensing/sites/{siteUid}/update
	 */
	public function updateSiteLicense(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/sites/%s/update', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get License Usage by All Organizations Returns a collection resource representation of license usage by all organizations.
	 * Path: /licensing/usage/organizations
	 */
	public function getOrganizationsLicenseUsage(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/usage/organizations');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Backup for Microsoft 365 Licenses Returns a collection resource representation of the licenses installed on all managed Veeam Backup for Microsoft 365 servers.
	 * Path: /licensing/vb365Servers
	 */
	public function getVb365ServersLicenses(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vb365Servers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Veeam Backup for Microsoft 365 License Returns a resource representation of a license installed on a managed Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /licensing/vb365Servers/{vb365ServerUid}
	 */
	public function getVb365ServerLicense(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/vb365Servers/%s', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Veeam Backup for Microsoft 365 License Modifies a license on a managed Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /licensing/vb365Servers/{vb365ServerUid}
	 */
	public function patchVb365ServerLicense(string $vb365ServerUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/vb365Servers/%s', $vb365ServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Install Veeam Backup for Microsoft 365 License Install a license on a managed Veeam Backup for Microsoft 365 server with the specified UID.
	 * Path: /licensing/vb365Servers/{vb365ServerUid}
	 */
	public function installVb365ServerLicense(string $vb365ServerUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/vb365Servers/%s', $vb365ServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Update Veeam Backup for Microsoft 365 License Downloads a new license from the Internet and installs it on a Veeam Backup for Microsoft 365 server.
	 * Path: /licensing/vb365Servers/{vb365ServerUid}/update
	 */
	public function updateVb365ServerLicense(string $vb365ServerUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/vb365Servers/%s/update', $vb365ServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam One Licenses Returns a collection resource representation of the licenses installed on all managed Veeam One servers.
	 * Path: /licensing/voneServers
	 */
	public function getVOneServersLicenses(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/voneServers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Veeam One License Deletes a license from a managed Veeam One server with the specified UID.
	 * Path: /licensing/voneServers/{vOneServerUid}
	 */
	public function deleteVOneServerLicense(string $vOneServerUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/voneServers/%s', $vOneServerUid ));
	}

	/**
	 * Get Veeam One License Returns a resource representation of a license installed on a managed Veeam One server with the specified UID.
	 * Path: /licensing/voneServers/{vOneServerUid}
	 */
	public function getVOneServerLicense(string $vOneServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/voneServers/%s', $vOneServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Veeam One License Modifies a license on a managed Veeam One server with the specified UID.
	 * Path: /licensing/voneServers/{vOneServerUid}
	 */
	public function patchVOneServerLicense(string $vOneServerUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/voneServers/%s', $vOneServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Install Veeam One License Install a license on a managed Veeam One server with the specified UID.
	 * Path: /licensing/voneServers/{vOneServerUid}
	 */
	public function installVOneServerLicense(string $vOneServerUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/voneServers/%s', $vOneServerUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Update Veeam One License Downloads a new license from the Internet and installs it on a Veeam One server.
	 * Path: /licensing/voneServers/{vOneServerUid}/update
	 */
	public function updateVOneServerLicense(string $vOneServerUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/voneServers/%s/update', $vOneServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
