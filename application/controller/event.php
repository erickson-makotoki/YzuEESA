<?php
class event extends Controller {
    public function north_electric_cup_2014() {
        require 'application/views/event/north-electric-cup-2014.php';
    }

    public function YzuEESA_is_the_BEST($eventName) {
        header('Location:'. URL .'webMan/event/'. $eventName);
        exit;
    }
}
?>