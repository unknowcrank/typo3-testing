<?php
class Default_action_Form_ImageManipulationElement_98ce10a4fd325959 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

<div class="formengine-field-item t3js-formengine-field-item">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fieldInformation');
};

$arguments1 = [
'value' => NULL,
];

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '

    <div class="form-wizards-wrap">
        <div class="form-wizards-item-element">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('isAllowedFileExtension'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('image.properties.width'),
];

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('config.readOnly'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__else' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                            <div class="form-control-wrap">
                                <input
                                    type="hidden"
                                    id="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id')]);

$output10 .= '"
                                    name="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name')]);

$output10 .= '"
                                    value="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value')]);

$output10 .= '"
                                    data-formengine-validation-rules="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation')]);

$output10 .= '"
                                />
                                <button
                                    class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri')]);

$output10 .= '"
                                    data-payload="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload')]);

$output10 .= '"
                                    data-preview-url="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl')]);

$output10 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Form/ImageManipulationModalTitle',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output10 .= '"
                                    data-image-uid="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid')]);

$output10 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('config.cropVariants');
};

$arguments13 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure14 = ($arguments13['value'] !== null) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14;
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14)]);

$output10 .= '"
                                    data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview',
];

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments15, $renderingContext, $renderChildrenClosure16)]);

$output10 .= '"
                                    data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel',
];

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments17, $renderingContext, $renderChildrenClosure18)]);

$output10 .= '"
                                    data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept',
];

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20)]);

$output10 .= '"
                                    data-file-field="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field')]);

$output10 .= '"
                                    data-field="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id')]);

$output10 .= '"
                                >
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-crop',
'size' => 'small',
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output10 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor',
];

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24)]);

$output10 .= '
                                </button>
                            </div>
                        ';
return $output10;
},
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments7, $renderingContext)
;

$output6 .= '
                    <div class="row media-gallery__list mt-2">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                            <div class="col-6 col-sm-4 col-md-3 media-gallery__item">
                                <p>
                                    <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'key' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('cropVariant.title'),
'default' => $renderingContext->getVariableProvider()->getByPath('cropVariant.title'),
];

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29)]);

$output27 .= '</b><br/>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio',
];

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35)]);

$output33 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id')]);

$output33 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'key' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title'),
'default' => $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title'),
];

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments36, $renderingContext, $renderChildrenClosure37)]);

$output33 .= '</span>
                                    ';
return $output33;
},
];

$output27 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments30, $renderingContext)
;

$output27 .= '
                                </p>
                                <div
                                    class="t3js-image-manipulation-preview media-object"
                                    data-preview-height="150"
                                    data-crop-variant-id="';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id')]);

$output27 .= '"
                                >
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('cropVariant');
};

$arguments41 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure42 = ($arguments41['value'] !== null) ? function() use ($arguments41) { return $arguments41['value']; } : $renderChildrenClosure42;
$array40 = [
'data-crop-variant' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper::class, $arguments41, $renderingContext, $renderChildrenClosure42),
'data-crop-variant-id' => $renderingContext->getVariableProvider()->getByPath('cropVariant.id'),
];

$arguments38 = [
'data' => NULL,
'aria' => NULL,
'src' => '',
'treatIdAsReference' => false,
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'absolute' => false,
'base64' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('image'),
'crop' => $renderingContext->getVariableProvider()->getByPath('formEngine.field.value'),
'cropVariant' => $renderingContext->getVariableProvider()->getByPath('cropVariant.id'),
'maxHeight' => 150,
'additionalAttributes' => $array40,
'class' => 'thumbnail thumbnail-status',
'loading' => 'lazy',
];

$output27 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output27 .= '
                                </div>
                            </div>
                        ';
return $output27;
};

$arguments25 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('config.cropVariants'),
'as' => 'cropVariant',
];

$output6 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments25, $renderingContext, $renderChildrenClosure26);

$output6 .= '
                    </div>
                ';
return $output6;
},
'__else' => function() use ($renderingContext) {
$output43 = '';

$output43 .= '
                    <div class="media-body">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array45 = [
'0' => $renderingContext->getVariableProvider()->getByPath('image.properties.width'),
];

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments44 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression46(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output47 = '';

$output47 .= '
                            <p>
                                <em>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message',
];

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments48, $renderingContext, $renderChildrenClosure49)]);

$output47 .= '<br/>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions');
};

$arguments50 = [
'value' => NULL,
'mode' => 'upper',
];

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper::class, $arguments50, $renderingContext, $renderChildrenClosure51)]);

$output47 .= '
                                </em>
                            </p>
                        ';
return $output47;
},
'__else' => function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                            <div class="alert alert-info">
                                <h4>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions',
];

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments53, $renderingContext, $renderChildrenClosure54)]);

$output52 .= '
                                </h4>
                                <p>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message',
];

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments55, $renderingContext, $renderChildrenClosure56)]);

$output52 .= '
                                </p>
                            </div>
                        ';
return $output52;
},
];

$output43 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments44, $renderingContext)
;

$output43 .= '
                    </div>
                ';
return $output43;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments3, $renderingContext)
;

$output0 .= '
        </div>

        <div class="form-wizards-item-aside form-wizards-item-aside--field-control">
            <div class="btn-group">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fieldControl');
};

$arguments57 = [
'value' => NULL,
];

$output0 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output0 .= '
            </div>
        </div>

        <div class="form-wizards-item-bottom">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('fieldWizard');
};

$arguments59 = [
'value' => NULL,
];

$output0 .= isset($arguments59['value']) ? $arguments59['value'] : $renderChildrenClosure60();

$output0 .= '
        </div>
    </div>

</div>


';

    return $output0;
}

}

#