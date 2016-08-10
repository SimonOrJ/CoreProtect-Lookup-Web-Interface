<?php return array (
// This is where the default configuration will go.  All comments will be
//   discarded upon configuration of the tool from the web UI.
// The lock on the account must be set to false before you can use it.
// It is recommended to change the 'password' before you set the lock to
//   false.
  'user' => 
  array (
    # Optional: Change and set-up the admin user.
    'admin' => 
    array (
      # 1. Set the password.
      'pass' => 'password',
      # 2. Set this to false to allow account access from the web.
      'lock' => true,
      'perm' => 0, // 0 means full permission!
    ),
    # Optional: Configure other users here.  Create as many users as you want.
    'purgableuser' => 
    array (
      'pass' => 'examplepass',
      'lock' => true,
      'perm' => 1, // 1 is lookup tool access plus cache purging access.
    ),
    'user' => 
    array (
      'pass' => 'examplepass',
      'lock' => true,
      'perm' => 2, // 2 is just lookup tool access.
    ),
  ),
  # Optional: Configure navigation items here.
  'navbar' => 
  array (
    'Home' => '/',
    'BanManager' => '../banmanager/',
    'Dynmap' => 'http://127.0.0.1:8123/'
  ),
  # Optional: configure this just by using this file?
  'form' => 
  array (
    'dateFormat' => 'll',
    'timeFormat' => 'LTS',
    'timeDividor' => 300,
    'pageInterval' => 25,
  ),
  'copyright' => 'SimonOrJ, 2015-%year%',
);?>