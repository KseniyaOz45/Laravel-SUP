<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrapFour();
        //
        View::composer('layouts.sidebar', function ($view) {
            $current_user = auth()->user();
            $view->with('current_user', $current_user);
        });

        View::composer('layouts.default-header', function ($view) {
            $current_user = Auth::user();
            $in_process_task_status = TaskStatus::where('name', 'In processing')->first()->id;
            $in_process_order_status = OrderStatus::where('name', 'In processing')->first()->id;
            $accepted_task_status = TaskStatus::where('name', 'Accepted')->first()->id;
            $accepted_order_status = OrderStatus::where('name', 'Accepted')->first()->id;

            $tasks_count =
                Task::where('personal_id', $current_user->id)
                    ->where(function ($query) use ($in_process_task_status, $accepted_task_status) {
                        $query->where('status_id', $in_process_task_status)
                            ->orWhere('status_id', $accepted_task_status);
                    })->count();

            // Исправляем запрос для подсчета заказов
            $orders_count = Order::where('personal_id', $current_user->id)
                ->where(function ($query) use ($in_process_order_status, $accepted_order_status) {
                    // Это условие гарантирует, что ищем заказы с любым из двух статусов только для текущего пользователя
                    $query->where('status_id', $in_process_order_status)
                        ->orWhere('status_id', $accepted_order_status);
                })
                ->count();

            $view->with([
                'tasks_count' => $tasks_count,
                'orders_count' => $orders_count,
            ]);
        });

    }
}
