<?php

/**
 * Makes environment variables available in Twig templates and in content pages
 * Twig templates: {{ env.VARIABLE }}
 * Content page: %env.VARIABLE%
 *
 * @see README.mb for further details
 *
 * @package Pico
 * @subpackage Php_Env
 * @version 0.1
 * @author Guillaume Prevost <guillaume.prevost@rmi.edu.au>
 *
 */
class Php_Env extends AbstractPicoPlugin {

  public function onContentLoaded(&$rawContent) {
    $rawContent = preg_replace(
      '|%env.([a-zA-Z0-9_-]*)%|e',
      '$_ENV["$1"]',
      $rawContent
    );
  }

  public function onPageRendering(&$twig, &$twigVariables, &$templateName) {
    $twigVariables['env'] = $_ENV;
  }

}

?>