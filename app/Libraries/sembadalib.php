<?php

namespace App\Libraries;

use App\Models\Settings_model;
use App\Models\SubTitleModel;

class SembadaLib
{
    static $table_settings = 'settings';
    public static function get_site_name()
    {
        return (new Settings_model)->get_value_settings('site_name');
    }
    public static function get_site_logo()
    {
        return (new Settings_model)->get_value_settings('site_logo');
    }
    public static function getImgHero()
    {
        return (new Settings_model)->get_value_settings('image_hero');
    }
    public static function get_profile_name()
    {
        return (new Settings_model)->get_value_settings('profile_name');
    }
    public static function get_profile_picture()
    {
        return (new Settings_model)->get_value_settings('profile_picture');
    }
    public static function get_profile_cv()
    {
        return (new Settings_model)->get_value_settings('profile_cv');
    }
    public static function get_profile_email()
    {
        return (new Settings_model)->get_value_settings('profile_email');
    }
    public static function get_profile_github()
    {
        return (new Settings_model)->get_value_settings('profile_github');
    }
    public static function get_profile_telegram()
    {
        return (new Settings_model)->get_value_settings('profile_telegram');
    }
    public static function get_profile_linkedin()
    {
        return (new Settings_model)->get_value_settings('profile_linkedin');
    }
    public static function get_profile_profession()
    {
        return (new Settings_model)->get_value_settings('profile_profession');
    }
    public static function getSubtitleHero()
    {
        return (new SubTitleModel)->get_value_by_key('hero');
    }
    public static function getSubtitleBio()
    {
        return (new SubTitleModel)->get_value_by_key('bio');
    }
    public static function getSubtitleDescBio()
    {
        return (new SubTitleModel)->get_value_by_key('desc_bio');
    }
    public static function getSubtitleMainSkills()
    {
        return (new SubTitleModel)->get_value_by_key('main_skills');
    }
    public static function getSubtitleServices()
    {
        return (new SubTitleModel)->get_value_by_key('services');
    }
    public static function getSubtitlePortfolio()
    {
        return (new SubTitleModel)->get_value_by_key('portfolio');
    }
    public static function getSubtitleHireMe()
    {
        return (new SubTitleModel)->get_value_by_key('hire_me');
    }
    public static function getSubtitleDescHireMe()
    {
        return (new SubTitleModel)->get_value_by_key('desc_hire_me');
    }
    public static function getSubtitleContact()
    {
        return (new SubTitleModel)->get_value_by_key('contact');
    }
    public static function getSubtitleDescContact()
    {
        return (new SubTitleModel)->get_value_by_key('desc_contact');
    }
    //=============================================================
    // START VALIDATION IMAGE LIBRARY SEMBADA
    //=============================================================
    public function validateImage($img)
    {
        if ($img->guessExtension() == "jpg" || $img->guessExtension() == "jpeg" || $img->guessExtension() == "gif" || $img->guessExtension() == "png") {
            if ($img->getSize() <= 4194304) { // Bytes
                return "valid";
            } else {
                return "notValid";
            }
        } else {
            return "notValid";
        }
    }

    //=============================================================
    // END VALIDATION IMAGE LIBRARY SEMBADA
    //=============================================================

    //=============================================================
    // START PAGNATION LIBRARY SEMBADA
    //=============================================================
    public function setOffset($page, $reqCurrentPage, $recordperPage, $model)
    {
        $currentPage = $page ? $page : 1;
        if ($currentPage == 1) {
            $data['currentPage'] = $currentPage;
            $data['offset'] = 0;
        } elseif ($currentPage == "frist") {
            $data['currentPage'] = 1;
            $data['offset'] = 0;
        } elseif ($currentPage == "last") {
            $data['currentPage'] = ceil($model->getTotalRow() / $recordperPage);
            $data['offset'] = ($data['currentPage'] - 1) * $recordperPage;
        } elseif ($currentPage == "prev") {
            $data['currentPage'] = $reqCurrentPage - 1;
            $data['offset'] = ($data['currentPage'] - 1) * $recordperPage;
        } elseif ($currentPage == "next") {
            $data['currentPage'] = $reqCurrentPage + 1;
            $data['offset'] = $data['currentPage'] * $recordperPage;
        } else {
            $data['currentPage'] = $currentPage;
            $data['offset'] = ($currentPage - 1) * $recordperPage;
        }
        return $data;
    }
    public function pager($currentPage, $recordperPage, $totalRow, $search = null)
    {
        $surroundedPage = 2;
        if ($search == null) {
            $totalPage = ceil($totalRow / $recordperPage);
        } else {
            $totalrow = $totalRow;
            $totalPage = ceil($totalrow / $recordperPage);
        }
        $totalLink = ($surroundedPage * 2) + 1;
        if ($totalPage < $totalLink) {
            $totalLink = $totalPage;
        }
        $link = '<li id="btn_page" class="page-item" page="frist"><a class="page-link" >pertama</a></li><li id="btn_page" class="page-item" page="prev"><a class="page-link" >&laquo;</a></li>';
        if ($totalLink < $totalPage) {
            $checkPrevPage = $currentPage - $surroundedPage;
            if ($checkPrevPage < 0) {
                // Frist page
                $link = '';
                for ($i = 0; $i < $totalLink; $i++) {
                    $page = $i + 1;
                    if ($page == $currentPage) {
                        $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    } else {
                        $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    }
                }
                $link = $link . '<li id="btn_page" class="page-item" page="next"><a class="page-link" >&raquo;</a></li><li id="btn_page" class="page-item" page="last"><a class="page-link" >terakhir</a></li>';
            } elseif ($checkPrevPage > 1) {
                //mid page
                $checkLastPage = $totalPage - $currentPage;
                if ($checkLastPage < $surroundedPage) {
                    if ($checkLastPage > 0) {
                        $checkPrevPage = $totalLink - ($checkLastPage - 1);
                        for ($i = $checkPrevPage; $i < $totalLink; $i++) {
                            $page = $i + 1;
                            if ($page == $currentPage) {
                                $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                            } else {
                                $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                            }
                        }
                    } else {
                        $checkPrevPage = $totalPage - ($totalLink - 1);
                        // last page 2
                        for ($i = $checkPrevPage; $i < $totalLink; $i++) {
                            $page = $i + 1;
                            if ($page == $currentPage) {
                                $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                            } else {
                                $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                            }
                        }
                    }
                }
                $totalLink = $totalLink + ($checkPrevPage - 1);
                for ($i = $checkPrevPage - 1; $i < $totalLink; $i++) {
                    $page = $i + 1;
                    if ($page <= $totalPage) {
                        if ($page == $currentPage) {
                            $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                        } else {
                            $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                        }
                    }
                }
                if ($totalPage != $currentPage) {
                    $link = $link . '<li id="btn_page" class="page-item" page="next"><a class="page-link" >&raquo;</a></li><li id="btn_page" class="page-item" page="last"><a class="page-link" >terakhir</a></li>';
                }
            } elseif ($currentPage == $totalPage) {
                // last page
                for ($i = $checkPrevPage; $i < $totalLink; $i++) {
                    $page = $i + 1;
                    if ($page == $currentPage) {
                        $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    } else {
                        $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    }
                }
            } else {
                for ($i = 0; $i < $totalLink; $i++) {
                    $page = $i + 1;
                    if ($page == $currentPage) {
                        $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    } else {
                        $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    }
                }
                $link = $link . '<li id="btn_page" class="page-item" page="next"><a class="page-link" >&raquo;</a></li><li id="btn_page" class="page-item" page="last"><a class="page-link" >terakhir</a></li>';
            }
        } else {
            $checkPrevPage = $currentPage - $totalLink;
            if ($checkPrevPage <= -1) {
                // Frist page
                $link = '';
                for ($i = 0; $i < $totalLink; $i++) {
                    $page = $i + 1;
                    if ($page == $currentPage) {
                        $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    } else {
                        $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    }
                }
                $link = $link . '<li id="btn_page" class="page-item" page="next"><a class="page-link" >&raquo;</a></li><li id="btn_page" class="page-item" page="last"><a class="page-link" >terakhir</a></li>';
            } elseif ($checkPrevPage == 0) {
                // last page
                for ($i = $checkPrevPage; $i < $totalLink; $i++) {
                    $page = $i + 1;
                    if ($page == $currentPage) {
                        $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    } else {
                        $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    }
                }
            } else {
                for ($i = 0; $i < $totalLink; $i++) {
                    $page = $i + 1;
                    if ($page == $currentPage) {
                        $link = $link . '<li id="btn_page" class="page-item active" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    } else {
                        $link = $link . '<li id="btn_page" class="page-item" page=' . $page . '><a class="page-link" >' . $page . '</a></li>';
                    }
                }
                $link = $link . '<li id="btn_page" class="page-item" page="next"><a class="page-link" >&raquo;</a></li><li id="btn_page" class="page-item" page="last"><a class="page-link" >terakhir</a></li>';
            }
        }
        return $link;
    }
    //=============================================================
    // END PAGNATION LIBRARY SEMBADA
    //=============================================================
}
