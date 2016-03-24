<?php
/**
 * @file
 * Contains \Drupal\hello_d8\HelloD8Controller.
 */

namespace Drupal\hello_d8\Controller;

use \Drupal\Core\Controller\ControllerBase;
use \Symfony\Component\HttpFoundation\Request;

class HelloD8Controller extends ControllerBase {

  /**
   * Controller action example.
   *
   * @param Request $request
   *   Symfony HttpFoundation Request parameter, you can get all request
   *   information from this object.
   * @param string $name
   *   If you define {name} in routing.yml, then the variable with exactly
   *   the same name "$name" will be automatically mapped.
   *
   * @return array
   *   A renderable array.
   */
  public function content(Request $request, $name) {
    // You can use either $request->request->get('name') or $name
    // @see http://symfony.com/doc/current/book/http_fundamentals.html
    return array(
      '#markup' => t('Hello %name', array('%name' => $name)),
    );
  }
}
