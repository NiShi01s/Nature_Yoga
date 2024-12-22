<?php
header("Content-Type: text/css");
?>
/* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic Styles */
body {
    background-image: url('bacg.jpeg');
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
    line-height: 1.3;
    color: #060000;
    margin: ;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 20px;
}

img {
    width: 120px;
    height: 120px;
    border-radius: 80%;
    display: inline-flexbox;
}

/* Navigation Styles */
nav {
    background-color: #c8d0cd;
    color: #050117;
}

.nav-links {
    list-style: none;
    float: right;
}

.nav-links li {
    display: inline;
    margin-right: 20px;
}

.nav-links li a {
    color: #070707ef;
    text-decoration: none;
}

nav ul li a:hover {
    padding: 10px;
    background-color: #111512;
    color: #adc0ad;
    transition: 0.5s;
}

/* Hero Section Styles */
.hero {
    background-size: cover;
    background-position: center;
    color: #141313;
    text-align: center;
    padding: 0px 0;
}

.hero h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    background-color: #393c39;
    color: #bec4bf;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    background-color: #4f5a51;
}

/* Classes Section Styles */
.classes {
    padding: 50px 0;
}

.class-card {
    background-color: #e6ebe6;
    padding: 20px;
    margin-bottom: 20px;
}

.class-card h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.class-card p {
    font-size: 16px;
    margin-bottom: 10px;
}

.class-card span {
    font-size: 14px;
    color: #000704;
}

/* Footer Styles */
footer {
    background-color: #d0e2ca;
    color: #000500;
    text-align: center;
    padding: 20px 0;
}

.social-links {
    list-style: none;
}

.social-links li {
    display: inline;
    margin-right: 10px;
}

.social-links li a {
    color: #060101;
    text-decoration: none;
}
