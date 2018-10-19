# WP Current Time

Display the current time and/or date with a WordPress shortcode `[current-time]` or `[current-date]`.

## Installation

1. [Download](https://github.com/gregrickaby/WP-Current-Time/archive/master.zip) this plugin
2. Upload/Add this plugin via the WordPress dashboard
3. Activate the `WP Current Time`

## Usage

### Basic Usage

```html
[current-time]
```

Will display the current time in 12-hour format, **based on your web server's time:** `01:00:00`

```html
[current-date]
```

Will display the current date in month/day/year format, **based on your web server's time:** `10/19/2018`

### Advanced Usage

```html
[current-time format="H:i:s" timezone="America/Chicago"]
```

Will display the current time, in 24-hour format, based on the central time zone: `13:00:00`

```html
[current-date format="d/m/Y" timezone="America/Chicago"]
```

Will display the current date, based on the central time zone: `19/10/2018`

To find your time zone, check out the official PHP documentation: https://secure.php.net/manual/en/timezones.php

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
<span class="hour">[current-time format="H:" timezone="America/Chicago"]</span>
<span class="minutes">[current-time format="i:" timezone="America/Chicago"]</span>
<span class="seconds">[current-time format="s" timezone="America/Chicago"]</span>
```

would output:

```html
<span class="hour">14:</span>
<span class="minutes">00:</span>
<span class="seconds">00</span>
```

## Date/Time Format Characters

PHP has several characters available for changing how the format of date and time is displayed.

For example:

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

The full list of characters are available here: https://secure.php.net/manual/en/function.date.php

## Style Notes

The styles are minimal on purpose. There are a few CSS classes available:

`.current-time`

`.current-date`

For more control, see: https://github.com/gregrickaby/WP-Current-Time/#custom-html

-----------

Made with :heart: and lots of :coffee: by [Greg Rickaby](https://gregrickaby.com).