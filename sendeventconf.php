<?php

function sendeventconf_civicrm_buildForm( $formName, &$form ) {
  if ("CRM_Event_Form_Participant" == $formName) {
    $defaults = array ("send_receipt" => false);
    $form->setDefaults($defaults);
  }
}

?>
