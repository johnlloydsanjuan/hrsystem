<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboardIndex()
    {
        $data = [];

        return view('masteradmin.dashboard', $data);
    }

    public function employeesIndex()
    {
        $data = [];

        return view('masteradmin.employees', $data);
    }

    public function positionsIndex()
    {
        $data = [];

        return view('masteradmin.positions', $data);
    }

    public function leavesIndex()
    {
        $data = [];

        return view('masteradmin.leaves', $data);
    }

    public function dtrIndex()
    {
        $data = [];

        return view('masteradmin.dtr', $data);
    }

    public function payrollIndex()
    {
        $data = [];

        return view('masteradmin.payroll', $data);
    }

    public function logsIndex()
    {
        $data = [];

        return view('masteradmin.logs', $data);
    }

    public function profileIndex()
    {
        $data = [];

        return view('masteradmin.profile', $data);
    }

    public function notificationsIndex()
    {
        $data = [];

        return view('masteradmin.notifications', $data);
    }

    public function messagesIndex()
    {
        $data = [];

        return view('masteradmin.messages', $data);
    }
}
