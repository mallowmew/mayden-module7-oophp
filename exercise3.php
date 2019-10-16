<?php

/*
 * EXERCISE: Create a DB Entity class with autosave
 * A DB Entity means an object that represents a table row in a database
 */

$db = new PDO(
    'mysql:host=127.0.0.1; dbname=module7',
    'root',
    ''
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

class Aminal {
    private $db;
    private $id;
    public $name;

    public function __construct() {
        echo 'Aminal created!<br/>';
    }

    public function update() {
        $query = $this->db->prepare(
            'SELECT `name` FROM `aminals` WHERE `id` = :id;'
        );
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
        $this->name = $result['name'];
    }

    public function setDB(PDO $db) {
        $this->db = $db;
    }

    public function __destruct() {
        $autosaveQuery = $this->db->prepare(
            'UPDATE `aminals` SET `name` = :name WHERE `id` = :id;'
        );
        $autosaveQuery->bindParam(':name', $this->name, PDO::PARAM_STR);
        $autosaveQuery->bindParam(':id', $this->id, PDO::PARAM_INT);
        $autosaveQuery->execute();
        echo "$this->name (id: $this->id) saved to database<br/>";
    }
}

$aminalCreateQuery = $db->prepare(
    'SELECT `id`, `name` FROM `aminals`;'
);
$aminalCreateQuery->setFetchMode(PDO::FETCH_CLASS, 'Aminal');
$aminalCreateQuery->execute();

$aminal1 = $aminalCreateQuery->fetch();
$aminal2 = $aminalCreateQuery->fetch();
$aminal3 = $aminalCreateQuery->fetch();
$aminal1->setDB($db);
$aminal2->setDB($db);
$aminal3->setDB($db);
echo "<br/><br/>";
var_dump($aminal1);
echo "<br/>";
var_dump($aminal2);
echo "<br/>";
var_dump($aminal3);
echo "<br/><br/>";
echo 'Aminal 1 is named ' . $aminal1->name . '!<br/><br/>';

echo "Renaming $aminal1->name...<br/><br/>";
$aminal1->name = 'Mountebank';
echo 'Aminal 1 is now named ' . $aminal1->name . '!<br/><br/>';

unset($aminal1);
