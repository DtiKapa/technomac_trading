<?php

class Website {
    // Propriedades
    private $id;
    private $contact;
    private $address;
    private $facebook;
    private $linkedin;
    private $twitter;
    private $youtube;
    private $other;
    private $lat;
    private $long;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getContact() {
        return $this->contact;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getFacebook() {
        return $this->facebook;
    }

    public function setFacebook($facebook) {
        $this->facebook = $facebook;
    }

    public function getLinkedin() {
        return $this->linkedin;
    }

    public function setLinkedin($linkedin) {
        $this->linkedin = $linkedin;
    }

    public function getTwitter() {
        return $this->twitter;
    }

    public function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    public function getYoutube() {
        return $this->youtube;
    }

    public function setYoutube($youtube) {
        $this->youtube = $youtube;
    }

    public function getOther() {
        return $this->other;
    }

    public function setOther($other) {
        $this->other = $other;
    }

    public function getLat() {
        return $this->lat;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function getLong() {
        return $this->long;
    }

    public function setLong($long) {
        $this->long = $long;
    }
}

?>
