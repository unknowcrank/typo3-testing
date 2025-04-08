<?php
class Default_action_Form_OuterWrapContainer_aada9fc66a8491a4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '

<h1>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('pageTitle');
};

$arguments1 = [
'value' => NULL,
];

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '</h1>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('recordDescription'),
];

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments3 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recordDescription')]);
};

$arguments12 = [
'value' => NULL,
];
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\Nl2brViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13);

$output11 .= '
    ';
return $output11;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.recordInformation',
];

$arguments7 = [
'message' => NULL,
'state' => -2,
'iconName' => NULL,
'disableIcon' => false,
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10),
];
$renderChildrenClosure8 = ($arguments7['message'] !== null) ? function() use ($arguments7) { return $arguments7['message']; } : $renderChildrenClosure8;
$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output6 .= '
';
return $output6;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments3, $renderingContext)
;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('recordReadonly'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments14 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.recordReadonly',
];

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24)]);

$output22 .= '
    ';
return $output22;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.recordInformation',
];

$arguments18 = [
'message' => NULL,
'state' => -2,
'iconName' => NULL,
'disableIcon' => false,
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21),
];
$renderChildrenClosure19 = ($arguments18['message'] !== null) ? function() use ($arguments18) { return $arguments18['message']; } : $renderChildrenClosure19;
$output17 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19);

$output17 .= '
';
return $output17;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments14, $renderingContext)
;

$output0 .= '

<div class="typo3-TCEforms';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('isNewRecord'),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => ' is-new',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments25, $renderingContext)
;

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fieldInformationHtml');
};

$arguments28 = [
'value' => NULL,
];

$output0 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fieldWizardHtml');
};

$arguments30 = [
'value' => NULL,
];

$output0 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('childHtml');
};

$arguments32 = [
'value' => NULL,
];

$output0 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output0 .= '
    <div class="mt-3 text-end">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('icon');
};

$arguments34 = [
'value' => NULL,
];

$output0 .= isset($arguments34['value']) ? $arguments34['value'] : $renderChildrenClosure35();

$output0 .= '
        <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('tableTitle');
};

$arguments36 = [
'value' => NULL,
];

$output0 .= isset($arguments36['value']) ? $arguments36['value'] : $renderChildrenClosure37();

$output0 .= '</strong> ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newOrUid');
};

$arguments38 = [
'value' => NULL,
];

$output0 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('tableName'),
];

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
            <code>[';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tableName')]);

$output43 .= ']</code>
        ';
return $output43;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments40, $renderingContext)
;

$output0 .= '
    </div>
</div>


';

    return $output0;
}

}

#