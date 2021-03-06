<style>
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

.main-container {
    display: flex;
    align-items: center;
    justify-content: center;

}

.section {
    margin: 10px 0px 10px 0px;
}

.card {
    width: 100%;
    background-color: white;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.invite-img {
    height: 80vh;
    width: 100%;
}

main {
    min-height: 100vh !important;
}
</style>
<?php require('../components/head/head.php'); ?>
<main>

    <div class="container">
        <div class="row main-container">
            <div class="col">
                <img class="invite-img" src="../assets/invite_img.svg" />
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-head">
                        <h1 class="navbrand-text">
                            Invitini
                        </h1>

                    </div>
                    <div class="section">
                        <input class="form-control" placeholder="username" />
                        <input class="form-control" placeholder="password" />

                    </div>
                    <div class="section">
                        <button class="button">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../components/footer/footer.php'); ?>