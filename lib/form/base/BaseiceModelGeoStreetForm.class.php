<?php

/**
 * iceModelGeoStreet form base class.
 *
 * @method iceModelGeoStreet getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoStreetForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'geo_region_id' => new sfWidgetFormInputText(),
      'geo_city_id'   => new sfWidgetFormInputText(),
      'geo_area_id'   => new sfWidgetFormInputText(),
      'name_cyrillic' => new sfWidgetFormInputText(),
      'name_latin'    => new sfWidgetFormInputText(),
      'slug_cyrillic' => new sfWidgetFormInputText(),
      'slug_latin'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'geo_region_id' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'geo_city_id'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'geo_area_id'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'name_cyrillic' => new sfValidatorString(array('max_length' => 64)),
      'name_latin'    => new sfValidatorString(array('max_length' => 64)),
      'slug_cyrillic' => new sfValidatorString(array('max_length' => 64)),
      'slug_latin'    => new sfValidatorString(array('max_length' => 64)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_geo_street[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoStreet';
  }


}
