<?php

namespace Watchlearn\Wishlist\Components;

use  Lovata\Shopaholic\Classes\Item\ProductItem;
use Cms\Classes\ComponentBase;
use Input;
use Watchlearn\Wishlist\Models\Wishlish as WislishMD;
use Lovata\Shopaholic\Models\Product;
class Wishlist extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'          => 'Wishlist',
            'description'   => 'null',
        ];
    }

    public function checkWishlist($product_id, $user_id)
    {
        if (WislishMD::where('user_id', $user_id)->where('product_id', $product_id)->exists()) {
            return false;
        }
        return true;
    }

    public function countWishlist($product_id)
    {
        $count = WislishMD::where('product_id', $product_id)->count();
        return $count;
    }

    public function countWishlistUser($user_id)
    {
        $count = WislishMD::where('user_id', $user_id)->count();
        return $count;
    }

    public function findProduct($id_pro){
        $check =Product::where('id',$id_pro)->exists();
        if (!$check) {
            WislishMD::where('product_id', $id_pro)->delete();
            return;
        }
        return ProductItem::make($id_pro);
    }

    public function get($user_id)
    {
        $wl = WislishMD::where('user_id', $user_id)->get();
        return $wl;
    }


    public function onMakeWishlish()
    {
        $wishlist = new WislishMD();
        $wishlist->product_id = Input::get('id');
        $wishlist->user_id = Input::get('user');
        $checkWishlist = $this->checkWishlist($wishlist->product_id, $wishlist->user_id);
        if ($checkWishlist) {
            $wishlist->save();
            $count = $this->countWishlist($wishlist->product_id);
            return  response()->json([
                'status' => 200,
                'wishlist' => $wishlist,
                'count' => $count,
            ]);
        } else {
            return  response()->json(['status' => 500]);
        }
    }
}
