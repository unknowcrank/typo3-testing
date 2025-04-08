<?php
class partial_PageLayout_Record_c10839a1034932a6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.disabled'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('item.context.drawingConfiguration.showHidden'),
'3' => ' == 0',
];

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 0));};

$arguments3 = [
'then' => 'height: 0; display: none;',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments3, $renderingContext)
;
};

$arguments1 = [
'value' => NULL,
'name' => 'style',
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
<div
    role="group"
    aria-labelledby="element-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.table')]);

$output0 .= '-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.uid')]);

$output0 .= '-label"
    class="t3-page-ce ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.wrapperClassName')]);

$output0 .= ' t3js-page-ce t3js-page-ce-sortable"
    id="element-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.table')]);

$output0 .= '-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.uid')]);

$output0 .= '"
    data-table="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.table')]);

$output0 .= '"
    data-uid="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.uid')]);

$output0 .= '"
    data-language-uid="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.sys_language_uid')]);

$output0 .= '"
    data-move-element-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$array8 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('item.record.uid'),
'originalPid' => $renderingContext->getVariableProvider()->getByPath('item.record.pid'),
'expandPage' => $renderingContext->getVariableProvider()->getByPath('item.record.pid'),
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('context.returnUrl'),
];

$arguments6 = [
'referenceType' => 'absolute',
'route' => 'move_element',
'parameters' => $array8,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7)]);

$output0 .= '"
    style="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('style')]);

$output0 .= '"
>
    <span id="element-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.table')]);

$output0 .= '-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.uid')]);

$output0 .= '-label" class="visually-hidden">id=';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.uid')]);

$output0 .= ' - ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.record.header'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments9 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output12 = '';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.header')]);

$output12 .= ' - ';
return $output12;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments9, $renderingContext)
;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.contentTypeLabel')]);

$output0 .= '</span>
    <div class="t3-page-ce-element t3-page-ce-dragitem">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'PageLayout/RecordDefault/Header',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output18 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20);

$output18 .= '
        ';
return $output18;
};
$output15 = '';

$output15 .= 'PageLayout/Record/';

$output15 .= $renderingContext->getVariableProvider()->getByPath('item.record.CType');

$output15 .= '/Header';

$array16 = [
'0' => 1,
];

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'section' => NULL,
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => $output15,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
            <div class="t3-page-ce-body">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'PageLayout/RecordDefault/Preview',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output23 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25);

$output23 .= '
            </div>
        ';
return $output23;
};

$arguments21 = [
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'PageLayout/RecordDefault/Footer',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output31 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output31 .= '
        ';
return $output31;
};
$output28 = '';

$output28 .= 'PageLayout/Record/';

$output28 .= $renderingContext->getVariableProvider()->getByPath('item.record.CType');

$output28 .= '/Footer';

$array29 = [
'0' => 1,
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments26 = [
'section' => NULL,
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => $output28,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.inconsistentLanguage'),
];

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments34 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output37 = '';

$output37 .= '
            <div class="t3-page-ce-footer">
                <span class="badge badge-warning">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.inconsistentLanguageWarning',
];

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39)]);

$output37 .= '</span>
            </div>
        ';
return $output37;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments34, $renderingContext)
;

$output0 .= '
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('allowEditContent'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('item.column.contentEditable'),
'3' => ' && ',
'4' => $renderingContext->getVariableProvider()->getByPath('column.context.allowNewContent'),
'5' => ' && ',
'6' => $renderingContext->getVariableProvider()->getByPath('column.active'),
];

$expression42 = function($context) {return (((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node6"]));};

$arguments40 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression42(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output43 = '';

$output43 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$array46 = [
'item' => $renderingContext->getVariableProvider()->getByPath('item'),
'column' => $renderingContext->getVariableProvider()->getByPath('column'),
'allowEditContent' => $renderingContext->getVariableProvider()->getByPath('allowEditContent'),
'url' => $renderingContext->getVariableProvider()->getByPath('item.newContentAfterUrl'),
];

$arguments44 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'PageLayout/ActionControls',
'arguments' => $array46,
];

$output43 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments44, $renderingContext, $renderChildrenClosure45);

$output43 .= '
    ';
return $output43;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments40, $renderingContext)
;

$output0 .= '
    <div class="t3-page-ce-dropzone t3js-page-ce-dropzone-available" hidden></div>
</div>
';

    return $output0;
}

}

#