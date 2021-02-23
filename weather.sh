#!/bin/bash

sudo docker container run --rm -v $(pwd):/app/ bookingkit_php php /app/app/weather.php $1
