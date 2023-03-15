<?php

namespace weitzman\DrupalTestTraits;

use Drupal\FunctionalJavascriptTests\JSWebAssert;

/**
 * You may use this class in any of these ways:
 * - Copy its code into your own base class.
 * - Have your base class extend this class.
 * - Your tests may extend this class directly.
 *
 * Note that this class does not use the WebDriver protocol. Instead, it uses
 * the Chrome Debugger protocol. For WebDriver support, see
 * \weitzman\DrupalTestTraits\ExistingSiteSelenium2DriverTestBase.
 *
 * @deprecated Deprecated in 1.6.0, will be removed in 2.0. Use
 *   \weitzman\DrupalTestTraits\ExistingSiteSelenium2DriverTestBase instead.
 */
abstract class ExistingSiteWebDriverTestBase extends ExistingSiteBase
{
    use WebDriverTrait;

    /**
     * {@inheritdoc}
     */
    public function assertSession($name = null)
    {
        // Ensure that the test is not marked as risky because of no assertions. In
        // PHPUnit 6 tests that only make assertions using $this->assertSession()
        // can be marked as risky.
        $this->addToAssertionCount(1);
        return new JSWebAssert($this->getSession($name), $this->baseUrl);
    }

  /**
   * {@inheritdoc}
   */
    protected function getHtmlOutputHeaders()
    {
      // The webdriver API does not support fetching headers.
        return '';
    }

    /**
     * Override \Drupal\Tests\UiHelperTrait::prepareRequest since it generates
     * an error, and does nothing useful for DTT. @see https://www.drupal.org/node/2246725.
     */
    protected function prepareRequest()
    {
    }
}
