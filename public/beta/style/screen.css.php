<?php
header("Content-type: text/css");
$size = $_REQUEST["size"];
if (!isset($size)) {
	$size = 9;
}
?>

body {
    margin: 0;
    padding: 0;
    color: #1b1f25;
    background: #e4f4fa url(images/bgd-body.jpg) 50% 0 repeat-y;
    font-family: "Lucida Sans", Helvetica, Arial, Sans-Serif;
    font-size: <?php echo $size ?>pt;
}

body * {
    margin: 0;
    padding: 0;
}

a {
    outline: none;
}

#wrapper {
    width: 100%;
    margin: 0 auto;
    padding: 0;
    background: url(images/header.jpg) repeat-x;
}

h1, h2, h3 {
    font-weight: bold;
    line-height: 1.5em;
    margin-bottom: 1em;
}

hr {
    display: none;
}

#header {
    display: block;
    width: 760px;
    margin: 0 auto;
    padding: 0;
    font-size: 90%;
}

#logo {
    display: block;
    position: relative;
    width: 196px;
    height: 96px;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
}

#logo a {
    display: block;
    width: 196px;
    height: 90px;
    margin: 0 auto 0 0;
    background: url(images/logo.jpg) no-repeat 0 0;
}

#logo span {
    display: none;
}

#headline {
    display: block;
    position: relative;
    width: 532px;
    height: 96px;
    top: -96px;
    left: 228px;
    margin: 0;
    padding: 0;
    font-size: 100%;
    font-weight: normal;
    color: #96a2b2;
    margin-bottom: -96px;
    background: url(images/headline.jpg) no-repeat 0 0;
}

#headline span {
    display: none;
}

#container {
    width: 788px;
    margin: 0 auto;
    padding: 0;
    background: url(images/container.jpg) 0 0 no-repeat;
}

#menu {
    display: block;
    float: left;
    width: 172px;
    margin: 32px 10px 0 32px;
    list-style: none;
    font-size: 75%;
    text-transform: uppercase;
}

#menu li {
    margin: 0;
    padding: 0;
    line-height: 2em;
}

#menu li a {
    display: block;
    line-height: 2em;
    margin: 0;
    padding: 4px 18px 3px 18px;
    text-decoration: none;
    border: none;
    color: #1b1f25;
    text-align: right;
    border-bottom: 1px solid #ccd5dc;
}

#menu li.first a {
    border-top: 1px solid #ccd5dc;
}

#menu li a.on, #menu li a.on:hover {
    padding-bottom: 0px;
    font-weight: bold;
    color: #000;
    background: #fff url(images/arrow_blue.jpg) 162px 53% no-repeat;
    border-bottom: 4px solid #d0e583;
    text-align: right;
}

#menu li a.off {
    color: #546174;
}

#menu li a.off:hover {
    color: #1b1f25;
    border-bottom: 1px solid #d0e583;
    background: #f8f8f8;
}

#content {
    display: block;
    float: right;
    width: 510px;
    margin: 32px;
    padding: 0;
}

#content h2, #routeSearch h3 {
    color: #1ea8be;
    text-transform: uppercase;
    font-size: 100%;
    font-family: Georgia, "Times New Roman", Times, Serif;
    border-bottom: 1px solid #ccd5dc;
}

#content h3 {
    font-size: 100%;
    font-family: Georgia, "Times New Roman", Times, Serif;
}

#routeSearch h3 {
    font-size: 90%;
    text-transform: none;
}

#content ul {
    list-style: none;
}

#content li {
    background: url(images/bullet-arrow-blue.jpg) no-repeat 0 0.25em;
    padding-left: 18px;
}

#footer {
    display: block;
    width: 510px;
    margin: 16px 32px 32px 246px;
    clear: both;
    border-top: 1px solid #ccd5dc;
}

#footer p {
    padding: 0;
    height: 3em;
    line-height: 3em;
    font-size: 80%;
    color: #a6b6c2;
    text-align: center;
}

#footer p span.company {
    color: #4e596a;
}

#footer p span.separator {
    color: #ccd5dc;
    margin: 0 0.5em;
}

#footer a {
    color: #8894a6;
    text-decoration: none;
    border-bottom: 1px dotted #ccd5dc;
}

#footer a:hover {
    color: #667488;
    text-decoration: none;
    border-bottom: 1px dotted #48a;
}

#tagline {
    display: block;
    margin: 0 0 0 1em;
    padding: 0 0 0 1em;
    font-weight: bold;
    font-style: italic;
    font-size: 110%;
}

#cadre-map {
    width: 480px;
    height: 360px;
    margin: 0 auto;
    padding: 1px;
    border: 1px solid #ccd5dc;
}

#map {
    width: 480px;
    height: 360px;
}

#routeSearch, #route {
    width: 466px;
    margin: 8px auto 0 auto;
    padding: 8px;
    border: 1px solid #ccd5dc;
}

#route {
	display: none;
	min-height: 32px;
	background: url(images/loading.gif) 50% 50% no-repeat;
}

#route a {
    color: #8894a6;
    text-decoration: none;
    border-bottom: 1px dotted #ccd5dc;
}

#route a:hover {
    color: #667488;
    text-decoration: none;
    border-bottom: 1px dotted #48a;
}

#routeSearch label {
    width: 150px;
}

#routeSearch .buttons {
    padding-left: 166px;
}

#from {
	width: 280px;
}

p {
    line-height: 1.5em;
    margin-bottom: 1.5em;
}

li {
    line-height: 1.5em;
    margin: 0 0.5em 1em 0.5em;
}

dl {
    line-height: 1.5em;
    margin-bottom: 1.5em;
}

dt {
    font-weight: bold;
    line-height: 1.5em;
    margin-bottom: 0.5em;
}

dd {
    line-height: 1.5em;
    margin-bottom: 0.5em;
}

dl.level1 dt {
    font-family: Georgia, "Times New Roman", Times, Serif;
    text-transform: uppercase;
    color: #1ea8be;
    border-bottom: 1px solid #ccd5dc;
}

dl.level1 > dd, dd.level2 > dl > dt {
    margin-left: 12px;
    background: url(images/bullet-square-green-pale.jpg) no-repeat 0 0.55em;
    padding-left: 14px;
}

dl.level1 > dd.level2 {
    background: none;
    margin: 0;
    padding-left: 0;
}

dd.level2 > dl {
    margin-bottom: 0.75em;
}

dd.level2 > dl > dt {
    text-transform: none;
    border-bottom: none;
}

dd.level2 > dl > dt.no-title {
    font-family: "Lucida Grande", Helvetica, Arial, Sans-Serif;
    font-weight: normal;
    color: #1b1f25;
}

dd.level2 > dl > dd {
    margin-left: 3em;
    background: url(images/bullet-square-blue-pale.jpg) no-repeat 0 0.55em;
    padding-left: 14px;
}

dd.publication span.title {
    font-weight: bold;
}

dd.publication span.context {
    display: block;
    font-size: smaller;
    margin-top: -0.25em;
    margin-left: 1em;
    color: #4e596a;
}

/* >> Forms
 ----------------------------------------------- */
input, textarea {
    /* font-family: Verdana, Geneva, Sans-Serif; */
    background: #fbfbfb;
    border: 1px solid #ccd5dc;
	font-size: 85%;
}

input:focus, textarea:focus {
    background: #fff;
    border: 1px solid #97dee9;
}

input.button, input.button:focus {
    padding: 2px 6px;
    font-size: 90%;
    border: 1px outset #aaa;
    background: #e2e7ea;
    outline: none;
}

input.button:hover {
    border: 1px inset #aaa;
    cursor: pointer;
    outline: none;
}

label {
    display: block;
    float: left;
    width: 7em;
    margin: 0 8px;
    padding-top: 6px;
    font-weight: bold;
	font-size: smaller;
}

form {
    display: block;
}

form p {
    margin: 5px 0;
}

form label {
    font-size: smaller;
}

form input.text {
    margin: 5px 5px 1px 0;
    padding: 2px;
    width: 190px;
}

form textarea {
    margin: 5px 5px 1px 0;
    font-size: 1em;
    padding: 2px;
}

form .button {
    width: 90px;
}

form .buttons {
    padding-left: 7em;
}

/* >> Miscellaneous
 ----------------------------------------------- */
code {
    font: 90% "Courier New", Courier, Fixed;
}

blockquote, strike {
    color: #777369;
}

acronym, abbr, span.caps {
    cursor: help;
}

acronym, abbr {
    border-bottom: 1px dotted #99958b;
}

blockquote {
    margin: 15px 30px 0 10px;
    padding-left: 20px;
    border-left: 5px solid #d3d3d3;
}

blockquote cite {
    display: block;
    margin: 5px 0 0;
}

.center {
    text-align: center;
}

.left-space {
    margin-left: 0.5em;
}

.right-space {
    margin-right: 0.5em;
}

.clearfloat {
    display: table;
    width: 100%;
}

span.caps {
    font-size: 0.9em;
    letter-spacing: .07em;
}

.hidden {
    display: none;
}

.bloc {
    margin-bottom: 24px;
    padding-top: 28px;
    background: url(images/separator.jpg) 50% 0 no-repeat;
}

.firstbloc {
    margin-bottom: 24px;
    padding-top: 0;
}

.message {
    width: 250px;
    margin: 16px auto 8px 8.5em;
    padding: 8px 16px;
    font-size: smaller;
    background: #e6f8fa;
}

img.center {
    display: block;
    margin: 0 auto;
}

/* >> vCard
 ----------------------------------------------- */
.vcard {
    width: 20em;
    margin: 0 auto 24px auto;
    padding: 1.5em;
    text-align: center;
    font-size: 100%;
    background: #f8f8f8;
}

.vcard div {
    line-height: 1.5em;
}

.vcard .org {
    font-family: Georgia, "Times New Roman", Times, serif;
    font-weight: bold;
    font-size: 130%;
    color: #1b99ad;
    color: #1ea8be;
}

.vcard .adr {
    font-weight: bold;
}

.vcard .email {
    line-height: 2em;
}

.vcard .telnumber {
    margin-top: 1em;
    font-size: 90%;
}
