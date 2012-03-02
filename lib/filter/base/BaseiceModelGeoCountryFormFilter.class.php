<?php

/**
 * iceModelGeoCountry filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoCountryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'iso3166'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'currency'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitude'  => new sfWidgetFormFilterInput(),
      'longitude' => new sfWidgetFormFilterInput(),
      'zoom'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'      => new sfValidatorPass(array('required' => false)),
      'slug'      => new sfValidatorPass(array('required' => false)),
      'iso3166'   => new sfValidatorPass(array('required' => false)),
      'currency'  => new sfValidatorPass(array('required' => false)),
      'latitude'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitude' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'zoom'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_geo_country_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoCountry';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'name'      => 'Text',
      'slug'      => 'Text',
      'iso3166'   => 'Text',
      'currency'  => 'Text',
      'latitude'  => 'Number',
      'longitude' => 'Number',
      'zoom'      => 'Number',
    );
  }
}
