<?php

/**
 * iceModelGeoRegion filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelGeoRegionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name_cyrillic' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_latin'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug_cyrillic' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug_latin'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coords'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitude'      => new sfWidgetFormFilterInput(),
      'longitude'     => new sfWidgetFormFilterInput(),
      'zoom'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name_cyrillic' => new sfValidatorPass(array('required' => false)),
      'name_latin'    => new sfValidatorPass(array('required' => false)),
      'slug_cyrillic' => new sfValidatorPass(array('required' => false)),
      'slug_latin'    => new sfValidatorPass(array('required' => false)),
      'coords'        => new sfValidatorPass(array('required' => false)),
      'latitude'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitude'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'zoom'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_geo_region_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelGeoRegion';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name_cyrillic' => 'Text',
      'name_latin'    => 'Text',
      'slug_cyrillic' => 'Text',
      'slug_latin'    => 'Text',
      'coords'        => 'Text',
      'latitude'      => 'Number',
      'longitude'     => 'Number',
      'zoom'          => 'Number',
    );
  }
}
