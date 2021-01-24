<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

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

.user-image-nav {
    height: 30px;
    width: 30px;
    object-fit: cover;
    border-radius: 50%;
    margin-right: 10px;
}



.sign {
    border: 2px solid #d1d0d0;
    border-radius: 20px;
    padding: 4px 7px 5px 7px;

}

.sign:hover {
    background-color: #2474F1;
    color: white;
    border-color: #2474F1;
    box-shadow: inset rgba(255, 255, 255, 0.1) 0px 2px 0px, inset rgba(255, 255, 255, 0.04) 0px 0px 0px 2px, rgba(0, 0, 0, 0.25) 0px 2px 10px;

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
    font-weight: 600;
    margin: 0;
    color: black;
}

.user-info {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 5px 10px 5px 10px;


}

.user-name {
    font-weight: 700;
}

.user-info:hover {
    border-radius: 20px;
    background-color: #d1d0d0;

}
</style>

<body>
    <nav class="navbar">
        <div class="navBrand">
            <a href="/web/events/" style="text-decoration: none;" class="navbrand-text">
                Invitini
            </a>

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
            <!-- <li class="nav-item">
                <h2 class="nav-item-text" style="color:red;">
                    Logout
                </h2>
            </li> -->
            <li class="nav-item">
                <a href="/web/events/signup" style="text-decoration: none;" class="nav-item-text sign">
                    Sign up
                </a>
            </li>
            <li class="nav-item">
                <a href="/web/events/login" style="text-decoration: none;" class="nav-item-text sign">
                    Log in
                </a>
            </li>
            <li class="nav-item">
                <a class="user-info" href="/web/events/profile" style="text-decoration:none;">
                    <img class="user-image-nav" src="https://addresti-storage.s3.amazonaws.com/1610654110764" />

                    <h2 class="nav-item-text user-name">
                        Amir ghedira
                    </h2>
                </a>
            </li>

        </ul>
    </nav>