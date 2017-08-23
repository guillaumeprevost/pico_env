# pico_env

Pico CMS plugin that make environment variables available in Twig templates and content pages.

## Setup

Clone the Github repository into your PicoCMS 'plugins' directory (so you get a 'pico_env' subdirectory) OR extract the zip into your 'plugins' directory (and rename the new directory to 'pico_env')

## Usage

If you have an environment variable called VARIABLE:

* Twig templates: {{ env.VARIABLE }}
* Content page: %env.VARIABLE%

