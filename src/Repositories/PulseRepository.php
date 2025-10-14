<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreatePulseLicensePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditPulseConfigurationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditPulseLicensePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditPulseTenantPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class PulseRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'pulse';
	}

	/**
	 * Get VCSP Pulse Configuration Returns a resource representation of VCSP Pulse plugin configuration.
	 * Path: /pulse
	 */
	public function getPulseConfiguration(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify VCSP Pulse Configuration Modifies VCSP Pulse plugin configuration. > To disconnect the plugin, replace the `token` property value with `null`.
	 * Path: /pulse
	 */
        public function patchPulseConfiguration(?EditPulseConfigurationPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest('', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Rental Agreement Contracts Returns a collection resource representation of all rental agreement contracts.
	 * Path: /pulse/contracts
	 */
	public function getPulseLicenseContracts(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/contracts');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Licenses Managed in VCSP Pulse Rerurns a collection resource representation of all licenses managed in VCSP Pulse.
	 * Path: /pulse/licenses
	 */
	public function getPulseLicenses(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/licenses');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Add License to VCSP Pulse Adds a new license configuration with the specified parameters to VCSP Pulse.
	 * Path: /pulse/licenses
	 */
        public function createPulseLicense(?CreatePulseLicensePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/licenses', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete License Managed in VCSP Pulse. Deletes a license managed in VCSP Pulse with the specified UID.
	 * Path: /pulse/licenses/{licenseUid}
	 */
	public function deletePulseLicense(string $licenseUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/licenses/%s', $licenseUid ));
	}

	/**
	 * Get License Managed in VCSP Pulse Rerurns a resource representation of a license managed in VCSP Pulse with the specified UID.
	 * Path: /pulse/licenses/{licenseUid}
	 */
	public function getPulseLicense(string $licenseUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/licenses/%s', $licenseUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify License Managed in VCSP Pulse Modifies a license managed in VCSP Pulse with the specified UID.
	 * Path: /pulse/licenses/{licenseUid}
	 */
        public function patchPulseLicense(string $licenseUid, ?EditPulseLicensePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/licenses/%s', $licenseUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Copy License Managed in VCSP Pulse Creates a copy of a license managed in VCSP Pulse with the specified UID.
	 * Path: /pulse/licenses/{licenseUid}/copy
	 */
	public function copyPulseLicense(string $licenseUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/licenses/%s/copy', $licenseUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Download License Managed in VCSP Pulse Downloads a license managed in VCSP Pulse with the specified UID.
	 * Path: /pulse/licenses/{licenseUid}/download
	 */
	public function downloadPulseLicense(string $licenseUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/licenses/%s/download', $licenseUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Install License Managed in VCSP Pulse Installs a license managed in VCSP Pulse with the specified UID. >License must be issued to a company on whose server it will be installed. It also must not be installed on any other server. >Otherwise, the operation will create a copy of the license and install it on the server.
	 * Path: /pulse/licenses/{licenseUid}/install
	 */
	public function installPulseLicense(string $licenseUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/licenses/%s/install', $licenseUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Revoke License Managed in VCSP Pulse Revokes a license managed in VCSP Pulse with the specified UID.
	 * Path: /pulse/licenses/{licenseUid}/revoke
	 */
	public function revokePulseLicense(string $licenseUid): RequestBuilder {
		return $this->createPostRequest(sprintf( '/licenses/%s/revoke', $licenseUid ));
	}

	/**
	 * Get Veeam Products Available in VCSP Pulse Returns a collection resource representation of all Veeam products managed in VCSP Pulse.
	 * Path: /pulse/products
	 */
	public function getPulseLicenseProducts(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/products');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Synchronize with VCSP Pulse Portal Initiates synchronization with the VCSP Pulse portal.
	 * Path: /pulse/sync
	 */
	public function syncPulseData(): RequestBuilder {
		return $this->createPostRequest('/sync');
	}

	/**
	 * Get All VCSP Pulse Tenants Returns a collection resource representation of all VCSP Pulse tenants.
	 * Path: /pulse/tenants
	 */
	public function getPulseTenants(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/tenants');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create VCSP Pulse Tenant Creates a VCSP Pulse tenant based on a specific company.
	 * Path: /pulse/tenants
	 */
	public function createPulseTenantByCompany(array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/tenants');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VCSP Pulse Tenant Returns a resource representation of a VCSP Pulse tenant with the specified UID.
	 * Path: /pulse/tenants/{tenantUid}
	 */
	public function getPulseTenant(string $tenantUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/tenants/%s', $tenantUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify VCSP Pulse Tenant Modifies a VCSP Pulse tenant with the specified UID.
	 * Path: /pulse/tenants/{tenantUid}
	 */
        public function patchPulseTenant(string $tenantUid, ?EditPulseTenantPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/tenants/%s', $tenantUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company from VCSP Tenant Creates a company based on VCSP Pulse tenant with the specified UID.
	 * Path: /pulse/tenants/{tenantUid}/createCompany
	 */
	public function createCompanyByPulseTenant(string $tenantUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/tenants/%s/createCompany', $tenantUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
