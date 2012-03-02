<?php


/**
 * Base class that represents a query for the 'ice_geo_street' table.
 *
 * 
 *
 * @method     iceModelGeoStreetQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelGeoStreetQuery orderByGeoRegionId($order = Criteria::ASC) Order by the geo_region_id column
 * @method     iceModelGeoStreetQuery orderByGeoCityId($order = Criteria::ASC) Order by the geo_city_id column
 * @method     iceModelGeoStreetQuery orderByGeoAreaId($order = Criteria::ASC) Order by the geo_area_id column
 * @method     iceModelGeoStreetQuery orderByNameCyrillic($order = Criteria::ASC) Order by the name_cyrillic column
 * @method     iceModelGeoStreetQuery orderByNameLatin($order = Criteria::ASC) Order by the name_latin column
 * @method     iceModelGeoStreetQuery orderBySlugCyrillic($order = Criteria::ASC) Order by the slug_cyrillic column
 * @method     iceModelGeoStreetQuery orderBySlugLatin($order = Criteria::ASC) Order by the slug_latin column
 *
 * @method     iceModelGeoStreetQuery groupById() Group by the id column
 * @method     iceModelGeoStreetQuery groupByGeoRegionId() Group by the geo_region_id column
 * @method     iceModelGeoStreetQuery groupByGeoCityId() Group by the geo_city_id column
 * @method     iceModelGeoStreetQuery groupByGeoAreaId() Group by the geo_area_id column
 * @method     iceModelGeoStreetQuery groupByNameCyrillic() Group by the name_cyrillic column
 * @method     iceModelGeoStreetQuery groupByNameLatin() Group by the name_latin column
 * @method     iceModelGeoStreetQuery groupBySlugCyrillic() Group by the slug_cyrillic column
 * @method     iceModelGeoStreetQuery groupBySlugLatin() Group by the slug_latin column
 *
 * @method     iceModelGeoStreetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelGeoStreetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelGeoStreetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelGeoStreet findOne(PropelPDO $con = null) Return the first iceModelGeoStreet matching the query
 * @method     iceModelGeoStreet findOneOrCreate(PropelPDO $con = null) Return the first iceModelGeoStreet matching the query, or a new iceModelGeoStreet object populated from the query conditions when no match is found
 *
 * @method     iceModelGeoStreet findOneById(int $id) Return the first iceModelGeoStreet filtered by the id column
 * @method     iceModelGeoStreet findOneByGeoRegionId(int $geo_region_id) Return the first iceModelGeoStreet filtered by the geo_region_id column
 * @method     iceModelGeoStreet findOneByGeoCityId(int $geo_city_id) Return the first iceModelGeoStreet filtered by the geo_city_id column
 * @method     iceModelGeoStreet findOneByGeoAreaId(int $geo_area_id) Return the first iceModelGeoStreet filtered by the geo_area_id column
 * @method     iceModelGeoStreet findOneByNameCyrillic(string $name_cyrillic) Return the first iceModelGeoStreet filtered by the name_cyrillic column
 * @method     iceModelGeoStreet findOneByNameLatin(string $name_latin) Return the first iceModelGeoStreet filtered by the name_latin column
 * @method     iceModelGeoStreet findOneBySlugCyrillic(string $slug_cyrillic) Return the first iceModelGeoStreet filtered by the slug_cyrillic column
 * @method     iceModelGeoStreet findOneBySlugLatin(string $slug_latin) Return the first iceModelGeoStreet filtered by the slug_latin column
 *
 * @method     array findById(int $id) Return iceModelGeoStreet objects filtered by the id column
 * @method     array findByGeoRegionId(int $geo_region_id) Return iceModelGeoStreet objects filtered by the geo_region_id column
 * @method     array findByGeoCityId(int $geo_city_id) Return iceModelGeoStreet objects filtered by the geo_city_id column
 * @method     array findByGeoAreaId(int $geo_area_id) Return iceModelGeoStreet objects filtered by the geo_area_id column
 * @method     array findByNameCyrillic(string $name_cyrillic) Return iceModelGeoStreet objects filtered by the name_cyrillic column
 * @method     array findByNameLatin(string $name_latin) Return iceModelGeoStreet objects filtered by the name_latin column
 * @method     array findBySlugCyrillic(string $slug_cyrillic) Return iceModelGeoStreet objects filtered by the slug_cyrillic column
 * @method     array findBySlugLatin(string $slug_latin) Return iceModelGeoStreet objects filtered by the slug_latin column
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.om
 */
abstract class BaseiceModelGeoStreetQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseiceModelGeoStreetQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'iceModelGeoStreet', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new iceModelGeoStreetQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    iceModelGeoStreetQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof iceModelGeoStreetQuery)
    {
      return $criteria;
    }
    $query = new iceModelGeoStreetQuery();
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
   * @return    iceModelGeoStreet|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = iceModelGeoStreetPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(iceModelGeoStreetPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(iceModelGeoStreetPeer::ID, $keys, Criteria::IN);
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
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(iceModelGeoStreetPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the geo_region_id column
   * 
   * Example usage:
   * <code>
   * $query->filterByGeoRegionId(1234); // WHERE geo_region_id = 1234
   * $query->filterByGeoRegionId(array(12, 34)); // WHERE geo_region_id IN (12, 34)
   * $query->filterByGeoRegionId(array('min' => 12)); // WHERE geo_region_id > 12
   * </code>
   *
   * @param     mixed $geoRegionId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function filterByGeoRegionId($geoRegionId = null, $comparison = null)
  {
    if (is_array($geoRegionId))
    {
      $useMinMax = false;
      if (isset($geoRegionId['min']))
      {
        $this->addUsingAlias(iceModelGeoStreetPeer::GEO_REGION_ID, $geoRegionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($geoRegionId['max']))
      {
        $this->addUsingAlias(iceModelGeoStreetPeer::GEO_REGION_ID, $geoRegionId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoStreetPeer::GEO_REGION_ID, $geoRegionId, $comparison);
  }

  /**
   * Filter the query on the geo_city_id column
   * 
   * Example usage:
   * <code>
   * $query->filterByGeoCityId(1234); // WHERE geo_city_id = 1234
   * $query->filterByGeoCityId(array(12, 34)); // WHERE geo_city_id IN (12, 34)
   * $query->filterByGeoCityId(array('min' => 12)); // WHERE geo_city_id > 12
   * </code>
   *
   * @param     mixed $geoCityId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function filterByGeoCityId($geoCityId = null, $comparison = null)
  {
    if (is_array($geoCityId))
    {
      $useMinMax = false;
      if (isset($geoCityId['min']))
      {
        $this->addUsingAlias(iceModelGeoStreetPeer::GEO_CITY_ID, $geoCityId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($geoCityId['max']))
      {
        $this->addUsingAlias(iceModelGeoStreetPeer::GEO_CITY_ID, $geoCityId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoStreetPeer::GEO_CITY_ID, $geoCityId, $comparison);
  }

  /**
   * Filter the query on the geo_area_id column
   * 
   * Example usage:
   * <code>
   * $query->filterByGeoAreaId(1234); // WHERE geo_area_id = 1234
   * $query->filterByGeoAreaId(array(12, 34)); // WHERE geo_area_id IN (12, 34)
   * $query->filterByGeoAreaId(array('min' => 12)); // WHERE geo_area_id > 12
   * </code>
   *
   * @param     mixed $geoAreaId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function filterByGeoAreaId($geoAreaId = null, $comparison = null)
  {
    if (is_array($geoAreaId))
    {
      $useMinMax = false;
      if (isset($geoAreaId['min']))
      {
        $this->addUsingAlias(iceModelGeoStreetPeer::GEO_AREA_ID, $geoAreaId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($geoAreaId['max']))
      {
        $this->addUsingAlias(iceModelGeoStreetPeer::GEO_AREA_ID, $geoAreaId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoStreetPeer::GEO_AREA_ID, $geoAreaId, $comparison);
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
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoStreetPeer::NAME_CYRILLIC, $nameCyrillic, $comparison);
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
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoStreetPeer::NAME_LATIN, $nameLatin, $comparison);
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
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoStreetPeer::SLUG_CYRILLIC, $slugCyrillic, $comparison);
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
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoStreetPeer::SLUG_LATIN, $slugLatin, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     iceModelGeoStreet $iceModelGeoStreet Object to remove from the list of results
   *
   * @return    iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function prune($iceModelGeoStreet = null)
  {
    if ($iceModelGeoStreet)
    {
      $this->addUsingAlias(iceModelGeoStreetPeer::ID, $iceModelGeoStreet->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

  // ice_model behavior
  
  /**
   * @return iceModelGeoStreetQuery The current query, for fluid interface
   */
  public function __call($name, $arguments)
  {
    if (method_exists('iceModeliceModelGeoStreetQuery', $name))
    {
      $q = new iceModeliceModelGeoStreetQuery();
      $arguments[] = $this;
  
      return call_user_func_array(array($q, $name), $arguments);
    }
  
    return parent::__call($name, $arguments);
  }

}
