<?php
class partial_ToolbarItems_ToolbarItem_6bafdc0b65a6407a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<span class="toolbar-item-icon" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('title'),
'default' => $renderingContext->getVariableProvider()->getByPath('title'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('icon');
};

$arguments3 = [
'value' => NULL,
];

$output0 .= isset($arguments3['value']) ? $arguments3['value'] : $renderChildrenClosure4();

$output0 .= '</span>
<span class="toolbar-item-title">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('title'),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);
};

$arguments5 = [
'value' => NULL,
];

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '</span>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('name'),
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

$output12 .= '
    <span class="toolbar-item-name">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('name');
};

$arguments13 = [
'value' => NULL,
];

$output12 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output12 .= '</span>
';
return $output12;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments9, $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#