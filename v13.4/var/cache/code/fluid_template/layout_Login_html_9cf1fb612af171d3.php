<?php
class layout_Login_html_9cf1fb612af171d3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'backend' => 
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

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => 'bootstrap',
'1' => '@typo3/backend/login.js',
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

<div class="typo3-login">
    <div class="typo3-login-inner">
        <div class="typo3-login-container">
            <div class="typo3-login-wrap">
                <div class="card card-login">
                    <header class="card-heading">
                        <h1 class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.header',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5)]);

$output0 .= '</h1>
                        <div class="typo3-login-logo">';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LoginLogoViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\LoginLogoViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output0 .= '</div>
                    </header>
                    <main class="card-body">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('action'),
'1' => ' == \'login\'',
];

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'login');};

$arguments8 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hasLoginError'),
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
                                    <div class="t3js-login-error mb-2" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <div class="alert-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.message',
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17)]);

$output15 .= '</div>
                                            <div class="alert-message">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.description',
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19)]);

$output15 .= '</div>
                                        </div>
                                    </div>
                                ';
return $output15;
},
];

$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments12, $renderingContext)
;

$output11 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};
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
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.javascript',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_ERROR',
];

$arguments20 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments22, $renderingContext, $renderChildrenClosure23)]),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25),
];
$renderChildrenClosure21 = ($arguments20['message'] !== null) ? function() use ($arguments20) { return $arguments20['message']; } : $renderChildrenClosure21;
$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21);

$output11 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.cookies',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_ERROR',
];

$arguments26 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29)]),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments30, $renderingContext, $renderChildrenClosure31),
];
$renderChildrenClosure27 = ($arguments26['message'] !== null) ? function() use ($arguments26) { return $arguments26['message']; } : $renderChildrenClosure27;
$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments26, $renderingContext, $renderChildrenClosure27);

$output11 .= '
                                </div>
                                <div class="hidden t3js-login-error-noreferrer">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.error.referrer',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_ERROR',
];

$arguments32 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments34, $renderingContext, $renderChildrenClosure35)]),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments36, $renderingContext, $renderChildrenClosure37),
];
$renderChildrenClosure33 = ($arguments32['message'] !== null) ? function() use ($arguments32) { return $arguments32['message']; } : $renderChildrenClosure33;
$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output11 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl')]);

$output11 .= '" method="post" name="loginform" id="typo3-login-form" spellcheck="false">
                                        <input type="hidden" name="login_status" value="login" />
                                        <input type="hidden" name="userident" id="t3-field-userident" class="t3js-login-userident-field" value="" />
                                        <input type="hidden" name="redirect_url" value="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirectUrl')]);

$output11 .= '" />
                                        <input type="hidden" name="loginRefresh" value="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginRefresh')]);

$output11 .= '" />
                                        <input type="hidden" name="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('requestTokenName')]);

$output11 .= '" value="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('requestTokenValue')]);

$output11 .= '" />

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'loginFormFields',
];

$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output11 .= '

                                        <div class="form-group d-grid mb-2" id="t3-login-submit-section">
                                            <button
                                                class="btn btn-login d-block t3js-login-submit"
                                                id="t3-login-submit"
                                                type="submit"
                                                name="commandLI"
                                                data-loading-text="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'spinner-circle',
'size' => 'small',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44);
};

$arguments40 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value42 = ($arguments40['value'] !== null ? $arguments40['value'] : $renderChildrenClosure41());

$output11 .= !is_string($value42) && !(is_object($value42) && method_exists($value42, '__toString')) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments40['encoding'], $arguments40['doubleEncode']);

$output11 .= ' ';
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
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.process',
];

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46)]);

$output11 .= '"
                                                autocomplete="off"
                                            >
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.submit',
];

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments47, $renderingContext, $renderChildrenClosure48)]);

$output11 .= '
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array50 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enablePasswordReset'),
];

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments49 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression51(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$array55 = [
'0' => 'true',
];

$expression56 = function($context) {return TRUE;};

$arguments53 = [
'partial' => NULL,
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'ResetPassword',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression56(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)),
    $renderingContext
),
];

$output52 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments53, $renderingContext, $renderChildrenClosure54);

$output52 .= '
                                ';
return $output52;
},
];

$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments49, $renderingContext)
;

$output11 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('loginProviders');
};

$arguments59 = [
'subject' => NULL,
];
$renderChildrenClosure60 = ($arguments59['subject'] !== null) ? function() use ($arguments59) { return $arguments59['subject']; } : $renderChildrenClosure60;
$array58 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments59, $renderingContext, $renderChildrenClosure60),
'1' => ' > 1',
];

$expression61 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments57 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.navigation.loginProvider',
];

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments63, $renderingContext, $renderChildrenClosure64)]);

$output62 .= '">
                                        ';

$output62 .= '';

$output62 .= '';

$output62 .= '';

$output62 .= '
                                        <ul class="list-unstyled typo3-login-links" role="list">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
$output67 = '';

$output67 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array69 = [
'0' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
];

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments68 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression70(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output71 = '';

$output71 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array73 = [
'0' => $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier'),
'1' => ' != ',
'2' => $renderingContext->getVariableProvider()->getByPath('providerKey'),
];

$expression74 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments72 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression74(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey')]);

$output75 .= '">
                                                            <a href="?loginProvider=';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey')]);

$output75 .= '">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier'),
'size' => 'small',
];

$output75 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments76, $renderingContext, $renderChildrenClosure77);

$output75 .= '
                                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};

$arguments78 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
'default' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
];

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments78, $renderingContext, $renderChildrenClosure79)]);

$output75 .= '</span>
                                                            </a>
                                                        </li>
                                                    ';
return $output75;
},
];

$output71 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments72, $renderingContext)
;

$output71 .= '
                                                ';
return $output71;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments68, $renderingContext)
;

$output67 .= '
                                            ';
return $output67;
};

$arguments65 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('loginProviders'),
'as' => 'provider',
'key' => 'providerKey',
];

$output62 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments65, $renderingContext, $renderChildrenClosure66);

$output62 .= '
                                        </ul>
                                    </nav>
                                ';
return $output62;
},
];

$output11 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments57, $renderingContext)
;

$output11 .= '
                            ';
return $output11;
},
'__else' => function() use ($renderingContext) {
$output85 = '';

$output85 .= '
                                <form action="';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl')]);

$output85 .= '" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return NULL;
};

$arguments86 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.username',
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments86, $renderingContext, $renderChildrenClosure87)]);

$output85 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username')]);

$output85 .= '
                                                </div>
                                            </div>
                                            <input type="hidden" name="p_field" value="" />
                                            <div class="d-grid">
                                                <input
                                                    class="btn d-block btn-lg"
                                                    type="submit"
                                                    name="commandLO"
                                                    value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
return NULL;
};

$arguments88 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.submit',
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments88, $renderingContext, $renderChildrenClosure89)]);

$output85 .= '"
                                                    id="t3-login-submit"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            ';
return $output85;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array80 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enablePasswordReset'),
];

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression81(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};

$arguments83 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'ResetPassword',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output82 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments83, $renderingContext, $renderChildrenClosure84);

$output82 .= '
                            ';
return $output82;
}
    ],
],
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments8, $renderingContext)
;

$output0 .= '
                    </main>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return NULL;
};

$arguments90 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Login/LoginNews',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments90, $renderingContext, $renderChildrenClosure91);

$output0 .= '
                    <footer class="card-footer">
                        <div class="typo3-login-copyright-wrap">
                            <button
                                type="button"
                                class="typo3-login-copyright-link t3js-login-copyright-link collapsed"
                                data-bs-target="#loginCopyright"
                                data-bs-toggle="collapse"
                                aria-expanded="false"
                                aria-controls="loginCopyright"
                            >
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
return NULL;
};

$arguments92 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.copyrightLink',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments92, $renderingContext, $renderChildrenClosure93)]);

$output0 .= '</span>
                                ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
                                <svg viewBox="0 0 150 42" width="70" height="20" aria-hidden="true">
                                    <path fill="currentColor" d="M60.2,14.4v27h-3.8v-27h-6.7v-3.3h17.1v3.3H60.2z M80.4,27.3v14h-3.9v-14l-7.7-16.2h4.1l5.7,12.2l5.7-12.2h3.9L80.4,27.3z   M99.9,29.9h-3.6v11.4h-3.8V11.1c0,0,3.7-0.3,7.3-0.3c6.6,0,8.5,4.1,8.5,9.4C108.3,26.7,106,29.9,99.9,29.9 M100.3,13.9  c-2.4,0-4.1,0.3-4.1,0.3v12.6h4.1c2.4,0,4.1-1.6,4.1-6.3C104.4,16.1,103.4,13.9,100.3,13.9 M121.8,41.6c-7.1,0-9-5.2-9-15.8  c0-10.2,1.9-15.1,9-15.1s9,4.9,9,15.1C130.9,36.4,129,41.6,121.8,41.6 M121.8,13.9c-3.9,0-5.2,2.6-5.2,12.1c0,9.3,1.3,12.4,5.2,12.4  c3.9,0,5.2-3.1,5.2-12.4C127,16.6,125.7,13.9,121.8,13.9 M141.7,41.6c-2.1,0-5.3-0.6-5.7-0.7v-3.1c1,0.2,3.7,0.7,5.6,0.7  c2.2,0,3.6-1.9,3.6-5.2c0-3.9-0.6-6-3.7-6H138V24h3.1c3.5,0,3.7-3.6,3.7-5.3c0-3.4-1.1-4.8-3.2-4.8c-1.9,0-4.1,0.5-5.3,0.7v-3.2  c0.5-0.1,3-0.7,5.2-0.7c4.4,0,7,1.9,7,8.3c0,2.9-1,5.5-3.3,6.3c2.6,0.2,3.8,3.1,3.8,7.3C149,39.2,146.5,41.6,141.7,41.6"></path>
                                    <path class="highlight" fill="#FF8700" d="M31.7,28.8c-0.6,0.2-1.1,0.2-1.7,0.2c-5.2,0-12.9-18.2-12.9-24.3c0-2.2,0.5-3,1.3-3.6  C12,1.9,4.3,4.2,1.9,7.2C1.3,8,1,9.1,1,10.6c0,9.5,10.1,31,17.3,31C21.6,41.6,27.1,36.2,31.7,28.8"></path>
                                    <path class="highlight" fill="#FF8700" d="M28.4,0.5c6.6,0,13.2,1.1,13.2,4.8c0,7.6-4.8,16.7-7.2,16.7C30,22,24.5,9.9,24.5,3.8  C24.5,1,25.6,0.5,28.4,0.5"></path>
                                </svg>
                            </button>
                            <div id="loginCopyright" class="collapse">
                                <div class="typo3-login-copyright-text">
                                    <p>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('copyright');
};

$arguments94 = [
'value' => NULL,
];

$output0 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output0 .= '
                                    </p>
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};

$arguments96 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.navigation.typo3',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments96, $renderingContext, $renderChildrenClosure97)]);

$output0 .= '">
                                        ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
                                        <ul class="list-unstyled" role="list">
                                            <li><a href="https://typo3.org" target="_blank" rel="noreferrer" class="t3-login-link-typo3">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
return NULL;
};

$arguments98 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-window-open',
'size' => 'small',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments98, $renderingContext, $renderChildrenClosure99);

$output0 .= ' TYPO3.org</a></li>
                                            <li>
                                                <a href="https://typo3.org/donate/online-donation/" target="_blank" rel="noreferrer" class="t3-login-link-donate">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
return NULL;
};

$arguments100 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-window-open',
'size' => 'small',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments100, $renderingContext, $renderChildrenClosure101);

$output0 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
return NULL;
};

$arguments102 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.donate',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments102, $renderingContext, $renderChildrenClosure103)]);

$output0 .= '
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array105 = [
'0' => $renderingContext->getVariableProvider()->getByPath('loginFootnote'),
];

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments104 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression106(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output107 = '';

$output107 .= '
            <aside class="typo3-login-footnote" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};

$arguments108 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.region.footnote',
];

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments108, $renderingContext, $renderChildrenClosure109)]);

$output107 .= '">
                <p>';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginFootnote')]);

$output107 .= '</p>
            </aside>
        ';
return $output107;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments104, $renderingContext)
;

$output0 .= '
    </div>
    ';

$output0 .= '';

$output0 .= '';

$output0 .= '';

$output0 .= '
    <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginUrl')]);

$output0 .= '" id="t3js-login-url" data-referrer-check-enabled="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array111 = [
'0' => $renderingContext->getVariableProvider()->getByPath('referrerCheckEnabled'),
];

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments110 = [
'then' => 1,
'else' => 0,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression112(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)),
    $renderingContext
),
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments110, $renderingContext)
;

$output0 .= '" aria-hidden="true" tabindex="-1"></a>
</div>


';

    return $output0;
}

}

#