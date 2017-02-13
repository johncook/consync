<?php

namespace Drupal\consync;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Message processor plugin manager.
 */
class ProcessorManager extends DefaultPluginManager {

  /**
   * Creates a discovery object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   The cache backend.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/ConSync/Processor', $namespaces, $module_handler, 'Drupal\consync\ProcessorInterface', 'Drupal\consync\Annotation\Processor');
    $this->setCacheBackend($cache_backend, 'consync_processor');
  }

}
