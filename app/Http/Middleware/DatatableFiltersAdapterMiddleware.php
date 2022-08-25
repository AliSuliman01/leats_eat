<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DatatableFiltersAdapterMiddleware
{


    public function addFilters(&$request)
    {
        $i = 0 ;
        $filters = $request->get('filter');
        $columns = [];
        foreach (array_keys($filters) as $key){
            $columns[$i]['data'] = $key;
            $columns[$i]['name'] = '';
            $columns[$i]['searchable'] = true;
            $columns[$i]['orderable'] = true;
            $columns[$i]['search']['value'] = $filters[$key];
            $columns[$i]['search']['regex'] = false;
            $i++;
        }
        $request->query->add(['columns' => $columns]);
    }
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('filter')){
            $this->addFilters($request);
        }

        return $next($request);
    }
}
