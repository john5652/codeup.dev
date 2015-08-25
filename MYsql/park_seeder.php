<?php

// define("DB_HOST", "127.0.0.1");
// define("DB_NAME", "parks_db");
// define("DB_USER", "billy");
// define("DB_PASS", '');

require 'includes/parks_config.php';
require 'includes/db_connect.php';


$dbc->exec('TRUNCATE national_parks');

$parks = [
    ['name' => 'Crater Lake',   'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05', 'description' => ' '],
    ['name' => 'Everglades',   'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1508537.90', 'description' => ' '],
    ['name' => 'Hot Springs',   'location' => 'Arkansas', 'date_established' => '1921-03-04', 'area_in_acres' => '5459.75', 'description' => ' '],
    ['name' => 'Mount Rainier',   'location' => 'Washington', 'date_established' => '1899-03-02', 'area_in_acres' => '235625.00', 'description' => ' '],
    ['name' => 'Olympic',   'location' => 'Washington', 'date_established' => '1938-06-29', 'area_in_acres' => '922650.86', 'description' => ' '],
    ['name' => 'Rocky Mountain',   'location' => 'Colorado', 'date_established' => '1915-01-26', 'area_in_acres' => '265828.41', 'description' => ' '],
    ['name' => 'Shenandoah',   'location' => 'Virginia', 'date_established' => '1926-05-22', 'area_in_acres' => '199045.23', 'description' => ' '],
    ['name' => 'Yellowstone',   'location' => 'Montana', 'date_established' => '1872-03-01', 'area_in_acres' => '2219790.71', 'description' => ' '],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21', 'description' => ' '],
    ['name' => 'Glacier Bay',   'location' => 'Alaska', 'date_established' => '1980-12-02', 'area_in_acres' => '3224840.31', 'description' => ' ']
];
// foreach ($parks as $park) {
//     $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
//     	VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}', '{$park['description']}')";	
//     $dbc->exec($query);
//     echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
// }

    $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
        VALUES (:name, :location, :date_established, :area_in_acres, :description)');

    foreach ($parks as $park) {
        $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
        $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

        $stmt->execute();
    }