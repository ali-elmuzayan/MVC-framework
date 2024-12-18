<?php
// Routes
/*
 * route array:
 *  - which will contain the path and the params that related to that route
 *
 * add method:
 *  - will add the route path, and the params that related to that route
 *
 * match method:
 *  - which will take the route path to return its params otherwise return
 *    false
 */

// advancing route:
/*
 * we could have a pattern:
 *  - so the first segment is the controller and the second one is the
 *    action
 *  - we will use regular expression with that
 *
 *
 *
 * Note:
 *  - str_contains(string, the value to check)
 *    to check if the string contains this value
 */

// regex:
/*
 * - ^   => that mean it should start with the pattern
 * - $   => that mean it should end with the pattern
 * - ##  => the pattern should be between them
 * - []  => a character set
 * - -   => a character range
 * - *   => zero or more
 * - +   => one or more
 * - .   => wildcard => match anything
 * - [^] => negated character set which mean match any character not inside it
 * - \d  => [0-9] any digit
 * - \w  => [A-Za-z0-9_] word character
 * - \s  => any whitespace character (space, tab, etc.)
 *
 *
 * capture groups and sub patterns:
 *  - this matched in matches array
 *
 * named capture groups:
 *  - (?<name>[a-z]+) => ?<name>
 *  - (?P<name>[a-z]+) => ?P<name>
 *  - (?'name'>[a-z]+) => ?'name'>
 *  - just difference in syntax all give the same result
 *
 * array that return only the index key:
 *  - array_filter($matches, "is_string", ARRAY_FILTER_USE_KEY);
 */

// get variable from the route path:
/*
 *
 *
 * Match url in a case Insensitive:
 *  - when return teh pattern add 'i' at the end
 *
 * Match Unicode character in the URL path
 *  - $path = decode($path)
 *  - when return the pattern add 'u' at the end
 *
 * Note:
 *  - add general routes after more specific ones
 */


