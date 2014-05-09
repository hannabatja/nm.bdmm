<?php

/**
 * Serias form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SeriasForm extends BaseSeriasForm
{
    public function configure()
    {
        # WIDGETS
        $this->widgetSchema['title'] 	     = new sfWidgetFormInputText(array(), array());
        $this->widgetSchema['image']       = new sfWidgetFormInputFile(array(), array());
        $choices = GlobalTools::getArray('type');
      	$this->widgetSchema['type']        = new sfWidgetFormChoice(array('choices'=>$choices), array());
      	$this->widgetSchema['summary']     = new sfWidgetFormTextarea(array(), array());
      	$this->widgetSchema['body']        = new sfWidgetFormTextarea(array(), array());
      	  	
      	# VALIDATORS
      	$this->validatorSchema['title']    = new sfValidatorString(array(), array());
      	$this->validatorSchema['image']    = new sfValidatorFile($this->getFileAttrs('serias'), $this->getFileOpts());
      	
      	$this->validatorSchema['type']     = new sfValidatorPass();
      	$this->validatorSchema['summary']  = new sfValidatorPass();
      	$this->validatorSchema['body']     = new sfValidatorPass();
    }
}
