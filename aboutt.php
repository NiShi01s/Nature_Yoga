<?php
header("Content-Type: text/css");
?>
/* styles.css */
body {
    background-image:url('hom.jpeg') ;
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #eee2e2;
}

.container {
    width: 80%;
    margin: 0 auto;
}



header {
    background: #333;
    color: rgb(197, 184, 184);
    padding: 0.5rem 0;
}

header h1 {
    display: inline;
}


.about-hero {
    color: rgb(243, 232,     232);
    text-align: center;
    padding: 2rem 0;
}

.about-hero h2 {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.about-hero p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
}

.benefits {
    padding: 0.5rem 0;
    text-align: center;
}

.benefits h2 {
    font-size: 3rem;
    margin-bottom: 4rem;
}

.benefit-card {
    display: inline-block;
    width: 30%;
    margin: 0.3%;
    padding: 1rem;
    border: 1px solid #e8e3e3;
    border-radius: 5px;
    text-align: left;
}

.benefit-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.benefit-card p {
    font-size: 1rem;
}

footer {
    background: #333;
    color: rgb(185, 180, 180);
    text-align: center;
    padding: 1rem 0;
}
