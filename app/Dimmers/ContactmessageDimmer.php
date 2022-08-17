<?php
/**
 * Created by PhpStorm.
 * User: mito
 * Date: 16-08-22
 * Time: 22:11
 */

namespace App\Dimmers;


use App\Models\Contactmessage;
use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class ContactmessageDimmer extends BaseDimmer
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
        $count = Contactmessage::count();
        $string = trans_choice('voyager::dimmer.mensajes', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-chat',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.mensajes_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.mensajes_link_text'),
                'link' => route('voyager.contactmessages.index'),
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