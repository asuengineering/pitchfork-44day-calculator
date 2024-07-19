# 44 Day Tracker Shortcode

A plugin for use with the Faculty website for ASU Engineering. Styled for use with the [Pitchfork theme](https://github.com/asuengineering/pitchfork) for WordPress and the Unity Design Kit from Enterprise Technology.

This plugin registers one shortcode and enqueues one additional JS file to add an event listener for the produced markup on the page.

Requires at least: WP 6.2
Tested up to: 6.2
Requires PHP: 7.3
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

**Contributors**

- Steve Ryan (ASU Engineering)

## Usage Requirements

- Download the lastest release from Github.
- Install in the normal WP location for plugins which is typically `/wp-content/plugins`.

Plugin updates can optionally be managed from the admin dashboard through the use of [Git Updater](https://git-updater.com/).

## Includes

This plugin registers one shortcode with zero extra parameters needed.

`[44day-tracker]` will produce a form element with supporting classes from the Unity Design system for consistent formatting within ASU websites.

### Demo and notes

![44-day-tracker-gif](https://github.com/asuengineering/pitchfork-44day-calculator/assets/2085753/bb7a7387-c0ed-453a-bf67-33f3b08d9d5f)

- The shortcode markup only includes the form element and the related `<dl>` that displays the dates.
- Use other blocks within the Pitchfork theme to add the background color, padding and related heading elements as needed.

## Development

- Run `npm install` and `composer install` prior to local development.
- SASS and JS compile & watch tasks are triggered via Gulp WP and `npx gulp-wp` from the project root.

## Release Notes

See [CHANGELOG.md](CHANGELOG.md) for the a list of all improvements made to this plugin.
