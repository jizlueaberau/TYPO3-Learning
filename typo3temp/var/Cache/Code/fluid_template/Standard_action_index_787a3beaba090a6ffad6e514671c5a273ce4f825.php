<?php

class Standard_action_index_787a3beaba090a6ffad6e514671c5a273ce4f825 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['partial'] = 'Jumbotron';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['jumbotron'] = $renderingContext->getVariableProvider()->getByPath('jumbotron', $array4);
$arguments1['arguments'] = $array3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('left', $array7);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
        </div>
        <div class="col-md-4">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('main', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output0 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output0 .= '
       </div>
        <div class="col-md-4">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('right', $array13);
};
$arguments11 = array();
$arguments11['value'] = NULL;

$output0 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output0 .= '
        </div>
      </div>

      <hr>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['name'] = 'Default';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output14 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['partial'] = 'Jumbotron';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['jumbotron'] = $renderingContext->getVariableProvider()->getByPath('jumbotron', $array23);
$arguments20['arguments'] = $array22;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('left', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output19 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output19 .= '
        </div>
        <div class="col-md-4">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('main', $array29);
};
$arguments27 = array();
$arguments27['value'] = NULL;

$output19 .= isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();

$output19 .= '
       </div>
        <div class="col-md-4">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array32 = array (
);return $renderingContext->getVariableProvider()->getByPath('right', $array32);
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output19 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output19 .= '
        </div>
      </div>

      <hr>
';
return $output19;
};
$arguments17 = array();
$arguments17['name'] = NULL;
$arguments17['name'] = 'Main';

$output14 .= NULL;

return $output14;
}


}
#