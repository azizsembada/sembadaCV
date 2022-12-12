<?php
function navItemDashboard($menu)
{
    $navItem = '';
    if ($menu == 'dashboard') {
        $navItem = 'menu-open';
    }
    return $navItem;
}
function navLinkDashboard($menu)
{
    $navLink = '';
    if ($menu == 'dashboard') {
        $navLink = 'active';
    }
    return $navLink;
}
function navItemMainSkills($menu)
{
    $navItem = '';
    if ($menu == 'main-skills') {
        $navItem = 'menu-open';
    }
    return $navItem;
}
function navLinkMainSkills($menu)
{
    $navLink = '';
    if ($menu == 'main-skills') {
        $navLink = 'active';
    }
    return $navLink;
}
function navItemServices($menu)
{
    $navItem = '';
    if ($menu == 'services') {
        $navItem = 'menu-open';
    }
    return $navItem;
}
function navLinkServices($menu)
{
    $navLink = '';
    if ($menu == 'services') {
        $navLink = 'active';
    }
    return $navLink;
}
function navItemPortFolio($menu)
{
    $navItem = '';
    if ($menu == 'portfolio') {
        $navItem = 'menu-open';
    }
    return $navItem;
}
function navLinkPortfolio($menu)
{
    $navLink = '';
    if ($menu == 'portfolio') {
        $navLink = 'active';
    }
    return $navLink;
}
function navItemSettings($menu)
{
    $navItem = '';
    if ($menu == 'website' || $menu == 'subtitle' || $menu == 'user') {
        $navItem = 'menu-open';
    }
    return $navItem;
}
function navLinkSettings($menu)
{
    $navLink = '';
    if ($menu == 'website' || $menu == 'subtitle' || $menu == 'user') {
        $navLink = 'active';
    }
    return $navLink;
}
function navLinkWebsite($menu)
{
    $navLink = '';
    if ($menu == 'website') {
        $navLink = 'active';
    }
    return $navLink;
}
function navLinkSubTitle($menu)
{
    $navLink = '';
    if ($menu == 'subtitle') {
        $navLink = 'active';
    }
    return $navLink;
}
function navLinkUser($menu)
{
    $navLink = '';
    if ($menu == 'user') {
        $navLink = 'active';
    }
    return $navLink;
}

function checkPDF($pdf)
{
    $download = '';
    if ($pdf != '' || $pdf != null) {
        $download = '<a href="' . $pdf . '" class="btn btn-about"><span>Download CV</span></a>';
    }
    return $download;
}
