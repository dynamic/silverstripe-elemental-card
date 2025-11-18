# Silverstripe Elemental Card

A simple Bootstrap-style Card for Silverstripe Elemental. Intended for use with Elemental Grid.

![CI](https://github.com/dynamic/silverstripe-elemental-card/workflows/CI/badge.svg)
[![GitHub Sponsors](https://img.shields.io/github/sponsors/dynamic?label=Sponsors&logo=GitHub%20Sponsors&style=flat&color=ea4aaa)](https://github.com/sponsors/dynamic)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-card/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-card/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-card/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)

## Requirements

* PHP: ^8.1
* SilverStripe: ^6.0
* dnadesign/silverstripe-elemental: ^6.0
* silverstripe/linkfield: ^5.0

## Installation

`composer require dynamic/silverstripe-elemental-card`

## Features

- **Card Component** - A flexible, reusable Bootstrap 5-style card element
- **Image Support** - Optional images to enhance card visual appeal
- **LinkField Integration** - Call-to-action links supporting internal pages, external URLs, email links, and more
- **Responsive Layout** - Works seamlessly with Elemental Grid for multi-column layouts
- **Customizable Templates** - Override templates to match your design system

## Usage

Elemental Card provides a flexible card component for displaying content with an optional image and link. Each card can include:

- **Title** - The card heading
- **Content** - HTML content for the card body/description
- **Image** - An optional image that enhances the card
- **Link** - An optional call-to-action link using SilverStripe LinkField, supporting internal pages, external URLs, email links, and more

Cards are perfect for:
- Feature highlights
- Team member profiles  
- Product or service showcases
- News or blog post teasers
- Call-to-action blocks

When used with [Elemental Grid](https://github.com/dynamic/silverstripe-elemental-grid), you can create responsive card layouts with multiple cards per row.

### Template Notes

The default templates are based on the [Bootstrap 5](https://getbootstrap.com/) card component, making it easy to integrate with Bootstrap-based themes. You can override the templates in your own theme to match your design system.

## Upgrading from version 2

ElementCard now uses LinkField v5, which changes the `ElementLink` field from a `DBLink` database field to a `has_one` relationship with the `Link` model. This provides better management and more features for links in SilverStripe 6.

If you're upgrading from version 2, you may need to migrate existing link data. See the [LinkField upgrade documentation](https://github.com/silverstripe/silverstripe-linkfield) for more information.

Elemental Card v3 is compatible with SilverStripe 6. See the [SilverStripe 6 Upgrade Guide](https://docs.silverstripe.org/en/6/) for more details on the upgrade process.

## Upgrading from version 1

This module drops `gorriecoe/silverstripe-linkfield` usage in favor of `silverstripe/linkfield`.

## Getting more elements

See [Elemental modules by Dynamic](https://github.com/orgs/dynamic/repositories?q=elemental&type=all&language=&sort=)

## Configuration

See [SilverStripe Elemental Configuration](https://github.com/silverstripe/silverstripe-elemental#configuration)

## Maintainers

 *  [Dynamic](https://www.dynamicagency.com) (<dev@dynamicagency.com>)

## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over
existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version,
 Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
