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
 * Service definition for Gmail (v1).
 *
 * <p>
 * The Gmail REST API.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/gmail/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Gmail extends Service
{
  /** View and manage your mail. */
  const MAIL_GOOGLE_COM =
      "https://mail.google.com/";
  /** Manage drafts and send emails. */
  const GMAIL_COMPOSE =
      "https://www.googleapis.com/auth/gmail.compose";
  /** Insert mail into your mailbox. */
  const GMAIL_INSERT =
      "https://www.googleapis.com/auth/gmail.insert";
  /** Manage mailbox labels. */
  const GMAIL_LABELS =
      "https://www.googleapis.com/auth/gmail.labels";
  /** View and modify but not delete your email. */
  const GMAIL_MODIFY =
      "https://www.googleapis.com/auth/gmail.modify";
  /** View your emails messages and settings. */
  const GMAIL_READONLY =
      "https://www.googleapis.com/auth/gmail.readonly";
  /** Send email on your behalf. */
  const GMAIL_SEND =
      "https://www.googleapis.com/auth/gmail.send";

  public $users;
  public $users_drafts;
  public $users_history;
  public $users_labels;
  public $users_messages;
  public $users_messages_attachments;
  public $users_threads;
  

  /**
   * Constructs the internal representation of the Gmail service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'gmail/v1/users/';
    $this->version = 'v1';
    $this->serviceName = 'gmail';

    $this->users = new Gmail_Users_Resource(
        $this,
        $this->serviceName,
        'users',
        array(
          'methods' => array(
            'getProfile' => array(
              'path' => '{userId}/profile',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'stop' => array(
              'path' => '{userId}/stop',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'watch' => array(
              'path' => '{userId}/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->users_drafts = new Gmail_UsersDrafts_Resource(
        $this,
        $this->serviceName,
        'drafts',
        array(
          'methods' => array(
            'create' => array(
              'path' => '{userId}/drafts',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{userId}/drafts/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userId' => array(
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
            ),'get' => array(
              'path' => '{userId}/drafts/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'format' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => '{userId}/drafts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'send' => array(
              'path' => '{userId}/drafts/send',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{userId}/drafts/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'userId' => array(
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
    $this->users_history = new Gmail_UsersHistory_Resource(
        $this,
        $this->serviceName,
        'history',
        array(
          'methods' => array(
            'list' => array(
              'path' => '{userId}/history',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'labelId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startHistoryId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->users_labels = new Gmail_UsersLabels_Resource(
        $this,
        $this->serviceName,
        'labels',
        array(
          'methods' => array(
            'create' => array(
              'path' => '{userId}/labels',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{userId}/labels/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userId' => array(
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
            ),'get' => array(
              'path' => '{userId}/labels/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
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
            ),'list' => array(
              'path' => '{userId}/labels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => '{userId}/labels/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'userId' => array(
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
            ),'update' => array(
              'path' => '{userId}/labels/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'userId' => array(
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
    $this->users_messages = new Gmail_UsersMessages_Resource(
        $this,
        $this->serviceName,
        'messages',
        array(
          'methods' => array(
            'delete' => array(
              'path' => '{userId}/messages/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userId' => array(
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
            ),'get' => array(
              'path' => '{userId}/messages/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'metadataHeaders' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'format' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'import' => array(
              'path' => '{userId}/messages/import',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'processForCalendar' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'internalDateSource' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'neverMarkSpam' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => '{userId}/messages',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'internalDateSource' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => '{userId}/messages',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeSpamTrash' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'labelIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'modify' => array(
              'path' => '{userId}/messages/{id}/modify',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
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
            ),'send' => array(
              'path' => '{userId}/messages/send',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'trash' => array(
              'path' => '{userId}/messages/{id}/trash',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
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
            ),'untrash' => array(
              'path' => '{userId}/messages/{id}/untrash',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
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
    $this->users_messages_attachments = new Gmail_UsersMessagesAttachments_Resource(
        $this,
        $this->serviceName,
        'attachments',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{userId}/messages/{messageId}/attachments/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'messageId' => array(
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
    $this->users_threads = new Gmail_UsersThreads_Resource(
        $this,
        $this->serviceName,
        'threads',
        array(
          'methods' => array(
            'delete' => array(
              'path' => '{userId}/threads/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userId' => array(
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
            ),'get' => array(
              'path' => '{userId}/threads/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'metadataHeaders' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'format' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => '{userId}/threads',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeSpamTrash' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'labelIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'modify' => array(
              'path' => '{userId}/threads/{id}/modify',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
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
            ),'trash' => array(
              'path' => '{userId}/threads/{id}/trash',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
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
            ),'untrash' => array(
              'path' => '{userId}/threads/{id}/untrash',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
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
  }
}


/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Gmail(...);
 *   $users = $gmailService->users;
 *  </code>
 */
class Gmail_Users_Resource extends Resource
{

  /**
   * Gets the current user's Gmail profile. (users.getProfile)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   * @return Gmail_Profile
   */
  public function getProfile($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('getProfile', array($params), "Gmail_Profile");
  }

  /**
   * Stop receiving push notifications for the given user mailbox. (users.stop)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   */
  public function stop($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('stop', array($params));
  }

  /**
   * Set up or update a push notification watch on the given user mailbox.
   * (users.watch)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param Google_WatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_WatchResponse
   */
  public function watch($userId, Gmail_WatchRequest $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "Gmail_WatchResponse");
  }
}

/**
 * The "drafts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Gmail(...);
 *   $drafts = $gmailService->drafts;
 *  </code>
 */
class Gmail_UsersDrafts_Resource extends Resource
{

  /**
   * Creates a new draft with the DRAFT label. (drafts.create)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param Google_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Draft
   */
  public function create($userId, Gmail_Draft $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Gmail_Draft");
  }

  /**
   * Immediately and permanently deletes the specified draft. Does not simply
   * trash it. (drafts.delete)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the draft to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets the specified draft. (drafts.get)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the draft to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string format The format to return the draft in.
   * @return Gmail_Draft
   */
  public function get($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Gmail_Draft");
  }

  /**
   * Lists the drafts in the user's mailbox. (drafts.listUsersDrafts)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Page token to retrieve a specific page of results
   * in the list.
   * @opt_param string maxResults Maximum number of drafts to return.
   * @return Gmail_ListDraftsResponse
   */
  public function listUsersDrafts($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Gmail_ListDraftsResponse");
  }

  /**
   * Sends the specified, existing draft to the recipients in the To, Cc, and Bcc
   * headers. (drafts.send)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param Google_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Message
   */
  public function send($userId, Gmail_Draft $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('send', array($params), "Gmail_Message");
  }

  /**
   * Replaces a draft's content. (drafts.update)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the draft to update.
   * @param Google_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Draft
   */
  public function update($userId, $id, Gmail_Draft $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Gmail_Draft");
  }
}
/**
 * The "history" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Gmail(...);
 *   $history = $gmailService->history;
 *  </code>
 */
class Gmail_UsersHistory_Resource extends Resource
{

  /**
   * Lists the history of all changes to the given mailbox. History results are
   * returned in chronological order (increasing historyId).
   * (history.listUsersHistory)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Page token to retrieve a specific page of results
   * in the list.
   * @opt_param string maxResults The maximum number of history records to return.
   * @opt_param string labelId Only return messages with a label matching the ID.
   * @opt_param string startHistoryId Required. Returns history records after the
   * specified startHistoryId. The supplied startHistoryId should be obtained from
   * the historyId of a message, thread, or previous list response. History IDs
   * increase chronologically but are not contiguous with random gaps in between
   * valid IDs. Supplying an invalid or out of date startHistoryId typically
   * returns an HTTP 404 error code. A historyId is typically valid for at least a
   * week, but in some rare circumstances may be valid for only a few hours. If
   * you receive an HTTP 404 error response, your application should perform a
   * full sync. If you receive no nextPageToken in the response, there are no
   * updates to retrieve and you can store the returned historyId for a future
   * request.
   * @return Gmail_ListHistoryResponse
   */
  public function listUsersHistory($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Gmail_ListHistoryResponse");
  }
}
/**
 * The "labels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Gmail(...);
 *   $labels = $gmailService->labels;
 *  </code>
 */
class Gmail_UsersLabels_Resource extends Resource
{

  /**
   * Creates a new label. (labels.create)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param Google_Label $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Label
   */
  public function create($userId, Gmail_Label $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Gmail_Label");
  }

  /**
   * Immediately and permanently deletes the specified label and removes it from
   * any messages and threads that it is applied to. (labels.delete)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the label to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets the specified label. (labels.get)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the label to retrieve.
   * @param array $optParams Optional parameters.
   * @return Gmail_Label
   */
  public function get($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Gmail_Label");
  }

  /**
   * Lists all labels in the user's mailbox. (labels.listUsersLabels)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   * @return Gmail_ListLabelsResponse
   */
  public function listUsersLabels($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Gmail_ListLabelsResponse");
  }

  /**
   * Updates the specified label. This method supports patch semantics.
   * (labels.patch)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the label to update.
   * @param Google_Label $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Label
   */
  public function patch($userId, $id, Gmail_Label $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Gmail_Label");
  }

  /**
   * Updates the specified label. (labels.update)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the label to update.
   * @param Google_Label $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Label
   */
  public function update($userId, $id, Gmail_Label $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Gmail_Label");
  }
}
/**
 * The "messages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Gmail(...);
 *   $messages = $gmailService->messages;
 *  </code>
 */
class Gmail_UsersMessages_Resource extends Resource
{

  /**
   * Immediately and permanently deletes the specified message. This operation
   * cannot be undone. Prefer messages.trash instead. (messages.delete)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the message to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets the specified message. (messages.get)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the message to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string metadataHeaders When given and format is METADATA, only
   * include headers specified.
   * @opt_param string format The format to return the message in.
   * @return Gmail_Message
   */
  public function get($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Gmail_Message");
  }

  /**
   * Imports a message into only this user's mailbox, with standard email delivery
   * scanning and classification similar to receiving via SMTP. Does not send a
   * message. (messages.import)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param Google_Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool deleted Mark the email as permanently deleted (not TRASH) and
   * only visible in Google Apps Vault to a Vault administrator. Only used for
   * Google Apps for Work accounts.
   * @opt_param bool processForCalendar Process calendar invites in the email and
   * add any extracted meetings to the Google Calendar for this user.
   * @opt_param string internalDateSource Source for Gmail's internal date of the
   * message.
   * @opt_param bool neverMarkSpam Ignore the Gmail spam classifier decision and
   * never mark this email as SPAM in the mailbox.
   * @return Gmail_Message
   */
  public function import($userId, Gmail_Message $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Gmail_Message");
  }

  /**
   * Directly inserts a message into only this user's mailbox similar to IMAP
   * APPEND, bypassing most scanning and classification. Does not send a message.
   * (messages.insert)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param Google_Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool deleted Mark the email as permanently deleted (not TRASH) and
   * only visible in Google Apps Vault to a Vault administrator. Only used for
   * Google Apps for Work accounts.
   * @opt_param string internalDateSource Source for Gmail's internal date of the
   * message.
   * @return Gmail_Message
   */
  public function insert($userId, Gmail_Message $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Gmail_Message");
  }

  /**
   * Lists the messages in the user's mailbox. (messages.listUsersMessages)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults Maximum number of messages to return.
   * @opt_param string q Only return messages matching the specified query.
   * Supports the same query format as the Gmail search box. For example,
   * "from:someuser@example.com rfc822msgid: is:unread".
   * @opt_param string pageToken Page token to retrieve a specific page of results
   * in the list.
   * @opt_param bool includeSpamTrash Include messages from SPAM and TRASH in the
   * results.
   * @opt_param string labelIds Only return messages with labels that match all of
   * the specified label IDs.
   * @return Gmail_ListMessagesResponse
   */
  public function listUsersMessages($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Gmail_ListMessagesResponse");
  }

  /**
   * Modifies the labels on the specified message. (messages.modify)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the message to modify.
   * @param Google_ModifyMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Message
   */
  public function modify($userId, $id, Gmail_ModifyMessageRequest $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modify', array($params), "Gmail_Message");
  }

  /**
   * Sends the specified message to the recipients in the To, Cc, and Bcc headers.
   * (messages.send)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param Google_Message $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Message
   */
  public function send($userId, Gmail_Message $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('send', array($params), "Gmail_Message");
  }

  /**
   * Moves the specified message to the trash. (messages.trash)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the message to Trash.
   * @param array $optParams Optional parameters.
   * @return Gmail_Message
   */
  public function trash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('trash', array($params), "Gmail_Message");
  }

  /**
   * Removes the specified message from the trash. (messages.untrash)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the message to remove from Trash.
   * @param array $optParams Optional parameters.
   * @return Gmail_Message
   */
  public function untrash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('untrash', array($params), "Gmail_Message");
  }
}

/**
 * The "attachments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Gmail(...);
 *   $attachments = $gmailService->attachments;
 *  </code>
 */
class Gmail_UsersMessagesAttachments_Resource extends Resource
{

  /**
   * Gets the specified message attachment. (attachments.get)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $messageId The ID of the message containing the attachment.
   * @param string $id The ID of the attachment.
   * @param array $optParams Optional parameters.
   * @return Gmail_MessagePartBody
   */
  public function get($userId, $messageId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'messageId' => $messageId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Gmail_MessagePartBody");
  }
}
/**
 * The "threads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Gmail(...);
 *   $threads = $gmailService->threads;
 *  </code>
 */
class Gmail_UsersThreads_Resource extends Resource
{

  /**
   * Immediately and permanently deletes the specified thread. This operation
   * cannot be undone. Prefer threads.trash instead. (threads.delete)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id ID of the Thread to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Gets the specified thread. (threads.get)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the thread to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string metadataHeaders When given and format is METADATA, only
   * include headers specified.
   * @opt_param string format The format to return the messages in.
   * @return Gmail_Thread
   */
  public function get($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Gmail_Thread");
  }

  /**
   * Lists the threads in the user's mailbox. (threads.listUsersThreads)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults Maximum number of threads to return.
   * @opt_param string q Only return threads matching the specified query.
   * Supports the same query format as the Gmail search box. For example,
   * "from:someuser@example.com rfc822msgid: is:unread".
   * @opt_param string pageToken Page token to retrieve a specific page of results
   * in the list.
   * @opt_param bool includeSpamTrash Include threads from SPAM and TRASH in the
   * results.
   * @opt_param string labelIds Only return threads with labels that match all of
   * the specified label IDs.
   * @return Gmail_ListThreadsResponse
   */
  public function listUsersThreads($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Gmail_ListThreadsResponse");
  }

  /**
   * Modifies the labels applied to the thread. This applies to all messages in
   * the thread. (threads.modify)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the thread to modify.
   * @param Google_ModifyThreadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Gmail_Thread
   */
  public function modify($userId, $id, Gmail_ModifyThreadRequest $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modify', array($params), "Gmail_Thread");
  }

  /**
   * Moves the specified thread to the trash. (threads.trash)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the thread to Trash.
   * @param array $optParams Optional parameters.
   * @return Gmail_Thread
   */
  public function trash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('trash', array($params), "Gmail_Thread");
  }

  /**
   * Removes the specified thread from the trash. (threads.untrash)
   *
   * @param string $userId The user's email address. The special value me can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the thread to remove from Trash.
   * @param array $optParams Optional parameters.
   * @return Gmail_Thread
   */
  public function untrash($userId, $id, $optParams = array())
  {
    $params = array('userId' => $userId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('untrash', array($params), "Gmail_Thread");
  }
}




class Gmail_Draft extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  protected $messageType = 'Gmail_Message';
  protected $messageDataType = '';


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMessage(Gmail_Message $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Gmail_History extends Collection
{
  protected $collection_key = 'messagesDeleted';
  protected $internal_gapi_mappings = array(
  );
  public $id;
  protected $labelsAddedType = 'Gmail_HistoryLabelAdded';
  protected $labelsAddedDataType = 'array';
  protected $labelsRemovedType = 'Gmail_HistoryLabelRemoved';
  protected $labelsRemovedDataType = 'array';
  protected $messagesType = 'Gmail_Message';
  protected $messagesDataType = 'array';
  protected $messagesAddedType = 'Gmail_HistoryMessageAdded';
  protected $messagesAddedDataType = 'array';
  protected $messagesDeletedType = 'Gmail_HistoryMessageDeleted';
  protected $messagesDeletedDataType = 'array';


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLabelsAdded($labelsAdded)
  {
    $this->labelsAdded = $labelsAdded;
  }
  public function getLabelsAdded()
  {
    return $this->labelsAdded;
  }
  public function setLabelsRemoved($labelsRemoved)
  {
    $this->labelsRemoved = $labelsRemoved;
  }
  public function getLabelsRemoved()
  {
    return $this->labelsRemoved;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMessagesAdded($messagesAdded)
  {
    $this->messagesAdded = $messagesAdded;
  }
  public function getMessagesAdded()
  {
    return $this->messagesAdded;
  }
  public function setMessagesDeleted($messagesDeleted)
  {
    $this->messagesDeleted = $messagesDeleted;
  }
  public function getMessagesDeleted()
  {
    return $this->messagesDeleted;
  }
}

class Gmail_HistoryLabelAdded extends Collection
{
  protected $collection_key = 'labelIds';
  protected $internal_gapi_mappings = array(
  );
  public $labelIds;
  protected $messageType = 'Gmail_Message';
  protected $messageDataType = '';


  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  public function getLabelIds()
  {
    return $this->labelIds;
  }
  public function setMessage(Gmail_Message $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Gmail_HistoryLabelRemoved extends Collection
{
  protected $collection_key = 'labelIds';
  protected $internal_gapi_mappings = array(
  );
  public $labelIds;
  protected $messageType = 'Gmail_Message';
  protected $messageDataType = '';


  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  public function getLabelIds()
  {
    return $this->labelIds;
  }
  public function setMessage(Gmail_Message $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Gmail_HistoryMessageAdded extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Gmail_Message';
  protected $messageDataType = '';


  public function setMessage(Gmail_Message $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Gmail_HistoryMessageDeleted extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Gmail_Message';
  protected $messageDataType = '';


  public function setMessage(Gmail_Message $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Gmail_Label extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $labelListVisibility;
  public $messageListVisibility;
  public $messagesTotal;
  public $messagesUnread;
  public $name;
  public $threadsTotal;
  public $threadsUnread;
  public $type;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLabelListVisibility($labelListVisibility)
  {
    $this->labelListVisibility = $labelListVisibility;
  }
  public function getLabelListVisibility()
  {
    return $this->labelListVisibility;
  }
  public function setMessageListVisibility($messageListVisibility)
  {
    $this->messageListVisibility = $messageListVisibility;
  }
  public function getMessageListVisibility()
  {
    return $this->messageListVisibility;
  }
  public function setMessagesTotal($messagesTotal)
  {
    $this->messagesTotal = $messagesTotal;
  }
  public function getMessagesTotal()
  {
    return $this->messagesTotal;
  }
  public function setMessagesUnread($messagesUnread)
  {
    $this->messagesUnread = $messagesUnread;
  }
  public function getMessagesUnread()
  {
    return $this->messagesUnread;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setThreadsTotal($threadsTotal)
  {
    $this->threadsTotal = $threadsTotal;
  }
  public function getThreadsTotal()
  {
    return $this->threadsTotal;
  }
  public function setThreadsUnread($threadsUnread)
  {
    $this->threadsUnread = $threadsUnread;
  }
  public function getThreadsUnread()
  {
    return $this->threadsUnread;
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

class Gmail_ListDraftsResponse extends Collection
{
  protected $collection_key = 'drafts';
  protected $internal_gapi_mappings = array(
  );
  protected $draftsType = 'Gmail_Draft';
  protected $draftsDataType = 'array';
  public $nextPageToken;
  public $resultSizeEstimate;


  public function setDrafts($drafts)
  {
    $this->drafts = $drafts;
  }
  public function getDrafts()
  {
    return $this->drafts;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setResultSizeEstimate($resultSizeEstimate)
  {
    $this->resultSizeEstimate = $resultSizeEstimate;
  }
  public function getResultSizeEstimate()
  {
    return $this->resultSizeEstimate;
  }
}

class Gmail_ListHistoryResponse extends Collection
{
  protected $collection_key = 'history';
  protected $internal_gapi_mappings = array(
  );
  protected $historyType = 'Gmail_History';
  protected $historyDataType = 'array';
  public $historyId;
  public $nextPageToken;


  public function setHistory($history)
  {
    $this->history = $history;
  }
  public function getHistory()
  {
    return $this->history;
  }
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  public function getHistoryId()
  {
    return $this->historyId;
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

class Gmail_ListLabelsResponse extends Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  protected $labelsType = 'Gmail_Label';
  protected $labelsDataType = 'array';


  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
}

class Gmail_ListMessagesResponse extends Collection
{
  protected $collection_key = 'messages';
  protected $internal_gapi_mappings = array(
  );
  protected $messagesType = 'Gmail_Message';
  protected $messagesDataType = 'array';
  public $nextPageToken;
  public $resultSizeEstimate;


  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setResultSizeEstimate($resultSizeEstimate)
  {
    $this->resultSizeEstimate = $resultSizeEstimate;
  }
  public function getResultSizeEstimate()
  {
    return $this->resultSizeEstimate;
  }
}

class Gmail_ListThreadsResponse extends Collection
{
  protected $collection_key = 'threads';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  public $resultSizeEstimate;
  protected $threadsType = 'Gmail_Thread';
  protected $threadsDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setResultSizeEstimate($resultSizeEstimate)
  {
    $this->resultSizeEstimate = $resultSizeEstimate;
  }
  public function getResultSizeEstimate()
  {
    return $this->resultSizeEstimate;
  }
  public function setThreads($threads)
  {
    $this->threads = $threads;
  }
  public function getThreads()
  {
    return $this->threads;
  }
}

class Gmail_Message extends Collection
{
  protected $collection_key = 'labelIds';
  protected $internal_gapi_mappings = array(
  );
  public $historyId;
  public $id;
  public $internalDate;
  public $labelIds;
  protected $payloadType = 'Gmail_MessagePart';
  protected $payloadDataType = '';
  public $raw;
  public $sizeEstimate;
  public $snippet;
  public $threadId;


  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  public function getHistoryId()
  {
    return $this->historyId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInternalDate($internalDate)
  {
    $this->internalDate = $internalDate;
  }
  public function getInternalDate()
  {
    return $this->internalDate;
  }
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  public function getLabelIds()
  {
    return $this->labelIds;
  }
  public function setPayload(Gmail_MessagePart $payload)
  {
    $this->payload = $payload;
  }
  public function getPayload()
  {
    return $this->payload;
  }
  public function setRaw($raw)
  {
    $this->raw = $raw;
  }
  public function getRaw()
  {
    return $this->raw;
  }
  public function setSizeEstimate($sizeEstimate)
  {
    $this->sizeEstimate = $sizeEstimate;
  }
  public function getSizeEstimate()
  {
    return $this->sizeEstimate;
  }
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  public function getSnippet()
  {
    return $this->snippet;
  }
  public function setThreadId($threadId)
  {
    $this->threadId = $threadId;
  }
  public function getThreadId()
  {
    return $this->threadId;
  }
}

class Gmail_MessagePart extends Collection
{
  protected $collection_key = 'parts';
  protected $internal_gapi_mappings = array(
  );
  protected $bodyType = 'Gmail_MessagePartBody';
  protected $bodyDataType = '';
  public $filename;
  protected $headersType = 'Gmail_MessagePartHeader';
  protected $headersDataType = 'array';
  public $mimeType;
  public $partId;
  protected $partsType = 'Gmail_MessagePart';
  protected $partsDataType = 'array';


  public function setBody(Gmail_MessagePartBody $body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  public function getFilename()
  {
    return $this->filename;
  }
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  public function getHeaders()
  {
    return $this->headers;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setPartId($partId)
  {
    $this->partId = $partId;
  }
  public function getPartId()
  {
    return $this->partId;
  }
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  public function getParts()
  {
    return $this->parts;
  }
}

class Gmail_MessagePartBody extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $attachmentId;
  public $data;
  public $size;


  public function setAttachmentId($attachmentId)
  {
    $this->attachmentId = $attachmentId;
  }
  public function getAttachmentId()
  {
    return $this->attachmentId;
  }
  public function setData($data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }
  public function setSize($size)
  {
    $this->size = $size;
  }
  public function getSize()
  {
    return $this->size;
  }
}

class Gmail_MessagePartHeader extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $value;


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

class Gmail_ModifyMessageRequest extends Collection
{
  protected $collection_key = 'removeLabelIds';
  protected $internal_gapi_mappings = array(
  );
  public $addLabelIds;
  public $removeLabelIds;


  public function setAddLabelIds($addLabelIds)
  {
    $this->addLabelIds = $addLabelIds;
  }
  public function getAddLabelIds()
  {
    return $this->addLabelIds;
  }
  public function setRemoveLabelIds($removeLabelIds)
  {
    $this->removeLabelIds = $removeLabelIds;
  }
  public function getRemoveLabelIds()
  {
    return $this->removeLabelIds;
  }
}

class Gmail_ModifyThreadRequest extends Collection
{
  protected $collection_key = 'removeLabelIds';
  protected $internal_gapi_mappings = array(
  );
  public $addLabelIds;
  public $removeLabelIds;


  public function setAddLabelIds($addLabelIds)
  {
    $this->addLabelIds = $addLabelIds;
  }
  public function getAddLabelIds()
  {
    return $this->addLabelIds;
  }
  public function setRemoveLabelIds($removeLabelIds)
  {
    $this->removeLabelIds = $removeLabelIds;
  }
  public function getRemoveLabelIds()
  {
    return $this->removeLabelIds;
  }
}

class Gmail_Profile extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $emailAddress;
  public $historyId;
  public $messagesTotal;
  public $threadsTotal;


  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  public function getHistoryId()
  {
    return $this->historyId;
  }
  public function setMessagesTotal($messagesTotal)
  {
    $this->messagesTotal = $messagesTotal;
  }
  public function getMessagesTotal()
  {
    return $this->messagesTotal;
  }
  public function setThreadsTotal($threadsTotal)
  {
    $this->threadsTotal = $threadsTotal;
  }
  public function getThreadsTotal()
  {
    return $this->threadsTotal;
  }
}

class Gmail_Thread extends Collection
{
  protected $collection_key = 'messages';
  protected $internal_gapi_mappings = array(
  );
  public $historyId;
  public $id;
  protected $messagesType = 'Gmail_Message';
  protected $messagesDataType = 'array';
  public $snippet;


  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  public function getHistoryId()
  {
    return $this->historyId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  public function getSnippet()
  {
    return $this->snippet;
  }
}

class Gmail_WatchRequest extends Collection
{
  protected $collection_key = 'labelIds';
  protected $internal_gapi_mappings = array(
  );
  public $labelFilterAction;
  public $labelIds;
  public $topicName;


  public function setLabelFilterAction($labelFilterAction)
  {
    $this->labelFilterAction = $labelFilterAction;
  }
  public function getLabelFilterAction()
  {
    return $this->labelFilterAction;
  }
  public function setLabelIds($labelIds)
  {
    $this->labelIds = $labelIds;
  }
  public function getLabelIds()
  {
    return $this->labelIds;
  }
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class Gmail_WatchResponse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $expiration;
  public $historyId;


  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;
  }
  public function getExpiration()
  {
    return $this->expiration;
  }
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  public function getHistoryId()
  {
    return $this->historyId;
  }
}
