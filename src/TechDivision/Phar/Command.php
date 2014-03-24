<?php

/**
 * TechDivision\Phar\Command
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision_Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_Phar
 */

namespace TechDivision\Phar;

/**
 * Interfaces for all PHAR commands
 *
 * @category  Library
 * @package   TechDivision_Phar
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_Context
 */
interface Command
{
    
    /**
     * Configures the command instance.
     * 
     * @return void
     */
    public function configure();
    
    /**
     * Executes the command instance.
     * 
     * @return void
     */
    public function execute();
}
