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
 * Service definition for Spectrum (v1explorer).
 *
 * <p>
 * API for spectrum-management functions.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://developers.google.com/spectrum" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Spectrum extends Service
{


  public $paws;
  

  /**
   * Constructs the internal representation of the Spectrum service.
   *
   * @param Client $client
   */
  public function __construct(Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'spectrum/v1explorer/paws/';
    $this->version = 'v1explorer';
    $this->serviceName = 'spectrum';

    $this->paws = new Spectrum_Paws_Resource(
        $this,
        $this->serviceName,
        'paws',
        array(
          'methods' => array(
            'getSpectrum' => array(
              'path' => 'getSpectrum',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getSpectrumBatch' => array(
              'path' => 'getSpectrumBatch',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'init' => array(
              'path' => 'init',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'notifySpectrumUse' => array(
              'path' => 'notifySpectrumUse',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'register' => array(
              'path' => 'register',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'verifyDevice' => array(
              'path' => 'verifyDevice',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}


/**
 * The "paws" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spectrumService = new Spectrum(...);
 *   $paws = $spectrumService->paws;
 *  </code>
 */
class Spectrum_Paws_Resource extends Resource
{

  /**
   * Requests information about the available spectrum for a device at a location.
   * Requests from a fixed-mode device must include owner information so the
   * device can be registered with the database. (paws.getSpectrum)
   *
   * @param Google_PawsGetSpectrumRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Spectrum_PawsGetSpectrumResponse
   */
  public function getSpectrum(Spectrum_PawsGetSpectrumRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getSpectrum', array($params), "Spectrum_PawsGetSpectrumResponse");
  }

  /**
   * The Google Spectrum Database does not support batch requests, so this method
   * always yields an UNIMPLEMENTED error. (paws.getSpectrumBatch)
   *
   * @param Google_PawsGetSpectrumBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Spectrum_PawsGetSpectrumBatchResponse
   */
  public function getSpectrumBatch(Spectrum_PawsGetSpectrumBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getSpectrumBatch', array($params), "Spectrum_PawsGetSpectrumBatchResponse");
  }

  /**
   * Initializes the connection between a white space device and the database.
   * (paws.init)
   *
   * @param Google_PawsInitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Spectrum_PawsInitResponse
   */
  public function init(Spectrum_PawsInitRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('init', array($params), "Spectrum_PawsInitResponse");
  }

  /**
   * Notifies the database that the device has selected certain frequency ranges
   * for transmission. Only to be invoked when required by the regulator. The
   * Google Spectrum Database does not operate in domains that require
   * notification, so this always yields an UNIMPLEMENTED error.
   * (paws.notifySpectrumUse)
   *
   * @param Google_PawsNotifySpectrumUseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Spectrum_PawsNotifySpectrumUseResponse
   */
  public function notifySpectrumUse(Spectrum_PawsNotifySpectrumUseRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('notifySpectrumUse', array($params), "Spectrum_PawsNotifySpectrumUseResponse");
  }

  /**
   * The Google Spectrum Database implements registration in the getSpectrum
   * method. As such this always returns an UNIMPLEMENTED error. (paws.register)
   *
   * @param Google_PawsRegisterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Spectrum_PawsRegisterResponse
   */
  public function register(Spectrum_PawsRegisterRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('register', array($params), "Spectrum_PawsRegisterResponse");
  }

  /**
   * Validates a device for white space use in accordance with regulatory rules.
   * The Google Spectrum Database does not support master/slave configurations, so
   * this always yields an UNIMPLEMENTED error. (paws.verifyDevice)
   *
   * @param Google_PawsVerifyDeviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Spectrum_PawsVerifyDeviceResponse
   */
  public function verifyDevice(Spectrum_PawsVerifyDeviceRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyDevice', array($params), "Spectrum_PawsVerifyDeviceResponse");
  }
}




class Spectrum_AntennaCharacteristics extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $height;
  public $heightType;
  public $heightUncertainty;


  public function setHeight($height)
  {
    $this->height = $height;
  }
  public function getHeight()
  {
    return $this->height;
  }
  public function setHeightType($heightType)
  {
    $this->heightType = $heightType;
  }
  public function getHeightType()
  {
    return $this->heightType;
  }
  public function setHeightUncertainty($heightUncertainty)
  {
    $this->heightUncertainty = $heightUncertainty;
  }
  public function getHeightUncertainty()
  {
    return $this->heightUncertainty;
  }
}

class Spectrum_DatabaseSpec extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $uri;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  public function getUri()
  {
    return $this->uri;
  }
}

class Spectrum_DbUpdateSpec extends Collection
{
  protected $collection_key = 'databases';
  protected $internal_gapi_mappings = array(
  );
  protected $databasesType = 'Spectrum_DatabaseSpec';
  protected $databasesDataType = 'array';


  public function setDatabases($databases)
  {
    $this->databases = $databases;
  }
  public function getDatabases()
  {
    return $this->databases;
  }
}

class Spectrum_DeviceCapabilities extends Collection
{
  protected $collection_key = 'frequencyRanges';
  protected $internal_gapi_mappings = array(
  );
  protected $frequencyRangesType = 'Spectrum_FrequencyRange';
  protected $frequencyRangesDataType = 'array';


  public function setFrequencyRanges($frequencyRanges)
  {
    $this->frequencyRanges = $frequencyRanges;
  }
  public function getFrequencyRanges()
  {
    return $this->frequencyRanges;
  }
}

class Spectrum_DeviceDescriptor extends Collection
{
  protected $collection_key = 'rulesetIds';
  protected $internal_gapi_mappings = array(
  );
  public $etsiEnDeviceCategory;
  public $etsiEnDeviceEmissionsClass;
  public $etsiEnDeviceType;
  public $etsiEnTechnologyId;
  public $fccId;
  public $fccTvbdDeviceType;
  public $manufacturerId;
  public $modelId;
  public $rulesetIds;
  public $serialNumber;


  public function setEtsiEnDeviceCategory($etsiEnDeviceCategory)
  {
    $this->etsiEnDeviceCategory = $etsiEnDeviceCategory;
  }
  public function getEtsiEnDeviceCategory()
  {
    return $this->etsiEnDeviceCategory;
  }
  public function setEtsiEnDeviceEmissionsClass($etsiEnDeviceEmissionsClass)
  {
    $this->etsiEnDeviceEmissionsClass = $etsiEnDeviceEmissionsClass;
  }
  public function getEtsiEnDeviceEmissionsClass()
  {
    return $this->etsiEnDeviceEmissionsClass;
  }
  public function setEtsiEnDeviceType($etsiEnDeviceType)
  {
    $this->etsiEnDeviceType = $etsiEnDeviceType;
  }
  public function getEtsiEnDeviceType()
  {
    return $this->etsiEnDeviceType;
  }
  public function setEtsiEnTechnologyId($etsiEnTechnologyId)
  {
    $this->etsiEnTechnologyId = $etsiEnTechnologyId;
  }
  public function getEtsiEnTechnologyId()
  {
    return $this->etsiEnTechnologyId;
  }
  public function setFccId($fccId)
  {
    $this->fccId = $fccId;
  }
  public function getFccId()
  {
    return $this->fccId;
  }
  public function setFccTvbdDeviceType($fccTvbdDeviceType)
  {
    $this->fccTvbdDeviceType = $fccTvbdDeviceType;
  }
  public function getFccTvbdDeviceType()
  {
    return $this->fccTvbdDeviceType;
  }
  public function setManufacturerId($manufacturerId)
  {
    $this->manufacturerId = $manufacturerId;
  }
  public function getManufacturerId()
  {
    return $this->manufacturerId;
  }
  public function setModelId($modelId)
  {
    $this->modelId = $modelId;
  }
  public function getModelId()
  {
    return $this->modelId;
  }
  public function setRulesetIds($rulesetIds)
  {
    $this->rulesetIds = $rulesetIds;
  }
  public function getRulesetIds()
  {
    return $this->rulesetIds;
  }
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
}

class Spectrum_DeviceOwner extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $operatorType = 'Spectrum_Vcard';
  protected $operatorDataType = '';
  protected $ownerType = 'Spectrum_Vcard';
  protected $ownerDataType = '';


  public function setOperator(Spectrum_Vcard $operator)
  {
    $this->operator = $operator;
  }
  public function getOperator()
  {
    return $this->operator;
  }
  public function setOwner(Spectrum_Vcard $owner)
  {
    $this->owner = $owner;
  }
  public function getOwner()
  {
    return $this->owner;
  }
}

class Spectrum_DeviceValidity extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  public $isValid;
  public $reason;


  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setIsValid($isValid)
  {
    $this->isValid = $isValid;
  }
  public function getIsValid()
  {
    return $this->isValid;
  }
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  public function getReason()
  {
    return $this->reason;
  }
}

class Spectrum_EventTime extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $startTime;
  public $stopTime;


  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
  public function setStopTime($stopTime)
  {
    $this->stopTime = $stopTime;
  }
  public function getStopTime()
  {
    return $this->stopTime;
  }
}

class Spectrum_FrequencyRange extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $channelId;
  public $maxPowerDBm;
  public $startHz;
  public $stopHz;


  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  public function getChannelId()
  {
    return $this->channelId;
  }
  public function setMaxPowerDBm($maxPowerDBm)
  {
    $this->maxPowerDBm = $maxPowerDBm;
  }
  public function getMaxPowerDBm()
  {
    return $this->maxPowerDBm;
  }
  public function setStartHz($startHz)
  {
    $this->startHz = $startHz;
  }
  public function getStartHz()
  {
    return $this->startHz;
  }
  public function setStopHz($stopHz)
  {
    $this->stopHz = $stopHz;
  }
  public function getStopHz()
  {
    return $this->stopHz;
  }
}

class Spectrum_GeoLocation extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $confidence;
  protected $pointType = 'Spectrum_GeoLocationEllipse';
  protected $pointDataType = '';
  protected $regionType = 'Spectrum_GeoLocationPolygon';
  protected $regionDataType = '';


  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  public function getConfidence()
  {
    return $this->confidence;
  }
  public function setPoint(Spectrum_GeoLocationEllipse $point)
  {
    $this->point = $point;
  }
  public function getPoint()
  {
    return $this->point;
  }
  public function setRegion(Spectrum_GeoLocationPolygon $region)
  {
    $this->region = $region;
  }
  public function getRegion()
  {
    return $this->region;
  }
}

class Spectrum_GeoLocationEllipse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $centerType = 'Spectrum_GeoLocationPoint';
  protected $centerDataType = '';
  public $orientation;
  public $semiMajorAxis;
  public $semiMinorAxis;


  public function setCenter(Spectrum_GeoLocationPoint $center)
  {
    $this->center = $center;
  }
  public function getCenter()
  {
    return $this->center;
  }
  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }
  public function getOrientation()
  {
    return $this->orientation;
  }
  public function setSemiMajorAxis($semiMajorAxis)
  {
    $this->semiMajorAxis = $semiMajorAxis;
  }
  public function getSemiMajorAxis()
  {
    return $this->semiMajorAxis;
  }
  public function setSemiMinorAxis($semiMinorAxis)
  {
    $this->semiMinorAxis = $semiMinorAxis;
  }
  public function getSemiMinorAxis()
  {
    return $this->semiMinorAxis;
  }
}

class Spectrum_GeoLocationPoint extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $latitude;
  public $longitude;


  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class Spectrum_GeoLocationPolygon extends Collection
{
  protected $collection_key = 'exterior';
  protected $internal_gapi_mappings = array(
  );
  protected $exteriorType = 'Spectrum_GeoLocationPoint';
  protected $exteriorDataType = 'array';


  public function setExterior($exterior)
  {
    $this->exterior = $exterior;
  }
  public function getExterior()
  {
    return $this->exterior;
  }
}

class Spectrum_GeoSpectrumSchedule extends Collection
{
  protected $collection_key = 'spectrumSchedules';
  protected $internal_gapi_mappings = array(
  );
  protected $locationType = 'Spectrum_GeoLocation';
  protected $locationDataType = '';
  protected $spectrumSchedulesType = 'Spectrum_SpectrumSchedule';
  protected $spectrumSchedulesDataType = 'array';


  public function setLocation(Spectrum_GeoLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setSpectrumSchedules($spectrumSchedules)
  {
    $this->spectrumSchedules = $spectrumSchedules;
  }
  public function getSpectrumSchedules()
  {
    return $this->spectrumSchedules;
  }
}

class Spectrum_PawsGetSpectrumBatchRequest extends Collection
{
  protected $collection_key = 'locations';
  protected $internal_gapi_mappings = array(
  );
  protected $antennaType = 'Spectrum_AntennaCharacteristics';
  protected $antennaDataType = '';
  protected $capabilitiesType = 'Spectrum_DeviceCapabilities';
  protected $capabilitiesDataType = '';
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $locationsType = 'Spectrum_GeoLocation';
  protected $locationsDataType = 'array';
  protected $masterDeviceDescType = 'Spectrum_DeviceDescriptor';
  protected $masterDeviceDescDataType = '';
  protected $ownerType = 'Spectrum_DeviceOwner';
  protected $ownerDataType = '';
  public $requestType;
  public $type;
  public $version;


  public function setAntenna(Spectrum_AntennaCharacteristics $antenna)
  {
    $this->antenna = $antenna;
  }
  public function getAntenna()
  {
    return $this->antenna;
  }
  public function setCapabilities(Spectrum_DeviceCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMasterDeviceDesc(Spectrum_DeviceDescriptor $masterDeviceDesc)
  {
    $this->masterDeviceDesc = $masterDeviceDesc;
  }
  public function getMasterDeviceDesc()
  {
    return $this->masterDeviceDesc;
  }
  public function setOwner(Spectrum_DeviceOwner $owner)
  {
    $this->owner = $owner;
  }
  public function getOwner()
  {
    return $this->owner;
  }
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  public function getRequestType()
  {
    return $this->requestType;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsGetSpectrumBatchResponse extends Collection
{
  protected $collection_key = 'geoSpectrumSchedules';
  protected $internal_gapi_mappings = array(
  );
  protected $databaseChangeType = 'Spectrum_DbUpdateSpec';
  protected $databaseChangeDataType = '';
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $geoSpectrumSchedulesType = 'Spectrum_GeoSpectrumSchedule';
  protected $geoSpectrumSchedulesDataType = 'array';
  public $kind;
  public $maxContiguousBwHz;
  public $maxTotalBwHz;
  public $needsSpectrumReport;
  protected $rulesetInfoType = 'Spectrum_RulesetInfo';
  protected $rulesetInfoDataType = '';
  public $timestamp;
  public $type;
  public $version;


  public function setDatabaseChange(Spectrum_DbUpdateSpec $databaseChange)
  {
    $this->databaseChange = $databaseChange;
  }
  public function getDatabaseChange()
  {
    return $this->databaseChange;
  }
  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setGeoSpectrumSchedules($geoSpectrumSchedules)
  {
    $this->geoSpectrumSchedules = $geoSpectrumSchedules;
  }
  public function getGeoSpectrumSchedules()
  {
    return $this->geoSpectrumSchedules;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMaxContiguousBwHz($maxContiguousBwHz)
  {
    $this->maxContiguousBwHz = $maxContiguousBwHz;
  }
  public function getMaxContiguousBwHz()
  {
    return $this->maxContiguousBwHz;
  }
  public function setMaxTotalBwHz($maxTotalBwHz)
  {
    $this->maxTotalBwHz = $maxTotalBwHz;
  }
  public function getMaxTotalBwHz()
  {
    return $this->maxTotalBwHz;
  }
  public function setNeedsSpectrumReport($needsSpectrumReport)
  {
    $this->needsSpectrumReport = $needsSpectrumReport;
  }
  public function getNeedsSpectrumReport()
  {
    return $this->needsSpectrumReport;
  }
  public function setRulesetInfo(Spectrum_RulesetInfo $rulesetInfo)
  {
    $this->rulesetInfo = $rulesetInfo;
  }
  public function getRulesetInfo()
  {
    return $this->rulesetInfo;
  }
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsGetSpectrumRequest extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $antennaType = 'Spectrum_AntennaCharacteristics';
  protected $antennaDataType = '';
  protected $capabilitiesType = 'Spectrum_DeviceCapabilities';
  protected $capabilitiesDataType = '';
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $locationType = 'Spectrum_GeoLocation';
  protected $locationDataType = '';
  protected $masterDeviceDescType = 'Spectrum_DeviceDescriptor';
  protected $masterDeviceDescDataType = '';
  protected $ownerType = 'Spectrum_DeviceOwner';
  protected $ownerDataType = '';
  public $requestType;
  public $type;
  public $version;


  public function setAntenna(Spectrum_AntennaCharacteristics $antenna)
  {
    $this->antenna = $antenna;
  }
  public function getAntenna()
  {
    return $this->antenna;
  }
  public function setCapabilities(Spectrum_DeviceCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setLocation(Spectrum_GeoLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setMasterDeviceDesc(Spectrum_DeviceDescriptor $masterDeviceDesc)
  {
    $this->masterDeviceDesc = $masterDeviceDesc;
  }
  public function getMasterDeviceDesc()
  {
    return $this->masterDeviceDesc;
  }
  public function setOwner(Spectrum_DeviceOwner $owner)
  {
    $this->owner = $owner;
  }
  public function getOwner()
  {
    return $this->owner;
  }
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  public function getRequestType()
  {
    return $this->requestType;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsGetSpectrumResponse extends Collection
{
  protected $collection_key = 'spectrumSchedules';
  protected $internal_gapi_mappings = array(
  );
  protected $databaseChangeType = 'Spectrum_DbUpdateSpec';
  protected $databaseChangeDataType = '';
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  public $kind;
  public $maxContiguousBwHz;
  public $maxTotalBwHz;
  public $needsSpectrumReport;
  protected $rulesetInfoType = 'Spectrum_RulesetInfo';
  protected $rulesetInfoDataType = '';
  protected $spectrumSchedulesType = 'Spectrum_SpectrumSchedule';
  protected $spectrumSchedulesDataType = 'array';
  public $timestamp;
  public $type;
  public $version;


  public function setDatabaseChange(Spectrum_DbUpdateSpec $databaseChange)
  {
    $this->databaseChange = $databaseChange;
  }
  public function getDatabaseChange()
  {
    return $this->databaseChange;
  }
  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMaxContiguousBwHz($maxContiguousBwHz)
  {
    $this->maxContiguousBwHz = $maxContiguousBwHz;
  }
  public function getMaxContiguousBwHz()
  {
    return $this->maxContiguousBwHz;
  }
  public function setMaxTotalBwHz($maxTotalBwHz)
  {
    $this->maxTotalBwHz = $maxTotalBwHz;
  }
  public function getMaxTotalBwHz()
  {
    return $this->maxTotalBwHz;
  }
  public function setNeedsSpectrumReport($needsSpectrumReport)
  {
    $this->needsSpectrumReport = $needsSpectrumReport;
  }
  public function getNeedsSpectrumReport()
  {
    return $this->needsSpectrumReport;
  }
  public function setRulesetInfo(Spectrum_RulesetInfo $rulesetInfo)
  {
    $this->rulesetInfo = $rulesetInfo;
  }
  public function getRulesetInfo()
  {
    return $this->rulesetInfo;
  }
  public function setSpectrumSchedules($spectrumSchedules)
  {
    $this->spectrumSchedules = $spectrumSchedules;
  }
  public function getSpectrumSchedules()
  {
    return $this->spectrumSchedules;
  }
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsInitRequest extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $locationType = 'Spectrum_GeoLocation';
  protected $locationDataType = '';
  public $type;
  public $version;


  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setLocation(Spectrum_GeoLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsInitResponse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $databaseChangeType = 'Spectrum_DbUpdateSpec';
  protected $databaseChangeDataType = '';
  public $kind;
  protected $rulesetInfoType = 'Spectrum_RulesetInfo';
  protected $rulesetInfoDataType = '';
  public $type;
  public $version;


  public function setDatabaseChange(Spectrum_DbUpdateSpec $databaseChange)
  {
    $this->databaseChange = $databaseChange;
  }
  public function getDatabaseChange()
  {
    return $this->databaseChange;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRulesetInfo(Spectrum_RulesetInfo $rulesetInfo)
  {
    $this->rulesetInfo = $rulesetInfo;
  }
  public function getRulesetInfo()
  {
    return $this->rulesetInfo;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsNotifySpectrumUseRequest extends Collection
{
  protected $collection_key = 'spectra';
  protected $internal_gapi_mappings = array(
  );
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $locationType = 'Spectrum_GeoLocation';
  protected $locationDataType = '';
  protected $spectraType = 'Spectrum_SpectrumMessage';
  protected $spectraDataType = 'array';
  public $type;
  public $version;


  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setLocation(Spectrum_GeoLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setSpectra($spectra)
  {
    $this->spectra = $spectra;
  }
  public function getSpectra()
  {
    return $this->spectra;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsNotifySpectrumUseResponse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $type;
  public $version;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsRegisterRequest extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $antennaType = 'Spectrum_AntennaCharacteristics';
  protected $antennaDataType = '';
  protected $deviceDescType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $deviceOwnerType = 'Spectrum_DeviceOwner';
  protected $deviceOwnerDataType = '';
  protected $locationType = 'Spectrum_GeoLocation';
  protected $locationDataType = '';
  public $type;
  public $version;


  public function setAntenna(Spectrum_AntennaCharacteristics $antenna)
  {
    $this->antenna = $antenna;
  }
  public function getAntenna()
  {
    return $this->antenna;
  }
  public function setDeviceDesc(Spectrum_DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }
  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  public function setDeviceOwner(Spectrum_DeviceOwner $deviceOwner)
  {
    $this->deviceOwner = $deviceOwner;
  }
  public function getDeviceOwner()
  {
    return $this->deviceOwner;
  }
  public function setLocation(Spectrum_GeoLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsRegisterResponse extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $databaseChangeType = 'Spectrum_DbUpdateSpec';
  protected $databaseChangeDataType = '';
  public $kind;
  public $type;
  public $version;


  public function setDatabaseChange(Spectrum_DbUpdateSpec $databaseChange)
  {
    $this->databaseChange = $databaseChange;
  }
  public function getDatabaseChange()
  {
    return $this->databaseChange;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsVerifyDeviceRequest extends Collection
{
  protected $collection_key = 'deviceDescs';
  protected $internal_gapi_mappings = array(
  );
  protected $deviceDescsType = 'Spectrum_DeviceDescriptor';
  protected $deviceDescsDataType = 'array';
  public $type;
  public $version;


  public function setDeviceDescs($deviceDescs)
  {
    $this->deviceDescs = $deviceDescs;
  }
  public function getDeviceDescs()
  {
    return $this->deviceDescs;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_PawsVerifyDeviceResponse extends Collection
{
  protected $collection_key = 'deviceValidities';
  protected $internal_gapi_mappings = array(
  );
  protected $databaseChangeType = 'Spectrum_DbUpdateSpec';
  protected $databaseChangeDataType = '';
  protected $deviceValiditiesType = 'Spectrum_DeviceValidity';
  protected $deviceValiditiesDataType = 'array';
  public $kind;
  public $type;
  public $version;


  public function setDatabaseChange(Spectrum_DbUpdateSpec $databaseChange)
  {
    $this->databaseChange = $databaseChange;
  }
  public function getDatabaseChange()
  {
    return $this->databaseChange;
  }
  public function setDeviceValidities($deviceValidities)
  {
    $this->deviceValidities = $deviceValidities;
  }
  public function getDeviceValidities()
  {
    return $this->deviceValidities;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
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

class Spectrum_RulesetInfo extends Collection
{
  protected $collection_key = 'rulesetIds';
  protected $internal_gapi_mappings = array(
  );
  public $authority;
  public $maxLocationChange;
  public $maxPollingSecs;
  public $rulesetIds;


  public function setAuthority($authority)
  {
    $this->authority = $authority;
  }
  public function getAuthority()
  {
    return $this->authority;
  }
  public function setMaxLocationChange($maxLocationChange)
  {
    $this->maxLocationChange = $maxLocationChange;
  }
  public function getMaxLocationChange()
  {
    return $this->maxLocationChange;
  }
  public function setMaxPollingSecs($maxPollingSecs)
  {
    $this->maxPollingSecs = $maxPollingSecs;
  }
  public function getMaxPollingSecs()
  {
    return $this->maxPollingSecs;
  }
  public function setRulesetIds($rulesetIds)
  {
    $this->rulesetIds = $rulesetIds;
  }
  public function getRulesetIds()
  {
    return $this->rulesetIds;
  }
}

class Spectrum_SpectrumMessage extends Collection
{
  protected $collection_key = 'frequencyRanges';
  protected $internal_gapi_mappings = array(
  );
  public $bandwidth;
  protected $frequencyRangesType = 'Spectrum_FrequencyRange';
  protected $frequencyRangesDataType = 'array';


  public function setBandwidth($bandwidth)
  {
    $this->bandwidth = $bandwidth;
  }
  public function getBandwidth()
  {
    return $this->bandwidth;
  }
  public function setFrequencyRanges($frequencyRanges)
  {
    $this->frequencyRanges = $frequencyRanges;
  }
  public function getFrequencyRanges()
  {
    return $this->frequencyRanges;
  }
}

class Spectrum_SpectrumSchedule extends Collection
{
  protected $collection_key = 'spectra';
  protected $internal_gapi_mappings = array(
  );
  protected $eventTimeType = 'Spectrum_EventTime';
  protected $eventTimeDataType = '';
  protected $spectraType = 'Spectrum_SpectrumMessage';
  protected $spectraDataType = 'array';


  public function setEventTime(Spectrum_EventTime $eventTime)
  {
    $this->eventTime = $eventTime;
  }
  public function getEventTime()
  {
    return $this->eventTime;
  }
  public function setSpectra($spectra)
  {
    $this->spectra = $spectra;
  }
  public function getSpectra()
  {
    return $this->spectra;
  }
}

class Spectrum_Vcard extends Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $adrType = 'Spectrum_VcardAddress';
  protected $adrDataType = '';
  protected $emailType = 'Spectrum_VcardTypedText';
  protected $emailDataType = '';
  public $fn;
  protected $orgType = 'Spectrum_VcardTypedText';
  protected $orgDataType = '';
  protected $telType = 'Spectrum_VcardTelephone';
  protected $telDataType = '';


  public function setAdr(Spectrum_VcardAddress $adr)
  {
    $this->adr = $adr;
  }
  public function getAdr()
  {
    return $this->adr;
  }
  public function setEmail(Spectrum_VcardTypedText $email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setFn($fn)
  {
    $this->fn = $fn;
  }
  public function getFn()
  {
    return $this->fn;
  }
  public function setOrg(Spectrum_VcardTypedText $org)
  {
    $this->org = $org;
  }
  public function getOrg()
  {
    return $this->org;
  }
  public function setTel(Spectrum_VcardTelephone $tel)
  {
    $this->tel = $tel;
  }
  public function getTel()
  {
    return $this->tel;
  }
}

class Spectrum_VcardAddress extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $code;
  public $country;
  public $locality;
  public $pobox;
  public $region;
  public $street;


  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function setCountry($country)
  {
    $this->country = $country;
  }
  public function getCountry()
  {
    return $this->country;
  }
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  public function getLocality()
  {
    return $this->locality;
  }
  public function setPobox($pobox)
  {
    $this->pobox = $pobox;
  }
  public function getPobox()
  {
    return $this->pobox;
  }
  public function setRegion($region)
  {
    $this->region = $region;
  }
  public function getRegion()
  {
    return $this->region;
  }
  public function setStreet($street)
  {
    $this->street = $street;
  }
  public function getStreet()
  {
    return $this->street;
  }
}

class Spectrum_VcardTelephone extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $uri;


  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  public function getUri()
  {
    return $this->uri;
  }
}

class Spectrum_VcardTypedText extends Model
{
  protected $internal_gapi_mappings = array(
  );
  public $text;


  public function setText($text)
  {
    $this->text = $text;
  }
  public function getText()
  {
    return $this->text;
  }
}
