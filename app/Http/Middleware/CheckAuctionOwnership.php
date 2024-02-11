<?php

    namespace App\Http\Middleware;

    use Closure;
    use App\Models\Auction;

    class CheckAuctionOwnership
    {
        public function handle($request, Closure $next)
        {
            $auctionId = $request->route('auction');


            if (!$auctionId || $auctionId->user_id != auth()->id()) {
                abort(403, 'Unauthorized');
            }

            return $next($request);
        }
    }
