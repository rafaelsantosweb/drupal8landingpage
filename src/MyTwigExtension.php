<?php
namespace Drupal\landingpage_puc;

/**
 * Class DefaultService.
 *
 * @package Drupal\MyTwigModule
 */
class MyTwigExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   * This function must return the name of the extension. It must be unique.
   */
  public function getName() {
    return 'block_display';
  }

  /**
   * In this function we can declare the extension function
   */
  public function getFunctions() {
    return array(
      new \Twig_SimpleFunction('display_block', 
        array($this, 'display_block'),
        array('is_safe' => array('html')
      )),
  }

  /**
   * The php function to load a given block
   */
  public function display_block($block_id) {
    $block = \Drupal\block\Entity\Block::load($block_id);
    return \Drupal::entityManager()->getViewBuilder('block')->view($block);
  }

}