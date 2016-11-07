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
 * Service definition for AdExchangeSeller (v2.0).
 *
 * <p>
 * Gives Ad Exchange seller users access to their inventory and the ability to
 * generate reports</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/ad-exchange/seller-rest/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class AdExchangeSeller extends Service
{
  /** View and manage your Ad Exchange data. */
  const ADEXCHANGE_SELLER =
      "https://www.googleapis.com/auth/adexchange.seller";
  /** View your Ad Exchange data. */
  const ADEXCHANGE_SELLER_READONLY =
      "https://www.googleapis.com/auth/adexchange.seller.readonly";

  public $accounts;
  public $accounts_adclients;
  public $accounts_alerts;
  public $accounts_customchannels;
  public $accounts_metadata_dimensions;
  public $accounts_metadata_metrics;
  public $accounts_preferreddeals;
  public $accounts_reports;
  public $accounts_reports_saved;
  public $accounts_urlchannels;
  

  /**
   * Constructs the internal representation of the AdExchangeSeller service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'adexchangeseller/v2.0/';
    $this->version = 'v2.0';
    $this->serviceName = 'adexchangeseller';

    $this->accounts = new AdExchangeSeller_Accounts_Resource(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'accounts/{accountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_adclients = new AdExchangeSeller_AccountsAdclients_Resource(
        $this,
        $this->serviceName,
        'adclients',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'accounts/{accountId}/adclients',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
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
            ),
          )
        )
    );
    $this->accounts_alerts = new AdExchangeSeller_AccountsAlerts_Resource(
        $this,
        $this->serviceName,
        'alerts',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'accounts/{accountId}/alerts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'locale' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_customchannels = new AdExchangeSeller_AccountsCustomchannels_Resource(
        $this,
        $this->serviceName,
        'customchannels',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'adClientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customChannelId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/adclients/{adClientId}/customchannels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'adClientId' => array(
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
            ),
          )
        )
    );
    $this->accounts_metadata_dimensions = new AdExchangeSeller_AccountsMetadataDimensions_Resource(
        $this,
        $this->serviceName,
        'dimensions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'accounts/{accountId}/metadata/dimensions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_metadata_metrics = new AdExchangeSeller_AccountsMetadataMetrics_Resource(
        $this,
        $this->serviceName,
        'metrics',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'accounts/{accountId}/metadata/metrics',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_preferreddeals = new AdExchangeSeller_AccountsPreferreddeals_Resource(
        $this,
        $this->serviceName,
        'preferreddeals',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'accounts/{accountId}/preferreddeals/{dealId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'dealId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/preferreddeals',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_reports = new AdExchangeSeller_AccountsReports_Resource(
        $this,
        $this->serviceName,
        'reports',
        array(
          'methods' => array(
            'generate' => array(
              'path' => 'accounts/{accountId}/reports',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'locale' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'metric' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'startIndex' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dimension' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_reports_saved = new AdExchangeSeller_AccountsReportsSaved_Resource(
        $this,
        $this->serviceName,
        'saved',
        array(
          'methods' => array(
            'generate' => array(
              'path' => 'accounts/{accountId}/reports/{savedReportId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'savedReportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'locale' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startIndex' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/reports/saved',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
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
            ),
          )
        )
    );
    $this->accounts_urlchannels = new AdExchangeSeller_AccountsUrlchannels_Resource(
        $this,
        $this->serviceName,
        'urlchannels',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'accounts/{accountId}/adclients/{adClientId}/urlchannels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'adClientId' => array(
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
            ),
          )
        )
    );
  }
}


/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $accounts = $adexchangesellerService->accounts;
 *  </code>
 */
class AdExchangeSeller_Accounts_Resource extends Resource
{

  /**
   * Get information about the selected Ad Exchange account. (accounts.get)
   *
   * @param string $accountId Account to get information about. Tip: 'myaccount'
   * is a valid ID.
   * @param array $optParams Optional parameters.
   * @return AdExchangeSeller_Account
   */
  public function get($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "AdExchangeSeller_Account");
  }

  /**
   * List all accounts available to this Ad Exchange account.
   * (accounts.listAccounts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken A continuation token, used to page through
   * accounts. To retrieve the next page, set this parameter to the value of
   * "nextPageToken" from the previous response.
   * @opt_param int maxResults The maximum number of accounts to include in the
   * response, used for paging.
   * @return AdExchangeSeller_Accounts
   */
  public function listAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_Accounts");
  }
}

/**
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $adclients = $adexchangesellerService->adclients;
 *  </code>
 */
class AdExchangeSeller_AccountsAdclients_Resource extends Resource
{

  /**
   * List all ad clients in this Ad Exchange account.
   * (adclients.listAccountsAdclients)
   *
   * @param string $accountId Account to which the ad client belongs.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken A continuation token, used to page through ad
   * clients. To retrieve the next page, set this parameter to the value of
   * "nextPageToken" from the previous response.
   * @opt_param string maxResults The maximum number of ad clients to include in
   * the response, used for paging.
   * @return AdExchangeSeller_AdClients
   */
  public function listAccountsAdclients($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_AdClients");
  }
}
/**
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $alerts = $adexchangesellerService->alerts;
 *  </code>
 */
class AdExchangeSeller_AccountsAlerts_Resource extends Resource
{

  /**
   * List the alerts for this Ad Exchange account. (alerts.listAccountsAlerts)
   *
   * @param string $accountId Account owning the alerts.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale The locale to use for translating alert messages.
   * The account locale will be used if this is not supplied. The AdSense default
   * (English) will be used if the supplied locale is invalid or unsupported.
   * @return AdExchangeSeller_Alerts
   */
  public function listAccountsAlerts($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_Alerts");
  }
}
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $customchannels = $adexchangesellerService->customchannels;
 *  </code>
 */
class AdExchangeSeller_AccountsCustomchannels_Resource extends Resource
{

  /**
   * Get the specified custom channel from the specified ad client.
   * (customchannels.get)
   *
   * @param string $accountId Account to which the ad client belongs.
   * @param string $adClientId Ad client which contains the custom channel.
   * @param string $customChannelId Custom channel to retrieve.
   * @param array $optParams Optional parameters.
   * @return AdExchangeSeller_CustomChannel
   */
  public function get($accountId, $adClientId, $customChannelId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "AdExchangeSeller_CustomChannel");
  }

  /**
   * List all custom channels in the specified ad client for this Ad Exchange
   * account. (customchannels.listAccountsCustomchannels)
   *
   * @param string $accountId Account to which the ad client belongs.
   * @param string $adClientId Ad client for which to list custom channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken A continuation token, used to page through custom
   * channels. To retrieve the next page, set this parameter to the value of
   * "nextPageToken" from the previous response.
   * @opt_param string maxResults The maximum number of custom channels to include
   * in the response, used for paging.
   * @return AdExchangeSeller_CustomChannels
   */
  public function listAccountsCustomchannels($accountId, $adClientId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_CustomChannels");
  }
}
/**
 * The "metadata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $metadata = $adexchangesellerService->metadata;
 *  </code>
 */
class AdExchangeSeller_AccountsMetadata_Resource extends Resource
{
}

/**
 * The "dimensions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $dimensions = $adexchangesellerService->dimensions;
 *  </code>
 */
class AdExchangeSeller_AccountsMetadataDimensions_Resource extends Resource
{

  /**
   * List the metadata for the dimensions available to this AdExchange account.
   * (dimensions.listAccountsMetadataDimensions)
   *
   * @param string $accountId Account with visibility to the dimensions.
   * @param array $optParams Optional parameters.
   * @return AdExchangeSeller_Metadata
   */
  public function listAccountsMetadataDimensions($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_Metadata");
  }
}
/**
 * The "metrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $metrics = $adexchangesellerService->metrics;
 *  </code>
 */
class AdExchangeSeller_AccountsMetadataMetrics_Resource extends Resource
{

  /**
   * List the metadata for the metrics available to this AdExchange account.
   * (metrics.listAccountsMetadataMetrics)
   *
   * @param string $accountId Account with visibility to the metrics.
   * @param array $optParams Optional parameters.
   * @return AdExchangeSeller_Metadata
   */
  public function listAccountsMetadataMetrics($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_Metadata");
  }
}
/**
 * The "preferreddeals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $preferreddeals = $adexchangesellerService->preferreddeals;
 *  </code>
 */
class AdExchangeSeller_AccountsPreferreddeals_Resource extends Resource
{

  /**
   * Get information about the selected Ad Exchange Preferred Deal.
   * (preferreddeals.get)
   *
   * @param string $accountId Account owning the deal.
   * @param string $dealId Preferred deal to get information about.
   * @param array $optParams Optional parameters.
   * @return AdExchangeSeller_PreferredDeal
   */
  public function get($accountId, $dealId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'dealId' => $dealId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "AdExchangeSeller_PreferredDeal");
  }

  /**
   * List the preferred deals for this Ad Exchange account.
   * (preferreddeals.listAccountsPreferreddeals)
   *
   * @param string $accountId Account owning the deals.
   * @param array $optParams Optional parameters.
   * @return AdExchangeSeller_PreferredDeals
   */
  public function listAccountsPreferreddeals($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_PreferredDeals");
  }
}
/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $reports = $adexchangesellerService->reports;
 *  </code>
 */
class AdExchangeSeller_AccountsReports_Resource extends Resource
{

  /**
   * Generate an Ad Exchange report based on the report request sent in the query
   * parameters. Returns the result as JSON; to retrieve output in CSV format
   * specify "alt=csv" as a query parameter. (reports.generate)
   *
   * @param string $accountId Account which owns the generated report.
   * @param string $startDate Start of the date range to report on in "YYYY-MM-DD"
   * format, inclusive.
   * @param string $endDate End of the date range to report on in "YYYY-MM-DD"
   * format, inclusive.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sort The name of a dimension or metric to sort the
   * resulting report on, optionally prefixed with "+" to sort ascending or "-" to
   * sort descending. If no prefix is specified, the column is sorted ascending.
   * @opt_param string locale Optional locale to use for translating report output
   * to a local language. Defaults to "en_US" if not specified.
   * @opt_param string metric Numeric columns to include in the report.
   * @opt_param string maxResults The maximum number of rows of report data to
   * return.
   * @opt_param string filter Filters to be run on the report.
   * @opt_param string startIndex Index of the first row of report data to return.
   * @opt_param string dimension Dimensions to base the report on.
   * @return AdExchangeSeller_Report
   */
  public function generate($accountId, $startDate, $endDate, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'startDate' => $startDate, 'endDate' => $endDate);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), "AdExchangeSeller_Report");
  }
}

/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $saved = $adexchangesellerService->saved;
 *  </code>
 */
class AdExchangeSeller_AccountsReportsSaved_Resource extends Resource
{

  /**
   * Generate an Ad Exchange report based on the saved report ID sent in the query
   * parameters. (saved.generate)
   *
   * @param string $accountId Account owning the saved report.
   * @param string $savedReportId The saved report to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale Optional locale to use for translating report output
   * to a local language. Defaults to "en_US" if not specified.
   * @opt_param int startIndex Index of the first row of report data to return.
   * @opt_param int maxResults The maximum number of rows of report data to
   * return.
   * @return AdExchangeSeller_Report
   */
  public function generate($accountId, $savedReportId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'savedReportId' => $savedReportId);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), "AdExchangeSeller_Report");
  }

  /**
   * List all saved reports in this Ad Exchange account.
   * (saved.listAccountsReportsSaved)
   *
   * @param string $accountId Account owning the saved reports.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken A continuation token, used to page through saved
   * reports. To retrieve the next page, set this parameter to the value of
   * "nextPageToken" from the previous response.
   * @opt_param int maxResults The maximum number of saved reports to include in
   * the response, used for paging.
   * @return AdExchangeSeller_SavedReports
   */
  public function listAccountsReportsSaved($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_SavedReports");
  }
}
/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSeller(...);
 *   $urlchannels = $adexchangesellerService->urlchannels;
 *  </code>
 */
class AdExchangeSeller_AccountsUrlchannels_Resource extends Resource
{

  /**
   * List all URL channels in the specified ad client for this Ad Exchange
   * account. (urlchannels.listAccountsUrlchannels)
   *
   * @param string $accountId Account to which the ad client belongs.
   * @param string $adClientId Ad client for which to list URL channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken A continuation token, used to page through URL
   * channels. To retrieve the next page, set this parameter to the value of
   * "nextPageToken" from the previous response.
   * @opt_param string maxResults The maximum number of URL channels to include in
   * the response, used for paging.
   * @return AdExchangeSeller_UrlChannels
   */
  public function listAccountsUrlchannels($accountId, $adClientId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "AdExchangeSeller_UrlChannels");
  }
}




class AdExchangeSeller_Account extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $kind;
  public $name;


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
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class AdExchangeSeller_Accounts extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  public $etag;
  protected $itemsType = 'AdExchangeSeller_Account';
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

class AdExchangeSeller_AdClient extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $arcOptIn;
  public $id;
  public $kind;
  public $productCode;
  public $supportsReporting;


  public function setArcOptIn($arcOptIn)
  {
    $this->arcOptIn = $arcOptIn;
  }
  public function getArcOptIn()
  {
    return $this->arcOptIn;
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
  public function setProductCode($productCode)
  {
    $this->productCode = $productCode;
  }
  public function getProductCode()
  {
    return $this->productCode;
  }
  public function setSupportsReporting($supportsReporting)
  {
    $this->supportsReporting = $supportsReporting;
  }
  public function getSupportsReporting()
  {
    return $this->supportsReporting;
  }
}

class AdExchangeSeller_AdClients extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  public $etag;
  protected $itemsType = 'AdExchangeSeller_AdClient';
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

class AdExchangeSeller_Alert extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $kind;
  public $message;
  public $severity;
  public $type;


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
  public function setMessage($message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  public function getSeverity()
  {
    return $this->severity;
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

class AdExchangeSeller_Alerts extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'AdExchangeSeller_Alert';
  protected $itemsDataType = 'array';
  public $kind;


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
}

class AdExchangeSeller_CustomChannel extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $code;
  public $id;
  public $kind;
  public $name;
  protected $targetingInfoType = 'AdExchangeSeller_CustomChannelTargetingInfo';
  protected $targetingInfoDataType = '';


  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setTargetingInfo(AdExchangeSeller_CustomChannelTargetingInfo $targetingInfo)
  {
    $this->targetingInfo = $targetingInfo;
  }
  public function getTargetingInfo()
  {
    return $this->targetingInfo;
  }
}

class AdExchangeSeller_CustomChannelTargetingInfo extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $adsAppearOn;
  public $description;
  public $location;
  public $siteLanguage;


  public function setAdsAppearOn($adsAppearOn)
  {
    $this->adsAppearOn = $adsAppearOn;
  }
  public function getAdsAppearOn()
  {
    return $this->adsAppearOn;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setSiteLanguage($siteLanguage)
  {
    $this->siteLanguage = $siteLanguage;
  }
  public function getSiteLanguage()
  {
    return $this->siteLanguage;
  }
}

class AdExchangeSeller_CustomChannels extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  public $etag;
  protected $itemsType = 'AdExchangeSeller_CustomChannel';
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

class AdExchangeSeller_Metadata extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'AdExchangeSeller_ReportingMetadataEntry';
  protected $itemsDataType = 'array';
  public $kind;


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
}

class AdExchangeSeller_PreferredDeal extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $advertiserName;
  public $buyerNetworkName;
  public $currencyCode;
  public $endTime;
  public $fixedCpm;
  public $id;
  public $kind;
  public $startTime;


  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }
  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }
  public function setBuyerNetworkName($buyerNetworkName)
  {
    $this->buyerNetworkName = $buyerNetworkName;
  }
  public function getBuyerNetworkName()
  {
    return $this->buyerNetworkName;
  }
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setFixedCpm($fixedCpm)
  {
    $this->fixedCpm = $fixedCpm;
  }
  public function getFixedCpm()
  {
    return $this->fixedCpm;
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
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class AdExchangeSeller_PreferredDeals extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'AdExchangeSeller_PreferredDeal';
  protected $itemsDataType = 'array';
  public $kind;


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
}

class AdExchangeSeller_Report extends Collection
{
  protected $collection_key = 'warnings';
  protected $internal_gapi_mappings = array(
  );
  public $averages;
  protected $headersType = 'AdExchangeSeller_ReportHeaders';
  protected $headersDataType = 'array';
  public $kind;
  public $rows;
  public $totalMatchedRows;
  public $totals;
  public $warnings;


  public function setAverages($averages)
  {
    $this->averages = $averages;
  }
  public function getAverages()
  {
    return $this->averages;
  }
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  public function getHeaders()
  {
    return $this->headers;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
  public function setTotalMatchedRows($totalMatchedRows)
  {
    $this->totalMatchedRows = $totalMatchedRows;
  }
  public function getTotalMatchedRows()
  {
    return $this->totalMatchedRows;
  }
  public function setTotals($totals)
  {
    $this->totals = $totals;
  }
  public function getTotals()
  {
    return $this->totals;
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

class AdExchangeSeller_ReportHeaders extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currency;
  public $name;
  public $type;


  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  public function getCurrency()
  {
    return $this->currency;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
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

class AdExchangeSeller_ReportingMetadataEntry extends Collection
{
  protected $collection_key = 'supportedProducts';
  protected $internal_gapi_mappings = array(
  );
  public $compatibleDimensions;
  public $compatibleMetrics;
  public $id;
  public $kind;
  public $requiredDimensions;
  public $requiredMetrics;
  public $supportedProducts;


  public function setCompatibleDimensions($compatibleDimensions)
  {
    $this->compatibleDimensions = $compatibleDimensions;
  }
  public function getCompatibleDimensions()
  {
    return $this->compatibleDimensions;
  }
  public function setCompatibleMetrics($compatibleMetrics)
  {
    $this->compatibleMetrics = $compatibleMetrics;
  }
  public function getCompatibleMetrics()
  {
    return $this->compatibleMetrics;
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
  public function setRequiredDimensions($requiredDimensions)
  {
    $this->requiredDimensions = $requiredDimensions;
  }
  public function getRequiredDimensions()
  {
    return $this->requiredDimensions;
  }
  public function setRequiredMetrics($requiredMetrics)
  {
    $this->requiredMetrics = $requiredMetrics;
  }
  public function getRequiredMetrics()
  {
    return $this->requiredMetrics;
  }
  public function setSupportedProducts($supportedProducts)
  {
    $this->supportedProducts = $supportedProducts;
  }
  public function getSupportedProducts()
  {
    return $this->supportedProducts;
  }
}

class AdExchangeSeller_SavedReport extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $kind;
  public $name;


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
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class AdExchangeSeller_SavedReports extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  public $etag;
  protected $itemsType = 'AdExchangeSeller_SavedReport';
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

class AdExchangeSeller_UrlChannel extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $kind;
  public $urlPattern;


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
  public function setUrlPattern($urlPattern)
  {
    $this->urlPattern = $urlPattern;
  }
  public function getUrlPattern()
  {
    return $this->urlPattern;
  }
}

class AdExchangeSeller_UrlChannels extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  public $etag;
  protected $itemsType = 'AdExchangeSeller_UrlChannel';
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