<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 首页
     */
    public function index()
    {
        return view('/admin/index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 导航栏
     */
    public function bannerAdd()
    {
        return view('/admin/bannerAdd');
    }




}
