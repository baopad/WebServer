apt install snapd
snap install core
snap refresh core
snap install --classic certbot
ln -s /snap/bin/certbot /usr/bin/certbot
certbot certonly --apache -d lay.donpau.com
certbot renew --dry-run




    SSLCertificateFile "/etc/letsencrypt/live/lay.donpau.com/fullchain.pem"
    SSLCertificateKeyFile "/etc/letsencrypt/live/lay.donpau.com/privkey.pem"

