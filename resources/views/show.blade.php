<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8"> 
<title>{{ $post->title }}</title>
<link rel="stylesheet" href="/css/styles.css">
<body>
  <div class="container">
   <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($posts->body)) !!}</p>
  </div>
</body>
</head>