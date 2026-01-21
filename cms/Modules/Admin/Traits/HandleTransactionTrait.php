<?php

namespace Cms\Modules\Admin\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait HandleTransactionTrait
{
    /**
     * Execute operation within a database transaction
     *
     * @param callable $callback
     * @param string $successMessage
     * @param string $redirectRoute
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function executeInTransaction(callable $callback, $successMessage = 'Operation success!', $redirectRoute = null)
    {
        try {
            DB::beginTransaction();
            $callback();
            DB::commit();

            if ($redirectRoute) {
                return redirect()->route($redirectRoute)->with('success', $successMessage);
            }

            return back()->with('success', $successMessage);
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ' --- Line: ' . $exception->getLine());

            return back()->withError('An error occurred: ' . $exception->getMessage());
        }
    }
}
