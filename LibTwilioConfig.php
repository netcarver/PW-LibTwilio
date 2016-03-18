<?php

class LibTwilioConfig extends ModuleConfig {
    public function getDefaults() {
        return array(
            "id" => "",
            "token" => "",
            "from_number" => ""
        );
    }

    public function getInputfields() {
        $inputfields = parent::getInputfields();

        $f = $this->modules->get('InputfieldText');
        $f->attr('name', 'id');
        $f->label = $this->_('Twilio SID');
        $f->notes = $this->_('From your Twilio Account (at https://www.twilio.com/user/account)');
        $f->columnWidth = 50;
        $inputfields->add($f);

        $f = $this->modules->get('InputfieldText');
        $f->attr('name', 'token');
        $f->label = $this->_('Twilio API Token');
        $f->columnWidth = 50;
        $inputfields->add($f);

        $f = $this->modules->get('InputfieldText');
        $f->attr('name', 'from_number');
        $f->label = $this->_('Your Twilio Number');
        $f->description = $this->_('Will be used as the "from" number when sending messages or starting calls.');
        $inputfields->add($f);

        return $inputfields;
    }
}
