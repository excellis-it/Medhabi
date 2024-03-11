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
}
