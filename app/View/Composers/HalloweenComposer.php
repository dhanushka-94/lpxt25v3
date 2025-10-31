<?php

namespace App\View\Composers;

use Illuminate\View\View;

class HalloweenComposer
{
    /**
     * Check if Halloween theme should be active
     * Active from October 1st until December 1st
     */
    public function isHalloweenActive(): bool
    {
        $now = now();
        $currentMonth = $now->month;
        $currentDay = $now->day;
        
        // Active in October (all month)
        if ($currentMonth === 10) {
            return true;
        }
        
        // Active in November until December 1st
        if ($currentMonth === 11) {
            return true;
        }
        
        // Active in December only until the 1st
        if ($currentMonth === 12 && $currentDay <= 1) {
            return true;
        }
        
        return false;
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('isHalloweenActive', $this->isHalloweenActive());
    }
}
