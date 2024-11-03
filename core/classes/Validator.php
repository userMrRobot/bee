<?php

namespace classes;

class Validator
{
//    куда будем записывать ошибки
    protected array $errors = [];
    protected $rules_list = ['required','min','max',];


    public function validate($data = [], $rules = [])
    {
        dump($data);
        dump($rules);
        foreach ($data as $fieldname => $value) {
            if (in_array($fieldname, array_keys($rules))) {
//
                $this->check([
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname]
                ]);
            }
//


        }
        die;
    }

    protected function check($field)
    {

        foreach ($field['rules'] as $rule => $rule_value){
            if(in_array($rule, $this->rules_list)){
                dump($field['fieldname'], $rule, $rule_value);
            }
        }
    }

    protected function required($value, $rule_value)
    {
        return !empty(trim($value));

    }

    protected function min($value, $rule_value)
    {
        return mb_strlen($value) >= $rule_value;

    }

    protected function max($value, $rule_value)
    {
        return mb_strlen($value) <= $rule_value;

    }

    protected function email($value, $rule_value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }











}