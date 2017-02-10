<?php

namespace Drupal\consync;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

class MessageManager extends DefaultPluginManager {

  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/ConSync', $namespaces, $module_handler, 'Drupal\consync\MessageInterface', 'Drupal\consync\Annotation\Message');
    $this->setCacheBackend($cache_backend, 'consynd_message');
  }
}