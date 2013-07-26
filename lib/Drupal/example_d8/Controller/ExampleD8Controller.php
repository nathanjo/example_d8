<?php
// $Id:$

/**
 * @file
 */

namespace Drupal\example_d8\Controller;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class ExampleD8Controller extends ContainerAware {

  public function page() {
    return 'Hello World!';
  }
}