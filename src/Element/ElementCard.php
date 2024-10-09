<?php

namespace Dynamic\Elements\Card\Elements;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\FieldType\DBField;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\LinkField\Form\LinkField;
use SilverStripe\LinkField\Models\Link;

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
 */
class ElementCard extends BaseElement
{
    /**
     * @var string
     * @config
     */
    private static string $table_name = 'ElementCard';

    /**
     * @var string
     * @config
     */
    private static string $singular_name = 'Card';

    /**
     * @var string
     * @config
     */
    private static string $plural_name = 'Cards';

    /**
     * @var string
     * @config
     */
    private static string $description = 'A card element';

    /**
     * @var string
     * @config
     */
    private static string $icon = 'font-icon-block-content';

    /**
     * @var array|string[]
     * @config
     */
    private static array $db = [
        'Content' => 'HTMLText',
        'Position' => 'Enum("Left, Right, Top", "Left")',
    ];

    /**
     * @var array|string[]
     * @config
     */
    private static array $has_one = [
        'Image' => Image::class,
        'ElementLink' => Link::class,
    ];

     /**
     * @var array|string[]
     * @config
     */
    private static array $owns = [
        'Image',
        'ElementLink',
    ];

    /**
     * @var array
     * @config
     */
    private static $cascade_duplicates = [
        'ElementLink',
    ];

    /**
     * @var array
     * @config
     */
    private static array $cascade_deletes = [
        'ElementLink',
    ];

    /**
     * @param bool $includerelations
     * @return array
     */
    public function fieldLabels($includerelations = true)
    {
        $labels = parent::fieldLabels($includerelations);

        $labels['Title'] = _t(__CLASS__ . '.TitleLabel', 'Title');
        $labels['Content'] = _t(__CLASS__ . '.ContentLabel', 'Description');
        $labels['ElementLink'] = _t(__CLASS__ . '.ElementLinkLabel', 'Link');
        $labels['Position'] = _t(__CLASS__ . '.PositionLabel', 'Image Position');
        $labels['Image'] = _t(__CLASS__ . '.Image', 'Image');


        return $labels;
    }

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            // @phpstan-ignore-next-line
            $fields->dataFieldByName('Content')
                ->setRows(8);

            // @phpstan-ignore-next-line
            $fields->dataFieldByName('Image')
                ->setFolderName('Uploads/Elements/Card');
            $fields->insertBefore('Position', $fields->dataFieldByName('Image'));

            $fields->dataFieldByName('Position')
                ->setDescription(_t(
                    __CLASS__ . 'PositionDescription',
                    'Position of the image in relation to the content. 
                        Image will display on top at smaller breakpoints.'
                ));

            $fields->replaceField(
                'ElementLinkID',
                LinkField::create('ElementLink')
                    ->setTitle($this->fieldLabel('ElementLink'))
            );
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
