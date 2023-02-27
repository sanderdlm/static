### Basic proof-of-concept of creating static binaries of PHP CLI tools

Inside the `bin/` folder, you'll find a [single command Symfony console application](https://symfony.com/doc/current/components/console/single_command_tool.html). Some arbitrary code from inside `src/` is executed from the command.

There is a [GitHub Action](https://github.com/dreadnip/static/blob/master/.github/workflows/php.yml) that builds the binary in `bin/` into a PHAR file, using [box-project/box](https://github.com/box-project/box).

The PHAR is prepended with the micro self-executable SAPI from [phpmicro](https://github.com/dixyes/phpmicro/blob/master/Readme.EN.md).

The resulting binary is preserved as an artifact from each run. Open the last workflow on [this page](https://github.com/dreadnip/static/actions) and you'll find the binary under the artifacts near the bottom.

Download the binary, unzip it and `chmod +x` it.
