<?php

namespace Drupal\consync\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a message annotation object.
 *
 * @Annotation
 */
class Message extends Plugin {

  public $id;

  public $name;

}
