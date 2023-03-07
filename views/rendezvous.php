<h2>Fiche RDV</h2>

<p>Numéro du RDV : <?= $appointment->id ?></p>
<p>Date et heure du RDV : <?= $appointment->dateHour ?></p>

<p>Nom du patient : <?= $appointment->patient->lastname ?></p>
<p>Prénom du patient : <?= $appointment->patient->firstname ?></p>
<p>Date de naissance du patient du patient : <?= $appointment->patient->displayDate() ?></p>
<p>Adresse email du patient : <?= $appointment->patient->mail ?></p>
<p>Numéro de téléphone du patient : <?= $appointment->patient->phone ?></p>

<hr/>
<p class="linkBookAppointment">Retour à la liste des RDV <a href="/listeRendezvous.php">ICI</a>.</p>