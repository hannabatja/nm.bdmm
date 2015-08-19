<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Admin', 'doctrine');

/**
 * BaseAdmin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $mod_permissions
 * @property string $cat_permissions
 * @property timestamp $logged_at
 * @property integer $sort
 * @property integer $is_active
 * @property integer $is_featured
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $created_aid
 * @property integer $updated_aid
 * @property Doctrine_Collection $News
 * @property Doctrine_Collection $News_2
 * @property Doctrine_Collection $Page
 * @property Doctrine_Collection $Page_2
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getEmail()           Returns the current record's "email" value
 * @method string              getPassword()        Returns the current record's "password" value
 * @method string              getModPermissions()  Returns the current record's "mod_permissions" value
 * @method string              getCatPermissions()  Returns the current record's "cat_permissions" value
 * @method timestamp           getLoggedAt()        Returns the current record's "logged_at" value
 * @method integer             getSort()            Returns the current record's "sort" value
 * @method integer             getIsActive()        Returns the current record's "is_active" value
 * @method integer             getIsFeatured()      Returns the current record's "is_featured" value
 * @method timestamp           getCreatedAt()       Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()       Returns the current record's "updated_at" value
 * @method integer             getCreatedAid()      Returns the current record's "created_aid" value
 * @method integer             getUpdatedAid()      Returns the current record's "updated_aid" value
 * @method Doctrine_Collection getNews()            Returns the current record's "News" collection
 * @method Doctrine_Collection getNews2()           Returns the current record's "News_2" collection
 * @method Doctrine_Collection getPage()            Returns the current record's "Page" collection
 * @method Doctrine_Collection getPage2()           Returns the current record's "Page_2" collection
 * @method Admin               setId()              Sets the current record's "id" value
 * @method Admin               setEmail()           Sets the current record's "email" value
 * @method Admin               setPassword()        Sets the current record's "password" value
 * @method Admin               setModPermissions()  Sets the current record's "mod_permissions" value
 * @method Admin               setCatPermissions()  Sets the current record's "cat_permissions" value
 * @method Admin               setLoggedAt()        Sets the current record's "logged_at" value
 * @method Admin               setSort()            Sets the current record's "sort" value
 * @method Admin               setIsActive()        Sets the current record's "is_active" value
 * @method Admin               setIsFeatured()      Sets the current record's "is_featured" value
 * @method Admin               setCreatedAt()       Sets the current record's "created_at" value
 * @method Admin               setUpdatedAt()       Sets the current record's "updated_at" value
 * @method Admin               setCreatedAid()      Sets the current record's "created_aid" value
 * @method Admin               setUpdatedAid()      Sets the current record's "updated_aid" value
 * @method Admin               setNews()            Sets the current record's "News" collection
 * @method Admin               setNews2()           Sets the current record's "News_2" collection
 * @method Admin               setPage()            Sets the current record's "Page" collection
 * @method Admin               setPage2()           Sets the current record's "Page_2" collection
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('admin');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('mod_permissions', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cat_permissions', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('logged_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('sort', 'integer', 4, array(
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
        $this->hasColumn('is_featured', 'integer', 1, array(
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
             'default' => '0000-00-00 00:00:00',
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
        $this->hasMany('News', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));

        $this->hasMany('News as News_2', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Page', array(
             'local' => 'id',
             'foreign' => 'created_aid'));

        $this->hasMany('Page as Page_2', array(
             'local' => 'id',
             'foreign' => 'updated_aid'));
    }
}