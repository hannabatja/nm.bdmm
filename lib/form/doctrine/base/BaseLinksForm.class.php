<?php

/**
 * Links form base class.
 *
 * @method Links getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLinksForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'serias_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Serias'), 'add_empty' => false)),
      'link'        => new sfWidgetFormTextarea(),
      'route'       => new sfWidgetFormTextarea(),
      'season'      => new sfWidgetFormInputText(),
      'episode'     => new sfWidgetFormInputText(),
      'sort'        => new sfWidgetFormInputText(),
      'nb_views'    => new sfWidgetFormInputText(),
      'is_active'   => new sfWidgetFormInputText(),
      'is_featured' => new sfWidgetFormInputText(),
      'created_aid' => new sfWidgetFormInputText(),
      'updated_aid' => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'serias_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Serias'))),
      'link'        => new sfValidatorString(array('max_length' => 5000)),
      'route'       => new sfValidatorString(array('max_length' => 500)),
      'season'      => new sfValidatorInteger(),
      'episode'     => new sfValidatorInteger(),
      'sort'        => new sfValidatorInteger(),
      'nb_views'    => new sfValidatorInteger(),
      'is_active'   => new sfValidatorInteger(),
      'is_featured' => new sfValidatorInteger(),
      'created_aid' => new sfValidatorInteger(),
      'updated_aid' => new sfValidatorInteger(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('links[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Links';
  }

}