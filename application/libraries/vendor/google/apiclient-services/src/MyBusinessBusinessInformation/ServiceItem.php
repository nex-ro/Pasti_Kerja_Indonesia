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

namespace Google\Service\MyBusinessBusinessInformation;

class ServiceItem extends \Google\Model
{
  /**
   * @var FreeFormServiceItem
   */
  public $freeFormServiceItem;
  protected $freeFormServiceItemType = FreeFormServiceItem::class;
  protected $freeFormServiceItemDataType = '';
  /**
   * @var Money
   */
  public $price;
  protected $priceType = Money::class;
  protected $priceDataType = '';
  /**
   * @var StructuredServiceItem
   */
  public $structuredServiceItem;
  protected $structuredServiceItemType = StructuredServiceItem::class;
  protected $structuredServiceItemDataType = '';

  /**
   * @param FreeFormServiceItem
   */
  public function setFreeFormServiceItem(FreeFormServiceItem $freeFormServiceItem)
  {
    $this->freeFormServiceItem = $freeFormServiceItem;
  }
  /**
   * @return FreeFormServiceItem
   */
  public function getFreeFormServiceItem()
  {
    return $this->freeFormServiceItem;
  }
  /**
   * @param Money
   */
  public function setPrice(Money $price)
  {
    $this->price = $price;
  }
  /**
   * @return Money
   */
  public function getPrice()
  {
    return $this->price;
  }
  /**
   * @param StructuredServiceItem
   */
  public function setStructuredServiceItem(StructuredServiceItem $structuredServiceItem)
  {
    $this->structuredServiceItem = $structuredServiceItem;
  }
  /**
   * @return StructuredServiceItem
   */
  public function getStructuredServiceItem()
  {
    return $this->structuredServiceItem;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceItem::class, 'Google_Service_MyBusinessBusinessInformation_ServiceItem');
