<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class LicensingRepository implements Repository {
	use CreateGetRequest;
	
	public function getBaseRoute(): string {
		return 'licensing';
	}
	
	public function getConsoleUsages(): RequestBuilder {
		return $this->createGetRequest( '/console/usage' );
	}
	
	public function getConsoleUsagesByCompany( string $companyUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/console/usage/companies/%s', $companyUid ) );
	}
	
	public function getUsageOfVeeamBackupReplicationLicensesByCompany( string $companyUid ): RequestBuilder {
		return $this->createGetRequest( '/backupServers/usage/companies/' . $companyUid );
	}
	
	public function getUsageOfVeeamBackupReplicationLicensesByAllCompanies(): RequestBuilder {
		return $this->createGetRequest( '/backupServers/usage/companies' );
	}
	
	public function getUsageOfAllVeeamBackupReplicationLicenses(): RequestBuilder {
		return $this->createGetRequest( '/backupServers/usage' );
	}
	
	public function getAllVeeamBackupReplicationLicenses(): RequestBuilder {
		return $this->createGetRequest( '/backupServers' );
	}
	
	public function getVeeamBackupReplicationLicense( string $backupServerUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/backupServers/%s', $backupServerUid ) );
	}
	
	public function getUsageOfVeeamBackupForMicrosoft365LicensesByCompany( string $companyUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/vbm365Servers/usage/companies/%s', $companyUid ) );
	}
	
	public function getUsageOfVeeamBackupReplicationLicense( string $backupServerUid ): RequestBuilder {
		return  $this->createGetRequest( sprintf( '/backupServers/%s/usage', $backupServerUid ) );
	}
	
	public function getVeeamBackupForMicrosoft365License( string $vbm365ServerUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/vbm365Servers/%s', $vbm365ServerUid ) );
	}
	
	public function getUsageOfAllVeeamBackupForMicrosoft365Licenses(): RequestBuilder {
		return $this->createGetRequest( '/vbm365Servers/usage' );
	}
	
	public function getAllVeeamBackupForMicrosoft365Licenses(): RequestBuilder {
		return $this->createGetRequest( '/vbm365Servers' );
	}
}