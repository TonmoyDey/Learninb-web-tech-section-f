<?php
require_once('../models/Publication_displaysr.php');
$publicationModel = new PublicationModel();
$publications = $publicationModel->getPublications();
$total = mysqli_num_rows($publications);

if ($total != 0) {
    include('../views/publication_display.php');
} else {
    echo "No publications found.";
}
