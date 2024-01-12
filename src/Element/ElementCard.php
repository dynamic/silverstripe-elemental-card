<?php

namespace Dynamic\Elements\Card\Elements;

use SilverStripe\Forms\HTMLEditor\HtmlEditorField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\LinkField\ORM\DBLink;
use SilverStripe\ORM\FieldType\DBField;
use DNADesign\Elemental\Models\BaseElement;

/**
 * Class \LakeshoreProductions\Element\Card
 *
 * @property bool $Animate
 * @property string $Animation
 * @property string $Duration
 * @property string $Delay
 * @property string $Easing
 * @property string $CardLink
 * @property int $CardImageID
 * @method Image CardImage()
 * @mixin AOSExtension
 */
class ElementCard extends BaseElement
{
    /**
     * @var string
     */
    private static string $table_name = 'ElementCard';

    /**
     * @var string
     */
    private static string $singular_name = 'Card';

    /**
     * @var string
     */
    private static string $plural_name = 'Cards';

    /**
     * @var string
     */
    private static string $description = 'A card element';

    /**
     * @var string
     */
    private static string $icon = 'font-icon-block-content';

    /**
     * @var array|string[]
     */
    private static array $db = [
        'Content' => 'HTMLText',
        'ElementLink' => DBLink::class,
    ];

    /**
     * @var array|string[]
     */
    private static array $has_one = [
        'Image' => Image::class,
    ];

     /**
     * @var array|string[]
     */
    private static array $owns = [
        'Image',
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            $fields->dataFieldByName('Image')
                ->setFolderName('Uploads/Elements/Card');

            $fields->insertBefore('Content', $fields->dataFieldByName('Image'));
            $fields->insertBefore('Content', $fields->dataFieldByName('ElementLink'));
        });

        return parent::getCMSFields();
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return DBField::create_field('HTMLText', $this->HTML)->Summary(20);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return _t(__CLASS__ . '.BlockType', 'Card');
    }
}
