<?php

namespace app\common\components\validators;

use Phalcon\Mvc\Model\Validator,
    Phalcon\Mvc\Model\ValidatorInterface;

class Unique extends Validator implements ValidatorInterface {

    public function validate(\Phalcon\Mvc\EntityInterface $record) {
        $field = $this->getOption('field');
        if ($record->count(['conditions' => [$field => $record->readAttribute($field)]])) {
            $this->appendMessage("The " . $field . " must be unique", $field, "Unique");
            return false;
        }
        return true;
    }

}
