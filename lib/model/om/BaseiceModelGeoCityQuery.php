<?php


/**
 * Base class that represents a query for the 'ice_geo_city' table.
 *
 * 
 *
 * @method     iceModelGeoCityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelGeoCityQuery orderByGeoRegionId($order = Criteria::ASC) Order by the geo_region_id column
 * @method     iceModelGeoCityQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     iceModelGeoCityQuery orderByNameCyrillic($order = Criteria::ASC) Order by the name_cyrillic column
 * @method     iceModelGeoCityQuery orderByNameLatin($order = Criteria::ASC) Order by the name_latin column
 * @method     iceModelGeoCityQuery orderBySlugCyrillic($order = Criteria::ASC) Order by the slug_cyrillic column
 * @method     iceModelGeoCityQuery orderBySlugLatin($order = Criteria::ASC) Order by the slug_latin column
 * @method     iceModelGeoCityQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     iceModelGeoCityQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     iceModelGeoCityQuery orderByPostalCode($order = Criteria::ASC) Order by the postal_code column
 * @method     iceModelGeoCityQuery orderByTelephoneCode($order = Criteria::ASC) Order by the telephone_code column
 *
 * @method     iceModelGeoCityQuery groupById() Group by the id column
 * @method     iceModelGeoCityQuery groupByGeoRegionId() Group by the geo_region_id column
 * @method     iceModelGeoCityQuery groupByType() Group by the type column
 * @method     iceModelGeoCityQuery groupByNameCyrillic() Group by the name_cyrillic column
 * @method     iceModelGeoCityQuery groupByNameLatin() Group by the name_latin column
 * @method     iceModelGeoCityQuery groupBySlugCyrillic() Group by the slug_cyrillic column
 * @method     iceModelGeoCityQuery groupBySlugLatin() Group by the slug_latin column
 * @method     iceModelGeoCityQuery groupByLatitude() Group by the latitude column
 * @method     iceModelGeoCityQuery groupByLongitude() Group by the longitude column
 * @method     iceModelGeoCityQuery groupByPostalCode() Group by the postal_code column
 * @method     iceModelGeoCityQuery groupByTelephoneCode() Group by the telephone_code column
 *
 * @method     iceModelGeoCityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelGeoCityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelGeoCityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelGeoCity findOne(PropelPDO $con = null) Return the first iceModelGeoCity matching the query
 * @method     iceModelGeoCity findOneOrCreate(PropelPDO $con = null) Return the first iceModelGeoCity matching the query, or a new iceModelGeoCity object populated from the query conditions when no match is found
 *
 * @method     iceModelGeoCity findOneById(int $id) Return the first iceModelGeoCity filtered by the id column
 * @method     iceModelGeoCity findOneByGeoRegionId(int $geo_region_id) Return the first iceModelGeoCity filtered by the geo_region_id column
 * @method     iceModelGeoCity findOneByType(string $type) Return the first iceModelGeoCity filtered by the type column
 * @method     iceModelGeoCity findOneByNameCyrillic(string $name_cyrillic) Return the first iceModelGeoCity filtered by the name_cyrillic column
 * @method     iceModelGeoCity findOneByNameLatin(string $name_latin) Return the first iceModelGeoCity filtered by the name_latin column
 * @method     iceModelGeoCity findOneBySlugCyrillic(string $slug_cyrillic) Return the first iceModelGeoCity filtered by the slug_cyrillic column
 * @method     iceModelGeoCity findOneBySlugLatin(string $slug_latin) Return the first iceModelGeoCity filtered by the slug_latin column
 * @method     iceModelGeoCity findOneByLatitude(double $latitude) Return the first iceModelGeoCity filtered by the latitude column
 * @method     iceModelGeoCity findOneByLongitude(double $longitude) Return the first iceModelGeoCity filtered by the longitude column
 * @method     iceModelGeoCity findOneByPostalCode(string $postal_code) Return the first iceModelGeoCity filtered by the postal_code column
 * @method     iceModelGeoCity findOneByTelephoneCode(string $telephone_code) Return the first iceModelGeoCity filtered by the telephone_code column
 *
 * @method     array findById(int $id) Return iceModelGeoCity objects filtered by the id column
 * @method     array findByGeoRegionId(int $geo_region_id) Return iceModelGeoCity objects filtered by the geo_region_id column
 * @method     array findByType(string $type) Return iceModelGeoCity objects filtered by the type column
 * @method     array findByNameCyrillic(string $name_cyrillic) Return iceModelGeoCity objects filtered by the name_cyrillic column
 * @method     array findByNameLatin(string $name_latin) Return iceModelGeoCity objects filtered by the name_latin column
 * @method     array findBySlugCyrillic(string $slug_cyrillic) Return iceModelGeoCity objects filtered by the slug_cyrillic column
 * @method     array findBySlugLatin(string $slug_latin) Return iceModelGeoCity objects filtered by the slug_latin column
 * @method     array findByLatitude(double $latitude) Return iceModelGeoCity objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return iceModelGeoCity objects filtered by the longitude column
 * @method     array findByPostalCode(string $postal_code) Return iceModelGeoCity objects filtered by the postal_code column
 * @method     array findByTelephoneCode(string $telephone_code) Return iceModelGeoCity objects filtered by the telephone_code column
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.om
 */
abstract class BaseiceModelGeoCityQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseiceModelGeoCityQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'iceModelGeoCity', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new iceModelGeoCityQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    iceModelGeoCityQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof iceModelGeoCityQuery)
    {
      return $criteria;
    }
    $query = new iceModelGeoCityQuery();
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
   * @return    iceModelGeoCity|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = iceModelGeoCityPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(iceModelGeoCityPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(iceModelGeoCityPeer::ID, $keys, Criteria::IN);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(iceModelGeoCityPeer::ID, $id, $comparison);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByGeoRegionId($geoRegionId = null, $comparison = null)
  {
    if (is_array($geoRegionId))
    {
      $useMinMax = false;
      if (isset($geoRegionId['min']))
      {
        $this->addUsingAlias(iceModelGeoCityPeer::GEO_REGION_ID, $geoRegionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($geoRegionId['max']))
      {
        $this->addUsingAlias(iceModelGeoCityPeer::GEO_REGION_ID, $geoRegionId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoCityPeer::GEO_REGION_ID, $geoRegionId, $comparison);
  }

  /**
   * Filter the query on the type column
   * 
   * Example usage:
   * <code>
   * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
   * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
   * </code>
   *
   * @param     string $type The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByType($type = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($type))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $type))
      {
        $type = str_replace('*', '%', $type);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoCityPeer::TYPE, $type, $comparison);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoCityPeer::NAME_CYRILLIC, $nameCyrillic, $comparison);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoCityPeer::NAME_LATIN, $nameLatin, $comparison);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoCityPeer::SLUG_CYRILLIC, $slugCyrillic, $comparison);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
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
    return $this->addUsingAlias(iceModelGeoCityPeer::SLUG_LATIN, $slugLatin, $comparison);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByLatitude($latitude = null, $comparison = null)
  {
    if (is_array($latitude))
    {
      $useMinMax = false;
      if (isset($latitude['min']))
      {
        $this->addUsingAlias(iceModelGeoCityPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($latitude['max']))
      {
        $this->addUsingAlias(iceModelGeoCityPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoCityPeer::LATITUDE, $latitude, $comparison);
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
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByLongitude($longitude = null, $comparison = null)
  {
    if (is_array($longitude))
    {
      $useMinMax = false;
      if (isset($longitude['min']))
      {
        $this->addUsingAlias(iceModelGeoCityPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($longitude['max']))
      {
        $this->addUsingAlias(iceModelGeoCityPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(iceModelGeoCityPeer::LONGITUDE, $longitude, $comparison);
  }

  /**
   * Filter the query on the postal_code column
   * 
   * Example usage:
   * <code>
   * $query->filterByPostalCode('fooValue');   // WHERE postal_code = 'fooValue'
   * $query->filterByPostalCode('%fooValue%'); // WHERE postal_code LIKE '%fooValue%'
   * </code>
   *
   * @param     string $postalCode The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByPostalCode($postalCode = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postalCode))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postalCode))
      {
        $postalCode = str_replace('*', '%', $postalCode);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoCityPeer::POSTAL_CODE, $postalCode, $comparison);
  }

  /**
   * Filter the query on the telephone_code column
   * 
   * Example usage:
   * <code>
   * $query->filterByTelephoneCode('fooValue');   // WHERE telephone_code = 'fooValue'
   * $query->filterByTelephoneCode('%fooValue%'); // WHERE telephone_code LIKE '%fooValue%'
   * </code>
   *
   * @param     string $telephoneCode The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function filterByTelephoneCode($telephoneCode = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($telephoneCode))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $telephoneCode))
      {
        $telephoneCode = str_replace('*', '%', $telephoneCode);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(iceModelGeoCityPeer::TELEPHONE_CODE, $telephoneCode, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     iceModelGeoCity $iceModelGeoCity Object to remove from the list of results
   *
   * @return    iceModelGeoCityQuery The current query, for fluid interface
   */
  public function prune($iceModelGeoCity = null)
  {
    if ($iceModelGeoCity)
    {
      $this->addUsingAlias(iceModelGeoCityPeer::ID, $iceModelGeoCity->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

  // ice_model behavior
  
  /**
   * @return iceModelGeoCityQuery The current query, for fluid interface
   */
  public function __call($name, $arguments)
  {
    if (method_exists('iceModeliceModelGeoCityQuery', $name))
    {
      $q = new iceModeliceModelGeoCityQuery();
      $arguments[] = $this;
  
      return call_user_func_array(array($q, $name), $arguments);
    }
  
    return parent::__call($name, $arguments);
  }

}
