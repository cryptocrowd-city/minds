<?php
/**
 * Elgg Profile CSS
 * 
 * @package Profile
 */
?>
.hero > .body > .inner.channel-inner{
	width:100%;
}
.hero > .body > .inner.channel-inner .main, .hero > .body > .inner.channel-inner .main > .elgg-list{
	background:transparent;
}
.minds-channel-layout{
	width:1200px;
	margin: 8px auto;
}
.minds-channel-header-block{
	width: 100%;
	height: auto;
	padding:0;
	margin-bottom:42px;
	clear:both;
}
.minds-channel-header-block > h1{
	font-size:64px;
	line-height:64px;
	text-align:center;
	text-shadow:0 0 3px #FFF;
}
.minds-channel-sidebar-left{
	float:left;
	width:200px;
	height:100%;
	padding:8px;
	box-shadow:0 0 3px #888;
	background:#FFF;
}
.minds-channel-sidebar-left .minds-channel-avatar{
	width:100%;
}
.minds-channel-sidebar-left .channel-social-icons{
	padding:0;
	margin:16px 0;
}
.minds-channel-sidebar-left .channel-social-icons > a.entypo{
	font-size:33px;
}
.minds-channel-content{
	float:left;	
	width:960px;
	margin-left:16px;
	clear:right;
}
.minds-channel-content .main{
	padding:0;
}
.minds-channel-content .elgg-list.x2 {
	padding:0;
}
.minds-channel-content .elgg-list.x2 > li{
	margin:0 0 8px 16px;
	width:436px;
}
.minds-channel-content .elgg-list .minds-channel-post-box > form{
	width:auto;
	padding:0;
	padding-bottom:8px;
}
.elgg-menu-channel li > a{
	padding:8px;
	color:#222;
	border-bottom:1px solid #EEE;
	font-weight:bold;
	vertical-align:middle;
}
.elgg-menu-channel li > a span{
	padding-right:8px;
}
.elgg-menu-channel li > a:hover{
	text-decoration:none;
	background:#EEE;
}
.channel-header{
	position: relative;
	margin: 64px 5% 100px;
	clear: both;
	height: 200px;
}
.landing-page > .channel-header{
	/*margin-bottom:50%;*/
}
.channel-header .avatar{
	float:left;
	height:200px;
	position:relative;
}
.avatar-edit{
	display:block;
	background: #FAFAFA;
	padding: 8px 32px 8px 14px;
	margin: -45px 0 32px;
	box-shadow: 0 0 3px #888;
	clear:both;
	position:absolute;
}
.channel-header .avatar img{
	height:100%;
	width:auto;
	display:block;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	box-shadow: 0 0 3px #888;
	-moz-box-shadow: 0 0 3px #888px;
	-webkit-box-shadow: 0 0 3px #888px;
}
.channel-header .owner-block{
	float:left;
	margin:0 0 0 64px;
	position:relative;
	height:200px;
}
.channel-header .owner-block h1{
	font-size:64px;
	font-weight:lighter;
	line-height:64px;
}
.channel-header .elgg-form-deck-river-post{
	width:400px
}
.channel-header .elgg-form-wall-add textarea{
	font-size:12px;
}
.channel-header .actions{
	float:left;
	margin:16px 60px;
}
.channel-header .actions > div{
	margin:2px 0;
}

.channel-social-icons{
	padding:8px 0;
}
.channel-social-icons > a.entypo{
	font-size: 34px;
color: #888;
font-weight: lighter;
padding: 0 4px;	
}

.channel .minds-body-header{
	margin-bottom:0;
	padding-bottom:0;
}

.channel-filter-menu{
	position:absolute;
	top:0;
	right:0;
}
.channel-filter-menu li{
	text-align:right;
	padding:8px;
	font-size: 16px;
	margin-right:12px;
}
.channel-filter-menu li a.selected{
	color:#4690D6;
	text-decoration:underline;
	font-weight:bold;
}
.channel-filter-menu li a{
	color:#333;
	font-weight:normal;
}
/**
 * Subscribe button
 */
.subscribe-button{
	border: 0;
	overflow: hidden;
	background:#4690D6;
	position:relative;
	font-weight:lighter;
	cursor:pointer;
	width:182px;
	border-radius: 2px;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
}
.subscribe-button > a{
	padding: 8px 16px;
	float:left;
}
.subscribe-button span{
	color:#FFF;
}
.subscribe-button a:hover{
	text-decoration:none;
}
.subscribers-count{
	position: absolute;
	right: 0;
	top: 0;
	background: #333;
	height: 100%;
	padding: 8px 12px 0;
	color:#FFF;
}

/* ***************************************
	Channel Profile
*************************************** */
.profile {
	float:left;
	margin-bottom: 15px;
}
.profile .elgg-inner {
	margin: 0;
	border: 2px solid #eee;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}
#profile-details {
	padding: 15px 0;
}
/*** ownerblock ***/
#profile-owner-block {
	/*float: left;*/
	background-color: #eee;
	padding: 15px;
}
#profile-owner-block .large {
	margin-bottom: 10px;
}
#profile-owner-block .profile-action-menu{
	min-height:20px;
}
#profile-owner-block .profile-action-menu li{
	float:left;
	margin-right:10px;
}
#profile-owner-block .profile-content-menu{
	display:none;
}
.profile-content-menu a {
	display: block;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-content-menu a:hover {
	background: #0054A7;
	color: white;
	text-decoration: none;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper a {
	display: block;
	
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	background-color: #EDEDED;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-admin-menu-wrapper {
	background-color: white;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}
.profile-admin-menu-wrapper li a {
	background-color: white;
	color: #333;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	color: black;
}
/*** profile details ***/
#profile-details .odd {
	margin: 0 0 7px;
	padding: 2px 4px;
}
#profile-details .even {
	margin: 0 0 7px;
	padding: 2px 4px;
}
.profile-aboutme-title {
	background-color:#f4f4f4;
	
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	margin: 0;
	padding: 2px 4px;
}
.profile-aboutme-contents {
	padding: 2px 0 0 3px;
}
.profile-banned-user {
	border: 2px solid red;
	padding: 4px 8px;
	
	-webkit-border-radius: 6px; 
	-moz-border-radius: 6px;
	border-radius: 6px;
}

/**
 * Widget Modifications
 *
 */
.elgg-col-1of2{
	width:48%;
}
#elgg-widget-col-2.elgg-col-1of2{
	float:none;
	min-height:300px;
}
.elgg-module-widget{
	-webkit-border-radius: 6px; 
	-moz-border-radius: 6px;
	border-radius: 6px;
	background:#F2F2F2;
	border-bottom: 2px solid #DEDEDE;
}
.elgg-module-widget > .elgg-head{
	background:transparent;
}
.elgg-module-widget:hover h3, .elgg-module-widget:hover{
	background:#EEE;
}
.elgg-module-widget > .elgg-body{
	border:none;
}

.elgg-widget-add-control{
	display:block;
	width:100%;
	height:25px;
}

/**
 * Channel list layout
 */
.channels .elgg-list {
	padding:0;
	width:100%;
}
.channels .elgg-list li{
	float: left;
	margin: 15px;
	border: 0;
	width: 260px;
	overflow: hidden;
	height: 125px;
	display: block;
	box-shadow:none;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
}

/**
 * Custom Channels
 *
 */
.elgg-form-channel-custom table{
	margin:0 10px;
	width:100%;
}
.elgg-form-channel-custom .elgg-input-file{
	width:100px;
}
.elgg-form-channel-custom .elgg-foot{
	clear:both;
}
.elgg-form-channel-custom{
	clear:both;
	background:#FAFAFA;
	background:rgba(255,255,255, 0.9);
	width:90%;
	margin:0 5%;
	padding:16px;
}
.elgg-form-channel-custom textarea, .elgg-form-channel-custom input[type=text]{
	width:400px;
}
.elgg-form-channel-custom table tr td{
	padding:4px;
	vertical-align:middle;
}
.elgg-form-channel-custom table tr td h3{
	font-size:16px;
	font-weight:bold;
}
.elgg-form-channel-custom table tr td.label{
	font-weight:bold;
	width:100px;
}

.elgg-form-channel-custom table tr td.label > .entypo{
	font-size: 30px;
}

.elgg-input-text.colorpicker{
	width:150px;
}
.elgg-button.elgg-button-action.channel{
	margin-left:5px;
}

/**
 * Subscribed will show a blue colour
 */
.subscribe.subscribed{
	background:#4690D6 !important;
	color:#FFF;
	font-weight:normal;
}
.subscribed:hover{
	background:#4690D6;
	color:#FFF;
}
.elgg-owner-block .subscribe{
	margin:5px 0;
	background:#333;
	clear:both;
	min-width:0;
	float:right;	
}
.elgg-list .subscribe{
	margin:0 -5px;
	background:#333;
}
.subscribe{
	border:0;
}

/**
 * Channel elements dropdown
 */
.elgg-button-channel-elements{
	margin-left:10px;
	color:#FFF;
	background: #333 url(https://www.minds.com/_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-button-channel-elements:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
}
.elgg-menu-channel-elements.owner_block{
	margin-top:-30px;
	width:50px;
}
.elgg-menu-channel-elements{
	float:right;
}
.elgg-menu-channel-elements > ul {
	display: none;
	background-color: rgba(0, 0, 0, 0.75);
}

.elgg-menu-channel-elements:hover > ul {
	display: block;
}

.elgg-menu-channel-elements-dropdown {
	position: absolute;
	right:4px;
	width: 150px;
	border: 1px solid #000;
	z-index:10;

	-webkit-border-radius: 4px 4px 4px 4px;
	-moz-border-radius:	4px 4px 4px 4px;
	border-radius:	4px 4px 4px 4px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}

.elgg-menu-channel-elements-dropdown > li > a {
	color: #CCC;
	
	font-weight: bold;
	text-decoration:none;
	padding: 3px 13px 0px 13px;
	height: 20px;
	
	float:right;
	clear:both;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.elgg-menu-channel-elements-dropdown > li > a:hover {
	/*background: #EEE;*/
    color:#4690D6;
}

.elgg-menu-channel-elements-dropdown > li:last-child > a,
.elgg-menu-channel-elements-dropdown > li:last-child > a:hover {
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}
.elgg-widget-instance-channel_avatar img{
	width:100%;
}
.channel .minds-body-header{
	background:transparent !important;
	opacity:100;
}
.channel .elgg-widget-content .elgg-list-entity .elgg-item{
	width:42% !important;
}

.channel .avatar-page{
	background: rgba(255,255,255,0.9);
	margin: 16px;
	padding: 16px;
}