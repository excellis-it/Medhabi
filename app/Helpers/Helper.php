<?php

namespace App\Helpers;

use App\Models\Menu;
use App\Models\ProgramTypesCMS;
use App\Models\School;

class Helper
{
    public static function getAllSchoolPage()
    {
        return School::orderBy('name', 'asc')->get();
    }

    public static function getPrograms()
    {
        return ProgramTypesCMS::orderBy('name', 'asc')->get();
    }

    // get a recursive function for set parent child relationship
    public static function buildMenu($menus, $parent_id = 0)
    {
        $menu = [];
        foreach ($menus as $key => $value) {
            if ($value['parent_id'] == $parent_id) {
                $children = self::buildMenu($menus, $value['id']);
                if ($children) {
                    $value['children'] = $children;
                }
                $menu[] = $value;
            }
        }
        return $menu;
    }


    public static function getParent($child_id)
    {
        $menu = Menu::find($child_id);

        if (!$menu) {
            return null; // or handle the case where the menu item doesn't exist
        }

        // Initialize an array to store parent names
        $parentNames = [];

        // Recursively find parent names
        self::collectParentNames($menu, $parentNames);

        // Reverse the array to have the last parent first
        $parentNames = array_reverse($parentNames);

        // Concatenate parent names with "<i class='ph ph-arrow-right'></i>" separator
        $parentString = implode(" <i class='fa fa-arrow-right' aria-hidden='true'></i>
        ", $parentNames);

        return $parentString;
    }

    // Recursive function to collect parent names
    private static function collectParentNames($menu, &$parentNames)
    {
        if ($menu->parent_id != 0) {
            $parent = Menu::find($menu->parent_id);
            if ($parent) {
                $parentNames[] = $parent->name;
                self::collectParentNames($parent, $parentNames);
            }
        }
    }

    public static function generateMenuOptions($parentId = 0, $prefix = '', $menu_id = null)
    {
        // Retrieve all menu items with the given parent ID
        $menus = Menu::where('parent_id', $parentId)->get();

        $options = '';

        foreach ($menus as $menu) {
            // Append the option for the current menu item
            $selected = ($menu_id !== null && $menu_id == $menu->id) ? 'selected' : '';
            $options .= '<option value="' . $menu->id . '" ' . $selected . '>' . $prefix . $menu->name . '</option>';

            // Recursively generate options for submenu items
            $options .= self::generateMenuOptions($menu->id, $prefix . '- ', $menu_id);
        }

        return $options;
    }

    public static function generateHeaderMenuOptions($parentId = 0, $prefix = '', $menu_id = null)
    {
        // Retrieve all menu items with the given parent ID
        $menus = Menu::where('parent_id', $parentId)->where(['type' => 'header', 'status' => 1])->get();

        $options = '';

        foreach ($menus as $menu) {
            // Append the option for the current menu item
            $selected = ($menu_id !== null && $menu_id == $menu->id) ? 'selected' : '';
            $options .= '<option value="' . $menu->id . '" ' . $selected . '>' . $prefix . $menu->name . '</option>';

            // Recursively generate options for submenu items
            $options .= self::generateMenuOptions($menu->id, $prefix . '- ', $menu_id);
        }

        return $options;
    }

    public static function getFooterMenuOptions($menu_id = null)
    {
        // Retrieve all menu items with the given parent ID
        $menus = Menu::where('parent_id', 0)->where(['type' => 'footer', 'status' => 1])->get();

        $options = '';

        foreach ($menus as $menu) {
            // Append the option for the current menu item
            $selected = ($menu_id !== null && $menu_id == $menu->id) ? 'selected' : '';
            $options .= '<option value="' . $menu->id . '" ' . $selected . '>' . $menu->name . '</option>';
        }

        return $options;
    }


    public static function generateMenu($menus)
    {
        $html = '';

        foreach ($menus as $menu) {
            $html .= '<li class="has-droupdown">';
            if ($menu->is_custom_link == 1) {
                $html .= '<a href="' . (($menu->slug == null) ? "javascript:void(0);" : $menu->slug) . '">' . $menu->name . '</a>';
            } else {
                $html .= '<a href="' . (($menu->slug == null) ? "javascript:void(0);" : route($menu->slug . '.page', [$menu->slug => $menu->slug])) . '">' . $menu->name . '</a>';
            }
            // $html .= '<a href="#">' . $menu->name . '</a>';

            // Check if the current menu item has children
            if ($menu->children->isNotEmpty()) {
                $html .= '<ul class="submenu">';
                // Recursively generate submenu items
                if ($menu->name != 'Admissions' || $menu->name != 'Schools' || $menu->name != 'Happenings') {
                    $html .= self::generateSubMenu($menu->children, $menu->id);
                }
                $html .= '</ul>';
            }

            if ($menu->name == 'Admissions' || $menu->name == 'Schools' || $menu->name == 'Happenings') {
                $html .= '<ul class="submenu">';
                if ($menu->name == 'Admissions' && count(self::getPrograms()) > 0) {
                    foreach (self::getPrograms() as $key => $value) {
                        $html .= '<li>';
                        $html .= '<a href="' . route($value->slug . '.admission') . '">' . $value->name . '</a>';
                        $html .= '</li>';
                    }
                    $html .= self::generateSubMenu($menu->children, $menu->id);
                }

                if ($menu->name == 'Schools' && count(self::getAllSchoolPage()) > 0) {
                    foreach (self::getAllSchoolPage() as $key => $value) {
                        $html .= '<li>';
                        $html .= '<a href="' . route('school', $value->slug) . '">' . $value->name . '</a>';
                        $html .= '</li>';
                    }
                    $html .= self::generateSubMenu($menu->children, $menu->id);
                }

                if ($menu->name == 'Happenings') {
                    $html .= '<li>';
                    $html .= '<a href="' . route('event') . '">Upcoming Events</a>';
                    $html .= '</li>';
                    $html .= '<li>';
                    $html .= '<a href="' . route('media') . '">Media Coverage</a>';
                    $html .= '</li>';
                    $html .= '<li>';
                    $html .= '<a href="' . route('tvc') . '">TVC</a>';
                    $html .= '</li>';
                    $html .= '<li>';
                    $html .= '<a href="' . route('blogs') . '">Blog</a>';
                    $html .= '</li>';
                    $html .= self::generateSubMenu($menu->children, $menu->id);
                }
                $html .= '</ul>';
            }

            $html .= '</li>';
        }

        $html .= '';

        return $html;
    }

    // Recursive function to generate submenu items
    private static function generateSubMenu($menus, $parent_id)
    {
        $html = '';

        foreach ($menus as $menu) {

            // Append the submenu item
            if ($menu->children->isNotEmpty()) {
                $html .= '<li class="has-droupdown">';
            } else {
                $html .= '<li>';
            }
            if ($menu->is_custom_link == 1) {
                $html .= '<a href="' . (($menu->slug == null) ? "javascript:void(0);" : $menu->slug) . '">' . $menu->name . '</a>';
            } else {
                $html .= '<a href="' . (($menu->slug == null) ? "javascript:void(0);" : route($menu->slug . '.page', [$menu->slug => $menu->slug])) . '">' . $menu->name . '</a>';
            }

            // Check if the current submenu item has children
            if ($menu->children->isNotEmpty()) {
                $html .= '<ul class="submenu">';
                // Recursively generate submenu items
                $html .= self::generateSubMenu($menu->children, $menu->id);
                $html .= '</ul>';
            }

            $html .= '</li>';
        }

        return $html;
    }




    public static function getHeaderMenu()
    {
        $menus = Menu::where('parent_id', 0)->where(['type' => 'header', 'status' => 1])->get();
        return $menus;
    }

    public static function getFooterMenu()
    {
        $menus = Menu::with('children')->where('parent_id', 0)->where(['type' => 'footer', 'status' => 1])->get();
        return $menus;
    }
}
