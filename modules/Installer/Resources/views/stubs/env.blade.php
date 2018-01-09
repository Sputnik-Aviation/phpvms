<?php exit(); ?>

#
# Before you go live, remember to change the APP_ENV to production
# and APP_DEBUG to false. Adjust logging to taste
#

APP_ENV={!! $APP_ENV !!}
APP_URL=http://localhost
APP_SKIN=default
APP_KEY=base64:{!! $APP_KEY !!}
APP_DEBUG=true
APP_LOCALE=en

PHPVMS_INSTALLED=true
PHPVMS_VA_NAME="phpvms"
VACENTRAL_API_KEY=
CHECKWX_API_KEY=

APP_LOG=daily
APP_LOG_LEVEL=debug
APP_LOG_MAX_FILES=3

DB_CONNECTION={!! $DB_CONN !!}
DB_HOST={!! $DB_HOST !!}
DB_PORT={!! $DB_PORT !!}
DB_DATABASE={!! $DB_NAME !!}
DB_USERNAME={!! $DB_USER !!}
DB_PASSWORD={!! $DB_PASS !!}
DB_PREFIX=

MAIL_DRIVER=smtp
MAIL_FROM_ADDRESS=no-reply@phpvms.net
MAIL_FROM_NAME="phpVMS Admin"
MAIL_HOST=
MAIL_PORT=
MAIL_ENCRYPTION=
MAIL_USERNAME=
MAIL_PASSWORD=

CACHE_ENABLED=false
CACHE_DRIVER={!! $CACHE_DRIVER !!}
CACHE_PREFIX=phpvms

SESSION_DRIVER=file
QUEUE_DRIVER={!! $QUEUE_DRIVER !!}
