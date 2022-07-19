<?php
require('credentials/credentials.php');

/**
 * Provides access to the database
 * 
 */
class UseDatabase
{
    /**
     * Database connection
     * 
     * @var PDO
     */
    private $dbh;

    /**
     * Constructor. Connects to the database and sets the default fetch mode to
     * associative.
     * 
     * @throws PDOException
     */
    public function __construct()
    {
        $this->dbh = new PDO('mysql:host=' . CREDS['hostname'] . ';dbname=' . CREDS['database'], CREDS['username'], CREDS['password']);
        $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    /**
     * Return all artists in the "Listening" category
     * 
     * @return array fetched results
     */
    public function selectListeningArtists()
    {
        $artists = $this->dbh->query('SELECT artist FROM artists WHERE category = "Listening"');
        return $artists->fetchAll();
    }

    /**
     * Return all artists in the "Other" category
     * 
     * @return array fetched results
     */
    public function selectOtherArtists()
    {
        $artists = $this->dbh->query('SELECT artist FROM artists WHERE category = "Other"');
        return $artists->fetchAll();
    }

    /**
     * Return all albums from an artist
     * 
     * @param string $artist
     * @return array fetched results
     */
    public function selectAlbums($artist)
    {
        $albumStmt = $this->dbh->prepare('SELECT album FROM albums WHERE artist = :artist');
        $albumStmt->execute(array('artist' => $artist));
        return $albumStmt->fetchAll();
    }

    /**
     * Return all artists that have entries in the albums table
     * 
     * @return array fetched results
     */
    public function selectArtistsWithAlbums()
    {
        $artists = $this->dbh->query('SELECT DISTINCT artist FROM albums');
        return $artists->fetchAll();
    }

    /**
     * Destructor. Closes the connection to the database.
     * 
     */
    public function __destruct()
    {
        $dbh = null;
    }
}
?>