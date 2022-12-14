<?php
/**
 * Created by PhpStorm.
 * User: mito
 * Date: 16-08-22
 * Time: 22:11
 */

namespace App\Voyager\Dimmers;


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
        $string = trans_choice('dimmer.mensajes', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-chat',
            'title'  => "{$count} {$string}",
            'text'   => __('dimmer.mensajes_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('dimmer.mensajes_link_text'),
                'link' => route('voyager.contactmessages.index'),
            ],
            'image' => asset('images/voyager/widget-backgrounds/messages.jpg'),
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