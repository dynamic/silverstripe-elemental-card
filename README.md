# Silverstripe Elemental Card

A simple Bootstrap-style Card for Silverstripe Elemental. Intended for use with Elemental Grid.

[![CI](https://github.com/dynamic/silverstripe-elemental-card/actions/workflows/ci.yml/badge.svg)](https://github.com/dynamic/silverstripe-elemental-card/actions/workflows/ci.yml) [![Sponsors](https://img.shields.io/badge/GitHub-Sponsors-ff69b4?logo=github)](https://github.com/sponsors/dynamic)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-card/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-card/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-card/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-card/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)

## Requirements

* PHP ^8.3
* silverstripe/recipe-cms ^6.0
* dnadesign/silverstripe-elemental ^6.0
* jonom/focuspoint ^6.0
* silverstripe/linkfield ^5.0

## Installation

```bash
composer require dynamic/silverstripe-elemental-card
```

After installation, run `dev/build` and `flush`:

```bash
vendor/bin/sake dev/build flush=all
```

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

## Getting more elements

See [Elemental modules by Dynamic](https://github.com/orgs/dynamic/repositories?q=elemental&type=all&language=&sort=)

## Configuration

See [SilverStripe Elemental Configuration](https://github.com/dnadesign/silverstripe-elemental#configuration)

## Maintainers

 *  [Dynamic](https://www.dynamicagency.com) (<dev@dynamicagency.com>)

## Bugtracker

Bugs are tracked in the issues section of this repository. Before submitting an issue please read over existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

## License

See [License](LICENSE.md)
