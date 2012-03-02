<?php

/**
 * iceModelGeoCity filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoCityFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'geo_region_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_cyrillic'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_latin'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug_cyrillic'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug_latin'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitude'       => new sfWidgetFormFilterInput(),
      'longitude'      => new sfWidgetFormFilterInput(),
      'postal_code'    => new sfWidgetFormFilterInput(),
      'telephone_code' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'geo_region_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'type'           => new sfValidatorPass(array('required' => false)),
      'name_cyrillic'  => new sfValidatorPass(array('required' => false)),
      'name_latin'     => new sfValidatorPass(array('required' => false)),
      'slug_cyrillic'  => new sfValidatorPass(array('required' => false)),
      'slug_latin'     => new sfValidatorPass(array('required' => false)),
      'latitude'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitude'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'postal_code'    => new sfValidatorPass(array('required' => false)),
      'telephone_code' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_geo_city_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoCity';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'geo_region_id'  => 'Number',
      'type'           => 'Text',
      'name_cyrillic'  => 'Text',
      'name_latin'     => 'Text',
      'slug_cyrillic'  => 'Text',
      'slug_latin'     => 'Text',
      'latitude'       => 'Number',
      'longitude'      => 'Number',
      'postal_code'    => 'Text',
      'telephone_code' => 'Text',
    );
  }
}
