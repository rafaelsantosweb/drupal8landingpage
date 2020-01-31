<?php

/**
 * Created by PhpStorm.
 * User: dmmedeiros
 * Date: 04/07/2017
 * Time: 11:41
 */
namespace Drupal\landingpages_puc\Controller;
use Drupal\Core\Controller\ControllerBase;

class landingpagesController extends ControllerBase
{
    public function front() {
     $element = array(
        '#theme' => 'page__home',
    );
    return $element;
  }

}