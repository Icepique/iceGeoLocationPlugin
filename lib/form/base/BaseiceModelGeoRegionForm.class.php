<?php

/**
 * iceModelGeoRegion form base class.
 *
 * @method iceModelGeoRegion getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoRegionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name_cyrillic' => new sfWidgetFormInputText(),
      'name_latin'    => new sfWidgetFormInputText(),
      'slug_cyrillic' => new sfWidgetFormInputText(),
      'slug_latin'    => new sfWidgetFormInputText(),
      'coords'        => new sfWidgetFormTextarea(),
      'latitude'      => new sfWidgetFormInputText(),
      'longitude'     => new sfWidgetFormInputText(),
      'zoom'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name_cyrillic' => new sfValidatorString(array('max_length' => 64)),
      'name_latin'    => new sfValidatorString(array('max_length' => 64)),
      'slug_cyrillic' => new sfValidatorString(array('max_length' => 64)),
      'slug_latin'    => new sfValidatorString(array('max_length' => 64)),
      'coords'        => new sfValidatorString(),
      'latitude'      => new sfValidatorNumber(array('required' => false)),
      'longitude'     => new sfValidatorNumber(array('required' => false)),
      'zoom'          => new sfValidatorInteger(array('min' => -32768, 'max' => 32767, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'iceModelGeoRegion', 'column' => array('slug_cyrillic'))),
        new sfValidatorPropelUnique(array('model' => 'iceModelGeoRegion', 'column' => array('slug_latin'))),
      ))
    );

    $this->widgetSchema->setNameFormat('ice_model_geo_region[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoRegion';
  }


}
