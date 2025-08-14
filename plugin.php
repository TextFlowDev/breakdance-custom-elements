<?php

/**
 * Plugin Name: TextFlowDevCustomElements
 * Plugin URI: https://idfacengineering.com/
 * Description: Custom Elements To Download GSAP for WordPress via Breakdance Builder
 * Author: TextFlowDev
 * Author URI: https://idfacengineering.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace TextFlowDevCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'TextFlowDevCustomElements;',
        'element',
        'TextFlowDev Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'TextFlowDevCustomElements;',
        'macro',
        'TextFlowDev Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'TextFlowDevCustomElements;',
        'preset',
        'TextFlowDev Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
