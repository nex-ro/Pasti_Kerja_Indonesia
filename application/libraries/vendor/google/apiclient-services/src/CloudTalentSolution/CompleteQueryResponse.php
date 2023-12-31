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

namespace Google\Service\CloudTalentSolution;

class CompleteQueryResponse extends \Google\Collection
{
  protected $collection_key = 'completionResults';
  /**
   * @var CompletionResult[]
   */
  public $completionResults;
  protected $completionResultsType = CompletionResult::class;
  protected $completionResultsDataType = 'array';
  /**
   * @var ResponseMetadata
   */
  public $metadata;
  protected $metadataType = ResponseMetadata::class;
  protected $metadataDataType = '';

  /**
   * @param CompletionResult[]
   */
  public function setCompletionResults($completionResults)
  {
    $this->completionResults = $completionResults;
  }
  /**
   * @return CompletionResult[]
   */
  public function getCompletionResults()
  {
    return $this->completionResults;
  }
  /**
   * @param ResponseMetadata
   */
  public function setMetadata(ResponseMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return ResponseMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompleteQueryResponse::class, 'Google_Service_CloudTalentSolution_CompleteQueryResponse');
