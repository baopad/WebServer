sudo -i

apt update

// apt remove iptables   reboot

// apt install curl
bash -c "$(curl -L https://github.com/XTLS/Xray-install/raw/main/install-release.sh)" @ install -u root --without-geodata
 
 cat.......................
  
 apt install apache2
apt install snapd
snap install core
snap refresh core
snap install --classic certbot
ln -s /snap/bin/certbot /usr/bin/certbot
certbot certonly --apache -d www.paotung.org -d paotung.org
certbot renew --dry-run

apt install php libapache2-mod-php mariadb-server
a2enmod proxy proxy_wstunnel proxy_http proxy_http2 ssl rewrite headers
systemctl restart apache2
mkdir -p /var/www/www.paotung.org
chmod -R 777 /var/www/www.paotung.org

cat......
a2ensite www.paotung.org.conf
apache2ctl configtest
systemctl reload apache2
systemctl status apache2

crontab -e
0 0 * * * /sbin/reboot

echo "ServerName 127.0.0.1:80" >> /etc/apache2/apache2.conf
echo "ServerTokens Prod" >> /etc/apache2/apache2.conf
echo "ServerSignature Off" >> /etc/apache2/apache2.conf



