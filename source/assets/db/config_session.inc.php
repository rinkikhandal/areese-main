<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
  'lifetime' => 1800, // 30min in seconds
  'domain' => 'localhost',
  'path' => '/',
  'secure' => true,
  'httponly' => true
]);

session_start();

// Regenerating the session after every 30 minutes
if (isset($_SESSION["user_id"])) {
  // If the session is for a logged-in user
  if (!isset($_SESSION["last_regeneration"])) {
    regenerate_session_id_loggedin($_SESSION["user_id"]);
  } else {
    $interval = 60 * 30; // 30 minutes
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
      regenerate_session_id_loggedin($_SESSION["user_id"]);
    }
  }
} else {
  // If the session is for a non-logged-in user
  if (!isset($_SESSION["last_regeneration"])) {
    regenerate_session_id();
  } else {
    $interval = 60 * 30; // 30 minutes
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
      regenerate_session_id();
    }
  }
}

// If logged in, regenerate the session ID
function regenerate_session_id_loggedin($userId)
{
  // Safely regenerate the session ID while keeping the session active
  session_regenerate_id(true);

  // You cannot change the session ID directly, but you can store the user ID in the session data
  $_SESSION["session_with_user_id"] = session_id() . "_" . $userId;

  $_SESSION["last_regeneration"] = time();
}

// Normal session regeneration for non-logged-in users
function regenerate_session_id()
{
  session_regenerate_id(true);
  $_SESSION["last_regeneration"] = time();
}
