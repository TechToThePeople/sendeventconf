<?php

function sendeventconf_civicrm_buildForm( $formName, &$form ) {
  if ("CRM_Event_Form_Participant" !=  $formName) {
    return;
  }
  $defaults['send_receipt'] = false;
  $form->setDefaults($defaults);
}
