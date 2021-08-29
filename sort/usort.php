


<?php

/**
 * Method 1
 *
 */
$languages = array();

$languages['PHP'] = array(
    "first_release" => "1995",
    "latest_release" => "7.3.11",
    "designed_by" => "Rasmus Lerdorf",
    "description" => array(
        "extension" => ".php",
        "typing_discipline" => "Dynamic, weak",
        "license" => "PHP License (most of Zend engine
			under Zend Engine License)"
    )
);

$languages['Python'] = array(
    "first_release" => "1991",
    "latest_release" => "3.8.0",
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py",
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);

$languages['Java'] = array(
    "first_release" => "2000",
    "latest_release" => "3.8.0",
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py",
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);



usort($languages, function ($a, $b) {
    return $a['first_release'] <=> $b['first_release'];
});
var_dump($languages);


/**
 * Method 2
 *
 */

$new = [
    [
        'hashtag' => 'a7e87329b5eab8578f4f1098a152d6f4',
        'title' => 'Flower',
        'order' => 3,
    ],
    [
        'hashtag' => 'b24ce0cd392a5b0b8dedc66c25213594',
        'title' => 'Free',
        'order' => 2,
    ],
    [
        'hashtag' => 'e7d31fc0602fb2ede144d18cdffd816b',
        'title' => 'Ready',
        'order' => 1,
    ],
];

/**
 * Array_column — Return the values from a single column in the input array
 *  array_column($new, 'order'); it will take ['order'] column in array
 */

$keys = array_column($new, 'order');
array_multisort($keys, SORT_ASC, $new);
var_dump($new);

?>

