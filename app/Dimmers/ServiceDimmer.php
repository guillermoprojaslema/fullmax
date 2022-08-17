<?php
/**
 * Created by PhpStorm.
 * User: mito
 * Date: 16-08-22
 * Time: 22:11
 */

namespace App\Dimmers;


use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Models\Service;

class ServiceDimmer extends BaseDimmer
{

    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Service::count();
        $string = trans_choice('voyager::dimmer.servicios', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-star',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.servicios_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.servicios_link_text'),
                'link' => route('voyager.services.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}