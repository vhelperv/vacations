<?php

namespace Drupal\eca_render\Plugin\Action;

use Drupal\Core\Form\FormStateInterface;

/**
 * Set the active theme.
 *
 * @Action(
 *   id = "eca_set_active_theme",
 *   label = @Translation("Set active theme")
 * )
 */
class SetActiveTheme extends ActiveThemeActionBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration(): array {
    return [
      'theme_name' => '',
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state): array {
    $form = parent::buildConfigurationForm($form, $form_state);
    $form['theme_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Theme name'),
      '#description' => $this->t('Specify the machine name of the theme to set. This field supports tokens.'),
      '#default_value' => $this->configuration['theme_name'],
      '#weight' => -25,
      '#required' => TRUE,
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state): void {
    $this->configuration['theme_name'] = $form_state->getValue('theme_name');
    parent::submitConfigurationForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function execute(): void {
    $theme_name = trim((string) $this->tokenServices->replaceClear($this->configuration['theme_name']));
    if ($theme_name !== '') {
      $active_theme = $this->themeInitialization->getActiveThemeByName($theme_name);
      $this->themeManager->setActiveTheme($active_theme);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function calculateDependencies(): array {
    $dependencies = parent::calculateDependencies();
    $theme_name = trim($this->configuration['theme_name']);
    if ($this->themeHandler->themeExists($theme_name)) {
      $dependencies['theme'][] = $theme_name;
    }
    return $dependencies;
  }

}
