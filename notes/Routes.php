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
 * - ^ => that mean it should start with the pattern
 * - $ => that mean it should end with the pattern
 * - ## => the pattern should be between them
 * - [] => a character set
 * - - => a character range
 * - * => zero or more
 * - + => one or more
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