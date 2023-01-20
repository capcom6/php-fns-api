<a name="readme-top"></a>

<!-- PROJECT SHIELDS -->
[![Version][version-shield]][version-url]
[![Downloads][downloads-shield]][downloads-url]
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![Apache 2.0 License][license-shield]][license-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/capcom6/php-fns-api">
    <img src="docs/logo.png" alt="Logo" height="80">
  </a>

  <h3 align="center">FNS API Client</h3>

  <p align="center">
    Minimal FNS API client for PHP
    <br />
    <!-- <a href="https://github.com/capcom6/php-fns-api"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/capcom6/php-fns-api">View Demo</a>
    · -->
    <a href="https://github.com/capcom6/php-fns-api/issues">Report Bug</a>
    ·
    <a href="https://github.com/capcom6/php-fns-api/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
- [About The Project](#about-the-project)
  - [Built With](#built-with)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Roadmap](#roadmap)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)


<!-- ABOUT THE PROJECT -->
## About The Project

<!-- [![Product Name Screen Shot][product-screenshot]](https://example.com) -->

The client provides access to the FNS API from https://api-fns.ru/

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![PHP][PHP]][PHP-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

You need to setup **HTTPlug** for library users as described in https://docs.php-http.org/en/latest/httplug/users.html.

### Installation

Recommended installation method via Composer:

```
$ composer require softc/fns-api
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

```php
<?php

require 'vendor/autoload.php';

$client = new SoftC\FnsApi\Client(<API_token>);

$companies = $client->egrGet('1032502271548');

var_dump($companies);

```

<!-- _For more examples, please refer to the [Documentation](https://example.com)_ -->

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [ ] Add Changelog
- [ ] Add other fields of [EGR response](https://api-fns.ru/api_help#section_dannye)
- [ ] Add other APIs from https://api-fns.ru/api/

See the [open issues](https://github.com/capcom6/php-fns-api/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the Apache-2.0 license. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Project Link: [https://github.com/capcom6/php-fns-api](https://github.com/capcom6/php-fns-api)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
<!-- ## Acknowledgments

Use this space to list resources you find helpful and would like to give credit to. I've included a few of my favorites to kick things off!

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)
* [React Icons](https://react-icons.github.io/react-icons/search)

<p align="right">(<a href="#readme-top">back to top</a>)</p> -->



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/capcom6/php-fns-api.svg?style=for-the-badge
[contributors-url]: https://github.com/capcom6/php-fns-api/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/capcom6/php-fns-api.svg?style=for-the-badge
[forks-url]: https://github.com/capcom6/php-fns-api/network/members
[stars-shield]: https://img.shields.io/github/stars/capcom6/php-fns-api.svg?style=for-the-badge
[stars-url]: https://github.com/capcom6/php-fns-api/stargazers
[issues-shield]: https://img.shields.io/github/issues/capcom6/php-fns-api.svg?style=for-the-badge
[issues-url]: https://github.com/capcom6/php-fns-api/issues
[license-shield]: https://img.shields.io/github/license/capcom6/php-fns-api.svg?style=for-the-badge
[license-url]: https://github.com/capcom6/php-fns-api/blob/master/LICENSE.txt
[downloads-shield]: https://img.shields.io/packagist/dm/softc/fns-api.svg?style=for-the-badge
[downloads-url]: https://packagist.org/packages/softc/fns-api/stats
[version-shield]: https://img.shields.io/packagist/v/softc/fns-api.svg?style=for-the-badge
[version-url]: https://packagist.org/packages/softc/fns-api
[product-screenshot]: docs/screenshot.png
[PHP]: https://img.shields.io/badge/PHP-000000?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://php.net/