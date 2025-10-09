<?php

namespace Shellrent\VeeamVspcApiClient\Repositories;

use Shellrent\VeeamVspcApiClient\Support\CreateDeleteRequest;
use Shellrent\VeeamVspcApiClient\Support\CreateGetRequest;
use Shellrent\VeeamVspcApiClient\Support\CreatePostRequest;
use Shellrent\VeeamVspcApiClient\Support\RequestBuilder;

class AlarmRepository implements Repository {
	use CreateDeleteRequest;
	use CreateGetRequest;
	use CreatePostRequest;

	public function getBaseRoute(): string {
		return 'alarms';
	}

	/**
	 * Get All Triggered Alarms Returns collection resource representation of all Veeam Service Provider Console triggered alarms.
	 * Path: /alarms/active
	 */
	public function getActiveAlarms(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/active');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Triggered Alarm Deletes a triggered alarm with the specified UID.
	 * Path: /alarms/active/{activeAlarmUid}
	 */
	public function deleteActiveAlarm(string $activeAlarmUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/active/%s', $activeAlarmUid ));
	}

	/**
	 * Get Triggered Alarm Returns a resource representation of a triggered alarm with the specified UID.
	 * Path: /alarms/active/{activeAlarmUid}
	 */
	public function getActiveAlarm(string $activeAlarmUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/active/%s', $activeAlarmUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Acknowledge Triggered Alarm Assigns the Acknowledged status to a triggered alarm with the specified UID.
	 * Path: /alarms/active/{activeAlarmUid}/acknowledge
	 */
	public function acknowledgeActiveAlarm(string $activeAlarmUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/active/%s/acknowledge', $activeAlarmUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Triggered Alarm History Returns a collection resource representation of all status changes of a triggered alarm with the specified UID in chronological order.
	 * Path: /alarms/active/{activeAlarmUid}/history
	 */
	public function getActiveAlarmHistory(string $activeAlarmUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/active/%s/history', $activeAlarmUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Resolve Triggered Alarm Resolves a triggered alarm with the specified UID.
	 * Path: /alarms/active/{activeAlarmUid}/resolve
	 */
	public function resolveActiveAlarm(string $activeAlarmUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/active/%s/resolve', $activeAlarmUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get All Alarm Templates Returns a collection resource representation of all Veeam Service Provider Console alarm templates.
	 * Path: /alarms/templates
	 */
	public function getAlarms(array $query = []): RequestBuilder {
		$request = $this->createGetRequest('/templates');
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Delete Alarm Template Deletes an alarm template with the specified UID.
	 * Path: /alarms/templates/{alarmUid}
	 */
	public function deleteAlarm(string $alarmUid): RequestBuilder {
		return $this->createDeleteRequest(sprintf( '/templates/%s', $alarmUid ));
	}

	/**
	 * Get Alarm Template Returns a resource representation of an alarm template with the specified UID.
	 * Path: /alarms/templates/{alarmUid}
	 */
	public function getAlarm(string $alarmUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/templates/%s', $alarmUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Clone Alarm Template Creates a clone of an alarm template with the specified UID.
	 * Path: /alarms/templates/{alarmUid}/clone
	 */
	public function cloneAlarm(string $alarmUid, array $query = []): RequestBuilder {
		$request = $this->createPostRequest(sprintf( '/templates/%s/clone', $alarmUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}

	/**
	 * Get Alarm Status Changes Returns all status changes of a triggered alarm with the specified template UID.
	 * Path: /alarms/templates/{alarmUid}/events
	 */
	public function getActiveAlarmsByAlarm(string $alarmUid, array $query = []): RequestBuilder {
		$request = $this->createGetRequest(sprintf( '/templates/%s/events', $alarmUid ));
		if ($query !== []) {
			$request->query($query);
		}
		return $request;
	}
}
