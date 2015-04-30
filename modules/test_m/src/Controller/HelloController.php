<?php
/**
 * @file
 * Contains \Drupal\test_m\Controller\HelloController.
 */
namespace Drupal\test_m\Controller;

class HelloController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}