# CoreProtect-Web-Lookup-Interface
_Next update v0.5.1-alpha coming by late January of 2016._
A flexible lookup web interface for CoreProtect 2.
Tested on CoreProtect 2.12.

**Status:** alpha.  Squashing bugs and improving the web interface.

This is a _lightweight_ web application that gives you the power to look up anything CoreProtect is capable of logging in the most efficient way.  [CoreProtect, a Minecraft plugin,](http://dev.bukkit.org/bukkit-plugins/coreprotect/) is developed by Intellii.

This plugin requires a Minecraft server running CoreProtect plugin.  It can fetch data logged by CoreProtect through the MySQL server or the sqlite (database.db) file.

Skip to the [setup](#setup) section to see how you can set this up and test this web application.

**Todo:**
- [X] Develop a way to connect to the CP MySQL database. [`conn.php`]
 - [X] Rewrite the entire code. (v0.5.0-alpha)
- [X] Develop a way to cache CP variables to make it more efficient. [`cachectrl.php`]
 - [X] Turn this into a class to minimize conflict.
- [X] **Make the lookup interface.** [`index.php`]
 - [X] Develop JavaScript code to retrieve database information. (in JSON) (might be separated into `res/conn.js`)
 - [X] Develop lookup (input) form.
 - [X] Develop output lookup table.
 - [ ] Add more features and catch some bugs.
 - [ ] Improve the website design.
- [ ] **Beta testing!**

If you would like to contribute directly to the code and know how git works, you may do so (and teach me more about collaborating using git, please!).  If there is any issues, please tell me about it!

## Setup
This plugin requires a webserver with PHP 5.4+ and a Minecraft server running CoreProtect 2.  If the CoreProtect records data to sqlite, the webserver should be on the same server as the Minecraft server is.  If the CoreProtect is set to log data to a MySQL server, this plugin needs access to the database CoreProtect is using.  Webserver that can read ".htaccess" file, such as Apache, is recommended for security purposes.

The webserver must have write permission to the `cache/` folder in order for this web application to work.  Do this by running:
`$ chmod 777 cache`
from this plugin directory.

After getting the web app, the *first thing* to do is configure `settings.php` with your MySQL server information.  After that, rest should be automatic.

If you would like to see if you configured this correctly, you should visit the `last50.php` page and see if it successfully returns last fifty chats, commands, and block history.  The main page, `index.php`, will be released before the end of this month! (If I did not make it by September, probably by early October.)

## Files
This project consists of three main files:
- `conn.php`, the page used to connect the webserver to the database for lookup data retrieval,
- `cachectrl.php`, the code used for cache management, and
- `index.php`, the web page used to make queries and get results.

~Simon