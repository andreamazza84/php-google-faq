<?php

// Riscrivere questa pagina del sito google
// https://policies.google.com/faq. 
// Ci sono diverse domande con relative risposte.
// Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.

$faqs = [
    "#01" => [
                "question" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
                "answer" => [
                    "The recent <a href='#'>ruling by the Court of Justice of the European Union</a> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.",
                    "Since this ruling was published on 13 May 2014, we've been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public's right to know and distribute information.",
                    "If you have a removal request, please fill out this <a href='#'>webform</a>. You'll receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.",
                    "We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it's important to respect the Court's judgment and are working hard to devise a process that complies with the law.",
                    "When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal."
                ],
            ], 

    "#02" => [
                "question" => "How does Google protect my privacy and keep my information secure?",
                "answer" => [
                    "We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.",
                    "We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.",
                    "You can learn more about safety and security online, including how to protect yourself and your family online, at the <a href='#'>Google Safety Center.</a>",
                    "<a href='#'>Learn more</a> about how we keep your personal information private and safe — and put you in control."
                ],
            ],

    "#03" => [
                "question" => "How can I remove information about myself from Google's search results?",
                "answer" => [
                    "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit our help page for more information.",
                ],
            ], 

    "#04" => [
                "question" => "Are my search queries sent to websites when I click on Google Search results?",
                "answer" => [
                    "In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.",
                ],
            ],
];

?>
<!-- <a href=""></a> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet"> 
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Google FAQ</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .flex{
        display: flex;
        align-items: center;
        align-content: center;
        height: 100%;
    }
    body{
        background: white;
        color: #333;
        font-family: 'Roboto', sans-serif, arial;
    }
    .container{
        max-width: 995px;
        width: 90%;
        height: 100%;
        margin: auto;
    }
    #header{
        width: 100%;
        height: 100px;
        padding: 0 20px;
        background: white;
        border-bottom: 1px solid #888;
        position: fixed;
        z-index: 1;
    }
    #header-top, #header-bottom{
        width: 100%;
        height: 50%;
    }
    #navbar, .logo, .options{
        width: 100%;
        height: 100%;
    }
    #main{
        min-height: 600px;
        padding-top: 160px;
    }
    .logo{
        align-items: flex-end;
    }
    .logo > img{
        margin-right: 10px;
    }
    .logo > h3{
        font-size: 20px;
        font-weight: 500;
        color: #666;
    }
    .options > .more {
        justify-content: flex-end;
        align-items: flex-end;
    }
    .btn{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        border-radius: 25px;
        margin-left: 10px;
        color: #666;
        cursor: pointer;
    }
    .btn.user{
        background-color: purple;
        color: white;
        font-size: 25px;
    }
    .btn:not(.user):hover{
        background-color: #ddd;
    }
    ul.top-menu{
        align-items: flex-end;
    }
    ul.top-menu > li {
        list-style: none;
        margin-right: 30px;
    }
    ul.top-menu > li > a{
        display: inline-block;
        height: 30px;
        color: #666;
        text-decoration: none;
        font-size: 14px;
        font-family: 'Poppins', arial;
        font-weight: 600;
    }
    ul.top-menu > li > a.active{
        color: #3367d6;
        border-bottom: 2px solid #3367d6;
    }
    h2{
        font-family: 'Poppins', arial;
        font-weight: 500;
        font-size: 22px;
        padding: 30px 0;
        color: #666;
    }
    p{
        font-size: 14px;
        font-weight: 400;
        text-align: justify;
        padding-bottom: 20px;
        line-height: 1.5;
    }
    p > a{
        text-decoration: none;
        color: #3367d6;
    }
    #footer{
        height: 40px;
        background: #eee;
    }
    #footer .container > ul.bottom-menu{
        width: 50%;
        height: 100%;
        align-items: center;
    }
    #footer .container > ul.bottom-menu > li{
        margin-right: 10px;
        list-style: none;
    }
    #footer .container > ul.bottom-menu > li > a{
        display: block;
        font-size: 11px;
        font-weight: 400;
        text-decoration: none;
        color: #666;
    }
</style>
<body>
    <header id="header">
        <div id="header-top" class="flex">
            <div class="logo flex">
                <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="google logo">
                <h3>Privacy & Terms</h3>
            </div>
            <div class="options">
                <div class="more flex">
                    <div class="btn">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="user btn">A</div>
                </div>
            </div>
        </div>
        <div id="header-bottom">
            <nav id="navbar">
                <ul class="top-menu flex">
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Technologies</a></li>
                    <li><a class="active" href="#">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /#header -->

    <main id="main">
        <div class="container">
            <?php foreach ($faqs as $faq) { ?>
                <h2>  <?php echo $faq["question"];?>  </h2>
                
                <?php foreach ($faq["answer"] as $paragraph) { ?>
                    <p> <?php echo $paragraph;?> </p>
                <?php }?>
            
            <?php } ?>
        </div>
    </main>
    <!-- /#main -->
    <footer id="footer">
        <div class="container">
            <ul class="bottom-menu flex">
                <li><a href="#">Google</a></li>
                <li>-</li>
                <li><a href="#">About Google</a></li>
                <li>-</li>
                <li><a href="#">Privacy</a></li>
                <li>-</li>
                <li><a href="#">Terms</a></li>  
            </ul>

        </div>
    </footer>
    <!-- /#footer -->
</body>
</html>

<?php 
?>