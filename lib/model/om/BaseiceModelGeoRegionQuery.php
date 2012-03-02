<?php


/**
 * Base class that represents a query for the 'ice_geo_region' table.
 *
 * 
 *
 * @method     iceModelGeoRegionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelGeoRegionQuery orderByNameCyrillic($order = Criteria::ASC) Order by the name_cyrillic column
 * @method     iceModelGeoRegionQuery orderByNameLatin($order = Criteria::ASC) Order by the name_latin column
 * @method     iceModelGeoRegionQuery orderBySlugCyrillic($order = Criteria::ASC) Order by the slug_cyrillic column
 * @method     iceModelGeoRegionQuery orderBySlugLatin($order = Criteria::ASC) Order by the slug_latin column
 * @method     iceModelGeoRegionQuery orderByCoords($order = Criteria::ASC) Order by the coords column
 * @method     iceModelGeoRegionQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     iceModelGeoRegionQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     iceModelGeoRegionQuery orderByZoom($order = Criteria::ASC) Order by the zoom column
 *
 * @method     iceModelGeoRegionQuery groupById() Group by the id column
 * @method     iceModelGeoRegionQuery groupByNameCyrillic() Group by the name_cyrillic column
 * @method     iceModelGeoRegionQuery groupByNameLatin() Group by the name_latin column
 * @method     iceModelGeoRegionQuery groupBySlugCyrillic() Group by the slug_cyrillic column
 * @method     iceModelGeoRegionQuery groupBySlugLatin() Group by the slug_latin column
 * @method     iceModelGeoRegionQuery groupByCoords() Group by the coords column
 * @method     iceModelGeoRegionQuery groupByLatitude() Group by the latitude column
 * @method     iceModelGeoRegionQuery groupByLongitude() Group by the longitude column
 * @method     iceModelGeoRegionQuery groupByZoom() Group by the zoom column
 *
 * @method     iceModelGeoRegionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelGeoRegionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelGeoRegionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelGeoRegion findOne(PropelPDO $con = null) Return the first iceModelGeoRegion matching the query
 * @method     iceModelGeoRegion findOneOrCreate(PropelPDO $con = null) Return the first iceModelGeoRegion matching the query, or a new iceModelGeoRegion object populated from the query conditions when no match is found
 *
 * @method     iceModelGeoRegion findOneById(int $id) Return the first iceModelGeoRegion filtered by the id column
 * @method     iceModelGeoRegion findOneByNameCyrillic(string $name_cyrillic) Return the first iceModelGeoRegion filtered by the name_cyrillic column
 * @method     iceModelGeoRegion findOneByNameLatin(string $name_latin) Return the first iceModelGeoRegion filtered by the name_latin column
 * @method     iceModelGeoRegion findOneBySlugCyrillic(string $slug_cyrillic) Return the first iceModelGeoRegion filtered by the slug_cyrillic column
 * @method     iceModelGeoRegion findOneBySlugLatin(string $slug_latin) Return the first iceModelGeoRegion filtered by the slug_latin column
 * @method     iceModelGeoRegion findOneByCoords(string $coords) Return the first iceModelGeoRegion filtered by the coords column
 * @method     iceModelGeoRegion findOneByLatitude(double $latitude) Return the first iceModelGeoRegion filtered by the latitude column
 * @method     iceModelGeoRegion findOneByLongitude(double $longitude) Return the first iceModelGeoRegion filtered by the longitude column
 * @method     iceModelGeoRegion findOneByZoom(int $zoom) Return the first iceModelGeoRegion filtered by the zoom column
 *
 * @method     array findById(int $id) Return iceModelGeoRegion objects filtered by the id column
 * @method     array findByNameCyrillic(string $name_cyrillic) Return iceModelGeoRegion objects filtered by the name_cyrillic column
 * @method     array findByNameLatin(string $name_latin) Return iceModelGeoRegion objects filtered by the name_latin column
 * @method     array findBySlugCyrillic(string $slug_cyrillic) Return iceModelGeoRegion objects filtered by the slug_cyrillic column
 * @method     array findBySlugLatin(string $slug_latin) Return iceModelGeoRegion objects filtered by the slug_latin column
 * @method     array findByCoords(string $coords) Return iceModelGeoRegion objects filtered by the coords column
 * @method     array findByLatitude(double $latitude) Return iceModelGeoRegion objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return iceModelGeoRegion objects filtered by the longitude column
 * @method     array findByZoom(int $zoom) Return iceModelGeoRegion objects filtered by the zoom column
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.om
 */
abstract class BaseiceModelGeoRegionQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseiceModelGeoRegionQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'iceModelGeoRegion', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new iceModelGeoRegionQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    iceModelGeoRegionQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof iceModelGeoRegionQuery)
    {
      return $criteria;
    }
    $query = new iceModelGeoRegionQuery();
    if (null !== $modelAlias)
    {
      $query->setModelAlias($modelAlias);
    }
    if ($criteria instanceof Criteria)
    {
      $query->mergeWith($criteria);
    }
    return $query;
  }

  /**
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    iceModelGeoRegion|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = iceModelGeoRegionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    else
    {
      // the object has not been requested yet, or the formatter is not an object formatter
      $criteria = $this->isKeepQuery() ? clone $this : $this;
      $stmt = $criteria
        ->filterByPrimaryKey($key)
        ->getSelectStatement($con);
      return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }
  }

  /**
   * Find objects by primary key
   * <code>
   * $objs = $c->findPks(array(12, 56, 832), $con);
   * </code>
   * @param     array $keys Primary keys to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
   */
  public function findPks($keys, $con = null)
  {
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    return $this
      ->filterByPrimaryKeys($keys)
      ->find($con);
  }

  /**
   * Filter the query by primary key
   *
   * @param     mixed $key Primary key to use for the query
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(iceModelGeoRegionPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(iceModelGeoRegionPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * Example usage:
   * <code>
   * $query->filterById(1234); // WHERE id = 1234
   * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
   * $query->filterById(array('min' => 12)); // WHERE id > 12
   * </code>
   *
   * @param     mixed $id The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the name_cyrillic column
   * 
   * Example usage:
   * <code>
   * $query->filterByNameCyrillic('fooValue');   // WHERE name_cyrillic = 'fooValue'
   * $query->filterByNameCyrillic('%fooValue%'); // WHERE name_cyrillic LIKE '%fooValue%'
   * </code>
   *
   * @param     string $nameCyrillic The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByNameCyrillic($nameCyrillic = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($nameCyrillic))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $nameCyrillic))
      {
        $nameCyrillic = str_replace('*', '%', $nameCyrillic);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::NAME_CYRILLIC, $nameCyrillic, $comparison);
  }

  /**
   * Filter the query on the name_latin column
   * 
   * Example usage:
   * <code>
   * $query->filterByNameLatin('fooValue');   // WHERE name_latin = 'fooValue'
   * $query->filterByNameLatin('%fooValue%'); // WHERE name_latin LIKE '%fooValue%'
   * </code>
   *
   * @param     string $nameLatin The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByNameLatin($nameLatin = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($nameLatin))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $nameLatin))
      {
        $nameLatin = str_replace('*', '%', $nameLatin);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::NAME_LATIN, $nameLatin, $comparison);
  }

  /**
   * Filter the query on the slug_cyrillic column
   * 
   * Example usage:
   * <code>
   * $query->filterBySlugCyrillic('fooValue');   // WHERE slug_cyrillic = 'fooValue'
   * $query->filterBySlugCyrillic('%fooValue%'); // WHERE slug_cyrillic LIKE '%fooValue%'
   * </code>
   *
   * @param     string $slugCyrillic The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterBySlugCyrillic($slugCyrillic = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slugCyrillic))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slugCyrillic))
      {
        $slugCyrillic = str_replace('*', '%', $slugCyrillic);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::SLUG_CYRILLIC, $slugCyrillic, $comparison);
  }

  /**
   * Filter the query on the slug_latin column
   * 
   * Example usage:
   * <code>
   * $query->filterBySlugLatin('fooValue');   // WHERE slug_latin = 'fooValue'
   * $query->filterBySlugLatin('%fooValue%'); // WHERE slug_latin LIKE '%fooValue%'
   * </code>
   *
   * @param     string $slugLatin The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterBySlugLatin($slugLatin = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slugLatin))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slugLatin))
      {
        $slugLatin = str_replace('*', '%', $slugLatin);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::SLUG_LATIN, $slugLatin, $comparison);
  }

  /**
   * Filter the query on the coords column
   * 
   * Example usage:
   * <code>
   * $query->filterByCoords('fooValue');   // WHERE coords = 'fooValue'
   * $query->filterByCoords('%fooValue%'); // WHERE coords LIKE '%fooValue%'
   * </code>
   *
   * @param     string $coords The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByCoords($coords = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($coords))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $coords))
      {
        $coords = str_replace('*', '%', $coords);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::COORDS, $coords, $comparison);
  }

  /**
   * Filter the query on the latitude column
   * 
   * Example usage:
   * <code>
   * $query->filterByLatitude(1234); // WHERE latitude = 1234
   * $query->filterByLatitude(array(12, 34)); // WHERE latitude IN (12, 34)
   * $query->filterByLatitude(array('min' => 12)); // WHERE latitude > 12
   * </code>
   *
   * @param     mixed $latitude The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByLatitude($latitude = null, $comparison = null)
  {
    if (is_array($latitude))
    {
      $useMinMax = false;
      if (isset($latitude['min']))
      {
        $this->addUsingAlias(iceModelGeoRegionPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($latitude['max']))
      {
        $this->addUsingAlias(iceModelGeoRegionPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::LATITUDE, $latitude, $comparison);
  }

  /**
   * Filter the query on the longitude column
   * 
   * Example usage:
   * <code>
   * $query->filterByLongitude(1234); // WHERE longitude = 1234
   * $query->filterByLongitude(array(12, 34)); // WHERE longitude IN (12, 34)
   * $query->filterByLongitude(array('min' => 12)); // WHERE longitude > 12
   * </code>
   *
   * @param     mixed $longitude The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByLongitude($longitude = null, $comparison = null)
  {
    if (is_array($longitude))
    {
      $useMinMax = false;
      if (isset($longitude['min']))
      {
        $this->addUsingAlias(iceModelGeoRegionPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($longitude['max']))
      {
        $this->addUsingAlias(iceModelGeoRegionPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::LONGITUDE, $longitude, $comparison);
  }

  /**
   * Filter the query on the zoom column
   * 
   * Example usage:
   * <code>
   * $query->filterByZoom(1234); // WHERE zoom = 1234
   * $query->filterByZoom(array(12, 34)); // WHERE zoom IN (12, 34)
   * $query->filterByZoom(array('min' => 12)); // WHERE zoom > 12
   * </code>
   *
   * @param     mixed $zoom The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function filterByZoom($zoom = null, $comparison = null)
  {
    if (is_array($zoom))
    {
      $useMinMax = false;
      if (isset($zoom['min']))
      {
        $this->addUsingAlias(iceModelGeoRegionPeer::ZOOM, $zoom['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($zoom['max']))
      {
        $this->addUsingAlias(iceModelGeoRegionPeer::ZOOM, $zoom['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(iceModelGeoRegionPeer::ZOOM, $zoom, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     iceModelGeoRegion $iceModelGeoRegion Object to remove from the list of results
   *
   * @return    iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function prune($iceModelGeoRegion = null)
  {
    if ($iceModelGeoRegion)
    {
      $this->addUsingAlias(iceModelGeoRegionPeer::ID, $iceModelGeoRegion->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

  // ice_model behavior
  
  /**
   * @return iceModelGeoRegionQuery The current query, for fluid interface
   */
  public function __call($name, $arguments)
  {
    if (method_exists('iceModeliceModelGeoRegionQuery', $name))
    {
      $q = new iceModeliceModelGeoRegionQuery();
      $arguments[] = $this;
  
      return call_user_func_array(array($q, $name), $arguments);
    }
  
    return parent::__call($name, $arguments);
  }

}
