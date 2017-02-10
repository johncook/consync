<?php
/**
 * Created by PhpStorm.
 * User: johncook
 * Date: 09/02/2017
 * Time: 08:47
 */

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