#!/bin/bash

mysqldump -uroot -p8jgns3cf west | gzip >  /var/www/backup/west/`date +%Y%m%d$H%M%S`.west.sql.gz
mysqldump -uroot -p8jgns3cf west_gpd | gzip >  /var/www/backup/west/`date +%Y%m%d$H%M%S`.west.gdp.sql.gz
mysqldump -uroot -p8jgns3cf west-dev | gzip >  /var/www/backup/west/`date +%Y%m%d$H%M%S`.west.dev.sql.gz