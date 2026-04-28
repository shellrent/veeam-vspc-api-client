<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyMicrosoft365BackupResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyMicrosoft365ResourcePayload;
use Shellrent\VeeamVspcApiClient\Payloads\CreateCompanyPayload;
use Shellrent\VeeamVspcApiClient\Payloads\ModifyCompanyPayload;
use Shellrent\VeeamVspcApiClient\Payloads\ModifyCompanyResourcePayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class CompanyRepository implements Repository {
	use CreatePostRequest;

	use CreateGetRequest;

	use CreatePatchRequest;
	
	use CreateDeleteRequest;
	
	public function getBaseRoute(): string {
		return 'organizations/companies';
	}
	
	public function getAll(bool $expand = true): RequestBuilder {
		$request = $this->createGetRequest( '/' );

        if ($expand) {
            $request->query([
                'expand' => 'Organization'
            ]);
        }

        return $request;
	}

    public function getCompanySiteResources(string $companyUid) : RequestBuilder{
        return $this->createGetRequest( '/' . $companyUid . '/siteResources' );
    }

	public function postCreate( CreateCompanyPayload $request ): RequestBuilder {
		return $this->createPostRequest( '', $request );
	}
	
	public function patchModifyCompany( string $companyUid, ModifyCompanyPayload $payload ): RequestBuilder {
		return $this->createPatchRequest( sprintf( '/%s', $companyUid ), $payload );
	}

    public function delete( string $companyUid, bool $deleteAllAssignedAgents = false ): RequestBuilder {
        $request = $this->createDeleteRequest( '/' . $companyUid );
        
        if ($deleteAllAssignedAgents) {
            $request->query([
                'removeAllAgents' => $deleteAllAssignedAgents
            ]);
        }

        return $request;
    }
	
	public function get( string $companyUid ): RequestBuilder {
		return $this->createGetRequest( '/' . $companyUid );
	}
	
	public function getAllCompanyVb365Resources( string $companyId ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/hostedResources/vb365', $companyId ) );
	}
	
	public function getAllCompanyVb365BackupResources( string $companyId, string $vb365ResourceUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/hostedResources/vb365/%s/backupResources', $companyId, $vb365ResourceUid ) );
	}
	
	public function getCompanyVb365BackupResource( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid ): RequestBuilder {
		return $this->createGetRequest( sprintf( '/%s/hostedResources/vb365/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ) );
	}
	
	public function patchModifyCompanyVb365Resource( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid, ModifyCompanyResourcePayload $request ): RequestBuilder {
		return $this->createPatchRequest(
			sprintf( '/%s/hostedResources/vb365/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ),
			$request
		);
	}
	
	public function deleteCompanyVb365Resource( string $companyId, string $vb365ResourceUid ): RequestBuilder {
		return $this->createDeleteRequest( sprintf( '/%s/hostedResources/vb365/%s', $companyId, $vb365ResourceUid ) );
	}
	
	public function deleteCompanyVb365BackupResources( string $companyId, string $vb365ResourceUid, string $vb365BackupResourceUid ): RequestBuilder {
		return $this->createDeleteRequest( sprintf( '/%s/hostedResources/vb365/%s/backupResources/%s', $companyId, $vb365ResourceUid, $vb365BackupResourceUid ) );
	}
	
	public function createCompanyVb365Resource( string $companyId, CreateCompanyMicrosoft365ResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '/%s/hostedResources/vb365', $companyId ), $request );
	}
	
	public function createCompanyVb365BackupResource( string $companyId, string $vb365ResourceUid, CreateCompanyMicrosoft365BackupResourcePayload $request ): RequestBuilder {
		return $this->createPostRequest( sprintf( '/%s/hostedResources/vb365/%s/backupResources', $companyId, $vb365ResourceUid ), $request );
	}
}
