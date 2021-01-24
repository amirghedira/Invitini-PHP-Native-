<style>
.navBrand {
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.navbrand-text {
    font-weight: bold;
    font-size: 24px;
    color: black;
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
    width: 500px;
    background-color: white;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

main {
    min-height: 100vh !important;
}
</style>
<?php require('../components/head/head.php'); ?>
<main>

    <div class="container">
        <div class="row main-container">
            <div class="col-6">
                <div class="card">
                    <div class="card-head">
                        <h1 class="navbrand-text" style="color:black;">
                            Create an account
                        </h1>

                    </div>
                    <div class="section">
                        <input class="form-control" placeholder="username" />
                        <input class="form-control" placeholder="lastname" />
                        <input class="form-control" placeholder="firstname" />
                        <input type="number" class="form-control" placeholder="age" />
                        <input type="number" class="form-control" placeholder="phone" />
                        <input type="file" />
                    </div>
                    <div class="section">
                        <button class="button">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../components/footer/footer.php'); ?>