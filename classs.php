
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
    color: rgb(157, 77, 77);
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
    color: rgb(86, 40, 40);
    text-decoration: none;
}

.class-schedule {
    padding: 3rem 0;
    text-align: center;
}

.class-schedule h2 {
    font-size: 2.5rem;
    margin-bottom: 2rem;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 3rem;
}

table, th, td {
    border: 1px solid #260606;
}

th, td {
    padding: 1rem;
    text-align: left;
}

th {
    background-color: #967d7d;
}

footer {
    background: #333;
    color: rgb(117, 61, 61);
    text-align: center;
    padding: 1rem 0;
}
