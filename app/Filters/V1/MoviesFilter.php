<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class MoviesFilter extends ApiFilter
{
    protected $safeParams = [
        'title' => ['eq'],
        'description' => ['eq'],
        'release_date' => ['eq'],
        'duration' => ['eq', 'ne', 'gte', 'lte'],
        'language' => ['eq'],
        'country' => ['eq'],
        'rating' => ['eq', 'ne', 'gt', 'lt', 'gte', 'lte'],
        'poster_url' => ['eq'],
        'trailer_url' => ['eq'],
    ];

    protected $columnMap = [
        'title' => 'title',
        'description' => 'description',
        'releaseDate' => 'release_date',
        'duration' => 'duration',
        'language' => 'language',
        'country' => 'country',
        'rating' => 'rating',
        'posterUrl' => 'poster_url',
        'trailerUrl' => 'trailer_url',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'gt' => '>',
        'gte' => '>=',
        'lte' => '<=',
    ];

    public function transform(Request $request)
    {
        $eloQuery = [];

        foreach ($this->safeParams as $param => $operators) {
            $query = $request->query($param);

            if (!isset($query)) {
                continue;
            }

            $column = $this->columnMap[$param] ?? $param;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [
                        $column,
                        $this->operatorMap[$operator],
                        $query[$operator],
                    ];
                }
            }
        }

        return $eloQuery;
    }
}
