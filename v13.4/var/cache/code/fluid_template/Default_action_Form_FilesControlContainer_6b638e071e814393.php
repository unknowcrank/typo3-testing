<?php
class Default_action_Form_FilesControlContainer_6b638e071e814393 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<typo3-formengine-container-files identifier="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formFieldIdentifier')]);

$output0 .= '">
    <div ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('formGroupAttributes');
};

$arguments1 = [
'value' => NULL,
];

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fieldInformation');
};

$arguments3 = [
'value' => NULL,
];

$output0 .= isset($arguments3['value']) ? $arguments3['value'] : $renderChildrenClosure4();

$output0 .= '
        <div class="form-group t3js-formengine-validation-marker">
            <div class="form-control-wrap t3js-file-controls">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fileSelector');
};

$arguments8 = [
'value' => NULL,
];

$output7 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output7 .= '
                ';
return $output7;
};

$arguments5 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('fileSelectors'),
'as' => 'fileSelector',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6);

$output0 .= '
            </div>
            <div class="form-text">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('allowedFileExtensions'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                        ';
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
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.allowedFileExtensions',
];

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15)]);

$output13 .= '<br>
                        <ul class="badge-list">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                                <li><span class="badge badge-success">';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allowedFileExtension')]);

$output18 .= '</span></li>
                            ';
return $output18;
};

$arguments16 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('allowedFileExtensions'),
'as' => 'allowedFileExtension',
];

$output13 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output13 .= '
                        </ul>
                    ';
return $output13;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('disallowedFileExtensions'),
];

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.disallowedFileExtensions',
];

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23)]);

$output21 .= '<br>
                        <ul class="badge-list">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                                <li><span class="badge badge-danger">';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disallowedFileExtension')]);

$output26 .= '</span></li>
                            ';
return $output26;
};

$arguments24 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('disallowedFileExtensions'),
'as' => 'disallowedFileExtension',
];

$output21 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25);

$output21 .= '
                        </ul>
                    ';
return $output21;
}
    ],
],
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments10, $renderingContext)
;

$output0 .= '
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showAllLocalizationLink'),
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
            <button type="button" class="btn btn-default t3js-synchronizelocalize-button" data-type="localize" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:localizeAllRecords',
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32)]);

$output30 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-document-localize',
'size' => 'small',
];

$output30 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments33, $renderingContext, $renderChildrenClosure34);

$output30 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:localizeAllRecords',
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36)]);

$output30 .= '
            </button>
        ';
return $output30;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments27, $renderingContext)
;

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showSynchronizationLink'),
];

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
            <button type="button" class="btn btn-default t3js-synchronizelocalize-button" data-type="synchronize" title="';
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
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:synchronizeWithOriginalLanguage',
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments41, $renderingContext, $renderChildrenClosure42)]);

$output40 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-document-synchronize',
'size' => 'small',
];

$output40 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44);

$output40 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:synchronizeWithOriginalLanguage',
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46)]);

$output40 .= '
            </button>
        ';
return $output40;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments37, $renderingContext)
;

$output0 .= '
        <div class="panel-group panel-hover ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showAllLocalizationLink'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('showSynchronizationLink'),
];

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments47 = [
'then' => 'mt-3',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments47, $renderingContext)
;

$output0 .= '" id="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileReferences.id')]);

$output0 .= '" data-title="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileReferences.title')]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fileReferences.records');
};

$arguments50 = [
'value' => NULL,
];

$output0 .= isset($arguments50['value']) ? $arguments50['value'] : $renderChildrenClosure51();

$output0 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fieldWizard');
};

$arguments52 = [
'value' => NULL,
];

$output0 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array55 = [
'0' => $renderingContext->getVariableProvider()->getByPath('customControls'),
];

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments54 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression56(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output57 = '';

$output57 .= '
            <div id="';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('customControls.id')]);

$output57 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('customControls.controls');
};

$arguments58 = [
'value' => NULL,
];

$output57 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output57 .= '
            </div>
        ';
return $output57;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments54, $renderingContext)
;

$output0 .= '
        <input type="hidden" class="inlineRecord" name="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formFieldName')]);

$output0 .= '" value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortableRecordUids')]);

$output0 .= '" data-formengine-validation-rules="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationRules')]);

$output0 .= '" />
    </div>
</typo3-formengine-container-files>

';

    return $output0;
}

}

#