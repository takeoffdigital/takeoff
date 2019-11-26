php bin/magento cache:clean
php bin/magento cache:flush
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy en_GB en_US -f
php bin/magento cache:clean
