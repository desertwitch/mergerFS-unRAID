<?
/* Copyright Derek Macias (parts of code from NUT package)
 * Copyright macester (parts of code from NUT package)
 * Copyright gfjardim (parts of code from NUT package)
 * Copyright SimonF (parts of code from NUT package)
 * Copyright Dan Landon (parts of code from Web GUI)
 * Copyright Bergware International (parts of code from Web GUI)
 * Copyright Lime Technology (any and all other parts of Unraid)
 *
 * Copyright desertwitch (as author and maintainer of this file)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 2
 * as published by the Free Software Foundation.
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 */
function msfp_humanFileSize($sizeObj,$unit="") {
    try {
        $size = intval($sizeObj);
        if($size) {
            if( (!$unit && $size >= 1000000000000) || $unit == "TB")
                return rtrim(rtrim(number_format(($size/1000000000000),2), "0"), ".") . " TB";
            if( (!$unit && $size >= 1000000000) || $unit == "GB")
                return rtrim(rtrim(number_format(($size/1000000000),2), "0"), ".") . " GB";
            if( (!$unit && $size >= 1000000) || $unit == "MB")
                return rtrim(rtrim(number_format(($size/1000000),2), "0"), ".") . " MB";
            if( (!$unit && $size >= 1000) || $unit == "KB")
                return rtrim(rtrim(number_format(($size/1000),2), "0"), ".") . " KB";
            return number_format($size) . " B";
        } else {
            return "-";
        }
    } catch (Throwable $e) { // For PHP 7
        return "-";
    } catch (Exception $e) { // For PHP 5
        return "-";
    }
}
?>
