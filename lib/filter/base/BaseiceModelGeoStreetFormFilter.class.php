<?php

/**
 * iceModelGeoStreet filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoStreetFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'geo_region_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'geo_city_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'geo_area_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_cyrillic' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_latin'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug_cyrillic' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug_latin'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'geo_region_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'geo_city_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'geo_area_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name_cyrillic' => new sfValidatorPass(array('required' => false)),
      'name_latin'    => new sfValidatorPass(array('required' => false)),
      'slug_cyrillic' => new sfValidatorPass(array('required' => false)),
      'slug_latin'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_geo_street_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoStreet';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'geo_region_id' => 'Number',
      'geo_city_id'   => 'Number',
      'geo_area_id'   => 'Number',
      'name_cyrillic' => 'Text',
      'name_latin'    => 'Text',
      'slug_cyrillic' => 'Text',
      'slug_latin'    => 'Text',
    );
  }
}
