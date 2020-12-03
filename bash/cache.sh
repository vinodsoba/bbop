#pub/static clear frontend
rm -r pub/static/frontend
rm -r var/cache
php bin/magento cache:clean

#backup website
#export mysql database
#today = $(date +%Y-%m-%d)
#mysqldump -u vinnie -p beautybop > beautybop_07012020.sql
