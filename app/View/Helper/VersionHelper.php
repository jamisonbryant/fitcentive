<?php

/**
 * Version helper
 *
 * Helps views to access application version information for debugging/informational purposes.
 *
 * @todo (jbryant): Implement function for constructing version string w/ custom format
 *
 * @author    Jamison Bryant <jbryant@capitolwebsites.com>
 * @copyright Copyright (c) Capitol Websites. All rights reserved.
 * @package   app.View.Helper
 */
class VersionHelper extends AppHelper
{
    /**
     * Returns a constructed version string (short format).
     *
     * @return string Long version string (branch-vX.Y.Z-suffix)
     */
    public function long()
    {
        // Construct version string
        $version = Configure::read('Version.branch') . '-v';
        $version .= Configure::read('Version.major') . '.';
        $version .= Configure::read('Version.minor') . '.';
        $version .= Configure::read('Version.patch');
        $version .= !empty(Configure::read('Version.suffix')) ? '-' . Configure::read('Version.suffix') : '';

        // Return string
        return $version;
    }

    /**
     * Returns a constructed version string (short format).
     *
     * @return string Short version string (vX.Y.Z)
     */
    public function short()
    {
        // Construct version string
        $version = 'v';
        $version .= Configure::read('Version.major') . '.';
        $version .= Configure::read('Version.minor') . '.';
        $version .= Configure::read('Version.patch');

        // Return string
        return $version;
    }
}