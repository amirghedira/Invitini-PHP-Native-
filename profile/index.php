<style>
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
    min-height: fit-content;
    width: 100%;
    background-color: white;
    border-radius: 7px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    padding: 10px 20px 10px 20px;
}


.main-container {
    background-color: white;
    width: 100%;
    padding: 20px 20px 10px 20px;
    border-radius: 7px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.page-content {
    display: flex;
    align-items: flex-start;
    justify-content: space-around;
    margin-top: 100px;

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

.container {
    padding-top: 50px;
}

.section-container {
    width: 100%;
    height: 100%;
}

.user-background-image {
    width: 100%;
    height: 250px;
    margin-bottom: 20px;
    background-size: cover;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    border-radius: 7px 7px 0 0;
}

.user-background-image:hover .user-navbar {
    display: none;
}

.user-navbar {
    display: flex;
    align-items: center;
    width: 100%;
    height: 50px;
    justify-content: space-around;
    background-color: rgba(0, 0, 0, 0.6);
}

.nav-text {
    font-size: 16px;
    font-weight: 600;
    color: white;
    margin: 0;
}

.activity-content {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin-bottom: 10px;
}

.activity-text {
    color: black;
    font-size: 16px;
    font-weight: 700;
    margin: 0;
}

.event-name {
    color: #2474F1;
    font-weight: 800;
}

.icon-date {
    font-size: 15px;
    margin-right: 10px;
}
</style>
<?php require('../components/head/head.php'); ?>
<main>
    <div class="container">
        <div class="row page-content">
            <div class="col-3 sidebar">
                <div class="section main-section">
                    <div class="main-title">
                        Amir ghedira
                    </div>
                </div>
                <div class="section">

                    <h5 class="title">Joined: </h5>
                    <p class="content-text">active</p>

                </div>
                <div class="section">
                    <h5 class="title">Age: </h5>
                    <p class="content-text">Monastir</p>

                </div>
                <div class="section">

                    <h5 class="title">City: </h5>
                    <p class="content-text">Skanes</p>

                </div>
                <div class="section">

                    <h5 class="title">Region: </h5>
                    <p class="content-text">55901171</p>

                </div>
                <div class="section">

                    <h5 class="title">Phone: </h5>
                    <p class="content-text">20/20/2021</p>

                </div>
                <div class="section">

                    <h5 class="title">Total Participation: </h5>
                    <p class="content-text">55 DT</p>

                </div>
                <div class="section">

                    <h5 class="title">Events created: </h5>
                    <p class="content-text">50</p>

                </div>
                <div class="section">

                    <h5 class="title">Opened events: </h5>
                    <p class="content-text">50</p>

                </div>


            </div>
            <div class="col-8 main-page">
                <div class="main-header">
                    <div class="user-background-image"
                        style="background-image:url('https://addresti-storage.s3.amazonaws.com/1610654110764')">
                        <div class="user-navbar">
                            <h1 class="nav-text"><strong>Amir ghedira</strong></h1>
                            <h1 class="nav-text">Total participations: <strong>5</strong></h1>
                            <h1 class="nav-text">Events created: <strong>4</strong></h1>
                            <h1 class="nav-text">Joined:<strong>12/11/2021</strong></h1>

                        </div>
                    </div>
                </div>
                <div class="main-container">
                    <div class="activity-content">
                        <img class="user-image" src="https://addresti-storage.s3.amazonaws.com/1610654110764" />
                        <h1 class="activity-text">
                            Amir ghedira Created
                            <span class="event-name"> my night</span>

                        </h1>
                    </div>
                    <div class="activity-content">
                        <i class="far fa-clock icon-date"></i>
                        <p class="date-text">20/20/2021</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</main>
<?php include('../components/footer/footer.php'); ?>