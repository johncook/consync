<?php

namespace Drupal\consync\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a message annotation object.
 *
 * @Annotation
 */
class Processor extends Plugin {

  public $id;

  public $name;

}
