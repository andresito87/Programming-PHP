<?php
$mongo = new Mongo();
$db = $mongo->library;
$authors = $db->authors;

$data = $authors->findone(array('authorid' => 4));

echo "Generated Primary Key: {$data['_id']}<br />";
echo "Author name: {$data['name']}";

$mongo = new Mongo();
$db = $mongo->library;
$authors = $db->authors;

$data = $authors->findone(array('name' => "Isaac Asimov"));

$bookData = array(
    array(
        "ISBN" => "0-553-29337-0",
        "title" => "Foundation",
        "pub_year" => 1951,
        "available" => 1,
    ),
    array(
        "ISBN" => "0-553-29438-5",
        "title" => "I, Robot",
        "pub_year" => 1950,
        "available" => 1,
    ),
    array(
        "ISBN" => "0-517-546671",
        "title" => "Exploring the Earth and the Cosmos",
        "pub_year" => 1982,
        "available" => 1,
    ),
    array(
        "ISBN" => "0 - 553 - 29336 - 2",
        "title" => "Second Foundation",
        "pub_year" => 1953,
        "available" => 1,
    ),
);

$authors->update(
    array("_id" => $data["_id"]),
    array($data => array("books" => $bookData))
);

$mongo = new Mongo();
$db = $mongo->library;
$authors = $db->authors;

$data = $authors->findone(array("authorid" => 4));

echo "Generated Primary Key: {$data['_id']}<br />";
echo "Author name: {$data['name']}<br />";
echo "2nd Book info - ISBN: {$data['books'][1]['ISBN']}<br />";
echo "2nd Book info - Title: {$data['books'][1]['title']}<br />";