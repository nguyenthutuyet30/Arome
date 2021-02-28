<?php

namespace Watchlearn\Movies\Components;

use Lovata\Shopaholic\Classes\Item\ProductItem;
use Cms\Classes\ComponentBase;
use Input;

class Movie extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'          => 'slider',
            'description'   => 'null',
        ];
    }

    public function onRun()
    {
        $this->page['amount'] = 1;
    }

    public function onGetProduct()
    {
        $id = Input::get('id');
        $product= ProductItem::make($id);
        $offer= $product->offer->first();
        return  $product;
    }
    public function onOffer()
    {
        $id = Input::get('id');
        $product= ProductItem::make($id);
        $offer= $product->offer->first();
        return  $offer;
    }

    public function getDataSlide(){
        $hienthi = $this->property('HienThi');
        ($hienthi)? $slide = \Watchlearn\Movies\Models\Movie::where("status",1)->with('product')->get()->take($hienthi) : $slide = \Watchlearn\Movies\Models\Movie::where("status",1)->get()->take(3);
        return $slide;
    }

    public function defineProperties()
    {
        return [
            "HienThi" => [
                'title'     => 'Số lượng banner',
                'default'   => 3,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Số lượng banner chỉ chứa các kí tự số'
            ],
        ];
    }
}
