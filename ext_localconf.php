<?php

use Sebkln\FormMultistep\Hooks\FormHooks;

defined('TYPO3') or die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        trim('
            plugin.tx_form.settings.yamlConfigurations {
                960 = EXT:form_multistep/Configuration/Form/CustomFormSetup.yaml
            }

            module.tx_form.settings.yamlConfigurations {
                960 = EXT:form_multistep/Configuration/Form/CustomFormSetup.yaml
            }
        ')
    );
});
