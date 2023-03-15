<?php

namespace Drupal\server_general\Plugin\EntityViewBuilder;

use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\NodeInterface;
use Drupal\og\MembershipManagerInterface;
use Drupal\server_general\EntityViewBuilder\NodeViewBuilderAbstract;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * The "Node Landing Page" plugin.
 *
 * @EntityViewBuilder(
 *   id = "node.group",
 *   label = @Translation("Node - Group"),
 *   description = "Node view builder for Group bundle."
 * )
 */
class NodeGroup extends NodeViewBuilderAbstract implements ContainerFactoryPluginInterface {

  /**
   * The OG Membership.
   *
   * @var \Drupal\og\MembershipManagerInterface
   */
  protected $membership;

  /**
   * Constructor.
   *
   * @param array $configuration
   *   Plugin configuration.
   * @param string $plugin_id
   *   Plugin id.
   * @param mixed $plugin_definition
   *   Plugin definition.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   * @param \Drupal\Core\Entity\EntityRepositoryInterface $entity_repository
   *   The current user.
   * @param Drupal\og\MembershipManagerInterface $membership
   *   The OG Membership service.
   */
  public function __construct(
    array $configuration,
    string $plugin_id,
    $plugin_definition,
    EntityTypeManagerInterface $entity_type_manager,
    AccountInterface $current_user,
    EntityRepositoryInterface $entity_repository,
    MembershipManagerInterface $membership
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $entity_type_manager, $current_user, $entity_repository);
    $this->membership = $membership;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new self(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager'),
      $container->get('current_user'),
      $container->get('entity.repository'),
      $container->get('og.membership_manager')
    );
  }

  /**
   * Build full view mode.
   *
   * @param array $build
   *   The existing build.
   * @param \Drupal\node\NodeInterface $entity
   *   The entity.
   *
   * @return array
   *   Render array.
   */
  public function buildFull(array $build, NodeInterface $entity) {

    if ($this->currentUser->isAuthenticated() && !$this->membership->isMember($entity, $this->currentUser->id())) {
      $element = $this->buildSubscribeMsg($entity);
      $build[] = $this->wrapContainerWide($element);
    }

    return $build;
  }

  /**
   * Build the subscribe message.
   *
   * @param \Drupal\node\NodeInterface $entity
   *   The entity.
   *
   * @return array
   *   Render array
   */
  protected function buildSubscribeMsg(NodeInterface $entity): array {
    return [
      '#theme' => 'server_theme_subscribe',
      '#label' => $entity->label(),
      '#name' => $this->currentUser->getDisplayName(),
    ];
  }

}
