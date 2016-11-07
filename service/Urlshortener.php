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
 * Service definition for Urlshortener (v1).
 *
 * <p>
 * Lets you create, inspect, and manage goo.gl short URLs</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/url-shortener/v1/getting_started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Urlshortener extends Service
{
  /** Manage your goo.gl short URLs. */
  const URLSHORTENER =
      "https://www.googleapis.com/auth/urlshortener";

  public $url;
  

  /**
   * Constructs the internal representation of the Urlshortener service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'urlshortener/v1/';
    $this->version = 'v1';
    $this->serviceName = 'urlshortener';

    $this->url = new Urlshortener_Url_Resource(
        $this,
        $this->serviceName,
        'url',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'url',
              'httpMethod' => 'GET',
              'parameters' => array(
                'shortUrl' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'url',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'url/history',
              'httpMethod' => 'GET',
              'parameters' => array(
                'start-token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
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
 * The "url" collection of methods.
 * Typical usage is:
 *  <code>
 *   $urlshortenerService = new Urlshortener(...);
 *   $url = $urlshortenerService->url;
 *  </code>
 */
class Urlshortener_Url_Resource extends Resource
{

  /**
   * Expands a short URL or gets creation time and analytics. (url.get)
   *
   * @param string $shortUrl The short URL, including the protocol.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection Additional information to return.
   * @return Urlshortener_Url
   */
  public function get($shortUrl, $optParams = array())
  {
    $params = array('shortUrl' => $shortUrl);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Urlshortener_Url");
  }

  /**
   * Creates a new short URL. (url.insert)
   *
   * @param Google_Url $postBody
   * @param array $optParams Optional parameters.
   * @return Urlshortener_Url
   */
  public function insert(Urlshortener_Url $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Urlshortener_Url");
  }

  /**
   * Retrieves a list of URLs shortened by a user. (url.listUrl)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string start-token Token for requesting successive pages of
   * results.
   * @opt_param string projection Additional information to return.
   * @return Urlshortener_UrlHistory
   */
  public function listUrl($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Urlshortener_UrlHistory");
  }
}




class Urlshortener_AnalyticsSnapshot extends Collection
{
  protected $collection_key = 'referrers';
  protected $internal_gapi_mappings = array(
  );
  protected $browsersType = 'Urlshortener_StringCount';
  protected $browsersDataType = 'array';
  protected $countriesType = 'Urlshortener_StringCount';
  protected $countriesDataType = 'array';
  public $longUrlClicks;
  protected $platformsType = 'Urlshortener_StringCount';
  protected $platformsDataType = 'array';
  protected $referrersType = 'Urlshortener_StringCount';
  protected $referrersDataType = 'array';
  public $shortUrlClicks;


  public function setBrowsers($browsers)
  {
    $this->browsers = $browsers;
  }
  public function getBrowsers()
  {
    return $this->browsers;
  }
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  public function getCountries()
  {
    return $this->countries;
  }
  public function setLongUrlClicks($longUrlClicks)
  {
    $this->longUrlClicks = $longUrlClicks;
  }
  public function getLongUrlClicks()
  {
    return $this->longUrlClicks;
  }
  public function setPlatforms($platforms)
  {
    $this->platforms = $platforms;
  }
  public function getPlatforms()
  {
    return $this->platforms;
  }
  public function setReferrers($referrers)
  {
    $this->referrers = $referrers;
  }
  public function getReferrers()
  {
    return $this->referrers;
  }
  public function setShortUrlClicks($shortUrlClicks)
  {
    $this->shortUrlClicks = $shortUrlClicks;
  }
  public function getShortUrlClicks()
  {
    return $this->shortUrlClicks;
  }
}

class Urlshortener_AnalyticsSummary extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $allTimeType = 'Urlshortener_AnalyticsSnapshot';
  protected $allTimeDataType = '';
  protected $dayType = 'Urlshortener_AnalyticsSnapshot';
  protected $dayDataType = '';
  protected $monthType = 'Urlshortener_AnalyticsSnapshot';
  protected $monthDataType = '';
  protected $twoHoursType = 'Urlshortener_AnalyticsSnapshot';
  protected $twoHoursDataType = '';
  protected $weekType = 'Urlshortener_AnalyticsSnapshot';
  protected $weekDataType = '';


  public function setAllTime(Urlshortener_AnalyticsSnapshot $allTime)
  {
    $this->allTime = $allTime;
  }
  public function getAllTime()
  {
    return $this->allTime;
  }
  public function setDay(Urlshortener_AnalyticsSnapshot $day)
  {
    $this->day = $day;
  }
  public function getDay()
  {
    return $this->day;
  }
  public function setMonth(Urlshortener_AnalyticsSnapshot $month)
  {
    $this->month = $month;
  }
  public function getMonth()
  {
    return $this->month;
  }
  public function setTwoHours(Urlshortener_AnalyticsSnapshot $twoHours)
  {
    $this->twoHours = $twoHours;
  }
  public function getTwoHours()
  {
    return $this->twoHours;
  }
  public function setWeek(Urlshortener_AnalyticsSnapshot $week)
  {
    $this->week = $week;
  }
  public function getWeek()
  {
    return $this->week;
  }
}

class Urlshortener_StringCount extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $id;


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
}

class Urlshortener_Url extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $analyticsType = 'Urlshortener_AnalyticsSummary';
  protected $analyticsDataType = '';
  public $created;
  public $id;
  public $kind;
  public $longUrl;
  public $status;


  public function setAnalytics(Urlshortener_AnalyticsSummary $analytics)
  {
    $this->analytics = $analytics;
  }
  public function getAnalytics()
  {
    return $this->analytics;
  }
  public function setCreated($created)
  {
    $this->created = $created;
  }
  public function getCreated()
  {
    return $this->created;
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
  public function setLongUrl($longUrl)
  {
    $this->longUrl = $longUrl;
  }
  public function getLongUrl()
  {
    return $this->longUrl;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Urlshortener_UrlHistory extends Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Urlshortener_Url';
  protected $itemsDataType = 'array';
  public $itemsPerPage;
  public $kind;
  public $nextPageToken;
  public $totalItems;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
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
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
