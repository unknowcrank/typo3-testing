<?php
class Default_action_Backend_Main_8dae721c4db19a09 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/java-script-module-import-event-handler.js',
'1' => 'bootstrap',
'2' => '@typo3/backend/module/router.js',
'3' => '@typo3/backend/module-menu.js',
'4' => '@typo3/backend/storage/module-state-storage.js',
'5' => '@typo3/backend/toolbar.js',
'6' => '@typo3/backend/notification.js',
'7' => '@typo3/backend/modal.js',
'8' => '@typo3/backend/info-window.js',
'9' => '@typo3/backend/viewport/resizable-navigation.js',
'10' => '@typo3/backend/context-menu.js',
'11' => '@typo3/backend/global-event-handler.js',
'12' => '@typo3/backend/action-dispatcher.js',
'13' => '@typo3/backend/element/immediate-action-element.js',
'14' => '@typo3/backend/toolbar/live-search.js',
'15' => '@typo3/backend/live-search/element/backend-search.js',
'16' => '@typo3/backend/drag-tooltip.js',
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

<div class="scaffold';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array5 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('modulesCollapsed'),
'2' => ' && ',
'3' => $renderingContext->getVariableProvider()->getByPath('modules'),
];

$expression6 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};

$arguments4 = [
'then' => ' scaffold-modulemenu-expanded',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression6(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments4, $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('isInWorkspace'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => ' scaffold-in-workspace',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments7, $renderingContext)
;

$output0 .= ' t3js-scaffold">
    <div class="scaffold-header t3js-scaffold-header">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Backend/Topbar',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11);

$output0 .= '
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hasModules'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
        <div class="scaffold-modulemenu t3js-scaffold-modulemenu">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$array18 = [
'modules' => $renderingContext->getVariableProvider()->getByPath('modules'),
'modulesInformation' => $renderingContext->getVariableProvider()->getByPath('modulesInformation'),
];

$arguments16 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Backend/ModuleMenu',
'arguments' => $array18,
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output15 .= '
        </div>
    ';
return $output15;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments12, $renderingContext)
;

$output0 .= '
    <div class="scaffold-content t3js-scaffold-content ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('hasModules'),
];

$expression21 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments19 = [
'then' => 'scaffold-no-modules',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments19, $renderingContext)
;

$output0 .= '">
        <div class="scaffold-content-navigation t3js-scaffold-content-navigation"></div>
        <typo3-backend-navigation-switcher
            parent=".t3js-scaffold"
            navigation=".t3js-scaffold-content-navigation"
            minimum-width="300"
            persistence-identifier="navigation.width"
        ></typo3-backend-navigation-switcher>
        <div class="scaffold-content-module t3js-scaffold-content-module">
            <typo3-backend-module-router
                module="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startupModule.0')]);

$output0 .= '"
                endpoint="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startupModule.1')]);

$output0 .= '"
                state-tracker="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('stateTracker')]);

$output0 .= '"
                sitename="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sitename')]);

$output0 .= '"
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sitenameFirstInBackendTitle'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'then' => 'sitename-first',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments22, $renderingContext)
;

$output0 .= '
                entry-point="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('entryPoint')]);

$output0 .= '"
                install-tool-path="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('installToolPath')]);

$output0 .= '"
            ></typo3-backend-module-router>
        </div>
        <div class="scaffold-content-overlay t3js-scaffold-content-overlay"></div>
    </div>
</div>

<typo3-backend-drag-tooltip></typo3-backend-drag-tooltip>
<typo3-backend-context-menu></typo3-backend-context-menu>


';

    return $output0;
}

}

#