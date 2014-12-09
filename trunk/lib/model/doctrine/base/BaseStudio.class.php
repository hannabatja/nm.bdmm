<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Studio', 'doctrine');

/**
 * BaseStudio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $name_mn
 * @property string $route
 * @property string $location
 * @property string $image
 * @property date $birthday
 * @property date $deadday
 * @property string $about
 * @property string $about_mn
 * @property string $rating
 * @property string $official_link1
 * @property string $official_link2
 * @property integer $sort
 * @property integer $nb_views
 * @property integer $nb_love
 * @property boolean $is_active
 * @property boolean $is_featured
 * @property string $source
 * @property integer $created_aid
 * @property integer $updated_aid
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Admin $Admin
 * @property Admin $Admin_2
 * 
 * @method integer   getId()             Returns the current record's "id" value
 * @method string    getName()           Returns the current record's "name" value
 * @method string    getNameMn()         Returns the current record's "name_mn" value
 * @method string    getRoute()          Returns the current record's "route" value
 * @method string    getLocation()       Returns the current record's "location" value
 * @method string    getImage()          Returns the current record's "image" value
 * @method date      getBirthday()       Returns the current record's "birthday" value
 * @method date      getDeadday()        Returns the current record's "deadday" value
 * @method string    getAbout()          Returns the current record's "about" value
 * @method string    getAboutMn()        Returns the current record's "about_mn" value
 * @method string    getRating()         Returns the current record's "rating" value
 * @method string    getOfficialLink1()  Returns the current record's "official_link1" value
 * @method string    getOfficialLink2()  Returns the current record's "official_link2" value
 * @method integer   getSort()           Returns the current record's "sort" value
 * @method integer   getNbViews()        Returns the current record's "nb_views" value
 * @method integer   getNbLove()         Returns the current record's "nb_love" value
 * @method boolean   getIsActive()       Returns the current record's "is_active" value
 * @method boolean   getIsFeatured()     Returns the current record's "is_featured" value
 * @method string    getSource()         Returns the current record's "source" value
 * @method integer   getCreatedAid()     Returns the current record's "created_aid" value
 * @method integer   getUpdatedAid()     Returns the current record's "updated_aid" value
 * @method timestamp getCreatedAt()      Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()      Returns the current record's "updated_at" value
 * @method Admin     getAdmin()          Returns the current record's "Admin" value
 * @method Admin     getAdmin2()         Returns the current record's "Admin_2" value
 * @method Studio    setId()             Sets the current record's "id" value
 * @method Studio    setName()           Sets the current record's "name" value
 * @method Studio    setNameMn()         Sets the current record's "name_mn" value
 * @method Studio    setRoute()          Sets the current record's "route" value
 * @method Studio    setLocation()       Sets the current record's "location" value
 * @method Studio    setImage()          Sets the current record's "image" value
 * @method Studio    setBirthday()       Sets the current record's "birthday" value
 * @method Studio    setDeadday()        Sets the current record's "deadday" value
 * @method Studio    setAbout()          Sets the current record's "about" value
 * @method Studio    setAboutMn()        Sets the current record's "about_mn" value
 * @method Studio    setRating()         Sets the current record's "rating" value
 * @method Studio    setOfficialLink1()  Sets the current record's "official_link1" value
 * @method Studio    setOfficialLink2()  Sets the current record's "official_link2" value
 * @method Studio    setSort()           Sets the current record's "sort" value
 * @method Studio    setNbViews()        Sets the current record's "nb_views" value
 * @method Studio    setNbLove()         Sets the current record's "nb_love" value
 * @method Studio    setIsActive()       Sets the current record's "is_active" value
 * @method Studio    setIsFeatured()     Sets the current record's "is_featured" value
 * @method Studio    setSource()         Sets the current record's "source" value
 * @method Studio    setCreatedAid()     Sets the current record's "created_aid" value
 * @method Studio    setUpdatedAid()     Sets the current record's "updated_aid" value
 * @method Studio    setCreatedAt()      Sets the current record's "created_at" value
 * @method Studio    setUpdatedAt()      Sets the current record's "updated_at" value
 * @method Studio    setAdmin()          Sets the current record's "Admin" value
 * @method Studio    setAdmin2()         Sets the current record's "Admin_2" value
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStudio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('studio');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('name_mn', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('route', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('location', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('image', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('birthday', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('deadday', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('about', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('about_mn', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('rating', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('official_link1', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('official_link2', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
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
        $this->hasColumn('nb_views', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nb_love', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('is_featured', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('source', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
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