<?php

$error = "";

if (isset($_SERVER['HTTP_REFERER'])){
    $url = $_SERVER['HTTP_REFERER'];
}
else{
    $url = "/";
}

if(isset($id) != ''){
    $tasks = DB::table('tasks')->where('id', '=', $id)->first();
}


?>
<link rel="stylesheet" type="text/css" href={{ asset("css/list_add.css") }}>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<head>
    <title>Modifier tache</title>
</head>

<body>

{{ HTML::todolistmodify($tasks, $url) }}

</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
