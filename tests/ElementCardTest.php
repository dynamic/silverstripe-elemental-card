<?php

namespace Dynamic\Elements\Card\Elements\Test;

use SilverStripe\Forms\FieldList;
use SilverStripe\Dev\SapphireTest;
use Dynamic\Elements\Card\Elements\ElementCard;

class ElementCardTest extends SapphireTest
{
    protected static $fixture_file = 'card.yml';

    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementCard::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
