<?php
require('vendor/autoload.php');

use Google\Cloud\Firestore\FirestoreClient;

function firestore()
{
    $db = new FirestoreClient([
        'projectId' => 'citest-318be'
    ]);
    return $db;
}
