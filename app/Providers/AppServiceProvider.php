<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('layouts.sidebar', function ($view) {
            $current_user = auth()->user();
            $view->with('current_user', $current_user);
        });

        View::composer('layouts.default-header', function ($view) {
            $current_user = auth()->user();
            $in_process_status = TaskStatus::where('name', 'In Process')->first()->id;

            $tasks_count =
                Task::where('personal_id', $current_user->id)
                    ->where('status_id', $in_process_status)->get()->count();
            $orders_count =
                Order::where('personal_id', $current_user->id)
                    ->where('status_id', $in_process_status)->get()->count();

            $view->with([
                'tasks_count' => $tasks_count,
                'orders_count' => $orders_count,
            ]);
        });
    }
}
