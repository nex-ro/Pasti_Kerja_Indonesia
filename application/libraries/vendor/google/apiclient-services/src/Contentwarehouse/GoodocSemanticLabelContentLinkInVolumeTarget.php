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

class GoodocSemanticLabelContentLinkInVolumeTarget extends \Google\Model
{
  protected $internal_gapi_mappings = [
        "confidence" => "Confidence",
        "logicalEntity" => "LogicalEntity",
  ];
  public $confidence;
  /**
   * @var GoodocLogicalEntity
   */
  public $logicalEntity;
  protected $logicalEntityType = GoodocLogicalEntity::class;
  protected $logicalEntityDataType = '';

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  public function getConfidence()
  {
    return $this->confidence;
  }
  /**
   * @param GoodocLogicalEntity
   */
  public function setLogicalEntity(GoodocLogicalEntity $logicalEntity)
  {
    $this->logicalEntity = $logicalEntity;
  }
  /**
   * @return GoodocLogicalEntity
   */
  public function getLogicalEntity()
  {
    return $this->logicalEntity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoodocSemanticLabelContentLinkInVolumeTarget::class, 'Google_Service_Contentwarehouse_GoodocSemanticLabelContentLinkInVolumeTarget');
