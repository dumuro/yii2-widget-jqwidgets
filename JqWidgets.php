<?php

namespace derekisbusy\jqwidgets;

use yii\base\Widget;
use yii\helpers\Json;
use yii\helpers\Html;

/**
 * Class Widgets
 * @package yii2_widget_jqwidgets
 */
class JqWidgets extends Widget
{
    const WIDGET_BULLET_CHART = 'jqxBulletChart';
    const WIDGET_BUTTONS = 'jqxButtons';
    const WIDGET_CALENDAR = 'jqxCalendar';
    const WIDGET_CHART = 'jqxChart';
    const WIDGET_CHECK_BOX = 'jqxCheckBox';
    const WIDGET_COLOR_PICKER = 'jqxColorPicker';
    const WIDGET_COMBO_BOX = 'jqxComboBox';
    const WIDGET_COMPLEX_INPUT = 'jqxComplexInput';
    const WIDGET_DATA_ADAPTER = 'jqxDataAdapter';
    const WIDGET_DATA_TABLE = 'jqxDataTable';
    const WIDGET_DATETIME_INPUT = 'jqxDateTimeInput';
    const WIDGET_DOCKING = 'jqxDocking';
    const WIDGET_DOCKING_LAYOUT = 'jqxDockingLayout';
    const WIDGET_DOCK_PANEL = 'jqxDockPanel';
    const WIDGET_DRAG_DROP = 'jqxDragDrop';
    const WIDGET_DRAW = 'jqxDraw';
    const WIDGET_DROP_DOWN_LIST = 'jqxDropDownList';
    const WIDGET_EDITOR = 'jqxEditor';
    const WIDGET_EXPANDER = 'jqxExpander';
    const WIDGET_FILE_UPLOAD = 'jqxFileUpload';
    const WIDGET_FORMATTED_INPUT = 'jqxFormattedInput';
    const WIDGET_GAUGE = 'jqxGauge';
    const WIDGET_GRID = 'jqxGrid';
    const WIDGET_INPUT = 'jqxInput';
    const WIDGET_LAYOUT = 'jqxlayout';
    const WIDGET_LIST_BOX = 'jqxlistbox';
    const WIDGET_LIST_MENU = 'jqxListMenu';
    const WIDGET_LOADER = 'jqxLoader';
    const WIDGET_MASKED_INPUT = 'jqxMaskedInput';
    const WIDGET_MENU = 'jqxMenu';
    const WIDGET_NAV_BAR = 'jqxNavBar';
    const WIDGET_NAVIGATION_BAR = 'jqxNavigationBar';
    const WIDGET_NOTIFICATION = 'jqxNotification';
    const WIDGET_NUMBER_INPUT= 'jqxNumberInput';
    const WIDGET_OBSERVABLE_ARRAY = 'jqxObservableArray';
    const WIDGET_PANEL = 'jqxPanel';
    const WIDGET_PASSWORD_INPUT = 'jqxPasswordInput';
    const WIDGET_POPOVER = 'jqxPopover';
    const WIDGET_PROGRESS_BAR = 'jqxProgressBar';
    const WIDGET_RADIO_BUTTON = 'jqxRadioButton';
    const WIDGET_RANGE_SELECTOR = 'jqxRangeSelector';
    const WIDGET_RATING = 'jqxRating';
    const WIDGET_RESPONSE = 'jqxResponse';
    const WIDGET_RESPONSIVE_PANEL = 'jqxResponsivePanel';
    const WIDGET_RIBBON = 'jqxRibbon';
    const WIDGET_SCHEDULER = 'jqxScheduler';
    const WIDGET_SCROLLVIEW = 'jqxScrollView';
    const WIDGET_SLIDER = 'jqxSlider';
    const WIDGET_SPLITTER = 'jqxSplitter';
    const WIDGET_TABS = 'jqxTabs';
    const WIDGET_TAG_CLOUD = 'jqxTagCloud';
    const WIDGET_TEXTAREA = 'jqxTextArea';
    const WIDGET_TOOLBAR = 'jqxToolBar';
    const WIDGET_TOOLTIP = 'jqxTooltip';
    const WIDGET_TOUCH = 'jqxTouch';
    const WIDGET_TREE = 'jqxTree';
    const WIDGET_TREE_GRID = 'jqxTreeGrid';
    const WIDGET_VALIDATOR = 'jqxValidator';
    const WIDGET_WINDOW = 'jqxWindow';
    const WIDGET_TREE_MAP = 'jqxTreeMap';
    
    /** @var string  */
    public $id;

    /** @var array */
    public $options = [];
    
    /**
     * the content
     * @var string
     */
    public $content;
    
    public $containerClass;
    
    /**
     * the jQWidget type
     * @var string 
     */
    public $type;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if(!$this->id) {
            $this->id = $this->type.'-'.$this->getId(true);
        }
        $this->registerAsset();
        parent::init();
        
    }

    /**
     * @inheritdoc
     */
    public function registerAsset()
    {
        $view = $this->getView();
        JqWidgetsAsset::register($view);
        
        $init = "jQuery('#{$this->id}').{$this->type}(".Json::encode($this->options).')';

        $view->registerJs($init);
    }
    
    /**
     * @inheritdoc
     */
    public function run(){
        if($this->content) {
            echo Html::beginTag('div', ['id' => $this->id]);
            echo $this->content;
            echo Html::endTag('div');
        }
	}
    
    /**
     * @inheritdoc
     */
    public static function begin($config = array()) {
        return parent::begin($config);
    }
    
    /**
     * @inheritdoc
     */
    public static function end() {
        parent::end();
    }

}