<?php
class Default_action_ToolbarItems_ShortcutToolbarItemDropDown_a927e6a9fe91426e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '<p class="dropdown-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '</p>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('shortcutMenu'),
];
$renderChildrenClosure6 = ($arguments5['subject'] !== null) ? function() use ($arguments5) { return $arguments5['subject']; } : $renderChildrenClosure6;
$array4 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6),
'1' => ' == 0',
];

$expression7 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};

$arguments3 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output8 = '';

$output8 .= '
        ';

$output8 .= '';

$output8 .= '';

$output8 .= '';

$output8 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <p class="dropdown-item-text">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};
$output22 = '';

$output22 .= '<span title="';

$output22 .= $renderingContext->getVariableProvider()->getByPath('inlineIconTitle');

$output22 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('inlineIcon');
};

$arguments23 = [
'value' => NULL,
];

$output22 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output22 .= '</span>';

$array21 = [
'0' => $output22,
];

$arguments19 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks.description',
'arguments' => $array21,
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20);
};

$arguments17 = [
'value' => NULL,
];

$output16 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output16 .= '</p>
        ';
return $output16;
};
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-share-alt',
'alternativeMarkupIdentifier' => 'inline',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks',
];

$array11 = [
'inlineIcon' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13),
'inlineIconTitle' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15),
];

$arguments9 = [
'map' => $array11,
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10);

$output8 .= '
    ';
return $output8;
},
'__else' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array30 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('iterator.isFirst'),
];

$expression31 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments29 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
                <hr class="dropdown-divider" aria-hidden="true">
            ';
},
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments29, $renderingContext)
;

$output28 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => $renderingContext->getVariableProvider()->getByPath('group.title'),
];

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments32 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                    <p class="dropdown-header" id="shortcut-group-';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output35 .= '">';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.title')]);

$output35 .= '</p>
                ';
return $output35;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('shortcutMenu');
};

$arguments37 = [
'subject' => NULL,
];
$renderChildrenClosure38 = ($arguments37['subject'] !== null) ? function() use ($arguments37) { return $arguments37['subject']; } : $renderChildrenClosure38;
$array36 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments37, $renderingContext, $renderChildrenClosure38),
'1' => ' > 1',
];

$expression39 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                    <p class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarks.notGrouped',
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments41, $renderingContext, $renderChildrenClosure42)]);

$output40 .= '</p>
                ';
return $output40;
}
    ],
],
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments32, $renderingContext)
;

$output28 .= '
            <ul class="dropdown-list" data-shortcutgroup="';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output28 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                    <li class="t3js-topbar-shortcut" data-shortcutid="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.raw.uid')]);

$output45 .= '" data-shortcutgroup="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output45 .= '">
                        <a href="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.href')]);

$output45 .= '" class="dropdown-item dropdown-item-title t3js-shortcut-jump"
                            title="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label')]);

$output45 .= '"
                            data-module="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.module')]);

$output45 .= '"
                            data-route="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.route')]);

$output45 .= '"
                        >
                            <span class="dropdown-item-columns">
                                <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('shortcut.icon');
};

$arguments46 = [
'value' => NULL,
];

$output45 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output45 .= '
                                </span>
                                <span class="dropdown-item-column dropdown-item-column-title">
                                    ';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('shortcut.label')]);

$output45 .= '
                                </span>
                            </span>
                        </a>
                        <a
                            href="#"
                            class="dropdown-item dropdown-item-action t3js-shortcut-edit"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarksEdit',
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments48, $renderingContext, $renderChildrenClosure49)]);

$output45 .= '"
                            role="button"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-open',
'alternativeMarkupIdentifier' => 'inline',
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51);

$output45 .= '
                        </a>
                        <a
                            href="#"
                            class="dropdown-item dropdown-item-action t3js-shortcut-delete"
                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_toolbar.xlf:toolbarItems.bookmarksDelete',
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments52, $renderingContext, $renderChildrenClosure53)]);

$output45 .= '"
                            role="button"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};

$arguments54 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'actions-delete',
'alternativeMarkupIdentifier' => 'inline',
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments54, $renderingContext, $renderChildrenClosure55);

$output45 .= '
                        </a>
                    </li>
                ';
return $output45;
};

$arguments43 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('group.shortcuts'),
'as' => 'shortcut',
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44);

$output28 .= '
            </ul>
        ';
return $output28;
};

$arguments26 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('shortcutMenu'),
'as' => 'group',
'iteration' => 'iterator',
];

$output25 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27);

$output25 .= '
    ';
return $output25;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments3, $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#