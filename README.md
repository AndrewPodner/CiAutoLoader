ci-abstractloader
=================

Autoloader hook for CodeIgniter.  Useful for integrating abstract classes and
interfaces into your CI project.  The code works by adding an autoloader function
into your CI application as a pre-system hook.  It will only load classes in
the designated folder, and it ignores all classes in other folders so as not to
interfere with core system classes and loader functions.

Details:
--------
Tested on: Codeigniter 2.1.3
License: MIT
Copyright: 2012, Andrew Podner

Instructions:
-------------
* Create a folder called "abstract" under your /application folder.
* All abstract classes and interfaces must be stored in the "abstract folder"
* Make sure your /application/config/config.php has hooks enabled set to true. (@Line 94)
* Add the autoloader.php file to your /application/hooks directory
* Add the code from hooks.php to your /application/confg/hooks.php file


Thanks:
-------
* EllisLab for making CodeIgniter
* php_princess in the Codeigniter forums for asking how this could be done and giving me the idea for the code.


Versions:
1.0:  12/14/12 - Initial upload & release
