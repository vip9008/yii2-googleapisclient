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
 * Service definition for Appengine (v1beta4).
 *
 * <p>
 * The Google App Engine Admin API enables developers to provision and manage
 * their App Engine applications.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/appengine/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Appengine extends Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $apps;
  public $apps_modules;
  public $apps_modules_versions;
  public $apps_operations;


  /**
   * Constructs the internal representation of the Appengine service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://appengine.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1beta4';
    $this->serviceName = 'appengine';

    $this->apps = new Appengine_Apps_Resource(
        $this,
        $this->serviceName,
        'apps',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta4/apps/{appsId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ensureResourcesExist' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_modules = new Appengine_AppsModules_Resource(
        $this,
        $this->serviceName,
        'modules',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/modules',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'migrateTraffic' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'mask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_modules_versions = new Appengine_AppsModulesVersions_Resource(
        $this,
        $this->serviceName,
        'versions',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_operations = new Appengine_AppsOperations_Resource(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta4/apps/{appsId}/operations/{operationsId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'operationsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/operations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
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
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Appengine(...);
 *   $apps = $appengineService->apps;
 *  </code>
 */
class Appengine_Apps_Resource extends Resource
{

  /**
   * Gets information about an application. (apps.get)
   *
   * @param string $appsId Part of `name`. Name of the application to get. For
   * example: "apps/myapp".
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool ensureResourcesExist Certain resources associated with an
   * application are created on-demand. Controls whether these resources should be
   * created when performing the `GET` operation. If specified and any resources
   * cloud not be created, the request will fail with an error code.
   * @return Appengine_Application
   */
  public function get($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Appengine_Application");
  }
}

/**
 * The "modules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Appengine(...);
 *   $modules = $appengineService->modules;
 *  </code>
 */
class Appengine_AppsModules_Resource extends Resource
{

  /**
   * Deletes a module and all enclosed versions. (modules.delete)
   *
   * @param string $appsId Part of `name`. Name of the resource requested. For
   * example: "apps/myapp/modules/default".
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Appengine_Operation
   */
  public function delete($appsId, $modulesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Appengine_Operation");
  }

  /**
   * Gets the current configuration of the module. (modules.get)
   *
   * @param string $appsId Part of `name`. Name of the resource requested. For
   * example: "apps/myapp/modules/default".
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Appengine_Module
   */
  public function get($appsId, $modulesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Appengine_Module");
  }

  /**
   * Lists all the modules in the application. (modules.listAppsModules)
   *
   * @param string $appsId Part of `name`. Name of the resource requested. For
   * example: "apps/myapp".
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum results to return per page.
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @return Appengine_ListModulesResponse
   */
  public function listAppsModules($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Appengine_ListModulesResponse");
  }

  /**
   * Updates the configuration of the specified module. (modules.patch)
   *
   * @param string $appsId Part of `name`. Name of the resource to update. For
   * example: "apps/myapp/modules/default".
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param Google_Module $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool migrateTraffic Whether to use Traffic Migration to shift
   * traffic gradually. Traffic can only be migrated from a single version to
   * another single version.
   * @opt_param string mask Standard field mask for the set of fields to be
   * updated.
   * @return Appengine_Operation
   */
  public function patch($appsId, $modulesId, Appengine_Module $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Appengine_Operation");
  }
}

/**
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Appengine(...);
 *   $versions = $appengineService->versions;
 *  </code>
 */
class Appengine_AppsModulesVersions_Resource extends Resource
{

  /**
   * Deploys new code and resource files to a version. (versions.create)
   *
   * @param string $appsId Part of `name`. Name of the resource to update. For
   * example: "apps/myapp/modules/default".
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param Google_Version $postBody
   * @param array $optParams Optional parameters.
   * @return Appengine_Operation
   */
  public function create($appsId, $modulesId, Appengine_Version $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Appengine_Operation");
  }

  /**
   * Deletes an existing version. (versions.delete)
   *
   * @param string $appsId Part of `name`. Name of the resource requested. For
   * example: "apps/myapp/modules/default/versions/v1".
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param string $versionsId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Appengine_Operation
   */
  public function delete($appsId, $modulesId, $versionsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId, 'versionsId' => $versionsId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Appengine_Operation");
  }

  /**
   * Gets application deployment information. (versions.get)
   *
   * @param string $appsId Part of `name`. Name of the resource requested. For
   * example: "apps/myapp/modules/default/versions/v1".
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param string $versionsId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Controls the set of fields returned in the `Get`
   * response.
   * @return Appengine_Version
   */
  public function get($appsId, $modulesId, $versionsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId, 'versionsId' => $versionsId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Appengine_Version");
  }

  /**
   * Lists the versions of a module. (versions.listAppsModulesVersions)
   *
   * @param string $appsId Part of `name`. Name of the resource requested. For
   * example: "apps/myapp/modules/default".
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @opt_param int pageSize Maximum results to return per page.
   * @opt_param string view Controls the set of fields returned in the `List`
   * response.
   * @return Appengine_ListVersionsResponse
   */
  public function listAppsModulesVersions($appsId, $modulesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Appengine_ListVersionsResponse");
  }
}
/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Appengine(...);
 *   $operations = $appengineService->operations;
 *  </code>
 */
class Appengine_AppsOperations_Resource extends Resource
{

  /**
   * Gets the latest state of a long-running operation. Clients can use this
   * method to poll the operation result at intervals as recommended by the API
   * service. (operations.get)
   *
   * @param string $appsId Part of `name`. The name of the operation resource.
   * @param string $operationsId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Appengine_Operation
   */
  public function get($appsId, $operationsId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'operationsId' => $operationsId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Appengine_Operation");
  }

  /**
   * Lists operations that match the specified filter in the request. If the
   * server doesn't support this method, it returns `UNIMPLEMENTED`. NOTE: the
   * `name` binding below allows API services to override the binding to use
   * different resource name schemes, such as `users/operations`.
   * (operations.listAppsOperations)
   *
   * @param string $appsId Part of `name`. The name of the operation collection.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter The standard list filter.
   * @opt_param int pageSize The standard list page size.
   * @opt_param string pageToken The standard list page token.
   * @return Appengine_ListOperationsResponse
   */
  public function listAppsOperations($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Appengine_ListOperationsResponse");
  }
}




class Appengine_ApiConfigHandler extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $authFailAction;
  public $login;
  public $script;
  public $securityLevel;
  public $url;


  public function setAuthFailAction($authFailAction)
  {
    $this->authFailAction = $authFailAction;
  }
  public function getAuthFailAction()
  {
    return $this->authFailAction;
  }
  public function setLogin($login)
  {
    $this->login = $login;
  }
  public function getLogin()
  {
    return $this->login;
  }
  public function setScript($script)
  {
    $this->script = $script;
  }
  public function getScript()
  {
    return $this->script;
  }
  public function setSecurityLevel($securityLevel)
  {
    $this->securityLevel = $securityLevel;
  }
  public function getSecurityLevel()
  {
    return $this->securityLevel;
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

class Appengine_ApiEndpointHandler extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $scriptPath;


  public function setScriptPath($scriptPath)
  {
    $this->scriptPath = $scriptPath;
  }
  public function getScriptPath()
  {
    return $this->scriptPath;
  }
}

class Appengine_Application extends Collection
{
  protected $collection_key = 'dispatchRules';
  protected $internal_gapi_mappings = array(
  );
  public $codeBucket;
  protected $dispatchRulesType = 'Appengine_UrlDispatchRule';
  protected $dispatchRulesDataType = 'array';
  public $id;
  public $location;
  public $name;


  public function setCodeBucket($codeBucket)
  {
    $this->codeBucket = $codeBucket;
  }
  public function getCodeBucket()
  {
    return $this->codeBucket;
  }
  public function setDispatchRules($dispatchRules)
  {
    $this->dispatchRules = $dispatchRules;
  }
  public function getDispatchRules()
  {
    return $this->dispatchRules;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Appengine_AutomaticScaling extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $coolDownPeriod;
  protected $cpuUtilizationType = 'Appengine_CpuUtilization';
  protected $cpuUtilizationDataType = '';
  public $maxConcurrentRequests;
  public $maxIdleInstances;
  public $maxPendingLatency;
  public $maxTotalInstances;
  public $minIdleInstances;
  public $minPendingLatency;
  public $minTotalInstances;


  public function setCoolDownPeriod($coolDownPeriod)
  {
    $this->coolDownPeriod = $coolDownPeriod;
  }
  public function getCoolDownPeriod()
  {
    return $this->coolDownPeriod;
  }
  public function setCpuUtilization(Appengine_CpuUtilization $cpuUtilization)
  {
    $this->cpuUtilization = $cpuUtilization;
  }
  public function getCpuUtilization()
  {
    return $this->cpuUtilization;
  }
  public function setMaxConcurrentRequests($maxConcurrentRequests)
  {
    $this->maxConcurrentRequests = $maxConcurrentRequests;
  }
  public function getMaxConcurrentRequests()
  {
    return $this->maxConcurrentRequests;
  }
  public function setMaxIdleInstances($maxIdleInstances)
  {
    $this->maxIdleInstances = $maxIdleInstances;
  }
  public function getMaxIdleInstances()
  {
    return $this->maxIdleInstances;
  }
  public function setMaxPendingLatency($maxPendingLatency)
  {
    $this->maxPendingLatency = $maxPendingLatency;
  }
  public function getMaxPendingLatency()
  {
    return $this->maxPendingLatency;
  }
  public function setMaxTotalInstances($maxTotalInstances)
  {
    $this->maxTotalInstances = $maxTotalInstances;
  }
  public function getMaxTotalInstances()
  {
    return $this->maxTotalInstances;
  }
  public function setMinIdleInstances($minIdleInstances)
  {
    $this->minIdleInstances = $minIdleInstances;
  }
  public function getMinIdleInstances()
  {
    return $this->minIdleInstances;
  }
  public function setMinPendingLatency($minPendingLatency)
  {
    $this->minPendingLatency = $minPendingLatency;
  }
  public function getMinPendingLatency()
  {
    return $this->minPendingLatency;
  }
  public function setMinTotalInstances($minTotalInstances)
  {
    $this->minTotalInstances = $minTotalInstances;
  }
  public function getMinTotalInstances()
  {
    return $this->minTotalInstances;
  }
}

class Appengine_BasicScaling extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $idleTimeout;
  public $maxInstances;


  public function setIdleTimeout($idleTimeout)
  {
    $this->idleTimeout = $idleTimeout;
  }
  public function getIdleTimeout()
  {
    return $this->idleTimeout;
  }
  public function setMaxInstances($maxInstances)
  {
    $this->maxInstances = $maxInstances;
  }
  public function getMaxInstances()
  {
    return $this->maxInstances;
  }
}

class Appengine_ContainerInfo extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $image;


  public function setImage($image)
  {
    $this->image = $image;
  }
  public function getImage()
  {
    return $this->image;
  }
}

class Appengine_CpuUtilization extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $aggregationWindowLength;
  public $targetUtilization;


  public function setAggregationWindowLength($aggregationWindowLength)
  {
    $this->aggregationWindowLength = $aggregationWindowLength;
  }
  public function getAggregationWindowLength()
  {
    return $this->aggregationWindowLength;
  }
  public function setTargetUtilization($targetUtilization)
  {
    $this->targetUtilization = $targetUtilization;
  }
  public function getTargetUtilization()
  {
    return $this->targetUtilization;
  }
}

class Appengine_Deployment extends Collection
{
  protected $collection_key = 'sourceReferences';
  protected $internal_gapi_mappings = array(
  );
  protected $containerType = 'Appengine_ContainerInfo';
  protected $containerDataType = '';
  protected $filesType = 'Appengine_FileInfo';
  protected $filesDataType = 'map';
  protected $sourceReferencesType = 'Appengine_SourceReference';
  protected $sourceReferencesDataType = 'array';


  public function setContainer(Appengine_ContainerInfo $container)
  {
    $this->container = $container;
  }
  public function getContainer()
  {
    return $this->container;
  }
  public function setFiles($files)
  {
    $this->files = $files;
  }
  public function getFiles()
  {
    return $this->files;
  }
  public function setSourceReferences($sourceReferences)
  {
    $this->sourceReferences = $sourceReferences;
  }
  public function getSourceReferences()
  {
    return $this->sourceReferences;
  }
}

class Appengine_DeploymentFiles extends Model
{
}

class Appengine_ErrorHandler extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $errorCode;
  public $mimeType;
  public $staticFile;


  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setStaticFile($staticFile)
  {
    $this->staticFile = $staticFile;
  }
  public function getStaticFile()
  {
    return $this->staticFile;
  }
}

class Appengine_FileInfo extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $mimeType;
  public $sha1Sum;
  public $sourceUrl;


  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setSha1Sum($sha1Sum)
  {
    $this->sha1Sum = $sha1Sum;
  }
  public function getSha1Sum()
  {
    return $this->sha1Sum;
  }
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}

class Appengine_HealthCheck extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $checkInterval;
  public $disableHealthCheck;
  public $healthyThreshold;
  public $host;
  public $restartThreshold;
  public $timeout;
  public $unhealthyThreshold;


  public function setCheckInterval($checkInterval)
  {
    $this->checkInterval = $checkInterval;
  }
  public function getCheckInterval()
  {
    return $this->checkInterval;
  }
  public function setDisableHealthCheck($disableHealthCheck)
  {
    $this->disableHealthCheck = $disableHealthCheck;
  }
  public function getDisableHealthCheck()
  {
    return $this->disableHealthCheck;
  }
  public function setHealthyThreshold($healthyThreshold)
  {
    $this->healthyThreshold = $healthyThreshold;
  }
  public function getHealthyThreshold()
  {
    return $this->healthyThreshold;
  }
  public function setHost($host)
  {
    $this->host = $host;
  }
  public function getHost()
  {
    return $this->host;
  }
  public function setRestartThreshold($restartThreshold)
  {
    $this->restartThreshold = $restartThreshold;
  }
  public function getRestartThreshold()
  {
    return $this->restartThreshold;
  }
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  public function getTimeout()
  {
    return $this->timeout;
  }
  public function setUnhealthyThreshold($unhealthyThreshold)
  {
    $this->unhealthyThreshold = $unhealthyThreshold;
  }
  public function getUnhealthyThreshold()
  {
    return $this->unhealthyThreshold;
  }
}

class Appengine_Library extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $version;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Appengine_ListModulesResponse extends Collection
{
  protected $collection_key = 'modules';
  protected $internal_gapi_mappings = array(
  );
  protected $modulesType = 'Appengine_Module';
  protected $modulesDataType = 'array';
  public $nextPageToken;


  public function setModules($modules)
  {
    $this->modules = $modules;
  }
  public function getModules()
  {
    return $this->modules;
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

class Appengine_ListOperationsResponse extends Collection
{
  protected $collection_key = 'operations';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $operationsType = 'Appengine_Operation';
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

class Appengine_ListVersionsResponse extends Collection
{
  protected $collection_key = 'versions';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $versionsType = 'Appengine_Version';
  protected $versionsDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setVersions($versions)
  {
    $this->versions = $versions;
  }
  public function getVersions()
  {
    return $this->versions;
  }
}

class Appengine_ManualScaling extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $instances;


  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  public function getInstances()
  {
    return $this->instances;
  }
}

class Appengine_Module extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $name;
  protected $splitType = 'Appengine_TrafficSplit';
  protected $splitDataType = '';


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSplit(Appengine_TrafficSplit $split)
  {
    $this->split = $split;
  }
  public function getSplit()
  {
    return $this->split;
  }
}

class Appengine_Network extends Collection
{
  protected $collection_key = 'forwardedPorts';
  protected $internal_gapi_mappings = array(
  );
  public $forwardedPorts;
  public $instanceTag;
  public $name;


  public function setForwardedPorts($forwardedPorts)
  {
    $this->forwardedPorts = $forwardedPorts;
  }
  public function getForwardedPorts()
  {
    return $this->forwardedPorts;
  }
  public function setInstanceTag($instanceTag)
  {
    $this->instanceTag = $instanceTag;
  }
  public function getInstanceTag()
  {
    return $this->instanceTag;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Appengine_Operation extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $done;
  protected $errorType = 'Appengine_Status';
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
  public function setError(Appengine_Status $error)
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

class Appengine_OperationMetadata extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $endTime;
  public $insertTime;
  public $method;
  public $operationType;
  public $target;
  public $user;


  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }
  public function getInsertTime()
  {
    return $this->insertTime;
  }
  public function setMethod($method)
  {
    $this->method = $method;
  }
  public function getMethod()
  {
    return $this->method;
  }
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  public function getOperationType()
  {
    return $this->operationType;
  }
  public function setTarget($target)
  {
    $this->target = $target;
  }
  public function getTarget()
  {
    return $this->target;
  }
  public function setUser($user)
  {
    $this->user = $user;
  }
  public function getUser()
  {
    return $this->user;
  }
}

class Appengine_OperationResponse extends Model
{
}

class Appengine_Resources extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $cpu;
  public $diskGb;
  public $memoryGb;


  public function setCpu($cpu)
  {
    $this->cpu = $cpu;
  }
  public function getCpu()
  {
    return $this->cpu;
  }
  public function setDiskGb($diskGb)
  {
    $this->diskGb = $diskGb;
  }
  public function getDiskGb()
  {
    return $this->diskGb;
  }
  public function setMemoryGb($memoryGb)
  {
    $this->memoryGb = $memoryGb;
  }
  public function getMemoryGb()
  {
    return $this->memoryGb;
  }
}

class Appengine_ScriptHandler extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $scriptPath;


  public function setScriptPath($scriptPath)
  {
    $this->scriptPath = $scriptPath;
  }
  public function getScriptPath()
  {
    return $this->scriptPath;
  }
}

class Appengine_SourceReference extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $repository;
  public $revisionId;


  public function setRepository($repository)
  {
    $this->repository = $repository;
  }
  public function getRepository()
  {
    return $this->repository;
  }
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

class Appengine_StaticDirectoryHandler extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $applicationReadable;
  public $directory;
  public $expiration;
  public $httpHeaders;
  public $mimeType;
  public $requireMatchingFile;


  public function setApplicationReadable($applicationReadable)
  {
    $this->applicationReadable = $applicationReadable;
  }
  public function getApplicationReadable()
  {
    return $this->applicationReadable;
  }
  public function setDirectory($directory)
  {
    $this->directory = $directory;
  }
  public function getDirectory()
  {
    return $this->directory;
  }
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  public function getExpiration()
  {
    return $this->expiration;
  }
  public function setHttpHeaders($httpHeaders)
  {
    $this->httpHeaders = $httpHeaders;
  }
  public function getHttpHeaders()
  {
    return $this->httpHeaders;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setRequireMatchingFile($requireMatchingFile)
  {
    $this->requireMatchingFile = $requireMatchingFile;
  }
  public function getRequireMatchingFile()
  {
    return $this->requireMatchingFile;
  }
}

class Appengine_StaticDirectoryHandlerHttpHeaders extends Model
{
}

class Appengine_StaticFilesHandler extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $applicationReadable;
  public $expiration;
  public $httpHeaders;
  public $mimeType;
  public $path;
  public $requireMatchingFile;
  public $uploadPathRegex;


  public function setApplicationReadable($applicationReadable)
  {
    $this->applicationReadable = $applicationReadable;
  }
  public function getApplicationReadable()
  {
    return $this->applicationReadable;
  }
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  public function getExpiration()
  {
    return $this->expiration;
  }
  public function setHttpHeaders($httpHeaders)
  {
    $this->httpHeaders = $httpHeaders;
  }
  public function getHttpHeaders()
  {
    return $this->httpHeaders;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setPath($path)
  {
    $this->path = $path;
  }
  public function getPath()
  {
    return $this->path;
  }
  public function setRequireMatchingFile($requireMatchingFile)
  {
    $this->requireMatchingFile = $requireMatchingFile;
  }
  public function getRequireMatchingFile()
  {
    return $this->requireMatchingFile;
  }
  public function setUploadPathRegex($uploadPathRegex)
  {
    $this->uploadPathRegex = $uploadPathRegex;
  }
  public function getUploadPathRegex()
  {
    return $this->uploadPathRegex;
  }
}

class Appengine_StaticFilesHandlerHttpHeaders extends Model
{
}

class Appengine_Status extends Collection
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

class Appengine_StatusDetails extends Model
{
}

class Appengine_TrafficSplit extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $allocations;
  public $shardBy;


  public function setAllocations($allocations)
  {
    $this->allocations = $allocations;
  }
  public function getAllocations()
  {
    return $this->allocations;
  }
  public function setShardBy($shardBy)
  {
    $this->shardBy = $shardBy;
  }
  public function getShardBy()
  {
    return $this->shardBy;
  }
}

class Appengine_TrafficSplitAllocations extends Model
{
}

class Appengine_UrlDispatchRule extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $domain;
  public $module;
  public $path;


  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  public function getDomain()
  {
    return $this->domain;
  }
  public function setModule($module)
  {
    $this->module = $module;
  }
  public function getModule()
  {
    return $this->module;
  }
  public function setPath($path)
  {
    $this->path = $path;
  }
  public function getPath()
  {
    return $this->path;
  }
}

class Appengine_UrlMap extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $apiEndpointType = 'Appengine_ApiEndpointHandler';
  protected $apiEndpointDataType = '';
  public $authFailAction;
  public $login;
  public $redirectHttpResponseCode;
  protected $scriptType = 'Appengine_ScriptHandler';
  protected $scriptDataType = '';
  public $securityLevel;
  protected $staticDirectoryType = 'Appengine_StaticDirectoryHandler';
  protected $staticDirectoryDataType = '';
  protected $staticFilesType = 'Appengine_StaticFilesHandler';
  protected $staticFilesDataType = '';
  public $urlRegex;


  public function setApiEndpoint(Appengine_ApiEndpointHandler $apiEndpoint)
  {
    $this->apiEndpoint = $apiEndpoint;
  }
  public function getApiEndpoint()
  {
    return $this->apiEndpoint;
  }
  public function setAuthFailAction($authFailAction)
  {
    $this->authFailAction = $authFailAction;
  }
  public function getAuthFailAction()
  {
    return $this->authFailAction;
  }
  public function setLogin($login)
  {
    $this->login = $login;
  }
  public function getLogin()
  {
    return $this->login;
  }
  public function setRedirectHttpResponseCode($redirectHttpResponseCode)
  {
    $this->redirectHttpResponseCode = $redirectHttpResponseCode;
  }
  public function getRedirectHttpResponseCode()
  {
    return $this->redirectHttpResponseCode;
  }
  public function setScript(Appengine_ScriptHandler $script)
  {
    $this->script = $script;
  }
  public function getScript()
  {
    return $this->script;
  }
  public function setSecurityLevel($securityLevel)
  {
    $this->securityLevel = $securityLevel;
  }
  public function getSecurityLevel()
  {
    return $this->securityLevel;
  }
  public function setStaticDirectory(Appengine_StaticDirectoryHandler $staticDirectory)
  {
    $this->staticDirectory = $staticDirectory;
  }
  public function getStaticDirectory()
  {
    return $this->staticDirectory;
  }
  public function setStaticFiles(Appengine_StaticFilesHandler $staticFiles)
  {
    $this->staticFiles = $staticFiles;
  }
  public function getStaticFiles()
  {
    return $this->staticFiles;
  }
  public function setUrlRegex($urlRegex)
  {
    $this->urlRegex = $urlRegex;
  }
  public function getUrlRegex()
  {
    return $this->urlRegex;
  }
}

class Appengine_Version extends Collection
{
  protected $collection_key = 'libraries';
  protected $internal_gapi_mappings = array(
  );
  protected $apiConfigType = 'Appengine_ApiConfigHandler';
  protected $apiConfigDataType = '';
  protected $automaticScalingType = 'Appengine_AutomaticScaling';
  protected $automaticScalingDataType = '';
  protected $basicScalingType = 'Appengine_BasicScaling';
  protected $basicScalingDataType = '';
  public $betaSettings;
  public $creationTime;
  public $defaultExpiration;
  public $deployer;
  protected $deploymentType = 'Appengine_Deployment';
  protected $deploymentDataType = '';
  public $env;
  public $envVariables;
  protected $errorHandlersType = 'Appengine_ErrorHandler';
  protected $errorHandlersDataType = 'array';
  protected $handlersType = 'Appengine_UrlMap';
  protected $handlersDataType = 'array';
  protected $healthCheckType = 'Appengine_HealthCheck';
  protected $healthCheckDataType = '';
  public $id;
  public $inboundServices;
  public $instanceClass;
  protected $librariesType = 'Appengine_Library';
  protected $librariesDataType = 'array';
  protected $manualScalingType = 'Appengine_ManualScaling';
  protected $manualScalingDataType = '';
  public $name;
  protected $networkType = 'Appengine_Network';
  protected $networkDataType = '';
  public $nobuildFilesRegex;
  protected $resourcesType = 'Appengine_Resources';
  protected $resourcesDataType = '';
  public $runtime;
  public $servingStatus;
  public $threadsafe;
  public $vm;


  public function setApiConfig(Appengine_ApiConfigHandler $apiConfig)
  {
    $this->apiConfig = $apiConfig;
  }
  public function getApiConfig()
  {
    return $this->apiConfig;
  }
  public function setAutomaticScaling(Appengine_AutomaticScaling $automaticScaling)
  {
    $this->automaticScaling = $automaticScaling;
  }
  public function getAutomaticScaling()
  {
    return $this->automaticScaling;
  }
  public function setBasicScaling(Appengine_BasicScaling $basicScaling)
  {
    $this->basicScaling = $basicScaling;
  }
  public function getBasicScaling()
  {
    return $this->basicScaling;
  }
  public function setBetaSettings($betaSettings)
  {
    $this->betaSettings = $betaSettings;
  }
  public function getBetaSettings()
  {
    return $this->betaSettings;
  }
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  public function setDefaultExpiration($defaultExpiration)
  {
    $this->defaultExpiration = $defaultExpiration;
  }
  public function getDefaultExpiration()
  {
    return $this->defaultExpiration;
  }
  public function setDeployer($deployer)
  {
    $this->deployer = $deployer;
  }
  public function getDeployer()
  {
    return $this->deployer;
  }
  public function setDeployment(Appengine_Deployment $deployment)
  {
    $this->deployment = $deployment;
  }
  public function getDeployment()
  {
    return $this->deployment;
  }
  public function setEnv($env)
  {
    $this->env = $env;
  }
  public function getEnv()
  {
    return $this->env;
  }
  public function setEnvVariables($envVariables)
  {
    $this->envVariables = $envVariables;
  }
  public function getEnvVariables()
  {
    return $this->envVariables;
  }
  public function setErrorHandlers($errorHandlers)
  {
    $this->errorHandlers = $errorHandlers;
  }
  public function getErrorHandlers()
  {
    return $this->errorHandlers;
  }
  public function setHandlers($handlers)
  {
    $this->handlers = $handlers;
  }
  public function getHandlers()
  {
    return $this->handlers;
  }
  public function setHealthCheck(Appengine_HealthCheck $healthCheck)
  {
    $this->healthCheck = $healthCheck;
  }
  public function getHealthCheck()
  {
    return $this->healthCheck;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInboundServices($inboundServices)
  {
    $this->inboundServices = $inboundServices;
  }
  public function getInboundServices()
  {
    return $this->inboundServices;
  }
  public function setInstanceClass($instanceClass)
  {
    $this->instanceClass = $instanceClass;
  }
  public function getInstanceClass()
  {
    return $this->instanceClass;
  }
  public function setLibraries($libraries)
  {
    $this->libraries = $libraries;
  }
  public function getLibraries()
  {
    return $this->libraries;
  }
  public function setManualScaling(Appengine_ManualScaling $manualScaling)
  {
    $this->manualScaling = $manualScaling;
  }
  public function getManualScaling()
  {
    return $this->manualScaling;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNetwork(Appengine_Network $network)
  {
    $this->network = $network;
  }
  public function getNetwork()
  {
    return $this->network;
  }
  public function setNobuildFilesRegex($nobuildFilesRegex)
  {
    $this->nobuildFilesRegex = $nobuildFilesRegex;
  }
  public function getNobuildFilesRegex()
  {
    return $this->nobuildFilesRegex;
  }
  public function setResources(Appengine_Resources $resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;
  }
  public function getRuntime()
  {
    return $this->runtime;
  }
  public function setServingStatus($servingStatus)
  {
    $this->servingStatus = $servingStatus;
  }
  public function getServingStatus()
  {
    return $this->servingStatus;
  }
  public function setThreadsafe($threadsafe)
  {
    $this->threadsafe = $threadsafe;
  }
  public function getThreadsafe()
  {
    return $this->threadsafe;
  }
  public function setVm($vm)
  {
    $this->vm = $vm;
  }
  public function getVm()
  {
    return $this->vm;
  }
}

class Appengine_VersionBetaSettings extends Model
{
}

class Appengine_VersionEnvVariables extends Model
{
}
