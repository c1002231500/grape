<?php

/* $Id: config.sample.inc.php 9675 2006-11-03 09:06:06Z nijel $ */
// vim: expandtab sw=4 ts=4 sts=4:

/**
 * phpMyAdmin sample configuration, you can use it as base for 
 * manual configuration. For easier setup you can use scripts/setup.php
 *
 * All directives are explained in Documentation.html and on phpMyAdmin 
 * wiki <http://wiki.cihar.com>.
 */

/* 
 * This is needed for cookie based authentication to encrypt password in 
 * cookie
 */
$cfg['blowfish_secret'] = 'niowms'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/* 
 * Servers configuration
 */
$i = 0;

/* 
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['host']          = '127.0.0.1'; // MySQL hostname
$cfg['Servers'][$i]['port']          = '';          // MySQL port - leave blank for default port
$cfg['Servers'][$i]['socket']        = '';          // Path to the socket - leave blank for default socket
$cfg['Servers'][$i]['connect_type']  = 'tcp';       // How to connect to MySQL server ('tcp' or 'socket')
$cfg['Servers'][$i]['compress']      = FALSE;       // Use compressed protocol for the MySQL connection
                                                    // (requires PHP >= 4.3.0)
$cfg['Servers'][$i]['controluser']   = '';          // MySQL control user settings
                                                    // (this user must have read-only
$cfg['Servers'][$i]['controlpass']   = '';          // access to the "mysql/user"
                                                    // and "mysql/db" tables)
$cfg['Servers'][$i]['auth_type']     = 'cookie';    // Authentication method (config, http or cookie based)?
$cfg['Servers'][$i]['user']          = 'root';      // MySQL user
$cfg['Servers'][$i]['password']      = 'projectshanghai';          // MySQL password (only needed
                                                    // with 'config' auth_type)
$cfg['Servers'][$i]['only_db']       = '';          // If set to a db-name, only
                                                    // this db is displayed
                                                    // at left frame
                                                    // It may also be an array
                                                    // of db-names
$cfg['Servers'][$i]['verbose']       = '';          // Verbose name for this host - leave blank to show the hostname

$cfg['Servers'][$i]['pmadb']         = '';          // Database used for Relation, Bookmark and PDF Features
                                                    // (see scripts/create_tables.sql)
                                                    //   - leave blank for no support
                                                    //     DEFAULT: 'phpmyadmin'
$cfg['Servers'][$i]['bookmarktable'] = '';          // Bookmark table
                                                    //   - leave blank for no bookmark support
                                                    //     DEFAULT: 'PMA_bookmark'
$cfg['Servers'][$i]['relation']      = '';          // table to describe the relation between links (see doc)
                                                    //   - leave blank for no relation-links support
                                                    //     DEFAULT: 'PMA_relation'
$cfg['Servers'][$i]['table_info']    = '';          // table to describe the display fields
                                                    //   - leave blank for no display fields support
                                                    //     DEFAULT: 'PMA_table_info'
$cfg['Servers'][$i]['table_coords']  = '';          // table to describe the tables position for the PDF schema
                                                    //   - leave blank for no PDF schema support
                                                    //     DEFAULT: 'PMA_table_coords'
$cfg['Servers'][$i]['pdf_pages']     = '';          // table to describe pages of relationpdf
                                                    //   - leave blank if you don't want to use this
                                                    //     DEFAULT: 'PMA_pdf_pages'
$cfg['Servers'][$i]['column_info']   = '';          // table to store column information
                                                    //   - leave blank for no column comments/mime types
                                                    //     DEFAULT: 'PMA_column_info'
$cfg['Servers'][$i]['history']       = '';          // table to store SQL history
                                                    //   - leave blank for no SQL query history
                                                    //     DEFAULT: 'PMA_history'
$cfg['Servers'][$i]['verbose_check'] = TRUE;        // set to FALSE if you know that your PMA_* tables
                                                    // are up to date. This prevents compatibility
                                                    // checks and thereby increases performance.
$cfg['Servers'][$i]['AllowDeny']['order']           // Host authentication order, leave blank to not use
                                     = '';
$cfg['Servers'][$i]['AllowDeny']['rules']           // Host authentication rules, leave blank for defaults
                                     = array();

/* 
 * End of servers configuration
 */

/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

?>
