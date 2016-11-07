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
 * Service definition for Storagetransfer (v1).
 *
 * <p>
 * Transfers data from external data sources to a Google Cloud Storage bucket or
 * between Google Cloud Storage buckets.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/storage/transfer" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Storagetransfer extends Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $googleServiceAccounts;
  public $transferJobs;
  public $transferOperations;
  public $v1;
  

  /**
   * Constructs the internal representation of the Storagetransfer service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://storagetransfer.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1';
    $this->serviceName = 'storagetransfer';

    $this->googleServiceAccounts = new Storagetransfer_GoogleServiceAccounts_Resource(
        $this,
        $this->serviceName,
        'googleServiceAccounts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1/googleServiceAccounts/{projectId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->transferJobs = new Storagetransfer_TransferJobs_Resource(
        $this,
        $this->serviceName,
        'transferJobs',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/transferJobs',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'v1/{+jobName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'jobName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'v1/transferJobs',
              'httpMethod' => 'GET',
              'parameters' => array(
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1/{+jobName}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'jobName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->transferOperations = new Storagetransfer_TransferOperations_Resource(
        $this,
        $this->serviceName,
        'transferOperations',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => 'v1/{+name}:cancel',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'pause' => array(
              'path' => 'v1/{+name}:pause',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'resume' => array(
              'path' => 'v1/{+name}:resume',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->v1 = new Storagetransfer_V1_Resource(
        $this,
        $this->serviceName,
        'v1',
        array(
          'methods' => array(
            'getGoogleServiceAccount' => array(
              'path' => 'v1:getGoogleServiceAccount',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
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
 * The "googleServiceAccounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storagetransferService = new Storagetransfer(...);
 *   $googleServiceAccounts = $storagetransferService->googleServiceAccounts;
 *  </code>
 */
class Storagetransfer_GoogleServiceAccounts_Resource extends Resource
{

  /**
   * Returns the Google service account that is used by Storage Transfer Service
   * to access buckets in the project where transfers run or in other projects.
   * Each Google service account is associated with one Google Developers Console
   * project. Users should add this service account to the Google Cloud Storage
   * bucket ACLs to grant access to Storage Transfer Service. This service account
   * is created and owned by Storage Transfer Service and can only be used by
   * Storage Transfer Service. (googleServiceAccounts.get)
   *
   * @param string $projectId The ID of the Google Developers Console project that
   * the Google service account is associated with. Required.
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_GoogleServiceAccount
   */
  public function get($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Storagetransfer_GoogleServiceAccount");
  }
}

/**
 * The "transferJobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storagetransferService = new Storagetransfer(...);
 *   $transferJobs = $storagetransferService->transferJobs;
 *  </code>
 */
class Storagetransfer_TransferJobs_Resource extends Resource
{

  /**
   * Creates a transfer job that runs periodically. (transferJobs.create)
   *
   * @param Google_TransferJob $postBody
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_TransferJob
   */
  public function create(Storagetransfer_TransferJob $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Storagetransfer_TransferJob");
  }

  /**
   * Gets a transfer job. (transferJobs.get)
   *
   * @param string $jobName The job to get. Required.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId The ID of the Google Developers Console project
   * that owns the job. Required.
   * @return Storagetransfer_TransferJob
   */
  public function get($jobName, $optParams = array())
  {
    $params = array('jobName' => $jobName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Storagetransfer_TransferJob");
  }

  /**
   * Lists transfer jobs. (transferJobs.listTransferJobs)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter A list of query parameters specified as JSON text in
   * the form of {"`project_id`":"my_project_id",
   * "`job_names`":["jobid1","jobid2",...],
   * "`job_statuses`":["status1","status2",...]}. Since `job_names` and
   * `job_statuses` support multiple values, their values must be specified with
   * array notation. `project_id` is required. `job_names` and `job_statuses` are
   * optional. The valid values for `job_statuses` are case-insensitive:
   * `ENABLED`, `DISABLED`, and `DELETED`.
   * @opt_param string pageToken The list page token.
   * @opt_param int pageSize The list page size. The max allowed value is 256.
   * @return Storagetransfer_ListTransferJobsResponse
   */
  public function listTransferJobs($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Storagetransfer_ListTransferJobsResponse");
  }

  /**
   * Updates a transfer job. Updating a job's transfer spec does not affect
   * transfer operations that are running already. Updating the scheduling of a
   * job is not allowed. (transferJobs.patch)
   *
   * @param string $jobName The name of job to update. Required.
   * @param Google_UpdateTransferJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_TransferJob
   */
  public function patch($jobName, Storagetransfer_UpdateTransferJobRequest $postBody, $optParams = array())
  {
    $params = array('jobName' => $jobName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Storagetransfer_TransferJob");
  }
}

/**
 * The "transferOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storagetransferService = new Storagetransfer(...);
 *   $transferOperations = $storagetransferService->transferOperations;
 *  </code>
 */
class Storagetransfer_TransferOperations_Resource extends Resource
{

  /**
   * Cancels a transfer. Use the get method to check whether the cancellation
   * succeeded or whether the operation completed despite cancellation.
   * (transferOperations.cancel)
   *
   * @param string $name The name of the operation resource to be cancelled.
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_Empty
   */
  public function cancel($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), "Storagetransfer_Empty");
  }

  /**
   * This method is not supported and the server returns `UNIMPLEMENTED`.
   * (transferOperations.delete)
   *
   * @param string $name The name of the operation resource to be deleted.
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_Empty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Storagetransfer_Empty");
  }

  /**
   * Gets the latest state of a long-running operation. Clients can use this
   * method to poll the operation result at intervals as recommended by the API
   * service. (transferOperations.get)
   *
   * @param string $name The name of the operation resource.
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_Operation
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Storagetransfer_Operation");
  }

  /**
   * Lists operations that match the specified filter in the request. If the
   * server doesn't support this method, it returns `UNIMPLEMENTED`. NOTE: the
   * `name` binding below allows API services to override the binding to use
   * different resource name schemes, such as `users/operations`.
   * (transferOperations.listTransferOperations)
   *
   * @param string $name The value `transferOperations`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter The standard list filter.
   * @opt_param string pageToken The standard list page token.
   * @opt_param int pageSize The standard list page size.
   * @return Storagetransfer_ListOperationsResponse
   */
  public function listTransferOperations($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Storagetransfer_ListOperationsResponse");
  }

  /**
   * Pauses a transfer operation. (transferOperations.pause)
   *
   * @param string $name The name of the transfer operation. Required.
   * @param Google_PauseTransferOperationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_Empty
   */
  public function pause($name, Storagetransfer_PauseTransferOperationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('pause', array($params), "Storagetransfer_Empty");
  }

  /**
   * Resumes a transfer operation that is paused. (transferOperations.resume)
   *
   * @param string $name The name of the transfer operation. Required.
   * @param Google_ResumeTransferOperationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Storagetransfer_Empty
   */
  public function resume($name, Storagetransfer_ResumeTransferOperationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resume', array($params), "Storagetransfer_Empty");
  }
}

/**
 * The "v1" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storagetransferService = new Storagetransfer(...);
 *   $v1 = $storagetransferService->v1;
 *  </code>
 */
class Storagetransfer_V1_Resource extends Resource
{

  /**
   * Returns the Google service account that is used by Storage Transfer Service
   * to access buckets in the project where transfers run or in other projects.
   * Each Google service account is associated with one Google Developers Console
   * project. Users should add this service account to the Google Cloud Storage
   * bucket ACLs to grant access to Storage Transfer Service. This service account
   * is created and owned by Storage Transfer Service and can only be used by
   * Storage Transfer Service. (v1.getGoogleServiceAccount)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId The ID of the Google Developers Console project
   * that the Google service account is associated with. Required.
   * @return Storagetransfer_GoogleServiceAccount
   */
  public function getGoogleServiceAccount($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getGoogleServiceAccount', array($params), "Storagetransfer_GoogleServiceAccount");
  }
}




class Storagetransfer_AwsAccessKey extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accessKeyId;
  public $secretAccessKey;


  public function setAccessKeyId($accessKeyId)
  {
    $this->accessKeyId = $accessKeyId;
  }
  public function getAccessKeyId()
  {
    return $this->accessKeyId;
  }
  public function setSecretAccessKey($secretAccessKey)
  {
    $this->secretAccessKey = $secretAccessKey;
  }
  public function getSecretAccessKey()
  {
    return $this->secretAccessKey;
  }
}

class Storagetransfer_AwsS3Data extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $awsAccessKeyType = 'Storagetransfer_AwsAccessKey';
  protected $awsAccessKeyDataType = '';
  public $bucketName;


  public function setAwsAccessKey(Storagetransfer_AwsAccessKey $awsAccessKey)
  {
    $this->awsAccessKey = $awsAccessKey;
  }
  public function getAwsAccessKey()
  {
    return $this->awsAccessKey;
  }
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  public function getBucketName()
  {
    return $this->bucketName;
  }
}

class Storagetransfer_Date extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $day;
  public $month;
  public $year;


  public function setDay($day)
  {
    $this->day = $day;
  }
  public function getDay()
  {
    return $this->day;
  }
  public function setMonth($month)
  {
    $this->month = $month;
  }
  public function getMonth()
  {
    return $this->month;
  }
  public function setYear($year)
  {
    $this->year = $year;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class Storagetransfer_Empty extends Model
{
}

class Storagetransfer_ErrorLogEntry extends Collection
{
  protected $collection_key = 'errorDetails';
  protected $internal_gapi_mappings = array(
  );
  public $errorDetails;
  public $url;


  public function setErrorDetails($errorDetails)
  {
    $this->errorDetails = $errorDetails;
  }
  public function getErrorDetails()
  {
    return $this->errorDetails;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}

class Storagetransfer_ErrorSummary extends Collection
{
  protected $collection_key = 'errorLogEntries';
  protected $internal_gapi_mappings = array(
  );
  public $errorCode;
  public $errorCount;
  protected $errorLogEntriesType = 'Storagetransfer_ErrorLogEntry';
  protected $errorLogEntriesDataType = 'array';


  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  public function setErrorLogEntries($errorLogEntries)
  {
    $this->errorLogEntries = $errorLogEntries;
  }
  public function getErrorLogEntries()
  {
    return $this->errorLogEntries;
  }
}

class Storagetransfer_GcsData extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bucketName;


  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  public function getBucketName()
  {
    return $this->bucketName;
  }
}

class Storagetransfer_GoogleServiceAccount extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accountEmail;


  public function setAccountEmail($accountEmail)
  {
    $this->accountEmail = $accountEmail;
  }
  public function getAccountEmail()
  {
    return $this->accountEmail;
  }
}

class Storagetransfer_HttpData extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $listUrl;


  public function setListUrl($listUrl)
  {
    $this->listUrl = $listUrl;
  }
  public function getListUrl()
  {
    return $this->listUrl;
  }
}

class Storagetransfer_ListOperationsResponse extends Collection
{
  protected $collection_key = 'operations';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $operationsType = 'Storagetransfer_Operation';
  protected $operationsDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  public function getOperations()
  {
    return $this->operations;
  }
}

class Storagetransfer_ListTransferJobsResponse extends Collection
{
  protected $collection_key = 'transferJobs';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $transferJobsType = 'Storagetransfer_TransferJob';
  protected $transferJobsDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTransferJobs($transferJobs)
  {
    $this->transferJobs = $transferJobs;
  }
  public function getTransferJobs()
  {
    return $this->transferJobs;
  }
}

class Storagetransfer_ObjectConditions extends Collection
{
  protected $collection_key = 'includePrefixes';
  protected $internal_gapi_mappings = array(
  );
  public $excludePrefixes;
  public $includePrefixes;
  public $maxTimeElapsedSinceLastModification;
  public $minTimeElapsedSinceLastModification;


  public function setExcludePrefixes($excludePrefixes)
  {
    $this->excludePrefixes = $excludePrefixes;
  }
  public function getExcludePrefixes()
  {
    return $this->excludePrefixes;
  }
  public function setIncludePrefixes($includePrefixes)
  {
    $this->includePrefixes = $includePrefixes;
  }
  public function getIncludePrefixes()
  {
    return $this->includePrefixes;
  }
  public function setMaxTimeElapsedSinceLastModification($maxTimeElapsedSinceLastModification)
  {
    $this->maxTimeElapsedSinceLastModification = $maxTimeElapsedSinceLastModification;
  }
  public function getMaxTimeElapsedSinceLastModification()
  {
    return $this->maxTimeElapsedSinceLastModification;
  }
  public function setMinTimeElapsedSinceLastModification($minTimeElapsedSinceLastModification)
  {
    $this->minTimeElapsedSinceLastModification = $minTimeElapsedSinceLastModification;
  }
  public function getMinTimeElapsedSinceLastModification()
  {
    return $this->minTimeElapsedSinceLastModification;
  }
}

class Storagetransfer_Operation extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $done;
  protected $errorType = 'Storagetransfer_Status';
  protected $errorDataType = '';
  public $metadata;
  public $name;
  public $response;


  public function setDone($done)
  {
    $this->done = $done;
  }
  public function getDone()
  {
    return $this->done;
  }
  public function setError(Storagetransfer_Status $error)
  {
    $this->error = $error;
  }
  public function getError()
  {
    return $this->error;
  }
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setResponse($response)
  {
    $this->response = $response;
  }
  public function getResponse()
  {
    return $this->response;
  }
}

class Storagetransfer_OperationMetadata extends Model
{
}

class Storagetransfer_OperationResponse extends Model
{
}

class Storagetransfer_PauseTransferOperationRequest extends Model
{
}

class Storagetransfer_ResumeTransferOperationRequest extends Model
{
}

class Storagetransfer_Schedule extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $scheduleEndDateType = 'Storagetransfer_Date';
  protected $scheduleEndDateDataType = '';
  protected $scheduleStartDateType = 'Storagetransfer_Date';
  protected $scheduleStartDateDataType = '';
  protected $startTimeOfDayType = 'Storagetransfer_TimeOfDay';
  protected $startTimeOfDayDataType = '';


  public function setScheduleEndDate(Storagetransfer_Date $scheduleEndDate)
  {
    $this->scheduleEndDate = $scheduleEndDate;
  }
  public function getScheduleEndDate()
  {
    return $this->scheduleEndDate;
  }
  public function setScheduleStartDate(Storagetransfer_Date $scheduleStartDate)
  {
    $this->scheduleStartDate = $scheduleStartDate;
  }
  public function getScheduleStartDate()
  {
    return $this->scheduleStartDate;
  }
  public function setStartTimeOfDay(Storagetransfer_TimeOfDay $startTimeOfDay)
  {
    $this->startTimeOfDay = $startTimeOfDay;
  }
  public function getStartTimeOfDay()
  {
    return $this->startTimeOfDay;
  }
}

class Storagetransfer_Status extends Collection
{
  protected $collection_key = 'details';
  protected $internal_gapi_mappings = array(
  );
  public $code;
  public $details;
  public $message;


  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function setDetails($details)
  {
    $this->details = $details;
  }
  public function getDetails()
  {
    return $this->details;
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

class Storagetransfer_StatusDetails extends Model
{
}

class Storagetransfer_TimeOfDay extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $hours;
  public $minutes;
  public $nanos;
  public $seconds;


  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  public function getHours()
  {
    return $this->hours;
  }
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  public function getMinutes()
  {
    return $this->minutes;
  }
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  public function getNanos()
  {
    return $this->nanos;
  }
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class Storagetransfer_TransferCounters extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bytesCopiedToSink;
  public $bytesDeletedFromSink;
  public $bytesDeletedFromSource;
  public $bytesFailedToDeleteFromSink;
  public $bytesFoundFromSource;
  public $bytesFoundOnlyFromSink;
  public $bytesFromSourceFailed;
  public $bytesFromSourceSkippedBySync;
  public $objectsCopiedToSink;
  public $objectsDeletedFromSink;
  public $objectsDeletedFromSource;
  public $objectsFailedToDeleteFromSink;
  public $objectsFoundFromSource;
  public $objectsFoundOnlyFromSink;
  public $objectsFromSourceFailed;
  public $objectsFromSourceSkippedBySync;


  public function setBytesCopiedToSink($bytesCopiedToSink)
  {
    $this->bytesCopiedToSink = $bytesCopiedToSink;
  }
  public function getBytesCopiedToSink()
  {
    return $this->bytesCopiedToSink;
  }
  public function setBytesDeletedFromSink($bytesDeletedFromSink)
  {
    $this->bytesDeletedFromSink = $bytesDeletedFromSink;
  }
  public function getBytesDeletedFromSink()
  {
    return $this->bytesDeletedFromSink;
  }
  public function setBytesDeletedFromSource($bytesDeletedFromSource)
  {
    $this->bytesDeletedFromSource = $bytesDeletedFromSource;
  }
  public function getBytesDeletedFromSource()
  {
    return $this->bytesDeletedFromSource;
  }
  public function setBytesFailedToDeleteFromSink($bytesFailedToDeleteFromSink)
  {
    $this->bytesFailedToDeleteFromSink = $bytesFailedToDeleteFromSink;
  }
  public function getBytesFailedToDeleteFromSink()
  {
    return $this->bytesFailedToDeleteFromSink;
  }
  public function setBytesFoundFromSource($bytesFoundFromSource)
  {
    $this->bytesFoundFromSource = $bytesFoundFromSource;
  }
  public function getBytesFoundFromSource()
  {
    return $this->bytesFoundFromSource;
  }
  public function setBytesFoundOnlyFromSink($bytesFoundOnlyFromSink)
  {
    $this->bytesFoundOnlyFromSink = $bytesFoundOnlyFromSink;
  }
  public function getBytesFoundOnlyFromSink()
  {
    return $this->bytesFoundOnlyFromSink;
  }
  public function setBytesFromSourceFailed($bytesFromSourceFailed)
  {
    $this->bytesFromSourceFailed = $bytesFromSourceFailed;
  }
  public function getBytesFromSourceFailed()
  {
    return $this->bytesFromSourceFailed;
  }
  public function setBytesFromSourceSkippedBySync($bytesFromSourceSkippedBySync)
  {
    $this->bytesFromSourceSkippedBySync = $bytesFromSourceSkippedBySync;
  }
  public function getBytesFromSourceSkippedBySync()
  {
    return $this->bytesFromSourceSkippedBySync;
  }
  public function setObjectsCopiedToSink($objectsCopiedToSink)
  {
    $this->objectsCopiedToSink = $objectsCopiedToSink;
  }
  public function getObjectsCopiedToSink()
  {
    return $this->objectsCopiedToSink;
  }
  public function setObjectsDeletedFromSink($objectsDeletedFromSink)
  {
    $this->objectsDeletedFromSink = $objectsDeletedFromSink;
  }
  public function getObjectsDeletedFromSink()
  {
    return $this->objectsDeletedFromSink;
  }
  public function setObjectsDeletedFromSource($objectsDeletedFromSource)
  {
    $this->objectsDeletedFromSource = $objectsDeletedFromSource;
  }
  public function getObjectsDeletedFromSource()
  {
    return $this->objectsDeletedFromSource;
  }
  public function setObjectsFailedToDeleteFromSink($objectsFailedToDeleteFromSink)
  {
    $this->objectsFailedToDeleteFromSink = $objectsFailedToDeleteFromSink;
  }
  public function getObjectsFailedToDeleteFromSink()
  {
    return $this->objectsFailedToDeleteFromSink;
  }
  public function setObjectsFoundFromSource($objectsFoundFromSource)
  {
    $this->objectsFoundFromSource = $objectsFoundFromSource;
  }
  public function getObjectsFoundFromSource()
  {
    return $this->objectsFoundFromSource;
  }
  public function setObjectsFoundOnlyFromSink($objectsFoundOnlyFromSink)
  {
    $this->objectsFoundOnlyFromSink = $objectsFoundOnlyFromSink;
  }
  public function getObjectsFoundOnlyFromSink()
  {
    return $this->objectsFoundOnlyFromSink;
  }
  public function setObjectsFromSourceFailed($objectsFromSourceFailed)
  {
    $this->objectsFromSourceFailed = $objectsFromSourceFailed;
  }
  public function getObjectsFromSourceFailed()
  {
    return $this->objectsFromSourceFailed;
  }
  public function setObjectsFromSourceSkippedBySync($objectsFromSourceSkippedBySync)
  {
    $this->objectsFromSourceSkippedBySync = $objectsFromSourceSkippedBySync;
  }
  public function getObjectsFromSourceSkippedBySync()
  {
    return $this->objectsFromSourceSkippedBySync;
  }
}

class Storagetransfer_TransferJob extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $creationTime;
  public $deletionTime;
  public $description;
  public $lastModificationTime;
  public $name;
  public $projectId;
  protected $scheduleType = 'Storagetransfer_Schedule';
  protected $scheduleDataType = '';
  public $status;
  protected $transferSpecType = 'Storagetransfer_TransferSpec';
  protected $transferSpecDataType = '';


  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setDeletionTime($deletionTime)
  {
    $this->deletionTime = $deletionTime;
  }
  public function getDeletionTime()
  {
    return $this->deletionTime;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setLastModificationTime($lastModificationTime)
  {
    $this->lastModificationTime = $lastModificationTime;
  }
  public function getLastModificationTime()
  {
    return $this->lastModificationTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setSchedule(Storagetransfer_Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  public function getSchedule()
  {
    return $this->schedule;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTransferSpec(Storagetransfer_TransferSpec $transferSpec)
  {
    $this->transferSpec = $transferSpec;
  }
  public function getTransferSpec()
  {
    return $this->transferSpec;
  }
}

class Storagetransfer_TransferOperation extends Collection
{
  protected $collection_key = 'errorBreakdowns';
  protected $internal_gapi_mappings = array(
  );
  protected $countersType = 'Storagetransfer_TransferCounters';
  protected $countersDataType = '';
  public $endTime;
  protected $errorBreakdownsType = 'Storagetransfer_ErrorSummary';
  protected $errorBreakdownsDataType = 'array';
  public $name;
  public $projectId;
  public $startTime;
  public $status;
  public $transferJobName;
  protected $transferSpecType = 'Storagetransfer_TransferSpec';
  protected $transferSpecDataType = '';


  public function setCounters(Storagetransfer_TransferCounters $counters)
  {
    $this->counters = $counters;
  }
  public function getCounters()
  {
    return $this->counters;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setErrorBreakdowns($errorBreakdowns)
  {
    $this->errorBreakdowns = $errorBreakdowns;
  }
  public function getErrorBreakdowns()
  {
    return $this->errorBreakdowns;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTransferJobName($transferJobName)
  {
    $this->transferJobName = $transferJobName;
  }
  public function getTransferJobName()
  {
    return $this->transferJobName;
  }
  public function setTransferSpec(Storagetransfer_TransferSpec $transferSpec)
  {
    $this->transferSpec = $transferSpec;
  }
  public function getTransferSpec()
  {
    return $this->transferSpec;
  }
}

class Storagetransfer_TransferOptions extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $deleteObjectsFromSourceAfterTransfer;
  public $deleteObjectsUniqueInSink;
  public $overwriteObjectsAlreadyExistingInSink;


  public function setDeleteObjectsFromSourceAfterTransfer($deleteObjectsFromSourceAfterTransfer)
  {
    $this->deleteObjectsFromSourceAfterTransfer = $deleteObjectsFromSourceAfterTransfer;
  }
  public function getDeleteObjectsFromSourceAfterTransfer()
  {
    return $this->deleteObjectsFromSourceAfterTransfer;
  }
  public function setDeleteObjectsUniqueInSink($deleteObjectsUniqueInSink)
  {
    $this->deleteObjectsUniqueInSink = $deleteObjectsUniqueInSink;
  }
  public function getDeleteObjectsUniqueInSink()
  {
    return $this->deleteObjectsUniqueInSink;
  }
  public function setOverwriteObjectsAlreadyExistingInSink($overwriteObjectsAlreadyExistingInSink)
  {
    $this->overwriteObjectsAlreadyExistingInSink = $overwriteObjectsAlreadyExistingInSink;
  }
  public function getOverwriteObjectsAlreadyExistingInSink()
  {
    return $this->overwriteObjectsAlreadyExistingInSink;
  }
}

class Storagetransfer_TransferSpec extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $awsS3DataSourceType = 'Storagetransfer_AwsS3Data';
  protected $awsS3DataSourceDataType = '';
  protected $gcsDataSinkType = 'Storagetransfer_GcsData';
  protected $gcsDataSinkDataType = '';
  protected $gcsDataSourceType = 'Storagetransfer_GcsData';
  protected $gcsDataSourceDataType = '';
  protected $httpDataSourceType = 'Storagetransfer_HttpData';
  protected $httpDataSourceDataType = '';
  protected $objectConditionsType = 'Storagetransfer_ObjectConditions';
  protected $objectConditionsDataType = '';
  protected $transferOptionsType = 'Storagetransfer_TransferOptions';
  protected $transferOptionsDataType = '';


  public function setAwsS3DataSource(Storagetransfer_AwsS3Data $awsS3DataSource)
  {
    $this->awsS3DataSource = $awsS3DataSource;
  }
  public function getAwsS3DataSource()
  {
    return $this->awsS3DataSource;
  }
  public function setGcsDataSink(Storagetransfer_GcsData $gcsDataSink)
  {
    $this->gcsDataSink = $gcsDataSink;
  }
  public function getGcsDataSink()
  {
    return $this->gcsDataSink;
  }
  public function setGcsDataSource(Storagetransfer_GcsData $gcsDataSource)
  {
    $this->gcsDataSource = $gcsDataSource;
  }
  public function getGcsDataSource()
  {
    return $this->gcsDataSource;
  }
  public function setHttpDataSource(Storagetransfer_HttpData $httpDataSource)
  {
    $this->httpDataSource = $httpDataSource;
  }
  public function getHttpDataSource()
  {
    return $this->httpDataSource;
  }
  public function setObjectConditions(Storagetransfer_ObjectConditions $objectConditions)
  {
    $this->objectConditions = $objectConditions;
  }
  public function getObjectConditions()
  {
    return $this->objectConditions;
  }
  public function setTransferOptions(Storagetransfer_TransferOptions $transferOptions)
  {
    $this->transferOptions = $transferOptions;
  }
  public function getTransferOptions()
  {
    return $this->transferOptions;
  }
}

class Storagetransfer_UpdateTransferJobRequest extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $projectId;
  protected $transferJobType = 'Storagetransfer_TransferJob';
  protected $transferJobDataType = '';
  public $updateTransferJobFieldMask;


  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setTransferJob(Storagetransfer_TransferJob $transferJob)
  {
    $this->transferJob = $transferJob;
  }
  public function getTransferJob()
  {
    return $this->transferJob;
  }
  public function setUpdateTransferJobFieldMask($updateTransferJobFieldMask)
  {
    $this->updateTransferJobFieldMask = $updateTransferJobFieldMask;
  }
  public function getUpdateTransferJobFieldMask()
  {
    return $this->updateTransferJobFieldMask;
  }
}
