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

namespace Google\Service\SecretManager;

class Replica extends \Google\Model
{
  /**
   * @var CustomerManagedEncryption
   */
  public $customerManagedEncryption;
  protected $customerManagedEncryptionType = CustomerManagedEncryption::class;
  protected $customerManagedEncryptionDataType = '';
  /**
   * @var string
   */
  public $location;

  /**
   * @param CustomerManagedEncryption
   */
  public function setCustomerManagedEncryption(CustomerManagedEncryption $customerManagedEncryption)
  {
    $this->customerManagedEncryption = $customerManagedEncryption;
  }
  /**
   * @return CustomerManagedEncryption
   */
  public function getCustomerManagedEncryption()
  {
    return $this->customerManagedEncryption;
  }
  /**
   * @param string
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Replica::class, 'Google_Service_SecretManager_Replica');
