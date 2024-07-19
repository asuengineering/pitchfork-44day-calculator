# Change Log

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

### Version 1.3.0

- CHANGE: Add new language and labels for provided dates.
- CHANGE: Change build process to Gulp WP instead of WP-Gulp (which is no longer supported).

### Version 1.2

- CHANGE: Remove calculated value and label for +45 day event.
- CHANGE: Enqueue assets for the plugin only if the shortcode is present on the page.

### Version 1.1

- FIX: JS file calculated the incorrect date due to a rounding error with calc value.

### Version 1.0

- Initial deployment of the plugin. v1.0.
- Loaded JS is minimal and only adds the form event listeners when the form element is on the page. An important TODO if the plugin grows to become more complex would be to consider adding conditional loading of the plugin assets based on the presence of the shortcode. The added footprint is only 30 lines of JS so its loaded everyplace.
