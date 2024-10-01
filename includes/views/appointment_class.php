<?php
Class Appointment_Class {

    public $appointmentId;

    function __construct($appointment) {
        $this->appointmentId = $appointment['id'];
    }

    function get__id() {
        return $this->appointmentId;
    }


}