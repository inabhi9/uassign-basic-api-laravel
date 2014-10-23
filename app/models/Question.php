<?php

class Question extends Moloquent {

    protected $collection = 'questions';

    // Define dates for mutation
    protected $dates = array('start_date', 'end_date');

}