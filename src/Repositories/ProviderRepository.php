<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class ProviderRepository implements Repository {
	use CreateGetRequest;

	public function getBaseRoute(): string {
		return 'organizations/provider';
	}

	/**
	 * Get Service Provider Returns a resource representation of a service provider.
	 * Path: /organizations/provider
	 */
	public function getProvider(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Companies Managed by Service Provider Returns a collection resource representation of all companies managed by a service provider.
	 * Path: /organizations/provider/companies
	 */
	public function getProviderCompanies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/companies');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
