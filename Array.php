<?php
$array = [
    'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
    'red' => ['strawberry', 'cheer', 'tomato'],
    'sweet' => ['sugar', 'cake', 'strawberry'],
];

$count = array_reduce($array, function ($carry, $item) {
    return $carry + count(array_intersect($item, ['strawberry']));
}, 0);

echo "The item 'strawberry' appears $count times in the array.";