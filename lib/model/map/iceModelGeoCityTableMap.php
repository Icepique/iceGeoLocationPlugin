<?php



/**
 * This class defines the structure of the 'ice_geo_city' table.
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
class iceModelGeoCityTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceGeoLocationPlugin.lib.model.map.iceModelGeoCityTableMap';

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
    $this->setName('ice_geo_city');
    $this->setPhpName('iceModelGeoCity');
    $this->setClassname('iceModelGeoCity');
    $this->setPackage('plugins.iceGeoLocationPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('GEO_REGION_ID', 'GeoRegionId', 'INTEGER', true, null, null);
    $this->addColumn('TYPE', 'Type', 'CHAR', true, null, 'village');
    $this->addColumn('NAME_CYRILLIC', 'NameCyrillic', 'VARCHAR', true, 64, null);
    $this->getColumn('NAME_CYRILLIC', false)->setPrimaryString(true);
    $this->addColumn('NAME_LATIN', 'NameLatin', 'VARCHAR', true, 64, null);
    $this->addColumn('SLUG_CYRILLIC', 'SlugCyrillic', 'VARCHAR', true, 64, null);
    $this->addColumn('SLUG_LATIN', 'SlugLatin', 'VARCHAR', true, 64, null);
    $this->addColumn('LATITUDE', 'Latitude', 'FLOAT', false, null, null);
    $this->addColumn('LONGITUDE', 'Longitude', 'FLOAT', false, null, null);
    $this->addColumn('POSTAL_CODE', 'PostalCode', 'CHAR', false, 4, null);
    $this->addColumn('TELEPHONE_CODE', 'TelephoneCode', 'CHAR', false, 8, null);
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
