<?php
require_once("build_html.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>KW Outcome 3: Privacy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="main.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="header">
                <div class="menu pull-left"><i class="fa fa-bars"></i></div>
                <h1 class="pull-left">Outcome 3: <span class="">Privacy</span></h1>
            </div>
            <? html_full_page([
                [
                "anchor"=>"overview",
                "title"=>"overview of the issue",
                "short-title"=>"overview",
                "paragraph"=>""
                ],
                [
                "anchor"=>"how",
                "title"=>"how is privacy being compromised?",
                "short-title"=>"how is it compromised?",
                "paragraph"=>""
                ],
                [
                "anchor"=>"why",
                "title"=>"why is privacy being compromised?",
                "short-title"=>"why is it compromised?",
                "paragraph"=>""
                ],
                [
                "anchor"=>"whoimprove",
                "title"=>"is anyone doing anything to improve privacy?",
                "short-title"=>"is anyone doing anything?",
                "paragraph"=>""
                ],
                [
                "anchor"=>"howimprove",
                "title"=>"what can we do about it?",
                "short-title"=>"how to improve",
                "paragraph"=>""
                ],
                [
                "anchor"=>"ourview",
                "title"=>"what we think",
                "short-title"=>"what we think",
                "paragraph"=>""
                ],
            ]); ?>
        </div>
    </body>
</html>