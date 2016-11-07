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
 * Service definition for Clouddebugger (v2).
 *
 * <p>
 * Lets you examine the stack and variables of your running application without
 * stopping or slowing it down.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/tools/cloud-debugger" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Clouddebugger extends Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** Manage cloud debugger. */
  const CLOUD_DEBUGGER =
      "https://www.googleapis.com/auth/cloud_debugger";
  /** Manage active breakpoints in cloud debugger. */
  const CLOUD_DEBUGLETCONTROLLER =
      "https://www.googleapis.com/auth/cloud_debugletcontroller";

  public $controller_debuggees;
  public $controller_debuggees_breakpoints;
  public $debugger_debuggees;
  public $debugger_debuggees_breakpoints;
  

  /**
   * Constructs the internal representation of the Clouddebugger service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://clouddebugger.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v2';
    $this->serviceName = 'clouddebugger';

    $this->controller_debuggees = new Clouddebugger_ControllerDebuggees_Resource(
        $this,
        $this->serviceName,
        'debuggees',
        array(
          'methods' => array(
            'register' => array(
              'path' => 'v2/controller/debuggees/register',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->controller_debuggees_breakpoints = new Clouddebugger_ControllerDebuggeesBreakpoints_Resource(
        $this,
        $this->serviceName,
        'breakpoints',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2/controller/debuggees/{debuggeeId}/breakpoints',
              'httpMethod' => 'GET',
              'parameters' => array(
                'debuggeeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'waitToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'v2/controller/debuggees/{debuggeeId}/breakpoints/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'debuggeeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->debugger_debuggees = new Clouddebugger_DebuggerDebuggees_Resource(
        $this,
        $this->serviceName,
        'debuggees',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2/debugger/debuggees',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeInactive' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->debugger_debuggees_breakpoints = new Clouddebugger_DebuggerDebuggeesBreakpoints_Resource(
        $this,
        $this->serviceName,
        'breakpoints',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'v2/debugger/debuggees/{debuggeeId}/breakpoints/{breakpointId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'debuggeeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'breakpointId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v2/debugger/debuggees/{debuggeeId}/breakpoints/{breakpointId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'debuggeeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'breakpointId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v2/debugger/debuggees/{debuggeeId}/breakpoints',
              'httpMethod' => 'GET',
              'parameters' => array(
                'debuggeeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeAllUsers' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'stripResults' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'action.value' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeInactive' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'waitToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'set' => array(
              'path' => 'v2/debugger/debuggees/{debuggeeId}/breakpoints/set',
              'httpMethod' => 'POST',
              'parameters' => array(
                'debuggeeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "controller" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddebuggerService = new Clouddebugger(...);
 *   $controller = $clouddebuggerService->controller;
 *  </code>
 */
class Clouddebugger_Controller_Resource extends Resource
{
}

/**
 * The "debuggees" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddebuggerService = new Clouddebugger(...);
 *   $debuggees = $clouddebuggerService->debuggees;
 *  </code>
 */
class Clouddebugger_ControllerDebuggees_Resource extends Resource
{

  /**
   * Registers the debuggee with the controller. All agents should call this API
   * with the same request content to get back the same stable 'debuggee_id'.
   * Agents should call this API again whenever ListActiveBreakpoints or
   * UpdateActiveBreakpoint return the error google.rpc.Code.NOT_FOUND. It allows
   * the server to disable the agent or recover from any registration loss. If the
   * debuggee is disabled server, the response will have is_disabled' set to true.
   * (debuggees.register)
   *
   * @param Google_RegisterDebuggeeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Clouddebugger_RegisterDebuggeeResponse
   */
  public function register(Clouddebugger_RegisterDebuggeeRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('register', array($params), "Clouddebugger_RegisterDebuggeeResponse");
  }
}

/**
 * The "breakpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddebuggerService = new Clouddebugger(...);
 *   $breakpoints = $clouddebuggerService->breakpoints;
 *  </code>
 */
class Clouddebugger_ControllerDebuggeesBreakpoints_Resource extends Resource
{

  /**
   * Returns the list of all active breakpoints for the specified debuggee. The
   * breakpoint specification (location, condition, and expression fields) is
   * semantically immutable, although the field values may change. For example, an
   * agent may update the location line number to reflect the actual line the
   * breakpoint was set to, but that doesn't change the breakpoint semantics.
   * Thus, an agent does not need to check if a breakpoint has changed when it
   * encounters the same breakpoint on a successive call. Moreover, an agent
   * should remember breakpoints that are complete until the controller removes
   * them from the active list to avoid setting those breakpoints again.
   * (breakpoints.listControllerDebuggeesBreakpoints)
   *
   * @param string $debuggeeId Identifies the debuggee.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string waitToken A wait token that, if specified, blocks the
   * method call until the list of active breakpoints has changed, or a server
   * selected timeout has expired. The value should be set from the last returned
   * response. The error code google.rpc.Code.ABORTED is returned on wait timeout
   * (which does not require the agent to re-register with the server)
   * @return Clouddebugger_ListActiveBreakpointsResponse
   */
  public function listControllerDebuggeesBreakpoints($debuggeeId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Clouddebugger_ListActiveBreakpointsResponse");
  }

  /**
   * Updates the breakpoint state or mutable fields. The entire Breakpoint
   * protobuf must be sent back to the controller. Updates to active breakpoint
   * fields are only allowed if the new value does not change the breakpoint
   * specification. Updates to the 'location', 'condition' and 'expression' fields
   * should not alter the breakpoint semantics. They are restricted to changes
   * such as canonicalizing a value or snapping the location to the correct line
   * of code. (breakpoints.update)
   *
   * @param string $debuggeeId Identifies the debuggee being debugged.
   * @param string $id Breakpoint identifier, unique in the scope of the debuggee.
   * @param Google_UpdateActiveBreakpointRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Clouddebugger_UpdateActiveBreakpointResponse
   */
  public function update($debuggeeId, $id, Clouddebugger_UpdateActiveBreakpointRequest $postBody, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Clouddebugger_UpdateActiveBreakpointResponse");
  }
}

/**
 * The "debugger" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddebuggerService = new Clouddebugger(...);
 *   $debugger = $clouddebuggerService->debugger;
 *  </code>
 */
class Clouddebugger_Debugger_Resource extends Resource
{
}

/**
 * The "debuggees" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddebuggerService = new Clouddebugger(...);
 *   $debuggees = $clouddebuggerService->debuggees;
 *  </code>
 */
class Clouddebugger_DebuggerDebuggees_Resource extends Resource
{

  /**
   * Lists all the debuggees that the user can set breakpoints to.
   * (debuggees.listDebuggerDebuggees)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string project Set to the project number of the Google Cloud
   * Platform to list the debuggees that are part of that project.
   * @opt_param bool includeInactive When set to true the result includes all
   * debuggees, otherwise only debugees that are active.
   * @return Clouddebugger_ListDebuggeesResponse
   */
  public function listDebuggerDebuggees($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Clouddebugger_ListDebuggeesResponse");
  }
}

/**
 * The "breakpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddebuggerService = new Clouddebugger(...);
 *   $breakpoints = $clouddebuggerService->breakpoints;
 *  </code>
 */
class Clouddebugger_DebuggerDebuggeesBreakpoints_Resource extends Resource
{

  /**
   * Deletes the breakpoint from the debuggee. (breakpoints.delete)
   *
   * @param string $debuggeeId The debuggee id to delete the breakpoint from.
   * @param string $breakpointId The breakpoint to delete.
   * @param array $optParams Optional parameters.
   * @return Clouddebugger_Empty
   */
  public function delete($debuggeeId, $breakpointId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId, 'breakpointId' => $breakpointId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Clouddebugger_Empty");
  }

  /**
   * Gets breakpoint information. (breakpoints.get)
   *
   * @param string $debuggeeId The debuggee id to get the breakpoint from.
   * @param string $breakpointId The breakpoint to get.
   * @param array $optParams Optional parameters.
   * @return Clouddebugger_GetBreakpointResponse
   */
  public function get($debuggeeId, $breakpointId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId, 'breakpointId' => $breakpointId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Clouddebugger_GetBreakpointResponse");
  }

  /**
   * Lists all breakpoints of the debuggee that the user has access to.
   * (breakpoints.listDebuggerDebuggeesBreakpoints)
   *
   * @param string $debuggeeId The debuggee id to list breakpoint from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeAllUsers When set to true the response includes the
   * list of breakpoints set by any user, otherwise only breakpoints set by the
   * caller.
   * @opt_param bool stripResults When set to true the response breakpoints will
   * be stripped of the results fields: stack_frames, evaluated_expressions and
   * variable_table.
   * @opt_param string action.value Only breakpoints with the specified action
   * will pass the filter.
   * @opt_param bool includeInactive When set to true the response includes active
   * and inactive breakpoints, otherwise only active breakpoints are returned.
   * @opt_param string waitToken A wait token that, if specified, blocks the call
   * until the breakpoints list has changed, or a server selected timeout has
   * expired. The value should be set from the last response to ListBreakpoints.
   * The error code ABORTED is returned on wait timeout, which should be called
   * again with the same wait_token.
   * @return Clouddebugger_ListBreakpointsResponse
   */
  public function listDebuggerDebuggeesBreakpoints($debuggeeId, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Clouddebugger_ListBreakpointsResponse");
  }

  /**
   * Sets the breakpoint to the debuggee. (breakpoints.set)
   *
   * @param string $debuggeeId The debuggee id to set the breakpoint to.
   * @param Google_Breakpoint $postBody
   * @param array $optParams Optional parameters.
   * @return Clouddebugger_SetBreakpointResponse
   */
  public function set($debuggeeId, Clouddebugger_Breakpoint $postBody, $optParams = array())
  {
    $params = array('debuggeeId' => $debuggeeId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('set', array($params), "Clouddebugger_SetBreakpointResponse");
  }
}




class Clouddebugger_Breakpoint extends Collection
{
  protected $collection_key = 'variableTable';
  protected $internal_gapi_mappings = array(
  );
  public $action;
  public $condition;
  public $createTime;
  protected $evaluatedExpressionsType = 'Clouddebugger_Variable';
  protected $evaluatedExpressionsDataType = 'array';
  public $expressions;
  public $finalTime;
  public $id;
  public $isFinalState;
  protected $locationType = 'Clouddebugger_SourceLocation';
  protected $locationDataType = '';
  public $logLevel;
  public $logMessageFormat;
  protected $stackFramesType = 'Clouddebugger_StackFrame';
  protected $stackFramesDataType = 'array';
  protected $statusType = 'Clouddebugger_StatusMessage';
  protected $statusDataType = '';
  public $userEmail;
  protected $variableTableType = 'Clouddebugger_Variable';
  protected $variableTableDataType = 'array';


  public function setAction($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  public function getCondition()
  {
    return $this->condition;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setEvaluatedExpressions($evaluatedExpressions)
  {
    $this->evaluatedExpressions = $evaluatedExpressions;
  }
  public function getEvaluatedExpressions()
  {
    return $this->evaluatedExpressions;
  }
  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }
  public function getExpressions()
  {
    return $this->expressions;
  }
  public function setFinalTime($finalTime)
  {
    $this->finalTime = $finalTime;
  }
  public function getFinalTime()
  {
    return $this->finalTime;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIsFinalState($isFinalState)
  {
    $this->isFinalState = $isFinalState;
  }
  public function getIsFinalState()
  {
    return $this->isFinalState;
  }
  public function setLocation(Clouddebugger_SourceLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setLogLevel($logLevel)
  {
    $this->logLevel = $logLevel;
  }
  public function getLogLevel()
  {
    return $this->logLevel;
  }
  public function setLogMessageFormat($logMessageFormat)
  {
    $this->logMessageFormat = $logMessageFormat;
  }
  public function getLogMessageFormat()
  {
    return $this->logMessageFormat;
  }
  public function setStackFrames($stackFrames)
  {
    $this->stackFrames = $stackFrames;
  }
  public function getStackFrames()
  {
    return $this->stackFrames;
  }
  public function setStatus(Clouddebugger_StatusMessage $status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  public function getUserEmail()
  {
    return $this->userEmail;
  }
  public function setVariableTable($variableTable)
  {
    $this->variableTable = $variableTable;
  }
  public function getVariableTable()
  {
    return $this->variableTable;
  }
}

class Clouddebugger_CloudRepoSourceContext extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $aliasName;
  protected $repoIdType = 'Clouddebugger_RepoId';
  protected $repoIdDataType = '';
  public $revisionId;


  public function setAliasName($aliasName)
  {
    $this->aliasName = $aliasName;
  }
  public function getAliasName()
  {
    return $this->aliasName;
  }
  public function setRepoId(Clouddebugger_RepoId $repoId)
  {
    $this->repoId = $repoId;
  }
  public function getRepoId()
  {
    return $this->repoId;
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

class Clouddebugger_CloudWorkspaceId extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  protected $repoIdType = 'Clouddebugger_RepoId';
  protected $repoIdDataType = '';


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRepoId(Clouddebugger_RepoId $repoId)
  {
    $this->repoId = $repoId;
  }
  public function getRepoId()
  {
    return $this->repoId;
  }
}

class Clouddebugger_CloudWorkspaceSourceContext extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $snapshotId;
  protected $workspaceIdType = 'Clouddebugger_CloudWorkspaceId';
  protected $workspaceIdDataType = '';


  public function setSnapshotId($snapshotId)
  {
    $this->snapshotId = $snapshotId;
  }
  public function getSnapshotId()
  {
    return $this->snapshotId;
  }
  public function setWorkspaceId(Clouddebugger_CloudWorkspaceId $workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }
}

class Clouddebugger_Debuggee extends Collection
{
  protected $collection_key = 'sourceContexts';
  protected $internal_gapi_mappings = array(
  );
  public $agentVersion;
  public $description;
  public $id;
  public $isDisabled;
  public $isInactive;
  public $labels;
  public $project;
  protected $sourceContextsType = 'Clouddebugger_SourceContext';
  protected $sourceContextsDataType = 'array';
  protected $statusType = 'Clouddebugger_StatusMessage';
  protected $statusDataType = '';
  public $uniquifier;


  public function setAgentVersion($agentVersion)
  {
    $this->agentVersion = $agentVersion;
  }
  public function getAgentVersion()
  {
    return $this->agentVersion;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIsDisabled($isDisabled)
  {
    $this->isDisabled = $isDisabled;
  }
  public function getIsDisabled()
  {
    return $this->isDisabled;
  }
  public function setIsInactive($isInactive)
  {
    $this->isInactive = $isInactive;
  }
  public function getIsInactive()
  {
    return $this->isInactive;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setProject($project)
  {
    $this->project = $project;
  }
  public function getProject()
  {
    return $this->project;
  }
  public function setSourceContexts($sourceContexts)
  {
    $this->sourceContexts = $sourceContexts;
  }
  public function getSourceContexts()
  {
    return $this->sourceContexts;
  }
  public function setStatus(Clouddebugger_StatusMessage $status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setUniquifier($uniquifier)
  {
    $this->uniquifier = $uniquifier;
  }
  public function getUniquifier()
  {
    return $this->uniquifier;
  }
}

class Clouddebugger_DebuggeeLabels extends Model
{
}

class Clouddebugger_Empty extends Model
{
}

class Clouddebugger_FormatMessage extends Collection
{
  protected $collection_key = 'parameters';
  protected $internal_gapi_mappings = array(
  );
  public $format;
  public $parameters;


  public function setFormat($format)
  {
    $this->format = $format;
  }
  public function getFormat()
  {
    return $this->format;
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

class Clouddebugger_GerritSourceContext extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $aliasName;
  public $gerritProject;
  public $hostUri;
  public $revisionId;


  public function setAliasName($aliasName)
  {
    $this->aliasName = $aliasName;
  }
  public function getAliasName()
  {
    return $this->aliasName;
  }
  public function setGerritProject($gerritProject)
  {
    $this->gerritProject = $gerritProject;
  }
  public function getGerritProject()
  {
    return $this->gerritProject;
  }
  public function setHostUri($hostUri)
  {
    $this->hostUri = $hostUri;
  }
  public function getHostUri()
  {
    return $this->hostUri;
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

class Clouddebugger_GetBreakpointResponse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $breakpointType = 'Clouddebugger_Breakpoint';
  protected $breakpointDataType = '';


  public function setBreakpoint(Clouddebugger_Breakpoint $breakpoint)
  {
    $this->breakpoint = $breakpoint;
  }
  public function getBreakpoint()
  {
    return $this->breakpoint;
  }
}

class Clouddebugger_GitSourceContext extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $revisionId;
  public $url;


  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  public function getRevisionId()
  {
    return $this->revisionId;
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

class Clouddebugger_ListActiveBreakpointsResponse extends Collection
{
  protected $collection_key = 'breakpoints';
  protected $internal_gapi_mappings = array(
  );
  protected $breakpointsType = 'Clouddebugger_Breakpoint';
  protected $breakpointsDataType = 'array';
  public $nextWaitToken;


  public function setBreakpoints($breakpoints)
  {
    $this->breakpoints = $breakpoints;
  }
  public function getBreakpoints()
  {
    return $this->breakpoints;
  }
  public function setNextWaitToken($nextWaitToken)
  {
    $this->nextWaitToken = $nextWaitToken;
  }
  public function getNextWaitToken()
  {
    return $this->nextWaitToken;
  }
}

class Clouddebugger_ListBreakpointsResponse extends Collection
{
  protected $collection_key = 'breakpoints';
  protected $internal_gapi_mappings = array(
  );
  protected $breakpointsType = 'Clouddebugger_Breakpoint';
  protected $breakpointsDataType = 'array';
  public $nextWaitToken;


  public function setBreakpoints($breakpoints)
  {
    $this->breakpoints = $breakpoints;
  }
  public function getBreakpoints()
  {
    return $this->breakpoints;
  }
  public function setNextWaitToken($nextWaitToken)
  {
    $this->nextWaitToken = $nextWaitToken;
  }
  public function getNextWaitToken()
  {
    return $this->nextWaitToken;
  }
}

class Clouddebugger_ListDebuggeesResponse extends Collection
{
  protected $collection_key = 'debuggees';
  protected $internal_gapi_mappings = array(
  );
  protected $debuggeesType = 'Clouddebugger_Debuggee';
  protected $debuggeesDataType = 'array';


  public function setDebuggees($debuggees)
  {
    $this->debuggees = $debuggees;
  }
  public function getDebuggees()
  {
    return $this->debuggees;
  }
}

class Clouddebugger_ProjectRepoId extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $projectId;
  public $repoName;


  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setRepoName($repoName)
  {
    $this->repoName = $repoName;
  }
  public function getRepoName()
  {
    return $this->repoName;
  }
}

class Clouddebugger_RegisterDebuggeeRequest extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $debuggeeType = 'Clouddebugger_Debuggee';
  protected $debuggeeDataType = '';


  public function setDebuggee(Clouddebugger_Debuggee $debuggee)
  {
    $this->debuggee = $debuggee;
  }
  public function getDebuggee()
  {
    return $this->debuggee;
  }
}

class Clouddebugger_RegisterDebuggeeResponse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $debuggeeType = 'Clouddebugger_Debuggee';
  protected $debuggeeDataType = '';


  public function setDebuggee(Clouddebugger_Debuggee $debuggee)
  {
    $this->debuggee = $debuggee;
  }
  public function getDebuggee()
  {
    return $this->debuggee;
  }
}

class Clouddebugger_RepoId extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $projectRepoIdType = 'Clouddebugger_ProjectRepoId';
  protected $projectRepoIdDataType = '';
  public $uid;


  public function setProjectRepoId(Clouddebugger_ProjectRepoId $projectRepoId)
  {
    $this->projectRepoId = $projectRepoId;
  }
  public function getProjectRepoId()
  {
    return $this->projectRepoId;
  }
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  public function getUid()
  {
    return $this->uid;
  }
}

class Clouddebugger_SetBreakpointResponse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $breakpointType = 'Clouddebugger_Breakpoint';
  protected $breakpointDataType = '';


  public function setBreakpoint(Clouddebugger_Breakpoint $breakpoint)
  {
    $this->breakpoint = $breakpoint;
  }
  public function getBreakpoint()
  {
    return $this->breakpoint;
  }
}

class Clouddebugger_SourceContext extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $cloudRepoType = 'Clouddebugger_CloudRepoSourceContext';
  protected $cloudRepoDataType = '';
  protected $cloudWorkspaceType = 'Clouddebugger_CloudWorkspaceSourceContext';
  protected $cloudWorkspaceDataType = '';
  protected $gerritType = 'Clouddebugger_GerritSourceContext';
  protected $gerritDataType = '';
  protected $gitType = 'Clouddebugger_GitSourceContext';
  protected $gitDataType = '';


  public function setCloudRepo(Clouddebugger_CloudRepoSourceContext $cloudRepo)
  {
    $this->cloudRepo = $cloudRepo;
  }
  public function getCloudRepo()
  {
    return $this->cloudRepo;
  }
  public function setCloudWorkspace(Clouddebugger_CloudWorkspaceSourceContext $cloudWorkspace)
  {
    $this->cloudWorkspace = $cloudWorkspace;
  }
  public function getCloudWorkspace()
  {
    return $this->cloudWorkspace;
  }
  public function setGerrit(Clouddebugger_GerritSourceContext $gerrit)
  {
    $this->gerrit = $gerrit;
  }
  public function getGerrit()
  {
    return $this->gerrit;
  }
  public function setGit(Clouddebugger_GitSourceContext $git)
  {
    $this->git = $git;
  }
  public function getGit()
  {
    return $this->git;
  }
}

class Clouddebugger_SourceLocation extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $line;
  public $path;


  public function setLine($line)
  {
    $this->line = $line;
  }
  public function getLine()
  {
    return $this->line;
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

class Clouddebugger_StackFrame extends Collection
{
  protected $collection_key = 'locals';
  protected $internal_gapi_mappings = array(
  );
  protected $argumentsType = 'Clouddebugger_Variable';
  protected $argumentsDataType = 'array';
  public $function;
  protected $localsType = 'Clouddebugger_Variable';
  protected $localsDataType = 'array';
  protected $locationType = 'Clouddebugger_SourceLocation';
  protected $locationDataType = '';


  public function setArguments($arguments)
  {
    $this->arguments = $arguments;
  }
  public function getArguments()
  {
    return $this->arguments;
  }
  public function setFunction($function)
  {
    $this->function = $function;
  }
  public function getFunction()
  {
    return $this->function;
  }
  public function setLocals($locals)
  {
    $this->locals = $locals;
  }
  public function getLocals()
  {
    return $this->locals;
  }
  public function setLocation(Clouddebugger_SourceLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
}

class Clouddebugger_StatusMessage extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $descriptionType = 'Clouddebugger_FormatMessage';
  protected $descriptionDataType = '';
  public $isError;
  public $refersTo;


  public function setDescription(Clouddebugger_FormatMessage $description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setIsError($isError)
  {
    $this->isError = $isError;
  }
  public function getIsError()
  {
    return $this->isError;
  }
  public function setRefersTo($refersTo)
  {
    $this->refersTo = $refersTo;
  }
  public function getRefersTo()
  {
    return $this->refersTo;
  }
}

class Clouddebugger_UpdateActiveBreakpointRequest extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $breakpointType = 'Clouddebugger_Breakpoint';
  protected $breakpointDataType = '';


  public function setBreakpoint(Clouddebugger_Breakpoint $breakpoint)
  {
    $this->breakpoint = $breakpoint;
  }
  public function getBreakpoint()
  {
    return $this->breakpoint;
  }
}

class Clouddebugger_UpdateActiveBreakpointResponse extends Model
{
}

class Clouddebugger_Variable extends Collection
{
  protected $collection_key = 'members';
  protected $internal_gapi_mappings = array(
  );
  protected $membersType = 'Clouddebugger_Variable';
  protected $membersDataType = 'array';
  public $name;
  protected $statusType = 'Clouddebugger_StatusMessage';
  protected $statusDataType = '';
  public $value;
  public $varTableIndex;


  public function setMembers($members)
  {
    $this->members = $members;
  }
  public function getMembers()
  {
    return $this->members;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setStatus(Clouddebugger_StatusMessage $status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
  public function setVarTableIndex($varTableIndex)
  {
    $this->varTableIndex = $varTableIndex;
  }
  public function getVarTableIndex()
  {
    return $this->varTableIndex;
  }
}
