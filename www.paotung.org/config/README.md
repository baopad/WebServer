sudo -i

apt update

apt remove iptables

"$ sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 8443 -j ACCEPT
$ sudo netfilter-persistent save"
iptables -I INPUT 1 -p tcp --dport 443 -j ACCEPT
iptables-save

