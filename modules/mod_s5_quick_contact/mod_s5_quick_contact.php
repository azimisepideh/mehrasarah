<?php
/**@licenseGNU General Public License version 2 or later; see LICENSE.txtAuthor: Shape 5 - Professional Template CommunityAvailable for download at www.shape5.comCopyright Shape5 LLC*/
// no direct access
defined('_JEXEC') or die('Restricted access');
$s5_qc_spambox_text = $params->get( 'spamtext' );
$s5_qc_pretext = $params->get( 'pretext' );$s5_qc_posttext	= $params->get( 'posttext' );
$s5_qc_email_address = $params->get( 'adminemail' );$s5_qc_email_sender = $params->get( 'emailsender' );
$s5_qc_subject_prefix = $params->get( 'subjectprefix' );
$s5_qc_name_text = $params->get( 'nametext' );
$s5_qc_email_text = $params->get( 'emailtext' );
$s5_qc_subject_text = $params->get( 'subjecttext' );
$s5_qc_subject_type = $params->get( 'subjecttype' );
$s5_qc_button_type = $params->get( 'buttontype' );
$s5_qc_field1_type = $params->get( 'field1type' );
$s5_qc_field1_text = $params->get( 'field1text' );
$s5_qc_field2_type = $params->get( 'field2type' );
$s5_qc_field2_text = $params->get( 'field2text' );
$s5_qc_field3_type = $params->get( 'field3type' );
$s5_qc_field3_text = $params->get( 'field3text' );
$s5_qc_field4_type = $params->get( 'field4type' );
$s5_qc_field4_text = $params->get( 'field4text' );
$s5_qc_field5_type = $params->get( 'field5type' );
$s5_qc_field5_text = $params->get( 'field5text' );
$s5_qc_field6_type = $params->get( 'field6type' );
$s5_qc_field6_text = $params->get( 'field6text' );
$s5_qc_field7_type = $params->get( 'field7type' );
$s5_qc_field7_text = $params->get( 'field7text' );
$s5_qc_field8_type = $params->get( 'field8type' );
$s5_qc_field8_text = $params->get( 'field8text' );
$s5_qc_field9_type = $params->get( 'field9type' );
$s5_qc_field9_text = $params->get( 'field9text' );
$s5_qc_field10_type = $params->get( 'field10type' );
$s5_qc_field10_text = $params->get( 'field10text' );
$s5_qc_is_captcha = $params->get( 'captcha' );
$s5_qc_captcha_error_text = $params->get( 'captcha_error' );
$s5_qc_sendtext = $params->get( 'sendtext' );
$s5_qc_width = $params->get( 'width' );
$s5_qc_height = $params->get( 'height' );
$s5_qc_input_height = $params->get( 'inputheight' );
$s5_qc_select_height = $params->get( 'selectheight' );
$s5_qc_select_width = $params->get( 'selectwidth' );
$s5_qc_border_box = $params->get( 'borderbox', 'no' );
$s5_qc_padding = $params->get( 'padding' );
$s5_qc_margin = $params->get( 'margin' );
$s5_qc_thankyou = $params->get( 'thankyou' );
$s5_qc_thankyou = str_replace('"',"",$s5_qc_thankyou);
$s5_qc_thankyou = str_replace("'","",$s5_qc_thankyou);
$s5_qc_emailerror = $params->get( 'emailerror' );
$s5_qc_emailerror = str_replace('"',"",$s5_qc_emailerror);
$s5_qc_emailerror = str_replace("'","",$s5_qc_emailerror);
$s5_qc_notcomplete = $params->get( 'notcomplete' );
$s5_qc_notcomplete = str_replace('"',"",$s5_qc_notcomplete);
$s5_qc_notcomplete = str_replace("'","",$s5_qc_notcomplete);
$s5_qc_ex1 = $params->get( 'ex1', 's5_qc_null');
$s5_qc_ex2 = $params->get( 'ex2', 's5_qc_null');
$s5_qc_ex3 = $params->get( 'ex3', 's5_qc_null');
$s5_qc_ex4 = $params->get( 'ex4', 's5_qc_null');
$s5_qc_ex5 = $params->get( 'ex5', 's5_qc_null');
$s5_qc_ex6 = $params->get( 'ex6', 's5_qc_null');
$s5_qc_ex7 = $params->get( 'ex7', 's5_qc_null');
$s5_qc_ex8 = $params->get( 'ex8', 's5_qc_null');
$s5_qc_ex9 = $params->get( 'ex9', 's5_qc_null');
$s5_qc_ex10 = $params->get( 'ex10', 's5_qc_null');
$s5_qc_ex11 = $params->get( 'ex11', 's5_qc_null');
$s5_qc_ex12 = $params->get( 'ex12', 's5_qc_null');
$s5_qc_ex13 = $params->get( 'ex13', 's5_qc_null');
$s5_qc_ex14 = $params->get( 'ex14', 's5_qc_null');
$s5_qc_ex15 = $params->get( 'ex15', 's5_qc_null');
$s5_qc_ex16 = $params->get( 'ex16', 's5_qc_null');
$s5_qc_ex17 = $params->get( 'ex17', 's5_qc_null');
$s5_qc_ex18 = $params->get( 'ex18', 's5_qc_null');
$s5_qc_ex19 = $params->get( 'ex19', 's5_qc_null');
$s5_qc_ex20 = $params->get( 'ex20', 's5_qc_null');
$s5_qc_ex21 = $params->get( 'ex21', 's5_qc_null');
$s5_qc_ex22 = $params->get( 'ex22', 's5_qc_null');
$s5_qc_ex23 = $params->get( 'ex23', 's5_qc_null');
$s5_qc_ex24 = $params->get( 'ex24', 's5_qc_null');
$s5_qc_ex25 = $params->get( 'ex25', 's5_qc_null');
$s5_qc_ex26 = $params->get( 'ex26', 's5_qc_null');
$s5_qc_ex27 = $params->get( 'ex27', 's5_qc_null');
$s5_qc_ex28 = $params->get( 'ex28', 's5_qc_null');
$s5_qc_ex29 = $params->get( 'ex29', 's5_qc_null');
$s5_qc_ex30 = $params->get( 'ex30', 's5_qc_null');
require(JModuleHelper::getLayoutPath('mod_s5_quick_contact')); ?>







