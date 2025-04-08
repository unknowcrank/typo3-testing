<?php
class Default_action_ToolbarItems_UserToolbarItemDropDown_5aee49febe2d2e1c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/switch-user.js',
'1' => '@typo3/backend/color-scheme-switch.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
<p class="dropdown-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.user',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5)]);

$output0 .= '</p>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('modules'),
];

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments6 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
    <ul class="dropdown-list">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
            <li>
                <a
                    href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'parameters' => [],
'referenceType' => 'absolute',
'route' => $renderingContext->getVariableProvider()->getByPath('module.identifier'),
];

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.path'),
];

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'then' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15)]),
'else' => '#',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
];

$output12 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments13, $renderingContext)
;

$output12 .= '"
                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('module.description'),
'default' => $renderingContext->getVariableProvider()->getByPath('module.description'),
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19)]);

$output12 .= '"
                    class="dropdown-item"
                    role="menuitem"
                    data-moduleroute-identifier="';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.identifier')]);

$output12 .= '"
                >
                    <span class="dropdown-item-columns">
                        <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier'),
'size' => 'small',
'alternativeMarkupIdentifier' => 'inline',
];

$output12 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21);

$output12 .= '
                        </span>
                        <span class="dropdown-item-column dropdown-item-column-title">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.title');
};

$arguments22 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('module.title'),
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23)]);

$output12 .= '
                        </span>
                    </span>
                </a>
            </li>
        ';
return $output12;
};

$arguments10 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('modules'),
'as' => 'module',
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11);

$output9 .= '
    </ul>
';
return $output9;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments6, $renderingContext)
;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('recentUsers'),
];
$renderChildrenClosure27 = ($arguments26['subject'] !== null) ? function() use ($arguments26) { return $arguments26['subject']; } : $renderChildrenClosure27;
$array25 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27),
'1' => ' > 0',
];

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments24 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output29 = '';

$output29 .= '
    <hr class="dropdown-divider" aria-hidden="true">
    <p class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.user.recentlySwitchedUsers',
];

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31)]);

$output29 .= '</p>
    <ul class="modulemenu-group-container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
            <li>
                <typo3-backend-switch-user
                    class="dropdown-item"
                    mode="switch"
                    targetUser="';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.uid')]);

$output34 .= '"
                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('user.username'),
];

$arguments35 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.user.recentlySwitchedUsers.su.tooltip',
'arguments' => $array37,
];

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36)]);

$output34 .= '"
                >
                    <span class="dropdown-item-columns">
                        <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'showIcon' => false,
'backendUser' => $renderingContext->getVariableProvider()->getByPath('user.uid'),
'size' => 16,
];

$output34 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output34 .= '
                        </span>
                        <span class="dropdown-item-column dropdown-item-column-title">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('user.realName'),
];

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments40 = [
'then' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.realName')]),
'else' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username')]),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression42(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)),
    $renderingContext
),
];

$output34 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments40, $renderingContext)
;

$output34 .= '
                        </span>
                    </span>
                </typo3-backend-switch-user>
            </li>
        ';
return $output34;
};

$arguments32 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('recentUsers'),
'as' => 'user',
];

$output29 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output29 .= '
    </ul>
';
return $output29;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments24, $renderingContext)
;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array44 = [
'0' => $renderingContext->getVariableProvider()->getByPath('colorSchemeSwitchEnabled'),
];

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments43 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression45(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output46 = '';

$output46 .= '
    <hr class="dropdown-divider" aria-hidden="true">
    <typo3-backend-color-scheme-switch
        label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:toggleColorScheme',
];

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments47, $renderingContext, $renderChildrenClosure48)]);

$output46 .= '"
        colorschemes="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('colorSchemes');
};

$arguments49 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper::class, $arguments49, $renderingContext, $renderChildrenClosure50)]);

$output46 .= '" activeColorScheme="';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activeColorScheme')]);

$output46 .= '"
    ></typo3-backend-color-scheme-switch>
';
return $output46;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments43, $renderingContext)
;

$output0 .= '
<hr class="dropdown-divider" aria-hidden="true">
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array52 = [
'0' => $renderingContext->getVariableProvider()->getByPath('switchUserMode'),
];

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments51 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output54 = '';

$output54 .= '
        <div class="dropdown-item-text">
            <typo3-backend-switch-user class="btn btn-sm btn-default" mode="exit">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-logout',
'size' => 'small',
'alternativeMarkupIdentifier' => 'inline',
];

$output54 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments55, $renderingContext, $renderChildrenClosure56);

$output54 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.user.btn.exitSwitchUser',
];

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments57, $renderingContext, $renderChildrenClosure58)]);

$output54 .= '
            </typo3-backend-switch-user>
        </div>
    ';
return $output54;
},
'__else' => function() use ($renderingContext) {
$output59 = '';

$output59 .= '
        <div class="dropdown-item-text">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-logout',
'size' => 'small',
'alternativeMarkupIdentifier' => 'inline',
];

$output62 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments63, $renderingContext, $renderChildrenClosure64);

$output62 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.user.btn.logout',
];

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments65, $renderingContext, $renderChildrenClosure66)]);

$output62 .= '
            ';
return $output62;
};

$arguments60 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'parameters' => [],
'referenceType' => 'absolute',
'route' => 'logout',
'class' => 'btn btn-sm btn-default',
'target' => '_top',
];

$output59 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class, $arguments60, $renderingContext, $renderChildrenClosure61);

$output59 .= '
        </div>
    ';
return $output59;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments51, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#