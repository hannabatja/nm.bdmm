<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Bests', 'doctrine');

/**
 * BaseBests
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $best_type
 * @property integer $number
 * @property integer $item_id
 * @property integer $is_active
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $created_aid
 * @property integer $updated_aid
 * @property Item $Item
 * 
 * @method integer   getId()          Returns the current record's "id" value
 * @method string    getBestType()    Returns the current record's "best_type" value
 * @method integer   getNumber()      Returns the current record's "number" value
 * @method integer   getItemId()      Returns the current record's "item_id" value
 * @method integer   getIsActive()    Returns the current record's "is_active" value
 * @method timestamp getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()   Returns the current record's "updated_at" value
 * @method integer   getCreatedAid()  Returns the current record's "created_aid" value
 * @method integer   getUpdatedAid()  Returns the current record's "updated_aid" value
 * @method Item      getItem()        Returns the current record's "Item" value
 * @method Bests     setId()          Sets the current record's "id" value
 * @method Bests     setBestType()    Sets the current record's "best_type" value
 * @method Bests     setNumber()      Sets the current record's "number" value
 * @method Bests     setItemId()      Sets the current record's "item_id" value
 * @method Bests     setIsActive()    Sets the current record's "is_active" value
 * @method Bests     setCreatedAt()   Sets the current record's "created_at" value
 * @method Bests     setUpdatedAt()   Sets the current record's "updated_at" value
 * @method Bests     setCreatedAid()  Sets the current record's "created_aid" value
 * @method Bests     setUpdatedAid()  Sets the current record's "updated_aid" value
 * @method Bests     setItem()        Sets the current record's "Item" value
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBests extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bests');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('best_type', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('item_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('updated_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Item', array(
             'local' => 'item_id',
             'foreign' => 'id'));
    }
}