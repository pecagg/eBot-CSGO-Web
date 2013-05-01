<?php

/**
 * BaseSeasons
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property varchar $name
 * @property varchar $event
 * @property timestamp $start
 * @property timestamp $end
 * @property varchar $link
 * @property varchar $logo
 * @property boolean $active
 * @property Doctrine_Collection $Matchs
 * @property Doctrine_Collection $Advertising
 * @property Doctrine_Collection $TeamsInSeasons
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method varchar             getName()           Returns the current record's "name" value
 * @method varchar             getEvent()          Returns the current record's "event" value
 * @method timestamp           getStart()          Returns the current record's "start" value
 * @method timestamp           getEnd()            Returns the current record's "end" value
 * @method varchar             getLink()           Returns the current record's "link" value
 * @method varchar             getLogo()           Returns the current record's "logo" value
 * @method boolean             getActive()         Returns the current record's "active" value
 * @method Doctrine_Collection getMatchs()         Returns the current record's "Matchs" collection
 * @method Doctrine_Collection getAdvertising()    Returns the current record's "Advertising" collection
 * @method Doctrine_Collection getTeamsInSeasons() Returns the current record's "TeamsInSeasons" collection
 * @method Seasons             setId()             Sets the current record's "id" value
 * @method Seasons             setName()           Sets the current record's "name" value
 * @method Seasons             setEvent()          Sets the current record's "event" value
 * @method Seasons             setStart()          Sets the current record's "start" value
 * @method Seasons             setEnd()            Sets the current record's "end" value
 * @method Seasons             setLink()           Sets the current record's "link" value
 * @method Seasons             setLogo()           Sets the current record's "logo" value
 * @method Seasons             setActive()         Sets the current record's "active" value
 * @method Seasons             setMatchs()         Sets the current record's "Matchs" collection
 * @method Seasons             setAdvertising()    Sets the current record's "Advertising" collection
 * @method Seasons             setTeamsInSeasons() Sets the current record's "TeamsInSeasons" collection
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSeasons extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seasons');
        $this->hasColumn('id', 'integer', 20, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('name', 'varchar', 50, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('event', 'varchar', 50, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('start', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('end', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('link', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
        $this->hasColumn('logo', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Matchs', array(
             'local' => 'id',
             'foreign' => 'season_id'));

        $this->hasMany('Advertising', array(
             'local' => 'id',
             'foreign' => 'season_id'));

        $this->hasMany('TeamsInSeasons', array(
             'local' => 'id',
             'foreign' => 'season_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}