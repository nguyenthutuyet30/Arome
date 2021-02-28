<?php namespace Backend\ReportWidgets;

use BackendAuth;
use Backend\Models\AccessLog;
use Backend\Classes\ReportWidgetBase;
use Backend\Models\BrandSetting;
use Exception;
use Lovata\OrdersShopaholic\Models\Order;
use Carbon\Carbon;
use Request;

/**
 * User welcome report widget.
 *
 * @package october\backend
 * @author Alexey Bobkov, Samuel Georges
 */

class Revenue extends ReportWidgetBase
{
    
    const limit = 20;
    /**
     * @var string A unique alias to identify this widget.
     */
    protected $defaultAlias = 'revenue';

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
                'default'           => 'backend::lang.dashboard.revenue.widget_title_default',
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
        $this->addCss('css/revenue.css');
    }

    protected function loadData()
    {
        $this->vars['user']     = $user = BackendAuth::getUser();
        $this->vars['appName']  = BrandSetting::get('app_name');
        $this->vars['lastSeen'] = AccessLog::getRecent($user);
        $this->vars['revenue']  = $this->getDataRevenue();
       


    }

    protected function getDataRevenue(){
        $revenueMonth = $this->reportRevenueMonth(Order::ListOrderThisMonth()->get());

        $revenueWeek  = $this->reportRevenueWeek(Order::ListOrderThisWeek()->get());

        $revenueYear  = $this->reportRevenueYear(Order::ListOrderThisYear()->get());

        return array($revenueWeek, $revenueMonth, $revenueYear);
    }

    protected function reportRevenueMonth($list){
        $total = 0;
        $arr = array();
        foreach($list as $order){
            $total = $total + str_replace(' ','',$order->total_price);
        }
        array_push($arr, [
            'name'  => 'Tháng ' . Carbon::now()->month,
            'start' => Carbon::now()->firstOfMonth()->format('d-m-Y'),
            'end'   => Carbon::now()->format('d-m-Y'),
            'total' => $total,
        ]);
        return $arr;
    }

    protected function reportRevenueWeek($list){
        $total = 0;
        $arr = array();
        foreach($list as $order){
            $total = $total + str_replace(' ','',$order->total_price);
        }
        array_push($arr, [
            'name'  => 'Tuần ' . Carbon::now()->weekOfMonth . ' của tháng ' . Carbon::now()->month,
            'start' => Carbon::now()->startOfWeek()->format('d-m-Y'),
            'end'   => Carbon::now()->format('d-m-Y'),
            'total' => $total,
        ]);

        return $arr;
    }

    protected function reportRevenueYear($list){
        $arr = array();
        $total = 0;
        foreach($list as $order){
            $total = $total + str_replace(' ','',$order->total_price) *1;
        }
        array_push($arr, [
            'name'  => 'Năm ' . Carbon::now()->year,
            'start' => Carbon::now()->startOfYear()->format('d-m-Y'),
            'end'   => Carbon::now()->format('d-m-Y'),
            'total' => $total,
        ]);
        return $arr;
    }
}

class Report{}
