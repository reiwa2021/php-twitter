<?php
// -------------------------------------------
// プログラム名:プログラム共通定数ファイル
// 説明:各プログラムで使う定数を定義します
// -------------------------------------------

// Consumer keyの値を格納
$consumer_key = 'AA2pzHCBnwYV67MvXDBMDtfwC';
// $consumer_key = getenv('CONSUMER_KEY');

// Consumer secretの値を格納
$consumer_key_sercret = 'A2NXwsdETNVISSYH2wwSX7OX02isApFmEyOJwBIza5cIKJgUzB';
// $consumer_key_sercret = getenv('CONSUMER_SECRET');

// Access Tokenの値を格納
$access_token = '443364794-MpGc93DlWhhAbH9hG3RGdWBP2xRKFPvVFGsfR0AH';
// $access_token = getenv('ACCESS_TOKEN_KEY');

// Access Token Secretの値を格納
$access_token_secret = 'mkSUwH1526UmWJTDJJwXCYx5ExIfyJySw4SnovfA1kkED';
// $access_token_secret = getenv('ACCESS_TOKEN_SECRET');

// Bearer Tokennの値を格納(本プログラムでは使わない)
$bearer_token =
  'AAAAAAAAAAAAAAAAAAAAAOd2gwAAAAAADKL8YYuEY%2FZQxqgWBal5hh8cs9Y%3DLlGhX8q6bo8C4mKrGlz6o9tiogwRdbMrpuZmldGoxuwL4dSKQk';

//　ツイート情報のツイート数
const TWEETS_NUM = 5;
// ツイッターアカウント一覧ファイル
const FILE_PATH = './list/account.txt';
// ツイッターURL
const TWITTER_URL = 'https://twitter.com/';
// 1ページに表示するアカウント数
const PAGE_TWEET_NUM = 8;
// エラーメッセージ
const ERR_MSG = '該当するツイートがありません';
