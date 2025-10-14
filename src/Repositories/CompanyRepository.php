<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyHostedVbrBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyHostedVbrResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyHostedVbrTagResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyPayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanySiteBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanySiteReplicationResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanySiteResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanySiteVcdReplicationResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyVb365BackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyVb365ResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyWelcomeEmailPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanyHostedVbrBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanyHostedVbrResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanyPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanyPermissionsPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanySiteBackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanySiteReplicationResourceNetworkAppliancePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanySiteReplicationResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanySiteResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanySiteTrafficResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanySiteVcdReplicationResourceNetworkAppliancePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanySiteVcdReplicationResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanyVb365BackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditCompanyVb365ResourcePayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class CompanyRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'organizations/companies';
	}

	/**
	 * Get All Companies Returns a collection resource representation of all companies managed in Veeam Service Provider Console.
	 * Path: /organizations/companies
	 */
	public function getCompanies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company Creates a new company managed in Veeam Service Provider Console. > After you create a company, you must create a company Veeam Cloud Connect site resource by performing the `CreateCompanySiteResource` operation.
	 * Path: /organizations/companies
	 */
        public function createCompany(?CreateCompanyPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Veeam Backup for Microsoft 356 Resources Returns a collection resource representation of Veeam Backup for Microsoft 365 resources allocated to all companies.
	 * Path: /organizations/companies/hostedResources/vb365
	 */
	public function getCompaniesVb365Resources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hostedResources/vb365');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Veeam Backup for Microsoft 365 Backup Resources Returns a collection resource representation of all company Veeam Backup for Microsoft 365 backup resources.
	 * Path: /organizations/companies/hostedResources/vb365/backupResources
	 */
	public function getCompaniesVb365BackupResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hostedResources/vb365/backupResources');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Hosted Server Resources Returns a collection resource representation of hosted Veeam Backup & Replication server resources allocated to all companies.
	 * Path: /organizations/companies/hostedResources/vbr
	 */
	public function getCompaniesHostedVbrResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hostedResources/vbr');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Hosted Repository Resources Returns a collection resource representation of hosted Veeam Backup & Replication repository resources allocated to all companies.
	 * Path: /organizations/companies/hostedResources/vbr/backupResources
	 */
	public function getCompaniesHostedVbrBackupResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hostedResources/vbr/backupResources');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Mappings of VMware Cloud Director Organizations to All Companies with Assigned Hosted Resources Returns a collection resource representation of mappings of VMware Cloud Director organizations to all companies with assigned hosted resources.
	 * Path: /organizations/companies/hostedResources/vbr/mappedVcdOrganizations
	 */
	public function getCompaniesHostedVbrVcdOrganizationMappings(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hostedResources/vbr/mappedVcdOrganizations');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Tag Resources Returns a collection resource representation of all company tag resources.
	 * Path: /organizations/companies/hostedResources/vbr/tagResources
	 */
	public function getCompaniesHostedVbrTagResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hostedResources/vbr/tagResources');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Site Resources Returns a resource representation of all site resources allocated to all companies.
	 * Path: /organizations/companies/sites
	 */
	public function getCompaniesSiteResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Backup Resources Returns a collection resource representation of all company cloud backup resources.
	 * Path: /organizations/companies/sites/backupResources
	 */
	public function getCompaniesSiteBackupResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites/backupResources');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Usage of All Company Backup Resources Returns a collection resource representation of cloud backup resource usage by all companies.
	 * Path: /organizations/companies/sites/backupResources/usage
	 */
	public function getCompaniesSiteBackupResourcesUsages(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites/backupResources/usage');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company Replication Resources Returns a collection resource representation of all company cloud replication resources.
	 * Path: /organizations/companies/sites/replicationResources
	 */
	public function getCompaniesSiteReplicationResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites/replicationResources');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Usage of All Company Replication Resources Returns a collection resource representation of usage of all company cloud replication resources.
	 * Path: /organizations/companies/sites/replicationResources/usage
	 */
	public function getCompaniesSiteReplicationResourcesUsages(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites/replicationResources/usage');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Company VMware Cloud Director Replication Resources Returns a collection resource representation of all company VMware Cloud Director replication resources.
	 * Path: /organizations/companies/sites/vcdReplicationResources
	 */
	public function getCompaniesSiteVcdReplicationResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites/vcdReplicationResources');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Usage of All Company VMware Cloud Director Replication Resources Returns a collection resource representation of VMware Cloud Director replication resource usage by all companies.
	 * Path: /organizations/companies/sites/vcdReplicationResources/usage
	 */
	public function getCompaniesSiteVcdReplicationResourcesUsages(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/sites/vcdReplicationResources/usage');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Services Usage by All Companies Returns a collection resource representation of services consumed by companies.
	 * Path: /organizations/companies/usage
	 */
	public function getCompaniesAggregatedUsage(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/usage');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Deletes a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}
	 */
	public function deleteCompany(string $companyUid, array $query = []): RequestBuilder {
		$request = $this->createDeleteRequest(sprintf( '/%s', $companyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Company Returns a resource representation of a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}
	 */
	public function getCompany(string $companyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s', $companyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Modifies a company managed in Veeam Service Provider Console.
	 * Path: /organizations/companies/{companyUid}
	 */
        public function patchCompany(string $companyUid, ?EditCompanyPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s', $companyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Backup for Microsoft 365 Resources of Company Returns a collection resource representation of Veeam Backup for Microsoft 365 resources allocated to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365
	 */
	public function getCompanyVb365Resources(string $companyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vb365', $companyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company Veeam Backup for Microsoft 365 Resource Allocates a Veeam Backup for Microsoft 365 resource to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365
	 */
        public function createCompanyVb365Resource(string $companyUid, ?CreateCompanyVb365ResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/hostedResources/vb365', $companyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Veeam Backup for Microsoft 365 Resource Deletes a company Veeam Backup for Microsoft 365 resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}
	 */
	public function deleteCompanyVb365Resource(string $companyUid, string $vb365ResourceUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/hostedResources/vb365/%s', $companyUid, $vb365ResourceUid ));
	}

	/**
	 * Get Company Veeam Backup for Microsoft 365 Resource Returns a resource representation of company Veeam Backup for Microsoft 365 resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}
	 */
	public function getCompanyVb365Resource(string $companyUid, string $vb365ResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vb365/%s', $companyUid, $vb365ResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Veeam Backup for Microsoft 365 Resource Modifies a company Veeam Backup for Microsoft 365 resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}
	 */
        public function patchCompanyVb365Resource(string $companyUid, string $vb365ResourceUid, ?EditCompanyVb365ResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/hostedResources/vb365/%s', $companyUid, $vb365ResourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Veeam Backup for Microsoft 365 Backup Resources of Company Returns a collection resource representation of all backup resources allocated to a company on a Veeam Backup for Microsoft 365 resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}/backupResources
	 */
	public function getCompanyVb365BackupResources(string $companyUid, string $vb365ResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vb365/%s/backupResources', $companyUid, $vb365ResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company Veeam Backup for Microsoft 365 Backup Resource Allocates a new backup resource to a company on a Veeam Backup for Microsoft 365 resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}/backupResources
	 */
        public function createCompanyVb365BackupResource(string $companyUid, string $vb365ResourceUid, ?CreateCompanyVb365BackupResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/hostedResources/vb365/%s/backupResources', $companyUid, $vb365ResourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Veeam Backup for Microsoft 365 Backup Resource Deletes a company Veeam Backup for Microsoft 365 backup resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}/backupResources/{vb365BackupResourceUid}
	 */
	public function deleteCompanyVb365BackupResource(string $companyUid, string $vb365ResourceUid, string $vb365BackupResourceUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/hostedResources/vb365/%s/backupResources/%s', $companyUid, $vb365ResourceUid, $vb365BackupResourceUid ));
	}

	/**
	 * Get Company Veeam Backup for Microsoft 365 Backup Resource Returns a resource representation of a company Veeam Backup for Microsoft 365 backup resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}/backupResources/{vb365BackupResourceUid}
	 */
	public function getCompanyVb365BackupResource(string $companyUid, string $vb365ResourceUid, string $vb365BackupResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vb365/%s/backupResources/%s', $companyUid, $vb365ResourceUid, $vb365BackupResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Veeam Backup for Microsoft 365 Backup Resource Modifies a company Veeam Backup for Microsoft 365 backup resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vb365/{vb365ResourceUid}/backupResources/{vb365BackupResourceUid}
	 */
        public function patchCompanyVb365BackupResource(string $companyUid, string $vb365ResourceUid, string $vb365BackupResourceUid, ?EditCompanyVb365BackupResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/hostedResources/vb365/%s/backupResources/%s', $companyUid, $vb365ResourceUid, $vb365BackupResourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hosted Server Resources of Company Returns a collection resource representation of hosted Veeam Backup & Replication server resources allocated to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr
	 */
	public function getCompanyHostedVbrResources(string $companyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr', $companyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company Hosted Server Resource Allocates a hosted Veeam Backup & Replication server resource to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr
	 */
        public function createCompanyHostedVbrResource(string $companyUid, ?CreateCompanyHostedVbrResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/hostedResources/vbr', $companyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Hosted Server Resource Deletes a company hosted Veeam Backup & Replication server resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}
	 */
	public function deleteCompanyHostedVbrResource(string $companyUid, string $vbrHostedResourceUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/hostedResources/vbr/%s', $companyUid, $vbrHostedResourceUid ));
	}

	/**
	 * Get Company Hosted Server Resource Returns a resource representation of a company hosted Veeam Backup & Replication server resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}
	 */
	public function getCompanyHostedVbrResource(string $companyUid, string $vbrHostedResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr/%s', $companyUid, $vbrHostedResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Hosted Server Resource Modifies a company hosted Veeam Backup & Replication server resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}
	 */
        public function patchCompanyHostedVbrResource(string $companyUid, string $vbrHostedResourceUid, ?EditCompanyHostedVbrResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/hostedResources/vbr/%s', $companyUid, $vbrHostedResourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hosted Repository Resources of Company Returns a collection resource representation of all Veeam Backup & Replication repository resources allocated to a company on a hosted Veeam Backup & Replication server resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/backupResources
	 */
	public function getCompanyHostedVbrBackupResources(string $companyUid, string $vbrHostedResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr/%s/backupResources', $companyUid, $vbrHostedResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company Hosted Repository Resource Allocates a new Veeam Backup & Replication repository resource to a company on a hosted Veeam Backup & Replication server resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/backupResources
	 */
        public function createCompanyHostedVbrBackupResource(string $companyUid, string $vbrHostedResourceUid, ?CreateCompanyHostedVbrBackupResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/hostedResources/vbr/%s/backupResources', $companyUid, $vbrHostedResourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Hosted Repository Resource Deletes a company hosted Veeam Backup & Replication repository resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/backupResources/{hostedVbrBackupResourceUid}
	 */
	public function deleteCompanyHostedVbrBackupResource(string $companyUid, string $vbrHostedResourceUid, string $hostedVbrBackupResourceUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/hostedResources/vbr/%s/backupResources/%s', $companyUid, $vbrHostedResourceUid, $hostedVbrBackupResourceUid ));
	}

	/**
	 * Get Company Hosted Repository Resource Returns a resource representation of a company hosted Veeam Backup & Replication repository resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/backupResources/{hostedVbrBackupResourceUid}
	 */
	public function getCompanyHostedVbrBackupResource(string $companyUid, string $vbrHostedResourceUid, string $hostedVbrBackupResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr/%s/backupResources/%s', $companyUid, $vbrHostedResourceUid, $hostedVbrBackupResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Hosted Repository Resource Modifies a company hosted Veeam Backup & Replication repository resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/backupResources/{hostedVbrBackupResourceUid}
	 */
        public function patchCompanyHostedVbrBackupResource(string $companyUid, string $vbrHostedResourceUid, string $hostedVbrBackupResourceUid, ?EditCompanyHostedVbrBackupResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/hostedResources/vbr/%s/backupResources/%s', $companyUid, $vbrHostedResourceUid, $hostedVbrBackupResourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Mappings of VMware Cloud Director Organizations to Company with Assigned Hosted Resource Returns a collection resource representation of all mappings of VMware Cloud Director organizations to a company with an assigned hosted resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/mappedVcdOrganizations
	 */
	public function getCompanyHostedVbrVcdOrganizationMappings(string $companyUid, string $vbrHostedResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr/%s/mappedVcdOrganizations', $companyUid, $vbrHostedResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Mapping of VMware Cloud Director Organization to Company with Assigned Hosted Resource Maps a VMware Cloud Director organization to a company with an assigned hosted resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/mappedVcdOrganizations
	 */
	public function createCompanyHostedVbrVcdOrganizationMapping(string $companyUid, string $vbrHostedResourceUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/hostedResources/vbr/%s/mappedVcdOrganizations', $companyUid, $vbrHostedResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete VMware Cloud Director Organization to Company Mapping Deletes a VMware Cloud Director organization to company mapping with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/mappedVcdOrganizations/{mappingUid}
	 */
	public function deleteCompanyHostedVbrVcdOrganizationMapping(string $companyUid, string $vbrHostedResourceUid, string $mappingUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/hostedResources/vbr/%s/mappedVcdOrganizations/%s', $companyUid, $vbrHostedResourceUid, $mappingUid ));
	}

	/**
	 * Get VMware Cloud Director Organization to Company Mapping Returns a resource representation of a VMware Cloud Director organization to company mapping with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/mappedVcdOrganizations/{mappingUid}
	 */
	public function getCompanyHostedVbrVcdOrganizationMapping(string $companyUid, string $vbrHostedResourceUid, string $mappingUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr/%s/mappedVcdOrganizations/%s', $companyUid, $vbrHostedResourceUid, $mappingUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Tag Resources on Company Hosted Server Resource Returns a collection resource representation of all tag resources allocated to a company on a hosted Veeam Backup & Replication server resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/tagResources
	 */
	public function getCompanyHostedVbrTagResources(string $companyUid, string $vbrHostedResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr/%s/tagResources', $companyUid, $vbrHostedResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Tag Resource on Company Hosted Server Resource Allocates a new tag resource to a company on a hosted Veeam Backup & Replication server resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/tagResources
	 */
        public function createCompanyHostedVbrTagResource(string $companyUid, string $vbrHostedResourceUid, ?CreateCompanyHostedVbrTagResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/hostedResources/vbr/%s/tagResources', $companyUid, $vbrHostedResourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Tag Resource Deletes a company tag resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/tagResources/{hostedTagResourceUid}
	 */
	public function deleteCompanyHostedVbrTagResource(string $companyUid, string $vbrHostedResourceUid, string $hostedTagResourceUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/hostedResources/vbr/%s/tagResources/%s', $companyUid, $vbrHostedResourceUid, $hostedTagResourceUid ));
	}

	/**
	 * Get Company Tag Resource Returns a resource representation of a company tag resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/hostedResources/vbr/{vbrHostedResourceUid}/tagResources/{hostedTagResourceUid}
	 */
	public function getCompanyHostedVbrTagResource(string $companyUid, string $vbrHostedResourceUid, string $hostedTagResourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hostedResources/vbr/%s/tagResources/%s', $companyUid, $vbrHostedResourceUid, $hostedTagResourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Company Permissions Returns a collection resource representation of the Veeam Service Provider Console components that a company with the specified UID can access.
	 * Path: /organizations/companies/{companyUid}/permissions
	 */
	public function getCompanyPermissions(string $companyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/permissions', $companyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Permissions Modifies a set of the Veeam Service Provider Console components that a company with the specified UID can access.
	 * Path: /organizations/companies/{companyUid}/permissions
	 */
        public function patchCompanyPermissions(string $companyUid, ?EditCompanyPermissionsPayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/permissions', $companyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Site Resources Allocated to Company Returns a resource representation of site resources allocated to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites
	 */
	public function getCompanySiteResources(string $companyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites', $companyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company Site Resource Allocates a new site resource to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites
	 */
        public function createCompanySiteResource(string $companyUid, ?CreateCompanySiteResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/sites', $companyUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Site Resource Deletes a company site resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}
	 */
	public function deleteCompanySiteResource(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createDeleteRequest(sprintf( '/%s/sites/%s', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Company Site Resource Returns a resource representation of company site resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}
	 */
	public function getCompanySiteResource(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Site Resource Modifies a company site resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}
	 */
        public function patchCompanySiteResource(string $companyUid, string $siteUid, ?EditCompanySiteResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/sites/%s', $companyUid, $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backup Resources Allocated to Company on Site Returns a collection resource representation of all cloud backup resources allocated to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/backupResources
	 */
	public function getCompanySiteBackupResources(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/backupResources', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Creates Company Backup Resource on Site Allocate a new cloud backup resource to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/backupResources
	 */
        public function createCompanySiteBackupResource(string $companyUid, string $siteUid, ?CreateCompanySiteBackupResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/sites/%s/backupResources', $companyUid, $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Usage of All Backup Resources Allocated to Company on Site Returns a resource representation of a cloud backup resource usage by a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/backupResources/usage
	 */
	public function getCompanySiteBackupResourcesUsage(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/backupResources/usage', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Company Backup Resource Deletes a company cloud backup resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/backupResources/{resourceUid}
	 */
	public function deleteCompanySiteBackupResource(string $companyUid, string $siteUid, string $resourceUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/sites/%s/backupResources/%s', $companyUid, $siteUid, $resourceUid ));
	}

	/**
	 * Get Company Backup Resource Returns a resource representation of company cloud backup resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/backupResources/{resourceUid}
	 */
	public function getCompanySiteBackupResource(string $companyUid, string $siteUid, string $resourceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/backupResources/%s', $companyUid, $siteUid, $resourceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Backup Resource Modifies a company cloud backup resource with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/backupResources/{resourceUid}
	 */
        public function patchCompanySiteBackupResource(string $companyUid, string $siteUid, string $resourceUid, ?EditCompanySiteBackupResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/sites/%s/backupResources/%s', $companyUid, $siteUid, $resourceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Replication Resources Allocated to Company on Site Returns a collection resource representation of a cloud replication resources allocated to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources
	 */
	public function getCompanySiteReplicationResources(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/replicationResources', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Replication Resource on Site Modifies a cloud replication resource allocated to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources
	 */
        public function patchCompanySiteReplicationResource(string $companyUid, string $siteUid, ?EditCompanySiteReplicationResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/sites/%s/replicationResources', $companyUid, $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company Replication Resource on Site Allocates a new cloud replication resource to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources
	 */
        public function createCompanySiteReplicationResource(string $companyUid, string $siteUid, ?CreateCompanySiteReplicationResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/sites/%s/replicationResources', $companyUid, $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Unsubscribe Company from Hardware Plan Unsubscribes a company from a hardware plan with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources/hardwarePlans/{hardwarePlanUid}
	 */
	public function deleteCompanySiteReplicationResourceHardwarePlan(string $companyUid, string $siteUid, string $hardwarePlanUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/sites/%s/replicationResources/hardwarePlans/%s', $companyUid, $siteUid, $hardwarePlanUid ));
	}

	/**
	 * Get Company Hardware Plan Returns a resource representation of a company hardware plan with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources/hardwarePlans/{hardwarePlanUid}
	 */
	public function getCompanySiteReplicationResourceHardwarePlan(string $companyUid, string $siteUid, string $hardwarePlanUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/replicationResources/hardwarePlans/%s', $companyUid, $siteUid, $hardwarePlanUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Network Extension Appliances Allocated to Company on Site Returns a collection resource representation of a network extension appliances configured for a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources/networkextensionAppliance
	 */
	public function getCompanySiteReplicationResourcesNetworkAppliances(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/replicationResources/networkextensionAppliance', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Company Network Extension Appliance Returns a resource representation of a company network extension appliance with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources/networkextensionAppliance/{applianceUid}
	 */
	public function getCompanySiteReplicationResourcesNetworkAppliance(string $companyUid, string $siteUid, string $applianceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/replicationResources/networkextensionAppliance/%s', $companyUid, $siteUid, $applianceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Network Extension Appliance Modifies a company network extension appliance with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources/networkextensionAppliance/{applianceUid}
	 */
        public function patchCompanySiteReplicationResourcesNetworkAppliance(string $companyUid, string $siteUid, string $applianceUid, ?EditCompanySiteReplicationResourceNetworkAppliancePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/sites/%s/replicationResources/networkextensionAppliance/%s', $companyUid, $siteUid, $applianceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Usage of All Replication Resources Allocated to Company on Site Returns a collection resource representation of usage of all cloud replication resources allocated to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/replicationResources/usage
	 */
	public function getCompanySiteReplicationResourcesUsage(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/replicationResources/usage', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Company Traffic Resource Returns a resource representation of a cloud traffic quota configured for a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/traffic
	 */
	public function getCompanySiteTrafficResource(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/traffic', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Traffic Resource Modifies cloud traffic quota configured for a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/traffic
	 */
        public function patchCompanySiteTrafficResource(string $companyUid, string $siteUid, ?EditCompanySiteTrafficResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/sites/%s/traffic', $companyUid, $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Replication Resources Allocated to Company on Site Returns a collection resource representation of a VMware Cloud Director replication resource allocated to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources
	 */
	public function getCompanySiteVcdReplicationResources(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/vcdReplicationResources', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company VMware Cloud Director Replication Resource Modifies a VMware Cloud Director replication resource allocated to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources
	 */
        public function patchCompanySiteVcdReplicationResource(string $companyUid, string $siteUid, ?EditCompanySiteVcdReplicationResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/sites/%s/vcdReplicationResources', $companyUid, $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Company VMware Cloud Director Replication Resource on Site Allocates a new VMware Cloud Director replication resource to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources
	 */
        public function createCompanySiteVcdReplicationResource(string $companyUid, string $siteUid, ?CreateCompanySiteVcdReplicationResourcePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/%s/sites/%s/vcdReplicationResources', $companyUid, $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Unassign Organization VDC from Company Unassignes from a company an organization VDC with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources/dataCenters/{dataCenterUid}
	 */
	public function deleteCompanySiteVcdReplicationResourceDataCenter(string $companyUid, string $siteUid, string $dataCenterUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/%s/sites/%s/vcdReplicationResources/dataCenters/%s', $companyUid, $siteUid, $dataCenterUid ));
	}

	/**
	 * Get Company Organization VDC Returns a resource representation of an organization VDC with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources/dataCenters/{dataCenterUid}
	 */
	public function getCompanySiteVcdReplicationResourceDataCenter(string $companyUid, string $siteUid, string $dataCenterUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/vcdReplicationResources/dataCenters/%s', $companyUid, $siteUid, $dataCenterUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Replication Resources Allocated to Company on Site Returns a collection resource representation of all network extension appliances configured for a company on a Veeam Cloud Connect site with the specified system ID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources/networkExtensionAppliance
	 */
	public function getCompanySiteVcdReplicationResourcesNetworkAppliances(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/vcdReplicationResources/networkExtensionAppliance', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Company Network Extension Appliance Returns a resource representation of a company network extension appliance with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources/networkExtensionAppliance/{applianceUid}
	 */
	public function getCompanySiteVcdReplicationResourcesNetworkAppliance(string $companyUid, string $siteUid, string $applianceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/vcdReplicationResources/networkExtensionAppliance/%s', $companyUid, $siteUid, $applianceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Company Network Extension Appliance Modifies a company network extension appliance with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources/networkExtensionAppliance/{applianceUid}
	 */
        public function patchCompanySiteVcdReplicationResourcesNetworkAppliance(string $companyUid, string $siteUid, string $applianceUid, ?EditCompanySiteVcdReplicationResourceNetworkAppliancePayload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s/sites/%s/vcdReplicationResources/networkExtensionAppliance/%s', $companyUid, $siteUid, $applianceUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Usage of All VMware Cloud Director Replication Resources Allocated to Company on Site Returns a collection resource representation of usage of all VMware Cloud Director replication resources allocated to a company on a Veeam Cloud Connect site with the specified UID.
	 * Path: /organizations/companies/{companyUid}/sites/{siteUid}/vcdReplicationResources/usage
	 */
	public function getCompanySiteVcdReplicationResourcesUsage(string $companyUid, string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/sites/%s/vcdReplicationResources/usage', $companyUid, $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Services Usage by Company Returns a collection resource representation of services consumed by a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/usage
	 */
	public function getCompanyAggregatedUsage(string $companyUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/usage', $companyUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Send Welcome Email to Company Sends a welcome email to a company with the specified UID.
	 * Path: /organizations/companies/{companyUid}/welcomeEmail
	 */
        public function sendWelcomeEmailToCompany(string $companyUid, ?CreateCompanyWelcomeEmailPayload $payload = null): RequestBuilder {
		return $this->createPostRequest(sprintf( '/%s/welcomeEmail', $companyUid ), $payload);
	}
}
