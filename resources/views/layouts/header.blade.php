<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wine</title>
    <link rel="stylesheet" href={{asset('css/font-awesome/css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('bootstrap/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
<body>
<header class="header container">
    <div class="row">
        <div class="navbar-header__wr col-sm-12">
            <div class="site-nav__img-wrapper">
                <a class="site-nav__img-link" href="{{ Request::root() }}"><img class="site-nav__img"
                                                            src={{asset('images/main_logo.png')}} alt="Logo"></a>
            </div>
            <div class="navbar-header">
                <button type="button" class="site-nav__btn navbar-toggle fa fa-bars" data-toggle="collapse"
                        data-target=".navbar-collapse">
                </button>
            </div>

            <div class="site-nav__collapse navbar-collapse navbar-collapse collapse">
                <ul class="site-nav__list">
                    <li class="site-nav__item">
                        <a href="{{ Request::root() }}"
                           @if(Route::currentRouteName() === 'index') class="site-nav__link site-nav__link--current"
                           @else class="site-nav__link" @endif>Wine Market</a>
                    </li>
                    <li class="site-nav__item">
                        <a href="cave"
                           @if(Route::currentRouteName() === 'cave') class="site-nav__link site-nav__link--current"
                           @else class="site-nav__link" @endif>My Cave</a>
                    </li>
                    <li class="site-nav__item">
                        <a class="site-nav__link" href="">Trade History</a>
                    </li>
                    <li class="site-nav__item">
                        <a class="site-nav__link" href="">Wallet</a>
                    </li>
                </ul>
                @if($user)
                    <div class="user-nav__menu-wrapper clearfix">
                        <a class="user-nav__link user-nav__link-userName">{{$user->name}}</a>
                        <a class="user-nav__link user-nav__logout" href="{{ route('logout') }}"><i class="fa fa-user user-nav__logout-icon"
                                                                               aria-hidden="true"></i>Logout</a>
                        <div class="user-nav__menu-btn"><span class="user-nav__menu-btn-text">Setting</span><i
                                    class="user-nav__menu-btn-icon fa fa-cog"></i></div>
                    </div>
                @else
                    <div class="user-nav__menu-wrapper clearfix">
                        <a class="user-nav__link user-nav__logout" href="login"><i class="fa fa-user user-nav__logout-icon"
                                                                               aria-hidden="true"></i>Login</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="user-nav__funds col-sm-12 ">
            <span class="user-nav__funds-title">Balance</span>
            <span class="user-nav__funds-amound user-nav__funds-amound-cwex">23000.55</span>
            <span class="user-nav__funds-amound user-nav__funds-amound-btc">15.5</span>
            <span class="user-nav__funds-amound user-nav__funds-amound-еos">1700.90</span>
            <span class="user-nav__funds-amound user-nav__funds-amound-eth">250.70</span>
            <span class="user-nav__funds-amound user-nav__funds-amound-usdc">30000</span>
        </div>
    </div>
</header>