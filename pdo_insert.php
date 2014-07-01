<?php


$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'amanda', 'mysecretpassword');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$national_parks = [
['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 48739.67, 'Description' => "Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes."],
['name' => 'America Samoa', 'location' => 'America Samoa','date_established' => '1989-10-31', 'area_in_acres' => 9000.00, 'Description' => "The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches."],
['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => 76518.98, 'Description' => "In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins."],
['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-10-10', 'area_in_acres' => 242755.94,'Description' => "The Badlands are a collection of buttes, pinnacles, spires, and grass prairies"],
['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21, 'Description' => "this park encompasses a large and remote part of the Chihuahuan Desert." ],
['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1988-06-28', 'area_in_acres' => 172924.07, 'Description' => "this park at the north end of the Florida Keys and has four interrelated marine ecosystems, mangrove forest, the Bay, the Keys, and coral reefs."],
['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => 32950.03, 'Description' => "this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs." ],
['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08, 'Description' => "The park protects a quarter of the Gunnison River, which slices sheer canyon walls from dark Precambrian-era rock. " ],
['name' => 'Channel Islands', 'location' => 'South Carolina', 'date_established' => '1980-03-05', 'area_in_acres' => 249561.00, 'Description' => "Five of the eight Channel Islands are protected, and half of the parks area is underwater." ],
['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => 183224.05, 'Description' => "It is the deepest lake in the United States and is famous for its vivid blue color and water clarity."  ]
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, Description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($national_parks as $park)
{
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'],  PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'],  PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['Description'],  PDO::PARAM_STR);
    $stmt->execute();
}

?>