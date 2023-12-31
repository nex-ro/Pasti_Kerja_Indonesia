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

namespace Google\Service\Compute;

class TargetPoolsRemoveHealthCheckRequest extends \Google\Collection
{
  protected $collection_key = 'healthChecks';
  /**
   * @var HealthCheckReference[]
   */
  public $healthChecks;
  protected $healthChecksType = HealthCheckReference::class;
  protected $healthChecksDataType = 'array';

  /**
   * @param HealthCheckReference[]
   */
  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }
  /**
   * @return HealthCheckReference[]
   */
  public function getHealthChecks()
  {
    return $this->healthChecks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetPoolsRemoveHealthCheckRequest::class, 'Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest');
