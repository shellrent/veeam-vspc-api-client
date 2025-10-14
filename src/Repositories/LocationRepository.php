<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Payloads\CreateLocationPayload;
use Shellrent\VeeamVspcApiClient\Payloads\EditLocationPayload;
use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePatchRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class LocationRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePatchRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'organizations';
	}

	/**
	 * Get All Locations Returns a collection resource representation of all organization locations.
	 * Path: /organizations/locations
	 */
	public function getLocations(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/locations');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Create Location Creates a new organization location.
	 * Path: /organizations/locations
	 */
	public function createLocation(CreateLocationPayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPostRequest('/locations', $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Location Deletes an organization location with the specified UID.
	 * Path: /organizations/locations/{locationUid}
	 */
	public function deleteLocation(string $locationUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/locations/%s', $locationUid ));
	}

	/**
	 * Get Location Returns a resource representation of a organization location with the specified UID.
	 * Path: /organizations/locations/{locationUid}
	 */
	public function getLocation(string $locationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/locations/%s', $locationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Modify Location Modifies an organization location.
	 * Path: /organizations/locations/{locationUid}
	 */
	public function patchLocation(string $locationUid, EditLocationPayload $payload, array $query = []): RequestBuilder {
		$request = $this->createPatchRequest(sprintf( '/locations/%s', $locationUid ), $payload);
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Organization Locations Returns a collection resource representation of all locations of an organization with the specified UID.
	 * Path: /organizations/{organizationUid}/locations
	 */
	public function getLocationsByOrganization(string $organizationUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/%s/locations', $organizationUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
