<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\Payload;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePutRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class CloudConnectRepository implements Repository {
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePutRequest;

	public function getBaseRoute(): string {
		return 'infrastructure/sites';
	}

	/**
	 * Get All Sites Returns a collection resource representation of all cloud agents installed on sites.
	 * Path: /infrastructure/sites
	 */
	public function getSites(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Site Backups Returns a collection resource representation of backups created by all Veeam Cloud Connect sites.
	 * Path: /infrastructure/sites/backups
	 */
	public function getCloudBackups(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/backups');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Site Backup Returns a resource representation of a backup with the specified UID created by a Veeam Cloud Connect site.
	 * Path: /infrastructure/sites/backups/{backupUid}
	 */
	public function getCloudBackup(string $backupUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/backups/%s', $backupUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Cloud Gateway Pools Returns a collection resource representation of all cloud gateway pools.
	 * Path: /infrastructure/sites/cloudgatewaypools
	 */
	public function getCloudGatewayPools(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/cloudgatewaypools');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Cloud Gateway Pool Returns a resource representation of a cloud gateway pool with the specified UID.
	 * Path: /infrastructure/sites/cloudgatewaypools/{instanceUid}
	 */
	public function getCloudGatewayPool(string $instanceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/cloudgatewaypools/%s', $instanceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Cloud Gateways in Pool Returns a collection resource representation of all cloud gateways included in a pool with the specified UID.
	 * Path: /infrastructure/sites/cloudgatewaypools/{instanceUid}/cloudgateways
	 */
	public function getCloudGatewaysByPool(string $instanceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/cloudgatewaypools/%s/cloudgateways', $instanceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Cloud Gateways Returns a collection resource representation of all cloud gateways.
	 * Path: /infrastructure/sites/cloudgateways
	 */
	public function getCloudGateways(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/cloudgateways');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Cloud Gateway Returns a resource representation of a cloud gateway with the specified UID.
	 * Path: /infrastructure/sites/cloudgateways/{gatewayUid}
	 */
	public function getCloudGateway(string $gatewayUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/cloudgateways/%s', $gatewayUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hardware Plans Returns a collection resource representation of all hardware plans.
	 * Path: /infrastructure/sites/hardwarePlans
	 */
	public function getBackupHardwarePlans(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hardwarePlans');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hardware Plan Storage Entities Returns a collection resource representation of all storage entities in all hardware plans.
	 * Path: /infrastructure/sites/hardwarePlans/storages
	 */
	public function getBackupHardwarePlansStorages(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/hardwarePlans/storages');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Hardware Plan Returns a resource representation of a hardware plan with the specified UID.
	 * Path: /infrastructure/sites/hardwarePlans/{instanceUid}
	 */
	public function getBackupHardwarePlan(string $instanceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/hardwarePlans/%s', $instanceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hardware Plan Storage Entities Returns a collection resource representation of all storage entities in a hardware plan with the specified UID.
	 * Path: /infrastructure/sites/hardwarePlans/{instanceUid}/storages
	 */
	public function getBackupHardwarePlanStorages(string $instanceUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/hardwarePlans/%s/storages', $instanceUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Tenants Returns a collection resource representation of all tenants.
	 * Path: /infrastructure/sites/tenants
	 */
	public function getTenants(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/tenants');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Tenant Veeam Products Returns a collection resource representation of tenant Veeam products that generated cloud data the latest.
	 * Path: /infrastructure/sites/tenants/products
	 */
	public function getCloudTenantsProducts(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/tenants/products');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Subtenants Returns a collection resource representation of all subtenants.
	 * Path: /infrastructure/sites/tenants/subtenants
	 */
	public function getSubTenants(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/tenants/subtenants');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Subtenant Returns a resource representation of a subtenant with the specified UID.
	 * Path: /infrastructure/sites/tenants/subtenants/{subtenantUid}
	 */
	public function getSubTenant(string $subtenantUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/tenants/subtenants/%s', $subtenantUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Tenant Returns a resource representation of a tenant with the specified UID.
	 * Path: /infrastructure/sites/tenants/{tenantUid}
	 */
	public function getTenant(string $tenantUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/tenants/%s', $tenantUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Cloud Gateway Pools Assigned to Tenant Returns a collection resource representation of all cloud gateway pools assigned to a tenant with the specified UID.
	 * Path: /infrastructure/sites/tenants/{tenantUid}/cloudGatewayPools
	 */
	public function getCloudGatewayPoolsByTenant(string $tenantUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/tenants/%s/cloudGatewayPools', $tenantUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Subtenants Registered by Tenant Returns a collection resource representation of all subtenants registered by a tenant with the specified UID.
	 * Path: /infrastructure/sites/tenants/{tenantUid}/subtenants
	 */
	public function getSubTenantsByTenant(string $tenantUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/tenants/%s/subtenants', $tenantUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VMware Cloud Director Servers Managed by All Veeam Cloud Connect Sites Returns a collection resource representation of VMware Cloud Director servers managed by all Veeam Cloud Connect Sites.
	 * Path: /infrastructure/sites/vcdServers
	 */
	public function getSitesVcdServers(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VMware Cloud Director Organizations Managed by All Veeam Cloud Connect Sites Returns a collection resource representation of VMware Cloud Director organizations managed by all Veeam Cloud Connect sites.
	 * Path: /infrastructure/sites/vcdServers/vcdOrganizations
	 */
	public function getSitesVcdOrganizations(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers/vcdOrganizations');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Users of VMware Cloud Director Organizations Managed by All Veeam Cloud Connect Sites Returns a collection resource representation of users of VMware Cloud Director organizations managed by all Veeam Cloud Connect sites.
	 * Path: /infrastructure/sites/vcdServers/vcdOrganizations/users
	 */
	public function getSitesVcdOrganizationUsers(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers/vcdOrganizations/users');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization VDCs Managed by All Veeam Cloud Connect Sites Returns a collection resource representation of organization VDCs managed by all Veeam Cloud Connect Sites.
	 * Path: /infrastructure/sites/vcdServers/vcdOrganizations/vDCs
	 */
	public function getSitesVcdOrganizationVDCs(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/vcdServers/vcdOrganizations/vDCs');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Wan Accelerators Returns a collection resource representation of all WAN accelerators.
	 * Path: /infrastructure/sites/wanAccelerators
	 */
	public function getSiteWanAcceleratorResources(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/wanAccelerators');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Wan Accelerator Returns a resource representation of a WAN accelerator with the specified UID.
	 * Path: /infrastructure/sites/wanAccelerators/{wanAcceleratorUid}
	 */
	public function getSiteWanAcceleratorResource(string $wanAcceleratorUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/wanAccelerators/%s', $wanAcceleratorUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Site Returns a resource representation of a cloud agent installed on a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}
	 */
	public function getSite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Site Modifies a cloud agent installed on a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}
	 */
	public function patchSite(string $siteUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/%s', $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Backups Created by Site Returns a collection resource representation of all backups created by a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/backups
	 */
	public function getCloudBackupsBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/backups', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Cloud Gateway Pools Configured for Site Returns a collection resource representation of all cloud gateway pools configured for a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/cloudgatewaypools
	 */
	public function getCloudGatewayPoolsBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/cloudgatewaypools', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Cloud Gateways Configured for Site Returns a collection resource representation of all cloud gateways configured for a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/cloudgateways
	 */
	public function getCloudGatewaysBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/cloudgateways', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Hardware Plans Configured on Site Returns a collection resource representation of all hardware plans configured on a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/hardwarePlans
	 */
	public function getBackupHardwarePlansBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/hardwarePlans', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Set Site Maintenance Mode Enables or disables the maintenance mode for a site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/maintenanceModeIsEnabled
	 */
	public function setSiteMaintenanceMode(string $siteUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/%s/maintenanceModeIsEnabled', $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Set Tenant Management on Site Enables or disables tenant management on a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/tenantManagementInCloudConnectIsEnabled
	 */
	public function setSiteTenantManagementMode(string $siteUid, ?Payload $payload = null, array $query = []): RequestBuilder {
		$request = $this->createPutRequest(sprintf( '/%s/tenantManagementInCloudConnectIsEnabled', $siteUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Tenants Registered on Site Returns a collection resource representation of tenants registered on a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/tenants
	 */
	public function getTenantsBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/tenants', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Tenant Veeam Products on Site Returns a collection resource representation of tenant Veeam products that generated the latest cloud data managed by a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/tenants/products
	 */
	public function getCloudTenantsProductsBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/tenants/products', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Subtenants Registered on Site Returns a collection resource representation of all subtenants provided with resources of a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/tenants/subtenants
	 */
	public function getSubTenantsBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/tenants/subtenants', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Servers Managed by Veeam Cloud Connect Site Returns a collection resource representation of all VMware Cloud Director servers managed by a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers
	 */
	public function getVcdServersBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VMware Cloud Director Organizations Managed by Veeam Cloud Connect Site Returns a collection resource representation of all VMware Cloud Director organizations managed by a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/vcdOrganizations
	 */
	public function getVcdOrganizationsBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Users of All VMware Cloud Director Organizations Managed by Veeam Cloud Connect Site Returns a collection resource representation of users of all VMware Cloud Director organizations managed by a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/vcdOrganizations/users
	 */
	public function getVcdOrganizationUsersBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/users', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Organization VDCs Managed by Veeam Cloud Connect Site Returns a collection resource representation of all organization VDCs managed by a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/vcdOrganizations/vDCs
	 */
	public function getVcdOrganizationVDCsBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/vDCs', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Organization VDC Managed by Veeam Cloud Connect Site Returns a resource representation of an organization VDC with the specified UID managed by a Veeam Cloud Connect site.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/vcdOrganizations/vDCs/{vdcUid}
	 */
	public function getSiteVcdOrganizationVDC(string $siteUid, string $vdcUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/vDCs/%s', $siteUid, $vdcUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VMware Cloud Director Organization Managed by Veeam Cloud Connect Site Returns a resource representation of a VMware Cloud Director organization with the specified UID managed by Veeam Cloud Connect Site.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/vcdOrganizations/{vcdOrganizationUid}
	 */
	public function getSiteVcdOrganization(string $siteUid, string $vcdOrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/%s', $siteUid, $vcdOrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Users of VMware Cloud Director Organization Managed by Veeam Cloud Connect Site Returns a collection resource representation of all users of a VMware Cloud Director organization with the specified UID managed by a Veeam Cloud Connect site.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/vcdOrganizations/{vcdOrganizationUid}/users
	 */
	public function getSiteVcdOrganizationUsersByOrganization(string $siteUid, string $vcdOrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/%s/users', $siteUid, $vcdOrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All VDCs Providing Resources to VMware Cloud Director Organization Managed by Veeam Cloud Connect Site Returns a collection resource representation of all VDCs that provide resources to a VMware Cloud Director organization with the specified UID managed by a Veeam Cloud Connect Site.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/vcdOrganizations/{vcdOrganizationUid}/vDCs
	 */
	public function getSitesVcdOrganizationVDCsByOrganization(string $siteUid, string $vcdOrganizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/vcdOrganizations/%s/vDCs', $siteUid, $vcdOrganizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get VMware Cloud Director Server Managed by Veeam Cloud Connect Site Returns a resource representation of a VMware Cloud Director server with the specified UID managed by a Veeam Cloud Connect site.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/{vcdServerUid}
	 */
	public function getSiteVcdServer(string $siteUid, string $vcdServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/%s', $siteUid, $vcdServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Organizations Configured on VMware Cloud Director Server Managed by Veeam Cloud Connect Site Returns a collection resource representation of all VMware Cloud Director organizations configured on a VMware Cloud Director server with the specified UID managed by a Veeam Cloud Connect site.
	 * Path: /infrastructure/sites/{siteUid}/vcdServers/{vcdServerUid}/vcdOrganizations
	 */
	public function getSitesVcdOrganizationsByVcd(string $siteUid, string $vcdServerUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/vcdServers/%s/vcdOrganizations', $siteUid, $vcdServerUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Wan Accelerators Configured for Site Returns a collection resource representation of all WAN accelerators configured for a Veeam Cloud Connect site with the specified UID.
	 * Path: /infrastructure/sites/{siteUid}/wanAccelerators
	 */
	public function getSiteWanAcceleratorResourcesBySite(string $siteUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/wanAccelerators', $siteUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
