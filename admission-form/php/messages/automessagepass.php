<?php$automessagepass = '<html>    <head>        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        <title>EMAIL TEMPLATE</title>        <style type="text/css">            /* ---------- RESET STYLES ---------- */            body{margin:0; padding:0;}            /* ---------- TEMPLATE STYLES ---------- */            .bodyTable{			    position:relative;				display:block;				padding:0 30px;				margin:30px auto;				height:auto !important; 				max-width:600px;                width:100%;	                -webkit-box-sizing:border-box;	               -moz-box-sizing:border-box; 	                    box-sizing:border-box;				            }            /* ---------- BODY STYLES ---------- */            .bodyContent{			    position:relative;				display:block;                background-color:#fff;                border:1px solid #ddd;				padding:30px;				margin:0;				height:auto!important; 				max-width:600px;				width:100%;				text-align:center;				line-height:20px;				word-wrap:break-word;                -webkit-box-sizing:border-box;	               -moz-box-sizing:border-box; 	                    box-sizing:border-box;				            }						.bodyContent h1{                color:#272e38;                font-family:Helvetica;                font-size:22px;				font-style:normal;				font-weight:normal;				padding:0;				margin:20px 0;            }			            .bodyContent h6{                color:#272e38;                font-family:Helvetica;                font-size:14px;				font-style:normal;				font-weight:normal;				padding:0;				margin:0 0 40px 0;            }						.bodyContent p{                /*@editable*/ color:#272e38;                /*@editable*/ font-family:Helvetica;                /*@editable*/ font-size:12px;				/*@editable*/ line-height:20px;				/*@editable*/ font-weight:normal;				/*@editable*/ margin-top:40px;            }            .bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{			    /*@editable*/ background-color:#36A2FB;				/*@editable*/ padding:16px 50px;                /*@editable*/ color:#fff;                /*@editable*/ font-family:Helvetica;                /*@editable*/ font-size:18px;                /*@editable*/ font-weight:normal;                /*@editable*/ text-decoration:none;            }			        </style>    </head>    <body>        <div class="bodyTable">			<div class="bodyContent">                <h2>Hello '.$GLOBALS['finalfirstname'] . ' ' . $GLOBALS['finallastname'].'</h2>                <h3>Application Id: ' . $GLOBALS['finalusername'] . '</h3>                <h3>'.$lang['automessage_forgot_password_introdution'].'</h3>				<a href="'.$baseurl.'newpassword.php?email='.$finaluseremail.'&token='.$finalpasstoken.'&lang='.$_GET['lang'].'">'.$lang['automessage_forgot_password_link'].'</a>																																				    <p>'.$lang['automessage_forgot_password_mistake'].'</p>                </br>                <p>Regards,</p>                <p>THE NORTHCAP UNIVERSITY - Admissions Team</p>            </div>        </div>    </body></html>';?>