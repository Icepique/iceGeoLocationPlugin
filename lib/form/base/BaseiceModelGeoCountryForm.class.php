<?php

/**
 * iceModelGeoCountry form base class.
 *
 * @method iceModelGeoCountry getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoCountryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'name'      => new sfWidgetFormInputText(),
      'slug'      => new sfWidgetFormInputText(),
      'iso3166'   => new sfWidgetFormInputText(),
      'currency'  => new sfWidgetFormInputText(),
      'latitude'  => new sfWidgetFormInputText(),
      'longitude' => new sfWidgetFormInputText(),
      'zoom'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'      => new sfValidatorString(array('max_length' => 64)),
      'slug'      => new sfValidatorString(array('max_length' => 64)),
      'iso3166'   => new sfValidatorString(array('max_length' => 2)),
      'currency'  => new sfValidatorString(array('max_length' => 3)),
      'latitude'  => new sfValidatorNumber(array('required' => false)),
      'longitude' => new sfValidatorNumber(array('required' => false)),
      'zoom'      => new sfValidatorInteger(array('min' => -32768, 'max' => 32767, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelGeoCountry', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('ice_model_geo_country[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoCountry';
  }


}
