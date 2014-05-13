<?php
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
	// print_r($books);

	foreach($books as $titles => $details) {
		// foreach($details as $attribute => $value){
			if ($details['published'] > 1950){
				echo "$titles\n";
			}
		}
	foreach ($books as $titles => $book) {
		echo "$titles was published in " . $book['published'] . " and was written by " . $book['author'] . ".\n\n";
	}