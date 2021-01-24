<style>
    .carousel-inner {
        height: 350px !important;
    }

    .event-image {
        height: 350px;
        width: 100%;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: cover;
    }

    main {
        padding: 0px 0px 50px 0px !important;
        min-height: 100vh;
    }


    .sidebar {
        min-height: 50vh;
        width: 100%;
        background-color: white;
        border-radius: 7px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        padding: 10px 20px 10px 20px;
    }

    .main-page {
        padding: 20px 0px 20px 0px;

    }


    .main-container {
        background-color: white;
        width: 100%;
        height: 100px;
        min-height: 200px;
        border-radius: 7px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .page-content {
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: 40px;

    }

    .title {
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        margin-right: 5px;
        color: black;
    }

    .main-title {
        font-size: 16px;
        font-weight: 800;
        margin: 0;
        color: black;
    }

    .content-text {
        margin: 0;
        font-size: 14px;
        color: black;
        font-weight: 400;
    }

    .section {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-top: 10px;
    }

    .main-section {
        justify-content: center;
        margin-top: 0;
    }

    .user-image {
        height: 50px;
        width: 50px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 10px;
    }

    .info-text {
        font-size: 14px;
        margin: 0;
    }

    .header-card {
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: flex-start;
        align-self: flex-start;
    }

    .event-desc-text {
        font-size: 16px;
        font-weight: 400;
        color: black;
        white-space: pre-line;
        padding-left: 10px;
        width: 100%;
    }

    .date-text {
        color: grey;
        font-size: 12px;
        margin: 0;

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

    .section-container {
        width: 100%;
        height: 100%;
    }
</style>
<?php require('../components/head/head.php'); ?>
<main>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100 event-image" style="background-image:url(https://addresti-storage.s3.amazonaws.com/1610654110764)" alt="First slide">
                </div>


            </div>
            <div class="carousel-item">
                <div class="d-block w-100 event-image" style="background-image:url(https://addresti-storage.s3.amazonaws.com/1610655746292)" alt="Second slide">
                </div>


            </div>
            <div class="carousel-item">
                <div class="d-block w-100 event-image" style="background-image:url(https://addresti-storage.s3.amazonaws.com/1610656068918)" alt="Third slide">
                </div>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row page-content">
            <div class="col-3 sidebar">
                <div class="section main-section">
                    <div class="main-title">
                        Night party
                    </div>
                </div>
                <div class="section">

                    <h5 class="title">Status: </h5>
                    <p class="content-text">active</p>

                </div>
                <div class="section">

                    <h5 class="title">Price: </h5>
                    <p class="content-text">55 DT</p>

                </div>
                <div class="section">

                    <h5 class="title">Places: </h5>
                    <p class="content-text">50</p>

                </div>
                <div class="section">

                    <h5 class="title">Remaining places: </h5>
                    <p class="content-text">50</p>

                </div>
                <div class="section">

                    <h5 class="title">City: </h5>
                    <p class="content-text">Monastir</p>

                </div>
                <div class="section">

                    <h5 class="title">Region: </h5>
                    <p class="content-text">Skanes</p>

                </div>
                <div class="section">

                    <h5 class="title">Contact: </h5>
                    <p class="content-text">55901171</p>

                </div>
                <div class="section">

                    <h5 class="title">Event date: </h5>
                    <p class="content-text">20/20/2021</p>

                </div>
                <div class="section" style="justify-content: center;">
                    <button class="button">Reserve</button>
                </div>
            </div>
            <div class="col-8 main-page">
                <div class="main-container">
                    <div class="section-container">
                        <div class="header-card">
                            <img class="user-image" src="https://addresti-storage.s3.amazonaws.com/1610654110764" />
                            <div>
                                <h2 class="title">Amir ghedira</h2>
                                <h5 class="date-text">12/01/2021</h5>
                            </div>
                        </div>
                        <div class="section-container">
                            <pre class="event-desc-text">
                    hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                    hhhhhhhhhh h   hhh h h h hh h h h hh h h h h hh h h h hh h hh
                    </pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../components/footer/footer.php'); ?>