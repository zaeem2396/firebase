<?php
require 'vendor/autoload.php';
class Firebase_model extends CI_Model {
    function getAllData () {
        $db = firestore();
        $data = $db->collection('users')->documents();
        return $data;
    }

    function uploadFile($file) {
        $data = \Cloudinary\Uploader::upload($file);
		return $data['secure_url'];
    }
}
