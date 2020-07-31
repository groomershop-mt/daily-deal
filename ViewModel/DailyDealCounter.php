<?php

namespace MageSuite\DailyDeal\ViewModel;

class DailyDealCounter extends \Magento\Framework\DataObject
{
    public function isDailyDealCounterApplicable($dailyDealData, $dailyDealCounterPlace)
    {
        return  $dailyDealData && $dailyDealData['deal'] && ($dailyDealCounterPlace === 'pdp' || ($dailyDealCounterPlace === 'tile' && $dailyDealData['displayType'] === 'badge_counter'));
    }
}
