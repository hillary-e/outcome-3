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
                    "paragraphs"=>[]
                ],
                [
                    "anchor"=>"how",
                    "title"=>"how is privacy being compromised?",
                    "short-title"=>"how is it compromised?",
                    "paragraphs"=>[
["p","On Social media, some people are exposing more data than they think. For example, most people are unaware that there is metadata associated with every post, such as location data. Some can even choose to broadcast their location with frequent “check-ins” - a highly popular feature on facebook. While your holiday snaps might look fun, if the person looking at those snaps knows what your home address is, you are trusting them not to burgle your house.  Most people don’t realise just how much metadata about you is being stored. It is like you saying “come stalk me”. Social media platforms such as facebook offer some privacy protection such as posting to friends only, and having your mobile phone number only shown to yourself. But facebook itself still has the data."], 
["p","When you pirate a movie, you should be worried, as the metadata can show up that you are downloading pirated content. The torrenting system works by many computers owning the content and sharing it to other computers who also request the same content. When the computers are uploading and downloading, they are sharing metadata of what they are doing. Because metadata is held for two years, it will take that long to erase your “footprint”. People who pirate are literally allowing someone to take a record of them pirating a film. It is really easy to track metadata from a certain IP address and then track who is/was in possession of the data. Metadata is able to be released in legal cases."],
["p","These days we are sharing lots more data than we ever did. Some people are sharing relatively sensitive information, an example is a “friend” shared the information about someone else having a diagnosis of cancer. Some people have total strangers as “friends” , and they are perfectly happy to broadcast every significant event in their life. Some people also choose to broadcast about the status of their sex lives, which could lead to shaming."],
["h2","Summary"],
["p","People sharing metadata is a problem because metadata is exposing more and more private information about people. On social media, the amount of personal information that we are freely giving away is enormous. We are also happy to be “friends” with heaps of people who may or may not be strangers. Those “friends” or “followers” are able to see the information we post.  The overwhelming amount of information could be potentially used for identity theft. A lot of people are unaware that their privacy is being taken away from them. "]
                    ]
                ],
                [
                    "anchor"=>"why",
                    "title"=>"why is privacy being compromised?",
                    "short-title"=>"why is it compromised?",
                    "paragraphs"=>[
["p","Our privacy is being compromised because we are exposing more and more information. When we are using navigation apps with GPS they can see the exact location where we have been. If we use those navigation apps with a user profile, they can save the locations with our profile, so one party can have heaps of location data."],
["p","Those self driving cars that google uses for street view actually collects data from every domestic wifi network they passed. "],
["p","Every email could be “read” by the server provider, eg if you have gmail, Google (the email provider) could “read” your email, potentially extracting the sender’s and receiver's information."],
["h2","Advertising"],
["p","Advertising is taking our information from sites such as facebook, and targeting us with ads. Those ads are specialised from our information, and every movement on your profile can be seen by advertisers. If the advertisers pitch a product that you like, they are making extra money from the sale they wouldn’t have otherwise had. "],
["p","If you click a “like” button, several parties can have access to that information, and they can target you on things based on what you like. "],
["p","“Cookies” (not the yummy choccie chip type) can track every user's history and web trail. "],
["p","They could sell the information to more advertising agents make even more money."]

                    ]
                ],
                [
                    "anchor"=>"whoimprove",
                    "title"=>"is anyone doing anything to improve privacy?",
                    "short-title"=>"is anyone doing anything?",
                    "paragraphs"=>[]
                ],
                [
                    "anchor"=>"howimprove",
                    "title"=>"what can we do about it?",
                    "short-title"=>"how to improve",
                    "paragraphs"=>[]
                ],
                [
                    "anchor"=>"ourview",
                    "title"=>"what we think",
                    "short-title"=>"what we think",
                    "paragraphs"=>[]
                ],
            ]); ?>
        </div>
    </body>
</html>