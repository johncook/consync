<?php
/**
 * Created by PhpStorm.
 * User: johncook
 * Date: 09/02/2017
 * Time: 08:50
 */

namespace Drupal\consync;


use Drupal\Component\Plugin\PluginBase;

abstract class MessagePluginBase extends PluginBase implements MessageInterface {

  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $v = 0;
    return new statid(
      $configuration,
      $plugin_id,
      $plugin_definition
    );
  }

  public function getName() {
    return $this->pluginDefinition['name'];
  }
}