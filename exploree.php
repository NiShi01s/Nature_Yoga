<?php
header("Content-Type: text/css");
?>
/* Reset Styles */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: hsl(0, 100%, 2%);
    
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background: #333;
    color: rgb(1, 0, 0);
    padding: 1rem 0;
}

header h1 {
    display: inline;
}

nav ul {
    list-style: none;
    float: right;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-left: 1rem;
}

nav ul li a {
    color: rgb(14, 0, 0);
    text-decoration: none;
}
.previous{
    width: 300px;
    height: 300px;
}
.explore-hero {
    background: url('yoga-explore.jpg') no-repeat center center/cover;
    color: rgb(4, 0, 0);
    text-align: center;
    padding: 2rem 0;
}

.explore-hero h2 {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.explore-hero p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
}

.workshops, .previous-classes, .yoga-team {
    padding: 3rem 0;
    text-align: center;
}

.workshop-card, .class-card, .team-member {
    margin-bottom: 2rem;
    border: 1px solid #0a0000;
    border-radius: 5px;
    padding: 1rem;
    text-align: left;
    
}

.team-member img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

h3 {
    font-size: 2rem;
    margin-bottom: 1.5rem;
}

h4 {
    font-size: 1.5rem;
    margin-top: 1rem;
}

footer {
    background: #333;
    color: #040000;
    text-align: center;
    padding: 1rem 0;
}
