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

namespace Google\Service\CloudTrace;

class Links extends \Google\Collection
{
  protected $collection_key = 'link';
  /**
   * @var int
   */
  public $droppedLinksCount;
  /**
   * @var Link[]
   */
  public $link;
  protected $linkType = Link::class;
  protected $linkDataType = 'array';

  /**
   * @param int
   */
  public function setDroppedLinksCount($droppedLinksCount)
  {
    $this->droppedLinksCount = $droppedLinksCount;
  }
  /**
   * @return int
   */
  public function getDroppedLinksCount()
  {
    return $this->droppedLinksCount;
  }
  /**
   * @param Link[]
   */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /**
   * @return Link[]
   */
  public function getLink()
  {
    return $this->link;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Links::class, 'Google_Service_CloudTrace_Links');
