<?php
class partial_Backend_Topbar_7448a2548423fe5d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section ToggleButton
 */
public function section_66660c065b7158e0(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('enabled'),
];

$expression5 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments3 = [
'then' => 1,
'else' => 0,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
];

$arguments1 = [
'name' => 'disabled',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments3, $renderingContext)
,
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('disabled'),
];

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'then' => 'disabled',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$arguments6 = [
'name' => 'disabledAttr',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments8, $renderingContext)
,
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output0 .= '

    <button ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disabledAttr')]);

$output0 .= ' class="topbar-button ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classes')]);

$output0 .= '" title="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);

$output0 .= '" aria-label="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('icon'),
'disabled' => $renderingContext->getVariableProvider()->getByPath('disabled'),
];

$arguments11 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Icon',
'arguments' => $array13,
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output0 .= '
    </button>
';

    return $output0;
}
/**
 * section Icon
 */
public function section_9bb494f64715d1fe(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output14 = '';

$output14 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('disabled'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments17 = [
'then' => 'overlay-readonly',
'else' => null,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
];

$arguments15 = [
'name' => 'overlay',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments17, $renderingContext)
,
];
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16)]);

$output14 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'size' => 'small',
'state' => 'default',
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('identifier'),
'alternativeMarkupIdentifier' => 'inline',
'overlay' => $renderingContext->getVariableProvider()->getByPath('overlay'),
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21);

$output14 .= '
';

    return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output22 = '';

$output22 .= '

<div class="scaffold-topbar t3js-scaffold-topbar" data-topbar-identifier="topbar">
    <div class="topbar t3js-topbar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.minMaxModuleMenu',
];

$array25 = [
'icon' => 'actions-menu',
'enabled' => $renderingContext->getVariableProvider()->getByPath('hasModules'),
'classes' => 'topbar-button-modulemenu t3js-topbar-button-modulemenu',
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27),
];

$arguments23 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'ToggleButton',
'arguments' => $array25,
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);

$output22 .= '
        <div class="topbar-site-container">
            <a class="topbar-site" href="./" target="_top" title="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteName')]);

$output22 .= ' - ';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('applicationVersion')]);

$output22 .= '">
                <span class="topbar-site-logo">
                    <img src="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoUrl')]);

$output22 .= '" width="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoWidth')]);

$output22 .= '" height="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoHeight')]);

$output22 .= '" alt="" aria-hidden="true" />
                </span>
                <span class="topbar-site-title">
                    <span class="topbar-site-name">';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteName')]);

$output22 .= '</span>
                    <span class="topbar-site-version">';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('applicationVersion')]);

$output22 .= '</span>
                </span>
            </a>
        </div>
        <button
            class="topbar-button topbar-button-toolbar t3js-topbar-button-toolbar"
            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.toolbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29)]);

$output22 .= '"
            aria-label="';
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
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.toolbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31)]);

$output22 .= '"
        >
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-system-extension-configure',
'alternativeMarkupIdentifier' => 'inline',
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output22 .= '
        </button>
        <button
            class="topbar-button topbar-button-search t3js-topbar-button-search"
            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.searchbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35)]);

$output22 .= '"
            aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.searchbarOpenClose',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments36, $renderingContext, $renderChildrenClosure37)]);

$output22 .= '"
        >
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-search',
'alternativeMarkupIdentifier' => 'inline',
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output22 .= '
        </button>
    </div>
</div>
<div class="scaffold-toolbar t3js-scaffold-toolbar" data-toolbar-identifier="toolbar">
    <div class="toolbar">
        <ul class="toolbar-list" data-typo3-role="typo3-module-menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                <li ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Toolbar\AttributesViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'class' => $renderingContext->getVariableProvider()->getByPath('toolbarItem'),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Toolbar\AttributesViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46);
};

$arguments43 = [
'value' => NULL,
];

$output42 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output42 .= '>
                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Toolbar\IfHasDropdownViewHelper

$arguments47 = [
'then' => NULL,
'else' => NULL,
'class' => $renderingContext->getVariableProvider()->getByPath('toolbarItem'),
'__then' => function() use ($renderingContext) {
$output48 = '';

$output48 .= '
                            <button type="button" class="toolbar-item-link dropdown-toggle dropdown-toggle-no-chevron" data-bs-target="toolbar-menu-';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle')]);

$output48 .= '" data-bs-toggle="dropdown" data-bs-offset="0,0">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('toolbarItem.item');
};

$arguments49 = [
'value' => NULL,
];

$output48 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output48 .= '
                            </button>
                            <div id="toolbar-menu-';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle')]);

$output48 .= '" class="dropdown-menu" role="menu">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('toolbarItem.dropdown');
};

$arguments51 = [
'value' => NULL,
];

$output48 .= isset($arguments51['value']) ? $arguments51['value'] : $renderChildrenClosure52();

$output48 .= '
                            </div>
                        ';
return $output48;
},
'__else' => function() use ($renderingContext) {
$output53 = '';

$output53 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('toolbarItem.item');
};

$arguments54 = [
'value' => NULL,
];

$output53 .= isset($arguments54['value']) ? $arguments54['value'] : $renderChildrenClosure55();

$output53 .= '
                        ';
return $output53;
},
];

$output42 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Toolbar\IfHasDropdownViewHelper::class, $arguments47, $renderingContext)
;

$output42 .= '
                </li>
            ';
return $output42;
};

$arguments40 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('toolbarItems'),
'as' => 'toolbarItem',
'iteration' => 'iterator',
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments40, $renderingContext, $renderChildrenClosure41);

$output22 .= '
        </ul>
    </div>
</div>

';

$output22 .= '';

$output22 .= '

';

$output22 .= '';

$output22 .= '


';

    return $output22;
}

}

#