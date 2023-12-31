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

namespace Google\Service\ToolResults;

class MergedResult extends \Google\Collection
{
  protected $collection_key = 'testSuiteOverviews';
  /**
   * @var Outcome
   */
  public $outcome;
  protected $outcomeType = Outcome::class;
  protected $outcomeDataType = '';
  /**
   * @var string
   */
  public $state;
  /**
   * @var TestSuiteOverview[]
   */
  public $testSuiteOverviews;
  protected $testSuiteOverviewsType = TestSuiteOverview::class;
  protected $testSuiteOverviewsDataType = 'array';

  /**
   * @param Outcome
   */
  public function setOutcome(Outcome $outcome)
  {
    $this->outcome = $outcome;
  }
  /**
   * @return Outcome
   */
  public function getOutcome()
  {
    return $this->outcome;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param TestSuiteOverview[]
   */
  public function setTestSuiteOverviews($testSuiteOverviews)
  {
    $this->testSuiteOverviews = $testSuiteOverviews;
  }
  /**
   * @return TestSuiteOverview[]
   */
  public function getTestSuiteOverviews()
  {
    return $this->testSuiteOverviews;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MergedResult::class, 'Google_Service_ToolResults_MergedResult');
