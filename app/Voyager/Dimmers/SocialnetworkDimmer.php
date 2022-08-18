<?php
/**
 * Created by PhpStorm.
 * User: mito
 * Date: 16-08-22
 * Time: 22:11
 */

namespace App\Voyager\Dimmers;


use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Socialnetwork;
use TCG\Voyager\Facades\Voyager;

class SocialnetworkDimmer extends BaseDimmer
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
        $count = Socialnetwork::count();
        $string = trans_choice('voyager::dimmer.rrss', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bubble-hear',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.rrss_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.rrss_link_text'),
                'link' => route('voyager.socialnetworks.index'),
            ],
            'image' => asset('images/voyager/widget-backgrounds/social_network.jpg'),
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