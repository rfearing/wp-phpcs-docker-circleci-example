## Example WordPress Theme with Docker, WordPress Coding Standard &amp; Circleci

### Install Globally
- Docker: brew cask install docker
- Docker-compose: brew install docker-compose

### Install Locally
- Clone Repo
- Run `docker-compose up` at root of project
- Visit `localhost:8000` and run the install

### Using PHPCS WordPress Standard
- Install phpcs:
	- `composer global require "squizlabs/php_codesniffer=*"`
- You need access to global composer installs. In your .zshrc file, ensure you have:
	- `export PATH=~/.composer/vendor/bin:$PATH`
- Install WordPress Standard (installs into ~/wpcs)
	- `git clone https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards.git ~/wpcs`
- Register WordPress Standard
	- `phpcs --config-set installed_paths /Users/<your-user>/wpcs`
- Verify Registered Standards: `phpcs -i`
- Run linter from project root:
	- `phpcs --standard=WordPress wp-content/themes/test-php-linter-theme`

