<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MNHcC\Model {

    use Zend\Form\Annotation;

    /**
     * Student
     *
     * @author MNHcC  - Michael Hegenbarth (carschrotter) <mnh@mn-hegenbarth.de>
     * @copyright 2015, MNHcC  - Michael Hegenbarth (carschrotter) <mnh@mn-hegenbarth.de>
     * @license default
     * 
     * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
     * @Annotation\Name("Student")
     */
    class Customer {

	/**
	 * @Annotation\Type("Zend\Form\Element\Text")
	 * @Annotation\Required({"required":"true"})
	 * @Annotation\Filter({"name":"StripTags"})
	 * @Annotation\Filter({"name":"StringToUpper"})
	 * @Annotation\Validator({"name":"StringLength", "options":{"min":"5"}})
	 * @Annotation\Options({"label":"Absent Id:"})
	 */
	public $absentid;

	/**
	 * @Annotation\Type("Zend\Form\Element\Text")
	 * @Annotation\Required({"required":"true" })
	 * @Annotation\Filter({"name":"StripTags"})
	 * @Annotation\Validator({"name":"StringLength", "options":{"min":"1"}})
	 * @Annotation\Options({"label":"Name:"})
	 */
	public $name;

	/**
	 * @Annotation\Type("Zend\Form\Element\Radio")
	 * @Annotation\Required({"required":"true" })
	 * @Annotation\Filter({"name":"StripTags"})
	 * @Annotation\Options({"label":"Gender:",
	 *                      "value_options" : {"1":"Male","2":"Female"}})
	 * @Annotation\Validator({"name":"InArray",
	 *                        "options":{"haystack":{"1","2"},
	 *                              "messages":{"notInArray":"Gender is not valid"}}})
	 * @Annotation\Attributes({"value":"1"})
	 */
	public $gender;

	/**
	 * @Annotation\Type("Zend\Form\Element\Select")
	 * @Annotation\Required({"required":"true" })
	 * @Annotation\Filter({"name":"StripTags"})
	 * @Annotation\Options({"label":"Class:",
	 *                      "value_options" : {"0":"Select a Class","1":"A","2":"B","3":"C"}})
	 * @Annotation\Validator({"name":"InArray",
	 *                        "options":{"haystack":{"1","2","3"},
	 *                              "messages":{"notInArray":"Please Select a Class"}}})
	 * @Annotation\Attributes({"value":"0"})
	 */
	public $class;

	/**
	 * @Annotation\Type("Zend\Form\Element\Submit")
	 * @Annotation\Attributes({"value":"Submit"})
	 */
	public $submit;

    }

}
