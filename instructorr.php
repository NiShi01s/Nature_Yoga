<?php
header("Content-Type: text/css");
?>
/* styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background: #333;
    color: rgb(58, 8, 8);
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
    color: rgb(40, 38, 38);
    text-decoration: none;
}

.instructors-hero {
    background: url('yoga-instructors.jpg') no-repeat center center/cover;
    color: rgb(21, 13, 13);
    text-align: center;
    padding: 5rem 0;
}

.instructors-hero h2 {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.instructors-hero p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
}

.instructors {
    padding: 3rem 0;
    text-align: center;
    display:inline;
    flex-wrap: wrap;
    justify-content: space-between;
}

.instructor-card {
    width:950px;
    margin-bottom: 2rem;
    border-radius: 5px;
    padding: 1rem;
    text-align: left;
    
}

.instructor-card img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.instructor-card h3 {
    font-size: 1.5rem;
    margin-top: 1rem;
}

.instructor-card p {
    margin: 0.5rem 0;
}

footer {
    background: #333;
    color: rgb(249, 249, 249);
    text-align: center;
    padding: 1rem 0;
}
