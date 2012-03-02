<?php


/**
 * Base class that represents a row from the 'ice_geo_region' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.om
 */
abstract class BaseiceModelGeoRegion extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelGeoRegionPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelGeoRegionPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the name_cyrillic field.
   * @var        string
   */
  protected $name_cyrillic;

  /**
   * The value for the name_latin field.
   * @var        string
   */
  protected $name_latin;

  /**
   * The value for the slug_cyrillic field.
   * @var        string
   */
  protected $slug_cyrillic;

  /**
   * The value for the slug_latin field.
   * @var        string
   */
  protected $slug_latin;

  /**
   * The value for the coords field.
   * @var        string
   */
  protected $coords;

  /**
   * The value for the latitude field.
   * @var        double
   */
  protected $latitude;

  /**
   * The value for the longitude field.
   * @var        double
   */
  protected $longitude;

  /**
   * The value for the zoom field.
   * @var        int
   */
  protected $zoom;

  /**
   * Flag to prevent endless save loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInSave = false;

  /**
   * Flag to prevent endless validation loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInValidation = false;

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [name_cyrillic] column value.
   * 
   * @return     string
   */
  public function getNameCyrillic()
  {
    return $this->name_cyrillic;
  }

  /**
   * Get the [name_latin] column value.
   * 
   * @return     string
   */
  public function getNameLatin()
  {
    return $this->name_latin;
  }

  /**
   * Get the [slug_cyrillic] column value.
   * 
   * @return     string
   */
  public function getSlugCyrillic()
  {
    return $this->slug_cyrillic;
  }

  /**
   * Get the [slug_latin] column value.
   * 
   * @return     string
   */
  public function getSlugLatin()
  {
    return $this->slug_latin;
  }

  /**
   * Get the [coords] column value.
   * 
   * @return     string
   */
  public function getCoords()
  {
    return $this->coords;
  }

  /**
   * Get the [latitude] column value.
   * 
   * @return     double
   */
  public function getLatitude()
  {
    return $this->latitude;
  }

  /**
   * Get the [longitude] column value.
   * 
   * @return     double
   */
  public function getLongitude()
  {
    return $this->longitude;
  }

  /**
   * Get the [zoom] column value.
   * 
   * @return     int
   */
  public function getZoom()
  {
    return $this->zoom;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [name_cyrillic] column.
   * 
   * @param      string $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setNameCyrillic($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->name_cyrillic !== $v)
    {
      $this->name_cyrillic = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::NAME_CYRILLIC;
    }

    return $this;
  }

  /**
   * Set the value of [name_latin] column.
   * 
   * @param      string $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setNameLatin($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->name_latin !== $v)
    {
      $this->name_latin = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::NAME_LATIN;
    }

    return $this;
  }

  /**
   * Set the value of [slug_cyrillic] column.
   * 
   * @param      string $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setSlugCyrillic($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->slug_cyrillic !== $v)
    {
      $this->slug_cyrillic = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::SLUG_CYRILLIC;
    }

    return $this;
  }

  /**
   * Set the value of [slug_latin] column.
   * 
   * @param      string $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setSlugLatin($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->slug_latin !== $v)
    {
      $this->slug_latin = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::SLUG_LATIN;
    }

    return $this;
  }

  /**
   * Set the value of [coords] column.
   * 
   * @param      string $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setCoords($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->coords !== $v)
    {
      $this->coords = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::COORDS;
    }

    return $this;
  }

  /**
   * Set the value of [latitude] column.
   * 
   * @param      double $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setLatitude($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->latitude !== $v)
    {
      $this->latitude = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::LATITUDE;
    }

    return $this;
  }

  /**
   * Set the value of [longitude] column.
   * 
   * @param      double $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setLongitude($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->longitude !== $v)
    {
      $this->longitude = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::LONGITUDE;
    }

    return $this;
  }

  /**
   * Set the value of [zoom] column.
   * 
   * @param      int $v new value
   * @return     iceModelGeoRegion The current object (for fluent API support)
   */
  public function setZoom($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->zoom !== $v)
    {
      $this->zoom = $v;
      $this->modifiedColumns[] = iceModelGeoRegionPeer::ZOOM;
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->name_cyrillic = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->name_latin = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->slug_cyrillic = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->slug_latin = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->coords = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->latitude = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
      $this->longitude = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
      $this->zoom = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 9; // 9 = iceModelGeoRegionPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelGeoRegion object", $e);
    }
  }

  /**
   * Checks and repairs the internal consistency of the object.
   *
   * This method is executed after an already-instantiated object is re-hydrated
   * from the database.  It exists to check any foreign keys to make sure that
   * the objects related to the current object are correct based on foreign key.
   *
   * You can override this method in the stub class, but you should always invoke
   * the base method from the overridden method (i.e. parent::ensureConsistency()),
   * in case your model changes.
   *
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoRegionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelGeoRegionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoRegionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelGeoRegion:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        iceModelGeoRegionQuery::create()
          ->filterByPrimaryKey($this->getPrimaryKey())
          ->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelGeoRegion:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Persists this object to the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All modified related objects will also be persisted in the doSave()
   * method.  This method wraps all precipitate database operations in a
   * single transaction.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoRegionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelGeoRegion:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelGeoRegion:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelGeoRegionPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs the work of inserting or updating the row in the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All related objects are also updated in this method.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = iceModelGeoRegionPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(iceModelGeoRegionPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelGeoRegionPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = iceModelGeoRegionPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Array of ValidationFailed objects.
   * @var        array ValidationFailed[]
   */
  protected $validationFailures = array();

  /**
   * Gets any ValidationFailed objects that resulted from last call to validate().
   *
   *
   * @return     array ValidationFailed[]
   * @see        validate()
   */
  public function getValidationFailures()
  {
    return $this->validationFailures;
  }

  /**
   * Validates the objects modified field values and all objects related to this table.
   *
   * If $columns is either a column name or an array of column names
   * only those columns are validated.
   *
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      if (($retval = iceModelGeoRegionPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }



      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelGeoRegionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      case 1:
        return $this->getNameCyrillic();
        break;
      case 2:
        return $this->getNameLatin();
        break;
      case 3:
        return $this->getSlugCyrillic();
        break;
      case 4:
        return $this->getSlugLatin();
        break;
      case 5:
        return $this->getCoords();
        break;
      case 6:
        return $this->getLatitude();
        break;
      case 7:
        return $this->getLongitude();
        break;
      case 8:
        return $this->getZoom();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
  {
    if (isset($alreadyDumpedObjects['iceModelGeoRegion'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelGeoRegion'][$this->getPrimaryKey()] = true;
    $keys = iceModelGeoRegionPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getNameCyrillic(),
      $keys[2] => $this->getNameLatin(),
      $keys[3] => $this->getSlugCyrillic(),
      $keys[4] => $this->getSlugLatin(),
      $keys[5] => $this->getCoords(),
      $keys[6] => $this->getLatitude(),
      $keys[7] => $this->getLongitude(),
      $keys[8] => $this->getZoom(),
    );
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelGeoRegionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
      case 1:
        $this->setNameCyrillic($value);
        break;
      case 2:
        $this->setNameLatin($value);
        break;
      case 3:
        $this->setSlugCyrillic($value);
        break;
      case 4:
        $this->setSlugLatin($value);
        break;
      case 5:
        $this->setCoords($value);
        break;
      case 6:
        $this->setLatitude($value);
        break;
      case 7:
        $this->setLongitude($value);
        break;
      case 8:
        $this->setZoom($value);
        break;
    }
  }

  /**
   * Populates the object using an array.
   *
   * This is particularly useful when populating an object from one of the
   * request arrays (e.g. $_POST).  This method goes through the column
   * names, checking to see whether a matching key exists in populated
   * array. If so the setByName() method is called for that column.
   *
   * You can specify the key type of the array by additionally passing one
   * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = iceModelGeoRegionPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setNameCyrillic($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setNameLatin($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setSlugCyrillic($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setSlugLatin($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setCoords($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setLatitude($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setLongitude($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setZoom($arr[$keys[8]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelGeoRegionPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelGeoRegionPeer::ID)) $criteria->add(iceModelGeoRegionPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelGeoRegionPeer::NAME_CYRILLIC)) $criteria->add(iceModelGeoRegionPeer::NAME_CYRILLIC, $this->name_cyrillic);
    if ($this->isColumnModified(iceModelGeoRegionPeer::NAME_LATIN)) $criteria->add(iceModelGeoRegionPeer::NAME_LATIN, $this->name_latin);
    if ($this->isColumnModified(iceModelGeoRegionPeer::SLUG_CYRILLIC)) $criteria->add(iceModelGeoRegionPeer::SLUG_CYRILLIC, $this->slug_cyrillic);
    if ($this->isColumnModified(iceModelGeoRegionPeer::SLUG_LATIN)) $criteria->add(iceModelGeoRegionPeer::SLUG_LATIN, $this->slug_latin);
    if ($this->isColumnModified(iceModelGeoRegionPeer::COORDS)) $criteria->add(iceModelGeoRegionPeer::COORDS, $this->coords);
    if ($this->isColumnModified(iceModelGeoRegionPeer::LATITUDE)) $criteria->add(iceModelGeoRegionPeer::LATITUDE, $this->latitude);
    if ($this->isColumnModified(iceModelGeoRegionPeer::LONGITUDE)) $criteria->add(iceModelGeoRegionPeer::LONGITUDE, $this->longitude);
    if ($this->isColumnModified(iceModelGeoRegionPeer::ZOOM)) $criteria->add(iceModelGeoRegionPeer::ZOOM, $this->zoom);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(iceModelGeoRegionPeer::DATABASE_NAME);
    $criteria->add(iceModelGeoRegionPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getId();
  }

  /**
   * Generic method to set the primary key (id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of iceModelGeoRegion (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setNameCyrillic($this->getNameCyrillic());
    $copyObj->setNameLatin($this->getNameLatin());
    $copyObj->setSlugCyrillic($this->getSlugCyrillic());
    $copyObj->setSlugLatin($this->getSlugLatin());
    $copyObj->setCoords($this->getCoords());
    $copyObj->setLatitude($this->getLatitude());
    $copyObj->setLongitude($this->getLongitude());
    $copyObj->setZoom($this->getZoom());
    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
    }
  }

  /**
   * Makes a copy of this object that will be inserted as a new row in table when saved.
   * It creates a new object filling in the simple attributes, but skipping any primary
   * keys that are defined for the table.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     iceModelGeoRegion Clone of current object.
   * @throws     PropelException
   */
  public function copy($deepCopy = false)
  {
    // we use get_class(), because this might be a subclass
    $clazz = get_class($this);
    $copyObj = new $clazz();
    $this->copyInto($copyObj, $deepCopy);
    return $copyObj;
  }

  /**
   * Returns a peer instance associated with this om.
   *
   * Since Peer classes are not to have any instance attributes, this method returns the
   * same instance for all member of this class. The method could therefore
   * be static, but this would prevent one from overriding the behavior.
   *
   * @return     iceModelGeoRegionPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelGeoRegionPeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->name_cyrillic = null;
    $this->name_latin = null;
    $this->slug_cyrillic = null;
    $this->slug_latin = null;
    $this->coords = null;
    $this->latitude = null;
    $this->longitude = null;
    $this->zoom = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all references to other model objects or collections of model objects.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect
   * objects with circular references (even in PHP 5.3). This is currently necessary
   * when using Propel in certain daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
    }

  }

  /**
   * Return the string representation of this object
   *
   * @return string The value of the 'name_cyrillic' column
   */
  public function __toString()
  {
    return (string) $this->getNameCyrillic();
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelGeoRegion:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    if (preg_match('/get(\w+)/', $name, $matches))
    {
      $virtualColumn = $matches[1];
      if ($this->hasVirtualColumn($virtualColumn))
      {
        return $this->getVirtualColumn($virtualColumn);
      }
      // no lcfirst in php<5.3...
      $virtualColumn[0] = strtolower($virtualColumn[0]);
      if ($this->hasVirtualColumn($virtualColumn))
      {
        return $this->getVirtualColumn($virtualColumn);
      }
    }
    return parent::__call($name, $params);
  }

}
