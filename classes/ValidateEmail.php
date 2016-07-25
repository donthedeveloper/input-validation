<?php

class ValidateInput {
  
  // returns array of passed(true) & failed(false) inputs
  public function checkEmptyInput($inputArray, $requiredArray) {
    
    $validatedInputs = array();
    
    foreach($inputArray as $inputName => $inputValue) {
      // if the current input being looped through is required
      if ($requiredArray[$inputName]) {
        if ( empty($inputValue) ) {
          $validatedInputs[$inputName] = false;
        }
        else {
          $validatedInputs[$inputName] = true;
        }
      }
    }
    
    return $validatedInputs;
    
  }
  
}

?>