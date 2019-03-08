<?php

require_once(__DIR__ . '/config.php');

// package
// - Composer

use Abraham\TwitterOAuth\TwitterOAuth;

require 'vendor/autoload.php';
$connection = new TwitterOAuth(
  CONSUMER_KEY,
  CONSUMER_SECRET,
  ACCESS_TOKEN,
  ACCESS_TOKEN_SECRET);

  // 認証ユーザー(本人)の情報を取得
  // $owner = $connection->get("account/verify_credentials");

  // 認証ユーザー(本人)のタイムラインを3つ取得
  // $ownerTimeline = $connection->get("statuses/home_timeline", ['count'=>'3']);

  // ユーザー名でユーザー情報を取得
 $targetUser = $connection->get('users/show', ['screen_name'=> '@YuGiOh_OCG_INFO']);

/* ユーザーIDで情報(Tweetなど)を取得/*  $userTimeline = $connection->get('statuses/user_timeline',
    array(
        'count' => '3',
        'id'=> '618646265',
));
*/
var_dump($targetUser);
