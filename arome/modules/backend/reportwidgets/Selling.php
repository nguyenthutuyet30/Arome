<?php namespace Backend\ReportWidgets;

use BackendAuth;
use Backend\Models\AccessLog;
use Backend\Classes\ReportWidgetBase;
use Backend\Models\BrandSetting;
use Exception;
use Lovata\OrdersShopaholic\Models\Order;
use Lovata\Shopaholic\Models\Offer;
use Carbon\Carbon;

/**
 * User welcome report widget.
 *
 * @package october\backend
 * @author Alexey Bobkov, Samuel Georges
 */
class Selling extends ReportWidgetBase
{
    
    const limit = 20;
    /**
     * @var string A unique alias to identify this widget.
     */
    protected $defaultAlias = 'selling';

    /**
     * Renders the widget.
     */
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'backend::lang.dashboard.selling.widget_title_default',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    protected function loadAssets()
    {
        $this->addCss('css/selling.css', 'core');
    }

    protected function loadData()
    {
        $this->vars['user']     = $user = BackendAuth::getUser();
        $this->vars['appName']  = BrandSetting::get('app_name');
        $this->vars['lastSeen'] = AccessLog::getRecent($user);
        $this->vars['order']    = $this->listOfSoldProducts(Order::ListOrderThisMonthHaveRelation()->get());
        $this->vars['thisMonth']    = Carbon::now()->month;
    }

    protected function listOfSoldProducts($listOrder){
        $arr = array();
        foreach($listOrder as $order){
            foreach($order['order_offer'] as $detailProduct){
                $id = $detailProduct->item_id;
                if($this->checkArr($arr,$id)) $arr[$id]->quantity = $arr[$id]->quantity + $detailProduct->quantity;
                else{
                    $offer  = new Offer;
                    $offer  = $detailProduct;
                    $arr[$id] = $offer;
                }
            }
        }
        $arr = $this->selectLimit($this->sortManyToLittleSelling($this->changeKeyArr($arr)),$this::limit);
        return $arr;
    }

    protected function selectLimit($arr, $limit){
        return array_slice($arr, 0 , $limit);
    }

    protected function checkArr($arr,$id){
        try {
            if($arr[$id]->item_id == $id){
                return true;
            }
            else return false;
        } catch (\Throwable $th) {
            return false;
        }
    }

    protected function changeKeyArr($arr){
        $newArr = array();
        $count = 0;
        foreach($arr as $key => $value){
            if(!isset($arr[$count])){
                $newArr[$count++] = $value;
            }
        }
        return $newArr;
    }

    protected function sortManyToLittleSelling($arr){
        $count = count($arr);
        for ($i=0; $i < $count-1 ; $i++) { 
            for ($j = $i+1; $j < $count; $j++) { 
                if($this->CompareAmountSold($arr[$i], $arr[$j]))
                    $arr = $this->swapObjectInArray($arr, $i, $j);
            }
        }
        return $arr;
    }
    
    protected function swapObjectInArray($arr, $i, $j){
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
        return $arr;
    }

    protected function CompareAmountSold($arr1, $arr2){
        if($arr1->quantity < $arr2->quantity) return true;
        return false;
    }
}
