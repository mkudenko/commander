<?php

namespace Drupal\commander\Plugin;

use Drupal\commander\Contracts\CommandInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for Command handler plugins.
 */
interface CommandHandlerInterface extends PluginInspectionInterface {

  /**
   * Executes the command.
   *
   * @param \Drupal\commander\Contracts\CommandInterface $command
   *   Command.
   */
  public function execute(CommandInterface $command);

}
