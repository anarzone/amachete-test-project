<?php


namespace App\Services;


use App\Models\Campaign;
use App\Models\Keyword;
use App\Models\Report;
use App\Models\User;

class GeneralService
{
    private Campaign $campaign;
    private Keyword $keyword;
    private User $user;
    private Report $report;

    public function __construct(
        Campaign $campaign,
        Keyword $keyword,
        User $user,
        Report $report
    )
    {
        $this->campaign = $campaign;
        $this->keyword = $keyword;
        $this->user = $user;
        $this->report = $report;
    }

    public function display_statistics(): array
    {
        return [
            'campaigns' => [
                "active_count" => $this->campaign::where('is_active', true)->get()->count(),
            ],
            'keywords' => [
                "total_count" => $this->keyword::all()->count()
            ],
            'users' => [
                'total_count' => $this->user::all()->count()
            ],
            'reports' => [
                'total_count' => $this->report::all()->count(),
                'most_impressioned_product' => $this->report::orderByDesc('impressions')->first()->productAd,
                'all' => $this->report::all(),
            ]
        ];
    }
}
