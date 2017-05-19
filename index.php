<?php
require_once("build_html.php");

$placeholder_paragraph = [
["p","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus risus non risus mattis accumsan. Nam vestibulum justo a lobortis semper. Nunc pretium, dolor nec auctor scelerisque, nulla nisl semper quam, eget convallis nisi elit ut augue. Sed ornare magna ac malesuada suscipit. Vivamus finibus viverra blandit. Vestibulum mattis condimentum sapien ut dapibus. In consectetur velit felis, nec commodo velit mollis vel. In ut tempor dui. Pellentesque nunc felis, fringilla ac convallis quis, eleifend vitae neque. Sed a accumsan turpis. Phasellus ultricies, nisi vel varius malesuada, nisi nunc rhoncus ante, ac egestas diam neque sit amet massa. Nulla finibus sollicitudin enim a pretium. Vestibulum rutrum ut est a tempus. Nunc sagittis neque id venenatis tempus. Nulla facilisi. Duis aliquam gravida placerat."],
["p","Phasellus consequat rhoncus justo eu commodo. Nunc sit amet congue nulla. Nullam ut sagittis nibh. Aliquam eget lectus eget augue blandit tristique. Nunc eu consectetur ipsum, nec molestie mauris. Integer nec massa nec magna posuere placerat luctus sed leo. Aenean accumsan laoreet vulputate. Pellentesque blandit, lectus ac congue consequat, elit enim consequat metus, sit amet tincidunt felis quam sit amet nisl. Phasellus et nibh quis tellus blandit sollicitudin tincidunt quis arcu. Vivamus nibh tortor, commodo pretium mi sit amet, hendrerit volutpat ante. Duis at risus eget elit tristique hendrerit. Suspendisse enim est, mollis quis feugiat sit amet, posuere eget dolor. Fusce congue sapien sed luctus pulvinar. Praesent viverra egestas rutrum. Nam viverra suscipit ipsum, in imperdiet neque laoreet vel. Proin egestas interdum vulputate."],
["p","Duis congue nisi nec velit porttitor volutpat. Donec sem libero, eleifend nec libero ut, suscipit tempor magna. Mauris imperdiet, arcu id rhoncus aliquam, purus orci semper mauris, vitae euismod lectus augue at libero. Vivamus interdum felis ac tristique congue. Curabitur mattis, lacus at condimentum mattis, augue magna consectetur enim, nec tempus nisi nulla at tortor. Maecenas ornare, nisi a commodo finibus, lectus nunc pretium ex, in tempor eros odio et dolor. Duis sollicitudin, eros vitae vehicula condimentum, lectus nisi porttitor mauris, non congue massa neque at orci. Curabitur lobortis justo nibh, non condimentum nisi dictum ac. Nulla tempus mollis magna facilisis scelerisque. Ut porta vehicula maximus. In nisi felis, ultricies quis lobortis in, tristique non dui."]
];
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

        <script src="twitter_widgets.js" charset="utf-8"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="header">
                <div class="menu pull-left"><i class="fa fa-bars"></i></div>
                <h1 class="pull-left">Outcome 3: <span class="">Privacy</span></h1>
            </div>
            <?php html_full_page([
                [
                    "anchor"=>"overview",
                    "title"=>"overview of the issue",
                    "short-title"=>"overview",
                    "paragraphs"=>[
["p","Issues of privacy have been a general concern for many years, however the problem has gained more awareness with the development of more technology and more social media platforms. Social media services are services that allow users to connect with others for entertainment, communication, and to post updates of their lives in the forms of text posts, images, videos or audio, and this is where the issue arises. Some users do not think about privacy when using social media, and will share sensitive data unknowing of the risks that are associated with the platforms. Multiple surveys have been taken to consider risks associated with the services, and how users feel about the privacy settings/features in place on them, and current information such as profits of social media services can suggest interesting points. Social media services rely on the users’ perceived lack of value for their data, and with Facebook still making profits, it suggests online privacy is still a big issue that needs to be taught to everyone, especially those who are beginning to use it for the first time. Recent surveys and research, including the Educational Testing Service, shows that millennials, a large percentage of social media users, scored the lowest of their peers in problem solving in technology-rich environments. An alarming survey suggests that a majority of millennials in the United States understand the privacy risks associated with the platforms, but had done too much damage already, and an incredible 75% would deactivate their accounts if another breach occurred. With millions of users, social media is a sea of information, and past posts can come back to haunt users later in life."],
["p","Metadata, privacy settings and users simply sharing too much information can compromise privacy, and this information and more will be accessible on this website."]
                    ]
                ],
                [
                    "anchor"=>"how",
                    "title"=>"how is privacy being compromised?",
                    "short-title"=>"how is it compromised?",
                    "paragraphs"=>[
["p","On Social media, some people are exposing more data than they think. For example, most people are unaware that there is metadata associated with every post, such as location data. Some can even choose to broadcast their location with frequent 'check-ins' - a highly popular feature on facebook. While your holiday snaps might look fun, if the person looking at those snaps knows what your home address is, you are trusting them not to burgle your house.  Most people don’t realise just how much metadata about you is being stored. It is like you saying 'come stalk me'. Social media platforms such as facebook offer some privacy protection such as posting to friends only, and having your mobile phone number only shown to yourself. But facebook itself still has the data."], 
["p","When you pirate a movie, you should be worried, as the metadata can show up that you are downloading pirated content. The torrenting system works by many computers owning the content and sharing it to other computers who also request the same content. When the computers are uploading and downloading, they are sharing metadata of what they are doing. Because metadata is held for two years, it will take that long to erase your 'footprint'. People who pirate are literally allowing someone to take a record of them pirating a film. It is really easy to track metadata from a certain IP address and then track who is/was in possession of the data. Metadata is able to be released in legal cases."],
["p","These days we are sharing lots more data than we ever did. Some people are sharing relatively sensitive information, an example is a 'friend' shared the information about someone else having a diagnosis of cancer. Some people have total strangers as 'friends' , and they are perfectly happy to broadcast every significant event in their life. Some people also choose to broadcast about the status of their sex lives, which could lead to shaming."],
["h2","Summary"],
["p","People sharing metadata is a problem because metadata is exposing more and more private information about people. On social media, the amount of personal information that we are freely giving away is enormous. We are also happy to be 'friends' with heaps of people who may or may not be strangers. Those 'friends' or 'followers' are able to see the information we post.  The overwhelming amount of information could be potentially used for identity theft. A lot of people are unaware that their privacy is being taken away from them. "]
                    ]
                ],
                [
                    "anchor"=>"why",
                    "title"=>"why is privacy being compromised?",
                    "short-title"=>"why is it compromised?",
                    "paragraphs"=>[
["p","Our privacy is being compromised because we are exposing more and more information. When we are using navigation apps with GPS they can see the exact location where we have been. If we use those navigation apps with a user profile, they can save the locations with our profile, so one party can have heaps of location data."],
["p","Those self driving cars that google uses for street view actually collects data from every domestic wifi network they passed. "],
["p","Every email could be 'read' by the server provider, eg if you have gmail, Google (the email provider) could 'read' your email, potentially extracting the sender’s and receiver's information."],
["h2","Advertising"],
["p","Advertising is taking our information from sites such as facebook, and targeting us with ads. Those ads are specialised from our information, and every movement on your profile can be seen by advertisers. If the advertisers pitch a product that you like, they are making extra money from the sale they wouldn’t have otherwise had. "],
["p","If you click a 'like' button, several parties can have access to that information, and they can target you on things based on what you like. "],
["p","'Cookies' (not the yummy choccie chip type) can track every user's history and web trail. "],
["p","They could sell the information to more advertising agents make even more money."]

                    ]
                ],
                [
                    "anchor"=>"whoimprove",
                    "title"=>"is anyone doing anything to improve privacy?",
                    "short-title"=>"is anyone doing anything?",
                    "paragraphs"=>$placeholder_paragraph
                ],
                [
                    "anchor"=>"howimprove",
                    "title"=>"what can we do about it?",
                    "short-title"=>"how to improve",
                    "paragraphs"=>$placeholder_paragraph
                ],
                [
                    "anchor"=>"ourview",
                    "title"=>"what we think",
                    "short-title"=>"what we think",
                    "paragraphs"=>$placeholder_paragraph
                ],
            ]); ?>
        </div>
    </body>
</html>