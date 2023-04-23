<?php

namespace App\Listeners;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\TenantStatusUpdated;
use App\Models\TenantStatus;

/**
 * Summary of TenantStatusUpdatedListener
 */
class TenantStatusUpdatedListener
{
    /**
     * Summary of handle
     * @param TenantStatusUpdated $event
     * @return void
     */
    public function handle(TenantStatusUpdated $event)
    {
        // Retrieve the updated tenant and status from the event
        $tenant = $event->tenant;
        $status = $event->status;

        // Create a new TenantStatus record
        $tenantStatus = new TenantStatus([
            'status' => $status,
        ]);

        // Associate the TenantStatus record with the Tenant model
        $tenant->tenantStatuses()->save($tenantStatus);
    }
}
