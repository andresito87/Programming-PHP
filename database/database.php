<?php
$db = new SQLite3('library2.sqlite');
$sql = "CREATE TABLE 'authors' ('authorid' INTEGER PRIMARY KEY, 'name' TEXT)";


if (!$db->exec($sql)) {
    echo "Create Failure \n";
} else {
    echo "Table Authors was created \n";
}

$sql = <<<SQL
INSERT INTO 'authors' ('name') VALUES ('J.R.R. Tolkien');
INSERT INTO 'authors' ('name') VALUES ('Alex Haley');
INSERT INTO 'authors' ('name') VALUES ('Tom Clancy');
INSERT INTO 'authors' ('name') VALUES ('Isaac Asimov');
SQL;

if (!$db->exec($sql)) {
    echo "Insert Failure \n";
} else {
    echo "INSERT to Authors - OK \n";
}

// Books
$sql = "CREATE TABLE 'books' ('bookid' INTEGER PRIMARY KEY,
 'authorid' INTEGER,
 'title' TEXT,
 'ISBN' TEXT,
 'pub_year' INTEGER,
 'available' INTEGER
)";

if (!$db->exec($sql)) {
    echo "Create Failure \n";
} else {
    echo "Table Books was created \n";
}

$sql = <<<SQL
INSERT INTO 'books' ('authorid', 'title', 'ISBN', 'pub_year', 'available')
VALUES (1, 'The Two Towers', '0-261-10236-2', 1954, 1);

INSERT INTO 'books' ('authorid', 'title', 'ISBN', 'pub_year', 'available')
VALUES (1, 'The Return of The King', '0-261-10237-0', 1955, 1);

INSERT INTO 'books' ('authorid', 'title', 'ISBN', 'pub_year', 'available')
VALUES (2, 'Roots', '0-440-17464-3', 1974, 1);

INSERT INTO 'books' ('authorid', 'title', 'ISBN', 'pub_year', 'available')
VALUES (4, 'I, Robot', '0-553-29438-5', 1950, 1);

INSERT INTO 'books' ('authorid', 'title', 'ISBN', 'pub_year', 'available')
VALUES (4, 'Foundation', '0-553-80371-9', 1951, 1);
SQL;

if (!$db->exec($sql)) {
    echo "Insert Failure \n";
} else {
    echo "INSERT to Books - OK\n";
}

$sql = "SELECT DISTINCT a.name, b.title FROM books b, authors a WHERE a.authorid=b.authorid";
$result = $db->query($sql);

while ($row = $result->fetchArray()) {
    echo "{$row['name']} is the author of: {$row['title']}\n";
}