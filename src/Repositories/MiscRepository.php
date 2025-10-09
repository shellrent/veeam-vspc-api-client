<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class MiscRepository implements Repository {
	use CreateGetRequest;

	public function getBaseRoute(): string {
		return '';
	}

	/**
	 * Get Time Zones Returns a collection resource representation of all time zones.
	 * Path: /discovery/timeZones
	 */
	public function getTimeZones(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/discovery/timeZones');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Countries Returns a collection resource representation of all countries.
	 * Path: /misc/countries
	 */
	public function getCountries(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/misc/countries');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Currencies Returns a collection resource representation of all currencies.
	 * Path: /misc/currencies
	 */
	public function getCurrencies(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/misc/currencies');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All USA States Returns a collection resource representation of all USA states.
	 * Path: /misc/usaStates
	 */
	public function getUsaStates(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/misc/usaStates');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
