<?php
//view file:
/*
 * commonly known as a template contains just presentation code like HTML
 * and the minimum PHP code needed to display any data
 *
 * create a viewer:
 * - create a viewer class in the framework namespace that will be used in
 *   the  controller class
 *
 * render method:
 *  - will require the file that exist in the views file and pass all
 *    the data to it
 *
 *  - using extract($data,
 *    => this takes an associative array where the elements have string
 *       indexes and creates variables with the same name as those string
 *       indexes
 *    => the value of the variable is set to the value of teh array element
 *       with that index
 *    => the second argument tell what to do if the variable already exists
 *       with the name of teh one it's going to create.
 *    => EXTR_SKIP: to skip the variable that already exist and not overwrite
 *       it
 *
 *  - use output buffering to load the content of the template
 *    => ob_buffer()
 *    => ob_get_clean() => will return the value in the buffer and clean it
 *
 *
 * add
 *
 */
// NOtes:
/*
 *  - you should organize your file in sub folders
 *  - your view file should have a little php code as it possible
 *
 */