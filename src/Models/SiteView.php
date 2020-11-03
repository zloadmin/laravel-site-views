<?php

namespace SiteViews\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Http\Request;
use App\Client;

class SiteView extends Model
{
    protected $table = 'sqr_site_views';
    protected $fillable = [
        'client_id',
        'session_id',
        'url',
        'domain',
        'ip',
        'agent',
    ];

    /**
     * @param Request $request
     */
    static function add(Request $request)
    {

        if ($client_id = self::getClientId()) {
            self::create([
                'client_id' => $client_id,
                'session_id' => session_id(),
                'url' => $request->url(),
                'domain' => $request->getHost(),
                'ip' => $request->ip(),
                'agent' => $request->userAgent(),
            ]);
        }
    }

    static function getClientId(): int
    {
        return Client::getSiteViewId();
    }

}
