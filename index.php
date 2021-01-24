<?php require('components/head/head.php'); ?>


<style>
.item-container {
    min-height: 400px;
    width: 100%;
    background-color: white;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    border-radius: 7px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px 10px 0px 10px;
    align-items: flex-start;


}

.main-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0px 20px 0px;
}

.title {
    font-size: 18px;
    font-weight: bold;
    margin: 0;

}

.event-desc-text {
    font-size: 16px;
    font-weight: 400;
    color: black;
    white-space: pre-line;
    padding-left: 10px;
    text-overflow: ellipsis;
    width: 100%;
    height: 285px;
}


.card-footer {
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 100%;
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

.date-text {
    color: grey;
    font-size: 12px;
    margin: 0;

}

.section-container {
    width: 100%;
    height: 100%;
}

.button-seemore {
    color: black;
    cursor: pointer;
    font-size: 15px;
    font-weight: bold;
}

.add-event-container {
    min-height: 150px;
    display: block;
}

.add-event-text {
    padding: 10px 10px 0px 10px;
}

.textarea {
    height: 50px;
    width: 100%;
    margin-bottom: 20px;
    background-color: #F0F2F5;
    border: none;
    border-radius: 30px;
    overflow: auto;
    font-size: 14px;
    padding: 10px 20px 10px 20px;
    margin-top: 20px;
}

.section-inputs {
    display: block;
}



.field-label {
    font-size: 14px;
    font-weight: 400;
    margin: 0;
    margin-right: 5px;
}



.header-section {
    display: flex;
    align-items: center;
    justify-content: space-between;

}

.main-date {
    font-size: 18px;
    font-weight: 600;
}

.button-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 20px;
}

.danger {
    color: red;
    border-color: red;
}

.container-input {
    display: none;
}
</style>

<main>
    <div class="container">

        <div class="row main-container">
            <div class="col-12 col-lg-6  item-container add-event-container">

                <div class="container-display">
                    <div class="section-container">
                        <div class="header-card">
                            <div>
                                <h2 class="title add-event-text">Add new event</h2>
                            </div>
                        </div>
                    </div>
                    <div class="section-container">
                        <textarea class="form-control textarea" placeholder="type here your new event..."></textarea>
                    </div>
                </div>
                <div class="container-input">
                    <div class="section-container">
                        <div class="header-card">
                            <div>
                                <h2 class="title add-event-text">Add new event</h2>
                            </div>
                        </div>
                    </div>
                    <input type="text" class="form-control input-title" placeholder="event title" />

                    <div class="section-container">
                        <textarea class="form-control textarea" placeholder="type here your new event..."></textarea>
                    </div>
                    <div class="section-container section-inputs">
                        <input type="text" class="form-control" placeholder="event price" />
                        <input type="text" class="form-control" placeholder="event places" />
                        <input type="text" class="form-control" placeholder="Date" />

                    </div>
                    <div class="section-container button-container">
                        <div style="width:100%;display:flex;align-items:center;justify-content:center;">
                            <p class="field-label">
                                City:
                            </p>
                            <select class="button">
                                <option>skanes</option>
                            </select>
                        </div>
                        <div style="width:100%;display:flex;align-items:center;justify-content:center;">
                            <p class="field-label">
                                Region:
                            </p>
                            <select class="button">
                                <option>Monastir</option>
                            </select>
                        </div>
                    </div>
                    <div style="width:100%;display:flex;align-items:center;justify-content:center;">
                        <input type="file" multiple />
                    </div>

                    <div class="section-container button-container">
                        <button class="button">Submit</button>
                        <button class="button danger cancel-button">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row main-container">
            <div class="col-12 col-lg-6  item-container">
                <div class="section-container header-section">
                    <div class="header-card">
                        <img class="user-image" src="https://addresti-storage.s3.amazonaws.com/1610654110764" />
                        <div>
                            <h2 class="title">Amir ghedira</h2>
                            <h5 class="date-text">12/01/2021</h5>
                        </div>
                    </div>
                    <div>
                        <h5 class="date-text main-date">12/01/2021</h5>

                    </div>
                </div>
                <div class="section-container">
                    <div>
                        <pre class="event-desc-text">
                        this is a new event please join here this is a new event please join herethis is a new event please join herethis is a new event please join here
                        this is a new event please join here this is a new event please join herethis is a new event please join herethis is a new event please join here
                        this is a new event please join here this is a new event please join herethis is a new event please join herethis is a new event please join here
                        this is a new event please join here this is a new event please join herethis is a new event please join herethis is a new event please join here
                        this is a new event please join here this is a new event please join herethis is a new event please join herethis is a new event please join here
                        this is a new event please join here this is a new event please join herethis is a new event please join herethis is a new event please join here
                    </pre>
                    </div>
                </div>
                <div class="card-footer">
                    <div>
                        <h5 class="info-text">
                            Price:<strong>200 DT</strong>
                        </h5>
                    </div>
                    <div>
                        <h5 class="info-text">
                            Remaining Places:<strong>20 places</strong>
                        </h5>
                    </div>
                    <div>
                        <h5 class="info-text">
                            Total Places:<strong>20 places</strong>
                        </h5>
                    </div>
                </div>
                <div class="card-footer">
                    <div>
                        <h5 class="info-text button-seemore">
                            See more
                        </h5>
                    </div>
                </div>

            </div>
        </div>
</main>

<?php include('components/footer/footer.php'); ?>


<script>
const textareaElement = document.querySelector(".textarea");
const containerDiplsay = document.querySelector(".container-display");
const containerInput = document.querySelector(".container-input")
const inputTitle = document.querySelector('.input-title');
const cancelButton = document.querySelector('.cancel-button');
cancelButton.addEventListener('click', () => {
    containerDiplsay.style.display = 'block';
    containerInput.style.display = 'none';
})
textareaElement.addEventListener('focus', () => {
    containerDiplsay.style.display = 'none';
    containerInput.style.display = 'block';
    inputTitle.focus()
})
</script>