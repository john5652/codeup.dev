<?php

// define("DB_HOST", "127.0.0.1");
// define("DB_NAME", "parks_db");
// define("DB_USER", "billy");
// define("DB_PASS", '');

require 'park_migration.php';

$parks = [
    ['name' => 'Crater Lake',   'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05'],
    ['name' => 'Everglades',   'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1508537.90'],
    ['name' => 'Hot Springs',   'location' => 'Arkansas', 'date_established' => '1921-03-04', 'area_in_acres' => '5459.75'],
    ['name' => 'Mount Rainier',   'location' => 'Washington', 'date_established' => '1899-03-02', 'area_in_acres' => '235625.00'],
    ['name' => 'Olympic',   'location' => 'Washington', 'date_established' => '1938-06-29', 'area_in_acres' => '922650.86'],
    ['name' => 'Rocky Mountain',   'location' => 'Colorado', 'date_established' => '1915-01-26', 'area_in_acres' => '265828.41'],
    ['name' => 'Shenandoah',   'location' => 'Virginia', 'date_established' => '1926-05-22', 'area_in_acres' => '199045.23'],
    ['name' => 'Yellowstone',   'location' => 'Montana', 'date_established' => '1872-03-01', 'area_in_acres' => '2219790.71'],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21'],
    ['name' => 'Glacier Bay',   'location' => 'Alaska', 'date_established' => '1980-12-02', 'area_in_acres' => '3224840.31']
];
foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
    	VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";	
    $dbc->exec($query);
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}