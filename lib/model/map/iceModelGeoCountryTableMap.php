<?php



/**
 * This class defines the structure of the 'ice_geo_country' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.map
 */
class iceModelGeoCountryTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceGeoLocationPlugin.lib.model.map.iceModelGeoCountryTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('ice_geo_country');
    $this->setPhpName('iceModelGeoCountry');
    $this->setClassname('iceModelGeoCountry');
    $this->setPackage('plugins.iceGeoLocationPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('NAME', 'Name', 'VARCHAR', true, 64, null);
    $this->getColumn('NAME', false)->setPrimaryString(true);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 64, null);
    $this->addColumn('ISO3166', 'Iso3166', 'CHAR', true, 2, null);
    $this->addColumn('CURRENCY', 'Currency', 'CHAR', true, 3, null);
    $this->addColumn('LATITUDE', 'Latitude', 'FLOAT', false, null, null);
    $this->addColumn('LONGITUDE', 'Longitude', 'FLOAT', false, null, null);
    $this->addColumn('ZOOM', 'Zoom', 'SMALLINT', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
  }

  /**
   * 
   * Gets the list of behaviors registered for this table
   * 
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'ice_model' => array(),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
