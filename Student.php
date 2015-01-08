<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Georgi
 */
class Student {
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    function toString() {
        $result = '<table border="1">';
        $result .= '<tr><th align="right">';
        $result .= $this->first_name . ' ' . $this->surname;
        $result .= '</th><th align="left">';
        $result .= 'average: '.$this->average()."%";
        $result .= '</th></tr>';
        foreach($this->emails as $which=>$what)
            $result .= '<tr><th align="right">'.$which . '</th><th align="left">'. $what. "</th></tr>";
        $result .= '</table>';
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
