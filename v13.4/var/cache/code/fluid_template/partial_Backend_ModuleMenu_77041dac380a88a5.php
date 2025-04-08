<?php
class partial_Backend_ModuleMenu_77041dac380a88a5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Menubar
 */
public function section_0ad4855ab1331bc4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    <ul
        role="menubar"
        aria-orientation="vertical"
        aria-label="';
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
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:modulemenu.label',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '"
        class="modulemenu-group-container"
    >
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
            <li
                role="presentation"
                data-modulemenu-level="1"
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output7 = '';

$output7 .= 'class="modulemenu-group modulemenu-group-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.collapsed'),
];

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'then' => 'collapsed',
'else' => 'expanded',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$output7 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments8, $renderingContext)
;

$output7 .= '"';

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.subModules'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments6 = [
'then' => $output7,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments6, $renderingContext)
;

$output5 .= '
            >
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('iterator.isFirst'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'then' => 0,
'else' => -1,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
];

$array15 = [
'module' => $renderingContext->getVariableProvider()->getByPath('module'),
'showChildren' => $renderingContext->getVariableProvider()->getByPath('module.subModules'),
'tabIndex' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments16, $renderingContext)
,
];

$arguments13 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Button',
'arguments' => $array15,
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14);

$output5 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.subModules'),
];

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments19 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$array25 = [
'modules' => $renderingContext->getVariableProvider()->getByPath('module.subModules'),
'parent' => $renderingContext->getVariableProvider()->getByPath('module'),
];

$arguments23 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Menu',
'arguments' => $array25,
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);

$output22 .= '
                ';
return $output22;
},
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments19, $renderingContext)
;

$output5 .= '
            </li>
        ';
return $output5;
};

$arguments3 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('modules'),
'as' => 'module',
'iteration' => 'iterator',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '
    </ul>
';

    return $output0;
}
/**
 * section Menu
 */
public function section_6c179d8fa93a09ae(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output26 = '';

$output26 .= '
    <ul
        id="modulemenu-group-';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parent.identifier')]);

$output26 .= '"
        role="menu"
        aria-orientation="vertical"
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('parent.title'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output30 = '';

$output30 .= '
            aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('parent.title'),
'default' => $renderingContext->getVariableProvider()->getByPath('parent.title'),
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32)]);

$output30 .= '"
        ';
return $output30;
},
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments27, $renderingContext)
;

$output26 .= '
        class="modulemenu-group-container collapse ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('parent.collapsed'),
];

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments34 = [
'then' => NULL,
'else' => 'show',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return NULL;
},
];

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('parent'),
];

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments33 = [
'then' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments34, $renderingContext)
,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments33, $renderingContext)
;

$output26 .= '"
    >
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '
            <li role="presentation" data-modulemenu-level="2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$array44 = [
'module' => $renderingContext->getVariableProvider()->getByPath('module'),
'tabIndex' => -1,
];

$arguments42 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Button',
'arguments' => $array44,
];

$output41 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments42, $renderingContext, $renderChildrenClosure43);

$output41 .= '
            </li>
        ';
return $output41;
};

$arguments39 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('modules'),
'as' => 'module',
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments39, $renderingContext, $renderChildrenClosure40);

$output26 .= '
    </ul>
';

    return $output26;
}
/**
 * section Button
 */
public function section_896c94ff41e887f0(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output45 = '';

$output45 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'name' => 'moduleTitle',
'value' => '',
];
$renderChildrenClosure47 = ($arguments46['value'] !== null) ? function() use ($arguments46) { return $arguments46['value']; } : $renderChildrenClosure47;
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments46, $renderingContext, $renderChildrenClosure47)]);

$output45 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array49 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.title'),
];

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments48 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression50(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output51 = '';

$output51 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};

$arguments54 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('module.title'),
'default' => $renderingContext->getVariableProvider()->getByPath('module.title'),
];

$arguments52 = [
'name' => 'moduleTitle',
'value' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments54, $renderingContext, $renderChildrenClosure55),
];
$renderChildrenClosure53 = ($arguments52['value'] !== null) ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments52, $renderingContext, $renderChildrenClosure53)]);

$output51 .= '
    ';
return $output51;
},
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments48, $renderingContext)
;

$output45 .= '
    <';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array57 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.shouldBeLinked'),
];

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments56 = [
'then' => 'a',
'else' => 'button',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression58(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)),
    $renderingContext
),
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments56, $renderingContext)
;

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array60 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.shouldBeLinked'),
];

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments59 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'parameters' => [],
'referenceType' => 'absolute',
'route' => $renderingContext->getVariableProvider()->getByPath('module.identifier'),
];

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments63, $renderingContext, $renderChildrenClosure64)]);

$output62 .= '"
                data-moduleroute-identifier="';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.identifier')]);

$output62 .= '"
            ';
return $output62;
},
'__else' => function() use ($renderingContext) {
return '
                type="button"
            ';
},
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments59, $renderingContext)
;

$output45 .= '
        role="menuitem"
        title="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleTitle')]);

$output45 .= '"
        class="modulemenu-action"
        tabindex="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tabIndex')]);

$output45 .= '"
        data-modulemenu-identifier="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.identifier')]);

$output45 .= '"
        data-modulemenu-collapsible="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array66 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showChildren'),
];

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments65 = [
'then' => 'true',
'else' => 'false',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression67(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)),
    $renderingContext
),
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments65, $renderingContext)
;

$output45 .= '"
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output69 = '';

$output69 .= 'aria-controls="modulemenu-group-';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.identifier')]);

$output69 .= '" aria-haspopup="menu" aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array71 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.collapsed'),
];

$expression72 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments70 = [
'then' => 'false',
'else' => 'true',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression72(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)),
    $renderingContext
),
];

$output69 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments70, $renderingContext)
;

$output69 .= '"';

$array73 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showChildren'),
];

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments68 = [
'then' => $output69,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression74(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)),
    $renderingContext
),
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments68, $renderingContext)
;

$output45 .= '
    >
        <span class="modulemenu-icon" aria-hidden="true">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'size' => 'medium',
'identifier' => $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier'),
'alternativeMarkupIdentifier' => 'inline',
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments75, $renderingContext, $renderChildrenClosure76);

$output45 .= '</span>
        <span class="modulemenu-name">';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleTitle')]);

$output45 .= '</span>
        <span class="modulemenu-indicator" aria-hidden="true"></span>
    </';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array78 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.shouldBeLinked'),
];

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments77 = [
'then' => 'a',
'else' => 'button',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression79(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)),
    $renderingContext
),
];

$output45 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments77, $renderingContext)
;

$output45 .= '>
';

    return $output45;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output80 = '';

$output80 .= '

<nav
    class="modulemenu"
    data-role="modulemenu"
    id="modulemenu"
    data-modulemenu
    aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$arguments81 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:modulemenu.label',
];

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments81, $renderingContext, $renderChildrenClosure82)]);

$output80 .= '"
    data-modules-information="';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('modulesInformation')]);

$output80 .= '"
>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array84 = [
'0' => $renderingContext->getVariableProvider()->getByPath('modules'),
];

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments83 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression85(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output86 = '';

$output86 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};

$array89 = [
'modules' => $renderingContext->getVariableProvider()->getByPath('modules'),
];

$arguments87 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Menubar',
'arguments' => $array89,
];

$output86 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments87, $renderingContext, $renderChildrenClosure88);

$output86 .= '
    ';
return $output86;
},
];

$output80 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments83, $renderingContext)
;

$output80 .= '
</nav>

';

$output80 .= '';

$output80 .= '

';

$output80 .= '';

$output80 .= '

';

$output80 .= '';

$output80 .= '


';

    return $output80;
}

}

#