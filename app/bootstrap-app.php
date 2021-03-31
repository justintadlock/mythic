<?php
/**
 * Theme bootstrap file.
 *
 * This file is used to create a new application instance and bind items to the
 * container. This is the heart of the application.
 *
 * @package   Mythic
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2018 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://themehybrid.com/themes/mythic
 */

# ------------------------------------------------------------------------------
# Create a new application.
# ------------------------------------------------------------------------------
#
# Creates the one true instance of the Hybrid Core application. You may access
# this instance via the `\Hybrid\app()` function or `\Hybrid\App` static class
# after the application has booted.

$mythic = new \Hybrid\Core\Application();

# ------------------------------------------------------------------------------
# Register service providers with the application.
# ------------------------------------------------------------------------------
#
# Before booting the application, add any service providers that are necessary
# for running the theme. Service providers are essentially the backbone of the
# bootstrapping process.

$mythic->provider( \Mythic\Providers\AppServiceProvider::class );
$mythic->provider( \Hybrid\Attr\AttrServiceProvider::class );
$mythic->provider( \Hybrid\Lang\LanguageServiceProvider::class );
$mythic->provider( \Hybrid\Media\MetaServiceProvider::class );
$mythic->provider( \Hybrid\Pagination\PaginationServiceProvider::class );
$mythic->provider( \Hybrid\Template\TemplatesServiceProvider::class );
$mythic->provider( \Hybrid\Template\HierarchyServiceProvider::class );
$mythic->provider( \Hybrid\Theme\Provider::class );
$mythic->provider( \Hybrid\View\ViewServiceProvider::class );

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for child themes (or even plugins) to hook into the
# bootstrapping process and add their own bindings before the app is booted by
# passing the application instance to the action callback.

do_action( 'mythic/bootstrap', $mythic );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# Calls the application `boot()` method, which launches the application. Pat
# yourself on the back for a job well done.

$mythic->boot();
