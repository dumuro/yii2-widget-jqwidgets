# yii2-jqwidgets

### Install

Either run

```
$ php composer.phar require derekisbusy/yii2-jqwidgets "*"
```

or add

```
"derekisbusy/yii2-jqwidgets": "*"
```

to the ```require``` section of your `composer.json` file.

# License

yii2-jqwidgets is released under the GNU General Public License. See the bundled LICENSE.md for details.

##Examples

```php
use derekisbusy\jqwidgets\JqWidgets;

echo JqWidgets::widget([
    'type' => 'jqxButton',
    'options' => [
        'theme' => 'energyblue',
        'width' => '150', 
        'height' => '25',
    ],
    'content' => 'test'
]);
```

```php
use derekisbusy\jqwidgets\JqWidgets;

$button = JqWidgets::begin([
    'type' => 'jqxButton',
    'options' => [
        'theme' => 'energyblue',
        'width' => '150', 
        'height' => '25',
    ]
]); ?>
<div id="<?=$button->id?>">test 2</div>
<?php
echo JqWidgets::end();
```

## Options

- **id** the widgets id. Defaults to `type` appended with random id.
- **type** the jQWidget type. Can be one of the following:
 - `JqWidgets::WIDGET_BULLET_CHART` 'jqxBulletChart'
 - `JqWidgets::WIDGET_BUTTONS` 'jqxButtons'
 - `JqWidgets::WIDGET_CALENDAR` 'jqxCalendar'
 - `JqWidgets::WIDGET_CHART` 'jqxChart'
 - `JqWidgets::WIDGET_CHECK_BOX` 'jqxCheckBox'
 - `JqWidgets::WIDGET_COLOR_PICKER` 'jqxColorPicker'
 - `JqWidgets::WIDGET_COMBO_BOX` 'jqxComboBox'
 - `JqWidgets::WIDGET_COMPLEX_INPUT` 'jqxComplexInput'
 - `JqWidgets::WIDGET_DATA_ADAPTER` 'jqxDataAdapter'
 - `JqWidgets::WIDGET_DATA_TABLE` 'jqxDataTable'
 - `JqWidgets::WIDGET_DOCKING` 'jqxDocking'
 - `JqWidgets::WIDGET_DOCKING_LAYOUT` 'jqxDockingLayout'
 - `JqWidgets::WIDGET_DOCK_PANEL` 'jqxDockPanel'
 - `JqWidgets::WIDGET_DRAG_DROP` 'jqxDragDrop'
 - `JqWidgets::WIDGET_DRAW` 'jqxDraw'
 - `JqWidgets::WIDGET_DROP_DOWN_LIST` 'jqxDropDownList'
 - `JqWidgets::WIDGET_EDITOR` 'jqxEditor'
 - `JqWidgets::WIDGET_EXPANDER` 'jqxExpander'
 - `JqWidgets::WIDGET_FILE_UPLOAD` 'jqxFileUpload'
 - `JqWidgets::WIDGET_FORMATTED_INPUT` 'jqxFormattedInput'
 - `JqWidgets::WIDGET_EXPANDER` 'jqxExpander'
 - `JqWidgets::WIDGET_GAUGE` 'jqxGauge'
 - `JqWidgets::WIDGET_GRID` 'jqxGrid'
 - `JqWidgets::WIDGET_INPUT` 'jqxInput'
 - `JqWidgets::WIDGET_LAYOUT` 'jqxlayout'
 - `JqWidgets::WIDGET_LIST_BOX` 'jqxlistbox'
 - `JqWidgets::WIDGET_LIST_MENU` 'jqxListMenu'
 - `JqWidgets::WIDGET_LOADER` 'jqxLoader'
 - `JqWidgets::WIDGET_MASKED_INPUT` 'jqxMaskedInput'
 - `JqWidgets::WIDGET_MENU` 'jqxMenu'
 - `JqWidgets::WIDGET_NAVIGATION_BAR` 'jqxNavigationBar'
 - `JqWidgets::WIDGET_NOTIFICATION` 'jqxNotification'
 - `JqWidgets::WIDGET_NUMBER_INPUT` 'jqxNumberInput'
 - `JqWidgets::WIDGET_OBSERVABLE_ARRAY` 'jqxObservableArray'
 - `JqWidgets::WIDGET_PANEL` 'jqxPanel'
 - `JqWidgets::WIDGET_PASSWORD_INPUT` 'jqxPasswordInput'
 - `JqWidgets::WIDGET_RADIO_BUTTON` 'jqxRadioButton'
 - `JqWidgets::WIDGET_RANGE_SELECTOR` 'jqxRangeSelector'
 - `JqWidgets::WIDGET_RATING` 'jqxRating'
 - `JqWidgets::WIDGET_RESPONSE` 'jqxResponse'
 - `JqWidgets::WIDGET_RESPONSIVE_PANEL` 'jqxResponsivePanel'
 - `JqWidgets::WIDGET_RIBBON` 'jqxRibbon'
 - `JqWidgets::WIDGET_SCHEDULER` 'jqxScheduler'
 - `JqWidgets::WIDGET_SCROLLVIEW` 'jqxScrollView'
 - `JqWidgets::WIDGET_SLIDER` 'jqxSlider'
 - `JqWidgets::WIDGET_SPLITTER` 'jqxSplitter'
 - `JqWidgets::WIDGET_TABS` 'jqxTabs'
 - `JqWidgets::WIDGET_TAG_CLOUD` 'jqxTagCloud'
 - `JqWidgets::WIDGET_TEXTAREA` 'jqxTextArea'
 - `JqWidgets::WIDGET_TOOLBAR` 'jqxToolBar'
 - `JqWidgets::WIDGET_TOOLTIP` 'jqxTooltip'
 - `JqWidgets::WIDGET_TOUCH` 'jqxTouch'
 - `JqWidgets::WIDGET_TREE` 'jqxTree'
 - `JqWidgets::WIDGET_TREE_GRID` 'jqxTreeGrid'
 - `JqWidgets::WIDGET_TEXTAREA` 'jqxTextArea'
 - `JqWidgets::WIDGET_VALIDATOR` 'jqxValidator'
 - `JqWidgets::WIDGET_WINDOW` 'jqxWindow'
 - `JqWidgets::WIDGET_TREE_MAP` 'jqxTreeMap'
- **options** the jQWidgets javascript widget options.
- **content** *(optional)* renders a container div with the string
