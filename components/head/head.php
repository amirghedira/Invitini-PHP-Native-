<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<style>
* {
    margin: 0;
    outline: none;
}

.button {
    border-radius: 5px;
    color: #2474F1;
    font-size: 16px;
    font-weight: 600;
    background-color: white;
    border: 1px solid #2474F1;

}

.button:hover {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    font-weight: bold;

}

.form-control {
    width: 100%;
    margin: 10px 5px 10px 0px;
    border-radius: 10px;
    padding: 5px 5px 5px 10px;
    border: 1px solid #eeeeee;
}

.form-control:focus {
    border: 2px solid #2474F1;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(36, 116, 241, 0.1)
}

main {
    min-height: 80vh;
    padding: 100px 20px 50px 20px;
    background-color: #F0F2F5;
}


.navbar {

    height: 10vh;
    box-shadow: inset rgba(255, 255, 255, 0.1) 0px 2px 0px, inset rgba(255, 255, 255, 0.04) 0px 0px 0px 2px, rgba(0, 0, 0, 0.25) 0px 2px 10px;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top: 0;
    width: 100%;
    left: 0;
    z-index: 999;
    padding: 0px 40px 0px 40px;
}

.navBrand {
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.navbrand-text {
    font-weight: bold;
    font-size: 29px;
    color: #2474F1;
    margin: 0;
}

.nav-items {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin: 0;
}

.nav-item {
    margin: 0px 10px 0px 10px;
    cursor: pointer;

}

.nav-item-text {
    font-size: 16px;
    font-weight: bold;
    color: black;
}
</style>

<body>
    <nav class="navbar">
        <div class="navBrand">
            <h1 class="navbrand-text">
                Invitini
            </h1>

        </div>
        <ul class="nav-items">
            <li class="nav-item">
                <h2 class="nav-item-text">
                    Events
                </h2>
            </li>
            <li class="nav-item">
                <h2 class="nav-item-text">
                    Profile
                </h2>
            </li>
            <li class="nav-item">
                <h2 class="nav-item-text" style="color:red;">
                    Logout
                </h2>
            </li>

        </ul>
    </nav>