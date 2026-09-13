<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_5_4_2($module)
{
    return $module->installModuleTab('AdminEverPsPopup', 'Ever Popup');
}