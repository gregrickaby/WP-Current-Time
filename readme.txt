=== WP Current Time ===
Contributors: gregrickaby
Tags: current time, current date
Requires at least: 4.0
Tested up to: 4.9.8
Stable tag: 1.0
Requires PHP: 5.3.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Display the current time and/or date with a WordPress shortcode.

== Description ==

Display the current time and/or date with a WordPress shortcode `[current-time]` or `[current-date]`. Compatible with Gutenberg, the Classic Editor, and Widgets.

== Installation ==

=== From within WordPress ===
1. Visit 'Plugins > Add New'
1. Search for 'WP Current Time'
1. Activate WP Current Time from your Plugins page.

=== Manually ===

1. Upload the `wp-current-time` folder to the `/wp-content/plugins/` directory
1. Activate the WP Current Time plugin through the 'Plugins' menu in WordPress

== Table of Contents ==
- [Basic Usage](#basic-usage)
- [Advanced Usage](#advanced-usage)
    - [Shortcodes](#shortcodes)
    - [Multiple Shortcodes](#multiple-shortcodes)
    - [Custom HTML](#custom-html)
    - [Template Tag](#template-tag)
- [Date/Time Format Characters](#datetime-format-characters)
    - [Common Format Characters](#common-format-characters)
- [Style Notes](#style-notes)
- [Usage examples](#usage-examples)

## Basic Usage

This plugin creates two shortcodes which can be placed into Gutenberg, the Classic Editor, or a text widget.

```html
[current-time]
```

Will display the current time in 12-hour format: `01:00:00`

```html
[current-date]
```

Will display the current date in month/day/year format: `10/19/2018`

> The basic shortcodes use your web server's time. If you need to customize your time zone, see [Advanced Usage](#advanced-usage)

## Advanced Usage

### Shortcodes

```html
[current-time format="H:i:s" timezone="America/Chicago"]
```

Will display the current time, in 24-hour format, based on the central time zone: `13:00:00`

```html
[current-date format="d/m/Y" timezone="America/New_York"]
```

Will display the current date, based on the eastern time zone: `19/10/2018`

> To see the full list of time zones, check out official PHP documentation: https://secure.php.net/manual/en/timezones.php

### Multiple Shortcodes

You can also daisy chain these shortcodes together, for example:

```html
[current-time format="H:" timezone="America/Chicago"]
[current-time format="i:" timezone="America/Chicago"]
[current-time format="s" timezone="America/Chicago"]
```

would output: `14:00:00` based on the central time zone.

### Custom HTML

You can even write your own HTML and CSS in the WordPress text editor:

```html
<time class="hour">[current-time format="H:" timezone="America/Chicago"]</time>
<time class="minutes">[current-time format="i:" timezone="America/Chicago"]</time>
<time class="seconds">[current-time format="s" timezone="America/Chicago"]</time>
```

would output:

```html
<time class="hour">14:</time>
<time class="minutes">00:</time>
<time class="seconds">00</time>
```

### Template Tag

You could even use the following template tags inside your theme:

```php
if ( function_exists( 'wpct\current_time' ) ) {
    echo wpct\current_time( array(
        'format'   => 'H:i:s',
        'timezone' => 'America/Chicago'
    ) );
}
```

would output: `13:00:00`

```php
if ( function_exists( 'wpct\current_date' ) ) {
    echo wpct\current_date( array(
        'format'   => 'm/d/Y',
        'timezone' => 'America/Chicago'
    ) );
}
```

would output: `10/19/2018`

## Date/Time Format Characters

PHP has several characters available for changing how the format of date and time is displayed. For example:

`m/d/Y` = 10/19/2018

`d-m-Y` = 19-10-2018

### Common Format Characters

| Character | Description                                                            | Returned Value           |
| --------- | ---------------------------------------------------------------------- | ------------------------ |
| d         | **Day** of the month, 2 digits with leading zeros                      | 01 to 31                 |
| D         | A textual representation of a **day**, three letters                   | Mon through Sun          |
| l         | A full textual representation of the **day** of the week               | Sunday through Saturday  |
| m         | Numeric representation of a **month**, with leading zeros              | 01 through 12            |
| M         | A short textual representation of a **month**, three letters           | Jan through Dec          |
| F         | A full textual representation of a **month**, such as January or March | January through December |
| y         | A two digit representation of a **year**                               | Examples: 99 or 03       |
| Y         | A full numeric representation of a **year**, 4 digits                  | Examples: 1999 or 2003   |
| h         | 12-hour format of an **hour** with leading zeros                       | 01 through 12            |
| H         | 24-hour format of an **hour** with leading zeros                       | 00 through 23            |
| i         | **Minutes** with leading zeros                                         | 00 to 59                 |
| s         | **Seconds**, with leading zeros                                        | 00 through 59            |
| U         | **Seconds** since the Unix Epoch (January 1 1970 00:00:00 GMT)         | 1539961739               |

> To see the full list of characters, check out official PHP documentation: https://secure.php.net/manual/en/function.date.php

## Style Notes

The styles are minimal on purpose. There are a two CSS classes available:

`.current-time`

`.current-date`

> For more control, see: [Custom HTML](#custom-html)

== Screenshots ==
1. Example usage in Gutenberg
2. Example usage in the Classic Editor
3. Example usage in a text widget

-----------

Made with :heart: and lots of :coffee: by [Greg Rickaby](https://gregrickaby.com).