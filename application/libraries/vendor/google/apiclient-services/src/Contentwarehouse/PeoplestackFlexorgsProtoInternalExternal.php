<?php
/*
 * Copyright 2014 Google Inc.
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

namespace Google\Service\Contentwarehouse;

class PeoplestackFlexorgsProtoInternalExternal extends \Google\Collection
{
  protected $collection_key = 'stateStatus';
  /**
   * @var string
   */
  public $application;
  /**
   * @var PeoplestackFlexorgsProtoInternalExternalStateStatus[]
   */
  public $stateStatus;
  protected $stateStatusType = PeoplestackFlexorgsProtoInternalExternalStateStatus::class;
  protected $stateStatusDataType = 'array';

  /**
   * @param string
   */
  public function setApplication($application)
  {
    $this->application = $application;
  }
  /**
   * @return string
   */
  public function getApplication()
  {
    return $this->application;
  }
  /**
   * @param PeoplestackFlexorgsProtoInternalExternalStateStatus[]
   */
  public function setStateStatus($stateStatus)
  {
    $this->stateStatus = $stateStatus;
  }
  /**
   * @return PeoplestackFlexorgsProtoInternalExternalStateStatus[]
   */
  public function getStateStatus()
  {
    return $this->stateStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PeoplestackFlexorgsProtoInternalExternal::class, 'Google_Service_Contentwarehouse_PeoplestackFlexorgsProtoInternalExternal');
