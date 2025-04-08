<?php
class partial_Header_Header_c97096e0b93310f4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('header'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output37 = '';

$output37 .= '
            <h1 class="';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output37 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments38 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output37 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output37 .= '
            </h1>
        ';
return $output37;
};

$arguments35 = [
'value' => 1,
];

$output34 .= '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
            <h2 class="';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output42 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments43 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output42 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments43, $renderingContext, $renderChildrenClosure44);

$output42 .= '
            </h2>
        ';
return $output42;
};

$arguments40 = [
'value' => 2,
];

$output34 .= '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
$output47 = '';

$output47 .= '
            <h3 class="';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output47 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments48 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output47 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments48, $renderingContext, $renderChildrenClosure49);

$output47 .= '
            </h3>
        ';
return $output47;
};

$arguments45 = [
'value' => 3,
];

$output34 .= '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output52 = '';

$output52 .= '
            <h4 class="';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output52 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments53 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output52 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments53, $renderingContext, $renderChildrenClosure54);

$output52 .= '
            </h4>
        ';
return $output52;
};

$arguments50 = [
'value' => 4,
];

$output34 .= '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output57 = '';

$output57 .= '
            <h5 class="';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output57 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments58 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output57 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments58, $renderingContext, $renderChildrenClosure59);

$output57 .= '
            </h5>
        ';
return $output57;
};

$arguments55 = [
'value' => 5,
];

$output34 .= '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
$output62 = '';

$output62 .= '
            <h6 class="';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output62 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments63 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output62 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments63, $renderingContext, $renderChildrenClosure64);

$output62 .= '
            </h6>
        ';
return $output62;
};

$arguments60 = [
'value' => 6,
];

$output34 .= '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
$output67 = '';

$output67 .= '
            ';

$output67 .= '';

$output67 .= '';

$output67 .= '';

$output67 .= '
        ';
return $output67;
};

$arguments65 = [
'value' => 100,
];

$output34 .= '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
$output70 = '';

$output70 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array72 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments71 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression73(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output74 = '';

$output74 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$array77 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'link' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$arguments75 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Header',
'arguments' => $array77,
];

$output74 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments75, $renderingContext, $renderChildrenClosure76);

$output74 .= '
            ';
return $output74;
},
];

$output70 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments71, $renderingContext)
;

$output70 .= '
        ';
return $output70;
};

$arguments68 = [
];

$output34 .= '';

$output34 .= '
    ';
return $output34;
};

$arguments5 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('layout'),
];

$output4 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 1;
}): return call_user_func(function() use ($renderingContext) {
$output7 = '';

$output7 .= '
            <h1 class="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output7 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments8 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output7 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments8, $renderingContext, $renderChildrenClosure9);

$output7 .= '
            </h1>
        ';
return $output7;
});
case call_user_func(function() use ($renderingContext) {

return 2;
}): return call_user_func(function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            <h2 class="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output10 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments11 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output10 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments11, $renderingContext, $renderChildrenClosure12);

$output10 .= '
            </h2>
        ';
return $output10;
});
case call_user_func(function() use ($renderingContext) {

return 3;
}): return call_user_func(function() use ($renderingContext) {
$output13 = '';

$output13 .= '
            <h3 class="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output13 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments14 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output13 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15);

$output13 .= '
            </h3>
        ';
return $output13;
});
case call_user_func(function() use ($renderingContext) {

return 4;
}): return call_user_func(function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <h4 class="';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output16 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments17 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output16 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments17, $renderingContext, $renderChildrenClosure18);

$output16 .= '
            </h4>
        ';
return $output16;
});
case call_user_func(function() use ($renderingContext) {

return 5;
}): return call_user_func(function() use ($renderingContext) {
$output19 = '';

$output19 .= '
            <h5 class="';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output19 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments20 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output19 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21);

$output19 .= '
            </h5>
        ';
return $output19;
});
case call_user_func(function() use ($renderingContext) {

return 6;
}): return call_user_func(function() use ($renderingContext) {
$output22 = '';

$output22 .= '
            <h6 class="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output22 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments23 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output22 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::class, $arguments23, $renderingContext, $renderChildrenClosure24);

$output22 .= '
            </h6>
        ';
return $output22;
});
case call_user_func(function() use ($renderingContext) {

return 100;
}): return call_user_func(function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            ';

$output25 .= '';

$output25 .= '';

$output25 .= '';

$output25 .= '
        ';
return $output25;
});
default: return call_user_func(function() use ($renderingContext) {
$output26 = '';

$output26 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
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
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$array33 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'link' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$arguments31 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Header',
'arguments' => $array33,
];

$output30 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32);

$output30 .= '
            ';
return $output30;
},
];

$output26 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments27, $renderingContext)
;

$output26 .= '
        ';
return $output26;
});
}
}, array($arguments5));

$output4 .= '
';
return $output4;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments1, $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#