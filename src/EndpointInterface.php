<?php

namespace Drupal\consync;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;

/**
 * Specifies the interface for message endpoints.
 */
interface EndpointInterface extends PluginInspectionInterface, ContainerFactoryPluginInterface {

}