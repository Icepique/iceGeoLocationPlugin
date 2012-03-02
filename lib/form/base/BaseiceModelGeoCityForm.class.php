<?php

/**
 * iceModelGeoCity form base class.
 *
 * @method iceModelGeoCity getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoCityForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'geo_region_id'  => new sfWidgetFormInputText(),
      'type'           => new sfWidgetFormInputText(),
      'name_cyrillic'  => new sfWidgetFormInputText(),
      'name_latin'     => new sfWidgetFormInputText(),
      'slug_cyrillic'  => new sfWidgetFormInputText(),
      'slug_latin'     => new sfWidgetFormInputText(),
      'latitude'       => new sfWidgetFormInputText(),
      'longitude'      => new sfWidgetFormInputText(),
      'postal_code'    => new sfWidgetFormInputText(),
      'telephone_code' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'geo_region_id'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'type'           => new sfValidatorString(),
      'name_cyrillic'  => new sfValidatorString(array('max_length' => 64)),
      'name_latin'     => new sfValidatorString(array('max_length' => 64)),
      'slug_cyrillic'  => new sfValidatorString(array('max_length' => 64)),
      'slug_latin'     => new sfValidatorString(array('max_length' => 64)),
      'latitude'       => new sfValidatorNumber(array('required' => false)),
      'longitude'      => new sfValidatorNumber(array('required' => false)),
      'postal_code'    => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'telephone_code' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'iceModelGeoCity', 'column' => array('slug_cyrillic'))),
        new sfValidatorPropelUnique(array('model' => 'iceModelGeoCity', 'column' => array('slug_latin'))),
      ))
    );

    $this->widgetSchema->setNameFormat('ice_model_geo_city[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoCity';
  }


}
