<?php

namespace Drupal\consync;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;

/**
 * Specifies the interface for message processors.
 */
interface ProcessorInterface extends PluginInspectionInterface, ContainerFactoryPluginInterface {

}
