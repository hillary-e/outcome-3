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
                    "paragraphs"=> [
["p","While it would be reassuring to hear that governments and policy leaders are working to improve cyber safety, it is unfortunately unreasonable. While governments have financial and legal sway over some private sectors, the bills suggested will either fall behind the advancements of technology and online platforms, or provide controversial bills like the Cyber Intelligence Sharing and Protection Act, which would allow private companies to share data with government agencies – without the fear of lawsuits. This has caused several ethical and moral concerns, however, despite these concerns, there is still enthusiasm for government action due to distrust in major online companies like Facebook and Google. Evidence suggests government action into this issue may be limited for now, so it is best for users of social media platforms to look past convenience and apply the best privacy for their benefit."]
                    ]
                ],
                [
                    "anchor"=>"howimprove",
                    "title"=>"what can we do about it?",
                    "short-title"=>"how to improve",
                    "paragraphs"=>[
["p","As you are aware by now, people including yourself are sharing more personal data than ever before. Some strategies include basic methods such as erasing cookies, modifying privacy settings on your smartphone and logging out of sites once you have finished. You should be forgoing loyalty schemes that supermarkets offer eg “flybuys”, although you may be missing out on discounts, it is a poor return considering the amount of money they would make out of your information. "],
["p","Forgo google for more secure search engines such as “duck-duck go”, and use TOR browser for the ultimate privacy. Using disconnect.me can help you monitor and block tracking requests. There is a site called “aboutthedata.com” which can tell you potentially how much information companies have of you. The final tip is to occasionally do a thorough check of the available privacy settings - they do change, so make sure your data is not at risk. "],
["p","By doing these tips, you will be more protected than most, but there might already be data about you, which may be hard to permanently remove.  "],
// this is from later in the Google Doc
["p","Recently online social media sites such as Facebook have started selling users metadata to allow for personalized advertisements. For example, if you liked a post on McDonald’s new burger, you would get advertisements on based on that. Things like this have created problems in current social media. "],
["p","Another area that various sources have pointed out that could be improved upon is that privacy settings need to become more prominent and user-friendly. Many sites have their privacy settings tuck away behind multiple menus, making it unnecessarily hard to find for an average user or person."],
["p","When you sign onto Facebook or Google, for example, you give both implicit and explicit permission to the respective Internet service provider to use part or all of the data associated with your activities in the manner specified by their Privacy Statement and Terms of Service agreement."],
["p","Some ways you could improve privacy online include:"],
["h2","Browser Settings"],
["p","There are some easy things that can be done to configure a browser for better security and privacy. The basics include disabling cookies from foreign websites, from sites you haven't visited, also known as third-party cookies. Generally, you'll want to accept cookies from the sites you visit."],
["p","Apple's Safari blocks third-party cookies by default; Mozilla intends to make this the default setting soon in Firefox, but for now you'll need to opt for the setting, You have to choose these settings in Microsoft's Internet Explorer and Google's Chrome."],
["p","Also, newer versions of most Internet-browsers also have an option labeled “Do not track.” Which requests that a site disable their site tracking systems."],
["h2","Two-step authentication"],
["p","When it comes to security, passwords are becoming more and more hackable and less secure."],
["p","Two-step authentication is a security method that is becoming more and more prominent."],
["p","Two-step authentication involves the usual username and password setup, but additionally the service being logged into will send a multiple-digit  unique code to you in some way, a popular way of receiving this code is via SMS or texting but it could be emailed as well."],
["p","Companies such as You-tube, Steam and Google are already trying to replace the old password system with two step-authentication."]
                    ]
                ],
                [
                    "anchor"=>"ourview",
                    "title"=>"what we think",
                    "short-title"=>"what we think",
                    "paragraphs"=>[
["p","Our team’s point of view is that we think companies such as those for marketing keep too much metadata about us, and we need to be aware and concerned. Data retention is a growing concern as more and more highly personal information such as location is being recorded. Companies can sell that data to other companies and make money. Whats even worse is that everything you do on the internet is recorded by your ISP, and they keep the data for 2 years! "],
["p","Most people unfortunately don’t realise how much data they are sharing.  "],
["p","With the amount of information stored, it could potentially lead to identity theft. "],
["p","Sadly, to compound to the issue, the data may exist forever.  It is very easy to upload sensitive information such as location and activities you did with advancements made to internet connectivity (eg 4G), but still very hard to erase the trail. "],
["p","Overall, we think that people should be concerned and it is important to regulate which company gets what information about us. We also think that they are overall storing too much information about us.    "]
                    ]
                ],
            ]); ?>
        </div>
    </body>
</html>