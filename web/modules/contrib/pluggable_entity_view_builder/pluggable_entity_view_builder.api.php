<?php

/**
 * @file
 * Hooks specific to the Pluggable entity view builder module.
 */


/**
 * @addtogroup hooks
 * @{
 */

use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Entity\EntityInterface;

/**
 * Alter the build.
 *
 * While PEVB takes the approach of not altering the render array, sometimes
 * other contrib modules provide alter hooks that are helpful. So a use case for
 * this hook would be manually invoking such an alter.
 *
 * @param array $build
 *   The render array to alter, passed by reference.
 * @param EntityInterface $entity
 *   The entity that the render array was built from.
 */
function hook_pluggable_entity_view_builder_build_ENTITY_TYPE_alter(array &$build, EntityInterface $entity) {
  $entity_type = $entity->getEntityTypeId();
  $entity = $build['#' . $entity_type];
  $view_mode = $build['#view_mode'];
  // PEVB renames `default` view mode to `full`, however to get the entity view
  // display we need to use the original name.
  $view_mode = $view_mode === 'full' ? 'default' : $view_mode;

  /** @var EntityViewDisplayInterface $display */
  $display = \Drupal::entityTypeManager()
    ->getStorage('entity_view_display')
    ->load($entity_type . '.' . $entity->bundle() . '.' . $view_mode);

  // Integrate the https://www.drupal.org/project/paragraphs_edit module, that
  // adds contextual links allowing to edit a single paragraph.
  paragraphs_edit_paragraph_view_alter($build, $entity, $display);
}

/**
 * @} End of "addtogroup hooks".
 */
