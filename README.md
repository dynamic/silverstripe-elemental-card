# Silverstripe Elemental Card

A simple Bootstrap-style Card for Silverstripe Elemental. Intended for use with Elemental Grid.

![CI](https://github.com/dynamic/silverstripe-elemental-card/workflows/CI/badge.svg)
[![codecov](https://codecov.io/gh/dynamic/silverstripe-elemental-card/branch/master/graph/badge.svg)](https://codecov.io/gh/dynamic/silverstripe-elemental-card)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-card/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-card/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-card/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-card/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-card)

## Requirements

* SilverStripe ^6.0
* dnadesign/silverstripe-elemental: ^6.0
* silverstripe/linkfield: ^5.0

## Installation

`composer require dynamic/silverstripe-elemental-card`

## License

See [License](LICENSE.md)

## Usage

A simple Bootstrap-style Card for Silverstripe Elemental. Intended for use with Elemental Grid.

### Template Notes

The default templates are based off [Bootstrap 5](https://getbootstrap.com/) card component.

## Upgrading from version 2

ElementCard now uses LinkField v5, which changes the `ElementLink` field from a `DBLink` database field to a `has_one` relationship with the `Link` model. This provides better management and more features for links in SilverStripe 6.

If you're upgrading from version 2, you may need to migrate existing link data. See the [LinkField upgrade documentation](https://github.com/silverstripe/silverstripe-linkfield) for more information.

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
