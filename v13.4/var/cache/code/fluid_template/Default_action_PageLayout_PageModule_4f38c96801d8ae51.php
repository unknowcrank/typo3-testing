<?php
class Default_action_PageLayout_PageModule_4f38c96801d8ae51 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'Module';
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
 * section Before
 */
public function section_ed3696630fa71e53(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/clear-cache.js',
'1' => '@typo3/backend/new-content-element-wizard-button.js',
'2' => '@typo3/backend/context-menu.js',
'3' => '@typo3/backend/localization.js',
'4' => '@typo3/backend/layout-module/drag-drop.js',
'5' => '@typo3/backend/modal.js',
'6' => '@typo3/backend/element/editable-page-title.js',
'7' => '@typo3/backend/element/immediate-action-element.js',
];

$array4 = [
'editablePageTitle.input.field.label' => 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:editPageTitle.input.field.label',
'editablePageTitle.button.edit.label' => 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:editPageTitle',
'editablePageTitle.button.save.label' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:save',
'editablePageTitle.button.cancel.label' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
'addJsInlineLabels' => $array4,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$arguments5 = [
'name' => 'immediateActionArgs',
'value' => $array7,
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '
    <typo3-immediate-action
        action="TYPO3.Backend.Storage.ModuleStateStorage.update"
        args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('immediateActionArgs');
};

$arguments11 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);
};

$arguments8 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value10 = ($arguments8['value'] !== null ? $arguments8['value'] : $renderChildrenClosure9());

$output0 .= !is_string($value10) && !(is_object($value10) && method_exists($value10, '__toString')) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments8['encoding'], $arguments8['doubleEncode']);

$output0 .= '"
    ></typo3-immediate-action>
';

    return $output0;
}
/**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output13 = '';

$output13 .= '

    <typo3-backend-editable-page-title
        pageTitle="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('localizedPageTitle')]);

$output13 .= '"
        pageId="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId')]);

$output13 .= '"
        localizedPageId="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('localizedPageId')]);

$output13 .= '"
        ';
// Rendering TernaryExpression node
$array14 = array (
  0 => '{isPageEditable ? \'editable\' : \'\'}',
  1 => '{isPageEditable ? \'editable\' : \'\'}',
);
$ternaryExpression15 = function($context, $renderingContext) {
    $check = 'isPageEditable';
    $parser = new \TYPO3Fluid\Fluid\Core\Parser\BooleanParser();
    $checkResult = $parser->evaluate($check, $context);
    if ($checkResult) {
        return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'editable\'', $renderingContext);
    }
    return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'\'', $renderingContext);
};

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$ternaryExpression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::gatherContext($renderingContext, $array14[1]), $renderingContext)]);

$output13 .= '
    >
        ';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('localizedPageTitle')]);

$output13 .= '
    </typo3-backend-editable-page-title>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('infoBox.message');
};

$arguments22 = [
'value' => NULL,
];

$output21 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output21 .= '
        ';
return $output21;
};

$arguments19 = [
'message' => NULL,
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'state' => $renderingContext->getVariableProvider()->getByPath('infoBox.state'),
];
$renderChildrenClosure20 = ($arguments19['message'] !== null) ? function() use ($arguments19) { return $arguments19['message']; } : $renderChildrenClosure20;
$output18 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20);

$output18 .= '
    ';
return $output18;
};

$arguments16 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('infoBoxes'),
'as' => 'infoBox',
];

$output13 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output13 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('eventContentHtmlTop');
};

$arguments24 = [
'value' => NULL,
];

$output13 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output13 .= '

    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$array28 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$arguments26 = [
'referenceType' => 'absolute',
'route' => 'web_layout',
'parameters' => $array28,
];

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27)]);

$output13 .= '" id="PageLayoutController" method="post">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mainContentHtml');
};

$arguments29 = [
'value' => NULL,
];

$output13 .= isset($arguments29['value']) ? $arguments29['value'] : $renderChildrenClosure30();

$output13 .= '
    </form>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('eventContentHtmlBottom');
};

$arguments31 = [
'value' => NULL,
];

$output13 .= isset($arguments31['value']) ? $arguments31['value'] : $renderChildrenClosure32();

$output13 .= '

';

    return $output13;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output33 = '';

$output33 .= '

';

$output33 .= '';

$output33 .= '

';

$output33 .= '';

$output33 .= '

';

$output33 .= '';

$output33 .= '


';

    return $output33;
}

}

#