<?php

namespace Drupal\consync\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines an endpoint annotation object.
 *
 * @Annotation
 */
class Endpoint extends Plugin {

  public $id;

  public $name;

}