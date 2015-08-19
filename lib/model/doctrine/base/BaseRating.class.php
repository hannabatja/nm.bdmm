<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Rating', 'doctrine');

/**
 * BaseRating
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $object_type
 * @property integer $object_id
 * @property integer $rate
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $user_id
 * @property string $ip_address
 * @property integer $created_aid
 * @property integer $updated_aid
 * @property Admin $Admin
 * @property Admin $Admin_2
 * 
 * @method integer   getId()          Returns the current record's "id" value
 * @method string    getObjectType()  Returns the current record's "object_type" value
 * @method integer   getObjectId()    Returns the current record's "object_id" value
 * @method integer   getRate()        Returns the current record's "rate" value
 * @method timestamp getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()   Returns the current record's "updated_at" value
 * @method integer   getUserId()      Returns the current record's "user_id" value
 * @method string    getIpAddress()   Returns the current record's "ip_address" value
 * @method integer   getCreatedAid()  Returns the current record's "created_aid" value
 * @method integer   getUpdatedAid()  Returns the current record's "updated_aid" value
 * @method Admin     getAdmin()       Returns the current record's "Admin" value
 * @method Admin     getAdmin2()      Returns the current record's "Admin_2" value
 * @method Rating    setId()          Sets the current record's "id" value
 * @method Rating    setObjectType()  Sets the current record's "object_type" value
 * @method Rating    setObjectId()    Sets the current record's "object_id" value
 * @method Rating    setRate()        Sets the current record's "rate" value
 * @method Rating    setCreatedAt()   Sets the current record's "created_at" value
 * @method Rating    setUpdatedAt()   Sets the current record's "updated_at" value
 * @method Rating    setUserId()      Sets the current record's "user_id" value
 * @method Rating    setIpAddress()   Sets the current record's "ip_address" value
 * @method Rating    setCreatedAid()  Sets the current record's "created_aid" value
 * @method Rating    setUpdatedAid()  Sets the current record's "updated_aid" value
 * @method Rating    setAdmin()       Sets the current record's "Admin" value
 * @method Rating    setAdmin2()      Sets the current record's "Admin_2" value
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRating extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rating');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('object_type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('object_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('rate', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip_address', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('created_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('updated_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Admin', array(
             'local' => 'updated_aid',
             'foreign' => 'id'));

        $this->hasOne('Admin as Admin_2', array(
             'local' => 'created_aid',
             'foreign' => 'id'));
    }
}