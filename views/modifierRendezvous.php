<h2>Formulaire de modification du RDV</h2>

<?php

if (count($messages) > 0) {
    foreach ($messages as $message) {
        if ($message["success"]) { ?>
            <p class="alert alert-success"><?= $message["text"] ?></p>
        <?php } else { ?>
            <p class="alert alert-danger"><?= $message["text"] ?></p>
<?php }
    }
}

?>

<main>
    <form action="#" method="POST">
        <label for="datetimeAppointment">Date et horaire du RDV :</label>
        <input type="datetime-local" name="datetimeAppointment" id="datetimeAppointment" class="form-control" value="<?= $appointment->dateHour ?>">

        <select name="patientChoice" id="patientChoice">
                <option value=""disabled hidden selected>Choisir le patient prenant le RDV</option>
                <?php
                foreach($patients as $patient) { ?>
                    <option value="<?= $patient->id ?>" <?= ($patient->id == $appointment->idPatients ? "selected" : "") ?>> <?= $patient->lastname . " " . $patient->firstname ?> </option>;
                <?php }
                ?>
        </select>

        <br/>

        <div class="button">
        <button type="submit" name="submit" class="btn btn-success">Enregistrer le RDV</button>
        </div>
    </form>


</main>