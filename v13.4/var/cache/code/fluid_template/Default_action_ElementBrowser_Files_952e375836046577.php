<?php
class Default_action_ElementBrowser_Files_952e375836046577 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'ElementBrowserWithNavigation';
    }
    public function hasLayout(): bool {
        return true;
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
 * section Navigation
 */
public function section_cec5e0e618483f50(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    <typo3-backend-component-filestorage-browser
        class="scaffold-content-navigation-component"
        active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
];

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments3 = [
'then' => $renderingContext->getVariableProvider()->getByPath('selectedFolder.combinedIdentifier'),
'else' => '',
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
'keepQuotes' => false,
'encoding' => NULL,
'doubleEncode' => true,
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '"
    >
    </typo3-backend-component-filestorage-browser>
';

    return $output0;
}
/**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
        <h4 class="text-truncate mb-4">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'size' => \TYPO3\CMS\Core\Imaging\IconSize::SMALL,
'overlay' => NULL,
'options' => [],
'alternativeMarkupIdentifier' => NULL,
'resource' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output10 .= '
            ';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.storage.name')]);

$output10 .= ': ';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.identifier')]);

$output10 .= '
        </h4>
    ';
return $output10;
},
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments7, $renderingContext)
;

$output6 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'as' => NULL,
'queueIdentifier' => 'core.template.flashMessages',
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};

$arguments15 = [
'value' => NULL,
];

$output6 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output6 .= '
';

    return $output6;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output17 = '';

$output17 .= '

';

$output17 .= '';

$output17 .= '

';

$output17 .= '';

$output17 .= '

';

$output17 .= '';

$output17 .= '


';

    return $output17;
}

}

#