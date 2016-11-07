<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Reports (reports_v1).
 *
 * <p>
 * Allows the administrators of Google Apps customers to fetch reports about the
 * usage, collaboration, security and risk for their users.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/admin-sdk/reports/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Reports extends Service
{
  /** View audit reports of Google Apps for your domain. */
  const ADMIN_REPORTS_AUDIT_READONLY =
      "https://www.googleapis.com/auth/admin.reports.audit.readonly";
  /** View usage reports of Google Apps for your domain. */
  const ADMIN_REPORTS_USAGE_READONLY =
      "https://www.googleapis.com/auth/admin.reports.usage.readonly";

  public $activities;
  public $channels;
  public $customerUsageReports;
  public $userUsageReport;
  

  /**
   * Constructs the internal representation of the Reports service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'admin/reports/v1/';
    $this->version = 'reports_v1';
    $this->serviceName = 'admin';

    $this->activities = new Reports_Activities_Resource(
        $this,
        $this->serviceName,
        'activities',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'activity/users/{userKey}/applications/{applicationName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'applicationName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'actorIpAddress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'eventName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'watch' => array(
              'path' => 'activity/users/{userKey}/applications/{applicationName}/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'applicationName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'actorIpAddress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'eventName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->channels = new Reports_Channels_Resource(
        $this,
        $this->serviceName,
        'channels',
        array(
          'methods' => array(
            'stop' => array(
              'path' => '/admin/reports_v1/channels/stop',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->customerUsageReports = new Reports_CustomerUsageReports_Resource(
        $this,
        $this->serviceName,
        'customerUsageReports',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'usage/dates/{date}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'date' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'parameters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->userUsageReport = new Reports_UserUsageReport_Resource(
        $this,
        $this->serviceName,
        'userUsageReport',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'usage/users/{userKey}/dates/{date}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'date' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'parameters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Reports(...);
 *   $activities = $adminService->activities;
 *  </code>
 */
class Reports_Activities_Resource extends Resource
{

  /**
   * Retrieves a list of activities for a specific customer and application.
   * (activities.listActivities)
   *
   * @param string $userKey Represents the profile id or the user email for which
   * the data should be filtered. When 'all' is specified as the userKey, it
   * returns usageReports for all users.
   * @param string $applicationName Application name for which the events are to
   * be retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startTime Return events which occured at or after this
   * time.
   * @opt_param string actorIpAddress IP Address of host where the event was
   * performed. Supports both IPv4 and IPv6 addresses.
   * @opt_param int maxResults Number of activity records to be shown in each
   * page.
   * @opt_param string eventName Name of the event being queried.
   * @opt_param string pageToken Token to specify next page.
   * @opt_param string filters Event parameters in the form [parameter1
   * name][operator][parameter1 value],[parameter2 name][operator][parameter2
   * value],...
   * @opt_param string endTime Return events which occured at or before this time.
   * @opt_param string customerId Represents the customer for which the data is to
   * be fetched.
   * @return Reports_Activities
   */
  public function listActivities($userKey, $applicationName, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'applicationName' => $applicationName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Reports_Activities");
  }

  /**
   * Push changes to activities (activities.watch)
   *
   * @param string $userKey Represents the profile id or the user email for which
   * the data should be filtered. When 'all' is specified as the userKey, it
   * returns usageReports for all users.
   * @param string $applicationName Application name for which the events are to
   * be retrieved.
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startTime Return events which occured at or after this
   * time.
   * @opt_param string actorIpAddress IP Address of host where the event was
   * performed. Supports both IPv4 and IPv6 addresses.
   * @opt_param int maxResults Number of activity records to be shown in each
   * page.
   * @opt_param string eventName Name of the event being queried.
   * @opt_param string pageToken Token to specify next page.
   * @opt_param string filters Event parameters in the form [parameter1
   * name][operator][parameter1 value],[parameter2 name][operator][parameter2
   * value],...
   * @opt_param string endTime Return events which occured at or before this time.
   * @opt_param string customerId Represents the customer for which the data is to
   * be fetched.
   * @return Reports_Channel
   */
  public function watch($userKey, $applicationName, Reports_Channel $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'applicationName' => $applicationName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Reports_Channel");
  }
}

/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Reports(...);
 *   $channels = $adminService->channels;
 *  </code>
 */
class Reports_Channels_Resource extends Resource
{

  /**
   * Stop watching resources through this channel (channels.stop)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   */
  public function stop(Reports_Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params));
  }
}

/**
 * The "customerUsageReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Reports(...);
 *   $customerUsageReports = $adminService->customerUsageReports;
 *  </code>
 */
class Reports_CustomerUsageReports_Resource extends Resource
{

  /**
   * Retrieves a report which is a collection of properties / statistics for a
   * specific customer. (customerUsageReports.get)
   *
   * @param string $date Represents the date in yyyy-mm-dd format for which the
   * data is to be fetched.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Token to specify next page.
   * @opt_param string customerId Represents the customer for which the data is to
   * be fetched.
   * @opt_param string parameters Represents the application name, parameter name
   * pairs to fetch in csv as app_name1:param_name1, app_name2:param_name2.
   * @return Reports_UsageReports
   */
  public function get($date, $optParams = array())
  {
    $params = array('date' => $date);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Reports_UsageReports");
  }
}

/**
 * The "userUsageReport" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Reports(...);
 *   $userUsageReport = $adminService->userUsageReport;
 *  </code>
 */
class Reports_UserUsageReport_Resource extends Resource
{

  /**
   * Retrieves a report which is a collection of properties / statistics for a set
   * of users. (userUsageReport.get)
   *
   * @param string $userKey Represents the profile id or the user email for which
   * the data should be filtered.
   * @param string $date Represents the date in yyyy-mm-dd format for which the
   * data is to be fetched.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string parameters Represents the application name, parameter name
   * pairs to fetch in csv as app_name1:param_name1, app_name2:param_name2.
   * @opt_param string maxResults Maximum number of results to return. Maximum
   * allowed is 1000
   * @opt_param string pageToken Token to specify next page.
   * @opt_param string filters Represents the set of filters including parameter
   * operator value.
   * @opt_param string customerId Represents the customer for which the data is to
   * be fetched.
   * @return Reports_UsageReports
   */
  public function get($userKey, $date, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'date' => $date);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Reports_UsageReports");
  }
}




class Reports_Activities extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  public $etag;
  protected $itemsType = 'Reports_Activity';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;


  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Reports_Activity extends Collection
{
  protected $collection_key = 'events';
  protected $internal_gapi_mappings = array(
  );
  protected $actorType = 'Reports_ActivityActor';
  protected $actorDataType = '';
  public $etag;
  protected $eventsType = 'Reports_ActivityEvents';
  protected $eventsDataType = 'array';
  protected $idType = 'Reports_ActivityId';
  protected $idDataType = '';
  public $ipAddress;
  public $kind;
  public $ownerDomain;


  public function setActor(Reports_ActivityActor $actor)
  {
    $this->actor = $actor;
  }
  public function getActor()
  {
    return $this->actor;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setEvents($events)
  {
    $this->events = $events;
  }
  public function getEvents()
  {
    return $this->events;
  }
  public function setId(Reports_ActivityId $id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOwnerDomain($ownerDomain)
  {
    $this->ownerDomain = $ownerDomain;
  }
  public function getOwnerDomain()
  {
    return $this->ownerDomain;
  }
}

class Reports_ActivityActor extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $callerType;
  public $email;
  public $key;
  public $profileId;


  public function setCallerType($callerType)
  {
    $this->callerType = $callerType;
  }
  public function getCallerType()
  {
    return $this->callerType;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setKey($key)
  {
    $this->key = $key;
  }
  public function getKey()
  {
    return $this->key;
  }
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  public function getProfileId()
  {
    return $this->profileId;
  }
}

class Reports_ActivityEvents extends Collection
{
  protected $collection_key = 'parameters';
  protected $internal_gapi_mappings = array(
  );
  public $name;
  protected $parametersType = 'Reports_ActivityEventsParameters';
  protected $parametersDataType = 'array';
  public $type;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  public function getParameters()
  {
    return $this->parameters;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Reports_ActivityEventsParameters extends Collection
{
  protected $collection_key = 'multiValue';
  protected $internal_gapi_mappings = array(
  );
  public $boolValue;
  public $intValue;
  public $multiIntValue;
  public $multiValue;
  public $name;
  public $value;


  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  public function getIntValue()
  {
    return $this->intValue;
  }
  public function setMultiIntValue($multiIntValue)
  {
    $this->multiIntValue = $multiIntValue;
  }
  public function getMultiIntValue()
  {
    return $this->multiIntValue;
  }
  public function setMultiValue($multiValue)
  {
    $this->multiValue = $multiValue;
  }
  public function getMultiValue()
  {
    return $this->multiValue;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Reports_ActivityId extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $applicationName;
  public $customerId;
  public $time;
  public $uniqueQualifier;


  public function setApplicationName($applicationName)
  {
    $this->applicationName = $applicationName;
  }
  public function getApplicationName()
  {
    return $this->applicationName;
  }
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  public function getCustomerId()
  {
    return $this->customerId;
  }
  public function setTime($time)
  {
    $this->time = $time;
  }
  public function getTime()
  {
    return $this->time;
  }
  public function setUniqueQualifier($uniqueQualifier)
  {
    $this->uniqueQualifier = $uniqueQualifier;
  }
  public function getUniqueQualifier()
  {
    return $this->uniqueQualifier;
  }
}

class Reports_Channel extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $address;
  public $expiration;
  public $id;
  public $kind;
  public $params;
  public $payload;
  public $resourceId;
  public $resourceUri;
  public $token;
  public $type;


  public function setAddress($address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  public function getExpiration()
  {
    return $this->expiration;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setParams($params)
  {
    $this->params = $params;
  }
  public function getParams()
  {
    return $this->params;
  }
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  public function getPayload()
  {
    return $this->payload;
  }
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  public function getResourceId()
  {
    return $this->resourceId;
  }
  public function setResourceUri($resourceUri)
  {
    $this->resourceUri = $resourceUri;
  }
  public function getResourceUri()
  {
    return $this->resourceUri;
  }
  public function setToken($token)
  {
    $this->token = $token;
  }
  public function getToken()
  {
    return $this->token;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Reports_ChannelParams extends Model
{
}

class Reports_UsageReport extends Collection
{
  protected $collection_key = 'parameters';
  protected $internal_gapi_mappings = array(
  );
  public $date;
  protected $entityType = 'Reports_UsageReportEntity';
  protected $entityDataType = '';
  public $etag;
  public $kind;
  protected $parametersType = 'Reports_UsageReportParameters';
  protected $parametersDataType = 'array';


  public function setDate($date)
  {
    $this->date = $date;
  }
  public function getDate()
  {
    return $this->date;
  }
  public function setEntity(Reports_UsageReportEntity $entity)
  {
    $this->entity = $entity;
  }
  public function getEntity()
  {
    return $this->entity;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  public function getParameters()
  {
    return $this->parameters;
  }
}

class Reports_UsageReportEntity extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $customerId;
  public $profileId;
  public $type;
  public $userEmail;


  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  public function getCustomerId()
  {
    return $this->customerId;
  }
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  public function getProfileId()
  {
    return $this->profileId;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

class Reports_UsageReportParameters extends Collection
{
  protected $collection_key = 'msgValue';
  protected $internal_gapi_mappings = array(
  );
  public $boolValue;
  public $datetimeValue;
  public $intValue;
  public $msgValue;
  public $name;
  public $stringValue;


  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  public function setDatetimeValue($datetimeValue)
  {
    $this->datetimeValue = $datetimeValue;
  }
  public function getDatetimeValue()
  {
    return $this->datetimeValue;
  }
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  public function getIntValue()
  {
    return $this->intValue;
  }
  public function setMsgValue($msgValue)
  {
    $this->msgValue = $msgValue;
  }
  public function getMsgValue()
  {
    return $this->msgValue;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class Reports_UsageReportParametersMsgValue extends Model
{
}

class Reports_UsageReports extends Collection
{
  protected $collection_key = 'warnings';
  protected $internal_gapi_mappings = array(
  );
  public $etag;
  public $kind;
  public $nextPageToken;
  protected $usageReportsType = 'Reports_UsageReport';
  protected $usageReportsDataType = 'array';
  protected $warningsType = 'Reports_UsageReportsWarnings';
  protected $warningsDataType = 'array';


  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setUsageReports($usageReports)
  {
    $this->usageReports = $usageReports;
  }
  public function getUsageReports()
  {
    return $this->usageReports;
  }
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  public function getWarnings()
  {
    return $this->warnings;
  }
}

class Reports_UsageReportsWarnings extends Collection
{
  protected $collection_key = 'data';
  protected $internal_gapi_mappings = array(
  );
  public $code;
  protected $dataType = 'Reports_UsageReportsWarningsData';
  protected $dataDataType = 'array';
  public $message;


  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function setData($data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }
  public function setMessage($message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Reports_UsageReportsWarningsData extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $key;
  public $value;


  public function setKey($key)
  {
    $this->key = $key;
  }
  public function getKey()
  {
    return $this->key;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}
